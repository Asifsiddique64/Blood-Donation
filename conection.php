<?php
$connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server
$db = mysql_select_db("colleges", $connection); // Selecting Database from Server
if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
$username = $_POST['username'];
$password = $_POST['password'];
$name = $_POST['name'];
$bgroup = $_POST['bgroup'];
$bdate = $_POST['bdate'];
$address = $_POST['address'];
if($name !=''||$password !=''){
//Insert Query of SQL
$query = mysql_query("insert into students(student_name, student_email, student_contact, student_address) values ('$username','$password','$name', '$bgroup', '$bdate', '$address')");
echo "<br/><br/><span>Data Inserted successfully...!!</span>";
}
else{
echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
}
}
mysql_close($connection); // Closing Connection with Server
?>