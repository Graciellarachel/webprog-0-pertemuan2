<?php
    $huruf = "b";

    switch($huruf){
        case "A":
            echo "Isi Variable huruf adalah A";
            // break digunakan untuk keluar dari switch
            break;
        case "B":
            echo "Isi Variable huruf adalah B";
            break;
        case "C":
            echo "Isi Variable huruf adalah C";
            break;
        default :
            echo "Isi Variable huruf diluar 'A', 'B', dan 'C' ";
            break;            
    }
?>