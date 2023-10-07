<?php
class Solution {

    /**
     * @param Integer $x
     * @return Boolean
     */
    function isPalindrome($x) {
        $normalarray = array();
        $reversedarray = array();
        for ($i=0; $i<strlen($x); $i++){
            if ($i == 0 || $i % 2 == 0) {
                $number = 1;
            } else if($i % 2 != 0) {
                $number = -1;
            }
            $substr = substr($x,$i,$number);
            array_push($normalarray,$substr);
            array_push($reversedarray,$substr);
        }
        $truearray = array();
        array_reverse($reversedarray);
        for ($i=0; $i<count($reversedarray); $i++) {
            $reversedarraythisturn = $reversedarray[$i];
            $normalarraythisturn = $normalarray[$i];
            if($normalarraythisturn == $reversedarraythisturn) {
                array_push($truearray,"True");
            } else {
                array_push($truearray,"False");
            }
        }
        $searcharray = array_search("False",$truearray);
        if($searcharray > 0) {
            return false;
        } else{
            return true;
        }
    }
}
$number = 121;
$solution = new Solution();
print_r($solution->isPalindrome($number));
?>