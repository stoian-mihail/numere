<?php
function toRomanNumeral ($n){
    $map=array("M"=>1000,"CM"=>900,"D"=>500,"CD"=>400,"C"=>100,"XC"=>90,"L"=>50,"XL"=>40,"X"=>10,"IX"=>9,"V"=>5,"IV"=>4,"I"=>1);
    $result="";
    while ($n>0){
        foreach ($map as $key=>$value){
            if ($n>=$value) {
                $n = $n - $value;
                $result=$result.$key;
                break;
            }
        }
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
test(1333,"MCCCXXXIII");

