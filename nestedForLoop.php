<?php
echo 'table border="1">'; #builds html table

for ($i=1;$i<=15;$i++) { #beginning of outer loop
    echo '<tr>'; #row
    for ($j = 1; $j <=20; $j++) {
        echo '<td>' . $i . ',' . $j . '</td>'; #inner loop
    }
    echo '</tr>';
}
echo '</table>';

?>