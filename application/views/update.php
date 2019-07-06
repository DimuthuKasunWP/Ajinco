<?php include_once('header.php'); ?>
    <div class="container">
    <?php echo form_open("apartments/change/{$post->Apartment_ID}",['class'=>'form-horizontal']); ?>
        <fieldset>
            <legend>Update Apartment details</legend>
            <div class="form-group">
            <label for="apartmentName" class="col-md-2 control-label">Apartment Name</label>
            <div class="col-md-10">
                <?php echo form_input(['name'=>'Apartment_Name','type'=>'text','placeholder'=>'Apartment Name','class'=>'form-control','value'=>set_value('Apartment_Name',$post->Apartment_Name)]); ?>
            </div>
            <div class="col-md-10">
                <?php echo form_error('Apartment_Name','<div class="text-danger">','</div>'); ?>
            </div>
            </div>
            <div class="form-group">
            <label for="apartmentAddress" class="col-md-2 control-label">Apartment Address</label>
            <div class="col-md-10">
                <?php echo form_input(['name'=>'Apartment_Address','type'=>'text','placeholder'=>'Apartment Address','class'=>'form-control','value'=>set_value('Apartment_Address',$post->Apartment_Address)]); ?>
            </div>
            <div class="col-md-10">
            <?php echo form_error('Apartment_Address','<div class="text-danger">','</div>'); ?>
            </div>
            </div>
            <div class="form-group">
            <label for="noofStories" class="col-md-2 control-label">Number of Stories</label>
            <div class="col-md-10">
                <?php echo form_input(['name'=>'Number_of_Stories','type'=>'number','placeholder'=>'Number of Stories','class'=>'form-control','value'=>set_value('Number_of_Stories',$post->Number_of_Stories)]); ?>
            </div>
            <div class="col-md-10">
            <?php echo form_error('Number_of_Stories','<div class="text-danger">','</div>'); ?>
            </div>
            </div>
            <div class="form-group">
            <label for="noofRooms" class="col-md-2 control-label">Number of Rooms</label>
            <div class="col-md-10">
                <?php echo form_input(['name'=>'Number_of_Rooms','type'=>'number','placeholder'=>'Number of Rooms','class'=>'form-control','value'=>set_value('Number_of_Rooms',$post->Number_of_Rooms)]); ?>
            </div>
            <div class="col-md-10">
            <?php echo form_error('Number_of_Rooms','<div class="text-danger">','</div>'); ?>
            </div>
            </div>
            <div class="form-group">
            <label for="noofBathrooms" class="col-md-2 control-label">Number of Bathrooms</label>
            <div class="col-md-10">
                <?php echo form_input(['name'=>'Number_of_Bathrooms','type'=>'number','placeholder'=>'Number of Bathrooms','class'=>'form-control','value'=>set_value('Number_of_Bathrooms',$post->Number_of_Bathrooms)]); ?>
            </div>
            <div class="col-md-10">
            <?php echo form_error('Number_of_Bathrooms','<div class="text-danger">','</div>'); ?>
            </div>
            </div>
            <div class="form-group">
            <div class="col-md-10 col-md-offset-2">
                <?php echo form_submit(['name'=>'submit','value'=>'Update','class'=>'btn btn-default']); ?>
                <?php echo anchor('apartments','Back',['class'=>'btn btn-default']); ?>
            </div>
            </div>
        </fieldset>
    <?php echo form_close();?>
    </div>
<?php include_once('footer.php'); ?>