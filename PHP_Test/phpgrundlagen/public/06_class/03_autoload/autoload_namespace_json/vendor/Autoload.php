<?php

namespace model;
class Autoload
{

    private $jsonconf = array();
    
    //Neue Instanz von Autoload wird erstellt
    public function __construct()
    {
        //JSON-Datei wird ausgelesen und in ein Array gespeichert
        $this->jsonconf = (json_decode(file_get_contents(__DIR__.'/composer.json'), true));
        
        //Wenn Namespace vorhanden ist, wird die Funktion autoload() aufgerufen
        if (!empty($this->jsonconf['namespace']))
        {
            
            //
            spl_autoload_register(function(string $class_name)
            {
                
                print_r($this->jsonconf['namespace']);
                
                //Der Namespace wird durch einen Slash ersetzt
                $class_name = str_replace('\\', "/", $class_name);
                echo $class_name = str_replace($this->jsonconf['namespace'], "", $class_name);
                foreach ($this->jsonconf['dirs'] as $directory)
                {
                    $filename = __DIR__ . '/../' . $directory . $class_name.'.php';
                    (file_exists($filename)) ? require_once($filename) : 'File nicht vorhanden';
                }
            });
        }
    }
}

new Autoload();