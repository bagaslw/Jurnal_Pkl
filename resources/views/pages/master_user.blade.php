@extends('master')

@section('title-navbar','Master User')

@section('title','MASTER USER')

@section('active-master','active')

@section('show-master','show')

@section('active-user','active')

@section('content')
<div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-info card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">assignment</i>
                  </div>
                  <div class="card-title">
                    <h4>Master User</h4>                      
                  </div>
                </div>
                <div class="card-body">
                  <div class="toolbar">
                    <button class="btn btn-info" data-toggle="modal" data-target="#addUser">
                      <span class="btn-label">
                        <i class="material-icons">add</i>
                      </span>
                      Add User
                    </button>
                  </div>
                  <div class="material-datatables">
                    <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Name</th>
                          <th>Username</th>
                          <th>Password</th>
                          <th>Role</th>                                                  
                          <th class="disabled-sorting text-right">Actions</th>
                        </tr>
                      </thead>
                      <!-- <tfoot>
                        <tr>
                          <th>#</th>
                          <th>Nama</th>
                          <th>Username</th>
                          <th>Password</th>      
                          <th class="text-right">Actions</th>
                        </tr>
                      </tfoot> -->
                      <tbody>
                        @foreach($show as $data)
                        <tr>                         
                          <td></td>
                          <td>{{$data->name}}</td>
                          <td>{{$data->username}}</td>
                          <td>{{$data->password}}</td>
                          <td>{{$data->role}}</td>                                              
                          <td class="td-actions text-right">
                            <!-- <button type="button" rel="tooltip" class="btn btn-info btn-round" data-original-title="Preview Data" title="Edit Data">
                              <i class="material-icons">visibility</i>
                            </button> -->                          
                            <button onclick="get_data({{$data->id}})" type="button" rel="tooltip" class="btn btn-success btn-round" data-toggle="modal" data-target="#editUser" data-original-title="Edit Data" title="Edit Data">
                              <i class="material-icons">edit</i>
                            </button>                            
                            <button onclick="delete_user({{$data->id}})" type="button" rel="tooltip" class="btn btn-danger btn-round"  data-original-title="Delete Data" title="Delete Data">
                              <i class="material-icons">delete</i>
                            </button>
                          </td>
                        @endforeach
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <!-- end content-->
              </div>
              <!--  end card  -->
            </div>
            <!-- end col-md-12 -->
          </div>
          <!-- end row -->
        </div>

        <!-- modal add user-->       
<div class="modal fade" id="addUser" tabindex="-1" role="">
    <div class="modal-dialog modal-login" role="document">
        <div class="modal-content">
            <div class="card card-signup card-plain">
                <div class="modal-header">
                  <div class="card-header card-header-info text-center">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                      <i class="material-icons">clear</i>
                    </button>

                    <h4 class="card-title">Add User</h4>                    
                  </div>
                </div>
                <div class="modal-body">
                    <form class="form" method="post" id="save_user">
                        <div class="card-body">

                            <div class="form-group bmd-form-group">
                                <div class="input-group">
                                  <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="material-icons">face</i></div>
                                  </div>
                                  <input name="nama" id="nama" type="text" class="form-control" placeholder="Name..." required="">
                                </div>
                            </div>

                            <div class="form-group bmd-form-group">
                                <div class="input-group">
                                  <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="material-icons">fingerprint</i></div>
                                  </div>
                                  <input name="username" id="username" type="text" class="form-control" placeholder="Username..." required="">
                                </div>
                            </div>

                            <div class="form-group bmd-form-group">
                                <div class="input-group">
                                  <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="material-icons">lock_outline</i></div>
                                  </div>
                                  <input name="password" id="password" type="password" placeholder="Password..." class="form-control" required="">
                                </div>
                            </div> 

                             <div class="form-group bmd-form-group">
                              <div class="input-group">
                                  <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="material-icons">build</i></div>
                                  </div>
                                  <select name="role" id="role" class="selectpicker" data-style="btn btn-info" title="Role">
                                    <option value="Administrator">Administrator</option>                                  
                                    <option value="Pembimbing">Pembimbing</option>                                                  
                                  </select>
                                </div>      
                            </div>

                        </div>                    
                </div>
                <div class="modal-footer justify-content-center">
                    <a onclick="save_data()" class="btn btn-info btn-link btn-wd btn-lg">Submit</a>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- end-modal -->
