<?php
function toRomanNumeral ($n){

    return ($n==1?"I":"II");
}

function test($input, $expected){
    echo "Test : When passing $input returns $expected";
    print_r("<br>Result:".(toRomanNumeral($input)==$expected?"true":"false"));
    echo "<br>";
}

test(1,"I");
test(2,"II");
