<?php

class Solution
{

    /**
     * @param Float $x
     * @param Integer $n
     * @return Float
     */
    function myPow(float $x, $n)
    {
        $x = floatval($x);
        return (float)pow($x, $n);
    }
}

?>