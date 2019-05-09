<!DOCTYPE html>
<html>
	<head>
	<meta charset='utf-8'>
	<title>Real Estate - Blog</title>
	<link rel="stylesheet" href="{{asset('assets/css/style.css')}}" >
	<!--[if lt IE 9]>
	<script src="js/html5.js"></script>
	<![endif]-->
	<!--[if IE 7]>
	<link href="css/ie7.css" rel="stylesheet">
	<![endif]-->
	<!--[if IE 8]>
	<link href="css/ie8.css" rel="stylesheet">
	<![endif]-->
	<!--[if IE 9]>
	<link href="css/ie9.css" rel="stylesheet">
	<![endif]-->
	<script src="{{asset('assets/js/jquery-1.7.2.min.js')}}"></script>
	<script src="{{asset('assets/js/jquery-ui-1.10.3.custom.min.js')}}"></script>
	<script src="{{asset('assets/js/script.js')}}"></script>
	<script>
		(function($){
			$(document).ready(function() {
				$('body').addClass('blog');/*tmp script for emulation wordpress body classes*/
			});
		})(jQuery);
	</script>

	</head>
	<body>
		<div id="page">
			<header>
				<div id="header_wrapper">
					<h1><a href="{{ route('index') }}">real estate</a></h1>
					<nav id="site-navigation" class="main-navigation">
						<div class="nav-menu">
							<ul>
								<li class="page_item">
									<a href="{{ route('listing') }}">services</a>
									<ul class="children">
										<li class="page_item"><a href="{{ route('listing') }}">Menu Example 1</a></li>
										<li class="current_page_item"><a href="{{ route('listing') }}">Menu Example 2</a></li>
										<li class="page_item"><a href="{{ route('listing') }}">Menu Example 3</a></li>
										<li class="page_item"><a href="{{ route('listing') }}">Menu Example 4</a></li>
									</ul>
								</li>
								<li class="current_page_item">
									<a href="{{ route('agents') }}">agents</a>
									<ul class="children">
										<li class="page_item"><a href="{{ route('agent') }}">Menu Example 1</a></li>
										<li class="current_page_item"><a href="{{ route('agent') }}">Menu Example 2</a></li>
										<li class="page_item"><a href="{{ route('agent') }}">Menu Example 3</a></li>
										<li class="page_item"><a href="{{ route('agent') }}">Menu Example 4</a></li>
									</ul>
								</li>
								<li class="page_item"><a href="{{ route('blog') }}">advice</a></li>
								<li class="page_item"><a href="{{ route('post') }}">mortgage</a></li>
								<li class="page_item"><a href="{{ route('contact') }}">contact</a></li>
							</ul>
						</div>
					</nav><!--end of #site-navigation-->
					<div id="header_widget">
						<aside class="widget">
							<div class="login_buttons">
								<a class="register" href="{{ route('login') }}">Login</a>
								<a class="login" href="{{ route('login') }}">Register</a>
							</div>
						</aside>
					</div><!--end of #header_widget-->
				</div><!--end of #header_wrapper-->
			</header>
			<div id="main" class="wrapper">
				<div id="primary">
					<div id="heading">
						<div class="heading_text">
							<h2>Blog</h2>
							<span>Home - Blog</span>
							<div class="search">
								<form action="{{ route('search_results') }}">
									<div>
										<input placeholder="Location" type="text" >
										<input type="submit" value="">
									</div>
								</form>
							</div>
						</div>
						</div><!--end of #heading-->
					<aside class="widget widget_text">
						<div class="textwidget">
							<div class="widget_content">
								<h4>Pellentesque habitant morbi tristique senectus et ac turpis egestas?</h4>
								<p>Quisque gravida bibendum massa non vulputate. Ut in diam sem, nec venenatis lacus. Proin<br>
								faucibus urna in mi faucibus commodo.</p>
								<a href="{{ route('search_results') }}" class="back">Back to search</a>
							</div>
						</div>
					</aside>
					<aside class="widget">
						<div class="textwidget">
							<div class="home_wrapper">
								<div id="main_post_block">
									<article class="post type-post format-standard">
										<header class="entry-header">
											<h1><a href="{{ route('post') }}">Title Example</a></h1>
											<div class="entry-meta">
												Posted by <span class="author vcard"><a class="url fn n" rel="author" href="{{ route('post') }}">Billy Doe</a></span> on <a href="{{ route('post') }}"><span class="entry-date">Feb 21, 2012</span></a><span class="by-author"> in <a href="{{ route('post') }}">Category</a></span>
											</div>
										</header>
										<div class="entry-content">
											<img class="wp-post-image" src="{{asset('assets/images/templates/580x230.png')}}" alt="home" >
											<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita.</p>
										</div>
										<a href="{{ route('post') }}" class="more">Learn more</a>
									</article>
									<article class="post type-post format-standard">
										<header class="entry-header">
											<h1><a href="{{ route('post') }}">Title Example</a></h1>
											<div class="entry-meta">
												Posted by <span class="author vcard"><a class="url fn n" rel="author" href="{{ route('post') }}">Billy Doe</a></span> on <a href="{{ route('post') }}"><span class="entry-date">Feb 21, 2012</span></a><span class="by-author"> in <a href="{{ route('post') }}">Category</a></span>
											</div>
										</header>
										<div class="entry-content">
											<img class="wp-post-image" src="{{asset('assets/images/templates/580x230.png')}}" alt="home" >
											<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita.</p>
										</div>
										<a href="{{ route('post') }}" class="more">Learn more</a>
									</article>
									<div class="page-link">
										<a href="#" class="prev">Previous</a>
										<a href="#">1</a>
										<span>2</span>
										<a href="#">3</a>
										<a href="#">4</a>
										<a href="#">5</a>
										<a href="#" class="next">Next</a>
									</div>
								</div><!--end of #home_preview-->
								<aside id="min_post_block">
									<aside class="widget widget_text">
										<h3>Popular posts</h3>
										<div class="textwidget">
											<div class="popular_posts">
												<article class="post type-post format-standard">
													<header class="entry-header">
														<h1><a href="{{ route('post') }}">Post Title Example</a></h1>
														<div class="entry-meta">
															Posted on <a href="{{ route('post') }}"><span class="entry-date">April 7th</span></a><span class="by-author"> by <span class="author vcard"><a class="url fn n" rel="author" href="{{ route('post') }}">admin</a></span></span>
														</div>
													</header>
													<div class="entry-content">
														<img class="wp-post-image" src="{{asset('assets/images/templates/60x60.png')}}" width="60" height="60" alt="home" >
														<p>Morbi iaculis, libero et feugiat ultricies, nibh libero rutrum.</p>
													</div>
												</article>
												<article class="post type-post format-standard">
													<header class="entry-header">
														<h1><a href="{{ route('post') }}">Post Title Example</a></h1>
														<div class="entry-meta">
															Posted on <a href="{{ route('post') }}"><span class="entry-date">April 7th</span></a><span class="by-author"> by <span class="author vcard"><a class="url fn n" rel="author" href="{{ route('post') }}">admin</a></span></span>
														</div>
													</header>
													<div class="entry-content">
														<img class="wp-post-image" src="{{asset('assets/images/templates/60x60.png")}} width="60" height="60" alt="home" >
														<p>Morbi iaculis, libero et feugiat ultricies, nibh libero rutrum.</p>
													</div>
												</article>
												<article class="post type-post format-standard">
													<header class="entry-header">
														<h1><a href="{{ route('post') }}">Post Title Example</a></h1>
														<div class="entry-meta">
															Posted on <a href="{{ route('post') }}"><span class="entry-date">April 7th</span></a><span class="by-author"> by <span class="author vcard"><a class="url fn n" rel="author" href="{{ route('post') }}">admin</a></span></span>
														</div>
													</header>
													<div class="entry-content">
														<img class="wp-post-image" src="{{asset('assets/images/templates/60x60.png')}}" width="60" height="60" alt="home" >
														<p>Morbi iaculis, libero et feugiat ultricies, nibh libero rutrum.</p>
													</div>
												</article>
											</div>
										</div><!--end of.textwidget-->
									</aside><!--end of .widget-->
									<aside class="widget widget_text">
										<h3>Testimonials</h3>
										<div class="textwidget">
											<div class="testimonials">
												<div class="testimonials_quote">
													<blockquote>Morbi iaculis, libero et feugiat ultricies, nibh libero rutrum ante, ut euismod nunc ipsum sit amet enim. Suspendisse potenti.</blockquote>
													<div class="quote_footer">
														<div class="quote_author">John Smith</div>
														<span>Company Name</span>
													</div>
												</div>
												<div class="testimonials_quote">
													<blockquote>Morbi iaculis, libero et feugiat ultricies, nibh libero rutrum ante, ut euismod nunc ipsum sit amet enim. Suspendisse potenti.</blockquote>
													<div class="quote_footer">
														<div class="quote_author">Jane Doe</div>
														<span>Company Name</span>
													</div>
												</div>
											</div>
										</div><!--end of.textwidget-->
									</aside><!--end of .widget-->
								</aside><!--end of #post_block-->
							</div><!--end of #home_wrapper-->
						</div>
					</aside>
					<div id="content">
						<aside class="widget widget_text">
							<div class="textwidget">
								<div class="widget_content">
									<h4>Pellentesque habitant morbi tristique senectus et ac turpis egestas?</h4>
									<p>Quisque gravida bibendum massa non vulputate. Ut in diam sem, nec venenatis lacus. Proin faucibus urna in mi faucibus commodo.</p>
								</div>
								<a href="{{ route('index') }}" class="more">Learn more</a>
							</div>
						</aside>
					</div><!--end of #content-->
					<aside class="widget widget_text">
						<div class="textwidget">
							<div class="widget_info">
								<div class="first">
									<h4><a href="{{ route('index') }}">Real Estate</a></h4>
									<ul>
										<li><a href="{{ route('index') }}">Home</a></li>
										<li><a href="{{ route('listing') }}">Services</a></li>
										<li><a href="{{ route('contact') }}">About</a></li>
									</ul>
								</div>
								<div class="second">
									<h4><a href="{{ route('listing') }}">About</a></h4>
									<p>Cras placerat bibendum quam sed facilisis. Suspendisse dapibus eros eget tellus tempor lacinia. Cras ornare lorem sit amet arcu accumsan ut tristique est fringilla.</p>
								</div>
								<div class="third">
									<h4><a href="{{ route('contact') }}">Contact Info</a></h4>
									<p>Fusce nec gravida risus. Pellentesq eros magna, lobortis elementum.</p>
									<p><b>P.:</b> (555) 366 - 00 - 00<br>
									<b>E.:</b> support@bestwebsoft.zendesk.com</p>
								</div>
								<div class="fourth">
									<h4><a href="{{ route('search_results') }}">Newsletter</a></h4>
									<p>Donec hendrerit consequat elit, condimentum mollis augue tempor.</p>
									<form action="{{ route('index') }}">
										<div>
											<input type="email" placeholder="Email Address" >
											<input type="submit" value=" " >
										</div>
									</form>
								</div>
							</div>
						</div>
					</aside>
				</div><!--end of #primary-->
			</div><!--end of #main-->
			<footer>
				<div class="site-info">
					<span>Designeg with love by <a href="https://bestwebsoft.com/">BestWebSoft</a></span>
				</div>
				<div class="contacts">
					<a class="tw" href="https://twitter.com/bestwebsoft/" target="_blank"></a>
					<a class="in" href="https://www.linkedin.com/company/bestwebsoft/" target="_blank"></a>
					<a class="fb" href="https://www.facebook.com/bestwebsoft/" target="_blank"></a>
				</div>
			</footer>
		</div><!--end of #page-->
	</body>
</html>
