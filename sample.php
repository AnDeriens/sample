<?php

function myFunc (...$args)
{
    var_dump($args);
}

$args = [1,2,3];

myFunc($args);
