<?php
$myfile = fopen("FoodList.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("FoodList.txt"));
fclose($myfile);

