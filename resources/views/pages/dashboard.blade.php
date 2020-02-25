@extends('master')
@section('active-dashboard','active')
@section('content')
<div class="container">
	<div class="container-fluid">	
		<div class="row">
			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="card card-stats">
					<div class="card-header card-header-info card-header-icon">
						<div class="card-icon">
							<i class="material-icons">inbox</i>
						</div>
						<p class="card-category">Total Siswa</p>
						<h3>2222</h3>
					</div>

					<div class="card-footer">
						<div class="stats">
							<i class="material-icons">date_range</i>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="card card-stats">
					<div class="card-header card-header-info card-header-icon">
						<div class="card-icon">
							<i class="material-icons">event_busy</i>
						</div>
						<p class="card-category">Total Jurnal</p>
						<h3 class="card-title" id="total_jurnal"></h3>
					</div>
					<div class="card-footer">
						<div class="stats">
							<i class="material-icons">date_range</i>
						</div>
					</div>
				</div>
			</div>
		</div>	
		<div class="row">
			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="card card-stats">
					<div class="card-header card-header-info card-header-icon">
						<div class="card-icon">
							<i class="material-icons">inbox</i>
						</div>
						<p class="card-category">Total Siswa</p>
						<h3 class="card-title" id="total_siswa"></h3>
					</div>
					<div class="card-footer">
						<div class="stats">
							<i class="material-icons">date_range</i>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="card card-stats">
					<div class="card-header card-header-info card-header-icon">
						<div class="card-icon">
							<i class="material-icons">event_busy</i>
						</div>
						<p class="card-category">Total Jurnal Masuk</p>
						<h3 class="card-title" id="total_jurnal"></h3>
					</div>
					<div class="card-footer">
						<div class="stats">
							<i class="material-icons">date_range</i>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-6">
			<div class="card">
				<div class="card-header card-header-info card-header-icon">
					<div class="card-icon">
						<i class="material-icons">
							assignment_ind
						</i>
					</div>
					<div class="card-title">
						List Jurnal
					</div>
				</div>
				<div class="card-body">
					<div class="data">
						<table id="datat" class="table table-hover table-striped">
							<thead>
								<tr>
									<td>No</td>
									<td>Kelas</td>
									<td>Nama</td>
									<td>Tanggal Jurnal</td>
									<td></td>
								</tr>
							</thead>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection