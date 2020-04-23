<?php

class Palindrome
{
    public static function isPalindrome($word)
    {
        $word = strtolower($word);
        $length = strlen($word);
        $middle = ceil($length / 2);
        if ($length % 2 == 0) {
            $partOne = substr($word, 0, $middle);
            $partTwo = strrev(substr($word, $middle));

            return $partOne == $partTwo;
        } else {
            $partOne = substr($word, 0, $middle - 1);
            $partTwo = strrev(substr($word, $middle));

            return $partOne == $partTwo;
        }
    }
}

echo Palindrome::isPalindrome('Deleveled');
