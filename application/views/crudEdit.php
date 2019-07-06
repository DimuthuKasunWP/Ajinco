<?php $this->load->view('header1')?>
<div class="container">
<br>
<br>
<!--   Edit form   -->

  <form method="post" action="<?php echo site_url('CrudController/update')?>/<?php echo $row->id;?>">
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name"  placeholder="Name" name="name" value="<?php echo $row->name;?>">
 </div>
 <div class="form-group">
    <label for="decriotion">Project name</label>
    <input type="text" class="form-control" id="proname"  placeholder="project name" name="proname" value="<?php echo $row->proname;?>">
 </div>
 <div class="form-group">
    <label for="photo">Start date</label>
    <input type="date" class="form-control" id="startdate"  placeholder="start date" name="startdate" value="<?php echo $row->startdate;?>">
 </div>
 <div class="form-group">
    <label for="enddate">End date</label>
    <input type="date" class="form-control" id="enddate"  placeholder="enddate" name="enddate" value="<?php echo $row->enddate;?>">
 </div>
 <div class="form-group">
    <label for="phone">phone</label>
    <input type="text" class="form-control" id="phone"  placeholder="phone" name="phone" value="<?php echo $row->phone;?>">
 </div>
 <div class="form-group">
    <label for="description">Description</label>
    <input type="text" class="form-control" id="description"  placeholder="description" name="description" value="<?php echo $row->description;?>">
 </div>
 <div class="form-group">
    <label for="photo">Photo</label>
    <input type="text" class="form-control" id="photo"  placeholder="photo" name="photo" value="<?php echo $row->photo;?>">
 </div>
  <button type="submit" class="btn btn-primary" value="save">Submit</button>
</form>
</div>

 </body>
</html>