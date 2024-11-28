<?php

namespace dateninjson\Library\DirectoryHandling;

class DirectoryHandling
{
    protected string $tothefile;

    /**
     * @param string|null $path
     * @param string|null $file
     */
    public function __construct(protected string|null $path = NULL, protected string|null $file = null)
    {
        $this->tothefile = $path . $file;
    }

    /**
     * @return bool
     */
    public function getIsTrue(): bool
    {
        return $this->getExistsFile() && $this->getExistsPath() && $this->getIsWritable() && $this->ifNotEmpty();
    }

    /**
     * @return bool
     */
    public function getExistsFile(): bool
    {
        return file_exists($this->tothefile);
    }

    /**
     * @return bool
     */
    public function getExistsPath(): bool
    {
        return is_dir($this->path);
    }

    /**
     * @return bool
     */
    public function ifNotEmpty(): bool
    {
        return filesize($this->tothefile) !== 0;
    }

    /**
     * @return bool
     */
    public function getIsWritable(): bool
    {
        return is_writable($this->path);
    }

    /**
     * @return string
     */
    public function getToTheFile(): string
    {
        return $this->tothefile;
    }

    /**
     * @param string $path
     * @return bool
     */
    protected function setExistsPath(string $path): bool
    {
        return is_dir($path);
    }

}