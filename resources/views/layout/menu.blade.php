
<div class="user">
	<div class="avatar-sm float-left mr-2">
		<span class="avatar-title bg-warning rounded-circle border border-white"><i class="fas text-white fa-user-alt"></i></span>		
	</div>

	<div class="info">
		<a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
			<span>
				Hizrian
				<span class="user-level">Administrator</span>
				<span class="caret"></span>
			</span>
		</a>
		<div class="clearfix"></div>

		<div class="collapse in" id="collapseExample">
			<ul class="nav">
				<li>
					<a href="#profile">
						<span class="link-collapse">My Profile</span>
					</a>
				</li>
				<li>
					<a href="#settings">
						<span class="link-collapse">Settings</span>
					</a>
				</li>
			</ul>
		</div>
	</div>
</div>
<ul class="nav nav-primary">
	<li class="nav-item">
		<a href="invoice.html">
			<i class="fas fa-home"></i>
			<p>Dashboard</p>
		</a>
	</li>
	<li class="nav-section">
		<span class="sidebar-mini-icon">
			<i class="fa fa-ellipsis-h"></i>
		</span>
		<h4 class="text-section">Menu</h4>
	</li>
	<li class="nav-item {{ Request::segment(1) == 'jurusan' || Request::segment(1) == 'matkul' || Request::segment(1) == 'quote' ? 'active submenu':''}}">
		<a data-toggle="collapse" href="#custompages">
			<i class="fas fa-database"></i>
			<p>Referensi</p>
			<span class="caret"></span>
		</a>
		<div class="collapse {{ Request::segment(1) == 'jurusan' || Request::segment(1) == 'matkul' || Request::segment(1) == 'quote' ? 'show':''}}" id="custompages">
			<ul class="nav nav-collapse">
				<li class="{{ Request::segment(1) == 'jurusan' ? 'active':''}}">
					<a href="/jurusan">
						<span class="sub-item">Jurusan</span>
					</a>
				</li>
				<li class="{{ Request::segment(1) == 'matkul' ? 'active':''}}">
					<a href="/matkul">
						<span class="sub-item">Mata Kuliah</span>
					</a>
				</li>
				<li class="{{ Request::segment(1) == 'quote' ? 'active':''}}">
					<a href="/quote">
						<span class="sub-item">Quote</span>
					</a>
				</li>
			</ul>
		</div>
	</li>
	<li class="nav-item {{ Request::segment(1) == 'kelas' ? 'active':''}}">
		<a href="/kelas">
			<i class="fas fa-pencil-ruler"></i>
			<p>Kelas</p>
		</a>
	</li>
	<li class="nav-item {{ Request::segment(1) == 'file_manager' ? 'active':''}}">
		<a href="/file_manager">
			<i class="fas fa-folder-open"></i>
			<p>File Manager</p>
		</a>
	</li>
	<li class="nav-item">
		<a data-toggle="collapse" href="#submenu">
			<i class="fas fa-users"></i>
			<p>User</p>
			<span class="caret"></span>
		</a>
		<div class="collapse" id="submenu">
			<ul class="nav nav-collapse">
				<li>
					<a href="#">
						<span class="sub-item">Customer Services</span>
					</a>
				</li>
				<li>
					<a href="#">
						<span class="sub-item">Dosen</span>
					</a>
				</li>
				<li>
					<a href="#">
						<span class="sub-item">Mahasiswa</span>
					</a>
				</li>
				<li>
					<a href="#">
						<span class="sub-item">Aministrator</span>
					</a>
				</li>
			</ul>
		</div>
	</li>
	<li class="nav-item">
		<a data-toggle="collapse" href="#Sampah">
			<i class="fas fa-trash-alt"></i>
			<p>Sampah</p>
			<span class="caret"></span>
		</a>
		<div class="collapse" id="Sampah">
			<ul class="nav nav-collapse">
				<li>
					<a href="#">
						<span class="sub-item">Customer Services</span>
					</a>
				</li>
				<li>
					<a href="#">
						<span class="sub-item">Dosen</span>
					</a>
				</li>
				<li>
					<a href="#">
						<span class="sub-item">Mahasiswa</span>
					</a>
				</li>
				<li>
					<a href="#">
						<span class="sub-item">Aministrator</span>
					</a>
				</li>
			</ul>
		</div>
	</li>
</ul>
