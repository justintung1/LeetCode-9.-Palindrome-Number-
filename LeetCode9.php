<?php
    class Solution {

        /**
         * @param Integer $x
         * @return Boolean
         */
        function isPalindrome($x) {
            $str=(string)$x;
            $current="";
            for($i=strlen($str)-1;$i>=0;$i--){
                $current.=$str[$i];
            }
            if($current==$str){
                return true;
            }
            else{
                return false;
            }
        }
    }
?>