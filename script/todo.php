<?php

class Storage
{
    public function directories(string $path): DirectoryIterator
    {
        return new DirectoryIterator(
            $this->realpath($path)
        );
    }

    public function getDecodedJson(string $filename)
    {
        return file_exists($filename)
            ? json_decode(file_get_contents($filename), true)
            : null;
    }

    public function load(string $path)
    {
        return include $this->realpath($path);
    }

    public function store(string $path, string $content): void
    {
        $path = $this->realpath($path);

        file_put_contents($path, $content);
    }

    public function realpath(string $path): string
    {
        return realpath($path);
    }
}

class Output
{
    protected $items = [];

    protected $eol = PHP_EOL;

    protected $line = PHP_EOL.PHP_EOL;

    protected $columns = 10;

    public function add(string $language, string $value = null): void
    {
        if (!array_key_exists($language, $this->items)) {
            $this->items[$language] = [];
        }

        if ($value) {
            array_push($this->items[$language], $value);
        }
    }

    public function get(): string
    {
        $result = $this->header();
        $result .= $this->table();

        foreach ($this->items as $language => $values) {
            $result .= $this->summary($language);
            $result .= $this->content($values);
        }

        return $result;
    }

    protected function header(): string
    {
        return '# Todo list'.$this->eol;
    }

    protected function summary(string $language): string
    {
        return "{$this->line}## {$language}{$this->line}";
    }

    protected function content(array $values): string
    {
        if ($this->isEmpty($values)) {
            return $this->eol.'All lines are translated 😊'.$this->eol;
        }

        $content = implode($this->eol, $values);

        return <<<HTML
<details>
<summary>show</summary>

{$content}

[ [to top](#todo-list) ]
</details>
HTML;
    }

    protected function table(): string
    {
        $result = '';

        $captions = implode('|', array_fill(0, $this->columns, ' '));
        $divider = implode('|', array_fill(0, $this->columns, ':---:'));

        $result .= "|{$captions}|{$this->eol}";
        $result .= "|{$divider}|{$this->eol}";

        $keys = array_keys($this->items);
        $rows = array_chunk($keys, $this->columns);

        array_map(function ($row) use (&$result) {
            $row = $this->tableHeaderValue($row);
            $result .= $row.$this->eol;
        }, $rows);

        return $result.$this->eol.$this->eol;
    }

    protected function tableHeaderValue(array $languages): string
    {
        $languages = array_map(function ($language) {
            $icon = $this->icon($this->items[$language]);

            return "[{$language} {$icon}](#$language)";
        }, $languages);

        return implode('|', $languages);
    }

    protected function icon($values): string
    {
        $is_empty = is_array($values) ? $this->isEmpty($values) : (bool) $values;

        return $is_empty ? '✔' : '❗';
    }

    protected function isEmpty(array $values): bool
    {
        return empty($values);
    }
}

class TodoGenerator
{
    /** @var Storage */
    protected $storage;

    /** @var Output */
    protected $output;

    protected $basePath;

    public function __construct(string $basePath, Storage $storage, Output $output)
    {
        $this->storage = $storage;
        $this->output = $output;
        $this->basePath = $basePath;

        $this->load();
    }

    /**
     * Returns object.
     *
     * @param string $basePath base path
     *
     * @return TodoGenerator
     */
    public static function make(string $basePath): self
    {
        $storage = new Storage();
        $output = new Output();

        return new self($basePath, $storage, $output);
    }

    /**
     * Save todo list.
     *
     * @param string $path
     */
    public function save(string $path): void
    {
        $this->storage->store($path, $this->output->get());
    }

    /**
     * Compare translations and generate file.
     */
    private function load(): void
    {
        // Get English version
        $english = $this->getTranslations('en');
        $languages = $this->getLanguages();

        $this->compareTranslations($languages, $english);
    }

    /**
     * Returns array of translations by language.
     *
     * @param string $language  language code
     * @param string $directory directory
     *
     * @return array
     */
    private function getTranslations(string $language, string $directory = __DIR__): array
    {
        return [
            'json'       => $this->getJsonContent($language, $directory),
            'auth'       => $this->getContent($language, $directory, 'auth.php'),
            'pagination' => $this->getContent($language, $directory, 'pagination.php'),
            'passwords'  => $this->getContent($language, $directory, 'passwords.php'),
            'validation' => $this->getContent($language, $directory, 'validation.php'),
        ];
    }

    private function getJsonPath(string $language, string $directory): string
    {
        $directoryJson = ('en' === $language) ? '/en/' : '/../json/';

        return $directory.$directoryJson.$language.'.json';
    }

    private function getJsonContent(string $language, string $directory): ?array
    {
        $path = $this->getJsonPath($language, $directory);

        return $this->storage->getDecodedJson($path);
    }

    private function getContent(string $language, string $directory, string $filename)
    {
        return $this->storage->load(
            implode(DIRECTORY_SEPARATOR, [$directory, $language, $filename])
        );
    }

    /**
     * Returns list of languages.
     *
     * @return array
     */
    private function getLanguages(): array
    {
        $directories = $this->storage->directories($this->basePath);
        $result = [];

        foreach ($directories as $directory) {
            if (!$directory->isDot()) {
                array_push($result, $directory->getFilename());
            }
        }

        sort($result);

        return array_filter($result);
    }

    /**
     * Compare translations.
     *
     * @param array $default   language by default
     * @param array $languages others languages
     */
    private function compareTranslations(array $languages, array $default)
    {
        array_map(function ($language) use ($default) {
            $this->output->add($language);

            $current = $this->getTranslations($language, $this->basePath);

            foreach ($default as $key => $values) {
                array_map(function ($key2) use ($key, $current, $language, $default) {
                    if (in_array($key2, ['custom', 'attributes'], true)) {
                        return;
                    }

                    if (!isset($current[$key][$key2])) {
                        $this->output->add(
                            $language,
                            " * {$key} : {$key2} : not present"
                        );
                    } elseif ($current[$key][$key2] === $default[$key][$key2]) {
                        $this->output->add(
                            $language,
                            " * {$key} : {$key2}"
                        );
                    }
                }, array_keys($values));
            }
        }, $languages);
    }
}

TodoGenerator::make(__DIR__.'/../src')
    ->save(__DIR__.'/../todo.md');
