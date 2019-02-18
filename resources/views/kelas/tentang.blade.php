@extends('layout.layout')
@section('content')

<div class="page-inner page-inner-fill">
	<div class="page-with-aside mail-wrapper bg-white">

		@include('kelas.menu')

		<div class="page-content mail-content bg-white">
			<div class="inbox-head  d-block">
				<h3>TENTANG MATEMATIKA REKAYASA</h3>
				<br>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, pariatur quis autem aut corporis? Voluptate quisquam aspernatur, reprehenderit quaerat blanditiis, voluptates, tempore odit sunt earum cumque ducimus optio porro quae!</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, pariatur quis autem aut corporis? Voluptate quisquam aspernatur, reprehenderit quaerat blanditiis, voluptates, tempore odit sunt earum cumque ducimus optio porro quae!</p>

				<div class="card-list">
					<div class="item-list">
						<div class="avatar">
							<span class="avatar-title rounded-circle border border-white"><i class="flaticon-user"></i></span>
						</div>
						<div class="info-user ml-3">
							<div class="username fw-bold">DOSEN</div>
							<div class="status">PAHRI KHALID</div>
						</div>
					</div>
					<div class="item-list">
						<div class="avatar">
							<span class="avatar-title rounded-circle border border-white"><i class="flaticon-agenda"></i></span>
						</div>
						<div class="info-user ml-3">
							<div class="username fw-bold">MATERI</div>
							<div class="status">10 DOC + 20 PDF</div>
						</div>
					</div>
					<div class="item-list">
						<div class="avatar">
							<span class="avatar-title rounded-circle border border-white"><i class="flaticon-stopwatch"></i></span>
						</div>
						<div class="info-user ml-3">
							<div class="username fw-bold">KUIS</div>
							<div class="status">30</div>
						</div>
					</div>
					<div class="item-list">
						<div class="avatar">
							<span class="avatar-title rounded-circle border border-white"><i class="flaticon-users"></i></span>
						</div>
						<div class="info-user ml-3">
							<div class="username fw-bold">MAHASISWA</div>
							<div class="status">18 P + 22 L</div>
						</div>
					</div>
					<div class="item-list">
						<div class="avatar">
							<span class="avatar-title rounded-circle border border-white"><i class="flaticon-desk"></i></span>
						</div>
						<div class="info-user ml-3">
							<div class="username fw-bold">KELAS</div>
							<div class="status">PAGI</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection