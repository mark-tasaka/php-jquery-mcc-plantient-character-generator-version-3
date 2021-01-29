<?php

function abilityScoreMinimum($input)
{
    if($input < 3)
    {
        $input = 3;
    }

    return $input;
}

function speedCheckMin($input)
{
    if($input < 5)
    {
        $input = 5;
    }

    return $input;

}

?>