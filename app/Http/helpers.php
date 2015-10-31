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

function generateRandomString($length = 10)
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!$-=';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}


function generateUnsubscribeToken()
{
    return md5(time().generateRandomString(255));
}
