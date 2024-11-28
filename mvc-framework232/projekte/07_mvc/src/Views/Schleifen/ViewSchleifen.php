<?php

namespace mvc_smarty\Views\Schleifen;


class ViewSchleifen
{
    /**
     * @return void
     */
    static function getSchleifen(): void
    {
        $_SESSION['smarty']->assign('cardTitle', 'Mein erstes Smarty-Projekt');
        $_SESSION['smarty']->assign('h3','meine Überschrift');


        $array = ['Maurer', 'Sven', 'Halle', '06114'];
        $_SESSION['smarty']->assign('array', $array);





        $arrayAsso = ['Name' => 'Maurer', 'Vorname' => 'Sven', 'Adresse' => 'Halle', 'PLZ' => '06114'];
        $_SESSION['smarty']->assign('arrayAsso', $arrayAsso);


        $_SESSION['smarty']->assign('kontakteAssoziativen',
            array('fax' => '555-222-9876',
                'email' => 'detlef.maurer@gmx.de',
                'telefon' => array('privat' => '555-444-3333',
                    'mobil' => '555-111-1234')
            )
        );
        $_SESSION['smarty']->assign('kontakte', array(
            '555-222-9876',
            'sven.maurer@gmx.de',
            array('555-444-3333',
                '555-111-1234')
        ));


        $arr = array('Maurer' => 'Sven', 'Lorenz' => 'Harald', 'Pleul' => 'Matthias', 'Kusiek' => 'Stefan');
        $_SESSION['smarty']->assign('kollegenMitVorname', $arr);
        $_SESSION['smarty']->display(__DIR__ . '/index.tpl.html');
    }
}