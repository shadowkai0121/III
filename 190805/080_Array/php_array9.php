<?php
function cmp($a, $b)
{
    if ($a == 2 || $b == 2) {
        return 1;
    }
    return ($a > $b) ? -1 : 0;
}

$a = array(3, 2, 5, 6, 1);
usort($a, "cmp");
foreach ($a as $key => $value) {
    echo "$key: $value <br />";
}
