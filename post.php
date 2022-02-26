<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP FORM</title>
</head>
<body>

<form action="process.php" method="POST" enctype="multipart/form-data">
  <table border="1" cellpadding="10">
    <tr>
      <td>Your Full Name</td>
      <td><input type="text" /></td>
    </tr>
    <tr>
      <td>Your Email Address</td>
      <td><input type="email" /></td>
    </tr>
    <tr>
      <td>Your Password</td>
      <td><input type="password" /></td>
    </tr>
    <tr>
      <td>Your Gender</td>
      <td>
        <input type="radio" name="gender" />Male
        <input type="radio" name="gender" />Female
      </td>
    </tr>
    <tr>
      <td>Your Country</td>
      <td>
        <select>
          <option value="">Bangladesh</option>
          <option value="">America</option>
          <option value="">Canada</option>
        </select>
      </td>
    </tr>
    <tr>
      <td>Your Profile Picture</td>
      <td><input type="file"/></td>
    </tr>
    <tr>      
      <td align="right" colspan="2">
        <input type="submit" value="registration"/>
      </td>
    </tr>
  </table>
</form>

</body>
</html>