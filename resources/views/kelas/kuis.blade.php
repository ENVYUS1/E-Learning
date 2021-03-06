

@extends('layout.layout')
@section('content')

<div class="page-inner page-inner-fill">
	<div class="page-with-aside mail-wrapper bg-white">
		
		@include('kelas.menu')

		<div class="page-content mail-content bg-white">
			<div class="inbox-head d-lg-flex d-block">
				<h3>KUIS</h3>
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
					<button type="button" data-toggle="modal" data-target="#modal_tambah_kuis" class="btn btn-outline-success"><i class="fas fa-plus"></i> Tambah Kuis</button>
				</div>
				<div style="max-height: 600px; overflow-y: auto;">
					<div class="list-group list-group-messages list-group-flush">
						@for($i=5; $i>0; $i--)
						<div class="list-group-item">
							<div class="list-group-item-figure">
								<a href="conversations.html" class="user-avatar">
									<div class="avatar">
										@if($i == 5)
										<span class="avatar-title rounded-circle bg-danger border border-white"><i class="fas fa-info"></i></span>
										@else
										<span class="avatar-title rounded-circle bg-success border border-white">78</span>
										@endif
									</div>
								</a>
							</div>
							<div class="list-group-item-body pl-3 pl-md-4">
								<div class="row">
									<div class="col-12 col-lg-9">
										<h4 class="list-group-item-title">
											<a href="conversations.html">Kuis Ke-{{$i}}</a>
										</h4>
										<p class="list-group-item-text text-truncate"> Jam selesai pengerjaan : 07:00 AM</p>
									</div>
									<div class="col-12 col-lg-3 text-lg-right">
										<p class="list-group-item-text"> 16 minutes ago </p>
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
										<a href="kuis/{{$i}}" class="dropdown-item">Lihat</a>
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

<!-- Modal Tambah Kuis-->
<div class="modal fade" id="modal_tambah_kuis" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header no-bd">
				<div class="card-title"><i class="fas fa-plus-circle text-success"></i> Tambah Soal Kuis</div>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form id="form-materi">
				<div class="modal-body no-bd">
					<input type="hidden" name="id_kelas">
					<div class="form-group form-show-validation row mt-2">
						<label for="name" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Batas Waktu <span class="required-label">*</span></label>
						<div class="col-lg-3 col-md-12 col-sm-12">
							<div class="input-group date" id="datetimepicker3" data-target-input="nearest">
								<input type="text" class="form-control datetimepicker-input" data-target="#datetimepicker3"/>
								<div class="input-group-append" data-target="#datetimepicker3" data-toggle="datetimepicker">
									<div class="input-group-text"><i class="far fa-clock"></i></div>
								</div>
							</div>
						</div>
					</div>
					<div class="card bg-grey2">
						<div class="body">
							<div class="form-group form-show-validation row mt-2">
								<div class="col-lg-1">
									<div class="avatar avatar-sm">
										<span class="avatar-title bg-warning rounded-circle border border-white fw-bold">1</span>
									</div>
								</div>
								<label for="name" class="col-lg-2 col-md-3 col-sm-4 mt-sm-2 text-right">
									Pertanyaan <span class="required-label">*</span>
								</label>
								<div class="col-lg-7 col-md-12 col-sm-12">
									<textarea name="soal[]" class="form-control" rows="5" required placeholder="Masukkan soal kuis" aria-required="true"></textarea>
								</div>
							</div>
							<div class="row ml-1">
								<div class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right"></div>
								<div class="form-check col-lg-7">
									<label class="form-check-label">
										<input class="form-check-input lampiran" type="checkbox">
										<span class="form-check-sign">Lampirkan Gambar</span>
									</label>
								</div>
							</div>
							<div class="file-lampiran">
								
							</div>
						</div>
						<div id="baris-pertanyaan">
							
						</div>
						<a href="#" style="text-decoration: none;" onclick="tambah_pertanyaan()">
							<div class="card-footer mt-3 text-center bg-info text-white">
								<i class="fas fa-plus-circle"></i> TAMBAH PERTANYAAN
							</div>
						</a>
					</div>

				</div>
				<div class="modal-footer no-bd mt--1">
					<button class="btn btn-success">Simpan</button>
					<button data-dismiss="modal" class="btn">Batal</button>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection


