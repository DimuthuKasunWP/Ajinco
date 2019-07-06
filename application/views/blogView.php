<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <style>
h5 {
  width: 1150px;
  padding: 10px;
  border: 5px solid gray;
  margin: 0;
  color:black;
}

</style>
    <title>Project Page</title>
  </head>
  <body background="https://us.123rf.com/450wm/ekaterinamolchanova/ekaterinamolchanova1807/ekaterinamolchanova180700032/104839659-multipurpose-any-use-plain-dark-blue-background-holiday-and-every-day-hanukkah-and-judaic-holiday-co.jpg?ver=6">
  <nav class="navbar navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Project page</a>
  </nav>
  <div class="container">
  <div id="colorlib-blog">
  <br>
  <br>
			<div class="container">
				<div class="row">
                <?php foreach($result as $row) {?>
				<?php if($row->publish==1):?>
					<article class="animate-box">
						<div class="blog-img" style="background-image">
						<img src="<?php echo $row->photo; ?>" width="150" height="150">
					</div>
						<div class="entry">
							<div class="meta text-center">
                            
							</div>
              	<h5><i><?php echo $row->description; ?></i></h5>
							
						</div>
					</article>
					<br>
					<br>
				<?php endif;?>
                    <?php  }?>
								
				</div>	
			</div>
		</div>



 </body>
</html>