<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
	
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
	
	 
    <title>Patient Information</title>
	 
  </head>
  <body>
   @include("navbar")
	@if($layout == 'index')
		<div class="container-fluid mt-4">
			<div class="row">
				<section class="col-md-7">
					@include("patientlist")
				</section>
				<section class="col-md-5"></section>
			</div>
		</div>
	@elseif($layout == 'create')
		<div class="container-fluid mt-4">
			<div class="row">
				<section class="col-md-7">
					@include("patientlist")
				</section>
				<section class="col-md-5">
				
				<div class="card mb-3">
  <img src="data:image/jpeg;base64,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" class="card-img-top" alt="...">
  <div class="card-body">
  
		 
    <h5 class="card-title">Enter the information of Patient</h5>
    
  

				<form action="{{ url('/store')}}" method="post">
				@csrf
  <div class="form-group">
    <label for="exampleFormControlInput1">Patient Name</label>
    <input type="text" name="patient_name" class="form-control"  placeholder="Enter patient_name" required>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Description</label>
    <textarea name="desc" class="form-control"  placeholder="Enter Description" required></textarea>
  </div>
  <div class="form-group" style="width:160px">
    <label for="exampleFormControlInput1">dob</label>
    <input class="date form-control" type="date" id="dtepick" name="dob" placeholder="Enter DOB" required size="15">
  </div>
  
   
  <div class="form-group">
    <label for="exampleFormControlInput1">Gender</label>
    <select name="gender" required>
	<option value="">Select Gender</option>
	<option value="female">Female</option>
	<option value="male">Male</option>
	</select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Insurance Number</label>
    <input type="text" name="insurance_number" class="form-control"  placeholder="Enter Insurance Number" required>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Clinic ID</label>
    <input type="text" name="clinic_id" class="form-control"  placeholder="Enter Clinic ID" required>
  </div>
  <div class="form-group" style="width:160px">
    <label for="exampleFormControlInput1" style="width:160px">Admission Date</label>
    <input type="date" name="admission_date" class="form-control"  placeholder="Select Admission Date" required>
  </div>
  <div class="form-group" style="width:160px">
    <label for="exampleFormControlInput1" style="width:160px">Discharge Date</label>
    <input type="date" name="discharge_date" class="form-control"  placeholder="Select Discharge Date" required>
  </div>
  <input type="submit" class="btn btn-info" value="Save">
  <input type="reset" class="btn btn-warning" value="Reset">
</form>
</div>
</div>
				</section>
			</div>
		</div>
	@elseif($layout == 'show')
	dfdsfdfd
		<div class="container-fluid mt-4">
			<div class="row">
				<section class="col-md-7">
					@include("patientlist")
				</section>
				<section class="col-md-5">
				
				<div class="card mb-3">
  <img src="https://www.vidyalayaschoolsoftware.com/assets/images/benefits-to-you.svg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">  <center>
<b>Shows the information of patient</b>  </center>
</h5>
	
				@csrf
  <div class="form-group">
    <label for="exampleFormControlInput1"><b>Patient Name</b></label> :: {{$patient->Patient_Name}}
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1"><b>Description</b></label> :: {{$patient->description}}
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1"><b>DOB</b></label>:: {{$patient->dob}}
  </div>
  
  <div class="form-group">
    <label for="exampleFormControlInput1"><b>Gender</b></label> :: {{$patient->gender}}
  </div>
  
  <div class="form-group">
    <label for="exampleFormControlInput1"><b> Insurance Number </b></label> :: {{$patient->Insurance_number}}
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1"><b> Clinic Id</b></label> :: {{$patient->clinic_id}}
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1"> <b>Admission Date</b></label> :: {{$patient->admission_date}}
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1"><b>Discharge Date</b></label>::{{$patient->discharge_date}}
  </div>
  

</div>
</div>
				</section>
			</div>
		</div>
	@elseif($layout == 'edit')
		<div class="container-fluid mt-4">
			<div class="row">
				<section class="col-md-7">
					@include("patientlist")
				</section>
				<section class="col-md-5">
				
				<div class="card mb-3">
  <img src="https://www.vidyalayaschoolsoftware.com/assets/images/benefits-to-you.svg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Update the information of patient</h5>
	
				<form action="{{url('/update/'.$patient->id)}}" method="post">
				@csrf
  <div class="form-group">
    <label for="exampleFormControlInput1">Patient Name</label>
    <input type="text" value="{{$patient->Patient_Name}}" name="patient_name" class="form-control"  placeholder="Enter cne" required>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Description</label>
    <textarea name="desc" class="form-control"  placeholder="Enter Description" required>{{$patient->description}}</textarea>
  </div>
  <div class="form-group" style="width:160px">
    <label for="exampleFormControlInput1">DOB</label>
    <input type="date" value="{{$patient->dob}}" name="dob" class="form-control"  placeholder="Enter dob" required>
  </div>
  
  <div class="form-group">
    <label for="exampleFormControlInput1">Gender</label>
    <select name="gender" required>
	<option value="">Select Gender</option>
	<option value="female" {{ ( $patient->gender == 'female') ? 'selected' : '' }} >Female</option>
	<option value="male" {{ ( $patient->gender == 'male') ? 'selected' : '' }}>Male</option>
	</select>
  </div>
  
  <div class="form-group">
    <label for="exampleFormControlInput1">Insurance Number</label>
    <input type="text" value="{{$patient->Insurance_number}}" name="insurance_number" class="form-control"  placeholder="Enter Insurance Number" required>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Clinic Id</label>
    <input type="text" value="{{$patient->clinic_id}}" name="clinic_id" class="form-control"  placeholder="Enter Clinic Id" required>
  </div>
  <div class="form-group" style="width:160px">
    <label for="exampleFormControlInput1">Admission Date</label>
    <input type="date" value="{{$patient->admission_date}}" name="admission_date" class="form-control"  placeholder="Enter Admission date" required>
  </div>
  <div class="form-group" style="width:160px">
    <label for="exampleFormControlInput1">Discharge Date</label>
    <input type="date" value="{{$patient->discharge_date}}" name="discharge_date" class="form-control"  placeholder="Enter Discharge date" required>
  </div>
  <input type="submit" class="btn btn-info" value="Update">
  <input type="reset" class="btn btn-warning" value="Reset">
</form>
</div>
</div>
				</section>
			</div>
		</div>
	@endif
   
  </body>
  
</html>