<?php
    printTable(4,4);

    function printTable($row, $col)
    {
        echo "<table width='300px' height='300px'>";
        for($i = 0; $i < $row; $i++) {
            echo "<tr>";
            for($j = 0; $j < $col; $j++) {
                $color = getColor();
                echo "<td style='background-color: $color'></td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }

    function getColor()
    {
        $colors = array('black', 'green', 'blue', 'yellow', 'orange', 'purple', 'gray', 'pink');
        $randomIndex = array_rand($colors);
        return $colors[$randomIndex];
    }
?>