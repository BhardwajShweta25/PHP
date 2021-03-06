<?php
    function binarySearch($arr, $l, $r, $x) 
   { 
       if ($r >= $l) 
       { 
            $mid = $l + ($r - $l)/2; 
            // If the element is present at the middle itself 
            if ($arr[$mid] == $x)  
                return true; 
            // If element is smaller than mid, then it can only be present 
            // in left subarray 
            if ($arr[$mid] > $x) 
                return binarySearch($arr, $l, $mid - 1, $x); 
            // Else the element can only be present in right subarray 
            return binarySearch($arr, $mid + 1, $r, $x); 
   } 
  
   // We reach here when element is not present in array 
        return false; 
} 
    $ar = array(1, 3, 5,8, 15, 23);
    // $x = 15;
    $x = 7;
    $pos = binarySearch($ar, 0, count($ar), $x);
    if($pos)
        echo "$x is found";
    else
        echo "$x not found";
