<html>
    <head>
        <title>Calculator</title>
        <style>
           table {
               border: 2px solid black;
               border-collapse: collapse;
               border-spacing: 50px;
               height: 250px;
               font-size: 20;
               font-size: bold;
               }
        </style>
    </head>
    <body> 
        <h3 align ="center"> </h3>
        <form method = "post" action="Program16.php">
            <br><br>
            <table align = "center" width="30%">
                <th colspan="2">
                    Fill these details carefully, to sign up with us.
                </th>
                <tr>
                    <td align="center">Enter a:</td>
                    <td align="left"><input type="number" name="a" ></td>
                </tr>
                <tr>
                    <td align="center">Enter b:</td>
                    <td align="left"><input type="number" name="b" ></td>
                </tr>
                <tr>
                    <td align="center">Select an Operation:</td>
                    <td align="left">
                        <input type ="radio" name ="oprn" id="add" value="add">+<emsp>
                        <input type ="radio" name ="oprn" id="sub" value="sub">-<emsp>
                        <input type ="radio" name ="oprn" id="mul" value="mul">*<emsp>
                        <input type ="radio" name ="oprn" id="div" value="div">/<emsp>
                    </td>
               </tr>
               <tr>
                    <td align = "center"><emsp</td>
                    <td align = "left">
                       <input type="submit" value= "Submit" name="submit">
                       <input type="reset" value="Reset">
                   </td> 
               </tr>
           </table>
       <?php
           $flag = 1;
           if(isset($_POST["a"]))
               $a=$_POST["a"];
           else{
                echo "Mandatory Field"."<BR>";
                $flag=0;
                 }
           if(isset($_POST["b"]))
               $b=$_POST["b"];
           else{
                echo "Mandatory Field"."<BR>";
                $flag=0;
                 }
            if(isset($_POST["oprn"]) && $flag)
             { $res=0;
              if($_POST["oprn"] == "add") 
             {
                 $res= $a + $b;
              }
              else if($_POST["oprn"] == "sub")
             {
                   $res= $a - $b;
              }
              else if($_POST["oprn"] == "mul") 
             {
                  $res= $a * $b;
              }
              else 
             {
                   $res= $a / $b;
              }
              echo "Result: $res"."\n";
            }
     ?>
    </form>
</html>