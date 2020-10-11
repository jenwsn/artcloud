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
                <h1 class="display-4">Sign In</h1>
            </div>

            <div class="d-flex flex-column align-items-center mt-3">
                <?php
                    $this->load->library('session');
                    if(!isset($_SESSION['is_signed_in']) && isset($_SESSION['attempt_signin'])){
                    echo "<p> Wrong username or password. Please try it again.</p>";
                    }
                ?>
                <!-- Create form -->
                <?php echo validation_errors(); ?>
                <?php echo form_open('signin/index'); ?>
                <div class="form-group col-xs-5 col-lg-10 col-centered" style="width: 150%;">
                    <input id="username-input" type="text" name="username" placeholder="Enter username" class="form-control" required>
                </div>
                <div class="form-group col-xs-5 col-lg-10 col-centered" style="width: 150%;">
                    <input id="password-input" type="password" name="password" placeholder="Enter password" class="form-control" required>
                </div>
                <div class="text-center mt-3">
                    <button id="submit-button" type="submit" class="btn btn-primary text-center">Sign In</button>
                </div>
                </form>
            </div>

            <div>
                <small>Don't have an account?</small>
                <?php
                //URL helper
                $this->load->helper('url');

                if(!isset($_SESSION['is_signed_in'])){
                    echo "<a href='";
                    echo site_url('register/index');
                    echo "'><small>Register now</small></a>";
                }
                ?>
            </div>
        </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  </body>
</html>