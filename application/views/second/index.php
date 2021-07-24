<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Users</h2>
  <p>User Data</p>            
  <table class="table">
    <thead>
      <tr>
        <th>id</th>
        <th>task</th>
        <th>due Date</th>
        <th>assigned by</th> 
        <th> assigned to</th>
        <th>status</th>
        <th>Manage</th>
         
      </tr>
    </thead>
    <tbody>
    	<?php foreach ($tasks as $key => $value) { ?>
    		 <tr>
		        <td><?php echo $value['id'] ?></td>
		        <td><?php echo $value['description'] ?></td>
		        <td><?php echo $value['due_date'] ?></td>
		        <td><?php echo $value['assigned_to'] ?></td>
		        <td><?php echo $value['assigned_by'] ?></td>
		        <td><?php echo $value['status'] ?></td>
		        <td><a href="<?php echo base_url('index.php/second_task/edit_task/'.$value['id'])?>" class="btn btn-primary"> Edit </a>
		        	<a href="<?php echo base_url('index.php/second_task/delete_task/'.$value['id'])?>" class="btn btn-danger"> Delete </a>
		        </td>

		      </tr>
    	<?php }?>
       
      
    </tbody>
  </table>
</div>

</body>
</html>
