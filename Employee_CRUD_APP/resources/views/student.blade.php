 <link href="https://datatables.yajrabox.com/css/datatables.bootstrap.css" rel="stylesheet">
     <!-- <link href="https://datatables.yajrabox.com/css/demo.css" rel="stylesheet"> -->

 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<table id="users-table" class="table">
	<thead>
		<td>Student ID</td>
		<td>Name</td>
		<td>Address</td>		
	</thead>
</table>
<script src="https://datatables.yajrabox.com/js/jquery.min.js"></script>
<script src="https://datatables.yajrabox.com/js/bootstrap.min.js"></script>
<script src="https://datatables.yajrabox.com/js/jquery.dataTables.min.js"></script>
<script src="https://datatables.yajrabox.com/js/datatables.bootstrap.js"></script>
<script type="text/javascript">
 $(function() {
        $('#users-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: 'http://127.0.0.1:8000/view/data',
             columns: [
            {data:'studentid'},
            {data:'name'},
            {data: 'address'},  
            // {data: 'action', name: 'action', orderable: false, searchable: false}         
        ]
        });
    });

</script>