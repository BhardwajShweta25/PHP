# Program1: Write a PHP script to print the date in ten different formats. 
<?php
    echo "<br>";
    echo "Date format 1: ".date("d")."/".date("m")."/".date("y");
    echo "<br>";
    echo "Date format 2: ".date("d")."-".date("M")."-".date("Y");
    echo "<br>";
    echo "Date format 3: ".date("j F Y ");
    echo "<br>";
    echo "Date format 4: ".date("d F Y");
    echo "<br>";
    echo "Date format 5: ".date("d F Y, A");
    echo "<br>";
    echo "Date format 6: ".date("d n Y");
    echo "<br>";
    echo "Date format 7: ".date("d n y");
    echo "<br>";
    echo "Date format 8: ".date("d M Y");
    echo "<br>";
    echo "Date format 9: ".date("jS M Y");
    echo "<br>";
    echo "Date format 10: ".date("d/n/y, P");
    echo "<br>";

