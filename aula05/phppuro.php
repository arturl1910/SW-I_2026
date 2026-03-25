<?php
$MSG = "Sua média é:  ";
$nome = "User";
$M1 = 0;
$M2 = 0;
$M3 = 0.5;
$media = 0;
$media = (($M1 + $M2 + $M3)/3);

if ($media >=9) {
    echo "$MSG MB";
}

if ($media <9 && $media >=7){
     echo "$MSG B";
}

if ($media <7 && $media >=4) {
     echo "$MSG R";
}

if ($media <4 && $media >=1) {
     echo "$MSG  I";
}

if ($media <1) {
    echo "$MSG N/A";
}



