<html>
    <head>
      <style>
        table{
               border: 2px solid black;
               border-collapse: collapse;
               border-spacing: 50px;
               width:600px;
               height: 400px;
               font-size: 20;
               font-size: bold;
               }
       </style>
    </head>
    <body>
        <?php 
            $mysqli = new mysqli("localhost", "root", "", "feedback"); 
            $query = "SELECT * FROM feedback";
            echo '<table  border = "2px" cellspacing="2" cellpadding="2" align="center"> 
            <tr> 
              <td align ="center"> <font face="Arial">Name</font> </td> 
              <td align ="center"> <font face="Arial">Gender</font> </td> 
              <td align ="center"> <font face="Arial">Occupation</font> </td> 
              <td align ="center"> <font face="Arial">EmailAddress</font> </td> 
              <td align ="center"> <font face="Arial">Comment</font> </td> 
           </tr>';
          if ($result = $mysqli->query($query)) {
             while ($row = $result->fetch_assoc()) {
                 $field1name = $row["Name"];
                 $field2name = $row["Gender"];
                 $field3name = $row["Occupation"];
                 $field4name = $row["EmailAddress"];
                 $field5name = $row["Comment"]; 
 
        echo '<tr> 
                  <td>'.$field1name.'</td> 
                  <td>'.$field2name.'</td> 
                  <td>'.$field3name.'</td> 
                  <td>'.$field4name.'</td> 
                  <td>'.$field5name.'</td> 
              </tr>';
    }
    $result->free();
} 
?>
</body>
</html>