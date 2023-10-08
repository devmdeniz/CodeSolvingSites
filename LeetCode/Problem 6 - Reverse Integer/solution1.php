<?php

class Solution {

    /**
     * @param Integer $x
     * @return Integer
     */
    function ReverseArray(array $array)
    {
        $reversedarray = array();
        for ($i = 0; $i < count($array); $i++) {
            $lastone = $array[count($array)-($i+1)];
            array_push($reversedarray,$lastone);
        }
        return $array = $reversedarray;
    }

    function reverse($x) {
        if($x < 0 ) {
            $negative = 1;
        } else {
            $negative = 0;
        }
        $numberarray = str_split($x);
        $numberarray = $this->ReverseArray($numberarray);
        $numberarray = intval(implode("", $numberarray));
        if($negative == 1) {
            return intval(-$numberarray);
        } else {
            return $numberarray;
        }
    }
}
$x = -145;
$Solution = new Solution();
echo $Solution->reverse($x);


?>