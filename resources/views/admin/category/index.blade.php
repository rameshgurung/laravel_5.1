@extends('admin.layouts.layout')

@section('title', 'Categories')

@section('content')
<h3 class="heading">Categories</h3>
<a href="{{ route('dashboard::category_create') }}">New</a><hr>
<table class="table table-hover">
	<thead>
		<tr>
			<th>#</th>
			<th>Title</th>
			<th>Created at</th>
			<th>Update at</th>
			<th>Actions</th>
		</tr>
	</thead>
	<tbody>

		@foreach($categories as $category)
		<tr>
			<td>{{$category['id']}}</td>
			<td>{{$category['title']}}</td>
			<td>{{$category['created_at']}}</td>
			<td>{{$category['updated_at']}}</td>
			<td>
				<a href="{{ route('dashboard::category_edit',['slug'=>$category['slug']]) }}">Edit</a> / 							
				<a href="{{ route('dashboard::category_destroy',['slug'=>$category['slug']]) }}">Delete</a>							
			</td>
		</tr>
		@endforeach

	</tbody>
</table>
@endsection

