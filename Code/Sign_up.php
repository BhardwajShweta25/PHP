<html>
    <head>
        <title>SignUp</title>
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
        <h3 align ="center"> </h3>
        <form method = "post" action="Sign_up.php">
            <br><br>
            <table align = "center" width="40%">
                <th colspan="2">
                    Fill these details carefully, to sign up with us.
                </th>
                <tr>
                    <td align="center">First Name:</td>
                    <td align="left"><input type="text" name="fname" ></td>
                </tr>
                <tr>
                    <td align="center">Last Name:</td>
                    <td align="left"><input type="text" name="lname" ></td>
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
                    <td align="center">DOB:</td>
                    <td align="left"><input type="date" id="birthday" name="dob"></td>
                </tr>
                    <td align="center">Username:</td>
                    <td align="left"><input type="text" name="uname" ></td>
                </tr>
                <tr>
                    <td align="center">Password:</td>
                    <td align="left"><input type="Password" name="pass" ></td>
                </tr>
               <tr>
                   <td align ="center">Email address:</td>
                   <td align ="left"><input type="text" name="email"></td>
               </tr>
               <tr>
                   <td align="left"></td>
                   <td align="left">
                       <input type="checkbox" name="tnc" value="tnc">I have read all the terms and condtions</td>
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
           if(isset($_POST["fname"]))
               $fname=$_POST["fname"];
           if(isset($_POST["lname"]))
               $lname=$_POST["lname"];
           if(isset($_POST["pass"]))
               $password=$_POST["pass"];
           if(isset($_POST["gender"]))
               $gender=$_POST["gender"];
           if(isset($_POST["uname"]))
               $username=$_POST["uname"];
           if(isset($_POST["email"]))
               $email=$_POST["email"]; 
           if(isset($_POST["tnc"]))
               $tnc=$_POST["tnc"];
           if(isset($_POST["dob"]))
               $dob=$_POST["dob"];
           if(isset($_POST["submit"]))
          {       $link = mysqli_connect("localhost", "root", "", "feedback");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt insert query execution
$sql = "INSERT INTO user VALUES('$fname',  '$lname',  '$username', '$password', '$email','$gender', '$dob')";
if(mysqli_query($link, $sql)){
    echo "WELCOME to our community";
} else{
    echo "Please try again" . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
}
      
      ?>     
</form>
   </body>
</html>
