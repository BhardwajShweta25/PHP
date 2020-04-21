<html>
    <body> 

        <br>
        <strong>Login</strong>
        <form method="post" action="Login_Db.php">
            Username:  <input type="text" size="12" name="user">
            Password: <input type="password" size="12" name="pass">
            <input type="submit" value="Log in" name="submit" >
    
       <?php 
           if(isset($_POST["user"]))
               $user=$_POST["user"];
           if(isset($_POST["pass"]))
               $pass=$_POST["pass"];
           if(isset($_POST["submit"]))
          {       $link = mysqli_connect("localhost", "root", "", "feedback");
    $uname = mysqli_real_escape_string($link,$_POST['user']);
    $password = mysqli_real_escape_string($link,$_POST['pass']);

    if ($uname != "" && $password != ""){

        $sql_query = "select UName, Pword from user where UName='".$uname."' and Pword='".$password."'";
        $result = mysqli_query($link,$sql_query);
        $row =mysqli_num_rows($result);
        if($row){
            echo "Welcome";
            header('Second.php');
        }else{
            echo "Invalid username and password";
        }

    }

}   
      
?>
</form>
</html>