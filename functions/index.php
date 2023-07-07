<?php

function get_count($arr)
{
    $count = 0;
    while ($arr[$count]) {
        $count += 1;
    }
    return $count;
}

function get_table($first, $second)
{
    $i = 1;
    echo "<div style='display: flex; flex-wrap: wrap;'>";
    while ($i <= $first) {
        echo "<div style='padding: 0 1em;'>";
        $j = 1;
        while ($j <= $second) {
            $k = $i * $j;
            echo "{$i} * " . $j++ . " = {$k}</p>";
        }
        echo "</div>";
        $i++;
    }
    echo "</div>";
}

$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$goods = [
    [
        'bla' => 10,
        'blo' => '123'
    ],
    [
        'bla' => 5,
        'blo' => '567'
    ],
    [
        'bla' => 25,
        'blo' => '234'
    ],
];

echo get_count($arr) . ", " . get_count($goods);
if (get_count($arr) > get_count($goods)):
    ?>
    <hr>
<?php
endif;

get_table(16, 10);
echo "<hr>";

$heap = [5, 6, 5, 9, 20, 3, 12, 34, 4, 2, 1, 10];
echo array_sum($heap);
echo "<hr>";

$rar = range(0, 100, 4);
echo "<pre>" . print_r($rar, true) . "</pre>";
echo "<hr>";

function get_letter_count(string $str, string $letter): int
{
    $total = 0;
    $str = strtolower($str);
    $letter = strtolower($letter);

    for ($i = 0; $i < strlen($str); $i++) {
        if ($str[$i] === $letter) {
            $total++;
        }
    }

    return $total;
}

echo get_letter_count('Antananarivo', 'a');