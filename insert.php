<!DOCTYPE html>
<html>
<head>
<title>PHP insertion</title>
<link href="css/insert.css" rel="stylesheet">
</head>
<body>
<div class="maindiv">
<!--HTML Form -->
<div class="form_div">
<div class="title">
<h2>Insert Data In Database Using PHP.</h2>
</div>
<form action="insert.php" method="post">
<!-- Method can be set as POST for hiding values in URL-->
<h2>Form</h2>
<label>UserName:</label>
<input class="input" name="username" type="text" value="">
<label>Password:</label>
<input class="input" name="Password" type="Password" value="">
<label>Name:</label>
<input class="input" name="name" type="text" value="">
<label>Blood Group:</label>
<input class="input" name="bgroup" type="text" value="">
<label>Birth date:</label>
<input class="input" name="bdate" type="text" value="">
<label>Living District:</label>
<input class="input" name="address" type="text" value="">
<input class="submit" name="submit" type="submit" value="Insert">
</form>
</div>
</div>
</body>
</html>