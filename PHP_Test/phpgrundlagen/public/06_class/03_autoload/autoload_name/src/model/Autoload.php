<?php

namespace model;
class Autoload
{
  
    public function __construct(private string|null $namespace = NULL)
    {
        spl_autoload_register(function(string $class_name)
        {
           $class_name = str_replace('\\', "/", $class_name);
           $class_name = str_replace($this->namespace, "", $class_name);
           
           $dir = array('/src', '/templates');
           
           foreach ($dirs as $directory)
           {
               $filename = __DIR__ . '/../' . $directory . $class_name.'.php';
               echo $filename;
               (file_exists($filename)) ? require_once($filename) : 'File nicht vorhanden';
               return;
           }
        });
    }
}

new Autoload('dasIstMeinNamespace');