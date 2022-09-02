<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<div class="mt-2 ">
	<a class="btn btn-primary" href="studentadd">Add Student</a>
</div>
<table class="table mx-5 my-5 table-hover">
	<thead class="thead-dark">
		<tr>
		<th>ID</th>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Reg_No</th>
		<th>Gender</th>
		<th>Amount</th>
		<th>Age</th>
		<th>Edit</th>
		<th>Delete</th>
	</tr>
	</thead>


<?php foreach ($Student as $key): ?>
<tr>
	<td>{{ $key->id }}</td>
	<td>{{ $key->fname }}</td>
	<td>{{ $key->lname }}</td>
	<td>{{ $key->reg_no }}</td>
	<td>{{ $key->gender }}</td>
	<td>{{ $key->amount }}</td>
	<td>{{ $key->age }}</td>
	<td><a href="{{ route('stuedt',$key->id) }}" class="btn btn-primary">Edit</a></td>
	<td><a href="" class="btn btn-danger">Delete</a></td>
</tr>

<?php endforeach ?>










</table>

<div class="row">
	{{ $Student->links() }}
</div>
