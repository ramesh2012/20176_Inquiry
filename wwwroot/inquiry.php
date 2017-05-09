<?php
ob_start();
session_start();


//var_dump($_SESSION);
if (true === isset ($_SESSION['buffer']['error_detail'])){
 $error_detail=$_SESSION['buffer']['error_detail'];
} else {

   $error_detail = array();
}

function h($s){
 return htmlspecialchars($s, ENT_QUOTES);
}


?>

<html>
<link rel="stylesheet" type="text/css" href="css/style.css">
<body>
<?php
 if(0 < count($error_detail)){
 echo '<div style="color:red;">error occur </div>';
}
?>


<?php
if (isset ($error_detail['error_must_email'])){
  echo '<div style="color:red;">email is required </div>';
}
?>


 <form action ="./inquiry_fin.php" method="post">
 Email: <input type="text" name="email"
value="<?php echo h((string)@$input['email']); ?>"><br>
 Name:<input type="text" name="name"
value="<?php echo h((string)@$input['name']); ?>"><br>
 Birthday: <input type="text" name="birthday"
value="<?php echo h((string)@$input['birthday']); ?>"><br>
 Inquries: <textarea  name="body">
<?php echo h((string)@$input['body']);?></textarea><br>
<button>Inquiry</button>
</form>
</body>
</html>

