
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>"Convertor numere arabe"</title>
</head>
<body>

<form action="numere.php" method ="post">
    <input type="text" name="numar">
    <input type="submit" value="Converteste">
</form>
<br>
<?php


$c1="I";
$c2="V";
$c3="X";
$c4="L";
$c5="C";
$c6="D";
$c7="M";
$c8="IV";
$c9="IX";
$c10="XL";
$c11="XC";
$c12="CD";
$c13="CM";
$c14="MV̄";
$c15="MX̄";

$n=$_POST["numar"];

//if ($q<1){$q=$q*10;};
//$q=floor($q);
//$r=$n%10;
//$r1=$n%100;


function unuNoua($n)
{
    global $n;
    $c1="I";
    $c8="IV";
    $c2="V";
    $c9="IX";
    $a=true;

  if($a==true){
    $n=$n%10;
    }
       if ($n<4){ // Cazul 1-3
           while($n>0){ // multiplicatorul care ne ajuta sa afisam c1=I de q ori
               echo "$c1";
       $n--;}}

       elseif ($n==4){  // cazul nr=4
            echo "$c8";}

       elseif ($n>=5&&$n<=8){ //cazul 5-8 formarea numerelor este realizata afisand c2=V + c1=I de i ori, unde i=q-5
           $i=$n-5;
           echo "$c2";

           while($i>0) // functia care ne ajuta sa afisam c1 de i ori
           {echo "$c1";
           $i--;}
       }
       elseif ($n==9) { //cazul nr=9
           echo "$c9";
       }

}


//functia pentru valori de la 10-99
function zeceNouazeci($n){
    global $n;
    if ($n>100) {$n=$n%100;}
    $c3="X";
    $c10="XL";
    $c4="L";
    $c11="XC";
    $q=$n/10;
    $q=floor($q);
    $r=$n%10;


    if ($q<4){ // Cazul 10-30
        while($q>0){ // multiplicatorul care ne ajuta sa afisam c3=I de q ori
            echo "$c3";
            $q--;}
        if($r!=0){
            unuNoua($r);}

    }

    elseif ($q==4){  // cazul nr=4
        echo "$c10";
        if($r!=0){
            unuNoua($r);}}

    elseif ($q>=5&&$q<=8){ //cazul 50-80 formarea numerelor este realizata afisand c2=V + c1=I de i ori, unde i=q-5
        $i=$q-5;
        echo "$c4";

        while($i>0) // functia care ne ajuta sa afisam c1 de i ori
        {echo "$c3";
            $i--;}
        if($r!=0){
            unuNoua($r);}
    }
    elseif ($q >=9 ) { //cazul nr=9
        echo "$c11";
        if($r!=0){
           unuNoua($r);}
    }

} //Final functie 10-99

function osutaNouasute($n){ //cazul  100<=n<999
    global $n;
    $c5="C";
    $c6="D";
    $c12="CD";
    $c13="CM";

    $cat=$n/100;
    $cat=floor($cat);
    $restmare=$n%100;


    // Cazul 100-300

    if ($cat<4){
        while($cat>0){ // multiplicatorul care ne ajuta sa afisam c5=c de q ori
            echo "$c5";
            $cat--;}
         if($restmare!=0){
             zeceNouazeci($restmare);
        }
     }

    // cazul nr=400

    elseif ($cat==4){
        echo "$c12";
        if($restmare!=0){
            zeceNouazeci($restmare);}
        }
//cazul 500-800; formarea numerelor este realizata afisand c6=D + c5=I de i ori, unde i=q-5

    elseif (($cat>=5)&&($cat<=8)){
        $i=$q-5;
        echo "$c6";

        while($i>0) // functia care ne ajuta sa afisam c1 de i ori
        {echo "$c5";
            $i--;}
         if($restmare!=0){
             zeceNouazeci($restmare);}
    }
    //cazul n=900
    elseif (($cat>=9) && ($cat<10) ) {
        echo "$c13";
       if($restmare!=0){
           zeceNouazeci($restmare);}
    }


}
        function omieNouamii($n){ //cazul  1000<=n<9999
            global $n;
            $c5="C";
            $c6="D";
            $c12="CD";
            $c13="CM";

            $cat=$n/100;
            $cat=floor($cat);
            $restmare=$n%100;


            // Cazul 100-300

            if ($cat<4){
                while($cat>0){ // multiplicatorul care ne ajuta sa afisam c5=c de q ori
                    echo "$c5";
                    $cat--;}
                if($restmare!=0){
                    zeceNouazeci($restmare);
                }
            }

            // cazul nr=400

            elseif ($cat==4){
                echo "$c12";
                if($restmare!=0){
                    zeceNouazeci($restmare);}
            }
        //cazul 500-800; formarea numerelor este realizata afisand c6=D + c5=I de i ori, unde i=q-5

            elseif (($cat>=5)&&($cat<=8)){
                $i=$q-5;
                echo "$c6";

                while($i>0) // functia care ne ajuta sa afisam c1 de i ori
                {echo "$c5";
                    $i--;}
                if($restmare!=0){
                    zeceNouazeci($restmare);}
            }
            //cazul n=900
            elseif (($cat>=9) && ($cat<10) ) {
                echo "$c13";
                if($restmare!=0){
                    zeceNouazeci($restmare);}
            }


        }

echo "Numarul introdus este:". $n;
echo "<br>";
 echo "Catul este:". $q;
echo "<br>";
echo "Restul este:" .$r;
echo "<br>";
echo "Restul-1 este:".$r1."<br>";
echo "Numarul roman este: ";
    if ($n<10) {unuNoua($n);};

    if (($n>=10 && $n<100)){
        zeceNouazeci($n);
        //$r=$n%10;
       // unuNoua($r);
        //restunuNoua($r);
    };
if(($n>=100) && ($n<1000)) {osutaNouasute($n);}

echo "<br>";


//restunuNoua($n);
echo "<br>";
//echo "Catul este:". $q;






?>
</body>
</html>
