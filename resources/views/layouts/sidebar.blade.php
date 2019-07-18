
<div class="collapse navbar-collapse navbar-ex1-collapse">
	<ul class="nav navbar-nav side-nav">
		<li>
			<a href="{{route('dashboard')}}"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
		</li>
		<li>
			<a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> User <i class="fa fa-fw fa-user"></i></a>
			<ul id="demo" class="collapse">
				<li>
					<a href=""><i class="fa fa-fw fa-users"> </i> All Users</a>
				</li>
				<li>
					<a href="#">Add Users</a>
				</li>
			</ul>
		</li>
		<li>
			<a href="javascript:;" data-toggle="collapse" data-target="#demo2"><i class="fa fa-fw fa-arrows-v"></i> Categories <i class="fa fa-fw fa-caret-down"></i></a>
			<ul id="demo2" class="collapse">
				<li>
					<a href="{{route('categories.index')}}">All Categories</a>
				</li>
				<li>
					<a href="{{route('categories.create')}}">Add Categories</a>
				</li>
			</ul>
		</li>
		<li>
			<a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Sub Categories <i class="fa fa-fw fa-caret-down"></i></a>
			<ul id="demo" class="collapse">
				<li>
					<a href="#">All Sub Categories</a>
				</li>
				<li>
					<a href="#">Add Sub Categories</a>
				</li>
			</ul>
		</li>
		<li>
			<a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i>Branch <i class="fa fa-fw fa-caret-down"></i></a>
			<ul id="demo" class="collapse">
				<li>
					<a href="#">All Branch</a>
				</li>
				<li>
					<a href="#">Add Branch</a>
				</li>
			</ul>
		</li>
	</ul>
</div>