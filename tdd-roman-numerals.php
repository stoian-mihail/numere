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
function test($input, $expected, $debug=false){
    $timp_start=microtime(false);
    $assert=toRomanNumeral($input)==$expected;
    $timp_final=microtime(false);
    $timp=$timp_final-$timp_start;
    if($debug==true){
        echo "Test : When passing $input returns $expected";
        print_r("<br>Result:".($assert?"true":"false"));
        echo "<br>";
    }
    return $timp;
}

function generateTestData($n){
    $testData=array();
    for($i=1;$i<=$n;$i++){
        $testData[$i]=toRomanNumeral($i);
    }
    return $testData;
}

function runPerformanceTesting($n){
    $testdata=generateTestData($n);
    $timpi=[];
    foreach ($testdata as $i=>$roman){
        $timpi[$i]=number_format( test($i, $roman,false), 7);
    }
    $timpmediu=0;
    for($i=1;$i<=$n;$i++){
        $timpmediu +=$timpi[$i];
    }
    $timpmediu /=count($timpi);
    print_r("Timpul mediu pentru "."$n"." rulari este "."$timpmediu microsecunde"."<br>");
    print_r("Numarul maxim de executii: ".(1/($timpmediu/1000000))." / secunda<br>");
   print_r($testdata);
   print_r("<br>");
   print_r($timpi);
   print_r("<br>");


}

test(1,"I");
test(2,"II");
test (3,"III");
test(4,"IV");
test(1333,"MCCCXXXIII");
runPerformanceTesting(10);