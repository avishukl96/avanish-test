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


asdasdsa
 <div id="signupbox"   class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="panel-title">Edit Task</div>
                            <div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="#" onclick="$('#signupbox').hide(); $('#loginbox').show()">Sign In</a></div>
                        </div>  
                        <div class="panel-body" >
                            <form id="loginform" class="form-horizontal" method="post" role="form" action="<?php echo base_url('index.php/second_task/submit_task/'.$task['id']); ?>">
                                
                                <div id="signupalert" style="display:none" class="alert alert-danger">
                                    <p>Error:</p>
                                    <span></span>
                                </div>
                                    
                                
                                  
                                <div class="form-group">
                                    <label for="email" class="col-md-3 control-label">task</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="description" placeholder="task" value="<?php  echo $task['description']; ?>">
                                    </div>
                                </div>
                                    <?php  //echo $task['due_date']; ?>
                                <div class="form-group">
                                    <label for="firstname" class="col-md-3 control-label">Due Date</label>
                                    <div class="col-md-9">
                                        <input type="datetime-local" class="form-control" name="due_date" placeholder="Due Date" value="<?php  echo $task['due_date']; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="lastname" class="col-md-3 control-label">Assigned By</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="assigned_by" placeholder="Assigned By " value="<?php  echo $task['assigned_by']; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="col-md-3 control-label">Assined To</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="assigned_to" placeholder="Assigned to" value="<?php  echo $task['assigned_to']; ?>">
                                    </div>
                                </div>
                                    
                                <div class="form-group">
                                    <label for="icode" class="col-md-3 control-label">Status</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="status" placeholder="" value="<?php  echo $task['status']; ?>">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <!-- Button -->                                        
                                    <div class="col-md-offset-3 col-md-9">
                                        <button id="btn-signup" type="submit" class="btn btn-info"><i class="icon-hand-right"></i> &nbsp Submit</button>
                                        
                                    </div>
                                </div>
                                
                             
                                
                                
                                
                            </form>
                         </div>
                    </div>

               
               
                
         </div> 


</body>
</html>