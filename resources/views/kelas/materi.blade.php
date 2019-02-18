@extends('layout.layout')
@section('content')

<div class="page-inner page-inner-fill">
	<div class="page-with-aside mail-wrapper bg-white">

		@include('kelas.menu')
		
		<div class="page-content mail-content bg-white">
			<div class="inbox-head d-lg-flex d-block">
				<h3>MATERI MATEMATIKA REKAYASA</h3>
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
			<div class="inbox-body" style="max-height: 600px; overflow-y: auto;">
				<div class="list-group list-group-messages list-group-flush">
					@for($i=10; $i>1; $i--)
					<div class="list-group-item">
						<div class="list-group-item-figure">
							<a href="conversations.html" class="user-avatar">
								<div class="avatar">
									<span class="avatar-title rounded-circle border border-white"><i class="flaticon-agenda-1"></i></span>
								</div>
							</a>
						</div>
						<div class="list-group-item-body pl-3 pl-md-4">
							<div class="row">
								<div class="col-12 col-lg-9">
									<h4 class="list-group-item-title">
										<a href="conversations.html">BAB {{$i}}</a>
									</h4>
									<p class="list-group-item-text text-truncate"> Nama Materi Bab {{$i}}</p>
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
									<a href="/kelas/materi/{{$i}}" class="dropdown-item">Lihat</a>
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