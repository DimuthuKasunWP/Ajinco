<?php $this->load->view('header1')?>
  <div class="container">
  <br>
  <br>


<div class="row">
<div class="col-lg-4">

  <form method="post" action="<?php echo site_url('ProjectController/create')?>">
  <div class="card">
      <div class="card-header">
        <strong>Add Blogs</strong>
      </div>
      <div class="card-body">
  <div class="form-group">
    <label for="photo">Photo</label>
    <input type="text" class="form-control" id="photo"  placeholder="Photo" name="photo">
 </div>
 <div class="form-group">
    <label for="description">Description</label>
    <input type="text" class="form-control" id="description"  placeholder="Description here" name="description">
 </div>

  <button type="submit" class="btn btn-primary" value="save">Add</button>
</div>
</div>
</form>

</div>
<br>
<br>

<!-- Contract table --> 
<div class="col-lg-8">
<table class="table">
  <thead class="table-info	">
    <tr>
      <th scope="col">id</th>
      <th scope="col">Photo</th>
      <th scope="col">Description</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <!-- Get data from database to table -->
    <?php foreach($result as $row) {?>
      <tr class="table-secondary">
        <th scope="row"><?php echo $row->id; ?></th>
        <td><img src="<?php echo $row->photo; ?>" style="width:200px;height:200px;"></td>
        <td><?php echo $row->description; ?></td>           
        <td> <a href="<?php echo site_url('ProjectController/edit');?>/<?php echo $row->id;?>">Edit</a> | 
        <a href="<?php echo site_url('ProjectController/delete');?>/<?php echo $row->id;?>">Delete</a></td>
      </tr>
    <?php  }?>
</tbody>
</table>
</div>
</div>
 </body>
</html>