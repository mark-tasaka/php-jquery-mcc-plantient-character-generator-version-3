<?php

function getStrMessage($input)
{
    $message = "";

    if($input > 0)
    {
        $message = "Strength: +" . $input;
    }

    if($input < 0)
    {
        $message = "Strength: " . $input;
    }

    return $message;
}

function getAgiMessage($input)
{
    $message = "";

    if($input > 0)
    {
        $message = "Agility: +" . $input;
    }

    if($input < 0)
    {
        $message = "Agility: " . $input;
    }

    return $message;
}

function getStaMessage($input)
{
    $message = "";

    if($input > 0)
    {
        $message = "Stamina: +" . $input;
    }

    if($input < 0)
    {
        $message = "Stamina: " . $input;
    }

    return $message;
}



function getPerMessage($input)
{
    $message = "";

    if($input > 0)
    {
        $message = "Personality: +" . $input;
    }

    if($input < 0)
    {
        $message = "Personality: " . $input;
    }

    return $message;
}

function getIntMessage($input)
{
    $message = "";

    if($input > 0)
    {
        $message = "Intelligence: +" . $input;
    }

    if($input < 0)
    {
        $message = "Intelligence: " . $input;
    }

    return $message;
}


function getACMessage($input)
{
    $message = "";

    if($input > 0)
    {
        $message = "Armour Class: +" . $input;
    }

    if($input < 0)
    {
        $message = "Armour Class: " . $input;
    }

    return $message;
}

function getInitMessage($input)
{
    $message = "";

    if($input > 0)
    {
        $message = "Initiative: +" . $input;
    }

    if($input < 0)
    {
        $message = "Initiative: " . $input;
    }

    return $message;
}


function getActionDiceMessage($input)
{

    $die1 = "";
    $die2 = "";
    $die3 = "";

    $addActionDieWord = false;

    if($input > 0)
    {
        $addActionDieWord = true;
    }

    if($input >= 100 && $input < 200)
    {
      $die3 = "+1d14";
      $input -= 100;
    }
    else if($input >= 200 && $input < 300)
    {
      $die3 = "+1d14(x2)";
      $input -= 200;
    }
    else if($input >= 300 && $input < 400)
    {
      $die3 = "+1d14(x3)";
      $input -= 300;
    }
    else if($input >= 400 && $input < 500)
    {
      $die3 = "+1d14(x4)";
      $input -= 400;
    }
    else
    {
      $die3 = "";
    }


    if($input >= 10 && $input < 20)
    {
      $die2 = "+1d16";
      $input -= 10;
    }
    else if($input >= 20 && $input < 30)
    {
      $die2 = "+1d16(x2)";
      $input -= 20;
    }
    else if($input >= 30 && $input < 40)
    {
      $die2 = "+1d16(x3)";
      $input -= 30;
    }
    else if($input >= 40 && $input < 50)
    {
      $die2 = "+1d16(x4)";
      $input -= 40;
    }
    else
    {
      $die2 = "";
    }

    if($input == 1)
    {
      $die1 = "+1d20";
    }
    else if($input == 2)
    {
      $die1 = "+1d20(x2)";
    }
    else if($input == 3)
    {
      $die1 = "+1d20(x3)";
    }
    else if($input == 4)
    {
      $die1 = "+1d20(x4)";
    }
    else
    {
      $die1 = "";
    }

    $actionDieMessage = "";
    
    if($addActionDieWord == true)
    {
        $actionDieMessage = "Action Dice: ";
    }

    $actionDice = $actionDieMessage . $die1 . $die2 . $die3;

    return $actionDice;
}

function getMeleeMessage($input)
{
    $message = "";

    if($input > 0)
    {
        $message = "Melee To-Hit: +" . $input;
    }

    if($input < 0)
    {
        $message = "Melee To-Hit: " . $input;
    }

    return $message;
}


function getMissileMessage($input)
{
    $message = "";

    if($input > 0)
    {
        $message = "Missile To-Hit: +" . $input;
    }

    if($input < 0)
    {
        $message = "Missile To-Hit: " . $input;
    }

    return $message;
}


function getRefMessage($input)
{
    $message = "";

    if($input > 0)
    {
        $message = "Reflex: +" . $input;
    }

    if($input < 0)
    {
        $message = "Reflex: " . $input;
    }

    return $message;
}

function getFortMessage($input)
{
    $message = "";

    if($input > 0)
    {
        $message = "Fortitude: +" . $input;
    }

    if($input < 0)
    {
        $message = "Fortitude: " . $input;
    }

    return $message;
}


function getWillMessage($input)
{
    $message = "";

    if($input > 0)
    {
        $message = "Willpower: +" . $input;
    }

    if($input < 0)
    {
        $message = "Willpower: " . $input;
    }

    return $message;
}

function getSpeedMessage($input)
{
    $message = "";

    if($input > 0)
    {
        $message = "Speed: +" . $input . '\'';
    }

    if($input < 0)
    {
        $message = "Speed: " . $input . '\'';
    }

    return $message;
}


?>