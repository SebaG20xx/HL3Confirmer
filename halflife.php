<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

function randomAdder($number) {
    $picker = rand(0, 6);
    if ($picker <= 2) {
        return addAllDigits($number);
    } else if($picker == 6){
        return multiplyEverythingByThree($number);
    }
    else {
        return multiplyAllDigits($number);
    }
}

function randomSubtractor($number) {
     $picker = rand(0, 6);
    if ($picker <= 2) {
        return subtractAllDigits($number);
    } else if($picker == 6){
        return divideEverythingByThree($number);
    }
    else {
        return divideAllDigits($number);
    }
}

function addAllDigits($number) {
    $sum = 0;
    $stringArr = str_split($number);
    $i = 0;
    if ($stringArr[0] == '-') {
        $stringArr[1] = '-' . $stringArr[1];
        array_shift($stringArr);
    }
    $len = count($stringArr);
    foreach ($stringArr as $digit) {

        if ($i == 0) {
            echo $digit . " + ";
            $sum = $digit;
        } else if ($i == $len - 1) {
            $sum += $digit;
            echo $digit . " = ";
        } else {
            $sum += $digit;
            echo $digit . " + ";
        }

        $i++;
    }

    $sum = round($sum);
    if (abs($sum) >= 0 && abs($sum) <= 9) {
        echo $sum . "<br>";
        return baseCases(abs($sum));
    }
    echo $sum . "<br>";
    return $sum;
}

function subtractAllDigits($number) {
    $sum = 0;
    $stringArr = str_split($number);
    $i = 0;
    if ($stringArr[0] == '-') {
        $stringArr[1] = '-' . $stringArr[1];
        array_shift($stringArr);
    }
    $len = count($stringArr);
    foreach ($stringArr as $digit) {
        if ($i == 0) {
            echo $digit . " - ";
            $sum = $digit;
        } else if ($i == $len - 1) {
            $sum -= $digit;
            echo $digit . " = ";
        } else {
            $sum -= $digit;
            echo $digit . " - ";
        }

        $i++;
    }

    $sum = round($sum);
    if (abs($sum) >= 0 && abs($sum) <= 9) {

        echo $sum . "<br>";
        return baseCases(abs($sum));
    }
    echo $sum . "<br>";
    return $sum;
}

function multiplyAllDigits($number) {
    if(strpos($number, "0") !== FALSE){
         if(rand(0, 1) == 0){
            return randomAdder($number);
         }
         else{
             return randomSubtractor($number);
         }
        
    }
    $sum = 0;
    $stringArr = str_split($number);
    $i = 0;
    if ($stringArr[0] == '-') {
        $stringArr[1] = '-' . $stringArr[1];
        array_shift($stringArr);
    }
    $len = count($stringArr);
    foreach ($stringArr as $digit) {
        if ($i == 0) {
            echo $digit . " x ";
            $sum = $digit;
        } else if ($i == $len - 1) {
            $sum *= $digit;
            echo $digit . " = ";
        } else {
            $sum *= $digit;
            echo $digit . " x ";
        }

        $i++;
    }

    $sum = round($sum);
    if (abs($sum) >= 0 && abs($sum) <= 9) {

        echo $sum . "<br>";
        return baseCases(abs($sum));
    }
    echo $sum . "<br>";
    return $sum;
}

function divideAllDigits($number) {
    if(strpos($number, "0") !== FALSE){
         if(rand(0, 1) == 0){
            return randomAdder($number);
         }
         else{
             return randomSubtractor($number);
         }
        
    }
    $sum = 0;
    $stringArr = str_split($number);
    $i = 0;
    if ($stringArr[0] == '-') {
        $stringArr[1] = '-' . $stringArr[1];
        array_shift($stringArr);
    }
    $len = count($stringArr);
    foreach ($stringArr as $digit) {
        if ($i == 0) {
            echo $digit . " / ";
            $sum = $digit;
        } else if ($i == $len - 1) {
            $sum /= $digit;
            echo $digit . " = ";
        } else {
            $sum /= $digit;
            echo $digit . " / ";
        }

        $i++;
    }

    $sum = round($sum, 3);
    if (abs($sum) >= 0 && abs($sum) <= 9 && strlen($sum) == 1) {
        echo $sum . "<br>";


        return baseCases(abs($sum));
    }
    echo $sum . "<br>";
    if (!is_int($sum) && strlen($sum)>1) {
        return substr($sum, 2, strlen($sum));
    } else {
        return $sum;
    }
}




