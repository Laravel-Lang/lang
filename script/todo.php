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
     * @var string
     */
    protected $output;

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
        file_put_contents($path, $this->output);
    }

    /**
     * Compare translations and generate file.
     */
    private function load()
    {
        // Get English version
        $english = $this->getTranslations(__DIR__, 'en');
        $languages = $this->getLanguages();

        $this->output = "# Todo list\n\n";
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
        $fileJson = $directory.'/../json/'.$language.'.json';

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
            $this->output .= "\n * ".$language.":\n";
            $current = $this->getTranslations($this->basePath, $language);

            foreach ($default as $key => $values) {
                $valuesKeys = array_keys($values);

                foreach ($valuesKeys as $key2) {
                    if (in_array($key2, ['custom', 'attributes'], true)) {
                        continue;
                    }

                    if (!isset($current[$key][$key2])) {
                        $this->output .= '    * '.$key.' : '.$key2." : not present\n";
                    } elseif ($current[$key][$key2] === $default[$key][$key2]) {
                        $this->output .= '    * '.$key.' : '.$key2."\n";
                    }
                }
            }
        }
    }
}

TodoGenerator::make(__DIR__.'/../src')->save(__DIR__.'/../todo.md');
