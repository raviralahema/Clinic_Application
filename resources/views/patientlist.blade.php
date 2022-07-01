<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Patient Information</title>
  </head>
  <body>


<div class="col">

<div class="card mb-3">
  <img src="https://us.123rf.com/450wm/pitinan/pitinan1907/pitinan190700249/126452273-healthcare-people-group-professional-doctor-working-in-hospital-office-or-clinic-with-other-doctors-.jpg?ver=6" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">List of Patients</h5>
    <p class="card-text">You can find here all the informations about Patients.</p>
  </div>

<div class="form-group">

Clinic Id:: <input type="text" class="form-controller" id="searchh" name="searchh"></input>
<br><br>

Admission Date :: <input type="date" class="form-controller" id="admission_date1" name="admission_date1"></input>
 <input type="date" class="form-controller" id="admission_date2" name="admission_date2"></input>


</div>


        <input type="hidden" name="_method" value="PUT">
		 @method('PUT')

<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">Patient Name</th>
      <th scope="col">Description</th>
      <th scope="col">DOB</th>
      <!--<th scope="col">Gender</th>
	  <th scope="col">Insurance Number</th>-->
	  <th scope="col">Clinic ID</th> 
	  <th scope="col">Admission Date</th>
	  <th scope="col">Discharge Date</th> 
    </tr>
  </thead>
  <tbody>
  @foreach($patients as $student)
    <tr>
		
		<td>{{ $student->Patient_Name }}</td>
		<td>{{ $student->description }}</td>
		<td>{{ $student->dob }}</td>
		<!--<td>{{ $student->gender }}</td>
		<td>{{ $student->Insurance_number }}</td>-->
		<td>{{ $student->clinic_id }}</td>
		<td>{{ $student->admission_date }}</td>
		<td>{{ $student->discharge_date }}</td>


		<td>
		<a href="{{ url('/edit/'.$student->id)}}" class="btn btn-sm btn-info">Edit</a>
		</td>
		<td>
		<a href="{{ url('/show/'.$student->id)}}" class="btn btn-sm btn-info">View</a>
		</td>
		<td><a href="{{ route('delete_category', $student->id) }}" onclick="return confirm('Are you sure you want to delete this patient?')" class="btn btn-info">Delete</a>
		</td>				

    </tr>
    @endforeach
  </tbody>
</table>
</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script type="text/javascript">

$('#admission_date2').on('change',function(){

$value1 = $("#admission_date1").val();
$value=$(this).val();

$.ajax({

type : 'get',

url : '{{URL::to('search_date')}}',

data:{'admission_date2':$value,'admission_date1':$value1},

success:function(data){
//alert(data);
$('tbody').html(data);

}

});



})


$('#searchh').on('keyup',function(){

$value=$(this).val();

$.ajax({

type : 'get',

url : '{{URL::to('search')}}',

data:{'searchh':$value},

success:function(data){

$('tbody').html(data);

}

});



})
</script>

<script type="text/javascript">

$.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });

</script>

	
	</body>