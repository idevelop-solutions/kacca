<header>
			<div class="container-fluid">
				<div class="header d-md-flex justify-content-between align-items-center py-sm-4 py-3 px-xl-5 px-lg-3 px-2">
					<!-- logo -->
					<div id="logo">
						<h1><a class="" href="{{url('/')}}">Arizo Zeeba</a></h1>
					</div>
					<!-- //logo -->
					<!-- nav -->
					<div class="nav_w3ls">
						<nav>
							<label for="drop" class="toggle toogle-2">...</label>
							<input type="checkbox" id="drop" />
							<ul class="menu">
								<li class="@if(Request::is('/')) active @endif"><a href="{{url('/')}}">Home</a></li>
								<li class="@if(Request::is('user/news') || Request::is('user/news/*'))  active @endif mx-lg-4 mx-md-3 my-md-0 my-2"><a href="{{url('user/news')}}">News</a></li>
                                <li class="@if(Request::is('user/product') || Request::is('user/product/*'))  active @endif"><a href="{{url('/user/product')}}">Product</a></li>
								<li class="mx-lg-4 mx-md-3 my-md-0 my-2 @if(Request::is('user/about_us') || Request::is('user/gallery/*')) || Request::is('user/gallery') || Request::is('user/about_us/*')  active @endif">
									<!-- First Tier Drop Down -->
									<label for="drop-2" class="toggle">About Us <span class="fa fa-angle-down" aria-hidden="true"></span>
									</label>
									<a href="#">About <span class="fa fa-angle-down" aria-hidden="true"></span></a>
									<input type="checkbox" id="drop-2" />
									<ul>
										<li><a href="{{url('user/about_us')}}" class="drop-text">About Us</a></li>
										<li><a href="{{url('user/gallery')}}" class="drop-text">Gallery</a></li>
									</ul>
								</li>
								<li class="@if(Request::is('user/contact_us') || Request::is('user/contact_us/*'))  active @endif"><a href="{{url('user/contact_us')}}">Contact Us</a></li>
							</ul>
						</nav>
					</div>
					<!-- //nav -->
				</div>
			</div>
		</header>