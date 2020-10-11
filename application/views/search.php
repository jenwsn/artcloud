<div>
    <p>You searched for: <?php echo $keyword; ?> </p>
</div>
<div class="card-columns" id="recommendationCardDeck">

<?php
   $this->load->library('session');
    
    //list of all items in the user's wish list
    $wishlist_items = array();

    //retrieve all the saved items from database

    if($search_result != null){
        foreach($search_result as $row) {
            echo "<div class='card' style='width: 18rem;'>";
                echo "<img src='";
                echo base_url();
                echo "image/";
                echo $row['filepath'];
                echo "' class='card-img-top' alt='";
                echo $row['title'];
                echo "'>";
                echo "<div class='card-body'>";
                echo "<h5 class='card-title'>";
                echo $row['title'];
                echo "</h5>";
                echo "<p class='card-text'>";
                echo "By ";
                echo $row['artist'];
                echo "</p>";
                echo "</div>";
                echo "<a id='cardLinks' href='";
                echo site_url('like/index');
                echo "/";
                echo $row['artid'];
                echo "/storage";
                echo "'>";
                echo "<div class='heart'>";
                echo "<div class='card-footer like'>";
                echo "<p style='display: inline-block;'>";
                echo $row['likes'];
                echo "</p>";
                echo "<img src='";
                echo base_url();
                echo "image/heart_empty.png' id='heart_empty'alt='empty_heart'>";
                echo "</div>";
                echo "<div class='card-footer unlike'>";
                echo "<p style='display: inline-block;'>";
                echo $row['likes'];
                echo "</p>";
                echo "<img src='";
                echo base_url();
                echo "image/heart_fill.png' id='heart_empty'alt='empty_heart'>";
                echo "</div>";
                echo "</div>";
                echo "</a>";
                echo "</div>";
        }
    } else {
        echo "<div><h1>There is no matching items</h1></div>";
    }
        ?>
</div>
