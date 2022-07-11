<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>BCA Admin Panel </title>
</head>
<body>
<form action="dbtest.php" method="POST">

<label for="uname">First Name</label>
<input type="text" id="uname" name="uname" placeholder="Enter Name" value="" maxlength="50" required="">
<label for="uage" class="">Age</label>
<input type="text" id="uage" name="uage" placeholder="Enter Age" value="" maxlength="50" required="">
<label for="uemail">Email</label>
<input type="email" id="uemail" name="uemail" placeholder="Enter Email" value="" required="">

<button type="submit" value="addNewUser">Save changes
</button>
</form>
</body>

</html>
