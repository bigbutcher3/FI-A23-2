<?php

namespace dateninjson\Controllers\Datatables;

use dateninjson\AbtractClass\Controllers\AController;

use dateninjson\Models\Textspeichernjson\AuslesenDatensatz;
use dateninjson\Views\Datatables\ViewDatatables;

class Controller extends AController
{

    /**
     * @return void
     */
    protected function getView(): void
    {
        $alleDatensaetze = new AuslesenDatensatz(PATHSPEICHERORT, DATENSATZJSONFILE);
        $_SESSION['datensatzjson'] = $alleDatensaetze->getAllDatensaetze();
        ViewDatatables::getDatatables();
    }
}
