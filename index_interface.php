<?php
ini_set('display_errors', 1);

interface parent1
{
    function sum($a, $b);

    function sub($a, $b);
}

interface parent2
{
    function mul($a,$b);
}

class Base implements parent1,parent2 {
    function sum($a, $b)
    {
        return $a + $b;
    }

    function sub($a, $b)
    {
        return $a - $b;
    }

    function mul($a, $b)
    {
        return $a * $b;
    }
}

$base = new Base();
echo $base->sum(10,50)."\n";
echo $base->sub(50,10)."\n";
echo $base->mul(2,5);