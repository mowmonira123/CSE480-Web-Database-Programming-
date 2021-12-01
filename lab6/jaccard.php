<?php
$f1 = fopen("file1.txt", "r");
$f2 = fopen("file2.txt", "r");

while(!feof($f1)){
    $file1 = fgets($f1);
    $sfile1 = explode(" ", $file1);
}

while(!feof($f2)){
    $file2 = fgets($f2);
    $sfile2 = explode(" ", $file2);
}

$uni_wfile1 = array_unique($sfile1);
$uni_wfile2 = array_unique($sfile2);

$lenf1 = count($uni_wfile1);
$lenf2 = count($uni_wfile2);

$intersection = 0;

if($lenf1 >= $lenf2){
    
    for($i=0 ; $i < $lenf1 ; $i++){
        for($j=0 ; $j < $lenf2 ; $j++){
            if( $uni_wfile1[$i] == $uni_wfile2[$j] ){
                $intersection ++;
            }
        }     
    }
    }else{
    
    for($i=0 ; $i < $lenf2 ; $i++){
        for($j=0 ; $j < $lenf1 ; $j++){
            if($uni_wfile2[$i] == $uni_wfile1[$j]){
                $intersection ++;
            }
        }
        
    }
}

$union = (count($uni_wfile1)+count($uni_wfile2)) - $intersection;

$jaccard = ($intersection/$union);

$sim = "The similarity of the word content from both files using Jaccard
similarity is : $jaccard ";

echo "$sim";

fclose($f1);
fclose($f2);

?>