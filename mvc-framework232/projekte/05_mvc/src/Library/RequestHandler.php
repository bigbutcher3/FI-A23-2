<?php

namespace mvc_fifth\Library;

use mvc_fifth\AbtractClass\Library\ARequestHandler;

class RequestHandler extends ARequestHandler
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
        $this->checkIfUriPartsExists($this->cutUriParts());
    }

    /**
     * @return array
     */
    protected function cutUriParts(): array
    {
        $pattern = '/^\/([^\/]+)(\/([^\/]+))?/i';
        preg_match($pattern, $this->serverVariablen['REQUEST_URI'], $matches);
        return $matches;
    }

    /**
     * @param $matches
     * @return void
     */
    protected function checkIfUriPartsExists($matches):void
    {
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