<?php 
if (!empty($_POST['enter'])) {
echo 'Запрос...';
exit;
}
include 'index.php';
Head('Sign in')
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Sign in</title>
</head>

<body>


<div class="wrapper">
<div class="header"></div>
<div class="content">
<?php Menu() ?>
<div class="Page">
<form method="POST" action="login.php">
<br><input type="text" name="login" placeholder="Login" required>
<br><input type="password" name="password" placeholder="Password" required>
<br><br><input type="submit" name="enter" value="Sign in"> <input type="reset" value="Clear">
</form>
</div>
</div>

<?php Footer() ?>
</div>
</body>
</html>

