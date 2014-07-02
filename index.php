<!DOCTYPE html>
<html>
<head>
<title>Project 1</title>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" >
<meta name="description" content="Exercise 1: Clock">
<meta name="author" content="Xia Zhang">

<?php require 'logic.php'; ?>

</head>

<body>
	<p>Your time is <?php echo date('D M j g:i A'); ?>. </p>
	<p><img src="http://making-the-internet.s3.amazonaws.com/php-<?php echo $time; ?>" alt="<?php echo $alt; ?>">
	</p>
</body>

</html>
