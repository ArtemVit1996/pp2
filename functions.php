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