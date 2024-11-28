<?php

namespace dateninjson\Models\Textspeichernjson;

use dateninjson\Exceptions\Textspeichernjson\ErrorInTextspeichern;
use dateninjson\Library\DirectoryHandling\DirectoryHandling;

class SpeichernDatensatz extends DirectoryHandling
{
    /**
     * @var string $info
     */
    private string $info;
    /**
     * @var array $datensaetze
     */
    private array $datensaetze = array();

    /**
     * @param string|null $path
     * @param string|null $file
     * @param array|null $datensatz
     * @throws ErrorInTextspeichern
     */
    public function __construct(protected ?string $path = NULL, protected ?string $file = null, protected ?array $datensatz = null)
    {
			parent::__construct($path, $file);
			parent::getExistsPath() ?: throw new ErrorInTextspeichern('Der angegebene Path stimmt nicht!');
			parent::getIsWritable() ?: throw new ErrorInTextspeichern('keine Schreibrechte');
			!empty($datensatz) ?: throw new ErrorInTextspeichern('kein Datensatz vorhanden');
			(parent::getExistsFile() && parent::ifNotEmpty()) ? $this->newDatensatzInsert() : $this->ifEmptyDatensatzInsert();
    }

    private function ifEmptyDatensatzInsert(): void
    {
        $this->datensaetze[] = $this->datensatz;
        $this->datensatzSpeichern();
    }

    /**
     * @return void
     */
    private function newDatensatzInsert(): void
    {
        $this->datensaetze = json_decode( file_get_contents($this->tothefile),true);
        //array_push($this->datensaetze,$this->datensatz);
        $this->datensaetze[] = $this->datensatz;
         $this->datensatzSpeichern();
    }

    /**
     * @return void
     */
    private function datensatzSpeichern(): void
    {
        $speichern = file_put_contents($this->tothefile,json_encode($this->datensaetze),LOCK_EX);
        $this->info = ($speichern)?'Datensatz erfolgreich gespeichert!':'Datensatz nicht erfolgreich gespeichert!';
    }

    /**
     * @return string
     */
    public function getMeldung(): string
    {
        return $this->info;
    }
}