<?php
$myfile = fopen("FoodList.txt", "a") or die("Unable to open file!");
$txt = $_GET["FoodName"];
fwrite($myfile, $txt);
fwrite($myfile, $txt);
$txt = $_GET["material"];
fwrite($myfile, $txt);
fclose($myfile);

if ($myfile == True){
    echo "Your Food Has Been Saved";
}
else{
    echo "Try again";
}