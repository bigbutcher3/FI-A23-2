<?php
ini_set('display_errors', 1);
session_start();

require 'config.php';
require 'daten.php';
require 'sortieren.php';

/* 
 *  @author Frank-Michael Heldt <info@webdesign-heldt.de>
 *  @date 17.06.2017 20:31:54
 * 
 *  @project Grundlagen
 */

$action = filter_input(INPUT_POST, 'action');

switch ($action)
{
    case 'save':
        $result = ReadFormdata($formFields);
        header('Location: ' . $scheme . '://' . $host.$url);
        break;
    case  'list':
        include 'ausgabe.php';
        break;
    case 'sort':
        $_SESSION['sortField'] = filter_input(INPUT_POST, 'field');
        $_SESSION['sortMethod'] = filter_input(INPUT_POST, 'method');
        include 'ausgabe.php';
        break;

    default:
        session_destroy();
        include 'formular.php';
        break;
}