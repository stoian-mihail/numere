<?php
function toRomanNumeral ($n){
    $result="";
    while ($n>0){
        $n--;
        $result=$result."I";

    }

    return $result;
}

function test($input, $expected){
    echo "Test : When passing $input returns $expected";
    print_r("<br>Result:".(toRomanNumeral($input)==$expected?"true":"false"));
    echo "<br>";
}

test(1,"I");
test(2,"II");
test (3,"III");
test(4,"IV");


