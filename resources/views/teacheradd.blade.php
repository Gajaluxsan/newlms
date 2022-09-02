 
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<div class="container-sm mt-5">
	<div class="row">
	<div class="col-4"></div>
	<div class="col-4">
	<h1 class="text-center mt-5">Add Teacher</h1>
	<form action="{{ route('teacherstore') }}" method="POST">
		@csrf
  <div class="form-group mb-3">
    <label class="mb-1" for="exampleInputEmail1">Name</label>
    <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter  Name">
  </div>
  <div class="form-group mb-3">
    <label class="mb-1" for="exampleInputPassword1">Address</label>
    <input type="text" name="address" class="form-control" id="exampleInputPassword1" placeholder="Enter Address">
  </div>
  <div class="form-group mb-3">
    <label class="mb-1" for="exampleInputPassword1">Email</label>
    <input type="text" name="email" class="form-control" id="exampleInputPassword1" placeholder="Enter Email">
  </div>

   <div class="form-group mb-3">
    <label  class="mb-1"for="exampleInputPassword1">Salary</label>
    <input type="number" name="salary" class="form-control" id="exampleInputPassword1" placeholder="Enter Amount">
  </div>
  <div class="form-group mb-3">
    <label class="mb-1" for="exampleInputPassword1"> Age</label>
    <input type="number" name="age" class="form-control" id="exampleInputPassword1" placeholder="Enter Age">
  </div>
  <button type="submit" class="btn btn-primary">Add Teacher</button>
</form>
	</div>
	<div class="col-4"></div>
</div>
</div>