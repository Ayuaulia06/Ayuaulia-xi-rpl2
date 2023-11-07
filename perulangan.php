<?php
//ayu aulia
//1. ganjil
for ($ganjil = 5; $ganjil<= 100; $ganjil++) {
if ($ganjil  % 2 == 1) {
 echo  $ganjil  ;
 echo "<br>";
    }
}
echo '<br> <br>';

//2. kelipatan
for ($i = 0; $i <= 100; $i += 8){
    echo "$i <br>";
}
echo '<br> <br>';

//3.cetak kalimat berikut menggunakan perulangan
//looping 1
for ($i = 2 ; $i<=20 ; $i +=2) {
    echo $i . "-aku jago ngodig<br>";
}
echo '<br> <br>';

//looping 2
for ($i = 19 ; $i >=1 ; $i -=2) {
if ($i % 1 == 0 ){
echo $i . "-aku seorang web developer<br>";
}
}
echo '<br> <br>';

// 5. cetak kalimat yang abc
for($bil = 1; $bil <= 10; $bil++){
    if( ( $bil % 2)== 0){
        echo"$bil hoby aku coding <br>";
}
else if ($bil % 3 == 0 ){
    echo "$bil aku seorang programer <br>";
}
else{
    echo "$bil aku sangat senang codingan <br>";
}
}



?>