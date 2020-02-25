@extends('master')

@section('title-navbar','Master Pembimbing Magang')

@section('title','MASTER USER')

@section('active-master','active')

@section('show-master','show')

@section('active-pembimbing-magang','active')

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
						<h4>Master Pembimbing Magang</h4>                      
					</div>
				</div>
				<div class="card-body">
					<div class="toolbar">
						<button class="btn btn-info" data-toggle="modal" data-target="#addPembimbingPkl">
							<span class="btn-label">
								<i class="material-icons">add</i>
							</span>
							Add Pembimbing
						</button>
					</div>
					<div class="material-datatables">
						<table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
							<thead>
								<tr>
									<th>No</th>
									<th>Name</th>
									<th>Tanggal Lahir</th>
									<th>alamat</th>
									<th>Email</th>
									<th>Telepon</th>                                                  
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
                    		<td>{{$data->nama_pbb_pkl}}</td>
                    		<td>{{$data->tgl_lahir_pbb_pkl}}</td>
                    		<td>{{$data->alamat_pbb_pkl}}</td>
                    		<td>{{$data->email_pbb_pkl}}</td>
                    		<td>{{$data->telepon_pbb_pkl}}</td>                                        
                    		<td class="td-actions text-right">
                            <!-- <button type="button" rel="tooltip" class="btn btn-info btn-round" data-original-title="Preview Data" title="Edit Data">
                              <i class="material-icons">visibility</i>
                          </button> -->                          
                          <button onclick="get_data({{$data->id_pembimbing_pkl}})" type="button" rel="tooltip" class="btn btn-success btn-round" data-toggle="modal" data-target="#editPembimbingPkl" data-original-title="Edit Data" title="Edit Data">
                          	<i class="material-icons">edit</i>
                          </button>                            
                          <button onclick="delete_user({{$data->id_pembimbing_pkl}})" type="button" rel="tooltip" class="btn btn-danger btn-round"  data-original-title="Delete Data" title="Delete Data">
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
<div class="modal fade" id="addPembimbingPkl" tabindex="-1" role="">
	<div class="modal-dialog modal-login" role="document">
		<div class="modal-content">
			<div class="card card-signup card-plain">
				<div class="modal-header">
					<div class="card-header card-header-info text-center">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
							<i class="material-icons">clear</i>
						</button>

						<h4 class="card-title">Add Pembimbing Magang</h4>                    
					</div>
				</div>
				<div class="modal-body">
					<form class="form" method="post" id="save_pembimbing_magang">
						<div class="card-body">

							<div class="form-group bmd-form-group">
								<div class="input-group">
									<div class="input-group-prepend">
										<div class="input-group-text"><i class="material-icons">face</i></div>
									</div>
									<input name="nama_pbb_pkl" id="nama_pbb_pkl" type="text" class="form-control" placeholder="Name..." required="">
								</div>
							</div>

							<div class="form-group bmd-form-group">
								<div class="input-group">
									<div class="input-group-prepend">
										<div class="input-group-text"><i class="material-icons">fingerprint</i></div>
									</div>
									<input name="tgl_lahir_pbb_pkl" id="tgl_lahir_pbb_pkl" type="date" class="form-control" placeholder="Tanggal Lahir..." required="">
								</div>
							</div>

							<div class="form-group bmd-form-group">
								<div class="input-group">
									<div class="input-group-prepend">
										<div class="input-group-text"><i class="material-icons">lock_outline</i></div>
									</div>
									<input name="alamat_pbb_pkl" id="alamat_pbb_pkl" type="text" placeholder="Alamat..." class="form-control" required="">
								</div>
							</div>

							<div class="form-group bmd-form-group">
								<div class="input-group">
									<div class="input-group-prepend">
										<div class="input-group-text"><i class="material-icons">lock_outline</i></div>
									</div>
									<input name="email_pbb_pkl" id="email_pbb_pkl" type="email" placeholder="Email..." class="form-control" required="">
								</div>
							</div>

							<div class="form-group bmd-form-group">
								<div class="input-group">
									<div class="input-group-prepend">
										<div class="input-group-text"><i class="material-icons">lock_outline</i></div>
									</div>
									<input name="telepon_pbb_pkl" id="telepon_pbb_pkl" type="number" placeholder="Telepon..." class="form-control" required="">
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
<div class="modal fade" id="editPembimbingPkl" tabindex="-1" role="">
	<div class="modal-dialog modal-login" role="document">
		<div class="modal-content">
			<div class="card card-signup card-plain">
				<div class="modal-header">
					<div class="card-header card-header-info text-center">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
							<i class="material-icons">clear</i>
						</button>

						<h4 class="card-title">Edit Pembimbing</h4>                    
					</div>
				</div>
				<div class="modal-body">
					<form class="form" method="post" id="edit_pembimbing_magang">
						<div class="card-body">
							<input type="hidden" name="edit_id_pembimbing_magang" id="edit_id_pembimbing_magang">
							<div class="form-group bmd-form-group">
								<div class="input-group">
									<div class="input-group-prepend">
										<div class="input-group-text"><i class="material-icons">face</i></div>
									</div>
									<input name="edit_nama_pbb_pkl" id="edit_nama_pbb_pkl" type="text" class="form-control" placeholder="Name..." required="">
								</div>
							</div>

							<div class="form-group bmd-form-group">
								<div class="input-group">
									<div class="input-group-prepend">
										<div class="input-group-text"><i class="material-icons">fingerprint</i></div>
									</div>
									<input name="edit_tgl_lahir_pbb_pkl" id="edit_tgl_lahir_pbb_pkl" type="date" class="form-control" placeholder="Tanggal Lahir..." required="">
								</div>
							</div>

							<div class="form-group bmd-form-group">
								<div class="input-group">
									<div class="input-group-prepend">
										<div class="input-group-text"><i class="material-icons">lock_outline</i></div>
									</div>
									<input name="edit_alamat_pbb_pkl" id="edit_alamat_pbb_pkl" type="text" placeholder="Alamat..." class="form-control" required="">
								</div>
							</div>

							<div class="form-group bmd-form-group">
								<div class="input-group">
									<div class="input-group-prepend">
										<div class="input-group-text"><i class="material-icons">lock_outline</i></div>
									</div>
									<input name="edit_email_pbb_pkl" id="edit_email_pbb_pkl" type="email" placeholder="Email..." class="form-control" required="">
								</div>
							</div>

							<div class="form-group bmd-form-group">
								<div class="input-group">
									<div class="input-group-prepend">
										<div class="input-group-text"><i class="material-icons">lock_outline</i></div>
									</div>
									<input name="edit_telepon_pbb_pkl" id="edit_telepon_pbb_pkl" type="number" placeholder="Telepon..." class="form-control" required="">
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
			url: "{{ route('add_pembimbing_magang')}}",
			processData: false,
			contentType : false,
			data: new FormData($('#save_pembimbing_magang')[0]),
			type: 'post',
			success: function (result) {    
				if (result == 'sukses') {
					$('#addPembimbingPkl').modal('hide');
					$.notify({
						icon: "notification_important",
						message: "Pembimbing Added Successfully"

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
					$('#addPembimbingPkl').modal('hide');
					$.notify({
						icon: "notification_important",
						message: "Pembimbing Added Failed"

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
				$('#addPembimbingPkl').modal('hide');
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
				id_pembimbing_pkl : id
			} ,
			success : function(data){
				console.log(data);
				$('#edit_id_pembimbing_magang').val(data[0].id_pembimbing_pkl),
				$('#edit_nama_pbb_pkl').val(data[0].nama_pbb_pkl),
				$('#edit_tgl_lahir_pbb_pkl').val(data[0].tgl_lahir_pbb_pkl),
				$('#edit_alamat_pbb_pkl').val(data[0].alamat_pbb_pkl),
				$('#edit_email_pbb_pkl').val(data[0].email_pbb_pkl),
				$('#edit_telepon_pbb_pkl').val(data[0].telepon_pbb_pkl)
			}
		});
	}

	function edit_data() {
		$.ajax({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			},
			url: "{{ route('update_pembimbing_magang')}}",
			processData: false,
			contentType : false,
			data: new FormData($('#edit_pembimbing_magang')[0]),
			type: 'post',
			success: function (result) {    
				if (result == 'sukses') {
					$('#editPembimbingPkl').modal('hide');
					$.notify({
						icon: "notification_important",
						message: "Pembimbing Change Successfully"

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
					$('#editPembimbingPkl').modal('hide');
					$.notify({
						icon: "notification_important",
						message: "Pembimbing Change Failed"

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
				$('#editPembimbingPkl').modal('hide');
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
					url: "{{ route('delete_pembimbing_magang')}}",
					dataType: 'text',
					data: {
						id_pembimbing_pkl: id,
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