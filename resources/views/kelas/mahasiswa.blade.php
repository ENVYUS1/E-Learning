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
			<div class="inbox-body" style="max-height: 600px;   overflow-y: auto;">
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
					</div>
					@endfor
				</div>
			</div>
		</div>
	</div>
</div>
@endsection