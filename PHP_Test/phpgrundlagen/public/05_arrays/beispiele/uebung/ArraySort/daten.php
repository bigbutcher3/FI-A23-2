<?php

/*
 *  @author Frank-Michael Heldt <info@webdesign-heldt.de>
 *  @date 17.06.2017 20:15:07
 * 
 *  @project Grundlagen
 */

function ReadFormdata($formFields)
{
    $data = filter_input(INPUT_POST, 'data', FILTER_SANITIZE_STRING, FILTER_REQUIRE_ARRAY);
    
    foreach ($data as $key => $value)
    {
        if($formFields[$key]['type'] === 'date')
        {
            $date = explode('.', $value);
            $data[$key] = mktime(0, 0, 0, $date[1], $date[0], $date[2]);
        }
    }

    if (AddContact($data))
    {
        return true;
    } 
    else
    {
        return false;
    }
}

function AddContact($contact)
{
    $contacts = ReadContacts(DATA_FILE);

    if (!$contacts)
    {
        $contacts = array($contact);
        return SaveContacts(DATA_FILE, $contacts);
    }

    if (!in_array($contact, $contacts))
    {
        $contacts[] = $contact;
        return SaveContacts(DATA_FILE, $contacts);
    }


    return false;
}

function SaveContacts($filename, $data)
{
    return file_put_contents($filename, serialize($data));
}

function ReadContacts($filename)
{
    if (file_exists($filename))
    {
        return unserialize(file_get_contents($filename));
    }
    return null;
}
