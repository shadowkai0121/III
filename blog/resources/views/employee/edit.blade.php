
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Employee</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">

<form method="post" action="/employee/{{ $emp->id }}" class="form-horizontal">
  @csrf
  @method('PUT')
      
<fieldset>

<!-- Form Name -->
<legend>Emplyee Data</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="firstName">First Name:</label>  
  <div class="col-md-4">
  <input id="firstName" name="firstName" value="" type="text" placeholder="{{ $emp->firstName }}" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="lastName">Last Name:</label>  
  <div class="col-md-4">
  <input id="lastName" name="lastName" value="" type="text" placeholder="{{ $emp->lastName }}" class="form-control input-md">
    
  </div>
</div>

<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="okOrCancel"></label>
  <div class="col-md-8">
    <button id="okOrCancel" name="okOrCancel" class="btn btn-success">OK</button>
    <button id="okOrCancel" name="okOrCancel" class="btn btn-danger">Cancel</button>
  </div>
</div>

</fieldset>
</form>


</div>

</body>
</html>