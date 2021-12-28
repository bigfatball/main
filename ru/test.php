<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>DataTables Server-side Processing using PHP with MySQL + Ajax</title>
<!-- DataTables CSS library -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css"/>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- DataTables JS library -->
<script type="text/javascript" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<style type="text/css">
.bs-example{
margin: 20px;
}
</style>
</head>
<body>
<div class="bs-example">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="page-header clearfix">
<h2 class="pull-left">Users List</h2>
</div>
<table id="usersListTable" class="display" style="width:100%">
<thead>
<tr>
<th>invoice</th>
<th>product</th>
<th>customer</th>
<th>status</th>
<th>staff</th>
<th>qty</th>

</tr>
</thead>
<tfoot>
<tr>
<th>invoice</th>
<th>product</th>
<th>customer</th>
<th>status</th>
<th>staff</th>
<th>qty</th>

</tr>
</tfoot>
</table>
</div>
</div>        
</div>
</div>
</body>
<script>
$(document).ready(function(){
$('#usersListTable').DataTable({
"processing": true,
"serverSide": true,
"ajax": "test2.php"
});
});
</script>
</html>