<?php
    $number = mt_rand(100, 999);

    $splitNumber = str_split($number);

    $sum = array_sum($splitNumber);

    $reversedNumber = implode(array_reverse($splitNumber));

    rsort($splitNumber);

    $bigNumber = implode($splitNumber);

    echo "<h4>Ваше число = " . $number . "</h4>";
    echo "<ol>";
    echo "<li>Сума = " . $sum . "</li>";
    echo "<li>Зворотнє число = " . $reversedNumber . "</li>";
    echo "<li>Найбільше = " . $bigNumber . "</li>";
    echo "</ol>";
?>