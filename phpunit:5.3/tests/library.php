<?php
function fibonacci($index)
{
    for ($previous = 1, $current = 1; $index > 2; $index--) {
        $next = $previous + $current;
        $previous = $current;
        $current = $next;
    }

    return $current;
}
