 @vite(['resources/sass/app.scss', 'resources/js/app.js'])

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<div class="container-sm mt-5">
	<div class="row">
	<div class="col-4"></div>
	<div class="col-4">
	<h1 class="text-center mt-5">Edit Student</h1>


	<form action="{{ route('Studentupdater',$stu_det->id) }}" method="POST">
		@csrf




  <div class="form-group mb-3">
    <label class="mb-1" for="exampleInputEmail1">First Name</label>
    <input type="text" name="fname" class="form-control" id="exampleInputEmail1"  value="{{ $stu_det->fname }}" aria-describedby="emailHelp" placeholder="Enter First Name">
  </div>
  <div class="form-group mb-3">
    <label class="mb-1" for="exampleInputPassword1">Last Name</label>
    <input type="text" name="lname"  value="{{ $stu_det->lname }}" class="form-control" id="exampleInputPassword1" placeholder="Enter First Name">
  </div>
  <div class="form-group mb-3">
    <label class="mb-1" for="exampleInputPassword1">Reg_No</label>
    <input type="text" name="reg_no"  value="{{ $stu_det->reg_no }}" class="form-control" id="exampleInputPassword1" placeholder="Enter Reg_No">
  </div>
   <div class="form-group mb-3">
    <label  class="mb-1"for="exampleInputPassword1">Gender</label>
    <Select class="form-control" selected="{{ $stu_det->gender }}" name="gender" id="exampleInputPassword1" placeholder="Gender">
    	<option value="male" >male</option>
    	<option value="female" >female</option>
    </Select>
  </div>
   <div class="form-group mb-3">
    <label  class="mb-1"for="exampleInputPassword1">Amount</label>
    <input type="number" name="amount" value="{{ $stu_det->amount }}" class="form-control" id="exampleInputPassword1" placeholder="Enter Amount">
  </div>
  <div class="form-group mb-3">
    <label class="mb-1" for="exampleInputPassword1"> Age</label>
    <input type="number" name="age" value="{{ $stu_det->age }}" class="form-control" id="exampleInputPassword1" placeholder="Enter Age">
  </div>

@if ($errors->any())

@foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
 @endforeach
@endif



  <button type="submit" class="btn btn-primary">Edit Student</button>
</form>
	</div>
	<div class="col-4"></div>
</div>
</div>
