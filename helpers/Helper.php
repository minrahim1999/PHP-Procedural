<?php

declare(strict_types = 1)
;

function prettyPrint($result)
{
    echo "<pre>";

    if (is_array($result))
    {
        print_r($result);
    }
    else
    {
        var_dump($result);
    }

    echo "</pre>";

}

function formatDollarAmount(float $amount): string
{

    $isNegative = $amount < 0;

    return ($isNegative ? '-' : '') . '$' . number_format(abs($amount), 2);
}

function formatDate(string $date): string
{

    return date('j M. Y', strtotime($date));
}

?>