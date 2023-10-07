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
        for ($i=0; $i<count($normalarray); $i++) {
            $reversedarraythisturn = $reversedarray[count($normalarray)-($i+1)];
            $normalarraythisturn = $normalarray[$i];
//            echo "<br>$i.th turn normal: $normalarraythisturn<br>";
//            echo "<br>$i.th turn reversed: $reversedarraythisturn<br>";
            if($reversedarraythisturn == $normalarraythisturn) {
                array_push($truearray,"True");
            } else {
                array_push($truearray,"False");
            }
        }
        if(!in_array("False",$truearray)) {
            return true;
        } else {
            return false;
        }
    }
}
$number = 145;
$solution = new Solution();
print_r($solution->isPalindrome($number));
?>