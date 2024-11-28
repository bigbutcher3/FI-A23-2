<?php

/*
 *  @author Frank-Michael Heldt <info@webdesign-heldt.de>
 *  @date 17.06.2017 20:15:16
 * 
 *  @project Grundlagen
 */

function BubbleSort($contacts, $field)
{
	echo $field;
   for ($i = count($contacts); $i > 0; $i--)
    {
        for ($x = 0; $x < $i - 1; $x++)
        {
            if ($contacts[$x][$field] > $contacts[$x + 1][$field])
            {
                $tmp = $contacts[$x + 1];
                $contacts[$x + 1] = $contacts[$x];
                $contacts[$x] = $tmp;
            }
        }
    }

    return $contacts;
}

function QuickSort(&$contacts, $field, $left, $right)
{	
	$i = $left;
    $x = $right;
    $sort = $contacts[($left + $right) / 2][$field];
    
    while($i <= $x)
    {
        while ($contacts[$i][$field] < $sort)
        {
            $i++;
        }
        
        while ($contacts[$x][$field] > $sort)
        {
            $x--;
        }
        
        if ($i <= $x)
        {
            $tmp = $contacts[$i];
            $contacts[$i] = $contacts[$x];
            $contacts[$x] = $tmp;
            $i++;
            $x--;
        }
    }
    
    if ($left < $x)
        QuickSort($contacts, $field, $left, $x);
    if ($i < $right)
        QuickSort($contacts, $field, $i, $right);
    
    return $contacts;
}