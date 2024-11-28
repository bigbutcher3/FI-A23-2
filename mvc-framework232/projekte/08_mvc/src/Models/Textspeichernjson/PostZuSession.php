<?php

namespace dateninjson\Models\Textspeichernjson;

use dateninjson\Exceptions\Textspeichernjson\ErrorInTextspeichern;

class PostZuSession
{
    /**
     * @var array $datensatz
     */
    private array $datensatz = array();

    /**
     * @param array|null $datensatzArray
     * @param array|null $indexArray
     * @throws ErrorInTextspeichern
     */
    public function __construct(private readonly array|null $datensatzArray = Null, private readonly array|null $indexArray = null)
    {
        (!empty($datensatzArray) && !empty($indexArray)) ? $this->zuweisungDatensatz() : throw new ErrorInTextspeichern('Keine Daten übergeben!');
    }

    /**
     * @return void
     */
    protected function zuweisungDatensatz():void
    {
        $this->datensatz['datum'] = date('d.F Y');
        foreach ($this->indexArray as $item => $value) {
            //$item -> key vom Formularfeld (name)
            if ($value === 'text') {
                $this->datensatz[$item] = $_SESSION[$item] = ucfirst(htmlspecialchars(trim($this->datensatzArray[$item]??'')));
            }
            elseif ($value === 'textarea')
            {
                $_SESSION[$item] = htmlspecialchars(wordwrap($this->datensatzArray[$item],UMBRUCHTEXTAREA,"\n",1));
                $this->datensatz[$item] = str_replace(NTL,NL,$_SESSION[$item]);
            }
            elseif ($value === 'array')
            {
                $_SESSION[$item] = $this->datensatzArray[$item]??'';
                $this->datensatz[$item] = (!empty($this->datensatzArray[$item])?(implode(',',$this->datensatzArray[$item])):'');
            }
            else{
                $this->datensatz[$item] =$_SESSION[$item] =htmlspecialchars($this->datensatzArray[$item]??'');
            }
        }
    }

    /**
     * @return array
     */
    public function getDatensatz(): array
    {
        return $this->datensatz;
    }
}