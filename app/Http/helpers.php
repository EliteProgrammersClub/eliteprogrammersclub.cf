<?php


function asset($path)
{
    return url('assets/'.$path);
}

function ordinal($num)
{
    $last = substr($num, -1);
    if ($last > 3  or
       $last == 0 or
       ($num >= 11 and $num <= 19)) {
        $ext = 'th';
    } elseif ($last == 3) {
        $ext = 'rd';
    } elseif ($last == 2) {
        $ext = 'nd';
    } else {
        $ext = 'st';
    }
    return $num.$ext;
}
