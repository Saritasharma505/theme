<?php $__env->startSection('content_header'); ?>
    <h1 class="fa fa-users"> Admin Management</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
     <div id="page-wrapper">
        <div class="row">
               
                <!-- /.col-lg-12 -->
          </div>
            <!-- /.row -->
             <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Roles List
                        </div>
                    
                   
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Assign To</th>
                                        <th>Action</th>
                                        
                                    </tr>
                                </thead> 
                                <tbody>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Assign To</th>
                                        <th>Action</th>
                                        
                                    </tr>
                                       
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                            
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <!-- model -->
            <div id="myModal" class="modal fade" role="dialog">
                      <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                          <div class="modal-header">
                           
                            <h4 class="modal-title">Add Admin</h4>
                          </div>
                          <div class="modal-body">
                       
                        
                                    <form role="form" method="post" action="">
                                        <?php echo csrf_field();?>
                                        <div class="form-group">
                                            <label>DSA Name</label>
                                            <input type="text" class="form-control" name="name" id="dsa_name" placeholder="Enter DSA Name" required>
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Email-ID</label>
                                            <input type="email" class="form-control" name="email" id="dsa_email" placeholder="Enter Email-Id" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input class="form-control" name="password" id="dsa_pass" placeholder="Password" required>
                                        </div>
                                       
                                        <div class="form-group">
                                            <label>Mobile No.</label>
                                            <input class="form-control" name="phone" id="dsa_phone" placeholder="Enter Phone" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Role</label>
                                            <select class="form-control" name="role" id="dsa_role"  required>
                                                <option>Please Select Role</option>
                                                
                                                <option value=""></option>
                                        </select></div>

                                        <div class="form-group">
                                            <label>Location</label>
                                            <select  class="form-control" name="location" id="location" placeholder="Enter text" required>
                                                <option>Please Select</option>
                                               
                                                <option value=""></option>
                                                
                                            </select>
                                        </div>
                                        
                                
                                       
                                        <button type="submit" class="btn btn-info" name="submit">Submit</button>
                                        <button type="button" class="btn btn-default pull pull-right" data-dismiss="modal">Close</button>
                                    </form>
                        
                        </div>

                      </div>
                    </div>
            <!-- close -->
            
            <!-- /.row -->
        </div>
      
    <script>
   window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove(); 
    });
}, 4000);
    </script>
     <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>