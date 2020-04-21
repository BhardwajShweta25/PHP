<?php
    require "Sorting_Library.php";
    $arr = array(1, 5, 3, 7, 2, 9);
    bubble_sort($arr, count($arr));
    echo "<BR>";
    $arr = array(9, 8, 7, 5, 2, -1);
    selection_sort($arr, count($arr));
    echo "<BR>";
    $arr = array(11, 5, 7, 0, 8, 4);
    quickSort($arr, 0, count($arr)-1);
    echo "Array after Quick Sort: ";
    for($i = 0; $i < count($arr); $i++)
         echo $arr[$i]." " ;