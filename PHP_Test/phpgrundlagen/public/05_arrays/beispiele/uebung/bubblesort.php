<?php
/**
 * Created by PhpStorm.
 * User: maurerd
 * Date: 19.06.2017
 * Time: 09:37
 */

function bubblesort($bubblesort_array = array())
{
    $anz = count($bubblesort_array);
    $temp = '';
    for ($a = 0; $a < $anz; $a++) {
        for ($b = 0; $b < $anz - 1; $b++) {
            if ($bubblesort_array[$b + 1] < $bubblesort_array[$b]) {
                $temp = $bubblesort_array[$b];

                $bubblesort_array[$b] = $bubblesort_array[$b + 1];

                $bubblesort_array[$b + 1] = $temp;
            }
        }
    }
    return $bubblesort_array;
}

$bubblesort_array[] = '3';
$bubblesort_array[] = '1';
$bubblesort_array[] = '4';
$bubblesort_array[] = '2';
$bubblesort_array[] = '5';
$bubblesort_array[] = '9';

echo 'Ausgabe des unsortierten Array:';
echo '<pre>';
print_r($bubblesort_array);


echo 'Ausgabe des sortierten Array:';

print_r(bubblesort($bubblesort_array));


##Selection Sort
function selectionSort($array)
{
    for ($i = 0; $i < count($array); $i++) {
        // Position des kleinsten Elements suchen
        $minpos = $i;
        for ($j = $i + 1; $j < count($array); $j++)
            if ($array[$j] < $array[$minpos]) {
                $minpos = $j;
            }

        // Elemente vertauschen
        $tmp = $array[$minpos];
        $array[$minpos] = $array[$i];
        $array[$i] = $tmp;
    }
    return $array;
}

//Zur Kontrolle
print_r(selectionSort(array('F', 'A', 'B', 'E', 'D', 'C', 'H', 'G')));

function sortInsertion($array)
{
    $sortedArray = array();
    for ($i = 0; $i < count($array); $i++) {
        $j = $i;
        while ($j > 0 && $sortedArray[$j - 1] > $array[$i]) {
            $sortedArray[$j] = $sortedArray[$j - 1];
            $j = $j - 1;
        }
        $sortedArray[$j] = $array[$i];
    }
    return $sortedArray;
}

$unsorted = [1, 3, 4, 2, 5, 9];
$val = sortInsertion($unsorted);
print_r($val);


$array = array(6, 4, 2, 1, 0, 7, 3, 5, 8);

function quick_sort(&$array)
{
    if (count($array) <= 1) return $array; //nur 1 element? -> Array bereits sortiert!

    $key = $array[0]; // Pivot-Element -> Welche sind kleiner, welche größer?

    $left_arr = array(); // Hier kommen alle kleineren rein
    $right_arr = array(); //Hier kommen alle größeren rein
    for ($i = 1; $i < count($array); $i++) { // Das gesamte Array durchgehen
        if ($array[$i] <= $key) // Ist das Element kleiner als das Pivotelement(Referenz-Element)?
            $left_arr[] = $array[$i]; // ---------- In das linke, kleinere Array schreiben
        else // Sonst
            $right_arr[] = $array[$i]; // --------- In das rechte, größere Array schreiben
    }
    #var_dump($right_arr);

    $left_arr = quick_sort($left_arr); // Alle kleineren Elemente auf dieselbe Art sortieren
    $right_arr = quick_sort($right_arr); // Alle größeren Elemente auf dieselbe Art sortieren
    #var_dump($array);
    return array_merge($left_arr, array($key), $right_arr); // Array zusammenfügen. kleinere Elemente + Pivotelement + größere Elemente
}

$sortiert = quick_sort($array);

foreach ($sortiert as $val) {
    echo $val . '<br> <br/>';
}


?>