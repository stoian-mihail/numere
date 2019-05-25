<?php
function toRomanNumeral ($n){
    return "I";
}

test(1,"I");
test(2,"II");

function test($input, $expected){
    echo "Test : When passing $input returns $expected";
    print_r("<br>Result:".(toRomanNumeral($input)==$expected?"true":"false"));
    echo "<br>";
}

