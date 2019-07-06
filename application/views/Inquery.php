<!DOCTYPE html>
<html lang="en">
<head>
  <title>Inquiries</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script>

function meth(){
  var button_val=$('#btn').val();
  swal("Done!", "Update Success", "success");
  $.ajax({
url: 'http://localhost/Ajinco/index.php/Inquery/edit',
data: {
  {'name':button_val},
format: 'json'
},
error: function() {
$('#info').html('<p>An error has occurred</p>');
},
dataType: 'jsonp',
success: function(data) {
  swal("Done!", "Update Success", "success");

},
type: 'POST'
});
}
  </script>
</head>
<body>

<div class="container">
  <h2>Basic Table</h2>
  <!-- <p>The .table class adds basic styling (light padding and only horizontal dividers) to a table:</p>             -->
  <table class="table">
    <thead>
      <tr>
        
        <th>Name</th>
        <th>Email</th>
        <th>Contact</th>
        <th>Date</th>
        <th>time</th>
        <th>Description</th>
        <th>Is Approved</th>
        <th>Submit</th>
      </tr>
    </thead>
    <tbody>
        <?php 
        foreach($inquery as $row){
            echo "<tr>";
            // echo "<td> ".$row->."</td>";
            echo "<td> ".$row->name."</td>";
            echo "<td> ".$row->email."</td>";
            echo "<td> ".$row->contact."</td>";
            echo "<td> ".$row->selected_date."</td>";
            echo "<td> ".$row->start_time."</td>";
            echo  "<td> ".$row->description."</td>";
            echo "<td>";
            // echo "<form action= '".base_url()." index.php/Inquery/edit/' method='post' >";
            echo "<input type='checkbox' id='check' value='true' name='approved'>";
            echo "</td>";
            echo "<td>";  
            echo "<button id='btn' value='".$row->name."' onclick='meth()'   name='submit' >"."update"."</button>";
            // echo "</form>";
            echo "</td>";
             echo "</tr>";
        }
        ?>

    </tbody>
  </table>
</div>
<script>
// document.getElementById("btn").click(meth());
function meth(){
  var button_val=$('#btm').val();
  swal("Done!", "Update Success", "success");
  $.ajax({
url: 'http://localhost/Ajinco/index.php/Inquery/edit',
data: {
  {'name':button_val},
format: 'json'
},
error: function() {
$('#info').html('<p>An error has occurred</p>');
},
dataType: 'jsonp',
success: function(data) {
  swal("Done!", "Update Success", "success");

},
type: 'POST'
});
}
  //  $('#check').on('change',function(){
  //   var check_box_value=$('#check').val();
  //   var button_val=$('#btn').val();
  //   document.getElementById("check").checked = true;
    

  // });


$('#btn').click(meth());

</script>
</body>

</html>
