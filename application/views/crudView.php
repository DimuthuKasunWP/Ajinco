<?php $this->load->view('header1')?>
  <div class="container">
  <br>
  <br>


<div class="row">
<div >

  <form method="post" action="<?php echo site_url('CrudController/create')?>" style="padding: 20px 300px; width:500px; position:center;background:rgba(130,130,130,.3);  padding: 20px 22px;
  border: 1px solid;
  border-top-color: rgba(255,255,255,.4);
  border-left-color: rgba(255,255,255,.4);
  border-bottom-color: rgba(60,60,60,.4);
  border-right-color: rgba(60,60,60,.4); opacity:0.7">
  <div class="card">
      <div class="card-header">
        <strong>Add Contractor</strong>
      </div>
      <div class="card-body">
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name"  placeholder="Name" name="name" width="100%">
 </div>
 <div class="form-group">
    <label for="proname">Project name</label>
    <input type="text" class="form-control" id="proname"  placeholder="project name" name="proname" width="100%">
 </div>
 <div class="form-group">
    <label for="startdate">Start Date</label>
    <input type="date" class="form-control" id="startdate"  placeholder="start date" name="startdate" width="100%">
 </div>
 <div class="form-group">
    <label for="enddate">End Date</label>
    <input type="date" class="form-control" id="enddate"  placeholder="end date" name="enddate" width="100%">
 </div>
 <div class="form-group">
    <label for="phone">Phone number</label>
    <input type="text" class="form-control" id="phone"  placeholder="phone" name="phone" width="100%">
 </div>
 <div class="form-group">
    <label for="description">Description</label>
    <input type="text" class="form-control" id="description"  placeholder="description" name="description" width="100%">
 </div>
 <div class="form-group">
    <label for="photo">Photo</label>
    <input type="text" class="form-control" id="photo"  placeholder="photo" name="photo" width="100%">
 </div>
  <button type="submit" class="btn btn-primary" value="save">Add</button>
</div>
</div>
</form>
<br>
<br>
</div>
<br>
<br>

<!-- Contract table --> 
<div >
<table class="table">
  <thead class="table-info	">
    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Project Name</th>
      <th scope="col">Start Date</th>
      <th scope="col">End Date</th>
      <th scope="col">Phone number</th>
      <th scope="col">Description</th>
      <th scope="col">Photo</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <!-- Get data from database to table -->
    <?php foreach($result as $row) {?>
      <tr class="table-secondary">
        <th scope="row"><?php echo $row->id; ?></th>
        <td><?php echo $row->name; ?></td>
        <td><?php echo $row->proname; ?></td>           
        <td><?php echo $row->startdate; ?></td>
        <td><?php echo $row->enddate; ?></td>
        <td><?php echo $row->phone; ?></td>
        <td><?php echo $row->description; ?></td>
        <td><img src="<?php echo $row->photo; ?>" style="width:200px;height:200px;"></td>
        <td> <a href="<?php echo site_url('CrudController/edit');?>/<?php echo $row->id;?>">Edit</a> | 
        <a href="<?php echo site_url('CrudController/delete');?>/<?php echo $row->id;?>">Delete</a>
        <?php
        if( $row->publish==0):?>
                    <div><a href="<?php echo site_url('CrudController/unpublish');?>/<?php echo $row->id;?>" class="btn btn-primary">publish</a><div>
        <?php else:?>
        <div><a href="<?php echo site_url('CrudController/publish');?>/<?php echo $row->id;?>" class="btn btn-danger">Unpublish</a><div>
        <?php endif;?>
        

        </td>
      </tr>
    <?php  }?>
</tbody>
</table>
</div>
</div>
 </body>
</html>