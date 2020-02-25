@extends('master')

@section('title-navbar','Master Kelas')

@section('title','MASTER Kelas')

@section('active-master','active')

@section('show-master','show')

@section('active-kelas','active')

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
                    <h4>Master Kelas</h4>                      
                  </div>
                </div>
                <div class="card-body">
                  <div class="toolbar">
                    <button class="btn btn-info" data-toggle="modal" data-target="#addKelas">
                      <span class="btn-label">
                        <i class="material-icons">add</i>
                      </span>
                      Add Class
                    </button>
                  </div>
                  <div class="material-datatables">
                    <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Kelas</th>
                          <th>Jurusan</th>                                                  
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
                          <td>{{$data->kelas}}</td>
                          <td>{{$data->jurusan}}</td>                                              
                          <td class="td-actions text-right">
                            <!-- <button type="button" rel="tooltip" class="btn btn-info btn-round" data-original-title="Preview Data" title="Edit Data">
                              <i class="material-icons">visibility</i>
                            </button> -->                          
                            <button onclick="get_data({{$data->id_kelas}})" type="button" rel="tooltip" class="btn btn-success btn-round" data-toggle="modal" data-target="#editKelas" data-original-title="Edit Data" title="Edit Data">
                              <i class="material-icons">edit</i>
                            </button>                            
                            <button onclick="delete_kelas({{$data->id_kelas}})" type="button" rel="tooltip" class="btn btn-danger btn-round"  data-original-title="Delete Data" title="Delete Data">
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

        <!-- modal add kelas-->       
<div class="modal fade" id="addKelas" tabindex="-1" role="">
    <div class="modal-dialog modal-login" role="document">
        <div class="modal-content">
            <div class="card card-signup card-plain">
                <div class="modal-header">
                  <div class="card-header card-header-info text-center">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                      <i class="material-icons">clear</i>
                    </button>

                    <h4 class="card-title">Add Class</h4>                    
                  </div>
                </div>
                <div class="modal-body">
                    <form class="form" method="post" id="save_kelas">
                        <div class="card-body">

                            <div class="form-group bmd-form-group">
                                <div class="input-group">
                                  <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="material-icons">aspect_ratio</i></div>
                                  </div>
                                  <input name="kelas" id="kelas" type="text" class="form-control" placeholder="Kelas..." required="">
                                </div>
                            </div> 

                             <div class="form-group bmd-form-group">
                              <div class="input-group">
                                  <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="material-icons">build</i></div>
                                  </div>
                                  <select name="jurusan" id="jurusan" class="selectpicker" data-style="btn btn-info" title="Role">
                                    <option value="RPL A">RPL A</option>                                  
                                  <option value="RPL B">RPL B</option>
                                  <option value="TKJ A">TKJ A</option>                                  
                                  <option value="TKJ B">TKJ B</option>
                                  <option value="MM A">MM A</option>                                  
                                  <option value="MM B">MM B</option>
                                  <option value="MM A">MM C</option>                                  
                                  <option value="ANIM B">ANIM A</option>
                                  <option value="TSM A">TSM A</option>                                  
                                  <option value="TSM B">TSM B</option>
                                  <option value="TSM A">TSM C</option>
                                  <option value="TKR A">TKR A</option>                                  
                                  <option value="TKR B">TKR B</option>
                                  <option value="TKR A">TKR C</option>
                                  <option value="TKR A">TKR D</option>                                  
                                  <option value="TKR B">TKR E</option>
                                  <option value="PEMASARAN A">PEMASARAN A</option>
                                  <option value="PEMASARAN A">PEMASARAN B</option>                                                   
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
<!-- modal edit kelas-->       
<div class="modal fade" id="editKelas" tabindex="-1" role="">
    <div class="modal-dialog modal-login" role="document">
        <div class="modal-content">
            <div class="card card-signup card-plain">
                <div class="modal-header">
                  <div class="card-header card-header-info text-center">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                      <i class="material-icons">clear</i>
                    </button>

                    <h4 class="card-title">Edit Kelas</h4>                    
                  </div>
                </div>
                <div class="modal-body">
                    <form class="form" method="post" id="edit_kelas">
                        <div class="card-body">
                            <input type="hidden" name="edit_id" id="edit_id">
                            <div class="form-group bmd-form-group">
                                <div class="input-group">
                                  <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="material-icons">aspect_ratio</i></div>
                                  </div>
                                  <input name="edit_kelas" id="edit_kelas1" type="text" class="form-control" placeholder="Kelas..." required="">
                                </div>
                            </div>  

                            <div class="form-group bmd-form-group">
                            	<div class="input-group">
                            		<div class="input-group-prepend">
                            			<div class="input-group-text"><i class="material-icons">build</i></div>
                            		</div>
                            		<select name="jurusan" id="edit_jurusan" class="selectpicker" data-style="btn btn-info" title="Role">
                            			<option value="RPL A">RPL A</option>                                  
                            			<option value="RPL B">RPL B</option>
                            			<option value="TKJ A">TKJ A</option>                                  
                            			<option value="TKJ B">TKJ B</option>
                            			<option value="MM A">MM A</option>                                  
                            			<option value="MM B">MM B</option>
                            			<option value="MM A">MM C</option>                                  
                            			<option value="ANIM B">ANIM A</option>
                            			<option value="TSM A">TSM A</option>                                  
                            			<option value="TSM B">TSM B</option>
                            			<option value="TSM A">TSM C</option>
                            			<option value="TKR A">TKR A</option>                                  
                            			<option value="TKR B">TKR B</option>
                            			<option value="TKR A">TKR C</option>
                            			<option value="TKR A">TKR D</option>                                  
                            			<option value="TKR B">TKR E</option>
                            			<option value="PEMASARAN A">PEMASARAN A</option>
                            			<option value="PEMASARAN A">PEMASARAN B</option>                                                  
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
        url: "{{ route('add_kelas')}}",
        processData: false,
        contentType : false,
        data: new FormData($('#save_kelas')[0]),
        type: 'post',
        success: function (result) {    
            if (result == 'sukses') {
                $('#addKelas').modal('hide');
                $.notify({
                  icon: "notification_important",
                  message: "Kelas Added Successfully"

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
                $('#addKelas').modal('hide');
                $.notify({
                  icon: "notification_important",
                  message: "Kelas Added Failed"

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
            $('#addKelas').modal('hide');
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
      id_kelas : id
    } ,
    success : function(data){
      console.log(data);
      $('#edit_id').val(data[0].id_kelas),
      $('#edit_kelas1').val(data[0].kelas),
      $('#edit_jurusan').selectpicker('val', data[0].jurusan)
    }
  });
}

function edit_data() {
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: "{{ route('update_kelas')}}",
        processData: false,
        contentType : false,
        data: new FormData($('#edit_kelas')[0]),
        type: 'post',
        success: function (result) {    
            if (result == 'sukses') {
                $('#editKelas').modal('hide');
                $.notify({
                  icon: "notification_important",
                  message: "Kelas Change Successfully"

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
                $('#editKelas').modal('hide');
                $.notify({
                  icon: "notification_important",
                  message: "Kelas Change Failed"

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
            $('#editKelas').modal('hide');
            $.notify(data, "error");
        }
    })
}

function delete_kelas(id) {
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
      url: "{{ route('delete_kelas')}}",
      dataType: 'text',
      data: {
          id_kelas: id,
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