<?php

function getCurrencyCode()
{
    if (isset($_COOKIE['currencyCode']) == false) {
        echo "GBP";
    } else {
        echo $_COOKIE['currencyCode'];
    }
}

function getCurrencySymbol()
{
    if (isset($_COOKIE['currencySymbol']) == false) {
        echo "£";
    } else {
        echo $_COOKIE['currencySymbol'];
    }
}
