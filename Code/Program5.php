<?php
    function binarySearch($arr, $l, $r, $x) 
   { 
       if ($r >= $l) 
       { 
            $mid = $l + ($r - $l)/2; 
            // If the element is present at the middle itself 
            if ($arr[$mid] == $x)  
                return $mid; 
            // If element is smaller than mid, then it can only be present 
            // in left subarray 
            if ($arr[$mid] > $x) 
                return binarySearch($arr, $l, $mid - 1, $x); 
            // Else the element can only be present in right subarray 
            return binarySearch($arr, $mid + 1, $r, $x); 
   } 
  
   // We reach here when element is not present in array 
        return -1; 
} 
    $ar = array(1, 3, 5, 8, 15, 23);
    // $x = 8;
    $x = 18; 
    $pos = binarySearch($ar, 0, count($ar), $x);
    if($pos >= 0)
        echo "$x found at index: $pos";
    else
        echo "$x not found";
