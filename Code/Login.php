<html>
    <body> 
        <?php 
            require 'header.php';
        ?>
        <br>
        <strong>Login</strong>
        <form method="post" action="Login.php">
            Username:  <input type="text" size="12" name="user">
            Password: <input type="password" size="12" name="pass">
            <input type="submit" value="Log in" name="submit" >
       </form> 
        <?php
            $userName = $_POST["user"];
            $userPassword = $_POST["pass"];
            $login = false;
            $user_info = array(
               "Shweta" => "12345",
               "Yash" => "2468",
               "Swati" => "369",
               "Chaitanya" => "@cd",
               "Devanshi" => "@dc"
                );
             foreach ($user_info as $key => $value)
            {
                $login = ($key === $userName && $value === $userPassword) ? true : false;
                if($login) break;
            }
            if(isset($_POST["submit"]))
           {  ob_clean();
               include 'header.php';
               if($login) 
                   echo "<p><h4>Login Success</h4></p>";
               else 
                   echo "<p><h4>Login Failed</h4></p>" . "<br>";
           }
      ?>
      <br>
      <?php   
          include 'footer.php';
      ?>
    </body>
</html>