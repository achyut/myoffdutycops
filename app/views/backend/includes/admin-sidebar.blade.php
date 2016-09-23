<!-- begin #sidebar -->
		<div id="sidebar" class="sidebar">
			<!-- begin sidebar scrollbar -->
			<div data-scrollbar="true" data-height="100%">
				<!-- begin sidebar user -->
				<ul class="nav">
					<li class="nav-profile">
						<div class="image">
							<a href="javascript:;"><img src="{{{ asset('assets/img/user-13.jpg') }}}" alt="" /></a>
						</div>
						<div class="info">
						{{{ Auth::User()->name }}}
							<small>Manager</small>
						</div>
					</li>
				</ul>
				<!-- end sidebar user -->
				<!-- begin sidebar nav -->
				<ul class="nav">
					<li class="nav-header">Navigation</li>
					
					<!-- <li><a href="/dashboard"><i class="fa fa-home"></i> <span>Home</span></a></li>
					 -->
					<!-- <li class="has-sub">
					    <a href="javascript:;">
					        <b class="caret pull-right"></b>
					        <i class="fa fa-book"></i>
					        <span>Jobs</span>
					    </a>
						<ul class="sub-menu">
							<li><a href="/jobs">New Jobs</a></li>
							<li><a href="/jobs#pendingjobs">Current Jobs</a></li>
							<li><a href="#">Previous Jobs</a></li>
						</ul>
					</li>
					 -->
					<li><a href="{{ route('requestservices.index') }}"><i class="fa fa-suitcase"></i> <span>Request Services</span></a></li>
					<li><a href="{{ route('policesignups.index') }}"><i class="fa fa-star"></i> <span>Officers</span></a></li>
					<li><a href="{{ route('contacts.index') }}"><i class="fa fa-envelope"></i> <span>Contacts</span></a></li>
					<!-- <li><a href="/dashboard"><i class="fa fa-bar-chart-o"></i> <span>Reports</span></a></li>
					 -->
					<li><a href="{{ route('users.index') }}"><i class="fa fa-group"></i> <span>Users</span></a></li>

					<!-- <li><a href="/dashboard"><i class="fa fa-cog"></i> <span>Notification Settings</span></a></li>
					<li><a href="/dashboard"><i class="fa fa-magic"></i> <span>UI Settings</span></a></li>
					 -->
					<li><a href="{{ route('news.index') }}"><i class="fa fa-rss-square"></i> <span>News</span></a></li>
					
			        <!-- begin sidebar minify button -->
					<li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-double-left"></i></a></li>
			        <!-- end sidebar minify button -->
				</ul>
				<!-- end sidebar nav -->
			</div>
			<!-- end sidebar scrollbar -->
		</div>
		<div class="sidebar-bg"></div>
		<!-- end #sidebar -->
