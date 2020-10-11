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
	
	<body>

        <nav class="navbar">
            <a class="navbar-brand">ArtCloud</a>
            <!-- Create a form -->
            <?php echo validation_errors(); ?>
            <?php echo form_open('search/index'); ?>
            <div class='search_bar'>
                <div id="searchbar">
                    <input class="form-control" type="search" name="search_key" placeholder="Search" aria-label="Search" required>
                </div>
                <div id="searchbutton">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </div>
            </div>
            </form>

            <div class='d-inline-block'>
                <?php
                    if(!isset($_SESSION['is_signed_in'])){
                    echo "<a id='cardLinks' href='";
                    echo site_url('signin/index');
                    echo "'>Sign in / Register</a>";
                    }
            
                    if(isset($_SESSION['is_signed_in'])) {
                    echo "<a id='cardLinks' href='";
                    echo site_url('signout/index');
                    echo "'> Sign Out </a>";

                    echo "<a id='cardLinks' href='";
                    echo site_url('profile/index');
                    echo "'> My Profile </a>";
                    }
                ?>
            </div>
        </nav>

        <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                <a class="nav-item nav-link active" href="<?php echo site_url('start/index');?>">Explore <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href="#">Events</a>
                <a class="nav-item nav-link" href="#">Sales</a>
                <a class="nav-item nav-link" href="#">News</a>
                <a class="nav-item nav-link" href="#">My Portfolio</a>
                <a class="nav-item nav-link" href="<?php echo site_url('storage/index');?>" >My Storage</a>
                </div>
            </div>
        </nav>
