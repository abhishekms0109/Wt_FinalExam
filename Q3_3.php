<?php
$myfile = fopen("test.txt", "w") or die("Unable to open file!");
$txt = "Hi I am Abhishek, Roll no A054 from Batch 3 & currently pursuing MCA from MPSTME \n";
fwrite($myfile, $txt);
fclose($myfile);
?>