<?php

class Autoload
{
    /**
     * @var array $jsonConf
     */
    private array $jsonConf = array();

    /**
     *
     */
    public function __construct()
    {
        $this->jsonConf = json_decode(file_get_contents(__DIR__ . '/composer.json'), true);
        if (!empty($this->jsonConf )) {
            spl_autoload_register(function (string $className) {
                $className = str_replace($this->jsonConf['namespace'] . '\\', '', $className);
                $className = str_replace('\\', DIRECTORY_SEPARATOR, $className);
                foreach ($this->jsonConf['dirs']  as $dir) {
                    $filename = dirname(__DIR__) . '/' . $dir . $className . '.php';
                    if (file_exists($filename)) {
                        require_once($filename);
                        return;
                    }
                }
            });
        } else {
            echo 'Bitte einen Namespace angeben!';
        }
    }
}

new Autoload();

