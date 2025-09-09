<?php

class HighSchoolSweetheart
{
    public function firstLetter(string $name): string
    {
        return trim($name)[0];
    }

    public function initial(string $name): string
    {
        return strtoupper($this->firstLetter($name)) . ".";
    }

    public function initials(string $name): string
    {
        $names = explode(" ", $name);

        array_walk(
            $names,
            fn (&$name)
                => $name = $this->initial($name)
        );

        return implode(" ", $names);
    }

    public function pair(string $sweetheart_a, string $sweetheart_b): string
    {
        $sweeterHeartA = $this->initials($sweetheart_a);
        $sweeterHeartB = $this->initials($sweetheart_b);

        return <<< HEART
             ******       ******
           **      **   **      **
         **         ** **         **
        **            *            **
        **                         **
        **     $sweeterHeartA  +  $sweeterHeartB     **
         **                       **
           **                   **
             **               **
               **           **
                 **       **
                   **   **
                     ***
                      *
        HEART;
    }
}
