<html>
<head>
    <title></title>
    <link rel="stylesheet" href="css/bootstrap.min.css" >
</head>
<body>

<div class="jumbotron" style="background:url('images/loginbag.jpg')no-repeat;background-size:cover;height:300px;"></div>
<div class="container-fluid">
<div class="row">
<div class="col-md-3">
<div class="list-group">
<a href="" class="list-group-item active">Patients</a>
<a href="patient_details.php" class="list-group-item ">Patient Detailst</a>
<a href="" class="list-group-item ">Add New Patient </a>
<a href="" class="list-group-item ">Payment/Checkout</a>
</div>
<hr>
<div class="list-group">
<a href="" class="list-group-item active">Staff</a>
<a href="" class="list-group-item ">Staff Details</a>
<a href="" class="list-group-item ">Add New Staff</a>
<a href="" class="list-group-item ">Remove Staff Members</a>
</div>
</div>

<div class="col-md-8">
<div class="card">
<div class="card-body" style="background-color:#0080ff;color:#ffffff;">
<h3>Book an Appontment</h3>
</div> 
<div class="card-body">
<form class="form-group" action="func.php" method="post">
<label>First Name:</label>
<input type="text" name="fname" class="form-control"><br>
<label>Last Name:</label>
<input type="text" name="lname" class="form-control"><br>
<label>Email id:</label>
<input type="text" name="email" class="form-control"><br>
<label>Contact:</label>
<input type="text" name="conatct" class="form-control"><br>
<label>Payement:</label>
<select class="form-control" name="payement">
<option value="pay">pay</option>
<option value="Not_pay">Not Pay</option>
</select><br>
<label>Doctor Appointment:</label>
<select class="form-control" name="docapp">
<option value="Dr Sharma from 6pm to 8pm">Dr Sharma from 6pm to 8pm</option>
<option value="Dr Sharma from 6pm to 8pm">Dr Sharma from 6pm to 8pm</option>
</select><br>
<input type="submit" class="btn btn-primary" name="pat_submit" value"Enter Appointment"> 
</form>
</div>
</div>
</div> 
<div class="col-md-1"></div>

</div>
</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" ></script>
<script  src="js/bootstrap.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){


swal({
  title: "Wel Come!",
  text: "Have a Nice Day!",
  icon: "success",
  button: "ok",
});


});
   

</script>

 </body>
</html>