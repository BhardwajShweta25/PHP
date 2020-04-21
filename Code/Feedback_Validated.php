<html>
    <head>
        <title>Feedback</title>
        <style>
           table {
               border: 2px solid black;
               border-collapse: collapse;
               border-spacing: 50px;
               height: 400px;
               font-size: 20;
               font-size: bold;
               }
        </style>
    </head>
    <body> 
        <strong>This data will be stored in database</strong>
        <h3 align ="center"> </h3>
        <form method = "post" action="Feedback_Validated.php">
            <br><br>
            <table align = "center" width="40%">
                <th colspan="2">
                    Please spare few minutes for giving your valuable feedback
                </th>
                <tr>
                    <td align="center">Your Name:</td>
                    <td align="left"><input type="text" name="name" ></td>
                </tr>
                <tr>
                    <td align="center">Gender:</td>
                    <td align="left">
                        <select name="gender" size="1">
                           <option value="M">Male</option>
                           <option value="F">Female</option>
                        </select>
                    </td>
               </tr>
               <tr>
                   <td align="center">Occupation:</td>
                   <td align="left">
                       <input type="checkbox" name="occupation" value="Service">Service
	     <input type="checkbox" name="occupation" value="Self-employed">Self-employed
	     <input type="checkbox" name="occupation" value="Other">Other</td>
               </tr>
               <tr>
                   <td align ="center">Email address:</td>
                   <td align ="left"><input type="text" name="email"></td>
               </tr>
               <tr>
                   <td align ="center">Comment:</td>
                   <td align="left">
                       <textarea name = "comment" wrap="hard" maxlength = "1000" ></textarea>
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
           $flag =1;
           if(isset($_POST["name"])&&$_POST["name"]!=NULL )
           {    $name=$_POST["name"];}
           else 
           {
                echo "Name is mandatory field"."<BR>";
                $flag = 0;
           }
           if(isset($_POST["occupation"]))
               $occupation=$_POST["occupation"];
           else
          {    echo "Select one of the option"."<BR>";
               $flag=0;
          }
           if(isset($_POST["gender"]))
               $gender=$_POST["gender"];
           if(isset($_POST["comment"]))
          {   
               $comment=$_POST["comment"];
               $cnt = count(explode(" ", $comment));
               $left_words = 20-$cnt;
               if($left_words>0)
               {    
                     echo"$left_words words left out of 20."."<BR>";
                     $flag =0;
               }
          }
           if(isset($_POST["email"]))
          {     
               $email=$_POST["email"]; 
               if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                     echo "Invalid email format"."\n";
                     $flag =0;
               }
          }
           if(isset($_POST["submit"]) && $flag)
           {
                $link = mysqli_connect("localhost", "root", "", "feedback");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt insert query execution
$sql = "INSERT INTO feedback VALUES('$name',  '$gender',  '$occupation', '$email', '$comment')";
if(mysqli_query($link, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
}
      
      ?>   
</form>
   </body>
</html>
