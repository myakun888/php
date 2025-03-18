<?php
function input($todo)
{
    echo "$todo :";

    $hasil = fgets(STDIN);
    return trim(strtolower($hasil));
};


// var_dump(input());
