<?php
function toRomanNumeral ($n){
    return "I";
}

echo "Test 1: When passing 1 returns I";
print_r("<br>Result:".(toRomanNumeral(1)=="I"?"true":"false"));
echo "<br>";

echo "Test 1: When passing 2 returns II";
print_r("<br>Result:".(toRomanNumeral(2)=="II"?"true":"false"));
echo "<br>";



