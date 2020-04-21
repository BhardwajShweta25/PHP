<?php
    function sel_sort($arr)
    {
        for ($i = 0; $i < count($arr)-1; $i=$i+1)  
            {  
            // Find the minimum element in unsorted array  
            $min_idx = $i;  
            for ($j = $i+1; $j < count($arr); $j=$j+1)  
            if ($arr[$j] < $arr[$min_idx])  
                $min_idx = $j;  
 
            // Swap the minimum element with the first element of unsorted array 
            $temp=$arr[$min_idx];
            $arr[$min_idx]=$arr[$i];
            $arr[$i]=$temp;  
        }
    }
    function calc_median($arr)
    {
        sel_sort($arr);
        $size = count($arr);
        return $arr[(int)($size/2)];
    }
    $numbers = array(4, 2, 9, 3, 5, 1);
    echo "Median of  ";  
    for ($i = 0; $i < count($numbers); $i=$i+1)  
    {
         echo $numbers[$i]."  ";
    }
    echo "is: ".calc_median($numbers);   
    // calc_median() returns lower median of the array 
