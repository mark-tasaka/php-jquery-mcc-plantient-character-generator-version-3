<?php

/*Plantient*/

function savingThrowReflex($level)
{
    $reflex = 1;

    
    if($level >= 4 && $level <= 6)
    {
        $reflex = 2;
    }

    if($level >= 7 && $level <= 9)
    {
        $reflex = 3;
    }

    if($level == 10)
    {
        $reflex = 4;
    }

    return $reflex;

}


function savingThrowFort($level)
{
    
    $fort = 0;
        
    if($level >= 3 && $level <= 4)
    {
        $fort = 1;
    }
    
    if($level >= 5 && $level <= 6)
    {
        $fort = 2;
    }

    if($level >= 7 && $level <= 9)
    {
        $fort = 3;
    }

    if($level == 10)
    {
        $fort = 4;
    }

    return $fort;

}


function savingThrowWill($level)
{
    $will = 1;

    if($level >= 3 && $level <= 4)
    {
        $will = 2;
    }
    
    if($level >= 5 && $level <= 6)
    {
        $will = 3;
    }

    
    if($level >= 7 && $level <= 9)
    {
        $will = 4;
    }

    if($level == 10)
    {
        $will = 5;
    }

    return $will;

}


function attackBonus($level)
{
  if($level == 1)
  {
    $attackBonus = 0;
  }
  else if($level == 2)
  {
    $attackBonus = 1;
  }
  else if($level == 3 || $level == 4)
  {
    $attackBonus = 2;
  }
  else if($level == 5)
  {
    $attackBonus = 3;
  }
  else if($level == 6)
  {
    $attackBonus = 4;
  }
  else if($level == 7 || $level == 8)
  {
    $attackBonus = 5;
  }
  else if($level == 9)
  {
    $attackBonus = 6;
  }
  else
  {
    $attackBonus = 7;
  }

  return $attackBonus;
}


function actionDiceCode($level)
{
    $actionDice = 0;

    if($level <= 4)
    {
        $actionDice = 1;
    }

    if($level == 5)
    {
        $actionDice = 101;
    }

    if($level == 6)
    {
        $actionDice = 11;
    }

    if($level >= 7)
    {
        $actionDice = 2;
    }


    return $actionDice;
}

function convertActionDice($input)
{
    $die1 = "";
    $die2 = "";
    $die3 = "";

    if($input > 100 && $input < 200)
    {
      $die3 = "+1d14";
      $input -= 100;
    }
    else if($input > 200 && $input < 300)
    {
      $die3 = "+1d14(x2)";
      $input -= 200;
    }
    else if($input > 300 && $input < 400)
    {
      $die3 = "+1d14(x3)";
      $input -= 300;
    }
    else if($input > 400 && $input < 500)
    {
      $die3 = "+1d14(x4)";
      $input -= 400;
    }
    else
    {
      $die3 = "";
    }


    if($input > 10 && $input < 20)
    {
      $die2 = "+1d16";
      $input -= 10;
    }
    else if($input > 20 && $input < 30)
    {
      $die2 = "+1d16(x2)";
      $input -= 20;
    }
    else if($input > 30 && $input < 40)
    {
      $die2 = "+1d16(x3)";
      $input -= 30;
    }
    else if($input > 40 && $input < 50)
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
      $die1 = "1d20";
    }
    else if($input == 2)
    {
      $die1 = "1d20(x2)";
    }
    else if($input == 3)
    {
      $die1 = "1d20(x3)";
    }
    else if($input == 4)
    {
      $die1 = "1d20(x4)";
    }
    else
    {
      $die1 = "";
    }

    $actionDice = $die1 . $die2 . $die3;

    return $actionDice;

}


function criticalDie($level)
{
    $critical = "";

    switch($level)
    {
      case 1:
        $critical = "1d10/III";
        break;
        
      case 2:
        $critical = "1d12/III";
        break;
        
      case 3:
        $critical = "1d14/III";
        break;
        
      case 4:
        $critical = "1d16/III";
        break;
        
      case 5:
        $critical = "1d20/III";
        break;
        
      case 6:
        $critical = "1d24/III";
        break;
        
      case 7:
        $critical = "1d30/III";
        break;
        
      case 8:
        $critical = "1d30+2/III";
        break;
        
      case 9:
        $critical = "1d30+4/III";
        break;
        
      case 10:
        $critical = "1d30+6/III";
        break;

        default:
        $critical = "99999";
    }

    return $critical;

}


function title($level)
{

        if($level == 1)
        {
            $title = "Sprout";
        }
        else if($level == 2)
        {
            $title = "Caretaker";
        }
        else if($level == 3)
        {
            $title = "Greenskeeper";
        }
        else if($level == 4)
        {
            $title = "Cultivator";
        }
        else if($level == 5)
        {
            $title = "Warden";
        }
        else
        {
            $title = "High Warden";
        }

return $title;

}

function getArtifactCheckBonus($level)
{
    $bonus = 0;

    switch ($level) 
    {
        case 1:
            $bonus = -1;
          break;
          
        case 2:
            $bonus = 0;
          break;
          
        case 3:
            $bonus = 0;
          break;

        case 4:
            $bonus = 1;
          break;
          
        case 5:
            $bonus = 1;
          break;
          
        case 6:
            $bonus = 2;
          break;

          case 7:
            $bonus = 3;
          break;
          
        case 8:
            $bonus = 4;
          break;
          
        case 9:
            $bonus = 5;
          break;
          
        case 10:
            $bonus = 6;
          break;
          
        default:
            $bonus = 999;
      } 

    return $bonus;
}

function hideInGreenery($level)
{
  $hide = "";

switch ($level) 
{
    case 1:
        $hide = "50%";
      break;
      
    case 2:
        $hide = "55%";
      break;
      
    case 3:
        $hide = "60%";
      break;

    case 4:
        $hide = "65%";
      break;
      
    case 5:
        $hide = "70%";
      break;
      
    case 6:
        $hide = "75%";
      break;

      case 7:
        $hide = "80%";
      break;
      
    case 8:
        $hide = "85%";
      break;
      
    case 9:
        $hide = "90%";
      break;
      
    case 10:
        $hide = "95%";
      break;
      
    default:
        $hide = "10%";
  } 

return $hide;

}



?>