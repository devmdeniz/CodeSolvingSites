<?php
class Solution {

    /**
     * @param Integer $x
     * @return Boolean
     */
    function isPalindrome($x) {
        $array = array_map('intval', str_split($x));
        $reversedarray = array();
        for($i=0; $i<count($array); $i++){
            $newelement = $array[count($array)-($i+1)];
            array_push($reversedarray,$newelement);
        }
        $truefalse = array();
        for($i=0; $i<count($array); $i++) {
            $normalarray = $array[$i];
            $reversedarraythisturn = $reversedarray[$i];
            if($normalarray == $reversedarraythisturn) {
                array_push($truefalse,"True");
            } else {
                array_push($truefalse,"False");
            }
        }
        if(!in_array("False",$truefalse)){
            return true;
        } else {
            return false;
        }
    }}
?>