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
    protected $output = null;

    /**
     * Construct.
     *
     * @param string $basePath Base path.
     * @param array  $excluded Excluded directories.
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
     * @param string $basePath Base path.
     * @param array  $excluded Excluded directories.
     *
     * @return TodoGenerator
     */
    public static function make($basePath, $excluded = [])
    {
        return new self($basePath, $excluded);
    }

    /**
     * Compare translations and generate file.
     */
    private function load()
    {
        // Get English version
        $english = $this->getTranslations(__DIR__.'/en');
        $languages = $this->getLanguages();

        $this->output = "# Todo list\n\n";
        $this->compareTranslations($english, $languages);
    }

    /**
     * Returns array of translations by language.
     *
     * @param string $language Language code.
     *
     * @return array
     */
    private function getTranslations($language)
    {
        return [
            'auth'       => include($language.'/auth.php'),
            'pagination' => include($language.'/pagination.php'),
            'passwords'  => include($language.'/passwords.php'),
            'validation' => include($language.'/validation.php'),
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

            return in_array($name, $this->excluded) ? null : $name;
        }, $directories);

        return array_filter($languages);
    }

    /**
     * Compare translations.
     *
     * @param array $default   Language by default.
     * @param array $languages Others languages.
     */
    private function compareTranslations(array $default, array $languages)
    {
        // Return diff language by language
        foreach ($languages as $language) {
            $this->output .= "\n * ".$language.":\n";
            $current = $this->getTranslations("{$this->basePath}/{$language}");

            foreach ($default as $key => $values) {
                foreach ($values as $key2 => $value2) {
                    if (in_array($key2, ['custom', 'attributes'])) {
                        continue;
                    }

                    if (!isset($current[$key][$key2])) {
                        $this->output .= '    * '.$key.' : '.$key2." : not present\n";
                    } elseif ($current[$key][$key2] == $default[$key][$key2]) {
                        $this->output .= '    * '.$key.' : '.$key2."\n";
                    }
                }
            }
        }
    }

    /**
     * Save todo list.
     *
     * @param string $path Path.
     */
    public function save($path)
    {
        file_put_contents($path, $this->output);
    }
}

TodoGenerator::make(__DIR__.'/../src')->save(__DIR__.'/../todo.md');
