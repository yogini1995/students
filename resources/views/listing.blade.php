<table>
<thead>
	<th>Update</th>
	<th>Delete</th>
</thead>

<tbody>
	@foreach($data as $item)
	<tr>
		<td><a href="add/{{$item->id}}">{{$item->id}}</a></td>
		<td>{{$item->id}}</td>
		<td>{{$item->password }}</td>
		<td>{{$item->email}}</td>
		<td><button class="btn btn-danger"><a href="add/{{$item->id}}/"

	</tr>



</tbody>




</table>