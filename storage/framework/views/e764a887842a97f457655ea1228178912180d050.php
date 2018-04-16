<?php $__env->startSection('content_header'); ?>
    <h1 class="fa fa-users"> Admin Management</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('adminlte_js'); ?>
    <script src="//cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
    <script>
        $(function () {
            $("#example1, #example2").DataTable();
        });
    </script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<link rel="stylesheet" href="<?php echo e(URL::asset('vendor/adminlte/datatables.net-bs/css/dataTables.bootstrap.min.css')); ?>">
     
        
          <div class="row justify-content-center">
            <div class="col-md-7">
             <div class="container">
                <div class="panel panel-default">
                    <div class="panel-header"><a class="btn btn-danger" href="<?php echo e(route('admin.index')); ?>">Back</a></div>
                    <div class="panel-body">
                    <div class="col-md-8 offset-2">
                    <?php foreach($admin_edit as $edit_ad)?>
                        <form role="form" method="post" action="<?php echo e(route('admin.update')); ?>">
                                        <?php echo csrf_field();?>
                                        <div class="form-group">
                                            <label>DSA Name</label>
                                            <input value="<?= $edit_ad->name?>" type="text" class="form-control" name="name" id="dsa_name" placeholder="Enter DSA Name" required>
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Email-ID</label>
                                            <input type="email" value="<?= $edit_ad->email?>" class="form-control" name="email" id="dsa_email" placeholder="Enter Email-Id" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" class="form-control" name="password" id="dsa_pass" placeholder="Password" required>
                                        </div>
                                       
                                        <div class="form-group">
                                            <label>Mobile No.</label>
                                            <input class="form-control" value="<?= $edit_ad->phone?>" name="phone" id="dsa_phone" placeholder="Enter Phone" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Role</label>
                                            <select class="form-control" name="role" id="dsa_role"  required>
                                           <option value="<?= $edit_ad->role?>"></option>
                                            <option>Super Admin</option>
                                             <option>Admin</option>  
                                            <option>Customer</option>  
                                            <option >DSA</option>     
                                        </select></div>

                                        <div class="form-group">
                                            <label>Location</label>
                             <select  class="form-control" name="location" id="location" required >
                                        
                                            <option>Agra</option>
                                            <option>Faridabad</option>
                                            <option>Ambala</option>   
                                            <option>Delhi</option>   
                                            </select>
                                        </div>
                                     
                                      <center>  <button type="submit" class="btn btn-info" name="submit">Submit</button></center>
                                       
                                </form>
                            </div>
                         </div>   
                  </div>
              </div>
          </div>
           
      
    <script>
   window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove(); 
    });
}, 4000);
    </script>
    
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>