<?php
function printArr(array $numbers)
{
    foreach ($numbers as $value)
    {
        echo "$value<br>";
    }
}

function largest(array $numbers) {
    return max($numbers);
}

function removeDups(array $numbers) {
    return array_unique($numbers);
}

function distribution(array $numbers) {
    $nums = array_count_values($numbers);

    $int = 0;

    echo "<p>[";
    foreach ($nums as $key => $value) {
        $int++;
        if ($int >= sizeof($nums)){
            print "$key=>$value";
        }
        else {
            print "$key=>$value, ";
        }

    }
    echo "]</p>";

}