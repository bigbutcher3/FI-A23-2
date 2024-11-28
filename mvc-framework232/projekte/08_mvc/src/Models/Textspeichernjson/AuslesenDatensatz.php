<?php

namespace dateninjson\Models\Textspeichernjson;


use dateninjson\Exceptions\Textspeichernjson\ErrorInTextspeichern;
use dateninjson\Library\DirectoryHandling\DirectoryHandling;

class AuslesenDatensatz extends DirectoryHandling
{
    /**
     * @var array $datensaetze
     */
    private array $datensaetze = array();
    /**
     * @var string $info
     */
    private string $info = '';

    /**
     * @param string|null $path
     * @param string|null $file
     * @throws ErrorInTextspeichern
     */
    public function __construct(protected null|string $path = NULL, protected null|string $file = null)
    {
        parent::__construct($path, $file);
        parent::getIsTrue() ?: throw new ErrorInTextspeichern('keine File zum Auslesen vorhanden!');
        $this->auslesenDatensaetze();
        $_SESSION['count'] = count($this->datensaetze) - 1;
    }

    /**
     * @return void
     * @throws ErrorInTextspeichern
     */
    private function auslesenDatensaetze(): void
    {
        $json = json_validate(file_get_contents($this->tothefile));
        $json ?: throw new ErrorInTextspeichern('keine Datensätze vorhanden bzw. keine json-Struktur!');
        $this->datensaetze = json_decode(file_get_contents($this->tothefile), true);
        $this->datensaetze ?: throw new ErrorInTextspeichern('keine Datensätze vorhanden!!');
    }

    /**
     * @return array
     */
    public function getDatensatz(): array
    {
            ($_SESSION['index']) ?? $_SESSION['index'] = 0;
        return $this->datensaetze[$_SESSION['index']];
    }

    /**
     * @return void
     */
    public function setNextDatensatz(): void
    {
        ($_SESSION['index'] >= $_SESSION['count']) ?: $_SESSION['index']++;
    }

    /**
     * @return void
     */
    public function setBackDatensatz(): void
    {
        ($_SESSION['index']) <= 0 ?: $_SESSION['index']--;
    }

    /**
     * @return void
     */
    public function setDelDatensatz(): void
    {
        array_splice($this->datensaetze, $_SESSION['index'], 1);
        $del = file_put_contents($this->tothefile, json_encode($this->datensaetze), LOCK_EX);
        $this->info = $del ? 'Ihr Datensatz wurde gelöscht' : 'Ihr Datensatz wurde nicht gelöscht';
        $_SESSION['index'] = 0;
    }

    /**
     * @return void
     */
    public function setAnfangDatensatz(): void
    {
        $_SESSION['index'] = 0;
    }
    /**
     * @return void
     */
    public function setEndDatensatz(): void
    {
        $_SESSION['index'] = $_SESSION['count'];
    }

    /**
     * @return array
     */
    public function getAllDatensaetze(): array
    {
        return $this->datensaetze;
    }

    /**
     * @return array
     */
    public function getAllDatensaetzeJson(): array
    {
        foreach ($this->datensaetze as $value) {
            $datensaetze[] = array_values($value);
        }
        return $datensaetze;
    }

    /**
     * @return string
     */
    public function getMeldung(): string
    {
        return $this->info ?? '';
    }

  }