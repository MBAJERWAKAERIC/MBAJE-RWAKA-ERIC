<?php

// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$email = "";

if (empty($_POST["email"])) {
     $emailErr = "Email is required";
   } else {
     $email = test_input($_POST["email"]);
     // check if e-mail address is well-formed
     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
       $emailErr = "Invalid email format"; 
     }
     }
     function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Slau || Parentt</title>
</head>

<body>
<table width="704" height="485" border="1" align="center">
<tr>
  <td width="441"><form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data" name="form1">
    <table width="704" height="485" border="1" align="center">
      <tr></tr>
      <tr>
        <td colspan="3"><h1 align="center">WELCOME TO ST.LARENCE</h1></td>
      </tr>
      <tr>
        <td width="122"><p><strong>GUARDIAN</strong><strong>DETAILS</strong></p></td>
        <td width="123"><a href="index.php"><img src="images/back36.png" /></a></td>
      </tr>
      <tr>
        <td colspan="2">&nbsp;</td>
        <td width="441"><p>Guardian please fill </p>
          <table width="384" border="0">
            <tr>
              <td width="171">Full Name</td>
              <td colspan="2"><label for="fullname"></label>
                <input type="text" name="fullname" id="fullname" /></td>
              </tr>
            <tr>
              <td>Nationality</td>
              <td colspan="2"><label for="select"></label>
                <select name="nationality" id="select">
                  <option value="Uganda">Uganda</option>
                  <option value="Kenya">Kenya</option>
                  <option value="Tz">Tz</option>
                </select></td>
              </tr>
            <tr>
              <td>Gender</td>
              <td colspan="2"><input type="radio" name="gender" id="radio" value="Male" />
                <label for="radio">Male
                  <input type="radio" name="gender" id="radio2" value="Female" />
                  Female</label></td>
              </tr>
            <tr>
              <td>Phone Number</td>
              <td colspan="2"><label for="textfield2"></label>
                <input type="text" name="phonen" id="textfield2" /></td>
              </tr>
            <tr>
              <td>Email Address</td>
              <td colspan="2"><label for="textfield3"></label>
                <input type="text" name="email" id="textfield3" />
                 <span class="error">* <?php echo $emailErr;?></span>
                 </td>
              </tr>
            <tr>
              <td>Occupation</td>
              <td colspan="2"><label for="textfield4"></label>
                <input type="text" name="occupation" id="textfield4" /></td>
              </tr>
            <tr>
              <td>Passport Number / ID</td>
              <td colspan="2"><label for="textfield5"></label>
                <input type="text" name="passport" id="textfield5" /></td>
              </tr>
            <tr>
              <td>Comment</td>
              <td colspan="2"><label for="textarea"></label>
                <textarea name="Comment" id="textarea" cols="30" rows="5"></textarea></td>
              </tr>
            <tr>
              <td>&nbsp;</td>
              <td width="67"><input type="reset" name="Reset" id="button" value="Reset" /></td>
              <td width="132"><input type="submit" name="button2" id="button2" value="Submit" /></td>
              </tr>
          </table></td>
      </tr>
      <tr>
        <td height="31" colspan="3">St.lawrence University</td>
      </tr>
    </table>
    <p>&nbsp;</p>
  </form></td>
</tr>
</table>
<?php
echo "<h2>Your Input:</h2>";
echo "<br>";
echo $email;

?>
</body>
</html>