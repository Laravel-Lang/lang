<?php

class TodoGenerator
{
    /* ------------------------------------------------------------------------------------------------
     |  Properties
     | ------------------------------------------------------------------------------------------------
     */
    /** @var string */
    protected $basePath;

    /** @var array */
    protected $excluded = [];

    /** @var string */
    protected $output = '';

    /* ------------------------------------------------------------------------------------------------
     |  Constructor
     | ------------------------------------------------------------------------------------------------
     */
    public function __construct($basePath, $excluded = [])
    {
        $this->basePath = realpath($basePath);
        $this->excluded = $excluded;
        $this->output = '';
        $this->load();
    }

    public static function make($basePath, $excluded = [])
    {
        return new self($basePath, $excluded);
    }

    /* ------------------------------------------------------------------------------------------------
     |  Main Functions
     | ------------------------------------------------------------------------------------------------
     */
    private function load()
    {
        // Get English version
        $english = $this->getTranslations(__DIR__.'/en');
        $languages = $this->getLanguages();

        $this->output = "# Todo list\n\n";
        $this->compareTranslations($english, $languages);
    }

    private function getTranslations($dir)
    {
        return [
            'auth'       => include("$dir/auth.php"),
            'pagination' => include("$dir/pagination.php"),
            'passwords'  => include("$dir/passwords.php"),
            'validation' => include("$dir/validation.php"),
        ];
    }

    private function getLanguages()
    {
        $directories = glob("{$this->basePath}/*", GLOB_ONLYDIR);

        $languages = array_map(function ($dir) {
            $name = basename($dir);

            return in_array($name, $this->excluded) ? null : $name;
        }, $directories);

        return array_filter($languages);
    }

    private function compareTranslations($default, $languages)
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

    public function save($path)
    {
        file_put_contents(realpath($path), $this->output);
    }
}

TodoGenerator::make(__DIR__.'/..', ['script'])->save(__DIR__.'/../todo.md');
