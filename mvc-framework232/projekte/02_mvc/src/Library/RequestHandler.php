<?php

namespace mvc_second\Library;

class RequestHandler
{
    /**
     * @var string $controllerName
     */
    private string $controllerName;
    /**
     * @var string $actionName
     */
    private string $actionName;

    /**
     * @param array $serverVariablen
     */
    public function __construct(private readonly array $serverVariablen)
    {
        AnzeigeTool::printr($serverVariablen);
        /*echo PRE;
        print_r($this->serverVariablen);*/
//        echo $this->serverVariablen['REQUEST_URI'];

        $this->checkIfUriPartsExists($this->cutUriParts());
    }

    /**
     * @return array
     */
    private function cutUriParts(): array
    {
        $pattern = '/^\/([^\/]+)(\/([^\/]+))?/i';
        preg_match($pattern, $this->serverVariablen['REQUEST_URI'], $matches);
       /* echo PRE;
        print_r($matches);*/
        /*Array
        (
            [0] => /Impressum/Datenschutz
            [1] => Impressum
            [2] => /Datenschutz
            [3] => Datenschutz
        )*/
        return $matches;
    }

    /**
     * @param $matches
     * @return void
     */
    private function checkIfUriPartsExists($matches): void
    {
        /* $matches[1]??'Home'
            $matches[3]??'Index'
        */

        $this->controllerName = $matches[1] ?? 'Home';
        $this->actionName = $matches[3] ?? 'index';

    }

    /**
     * @return string
     */
    public function getControllerName(): string
    {
        return $this->controllerName;
    }

    /**
     * @return string
     */
    public function getActionName(): string
    {
        return $this->actionName;
    }

}