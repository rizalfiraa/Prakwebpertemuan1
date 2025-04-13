<?php 
$temansaya = ["riza","fadlan","rifal"];
print_r($temansaya); //untuk menampilkan seluruh nilai array
echo $temansaya[2];
echo "<ol>";
foreach ($temansaya as $key => $value) {
    echo"<li>$key. $value</li>";
}
echo "</ol>";
$temansaya[1] = "memet";
unset($temansaya[0]);
print_r($temansaya);

echo "<br><br><br>";
$buah = [ "m" =>"apel","a"=>"kesemek"];
print_r($buah);
echo "<br>";

//array pop
 $tims = ["naya","diki","darma","mohan"];
 array_pop($tims);
 foreach ($tims as $person) {
    echo $person.',<br/>';
 }
 echo "<br>";
//array push
$tims = ["naya", "diki","darma", "mohan"];

array_push($tims, "caca");

foreach($tims as $person) {

echo $person.'<br/>';
}
echo "<br>";
//array shift
$tims = ["naya", "diki", "darma", "mohan"];

array_shift($tims);

foreach($tims as $person) {

echo $person. '<br/>';
}
echo "<br>";
//array unshift
$tims = ["naya", "diki", "darma", "mohan"];
array_unshift($tims, "fira", "rifal");

foreach($tims as $person) {

echo $person.'<br/>';

}
?>