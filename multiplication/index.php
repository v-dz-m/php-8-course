<?php
//
echo "<div style='padding-bottom: 1rem;'><select>";
$year = 1900;
while ($year <= 2021) {
    echo "<option>" . $year++ . "</option>";
}
echo "</select></div>";
//
$i = 2;
echo "<div style='display: flex; flex-wrap: wrap;'>";
while ($i < 10) {
    echo "<div style='padding: 0 1em;'>";
    $j = 1;
    while ($j <= 10) {
        $k = $i * $j;
        echo "{$i} * " . $j++ . " = {$k}</p>";
    }
    echo "</div>";
    $i++;
}
echo "</div>";