@extends('layouts.app')

@section('content') 

@if($message = Session::get('success'))

<div class="alert alert-success">
	{{ $message }}
</div>
  
@endif

<div class="card">
	<div class="card-header">
		<div class="row">
			<div class="col col-md-6"><b>Faculty Details</b></b></div>
			<div class="col col-md-6">
				<a href="{{ route('faculties.create') }}" class="btn btn-success btn-sm float-end">Add Faculty</a>
			</div>
		</div>
	</div>
	<div class="card-body">
		<table class="table table-bordered">
			<tr>
				<th>Faculty Id</th>
				<th>Faculty Name</th>
				<th>Email</th>
				<th>Faculty PhoneNo</th>
				<th>Action</th>
			</tr>
			@if(count($faculties) > 0)

				@foreach($faculties as $faculty)
 
					<tr>
						<td>{{ $faculty->faculty_id }}</td>
						<td>{{ $faculty->faculty_name }}</td>
						<td>{{ $faculty->faculty_email }}</td>
						<td>{{ $faculty->faculty_contactno }}</td>
						<td>
							<form method="post" action="{{ route('faculties.destroy', $faculty->faculty_id) }}">
								@csrf
								@method('DELETE')
								<a href="{{ route('faculties.edit', $faculty->faculty_id) }}" class="btn btn-warning btn-sm">Edit</a>
								<input type="submit" class="btn btn-danger btn-sm" value="Delete" />
							</form>
							
						</td>
					</tr>

				@endforeach

			@else
				<tr>
					<td colspan="5" class="text-center">No Data Found</td>
				</tr>
			@endif
		</table>
		{{-- {!! $faculties->links() !!}--}}
	</div>
</div>

@endsection