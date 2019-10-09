<?php
echo "Groote van piramide?\n";
$staple = readline();
if (is_numeric($staple)) {
    for ($een = 0; $een < $staple; $een++) {
        for($wee = 0; $wee <= $een; $wee++ ) {
            echo "*";
        }
        echo PHP_EOL;
    }
}

