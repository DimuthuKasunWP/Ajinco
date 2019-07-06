<?php include_once('header.php'); ?>
    <div class="container">
        <h3>Apartment Details</h3>
        <h4>Apartment Name: <?php echo $post->Apartment_Name; ?></h4>
        <p><strong>Apartment Address: </strong><?php echo $post->Apartment_Address; ?></p>
        <p><strong>Number of Stories: </strong><?php echo $post->Number_of_Stories; ?></p>
        <p><strong>Number 0f Rooms: </strong><?php echo $post->Number_of_Rooms; ?></p>
        <p><strong>Number of Bathrooms: </strong><?php echo $post->Number_of_Bathrooms; ?></p>
        <?php echo anchor('apartments','Back',['class'=>'btn btn-default']); ?>
    </div>
<?php include_once('footer.php'); ?>