@extends('adminlte::page')

@section('content_header')
    <h1 class="fa fa-users"> Admin Management</h1>
@stop

@section('adminlte_js')
    <script src="//cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
    <script>
        $(function () {
           
            $("#example1, #example2").DataTable();
        });
    </script>
@stop

@section('content')
<link rel="stylesheet" href="{{ URL::asset('vendor/adminlte/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
     <div id="page-wrapper">
        <div class="row">
               
                <!-- /.col-lg-12 -->
          </div>
            <!-- /.row -->
             <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">

                        <div class="panel-heading">
                           <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal">ADD </button>
                        </div>
                     @if (Session::has('message'))
                        <div id="alert" class="alert alert-sucess">{{ Session::get('message') }}</div>
                    @endif
                   
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="box-body">
                            <table id="example2" class="table table-bordered table-striped">
                                <thead>
                                    <?php $i=1; ?>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Role</th>
                                        <th>Location</th>
                                        <th>Action</th>
                                        
                                    </tr>
                                </thead> 
                               <tbody>
                                <?php $i=1; foreach($admins as $admin){?>
                                    <tr class="odd gradeX">
                                       <td><?= $i++;?></td>
                                        <td><?= $admin->name;?></td>
                                         <td><?= $admin->email;?></td>
                                         <td><?= $admin->phone;?></td>
                                         <td><?= $admin->role;?></td>
                                         <td><?= $admin->location;?></td>
                                        <td><a  class="fa fa-pencil btn btn-primary" href="{{ route('admin.edit',$admin->id) }}"></a>&nbsp;&nbsp;&nbsp;<a class="fa fa-trash btn btn-danger" href="{{ route('admin.destroy',$admin->id) }}" onclick="return confirm('Are you sure you want to delete this item?');">
                                            </a>
                                        </td>
                                    </tr>
                                    <?php }?>
                                </tbody>

                            </table>
                            </div>
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
                       
                        
                                    <form role="form" method="post" action="{{ route('admin.store') }}">
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
                                            <input type="password" class="form-control" name="password" id="dsa_pass" placeholder="Password" required>
                                        </div>
                                       
                                        <div class="form-group">
                                            <label>Mobile No.</label>
                                            <input class="form-control" name="phone" id="dsa_phone" placeholder="Enter Phone" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Role</label>
                                            <select class="form-control" name="role" id="dsa_role"  required>
                                            <option>Please Select Role</option>
                                            <option value="Super Admin">Super Admin</option>
                                             <option value="Admin">Admin</option>  
                                            <option value="Customer">Customer</option>  
                                            <option value="DSA">DSA</option>     
                                        </select></div>

                                        <div class="form-group">
                                            <label>Location</label>
                                            <select  class="form-control" name="location" id="location" required>
                                            <option>Please Select</option>
                                            <option value="Agra">Agra</option>
                                            <option value="Faridabad">Faridabad</option>
                                            <option value="Ambala">Ambala</option>   
                                            <option value="Delhi">Delhi</option>   
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
@stop