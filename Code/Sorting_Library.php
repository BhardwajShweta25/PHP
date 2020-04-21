<?php
 //Bubble sort function
 function bubble_sort($arr, $size)
   {
        for ( $i = 0; $i < $size - 1; $i++)
        {
            for ( $j = 0; $j < $size - $i - 1; $j++)
            {
                // Do swapp$ing
               if ($arr[$j] > $arr[$j + 1])
                {
                    $temp = $arr[$j];
                    $arr[$j] = $arr[$j + 1];
                    $arr[$j + 1] = $temp;
                }
            }
        }
        echo "Array after Bubble Sort: ";
        for($i = 0; $i < count($arr); $i++)
            echo $arr[$i]." " ;

    }
    //Selection Sort function 
    function selection_sort($ar,$size)
    {
        for ($i = 0; $i < $size-1; $i++)  
        {  
            // Find the minimum element in unsorted array  
            $min_idx = $i;  
            for ($j = $i+1; $j < $size; $j=$j+1)  
            if ($ar[$j] < $ar[$min_idx])  
                $min_idx = $j;  
 
            // Swap the minimum element with the first element of unsorted array 
            $temp=$ar[$min_idx];
            $ar[$min_idx]=$ar[$i];
            $ar[$i]=$temp;  
        }  
        echo "Array after Selection Sort: ";
        for($i = 0; $i < count($ar); $i++)
            echo $ar[$i]." " ;
    }
  //Quick Sort function
    function quickSort(&$ar, $low, $high)
    {
        if ($low < $high)
        {
            /* pi is partitioning index, arr[p] is now at right place */
        $i = $low;
        $j = $high;
        while($i < $j)
        {
            while( ($ar[$i] <= $ar[$low]) && $i < $high)
                $i++;// i is pointing to the first element from left that is greater than pivot
            while($ar[$j] > $ar[$low])//arr[low]is taken as pivot
                $j--;// j is pointing to first element from right less than or equal to pivot
            if($i < $j)
            {
                $temp = $ar[$i];
                $ar[$i] = $ar[$j];
                $ar[$j] = $temp;
            }// swapped the value of ith and jth element(lesser element will be on left and higher element                // will be on right)
        }
        //by this loop lesser element will be on left of arr[j] and higher element will be on right
        $temp = $ar[$low];
        $ar[$low] = $ar[$j];
        $ar[$j] = $temp;
        $pi = $j;
        // Separately sort elements before partition and after partition
         quickSort($ar, $low, $pi - 1);
         quickSort($ar, $pi + 1, $high);
        } 
    }