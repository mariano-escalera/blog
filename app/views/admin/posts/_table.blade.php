<table class="table table-bordered table-hover table-striped">
	<thead>
		<tr>
			<th>Id</th>
			<th>Title</th>
			<th>Status</th>
			<th># Comments</th>
			<th>New comments</th>
			<th>Actions</th>
		</tr>
	</thead>
	<tbody>
		@foreach($posts as $posts)
			<tr>
				<td>{{$posts['id']}}</td>
				<td>{{$posts['title']}}</td>
				<td>{{$posts['status']}}</td>
				<td>{{count($posts['comments'])}}</td>
				<td>{{count($posts['new_comments'])}}</td>
				<td>
					<a href="#" class="btn btn-primary btn-xs" role="button">
						<span class="glyphicon glyphicon-eye-open"></span>
					</a>
					<a href="#" class="btn btn-info btn-xs" role="button">
			            <span class="glyphicon glyphicon-pencil"></span>
			        </a>
					<a href="#" class="btn btn-danger btn-xs" role="button">
						<span class="glyphicon glyphicon-trash"></span>
					</a>
				</td>
			</tr>
		@endforeach
	</tbody>
</table>