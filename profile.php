<?php
session_start();
?>
<head>
<title>Login with Facebook in PHP</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>     
<?php if($_SESSION['fb_id']) {?>
<div class = "container">
<div class = "jumbotron">
<h1>Hello <?php echo $_SESSION['fb_name']; ?></h1>
<p>Welcome to Tutsmake.com</p>
</div>
<ul class = "nav nav-list">
<h4>Image</h4>
<li><?php echo $_SESSION['fb_pic']?></li>
<h4>Facebook ID</h4>
<li><?php echo  $_SESSION['fb_id']; ?></li>
<h4>Facebook fullname</h4>
<li><?php echo $_SESSION['fb_name']; ?></li>
<h4>Facebook Email</h4>
<li><?php echo $_SESSION['fb_email']; ?></li>
</ul>
</div>
<?php } ?>
</body>
</html>