
<?php
include("../control/process.php");
?>
<html>
    <body>
    <form action ="" method="POST" enctype="multipart/form-data">
<table>
  <tr> <td>First Name: </td> 
  <td><input type="Text" name="fn"></td><td><?php echo $err1 ?></td></tr>
  <tr> <td>Last Name: </td>  
  <td><input type="Text" name="ln"></td><td><?php echo $err2 ?></td></tr>
  <td>Age: </td>  
  <td><input type="Text" name="age"></td></tr>
  <td>Designation: </td> 
  <td><input type="radio" name="des" value = "Junior Programmer">Junior Programmer</td>
  <td><input type="radio" name="des" value = "Senior Programmer">Senior Programmer</td>
  <td><input type="radio" name="des" value = "Project Leader">Project Lead</td>
  <td><?php echo $err3 ?></td></tr>
  <tr> <td>Preferred Language: </td>
  <td><input type="checkbox" name="prel[]" value = "JAVA">JAVA</td> 
  <td><input type="checkbox" name="prel[]" value = "PHP">PHP</td> 
  <td><input type="checkbox" name="prel[]" value = "C++">C++</td> 
  <td><?php echo $err4 ?></td>
</tr>
  <tr> <td>E-mail: </td>
  <td><input type="email" name="em"></td> 
  <td><?php echo $err5 ?></td>
</tr>
  <tr><td>Password: </td>
  <td><input type="password" name="pass"></td>
  <td><?php echo $err6 ?></td>
</tr>
  <tr><td>Please choose a file: </td>
  <td><input type="file" name="myfile"></td>
  <td><?php echo $err7,$err8 ?></td>
</tr>
  <td><input type="submit" name="sm" value="Submit">

  <input type="reset" name="rs"></td> </tr>
  <tr><td><?php echo $dataerr ?></td></tr>
</form>

    </body>
</html>