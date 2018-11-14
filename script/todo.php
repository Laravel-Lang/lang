<?php
/**
 * Todo generator for Laravel-lang project.
 *
 * @author  arcanedev-maroc
 */
class TodoGenerator
{
    /**
     * Base path.
     *
     * @var string
     */
    protected $basePath;

    /**
     * Excluded directories.
     *
     * @var array
     */
    protected $excluded = [];

    /**
     * Path of output file.
     *
     * @var array
     */
    protected $output = [];

    /**
     * Construct.
     *
     * @param string $basePath base path
     * @param array  $excluded excluded directories
     */
    public function __construct($basePath, $excluded = [])
    {
        $this->basePath = realpath($basePath);
        $this->excluded = $excluded;
        $this->load();
    }

    /**
     * Returns object.
     *
     * @param string $basePath base path
     * @param array  $excluded excluded directories
     *
     * @return TodoGenerator
     */
    public static function make($basePath, $excluded = [])
    {
        return new self($basePath, $excluded);
    }

    /**
     * Save todo list.
     *
     * @param string $path path
     */
    public function save($path)
    {
        file_put_contents($path, $this->getOutput());
    }

    /**
     * Compare translations and generate file.
     */
    private function load()
    {
        // Get English version
        $english = $this->getTranslations(__DIR__, 'en');
        $languages = $this->getLanguages();

        $this->compareTranslations($english, $languages);
    }

    /**
     * Returns array of translations by language.
     *
     * @param string $directory directory
     * @param string $language  language code
     *
     * @return array
     */
    private function getTranslations($directory, $language)
    {
        $contentJson = '';

        $directoryJson = ($language == 'en') ? '/en/' : '/../json/';

        $fileJson = $directory.$directoryJson.$language.'.json';

        if (file_exists($fileJson)) {
            $contentJson = json_decode(file_get_contents($fileJson), true);
        }

        return [
            'json'       => $contentJson,
            'auth'       => include($directory.'/'.$language.'/auth.php'),
            'pagination' => include($directory.'/'.$language.'/pagination.php'),
            'passwords'  => include($directory.'/'.$language.'/passwords.php'),
            'validation' => include($directory.'/'.$language.'/validation.php'),
        ];
    }

    /**
     * Returns list of languages.
     *
     * @return array
     */
    private function getLanguages()
    {
        $directories = glob($this->basePath.'/*', GLOB_ONLYDIR);

        $languages = array_map(function ($dir) {
            $name = basename($dir);

            return in_array($name, $this->excluded, true) ? null : $name;
        }, $directories);

        return array_filter($languages);
    }

    /**
     * Compare translations.
     *
     * @param array $default   language by default
     * @param array $languages others languages
     */
    private function compareTranslations(array $default, array $languages)
    {
        // Return diff language by language
        foreach ($languages as $language) {
            $this->addOutput($language);
            $current = $this->getTranslations($this->basePath, $language);

            foreach ($default as $key => $values) {
                $valuesKeys = array_keys($values);

                foreach ($valuesKeys as $key2) {
                    if (in_array($key2, ['custom', 'attributes'], true)) {
                        continue;
                    }

                    if (!isset($current[$key][$key2])) {
                        $this->addOutput($language, "  * {$key} : {$key2} : not present");
                    } elseif ($current[$key][$key2] === $default[$key][$key2]) {
                        $this->addOutput($language, "  * {$key} : {$key2}");
                    }
                }
            }
        }
    }

    /**
     * Adding elements to the resulting array.
     *
     * @param string      $key
     * @param string|null $value
     */
    private function addOutput(string $key, string $value = null)
    {
        if (!array_key_exists($key, $this->output)) {
            $this->output[$key] = [];
        }

        $this->output[$key][] = $value;
    }

    /**
     * Forming the page content for output.
     *
     * @return string
     */
    private function getOutput()
    {
        $output = "# Todo list\n\n";

        // Make menu
        $columns = 12;

        $captions = implode('|', array_fill(0, $columns, ' '));
        $subcaptions = implode('|', array_fill(0, $columns, ':---:'));

        $output .= "|$captions|\n";
        $output .= "|$subcaptions|\n";

        $menu = [];
        foreach (array_keys($this->output) as $language) {
            $menu[] = "[$language](#$language)";
        }

        $rows = array_chunk($menu, $columns);
        array_map(function ($row) use (&$output) {
            $row = implode(' | ', $row);
            $output .= $row."\n";
        }, $rows);

        $output .= "\n\n";

        // Make items
        foreach ($this->output as $language => $values) {
            $output .= "#### {$language}:\n";
            $output .= implode(PHP_EOL, $values);
            $output .= "\n\n[ [to top](#todo-list) ]\n\n";
        }

        return $output;
    }
}

TodoGenerator::make(__DIR__.'/../src')->save(__DIR__.'/../todo.md');
