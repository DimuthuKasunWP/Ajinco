<?php $this->load->view('header1')?>
<div class="container">
<br>
<br>
<!--   Edit form   -->

  <form method="post" action="<?php echo site_url('ProjectController/update')?>/<?php echo $row->id;?>">
  <div class="form-group">
    <label for="photo">Photo</label>
    <input type="text" class="form-control" id="photo"  placeholder="photo" name="photo" value="<?php echo $row->photo;?>">
 </div>
 <div class="form-group">
    <label for="decriotion">Description</label>
    <input type="text" class="form-control" id="description"  placeholder="description" name="description" value="<?php echo $row->description;?>">
 </div>
  <button type="submit" class="btn btn-primary" value="save">Submit</button>
</form>
</div>

 </body>
</html>