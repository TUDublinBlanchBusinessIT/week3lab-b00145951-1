<?php
for ($i=0;$i<=20;$i++) {
    echo "$i, ";
    if ($i %5 == 0 && $i > 0) {
        echo "<br>";
    }
}

?>
#code will produce line break after counts of five if the loop is divisible by 5