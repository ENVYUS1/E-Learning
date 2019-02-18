@extends('layout.layout')
@section('content')

<div class="page-inner page-inner-fill">
	<div class="page-with-aside mail-wrapper bg-white">
		
		@include('kelas.menu_list_materi')

		<div class="page-content mail-content bg-white">
			<div class="inbox-head d-lg-flex d-block">
				<h3>NAMA MATERI {{ Request::segment(4) }}</h3>
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
			<div class="inbox-body" style="max-height: 600px; overflow-y: scroll;">
				<div class="list-group list-group-messages list-group-flush">
					{{-- <div class="list-group-header bg-grey1"> Jan 21, 2018 </div> --}}
					@for($i=10; $i>0; $i--)
					<div class="list-group-item">
						<div class="list-group-item-figure">
							<a href="conversations.html" class="user-avatar">
								<div class="avatar">
									<span class="avatar-title rounded-circle border bg-danger border-white"><i class="fas fa-file-pdf"></i></span>
								</div>
							</a>
						</div>
						<div class="list-group-item-body pl-3 pl-md-4">
							<div class="row">
								<div class="col-12 col-lg-9">
									<h4 class="list-group-item-title">
										<a href="conversations.html">SUB MATERI KE-{{$i}}</a>
									</h4>
									<p class="list-group-item-text text-truncate"> Nama Materi Bab {{$i}}</p>
								</div>
								<div class="col-12 col-lg-3 text-lg-right">
									<p class="list-group-item-text mr-3"> 16 minutes ago </p>
								</div>
							</div>
						</div>
						<div class="list-group-item-figure">
							<a href="#" class="text-muted">
								<i class="fas fa-download" style="font-size: 17px"></i>
							</a>
						</div>
					</div>
					@endfor
				</div>
			</div>
		</div>
	</div>
</div>
@endsection