<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
         <link href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css" rel="stylesheet">
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <!-- Styles -->    
    </head>
    <body>
        <a href ="createpage" class="btn btn-success">Add</a>
        <div class="continer">
             <div class = "row">
                
                 <div class="col-md-12">
                     <h2 align="center"> database server side processing</h2>
                     <table id="example" class="table table-hover table-striped">
                        
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>                                   
                                    <th>Action</th>
                                 </tr>
                            </thead>                           
                        </table>
                 </div>
             </div> 
        </div>           
        </div>
        <script type="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script type="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
        <script src="https://datatables.yajrabox.com/js/jquery.min.js"></script>
      <script src="https://datatables.yajrabox.com/js/jquery.dataTables.min.js"></script>
     <script>
    
            $('#example').DataTable({
                "processing": true,
                "serverSide": true,
                 "ajax": {
                    "url" : "<?= route('dataprocessing')?>",
                    "dataType": "json",
                    "type": "POST",
                    "data":{"_token" :"<?= csrf_token() ?>"}
                },
                "columns":[
                        {"data":"name"},
                        {"data":"email"},
                        {"data":"action","searchable":false,"orderable":false}
                ]

             } );
             
             $('#example').DataTable({
                "processing": true,
                "serverSide": true,
                 "ajax": {
                    "url" : "<?= route('edit')?>",
                    "dataType": "json",
                    "type": "POST",
                    "data":{"_token" :"<?= csrf_token() ?>"}
                },
            {data: 'id', name: 'id'},
            {data: 'name', name: 'name'},
            {data: 'email', name: 'email'},
            {data: 'action', name: 'action', orderable: false, searchable: false}
        ]
    });


             
             
            
      </script> 
    </body>
</html>
