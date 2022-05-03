<?php
    session_start();
    ?>
    <head>
    <title>Login with Facebook in PHP</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    </head>
    <body>     
    <?php if(isset($_SESSION['fb_id'])) {?>
        <div class = "container">
        <div class = "jumbotron">
        <h1>Hello <?php echo $_SESSION['fb_name']; ?></h1>
        </div>
        <ul class = "nav nav-list">
        <div class="avatar">
                <h3>Image</h3>
                <li><?php echo $_SESSION['fb_pic']?></li>
				<h3 class="name">Trần Hữu Hoàng</h3>
                <h3>Facebook ID</h3>
                <li><?php echo  $_SESSION['fb_id']; ?></li>
                <h3>Facebook fullname</h3>
                <li><?php echo $_SESSION['fb_name']; ?></li>
                <h3>Facebook Email</h3>
                <li><?php echo $_SESSION['fb_email']; ?></li>
                <a href="logout.php?logout">Facebook Logout</a>
        </ul>
		</div>
        </div>
    <?php }?>
    </body>
</html>