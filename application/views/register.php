<!doctype html>
<html lang="en">

	<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
     integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->
    <link rel="stylesheet" type="text/css" 
      href="<?php echo base_url();?>css/style.css">
    <title>ArtCloud</title>
	</head>	
	
	<body class="signin_body">
        <div class="signin_form d-flex flex-column align-items-center">
            <a class="form_title" href="<?php echo site_url('start/index');?>">
                <h1>ArtCloud</h1>
            </a>
            <h3>For the broader art community</h3>

            <div class="d-flex flex-column align-items-center mt-3">
                <h1 class="display-4">Register</h1>
            </div>

           <div>
               <!-- Create a form -->
                <?php echo validation_errors(); ?>
                <?php echo form_open('register/index'); ?>
                <!-- <form method="POST" action="registerfunc.php" class="d-flex flex-column align-items-center mt-2"> -->
                    <div class="form-group">
                        <input id="username-input" type="text" name="register_username" placeholder="Enter username" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <input id="useremail-input" type="email" name="register_email" placeholder="Enter email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <input id="userphone-input" type="text" name="register_phonenum" placeholder="Enter phone number" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <input id="psw" name="register_password"  type="password" placeholder="Enter password" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <input name="register_password_cfrm" id="pswconfirm" type="password" placeholder="Confirm password" class="form-control" required>
                    </div>
                    <div class="text-center mt-3">
                        <button id="submit-button" type="submit" class="btn btn-primary text-center">Register</button>
                    </div>
                <?php
                echo form_close();
                ?>
            </div>

            <div>
                <small>Already have an account?</small>
                <a href="<?php echo site_url('signin/index'); ?>"><small>Sign in</small></a>
            </div>
        </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  </body>
</html>