<!-- modal edit user-->       
<div class="modal fade" id="editUser" tabindex="-1" role="">
    <div class="modal-dialog modal-login" role="document">
        <div class="modal-content">
            <div class="card card-signup card-plain">
                <div class="modal-header">
                  <div class="card-header card-header-info text-center">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                      <i class="material-icons">clear</i>
                    </button>

                    <h4 class="card-title">Edit User</h4>                    
                  </div>
                </div>
                <div class="modal-body">
                    <form class="form" method="post" id="edit_user">
                        <div class="card-body">
                            <input type="hidden" name="edit_id" id="edit_id">
                            <div class="form-group bmd-form-group">
                                <div class="input-group">
                                  <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="material-icons">face</i></div>
                                  </div>
                                  <input name="edit_nama" id="edit_nama" type="text" class="form-control" placeholder="Name..." required="">
                                </div>
                            </div>

                            <div class="form-group bmd-form-group">
                                <div class="input-group">
                                  <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="material-icons">fingerprint</i></div>
                                  </div>
                                  <input name="edit_username" id="edit_username" type="text" class="form-control" placeholder="Username..." required="">
                                </div>
                            </div>

                            <div class="form-group bmd-form-group">
                                <div class="input-group">
                                  <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="material-icons">lock_outline</i></div>
                                  </div>
                                  <input name="edit_password" id="edit_password" type="password" placeholder="Password..." class="form-control" required="">
                                </div>
                            </div>    

                             <div class="form-group bmd-form-group">
                              <div class="input-group">
                                  <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="material-icons">build</i></div>
                                  </div>
                                  <select name="role" id="edit_role" class="selectpicker" data-style="btn btn-info" title="Role">
                                    <option value="Administrator">Administrator</option>                                  
                                    <option value="Pembimbing">Pembimbing</option>                                                                       
                                  </select>
                                </div>      
                            </div>                    

                        </div>                    
                </div>
                <div class="modal-footer justify-content-center">
                    <a onclick="edit_data()" class="btn btn-info btn-link btn-wd btn-lg">Submit</a>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- end-modal -->
@endsection

@section('js')
<script>
  function save_data() {
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: "{{ route('add_user')}}",
        processData: false,
        contentType : false,
        data: new FormData($('#save_user')[0]),
        type: 'post',
        success: function (result) {    
            if (result == 'sukses') {
                $('#addUser').modal('hide');
                $.notify({
                  icon: "notification_important",
                  message: "User Added Successfully"

                }, {
                  type: "success",
                  timer: 3000,
                  placement: {
                    from: "top",
                    align: "center"
                  }
                });
                location.reload();
            }else{
                $('#addUser').modal('hide');
                $.notify({
                  icon: "notification_important",
                  message: "User Added Failed"

                }, {
                  type: "danger",
                  timer: 3000,
                  placement: {
                    from: "top",
                    align: "center"
                  }
                });
            }
        },
        error : function (data) {
            $('#addUser').modal('hide');
            $.notify(data, "error");
        }
    })
}

function get_data(id){
  console.log(id);
 $.ajax({
    url : "{{route('get_edit')}}",
    method : "GET",
    data : {
      id_user : id
    } ,
    success : function(data){
      console.log(data);
      $('#edit_id').val(data[0].id),
      $('#edit_nama').val(data[0].name),
      $('#edit_username').val(data[0].username),
      $('#edit_password').val(data[0].password),
      $('#edit_role').selectpicker('val', data[0].role)
    }
  });
}

function edit_data() {
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: "{{ route('update_user')}}",
        processData: false,
        contentType : false,
        data: new FormData($('#edit_user')[0]),
        type: 'post',
        success: function (result) {    
            if (result == 'sukses') {
                $('#editUser').modal('hide');
                $.notify({
                  icon: "notification_important",
                  message: "User Change Successfully"

                }, {
                  type: "success",
                  timer: 3000,
                  placement: {
                    from: "top",
                    align: "center"
                  }
                });
                location.reload();
            }else{
                $('#editUser').modal('hide');
                $.notify({
                  icon: "notification_important",
                  message: "User Change Failed"

                }, {
                  type: "danger",
                  timer: 3000,
                  placement: {
                    from: "top",
                    align: "center"
                  }
                });
            }
        },
        error : function (data) {
            $('#editUser').modal('hide');
            $.notify(data, "error");
        }
    })
}

function delete_user(id) {
  Swal.fire({
    title: 'Are you sure?',
    text: 'You will Deleted!',
    type: 'warning',
    showCancelButton: true,
    confirmButtonText: 'Yes, delete it!',
    cancelButtonText: 'No, keep it',
    confirmButtonClass: "btn btn-success",
    cancelButtonClass: "btn btn-danger",
    buttonsStyling: false
}).then((result) => {
  if (result.value) {
    $.ajax({
      type: 'get',
      url: "{{ route('delete_user')}}",
      dataType: 'text',
      data: {
          id_users: id,
      },
      success: function (data) {

          console.log(data);

          if (data == "sukses") {
               Swal.fire(
                'Deleted!',
                'Your imaginary file has been deleted.',
                'success'
              )
              location.reload();
          }else{
               Swal.fire(
                'Cancelled',
                'Your imaginary file is safe :)',
                'error'
              )
          }

      }
  })
  // For more information about handling dismissals please visit
  // https://sweetalert2.github.io/#handling-dismissals
  } else if (result.dismiss === Swal.DismissReason.cancel) {
    Swal.fire(
      'Cancelled',
      'Your imaginary file is safe :)',
      'error'
    )
  }
})
}
</script>
@endsection