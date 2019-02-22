@extends('layout.layout')
@section('content')

<div class="page-inner page-inner-fill">
	<div class="page-with-aside mail-wrapper bg-white">

		@include('kelas.menu')

		<div class="page-content mail-content bg-white">
			<div class="inbox-head d-lg-flex d-block">
				<h3>MAHASISWA</h3>
				<form action="#" class="ml-auto">
					<div class="input-group">
						<input type="text" placeholder="Search Email" class="form-control">
						<div class="input-group-append">
							<span class="input-group-text">
								<i class="fa fa-search search-icon"></i>
							</span>
						</div>
					</div>
				</form>
			</div>
			<div class="inbox-body">
				<div class="mail-option">
					<button type="button" onclick="form_mahasiswa()" class="btn btn-outline-success"><i class="fas fa-plus"></i> Tambah Mahasiswa</button>
				</div>
				<div style="max-height: 600px; overflow-y: auto;">
					<div class="list-group list-group-messages list-group-flush">
						@for($i=0; $i<40; $i++)
						<div class="list-group-item">
							<div class="list-group-item-figure">
								<a href="conversations.html" class="user-avatar">
									<div class="avatar avatar-online">
										<span class="avatar-title rounded-circle bg-info border border-white">JD</span>
									</div>
								</a>
							</div>
							<div class="list-group-item-body pl-3 pl-md-4">
								<div class="row">
									<div class="col-12 col-lg-9">
										<h4 class="list-group-item-title">
											<a href="conversations.html">Jimmy Denis</a>
										</h4>
										<p class="list-group-item-text"> 201412021</p>
									</div>
									<div class="col-12 col-lg-3 text-lg-right">
										<p class="list-group-item-text"> Masuk : 22/03/2019 </p>
									</div>
								</div>
							</div>
							<div class="list-group-item-figure">
								<div class="dropdown">
									<button class="btn-dropdown" data-toggle="dropdown">
										<i class="icon-options-vertical"></i>
									</button>
									<div class="dropdown-arrow"></div>
									<div class="dropdown-menu dropdown-menu-right">
										<a href="#" onclick="info_mhs()" class="dropdown-item">Info</a>
										<a href="#" class="dropdown-item">Hapus</a>
									</div>
								</div>
							</div>
						</div>
						@endfor
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="modal_informasi_mhs" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header bg-info text-white bubble-shadow">
				<h4 class="modal-title" id="exampleModalLongTitle">
					<div class="avatar avatar mr-2">
						<span class="avatar-title rounded-circle border bg-warning border-white">PK</span>
					</div>
					PAHRI KHALID
				</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body p-0 no-bd">
				<table class="table">
					<tbody>
						<tr>
							<td width="5%">NIM</td>
							<td width="1%">:</td>
							<td>201412021</td>
						</tr>
						<tr>
							<td>Email</td>
							<td>:</td>
							<td>fahri.halid@gmail.com</td>
						</tr>
						<tr>
							<td>Telpon</td>
							<td>:</td>
							<td>082292296578</td>
						</tr>
						<tr>
							<td>Kelas</td>
							<td>:</td>
							<td>Pagi</td>
						</tr>
						<tr>
							<td>Semester</td>
							<td>:</td>
							<td>Delapan (8)</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

<!-- Modal Tambah Mahasiswa-->
<div class="modal fade" id="modal_tambah_mahasiswa" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header no-bd">
				<div class="card-title"><i class="fas fa-plus-circle text-success"></i> Tambah Mahasiswa</div>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body no-bd">
				<textarea name="pesan_informasi" rows="10" class="form-control"></textarea>
			</div>
			<div class="modal-footer no-bd mt--3">
				<button class="btn btn-success">Kirim</button>
				<button data-dismiss="modal" class="btn">Batal</button>
			</div>
		</div>
	</div>
</div>
@endsection