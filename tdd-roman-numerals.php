<?php
function toRomanNumeral ($n){
    return "I";
}

echo "Test 1: When passing 1 returns I";
print_r("<br>Result:".(toRomanNumeral(1)=="I"?"true":"false"));
