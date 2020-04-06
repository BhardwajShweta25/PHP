/* Create an associative array of 6 students, 
 * where the roll no is the key and value is the array of 
 * {name, date of birth, course, batch year}. 
 * Display the student details in a HTML table as shown below. 
 * All six student rows should be displayed. 
 * The background color of the row should be alternate.
 */
<html>
    <head>
    <title>Program 2</title>
    <style>
          table, th, td {
              padding: 5px;
              border: 3px solid black; 
              border-collapse: collapse;
          }
          tr:nth-child(even) {background-color: #ffdb58;}
    </style>
    </head>
    <body>
    <?php
 $students = [
  '101' =>[ 'David',
                '19-03-2000',
                'COMPSC',
                '2018'],
  '102' => ['Mary',
                '25-04-2001',
                'POLSC',
                '2019'],
   '104' =>['Charlie',
                '22-06-2000',
                'PSYCH',
                '2018']
];
?>
<table >
  <thead>
    <tr bgcolor = "#ADD8E6">
      <th>Roll No.</th>
      <th>Name</th>
      <th>Date of Birth</th>
      <th>Course</th>
      <th>Batch Year</th>
    </tr>
  </thead>
  <tbody>
    <?php
    foreach($students as $students => $info) {
        // $students contains an inner array
        echo "<tr><td>$students</strong></td>";
        foreach($info as $info)   {
            echo "<td>$info</td>";
      }
      echo '</tr>';
    }
    ?>
  </tbody>
</table>
    </body>
</html>