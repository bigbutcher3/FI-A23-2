<?php

/* 
 *  @author Frank-Michael Heldt <info@webdesign-heldt.de>
 *  @date 17.06.2017 21:34:25
 * 
 *  @project Grundlagen
 */

$scheme = $_SERVER['REQUEST_SCHEME'];
$host = $_SERVER['SERVER_NAME'];
$url = dirname($_SERVER['SCRIPT_URL']);

$sortMethods = array('bubble' => 'Bubblesort', 'quick' => 'Quicksort');

define('DATA_FILE', dirname(__FILE__) . '/daten/daten.dat');

$formFields = array(
    'vorname' => array(
        'label'     => 'Vorname',
        'type'      => 'text',
        'required'  => '1',
        'value'     => ''
    ),
    'nachname' => array(
        'label'     => 'Nachname',
        'type'      => 'text',
        'required'  => '1',
        'value'     => ''
    ),
    'geburtsdatum' => array(
        'label'     => 'Geburtsdatum',
        'type'      => 'date',
        'required'  => '1',
        'value'     => ''
    ),
    'strasse' => array(
        'label'     => 'Straße, Nr.',
        'type'      => 'text',
        'required'  => '1',
        'value'     => ''
    ),
    'plz' => array(
        'label'     => 'PLZ',
        'type'      => 'text',
        'required'  => '1',
        'value'     => ''
    ),
    'ort' => array(
        'label'     => 'Ort',
        'type'      => 'text',
        'required'  => '1',
        'value'     => ''
    ),
);