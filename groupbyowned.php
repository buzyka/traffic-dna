<?php

class FileOwners
{
    public static function groupByOwners($files)
    {
        $owners = array_unique($files);
        foreach ($files as $file => $person) {
            foreach ($owners as $owner) {
                if ($owner == $person) {
                    $result[$owner][] = $file;
                }
            }
        }

        return $result;
    }
}

$files = array
(
    "Input.txt" => "Randy",
    "Code.py" => "Stan",
    "Output.txt" => "Randy"
);

var_dump(FileOwners::groupByOwners($files));