function multiplyEverythingByThree($number) {
    $sum = 0;
    $stringArr = str_split($number);
    $i = 0;
    if ($stringArr[0] == '-') {
        $stringArr[1] = '-' . $stringArr[1];
        array_shift($stringArr);
    }
    $len = count($stringArr);
    foreach ($stringArr as $digit) {
        if(strlen($number) == 1){
           $sum += $digit*3;
           echo "(" . $digit . " x 3) = ";
           break;
        }
        if ($i == 0) {
            echo "(" . $digit . " x 3) + ";
            $sum = $digit*3;
        } else if ($i == $len - 1) {
            $sum += $digit*3;
            echo "(" . $digit . " x 3) = ";
        } else {
            $sum += $digit*3;
            echo "(" . $digit . " x 3) + ";
        }

        $i++;
    }

    $sum = round($sum);
    if (abs($sum) >= 0 && abs($sum) <= 9) {
        echo $sum . "<br>";
        return baseCases(abs($sum));
    }
    echo $sum . "<br>";
    return $sum;
}





function divideEverythingByThree($number) {
    $sum = 0;
    $stringArr = str_split($number);
    $i = 0;
    if ($stringArr[0] == '-') {
        $stringArr[1] = '-' . $stringArr[1];
        array_shift($stringArr);
    }
    $len = count($stringArr);
    foreach ($stringArr as $digit) {
        if(strlen($number) == 1){
           $sum += $digit/3;
           echo "(" . $digit . " / 3) = ";
           break;
        }
        if ($i == 0) {
            echo "(" . $digit . " / 3) + ";
            $sum = $digit/3;
        } else if ($i == $len - 1) {
            $sum += $digit/3;
            echo "(" . $digit . " / 3) = ";
        } else {
            $sum += $digit/3;
            echo "(" . $digit . " / 3) + ";
        }

        $i++;
    }
    $sum = round($sum, 3);
    if (abs($sum) >= 0 && abs($sum) <= 9) {
        if(strlen($sum) != 1){
        echo $sum . " rounded to " . round($sum) . "<br>";
        } else{
            echo $sum . "<br>";
        }
        return baseCases(abs(substr(round($sum), 0, 1)));
    }
    echo $sum . "<br>";
    return round($sum);
}



function baseCases($number) {
    if ($number == 0) {
        zeroCase();
    } else if ($number == 1) {
        oneCase();
    } else if ($number == 2) {
        twoCase();
    } else if ($number == 3) {
        confirmed();
    } else if ($number == 4) {
        fourCase();
    } else if ($number == 5) {
        fiveCase();
    } else if ($number == 6) {
        sixCase();
    } else if ($number == 7) {
        sevenCase();
    } else if ($number == 8) {
        return eightCase();
    } else if ($number == 9) {
        nineCase();
    }
    return 3;
}

function zeroCase() {
    echo "3/0 = infinity (valve time)<br><div class='norelease'>HALF LIFE 3 WILL NEVER BE RELEASED</div>";
}

function oneCase() {
    echo "Half life 2 named #1 game of the decade<br>";
    echo "A decade is 10 years long<br>";
    echo "10 in base 6 is 14<br>";
    echo "1 - 4 = 3<br>";
    confirmed();
}

function twoCase() {
    echo "Half life 2 came out in 2007<br>";
    echo "2 + 0 + 0 + 7 = 9<br>";
    echo "9 / 3 = 3<br>";
    confirmed();
}

function fourCase() {
    echo "4 in binary is 100<br>";
    echo "100 is 3 digits long<br>";
    confirmed();
}

function fiveCase() {
    echo "Half life 2 came out 5 years ago<br>";
    echo "5 years is approximately 1800 days<br>";
    echo "1 + 8 + 0 + 0 = 9<br>";
    echo "9 / 3 = 3<br>";
    confirmed();
}

function sixCase() {
    echo "6 / 2 = 3<br>";
    confirmed();
}

function sevenCase() {
    echo "The word seven has 5 characters<br>";
    fiveCase();
}

function eightCase() {
    if(rand(0, 1) == 0){
        return multiplyEverythingByThree(8);
    } else{
        return divideEverythingByThree(8);
    }
}

function nineCase() {
    echo "9 / 3 = 3<br>";
    confirmed();
}

function confirmed() {
    echo "<div class='confirmed'>HALF LIFE 3 CONFIRMED!</div>";
}

function run($number) {
    if(strlen($number) == 1){
        if(rand(0, 1) == 0){
            $number =  multiplyEverythingByThree(8);
        } else{
            $number = divideEverythingByThree(8);
        }
    }
    if (rand(0, 1) == 0) {
        $number = randomAdder($number);
    } else {
        $number = randomSubtractor($number);
    }
    while ($number != 3) {
        if ($number > 3) {
            $number = randomSubtractor($number);
        } else {
            $number = randomAdder($number);
        }
    }
}
echo "<h2>" . $_POST['number'] . "</h2>";
run($_POST['number']);
?>