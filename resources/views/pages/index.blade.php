@extends('main.main')

@section('content')

	<div class="main-slider-two default-template-gradient">
		<div class="container-fluid pd-zero">
            <div class="pogoSlider">
                <div class="pogoSlider-slide" data-transition="expandReveal" data-duration="1000">
                    <div class="container-slider">
                        <div class="row tb">
                            <div class="col-md-5 tb-cell">
                                <div class="show-image-content pogoSlider-slide-element" data-in="slideDown" data-out="slideUp" data-duration="750" data-delay="500">
                                    <img src="assets/images/slider-show.png" alt="show" />
                                </div><!-- /.show-image-content -->
                            </div><!-- /.col-md-5 -->
                            <div class="col-md-7 tb-cell">
                                <div class="show-text-content">
                                    <p class="pogoSlider-slide-element" data-in="slideDown" data-out="slideUp" data-duration="750" data-delay="500">If we have <br/>the right perspective in life, life will always be beautiful!</p>
                                    <h2 class="pogoSlider-slide-element" data-in="slideDown" data-out="slideUp" data-duration="750" data-delay="500"><a href="#">House Rent</a></h2>
                                </div><!-- /.show-text-content -->
                            </div><!-- /.col-md-7 -->
                        </div><!-- /.row -->
                    </div><!-- /.container-slider -->
                </div>
                <div class="pogoSlider-slide" data-transition="expandReveal" data-duration="1000">
                    <div class="container-slider">
                        <div class="row tb">
                            <div class="col-md-5 tb-cell">
                                <div class="show-image-content pogoSlider-slide-element" data-in="slideLeft" data-out="slideRight" data-duration="750" data-delay="500">
                                    <img src="assets/images/slider-show.png" alt="show" />
                                </div><!-- /.show-image-content -->
                            </div><!-- /.col-md-5 -->
                            <div class="col-md-7 tb-cell">
                                <div class="show-text-content">
                                    <p class="pogoSlider-slide-element" data-in="slideLeft" data-out="slideRight" data-duration="750" data-delay="500">If we have <br/>the right perspective in life, life will always be beautiful!</p>
                                    <h2 class="pogoSlider-slide-element" data-in="slideDown" data-out="slideUp" data-duration="750" data-delay="500"><a href="#">House Rent</a></h2>
                                </div><!-- /.show-text-content -->
                            </div><!-- /.col-md-7 -->
                        </div><!-- /.row -->
                    </div><!-- /.container-slider -->
                </div>
                <div class="pogoSlider-slide" data-transition="expandReveal" data-duration="1000">
                    <div class="container-slider">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="show-image-content pogoSlider-slide-element" data-in="slideLeft" data-out="slideRight" data-duration="750" data-delay="500">
                                    <img src="assets/images/slider-show.png" alt="show" />
                                </div><!-- /.show-image-content -->
                            </div><!-- /.col-md-5 -->
                            <div class="col-md-7">
                                <div class="show-text-content">
                                    <p class="pogoSlider-slide-element" data-in="slideLeft" data-out="slideRight" data-duration="750" data-delay="500">If we have <br/>the right perspective in life, life will always be beautiful!</p>
                                    <h2 class="pogoSlider-slide-element" data-in="slideDown" data-out="slideUp" data-duration="750" data-delay="500"><a href="#">House Rent</a></h2>
                                </div><!-- /.show-text-content -->
                            </div><!-- /.col-md-7 -->
                        </div><!-- /.row -->
                    </div><!-- /.container-slider -->
                </div>
            </div><!-- .pogoSlider -->
		</div><!-- /.container-fluid -->
	</div><!-- /.main-slider -->

	<!-- ====== Form Area ======= -->
	<div class="form-area">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
                    <form action="#" method="get" class="advance_search_query">
    					<div class="form-bg form-top">
    						<div class="form-content">
    							<div class="form-group">
    								<label>Male</label>
    								<input type="text" name="FirstName" placeholder="Where do you want to live?">
    							</div><!-- /.form-group -->
    							<div class="form-group">
    								<label>Type</label>
    								<select>
    								  <option value="volvo">Apartments</option>
    								  <option value="saab">Saab</option>
    								  <option value="mercedes">Mercedes</option>
    								  <option value="audi">Audi</option>
    								</select>
    							</div><!-- /.form-group -->
    							<div class="form-group">
    								<label>Male</label>
    								<input type="text" name="FirstName" placeholder="min">
    							</div><!-- /.form-group -->
    							<div class="form-group">
    								<input type="text" name="FirstName" placeholder="max">
    							</div><!-- /.form-group -->
    							<div class="form-group">
    							   <button type="submit" class=" button nevy-button">Check Availability</button>
    							</div><!-- /.form-group -->
    						</div><!-- /.form-content -->
    					</div><!-- /.form-bg -->
                    </form> <!-- /.advance_search_query -->
				</div><!-- /.col-md-12 -->
			</div><!-- /.row -->
		</div><!-- /.container -->
	</div><!-- /.form-area -->

	<!-- ====== Category Area ====== -->
    <div class="category-area">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <div class="catagory-left-content clearfix">
                        <h2 class="default-text-gradient">Rental Category</h2>
                        <a href="#" class="button nevy-button">All Apartment</a>
                    </div><!--/.catagory-left-content -->
                </div><!--/.col-md-4 -->
                <div class="col-md-8 col-sm-8">
                    <div class="catagory-right-content row">
                        <div class="category-list style-two col-md-3 col-sm-4 col-xs-6">
                            <a href="#"><img src="assets/images/category/category-one.png" alt="category" />
                            <h4>Family House</h4></a>
                        </div><!-- /.category-list -->

                        <div class="category-list style-two col-md-3 col-sm-4 col-xs-6">
                            <a href="#"><img src="assets/images/category/category-two.png" alt="category" />
                            <h4>Apartment</h4></a>
                        </div><!-- /.category-list -->

                        <div class="clearfix visible-xs"></div><!-- /.clearfix -->

                        <div class="category-list style-two col-md-3 col-sm-4 col-xs-6">
                            <a href="#"><img src="assets/images/category/category-three.png" alt="category" />
                            <h4>Sublet</h4></a>
                        </div><!-- /.category-list -->

                        <div class="clearfix visible-sm"></div><!-- /.clearfix -->

                        <div class="category-list style-two col-md-3 col-sm-4 col-xs-6">
                            <a href="#"><img src="assets/images/category/category-four.png" alt="category" />
                            <h4>Bachelor Mess</h4></a>
                        </div><!-- /.category-list -->

                        <div class="clearfix visible-xs"></div><!-- /.clearfix -->
                        <div class="clearfix visible-md visible-lg"></div><!-- /.clearfix -->

                        <div class="category-list style-two col-md-3 col-sm-4 col-xs-6">
                            <a href="#"><img src="assets/images/category/category-five.png" alt="category" />
                            <h4>Office</h4></a>
                        </div><!-- /.category-list -->

                        <div class="category-list style-two col-md-3 col-sm-4 col-xs-6">
                            <a href="#"><img src="assets/images/category/category-six.png" alt="category" />
                            <h4>Garage</h4></a>
                        </div><!-- /.category-list -->

                        <div class="clearfix visible-xs"></div><!-- /.clearfix -->
                        <div class="clearfix visible-sm"></div><!-- /.clearfix -->

                        <div class="category-list style-two col-md-3 col-sm-4 col-xs-6">
                            <a href="#"><img src="assets/images/category/category-seven.png" alt="category" />
                            <h4>Factory</h4></a>
                        </div><!-- /.category-list -->
                        <div class="category-list style-two col-md-3 col-sm-4 col-xs-6">
                            <a href="#"><img src="assets/images/category/category-eight.png" alt="category" />
                            <h4>Hall Room</h4></a>
                        </div><!-- /.category-list -->

                        <div class="clearfix visible-xs"></div><!-- /.clearfix -->
                        <div class="clearfix visible-md visible-lg"></div><!-- /.clearfix -->

                        <div class="category-list style-two col-md-3 col-sm-4 col-xs-6">
                            <a href="#"><img src="assets/images/category/category-nine.png" alt="category" />
                            <h4>Warehouse</h4></a>
                        </div><!-- /.category-list -->

                        <div class="clearfix visible-sm"></div><!-- /.clearfix -->

                        <div class="category-list style-two col-md-3 col-sm-4 col-xs-6">
                            <a href="#"><img src="assets/images/category/category-ten.png" alt="category" />
                            <h4>Female Mess</h4></a>
                        </div><!-- /.category-list -->

                        <div class="clearfix visible-xs"></div><!-- /.clearfix -->

                        <div class="category-list style-two col-md-3 col-sm-4 col-xs-6">
                            <a href="#"><img src="assets/images/category/category-two.png" alt="category" />
                            <h4>Apartment</h4></a>
                        </div><!-- /.category-list -->
                        <div class="category-list style-two col-md-3 col-sm-4 col-xs-6">
                            <a href="#"><img src="assets/images/category/category-one.png" alt="category" />
                            <h4>Family House</h4></a>
                        </div><!-- /.category-list -->
                    </div><!--/.catagory-right-content -->
                </div><!-- /.col-md-8 -->
            </div><!-- /.row -->
        </div><!--/.container -->
    </div><!-- /.category-area -->

    <!-- ====== Apartments Area ====== -->
    <div class="apartments-area bg-gray-color">
       <div class="container">
           <div class="row">
               <div class="col-md-12">
                   <div class="heading-content-one border">
                       <h2 class="title">Rooms &amp; Apartments</h2>
                       <h5 class="sub-title">Find Your Rooms, for your abaility</h5>
                   </div><!-- /.Apartments-heading-content -->
               </div><!-- /.col-md-12 -->
           </div><!-- /.row -->
           <div class="row">
               <div class="col-md-4 col-sm-6 col-xs-6">
                   <div class="apartments-content">
                       <div class="image-content">
                           <a href="apartment-single.html"><img src="assets/images/apartment/apartment-one.png" alt="apartment" /></a>
                       </div><!-- /.image-content -->

                       <div class="text-content">
                           <div class="top-content">
                               <h3><a href="apartment-single.html">Family Apartment</a></h3>
                               <span>
                                   <i class="fa fa-map-marker"></i>
                                   Dhanmondi, Dhaka
                               </span>
                           </div><!-- /.top-content -->
                           <div class="bottom-content clearfix">
                               <div class="meta-bed-room">
                                   <i class="fa fa-bed"></i> 3 Bedrooms
                               </div>
                               <div class="meta-bath-room">
                                   <i class="fa fa-bath"></i>2 Bathroom
                               </div>
                               <span class="clearfix"></span>
                               <div class="rent-price pull-left">
                                   $200
                               </div>
                               <div class="share-meta dropup pull-right">
                                   <ul>
                                       <li class="dropup">
                                           <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-share-alt"></i></a>
                                           <ul class="dropdown-menu">
                                               <li>
                                                   <a href="#"><i class="fa fa-facebook"></i></a>
                                               </li>
                                               <li>
                                                   <a href="#"><i class="fa fa-twitter"></i></a>
                                               </li>
                                               <li>
                                                   <a href="#"><i class="fa fa-instagram"></i></a>
                                               </li>
                                               <li>
                                                   <a href="#"><i class="fa fa-google-plus"></i></a>
                                               </li>
                                           </ul>
                                       </li>
                                       <li>
                                           <a href="#"><i class="fa fa-star-o"></i></a>
                                       </li>
                                   </ul>
                               </div>
                           </div><!-- /.bottom-content -->
                       </div><!-- /.text-content -->
                   </div><!-- /.partments-content -->
               </div><!-- /.col-md-4 -->

               <div class="col-md-4 col-sm-6 col-xs-6">
                   <div class="apartments-content">
                       <div class="image-content">
                           <a href="apartment-single.html"><img src="assets/images/apartment/apartment-two.png" alt="apartment" /></a>
                       </div><!-- /.image-content -->

                       <div class="text-content">
                           <div class="top-content">
                               <h3><a href="apartment-single.html">Family Apartment</a></h3>
                               <span>
                                   <i class="fa fa-map-marker"></i>
                                   Dhanmondi, Dhaka
                               </span>
                           </div><!-- /.top-content -->
                           <div class="bottom-content clearfix">
                               <div class="meta-bed-room">
                                   <i class="fa fa-bed"></i> 3 Bedrooms
                               </div>
                               <div class="meta-bath-room">
                                   <i class="fa fa-bath"></i>2 Bathroom
                               </div>
                               <span class="clearfix"></span>
                               <div class="rent-price pull-left">
                                   $200
                               </div>
                               <div class="share-meta dropup pull-right">
                                   <ul>
                                       <li class="dropup">
                                           <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-share-alt"></i></a>
                                           <ul class="dropdown-menu">
                                               <li>
                                                   <a href="#"><i class="fa fa-facebook"></i></a>
                                               </li>
                                               <li>
                                                   <a href="#"><i class="fa fa-twitter"></i></a>
                                               </li>
                                               <li>
                                                   <a href="#"><i class="fa fa-instagram"></i></a>
                                               </li>
                                               <li>
                                                   <a href="#"><i class="fa fa-google-plus"></i></a>
                                               </li>
                                           </ul>
                                       </li>
                                       <li>
                                           <a href="#"><i class="fa fa-star-o"></i></a>
                                       </li>
                                   </ul>
                               </div>
                           </div><!-- /.bottom-content -->
                       </div><!-- /.text-content -->
                   </div><!-- /.partments-content -->
               </div><!-- /.col-md-4 -->

               <div class="clearfix hidden-md hidden-lg"></div>

               <div class="col-md-4 col-sm-6 col-xs-6">
                   <div class="apartments-content">
                       <div class="image-content">
                           <a href="apartment-single.html"><img src="assets/images/apartment/apartment-three.png" alt="apartment" /></a>
                       </div><!-- /.image-content -->

                       <div class="text-content">
                           <div class="top-content">
                               <h3><a href="apartment-single.html">Family Apartment</a></h3>
                               <span>
                                   <i class="fa fa-map-marker"></i>
                                   Dhanmondi, Dhaka
                               </span>
                           </div><!-- /.top-content -->
                           <div class="bottom-content clearfix">
                               <div class="meta-bed-room">
                                   <i class="fa fa-bed"></i> 3 Bedrooms
                               </div>
                               <div class="meta-bath-room">
                                   <i class="fa fa-bath"></i>2 Bathroom
                               </div>
                               <span class="clearfix"></span>
                               <div class="rent-price pull-left">
                                   $200
                               </div>
                               <div class="share-meta dropup pull-right">
                                   <ul>
                                       <li class="dropup">
                                           <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-share-alt"></i></a>
                                           <ul class="dropdown-menu">
                                               <li>
                                                   <a href="#"><i class="fa fa-facebook"></i></a>
                                               </li>
                                               <li>
                                                   <a href="#"><i class="fa fa-twitter"></i></a>
                                               </li>
                                               <li>
                                                   <a href="#"><i class="fa fa-instagram"></i></a>
                                               </li>
                                               <li>
                                                   <a href="#"><i class="fa fa-google-plus"></i></a>
                                               </li>
                                           </ul>
                                       </li>
                                       <li>
                                           <a href="#"><i class="fa fa-star-o"></i></a>
                                       </li>
                                   </ul>
                               </div>
                           </div><!-- /.bottom-content -->
                       </div><!-- /.text-content -->
                   </div><!-- /.partments-content -->
               </div><!-- /.col-md-4 -->

               <div class="clearfix hidden-xs hidden-sm"></div>

               <div class="col-md-4 col-sm-6 col-xs-6">
                   <div class="apartments-content">
                       <div class="image-content">
                           <a href="apartment-single.html"><img src="assets/images/apartment/apartment-four.png" alt="apartment" /></a>
                       </div><!-- /.image-content -->

                       <div class="text-content">
                           <div class="top-content">
                               <h3><a href="apartment-single.html">Family Apartment</a></h3>
                               <span>
                                   <i class="fa fa-map-marker"></i>
                                   Dhanmondi, Dhaka
                               </span>
                           </div><!-- /.top-content -->
                           <div class="bottom-content clearfix">
                               <div class="meta-bed-room">
                                   <i class="fa fa-bed"></i> 3 Bedrooms
                               </div>
                               <div class="meta-bath-room">
                                   <i class="fa fa-bath"></i>2 Bathroom
                               </div>
                               <span class="clearfix"></span>
                               <div class="rent-price pull-left">
                                   $200
                               </div>
                               <div class="share-meta dropup pull-right">
                                   <ul>
                                       <li class="dropup">
                                           <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-share-alt"></i></a>
                                           <ul class="dropdown-menu">
                                               <li>
                                                   <a href="#"><i class="fa fa-facebook"></i></a>
                                               </li>
                                               <li>
                                                   <a href="#"><i class="fa fa-twitter"></i></a>
                                               </li>
                                               <li>
                                                   <a href="#"><i class="fa fa-instagram"></i></a>
                                               </li>
                                               <li>
                                                   <a href="#"><i class="fa fa-google-plus"></i></a>
                                               </li>
                                           </ul>
                                       </li>
                                       <li>
                                           <a href="#"><i class="fa fa-star-o"></i></a>
                                       </li>
                                   </ul>
                               </div>
                           </div><!-- /.bottom-content -->
                       </div><!-- /.text-content -->
                   </div><!-- /.partments-content -->
               </div><!-- /.col-md-4 -->

               <div class="clearfix hidden-md hidden-lg"></div>

               <div class="col-md-4 col-sm-6 col-xs-6">
                   <div class="apartments-content">
                       <div class="image-content">
                           <a href="apartment-single.html"><img src="assets/images/apartment/apartment-five.png" alt="apartment" /></a>
                       </div><!-- /.image-content -->

                       <div class="text-content">
                           <div class="top-content">
                               <h3><a href="apartment-single.html">Family Apartment</a></h3>
                               <span>
                                   <i class="fa fa-map-marker"></i>
                                   Dhanmondi, Dhaka
                               </span>
                           </div><!-- /.top-content -->
                           <div class="bottom-content clearfix">
                               <div class="meta-bed-room">
                                   <i class="fa fa-bed"></i> 3 Bedrooms
                               </div>
                               <div class="meta-bath-room">
                                   <i class="fa fa-bath"></i>2 Bathroom
                               </div>
                               <span class="clearfix"></span>
                               <div class="rent-price pull-left">
                                   $200
                               </div>
                               <div class="share-meta dropup pull-right">
                                   <ul>
                                       <li class="dropup">
                                           <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-share-alt"></i></a>
                                           <ul class="dropdown-menu">
                                               <li>
                                                   <a href="#"><i class="fa fa-facebook"></i></a>
                                               </li>
                                               <li>
                                                   <a href="#"><i class="fa fa-twitter"></i></a>
                                               </li>
                                               <li>
                                                   <a href="#"><i class="fa fa-instagram"></i></a>
                                               </li>
                                               <li>
                                                   <a href="#"><i class="fa fa-google-plus"></i></a>
                                               </li>
                                           </ul>
                                       </li>
                                       <li>
                                           <a href="#"><i class="fa fa-star-o"></i></a>
                                       </li>
                                   </ul>
                               </div>
                           </div><!-- /.bottom-content -->
                       </div><!-- /.text-content -->
                   </div><!-- /.partments-content -->
               </div><!-- /.col-md-4 -->

               <div class="col-md-4 col-sm-6 col-xs-6">
                    <div class="apartments-content">
                        <div class="image-content">
                            <a href="apartment-single.html"><img src="assets/images/apartment/apartment-six.png" alt="apartment" /></a>
                        </div><!-- /.image-content -->

                        <div class="text-content">
                            <div class="top-content">
                                <h3><a href="apartment-single.html">Family Apartment</a></h3>
                                <span>
                                    <i class="fa fa-map-marker"></i>
                                    Dhanmondi, Dhaka
                                </span>
                            </div><!-- /.top-content -->
                            <div class="bottom-content clearfix">
                                <div class="meta-bed-room">
                                   <i class="fa fa-bed"></i> 3 Bedrooms
                               </div>
                               <div class="meta-bath-room">
                                   <i class="fa fa-bath"></i>2 Bathroom
                               </div>
                               <span class="clearfix"></span>
                               <div class="rent-price pull-left">
                                   $200
                               </div>
                                <div class="share-meta dropup pull-right">
                                    <ul>
                                        <li class="dropup">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-share-alt"></i></a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-star-o"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div><!-- /.bottom-content -->
                        </div><!-- /.text-content -->
                    </div><!-- /.partments-content -->
               </div><!-- /.col-md-4 -->
           </div><!-- /.row -->
           <a href="#" class="button nevy-button">All Apartments</a>
       </div><!-- /.container -->
    </div><!-- /.Apartments-area-->

	<!-- ====== Gallery Area ====== -->
	<div class="gallery-area">
        <div class="container-fluid">
            <div class="container-large-device">
    			<div class="row">
    				<div class="col-md-7">
    					<div class="gallery-left-content">
    						<div class="row">
    							<div class="col-md-4 col-sm-4 col-xs-4">
    								<img src="assets/images/gallery/gallery-one.png" alt="gallery" />
    							</div><!-- /.col-md-4 -->
    							<div class="col-md-4 col-sm-4 col-xs-4">
    								<img src="assets/images/gallery/gallery-two.png" alt="gallery" />
    							</div><!-- /.col-md-4 -->
    							<div class="col-md-4 col-sm-4 col-xs-4">
    								<img src="assets/images/gallery/gallery-three.png" alt="gallery" />
    							</div><!-- /.col-md-4 -->
    						</div><!-- /.row -->
    					</div><!-- /.left-content -->
    				</div><!-- /.col-md-7 -->
    				<div class="col-md-5">
    					<div class="gallery-right-content">
    						<h2>Our <br/>Photo Gallery</h2>
    						<a href="gallery.html" class="button nevy-button">All Photos & Video</a>
    					</div><!-- /.right-content -->
    				</div><!-- /.col-md-5 -->
    			</div><!-- /.row -->
    		</div><!-- /.container-large-device -->
        </div><!-- /.container -->
	</div><!-- /.gallery-area -->

    <!-- ====== Call To Action ======= -->
    <div class="call-to-action default-template-gradient">
        <div class="container">
            <div class="row tb">
                <div class="col-md-6 col-sm-6 tb-cell">
                    <div class="contact-left-content">
                        <h3>Do you want to Rent your House</h3>
                        <h4>Call us and list your property here</h4>
                    </div><!-- /.contact-left-content -->
                </div><!-- /.col-md-6 -->
                <div class="col-md-6 col-sm-6 tb-cell">
                    <div class="contact-right-content">
                        <h4><a href="#">+880123654987<span>company@gmail.com</span></a></h4>
                        <a href="#" class="button">Contact us</a>
                    </div><!-- /.contact-right-content -->
                </div><!-- /.col-md-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.call-to-action -->

	<!-- ====== Testimonial Area ====== -->
    <div class="testimonial-area bg-gray-color">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="testimonial-heading-content">
                        <h2 class="title">Testimonial</h2>
                        <i class="fa fa-quote-right"></i>
                        <h2 class="sub-title">Some Reviews</h2>
                    </div><!-- /.testimonial-heading-content -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
            <div class="row">
                <div class="col-md-12">
                    <div class="testimonial-slider owl-carousel owl-theme">
                        <div class="item">
                            <div class="client-image">
                                <img src="assets/images/testimonial-image.png" alt="testimonial" />
                            </div><!-- /.client-image -->
                            <div class="client-content">
                                <h3>Single Rakib</h3>
                                <h5>softhopper Manager</h5>
                                <p>Amorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vitae nibh nisl. Cras etitikis mauris eget lorem ultricies ferme ntum a inti diam.</p>
                                <div class="star">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div><!-- /.star -->
                            </div><!-- /.client-content -->
                        </div><!-- /.item -->
                        <div class="item">
                            <div class="client-image">
                                <img src="assets/images/testimonial-image.png" alt="testimonial" />
                            </div><!-- /.client-image -->
                            <div class="client-content">
                                <h3>Single Rakib</h3>
                                <h5>softhopper Manager</h5>
                                <p>Amorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vitae nibh nisl. Cras etitikis mauris eget lorem ultricies ferme ntum a inti diam.</p>
                                <div class="star">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div><!-- /.star -->
                            </div><!-- /.client-content -->
                        </div><!-- /.item -->
                        <div class="item">
                            <div class="client-image">
                                <img src="assets/images/testimonial-image.png" alt="testimonial" />
                            </div><!-- /.client-image -->
                            <div class="client-content">
                                <h3>Single Rakib</h3>
                                <h5>softhopper Manager</h5>
                                <p>Amorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vitae nibh nisl. Cras etitikis mauris eget lorem ultricies ferme ntum a inti diam.</p>
                                <div class="star">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div><!-- /.star -->
                            </div><!-- /.client-content -->
                        </div><!-- /.item -->
                        <div class="item">
                            <div class="client-image">
                                <img src="assets/images/testimonial-image.png" alt="testimonial" />
                            </div><!-- /.client-image -->
                            <div class="client-content">
                                <h3>Single Rakib</h3>
                                <h5>softhopper Manager</h5>
                                <p>Amorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vitae nibh nisl. Cras etitikis mauris eget lorem ultricies ferme ntum a inti diam.</p>
                                <div class="star">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div><!-- /.star -->
                            </div><!-- /.client-content -->
                        </div><!-- /.item -->
                        <div class="item">
                            <div class="client-image">
                                <img src="assets/images/testimonial-image.png" alt="testimonial" />
                            </div><!-- /.client-image -->
                            <div class="client-content">
                                <h3>Single Rakib</h3>
                                <h5>softhopper Manager</h5>
                                <p>Amorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vitae nibh nisl. Cras etitikis mauris eget lorem ultricies ferme ntum a inti diam.</p>
                                <div class="star">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div><!-- /.star -->
                            </div><!-- /.client-content -->
                        </div><!-- /.item -->
                        <div class="item">
                            <div class="client-image">
                                <img src="assets/images/testimonial-image.png" alt="testimonial" />
                            </div><!-- /.client-image -->
                            <div class="client-content">
                                <h3>Single Rakib</h3>
                                <h5>softhopper Manager</h5>
                                <p>Amorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vitae nibh nisl. Cras etitikis mauris eget lorem ultricies ferme ntum a inti diam.</p>
                                <div class="star">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div><!-- /.star -->
                            </div><!-- /.client-content -->
                        </div><!-- /.item -->
                        <div class="item">
                            <div class="client-image">
                                <img src="assets/images/testimonial-image.png" alt="testimonial" />
                            </div><!-- /.client-image -->
                            <div class="client-content">
                                <h3>Single Rakib</h3>
                                <h5>softhopper Manager</h5>
                                <p>Amorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vitae nibh nisl. Cras etitikis mauris eget lorem ultricies ferme ntum a inti diam.</p>
                                <div class="star">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div><!-- /.star -->
                            </div><!-- /.client-content -->
                        </div><!-- /.item -->
                        <div class="item">
                            <div class="client-image">
                                <img src="assets/images/testimonial-image.png" alt="testimonial" />
                            </div><!-- /.client-image -->
                            <div class="client-content">
                                <h3>Single Rakib</h3>
                                <h5>softhopper Manager</h5>
                                <p>Amorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vitae nibh nisl. Cras etitikis mauris eget lorem ultricies ferme ntum a inti diam.</p>
                                <div class="star">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div><!-- /.star -->
                            </div><!-- /.client-content -->
                        </div><!-- /.item -->
                    </div><!-- /.testimonial-slider -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.testimonial-area -->

    <!-- ====== Contact Area ====== -->
    <div class="contact-area">
        <div class="container-large-device">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="heading-content-two available">
                            <h2 class="title">We Are Available<br/> For You 24/7</h2>
                            <h5 class="sub-title">Our online support service is always 24 Hours</h5>
                        </div><!-- /.testimonial-heading-content -->
                    </div><!-- /.col-md-12 -->
                </div><!-- /.row -->
                <div class="row">
                    <div class="col-md-7">
                        <div class="map-left-content">
                            <iframe width="600" height="350" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyC871wKM6aoCLSV_pT3xBVsYzNGXaDh7Pw&q=121King+St,Melbourne+VIC+3000,Australia" allowfullscreen="allowfullscreen"></iframe>
                        </div><!-- /.mapl-left-content -->
                    </div><!-- /.col-md-7 -->
                    <div class="col-md-5">
                        <div class="map-right-content">
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="contact">
                                        <h4><i class="fa fa-address-book"></i>Address</h4>
                                        <p>112/B - Road 121, King/St Melbourne Australia</p>
                                    </div><!-- /.contact -->
                                </div><!-- /.col-md-6 -->
                                <div class="col-md-6 col-sm-6">
                                    <div class="contact">
                                        <h4><i class="fa fa-envelope"></i>Mail</h4>
                                        <p>yourmail@domain.com houserent@domain.com</p>
                                    </div><!-- /.contact -->
                                </div><!-- /.col-md-6 -->
                            </div><!-- /.row -->
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="contact">
                                        <h4><i class="fa fa-phone-square"></i>Call</h4>
                                        <p>+99 0215469875 <br/>666 35874692050</p>
                                    </div><!-- /.contact -->
                                </div><!-- /.col-md-6 -->
                                <div class="col-md-6 col-sm-6">
                                    <div class="contact">
                                        <h4><i class="fa fa-user-circle"></i>Social account</h4>
                                        <div class="social-icon">
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                            <a href="#"><i class="fa fa-instagram"></i></a>
                                            <a href="#"><i class="fa fa-google-plus"></i></a>
                                        </div><!-- /.Social-icon -->
                                    </div><!-- /.contact -->
                                </div><!-- /.col-md-6 -->
                            </div><!-- /.row -->
                        </div><!-- /.map-right-content -->
                    </div><!-- /.col-md-5 -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
    </div><!-- /.contact-area -->

    <!-- ====== Blog Area ====== -->
    <div class="blog-area bg-gray-color">
        <div class="container">
            <div class="col-md-12">
                <div class="row">
                    <div class="heading-content-one">
                        <h2 class="title">Our Blog Post</h2>
                        <h5 class="sub-title">Our News Feed</h5>
                    </div><!-- /.blog-heading-content -->
                </div><!-- /.row -->
            </div><!-- /.col-md-12 -->
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-6">
                    <article class="post">
                        <figure class="post-thumb">
                            <a href="blog-single.html">
                                <img src="assets/images/blog/blog-one.png" alt="blog" />
                            </a>
                        </figure><!-- /.post-thumb -->
                        <div class="post-content">
                            <div class="entry-meta">
                                <span class="entry-date">
                                    July 25, 2016
                                </span>
                                <span class="devied"></span>
                                <span class="entry-category">
                                    <a href="#">Rooms &amp; suites</a>
                                </span>
                            </div><!-- /.entry-header -->
                            <div class="entry-header">
                                <h3><a href="blog-single.html">Finding best places to visit in California</a></h3>
                            </div><!-- /.entry-header -->
                            <div class="entry-footer">
                                <div class="entry-footer-meta">
                                    <span class="view"><i class="fa fa-eye"></i>35</span>
                                    <span class="like"><a href="#"><i class="fa fa-heart-o"></i>09</a></span>
                                    <span class="comments"><a href="#"><i class="fa fa-comments"></i>05</a></span>
                                </div><!-- /.entry-footer-meta -->
                            </div><!-- /.entry-footer -->
                        </div><!-- /.post-content -->
                    </article><!-- /.post -->
                </div><!-- /.col-md-4 -->
                <div class="col-md-4 col-sm-6 col-xs-6">
                    <article class="post">
                        <figure class="post-thumb">
                            <a href="blog-single.html">
                                <img src="assets/images/blog/blog-two.png" alt="blog" />
                            </a>
                        </figure><!-- /.post-thumb -->
                        <div class="post-content">
                            <div class="entry-meta">
                                <span class="entry-date">
                                    July 25, 2016
                                </span>
                                <span class="devied"></span>
                                <span class="entry-category">
                                    <a href="#">Rooms &amp; suites</a>
                                </span>
                            </div><!-- /.entry-header -->
                            <div class="entry-header">
                                <h3><a href="blog-single.html">Finding best places to visit in California</a></h3>
                            </div><!-- /.entry-header -->
                            <div class="entry-footer">
                                <div class="entry-footer-meta">
                                    <span class="view"><i class="fa fa-eye"></i>35</span>
                                    <span class="like"><a href="#"><i class="fa fa-heart-o"></i>09</a></span>
                                    <span class="comments"><a href="#"><i class="fa fa-comments"></i>05</a></span>
                                </div><!-- /.entry-footer-meta -->
                            </div><!-- /.entry-footer -->
                        </div><!-- /.post-content -->
                    </article><!-- /.post -->
                </div><!-- /.col-md-4 -->
                <div class="col-md-4 col-sm-6 col-xs-6">
                    <article class="post">
                        <figure class="post-thumb">
                            <a href="blog-single.html">
                                <img src="assets/images/blog/blog-three.png" alt="blog" />
                            </a>
                        </figure><!-- /.post-thumb -->
                        <div class="post-content">
                            <div class="entry-meta">
                                <span class="entry-date">
                                    July 25, 2016
                                </span>
                                <span class="devied"></span>
                                <span class="entry-category">
                                    <a href="#">Rooms &amp; suites</a>
                                </span>
                            </div><!-- /.entry-header -->
                            <div class="entry-header">
                                <h3><a href="blog-single.html">Finding best places to visit in California</a></h3>
                            </div><!-- /.entry-header -->
                            <div class="entry-footer">
                                <div class="entry-footer-meta">
                                    <span class="view"><i class="fa fa-eye"></i>35</span>
                                    <span class="like"><a href="#"><i class="fa fa-heart-o"></i>09</a></span>
                                    <span class="comments"><a href="#"><i class="fa fa-comments"></i>05</a></span>
                                </div><!-- /.entry-footer-meta -->
                            </div><!-- /.entry-footer -->
                        </div><!-- /.post-content -->
                    </article><!-- /.post -->
                </div><!-- /.col-md-4 -->
            </div><!-- /.row -->
            <a href="blog.html" class="button">show all</a>
        </div><!-- /.container -->
    </div><!-- /.Blog-area-->

@endsection
