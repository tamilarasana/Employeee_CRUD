<table id="users-table" class="table">
	<thead>
		<td>id</td>
		<td>name</td>
		<td>email</td>
		<td>phone</td>
		<td>salary</td>
		<td>department</td>
	</thead>
</table>
<script src="https://datatables.yajrabox.com/js/jquery.min.js"></script>
<script src="https://datatables.yajrabox.com/js/bootstrap.min.js"></script>
<script src="https://datatables.yajrabox.com/js/jquery.dataTables.min.js"></script>
<script src="https://datatables.yajrabox.com/js/datatables.bootstrap.js"></script>
<script type="text/javascript">
	  $('#users-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: 'https://datatables.yajrabox.com/eloquent/add-edit-remove-column-data',
        columns: [
            {data: 'id', name: 'id'},
            {data: 'name', name: 'name'},
            {data: 'email', name: 'email'},
            {data: 'created_at', name: 'created_at'},
            {data: 'updated_at', name: 'updated_at'},
            {data: 'action', name: 'action', orderable: false, searchable: false}
        ]
    });
</script>