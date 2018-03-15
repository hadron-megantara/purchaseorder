@extends('layouts.app')

@section('content')

<!-- new-arrival-area start -->
	<div class="new-arrival-area ptb-100">
		<div class="container">
			<div class="row">
				<div class="section-title text-center mb-20">
					<h2>new arrivals</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="product-tab">
						<!-- Nav tabs -->
						<ul class="custom-tab text-center mb-40">
							<li class="active"><a href="#home" data-toggle="tab">Sofa</a></li>
							<li><a href="#profile" data-toggle="tab"> Chair</a></li>
							<li><a href="#messages" data-toggle="tab"> Lighting</a></li>
							<li><a href="#settings" data-toggle="tab"> Sale</a></li>
							<li><a href="#new" data-toggle="tab">  What's New</a></li>
						</ul>
						<!-- Tab panes -->
						<div class="row">
							<div class="tab-content">
								<div class="tab-pane active" id="home">
									<div class="product-carousel">
										<div class="col-md-12">
											<div class="product-wrapper mb-40">
												<div class="product-img">
													<a href="#"><img src="img/product/12.jpg" alt="" /></a>
													<span class="new-label">New</span>
													<div class="product-action">
														<a href="#"><i class="pe-7s-cart"></i></a>
														<a href="#"><i class="pe-7s-like"></i></a>
														<a href="#"><i class="pe-7s-folder"></i></a>
														<a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
													</div>
												</div>
												<div class="product-content">
													<div class="pro-title">
														<h3><a href="product-details.html">Cras Neque Metus</a></h3>
													</div>
													<div class="price-reviews">
														<div class="price-box">
															<span class="price product-price">$262.00</span>
															<span class="old-price product-price">$262.00</span>
														</div>
														<div class="pro-rating">
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
														</div>
													</div>
												</div>
											</div>
											<div class="product-wrapper mb-40">
												<div class="product-img">
													<a href="#"><img src="img/product/11.jpg" alt="" /></a>
													<span class="new-label">New</span>
													<div class="product-action">
														<a href="#"><i class="pe-7s-cart"></i></a>
														<a href="#"><i class="pe-7s-like"></i></a>
														<a href="#"><i class="pe-7s-folder"></i></a>
														<a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
													</div>
												</div>
												<div class="product-content">
													<div class="pro-title">
														<h3><a href="product-details.html">Cras Neque Metus</a></h3>
													</div>
													<div class="price-reviews">
														<div class="price-box">
															<span class="price product-price">$262.00</span>
															<span class="old-price product-price">$262.00</span>
														</div>
														<div class="pro-rating">
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-12">
											<div class="product-wrapper mb-40">
												<div class="product-img">
													<a href="#"><img src="img/product/3.jpg" alt="" /></a>
													<span class="new-label">New</span>
													<div class="product-action">
														<a href="#"><i class="pe-7s-cart"></i></a>
														<a href="#"><i class="pe-7s-like"></i></a>
														<a href="#"><i class="pe-7s-folder"></i></a>
														<a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
													</div>
												</div>
												<div class="product-content">
													<div class="pro-title">
														<h3><a href="product-details.html">Cras Neque Metus</a></h3>
													</div>
													<div class="price-reviews">
														<div class="price-box">
															<span class="price product-price">$262.00</span>
															<span class="old-price product-price">$262.00</span>
														</div>
														<div class="pro-rating">
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
														</div>
													</div>
												</div>
											</div>
											<div class="product-wrapper mb-40">
												<div class="product-img">
													<a href="#"><img src="img/product/1.jpg" alt="" /></a>
													<span class="new-label">New</span>
													<div class="product-action">
														<a href="#"><i class="pe-7s-cart"></i></a>
														<a href="#"><i class="pe-7s-like"></i></a>
														<a href="#"><i class="pe-7s-folder"></i></a>
														<a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
													</div>
												</div>
												<div class="product-content">
													<div class="pro-title">
														<h3><a href="product-details.html">Cras Neque Metus</a></h3>
													</div>
													<div class="price-reviews">
														<div class="price-box">
															<span class="price product-price">$262.00</span>
															<span class="old-price product-price">$262.00</span>
														</div>
														<div class="pro-rating">
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-12">
											<div class="product-wrapper mb-40">
												<div class="product-img">
													<a href="#"><img src="img/product/4.jpg" alt="" /></a>
													<span class="new-label">New</span>
													<div class="product-action">
														<a href="#"><i class="pe-7s-cart"></i></a>
														<a href="#"><i class="pe-7s-like"></i></a>
														<a href="#"><i class="pe-7s-folder"></i></a>
														<a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
													</div>
												</div>
												<div class="product-content">
													<div class="pro-title">
														<h3><a href="product-details.html">Cras Neque Metus</a></h3>
													</div>
													<div class="price-reviews">
														<div class="price-box">
															<span class="price product-price">$262.00</span>
															<span class="old-price product-price">$262.00</span>
														</div>
														<div class="pro-rating">
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
														</div>
													</div>
												</div>
											</div>
											<div class="product-wrapper mb-40">
												<div class="product-img">
													<a href="#"><img src="img/product/11.jpg" alt="" /></a>
													<span class="new-label">New</span>
													<div class="product-action">
														<a href="#"><i class="pe-7s-cart"></i></a>
														<a href="#"><i class="pe-7s-like"></i></a>
														<a href="#"><i class="pe-7s-folder"></i></a>
														<a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
													</div>
												</div>
												<div class="product-content">
													<div class="pro-title">
														<h3><a href="product-details.html">Cras Neque Metus</a></h3>
													</div>
													<div class="price-reviews">
														<div class="price-box">
															<span class="price product-price">$262.00</span>
															<span class="old-price product-price">$262.00</span>
														</div>
														<div class="pro-rating">
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-12">
											<div class="product-wrapper mb-40">
												<div class="product-img">
													<a href="#"><img src="img/product/5.jpg" alt="" /></a>
													<span class="new-label">New</span>
													<div class="product-action">
														<a href="#"><i class="pe-7s-cart"></i></a>
														<a href="#"><i class="pe-7s-like"></i></a>
														<a href="#"><i class="pe-7s-folder"></i></a>
														<a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
													</div>
												</div>
												<div class="product-content">
													<div class="pro-title">
														<h3><a href="product-details.html">Cras Neque Metus</a></h3>
													</div>
													<div class="price-reviews">
														<div class="price-box">
															<span class="price product-price">$262.00</span>
															<span class="old-price product-price">$262.00</span>
														</div>
														<div class="pro-rating">
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
														</div>
													</div>
												</div>
											</div>
											<div class="product-wrapper mb-40">
												<div class="product-img">
													<a href="#"><img src="img/product/10.jpg" alt="" /></a>
													<span class="new-label">New</span>
													<div class="product-action">
														<a href="#"><i class="pe-7s-cart"></i></a>
														<a href="#"><i class="pe-7s-like"></i></a>
														<a href="#"><i class="pe-7s-folder"></i></a>
														<a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
													</div>
												</div>
												<div class="product-content">
													<div class="pro-title">
														<h3><a href="product-details.html">Cras Neque Metus</a></h3>
													</div>
													<div class="price-reviews">
														<div class="price-box">
															<span class="price product-price">$262.00</span>
															<span class="old-price product-price">$262.00</span>
														</div>
														<div class="pro-rating">
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-12">
											<div class="product-wrapper mb-40">
												<div class="product-img">
													<a href="#"><img src="img/product/5.jpg" alt="" /></a>
													<span class="new-label">New</span>
													<div class="product-action">
														<a href="#"><i class="pe-7s-cart"></i></a>
														<a href="#"><i class="pe-7s-like"></i></a>
														<a href="#"><i class="pe-7s-folder"></i></a>
														<a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
													</div>
												</div>
												<div class="product-content">
													<div class="pro-title">
														<h3><a href="product-details.html">Cras Neque Metus</a></h3>
													</div>
													<div class="price-reviews">
														<div class="price-box">
															<span class="price product-price">$262.00</span>
															<span class="old-price product-price">$262.00</span>
														</div>
														<div class="pro-rating">
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
														</div>
													</div>
												</div>
											</div>
											<div class="product-wrapper mb-40">
												<div class="product-img">
													<a href="#"><img src="img/product/9.jpg" alt="" /></a>
													<span class="new-label">New</span>
													<div class="product-action">
														<a href="#"><i class="pe-7s-cart"></i></a>
														<a href="#"><i class="pe-7s-like"></i></a>
														<a href="#"><i class="pe-7s-folder"></i></a>
														<a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
													</div>
												</div>
												<div class="product-content">
													<div class="pro-title">
														<h3><a href="product-details.html">Cras Neque Metus</a></h3>
													</div>
													<div class="price-reviews">
														<div class="price-box">
															<span class="price product-price">$262.00</span>
															<span class="old-price product-price">$262.00</span>
														</div>
														<div class="pro-rating">
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-12">
											<div class="product-wrapper mb-40">
												<div class="product-img">
													<a href="#"><img src="img/product/6.jpg" alt="" /></a>
													<span class="new-label">New</span>
													<div class="product-action">
														<a href="#"><i class="pe-7s-cart"></i></a>
														<a href="#"><i class="pe-7s-like"></i></a>
														<a href="#"><i class="pe-7s-folder"></i></a>
														<a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
													</div>
												</div>
												<div class="product-content">
													<div class="pro-title">
														<h3><a href="product-details.html">Cras Neque Metus</a></h3>
													</div>
													<div class="price-reviews">
														<div class="price-box">
															<span class="price product-price">$262.00</span>
															<span class="old-price product-price">$262.00</span>
														</div>
														<div class="pro-rating">
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
														</div>
													</div>
												</div>
											</div>
											<div class="product-wrapper mb-40">
												<div class="product-img">
													<a href="#"><img src="img/product/9.jpg" alt="" /></a>
													<span class="new-label">New</span>
													<div class="product-action">
														<a href="#"><i class="pe-7s-cart"></i></a>
														<a href="#"><i class="pe-7s-like"></i></a>
														<a href="#"><i class="pe-7s-folder"></i></a>
														<a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
													</div>
												</div>
												<div class="product-content">
													<div class="pro-title">
														<h3><a href="product-details.html">Cras Neque Metus</a></h3>
													</div>
													<div class="price-reviews">
														<div class="price-box">
															<span class="price product-price">$262.00</span>
															<span class="old-price product-price">$262.00</span>
														</div>
														<div class="pro-rating">
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-12">
											<div class="product-wrapper mb-40">
												<div class="product-img">
													<a href="#"><img src="img/product/7.jpg" alt="" /></a>
													<span class="new-label">New</span>
													<div class="product-action">
														<a href="#"><i class="pe-7s-cart"></i></a>
														<a href="#"><i class="pe-7s-like"></i></a>
														<a href="#"><i class="pe-7s-folder"></i></a>
														<a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
													</div>
												</div>
												<div class="product-content">
													<div class="pro-title">
														<h3><a href="product-details.html">Cras Neque Metus</a></h3>
													</div>
													<div class="price-reviews">
														<div class="price-box">
															<span class="price product-price">$262.00</span>
															<span class="old-price product-price">$262.00</span>
														</div>
														<div class="pro-rating">
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
														</div>
													</div>
												</div>
											</div>
											<div class="product-wrapper mb-40">
												<div class="product-img">
													<a href="#"><img src="img/product/8.jpg" alt="" /></a>
													<span class="new-label">New</span>
													<div class="product-action">
														<a href="#"><i class="pe-7s-cart"></i></a>
														<a href="#"><i class="pe-7s-like"></i></a>
														<a href="#"><i class="pe-7s-folder"></i></a>
														<a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
													</div>
												</div>
												<div class="product-content">
													<div class="pro-title">
														<h3><a href="product-details.html">Cras Neque Metus</a></h3>
													</div>
													<div class="price-reviews">
														<div class="price-box">
															<span class="price product-price">$262.00</span>
															<span class="old-price product-price">$262.00</span>
														</div>
														<div class="pro-rating">
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="tab-pane" id="profile">
									<div class="product-carousel">
										<div class="col-md-12">
											<div class="product-wrapper mb-40">
												<div class="product-img">
													<a href="#"><img src="img/product/12.jpg" alt="" /></a>
													<span class="new-label">New</span>
													<div class="product-action">
														<a href="#"><i class="pe-7s-cart"></i></a>
														<a href="#"><i class="pe-7s-like"></i></a>
														<a href="#"><i class="pe-7s-folder"></i></a>
														<a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
													</div>
												</div>
												<div class="product-content">
													<div class="pro-title">
														<h3><a href="product-details.html">Cras Neque Metus</a></h3>
													</div>
													<div class="price-reviews">
														<div class="price-box">
															<span class="price product-price">$262.00</span>
															<span class="old-price product-price">$262.00</span>
														</div>
														<div class="pro-rating">
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
														</div>
													</div>
												</div>
											</div>
											<div class="product-wrapper mb-40">
												<div class="product-img">
													<a href="#"><img src="img/product/11.jpg" alt="" /></a>
													<span class="new-label">New</span>
													<div class="product-action">
														<a href="#"><i class="pe-7s-cart"></i></a>
														<a href="#"><i class="pe-7s-like"></i></a>
														<a href="#"><i class="pe-7s-folder"></i></a>
														<a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
													</div>
												</div>
												<div class="product-content">
													<div class="pro-title">
														<h3><a href="product-details.html">Cras Neque Metus</a></h3>
													</div>
													<div class="price-reviews">
														<div class="price-box">
															<span class="price product-price">$262.00</span>
															<span class="old-price product-price">$262.00</span>
														</div>
														<div class="pro-rating">
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-12">
											<div class="product-wrapper mb-40">
												<div class="product-img">
													<a href="#"><img src="img/product/10.jpg" alt="" /></a>
													<span class="new-label">New</span>
													<div class="product-action">
														<a href="#"><i class="pe-7s-cart"></i></a>
														<a href="#"><i class="pe-7s-like"></i></a>
														<a href="#"><i class="pe-7s-folder"></i></a>
														<a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
													</div>
												</div>
												<div class="product-content">
													<div class="pro-title">
														<h3><a href="product-details.html">Cras Neque Metus</a></h3>
													</div>
													<div class="price-reviews">
														<div class="price-box">
															<span class="price product-price">$262.00</span>
															<span class="old-price product-price">$262.00</span>
														</div>
														<div class="pro-rating">
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
														</div>
													</div>
												</div>
											</div>
											<div class="product-wrapper mb-40">
												<div class="product-img">
													<a href="#"><img src="img/product/1.jpg" alt="" /></a>
													<span class="new-label">New</span>
													<div class="product-action">
														<a href="#"><i class="pe-7s-cart"></i></a>
														<a href="#"><i class="pe-7s-like"></i></a>
														<a href="#"><i class="pe-7s-folder"></i></a>
														<a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
													</div>
												</div>
												<div class="product-content">
													<div class="pro-title">
														<h3><a href="product-details.html">Cras Neque Metus</a></h3>
													</div>
													<div class="price-reviews">
														<div class="price-box">
															<span class="price product-price">$262.00</span>
															<span class="old-price product-price">$262.00</span>
														</div>
														<div class="pro-rating">
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-12">
											<div class="product-wrapper mb-40">
												<div class="product-img">
													<a href="#"><img src="img/product/9.jpg" alt="" /></a>
													<span class="new-label">New</span>
													<div class="product-action">
														<a href="#"><i class="pe-7s-cart"></i></a>
														<a href="#"><i class="pe-7s-like"></i></a>
														<a href="#"><i class="pe-7s-folder"></i></a>
														<a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
													</div>
												</div>
												<div class="product-content">
													<div class="pro-title">
														<h3><a href="product-details.html">Cras Neque Metus</a></h3>
													</div>
													<div class="price-reviews">
														<div class="price-box">
															<span class="price product-price">$262.00</span>
															<span class="old-price product-price">$262.00</span>
														</div>
														<div class="pro-rating">
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
														</div>
													</div>
												</div>
											</div>
											<div class="product-wrapper mb-40">
												<div class="product-img">
													<a href="#"><img src="img/product/8.jpg" alt="" /></a>
													<span class="new-label">New</span>
													<div class="product-action">
														<a href="#"><i class="pe-7s-cart"></i></a>
														<a href="#"><i class="pe-7s-like"></i></a>
														<a href="#"><i class="pe-7s-folder"></i></a>
														<a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
													</div>
												</div>
												<div class="product-content">
													<div class="pro-title">
														<h3><a href="product-details.html">Cras Neque Metus</a></h3>
													</div>
													<div class="price-reviews">
														<div class="price-box">
															<span class="price product-price">$262.00</span>
															<span class="old-price product-price">$262.00</span>
														</div>
														<div class="pro-rating">
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-12">
											<div class="product-wrapper mb-40">
												<div class="product-img">
													<a href="#"><img src="img/product/8.jpg" alt="" /></a>
													<span class="new-label">New</span>
													<div class="product-action">
														<a href="#"><i class="pe-7s-cart"></i></a>
														<a href="#"><i class="pe-7s-like"></i></a>
														<a href="#"><i class="pe-7s-folder"></i></a>
														<a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
													</div>
												</div>
												<div class="product-content">
													<div class="pro-title">
														<h3><a href="product-details.html">Cras Neque Metus</a></h3>
													</div>
													<div class="price-reviews">
														<div class="price-box">
															<span class="price product-price">$262.00</span>
															<span class="old-price product-price">$262.00</span>
														</div>
														<div class="pro-rating">
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
														</div>
													</div>
												</div>
											</div>
											<div class="product-wrapper mb-40">
												<div class="product-img">
													<a href="#"><img src="img/product/7.jpg" alt="" /></a>
													<span class="new-label">New</span>
													<div class="product-action">
														<a href="#"><i class="pe-7s-cart"></i></a>
														<a href="#"><i class="pe-7s-like"></i></a>
														<a href="#"><i class="pe-7s-folder"></i></a>
														<a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
													</div>
												</div>
												<div class="product-content">
													<div class="pro-title">
														<h3><a href="product-details.html">Cras Neque Metus</a></h3>
													</div>
													<div class="price-reviews">
														<div class="price-box">
															<span class="price product-price">$262.00</span>
															<span class="old-price product-price">$262.00</span>
														</div>
														<div class="pro-rating">
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-12">
											<div class="product-wrapper mb-40">
												<div class="product-img">
													<a href="#"><img src="img/product/6.jpg" alt="" /></a>
													<span class="new-label">New</span>
													<div class="product-action">
														<a href="#"><i class="pe-7s-cart"></i></a>
														<a href="#"><i class="pe-7s-like"></i></a>
														<a href="#"><i class="pe-7s-folder"></i></a>
														<a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
													</div>
												</div>
												<div class="product-content">
													<div class="pro-title">
														<h3><a href="product-details.html">Cras Neque Metus</a></h3>
													</div>
													<div class="price-reviews">
														<div class="price-box">
															<span class="price product-price">$262.00</span>
															<span class="old-price product-price">$262.00</span>
														</div>
														<div class="pro-rating">
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
														</div>
													</div>
												</div>
											</div>
											<div class="product-wrapper mb-40">
												<div class="product-img">
													<a href="#"><img src="img/product/5.jpg" alt="" /></a>
													<span class="new-label">New</span>
													<div class="product-action">
														<a href="#"><i class="pe-7s-cart"></i></a>
														<a href="#"><i class="pe-7s-like"></i></a>
														<a href="#"><i class="pe-7s-folder"></i></a>
														<a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
													</div>
												</div>
												<div class="product-content">
													<div class="pro-title">
														<h3><a href="product-details.html">Cras Neque Metus</a></h3>
													</div>
													<div class="price-reviews">
														<div class="price-box">
															<span class="price product-price">$262.00</span>
															<span class="old-price product-price">$262.00</span>
														</div>
														<div class="pro-rating">
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-12">
											<div class="product-wrapper mb-40">
												<div class="product-img">
													<a href="#"><img src="img/product/2.jpg" alt="" /></a>
													<span class="new-label">New</span>
													<div class="product-action">
														<a href="#"><i class="pe-7s-cart"></i></a>
														<a href="#"><i class="pe-7s-like"></i></a>
														<a href="#"><i class="pe-7s-folder"></i></a>
														<a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
													</div>
												</div>
												<div class="product-content">
													<div class="pro-title">
														<h3><a href="product-details.html">Cras Neque Metus</a></h3>
													</div>
													<div class="price-reviews">
														<div class="price-box">
															<span class="price product-price">$262.00</span>
															<span class="old-price product-price">$262.00</span>
														</div>
														<div class="pro-rating">
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
														</div>
													</div>
												</div>
											</div>
											<div class="product-wrapper mb-40">
												<div class="product-img">
													<a href="#"><img src="img/product/2.jpg" alt="" /></a>
													<span class="new-label">New</span>
													<div class="product-action">
														<a href="#"><i class="pe-7s-cart"></i></a>
														<a href="#"><i class="pe-7s-like"></i></a>
														<a href="#"><i class="pe-7s-folder"></i></a>
														<a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
													</div>
												</div>
												<div class="product-content">
													<div class="pro-title">
														<h3><a href="product-details.html">Cras Neque Metus</a></h3>
													</div>
													<div class="price-reviews">
														<div class="price-box">
															<span class="price product-price">$262.00</span>
															<span class="old-price product-price">$262.00</span>
														</div>
														<div class="pro-rating">
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-12">
											<div class="product-wrapper mb-40">
												<div class="product-img">
													<a href="#"><img src="img/product/1.jpg" alt="" /></a>
													<span class="new-label">New</span>
													<div class="product-action">
														<a href="#"><i class="pe-7s-cart"></i></a>
														<a href="#"><i class="pe-7s-like"></i></a>
														<a href="#"><i class="pe-7s-folder"></i></a>
														<a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
													</div>
												</div>
												<div class="product-content">
													<div class="pro-title">
														<h3><a href="product-details.html">Cras Neque Metus</a></h3>
													</div>
													<div class="price-reviews">
														<div class="price-box">
															<span class="price product-price">$262.00</span>
															<span class="old-price product-price">$262.00</span>
														</div>
														<div class="pro-rating">
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
														</div>
													</div>
												</div>
											</div>
											<div class="product-wrapper mb-40">
												<div class="product-img">
													<a href="#"><img src="img/product/8.jpg" alt="" /></a>
													<span class="new-label">New</span>
													<div class="product-action">
														<a href="#"><i class="pe-7s-cart"></i></a>
														<a href="#"><i class="pe-7s-like"></i></a>
														<a href="#"><i class="pe-7s-folder"></i></a>
														<a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
													</div>
												</div>
												<div class="product-content">
													<div class="pro-title">
														<h3><a href="product-details.html">Cras Neque Metus</a></h3>
													</div>
													<div class="price-reviews">
														<div class="price-box">
															<span class="price product-price">$262.00</span>
															<span class="old-price product-price">$262.00</span>
														</div>
														<div class="pro-rating">
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="tab-pane" id="messages">
									<div class="product-carousel">
										<div class="col-md-12">
											<div class="product-wrapper mb-40">
												<div class="product-img">
													<a href="#"><img src="img/product/4.jpg" alt="" /></a>
													<span class="new-label">New</span>
													<div class="product-action">
														<a href="#"><i class="pe-7s-cart"></i></a>
														<a href="#"><i class="pe-7s-like"></i></a>
														<a href="#"><i class="pe-7s-folder"></i></a>
														<a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
													</div>
												</div>
												<div class="product-content">
													<div class="pro-title">
														<h3><a href="product-details.html">Cras Neque Metus</a></h3>
													</div>
													<div class="price-reviews">
														<div class="price-box">
															<span class="price product-price">$262.00</span>
															<span class="old-price product-price">$262.00</span>
														</div>
														<div class="pro-rating">
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
														</div>
													</div>
												</div>
											</div>
											<div class="product-wrapper mb-40">
												<div class="product-img">
													<a href="#"><img src="img/product/11.jpg" alt="" /></a>
													<span class="new-label">New</span>
													<div class="product-action">
														<a href="#"><i class="pe-7s-cart"></i></a>
														<a href="#"><i class="pe-7s-like"></i></a>
														<a href="#"><i class="pe-7s-folder"></i></a>
														<a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
													</div>
												</div>
												<div class="product-content">
													<div class="pro-title">
														<h3><a href="product-details.html">Cras Neque Metus</a></h3>
													</div>
													<div class="price-reviews">
														<div class="price-box">
															<span class="price product-price">$262.00</span>
															<span class="old-price product-price">$262.00</span>
														</div>
														<div class="pro-rating">
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-12">
											<div class="product-wrapper mb-40">
												<div class="product-img">
													<a href="#"><img src="img/product/12.jpg" alt="" /></a>
													<span class="new-label">New</span>
													<div class="product-action">
														<a href="#"><i class="pe-7s-cart"></i></a>
														<a href="#"><i class="pe-7s-like"></i></a>
														<a href="#"><i class="pe-7s-folder"></i></a>
														<a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
													</div>
												</div>
												<div class="product-content">
													<div class="pro-title">
														<h3><a href="product-details.html">Cras Neque Metus</a></h3>
													</div>
													<div class="price-reviews">
														<div class="price-box">
															<span class="price product-price">$262.00</span>
															<span class="old-price product-price">$262.00</span>
														</div>
														<div class="pro-rating">
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
														</div>
													</div>
												</div>
											</div>
											<div class="product-wrapper mb-40">
												<div class="product-img">
													<a href="#"><img src="img/product/2.jpg" alt="" /></a>
													<span class="new-label">New</span>
													<div class="product-action">
														<a href="#"><i class="pe-7s-cart"></i></a>
														<a href="#"><i class="pe-7s-like"></i></a>
														<a href="#"><i class="pe-7s-folder"></i></a>
														<a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
													</div>
												</div>
												<div class="product-content">
													<div class="pro-title">
														<h3><a href="product-details.html">Cras Neque Metus</a></h3>
													</div>
													<div class="price-reviews">
														<div class="price-box">
															<span class="price product-price">$262.00</span>
															<span class="old-price product-price">$262.00</span>
														</div>
														<div class="pro-rating">
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-12">
											<div class="product-wrapper mb-40">
												<div class="product-img">
													<a href="#"><img src="img/product/3.jpg" alt="" /></a>
													<span class="new-label">New</span>
													<div class="product-action">
														<a href="#"><i class="pe-7s-cart"></i></a>
														<a href="#"><i class="pe-7s-like"></i></a>
														<a href="#"><i class="pe-7s-folder"></i></a>
														<a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
													</div>
												</div>
												<div class="product-content">
													<div class="pro-title">
														<h3><a href="product-details.html">Cras Neque Metus</a></h3>
													</div>
													<div class="price-reviews">
														<div class="price-box">
															<span class="price product-price">$262.00</span>
															<span class="old-price product-price">$262.00</span>
														</div>
														<div class="pro-rating">
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
														</div>
													</div>
												</div>
											</div>
											<div class="product-wrapper mb-40">
												<div class="product-img">
													<a href="#"><img src="img/product/1.jpg" alt="" /></a>
													<span class="new-label">New</span>
													<div class="product-action">
														<a href="#"><i class="pe-7s-cart"></i></a>
														<a href="#"><i class="pe-7s-like"></i></a>
														<a href="#"><i class="pe-7s-folder"></i></a>
														<a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
													</div>
												</div>
												<div class="product-content">
													<div class="pro-title">
														<h3><a href="product-details.html">Cras Neque Metus</a></h3>
													</div>
													<div class="price-reviews">
														<div class="price-box">
															<span class="price product-price">$262.00</span>
															<span class="old-price product-price">$262.00</span>
														</div>
														<div class="pro-rating">
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-12">
											<div class="product-wrapper mb-40">
												<div class="product-img">
													<a href="#"><img src="img/product/5.jpg" alt="" /></a>
													<span class="new-label">New</span>
													<div class="product-action">
														<a href="#"><i class="pe-7s-cart"></i></a>
														<a href="#"><i class="pe-7s-like"></i></a>
														<a href="#"><i class="pe-7s-folder"></i></a>
														<a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
													</div>
												</div>
												<div class="product-content">
													<div class="pro-title">
														<h3><a href="product-details.html">Cras Neque Metus</a></h3>
													</div>
													<div class="price-reviews">
														<div class="price-box">
															<span class="price product-price">$262.00</span>
															<span class="old-price product-price">$262.00</span>
														</div>
														<div class="pro-rating">
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
														</div>
													</div>
												</div>
											</div>
											<div class="product-wrapper mb-40">
												<div class="product-img">
													<a href="#"><img src="img/product/10.jpg" alt="" /></a>
													<span class="new-label">New</span>
													<div class="product-action">
														<a href="#"><i class="pe-7s-cart"></i></a>
														<a href="#"><i class="pe-7s-like"></i></a>
														<a href="#"><i class="pe-7s-folder"></i></a>
														<a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
													</div>
												</div>
												<div class="product-content">
													<div class="pro-title">
														<h3><a href="product-details.html">Cras Neque Metus</a></h3>
													</div>
													<div class="price-reviews">
														<div class="price-box">
															<span class="price product-price">$262.00</span>
															<span class="old-price product-price">$262.00</span>
														</div>
														<div class="pro-rating">
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-12">
											<div class="product-wrapper mb-40">
												<div class="product-img">
													<a href="#"><img src="img/product/5.jpg" alt="" /></a>
													<span class="new-label">New</span>
													<div class="product-action">
														<a href="#"><i class="pe-7s-cart"></i></a>
														<a href="#"><i class="pe-7s-like"></i></a>
														<a href="#"><i class="pe-7s-folder"></i></a>
														<a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
													</div>
												</div>
												<div class="product-content">
													<div class="pro-title">
														<h3><a href="product-details.html">Cras Neque Metus</a></h3>
													</div>
													<div class="price-reviews">
														<div class="price-box">
															<span class="price product-price">$262.00</span>
															<span class="old-price product-price">$262.00</span>
														</div>
														<div class="pro-rating">
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
														</div>
													</div>
												</div>
											</div>
											<div class="product-wrapper mb-40">
												<div class="product-img">
													<a href="#"><img src="img/product/9.jpg" alt="" /></a>
													<span class="new-label">New</span>
													<div class="product-action">
														<a href="#"><i class="pe-7s-cart"></i></a>
														<a href="#"><i class="pe-7s-like"></i></a>
														<a href="#"><i class="pe-7s-folder"></i></a>
														<a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
													</div>
												</div>
												<div class="product-content">
													<div class="pro-title">
														<h3><a href="product-details.html">Cras Neque Metus</a></h3>
													</div>
													<div class="price-reviews">
														<div class="price-box">
															<span class="price product-price">$262.00</span>
															<span class="old-price product-price">$262.00</span>
														</div>
														<div class="pro-rating">
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-12">
											<div class="product-wrapper mb-40">
												<div class="product-img">
													<a href="#"><img src="img/product/6.jpg" alt="" /></a>
													<span class="new-label">New</span>
													<div class="product-action">
														<a href="#"><i class="pe-7s-cart"></i></a>
														<a href="#"><i class="pe-7s-like"></i></a>
														<a href="#"><i class="pe-7s-folder"></i></a>
														<a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
													</div>
												</div>
												<div class="product-content">
													<div class="pro-title">
														<h3><a href="product-details.html">Cras Neque Metus</a></h3>
													</div>
													<div class="price-reviews">
														<div class="price-box">
															<span class="price product-price">$262.00</span>
															<span class="old-price product-price">$262.00</span>
														</div>
														<div class="pro-rating">
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
														</div>
													</div>
												</div>
											</div>
											<div class="product-wrapper mb-40">
												<div class="product-img">
													<a href="#"><img src="img/product/9.jpg" alt="" /></a>
													<span class="new-label">New</span>
													<div class="product-action">
														<a href="#"><i class="pe-7s-cart"></i></a>
														<a href="#"><i class="pe-7s-like"></i></a>
														<a href="#"><i class="pe-7s-folder"></i></a>
														<a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
													</div>
												</div>
												<div class="product-content">
													<div class="pro-title">
														<h3><a href="product-details.html">Cras Neque Metus</a></h3>
													</div>
													<div class="price-reviews">
														<div class="price-box">
															<span class="price product-price">$262.00</span>
															<span class="old-price product-price">$262.00</span>
														</div>
														<div class="pro-rating">
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-12">
											<div class="product-wrapper mb-40">
												<div class="product-img">
													<a href="#"><img src="img/product/7.jpg" alt="" /></a>
													<span class="new-label">New</span>
													<div class="product-action">
														<a href="#"><i class="pe-7s-cart"></i></a>
														<a href="#"><i class="pe-7s-like"></i></a>
														<a href="#"><i class="pe-7s-folder"></i></a>
														<a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
													</div>
												</div>
												<div class="product-content">
													<div class="pro-title">
														<h3><a href="product-details.html">Cras Neque Metus</a></h3>
													</div>
													<div class="price-reviews">
														<div class="price-box">
															<span class="price product-price">$262.00</span>
															<span class="old-price product-price">$262.00</span>
														</div>
														<div class="pro-rating">
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
														</div>
													</div>
												</div>
											</div>
											<div class="product-wrapper mb-40">
												<div class="product-img">
													<a href="#"><img src="img/product/8.jpg" alt="" /></a>
													<span class="new-label">New</span>
													<div class="product-action">
														<a href="#"><i class="pe-7s-cart"></i></a>
														<a href="#"><i class="pe-7s-like"></i></a>
														<a href="#"><i class="pe-7s-folder"></i></a>
														<a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
													</div>
												</div>
												<div class="product-content">
													<div class="pro-title">
														<h3><a href="product-details.html">Cras Neque Metus</a></h3>
													</div>
													<div class="price-reviews">
														<div class="price-box">
															<span class="price product-price">$262.00</span>
															<span class="old-price product-price">$262.00</span>
														</div>
														<div class="pro-rating">
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="tab-pane" id="settings">
									<div class="product-carousel">
										<div class="col-md-12">
											<div class="product-wrapper mb-40">
												<div class="product-img">
													<a href="#"><img src="img/product/6.jpg" alt="" /></a>
													<span class="new-label">New</span>
													<div class="product-action">
														<a href="#"><i class="pe-7s-cart"></i></a>
														<a href="#"><i class="pe-7s-like"></i></a>
														<a href="#"><i class="pe-7s-folder"></i></a>
														<a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
													</div>
												</div>
												<div class="product-content">
													<div class="pro-title">
														<h3><a href="product-details.html">Cras Neque Metus</a></h3>
													</div>
													<div class="price-reviews">
														<div class="price-box">
															<span class="price product-price">$262.00</span>
															<span class="old-price product-price">$262.00</span>
														</div>
														<div class="pro-rating">
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
														</div>
													</div>
												</div>
											</div>
											<div class="product-wrapper mb-40">
												<div class="product-img">
													<a href="#"><img src="img/product/5.jpg" alt="" /></a>
													<span class="new-label">New</span>
													<div class="product-action">
														<a href="#"><i class="pe-7s-cart"></i></a>
														<a href="#"><i class="pe-7s-like"></i></a>
														<a href="#"><i class="pe-7s-folder"></i></a>
														<a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
													</div>
												</div>
												<div class="product-content">
													<div class="pro-title">
														<h3><a href="product-details.html">Cras Neque Metus</a></h3>
													</div>
													<div class="price-reviews">
														<div class="price-box">
															<span class="price product-price">$262.00</span>
															<span class="old-price product-price">$262.00</span>
														</div>
														<div class="pro-rating">
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-12">
											<div class="product-wrapper mb-40">
												<div class="product-img">
													<a href="#"><img src="img/product/2.jpg" alt="" /></a>
													<span class="new-label">New</span>
													<div class="product-action">
														<a href="#"><i class="pe-7s-cart"></i></a>
														<a href="#"><i class="pe-7s-like"></i></a>
														<a href="#"><i class="pe-7s-folder"></i></a>
														<a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
													</div>
												</div>
												<div class="product-content">
													<div class="pro-title">
														<h3><a href="product-details.html">Cras Neque Metus</a></h3>
													</div>
													<div class="price-reviews">
														<div class="price-box">
															<span class="price product-price">$262.00</span>
															<span class="old-price product-price">$262.00</span>
														</div>
														<div class="pro-rating">
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
														</div>
													</div>
												</div>
											</div>
											<div class="product-wrapper mb-40">
												<div class="product-img">
													<a href="#"><img src="img/product/2.jpg" alt="" /></a>
													<span class="new-label">New</span>
													<div class="product-action">
														<a href="#"><i class="pe-7s-cart"></i></a>
														<a href="#"><i class="pe-7s-like"></i></a>
														<a href="#"><i class="pe-7s-folder"></i></a>
														<a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
													</div>
												</div>
												<div class="product-content">
													<div class="pro-title">
														<h3><a href="product-details.html">Cras Neque Metus</a></h3>
													</div>
													<div class="price-reviews">
														<div class="price-box">
															<span class="price product-price">$262.00</span>
															<span class="old-price product-price">$262.00</span>
														</div>
														<div class="pro-rating">
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-12">
											<div class="product-wrapper mb-40">
												<div class="product-img">
													<a href="#"><img src="img/product/9.jpg" alt="" /></a>
													<span class="new-label">New</span>
													<div class="product-action">
														<a href="#"><i class="pe-7s-cart"></i></a>
														<a href="#"><i class="pe-7s-like"></i></a>
														<a href="#"><i class="pe-7s-folder"></i></a>
														<a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
													</div>
												</div>
												<div class="product-content">
													<div class="pro-title">
														<h3><a href="product-details.html">Cras Neque Metus</a></h3>
													</div>
													<div class="price-reviews">
														<div class="price-box">
															<span class="price product-price">$262.00</span>
															<span class="old-price product-price">$262.00</span>
														</div>
														<div class="pro-rating">
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
														</div>
													</div>
												</div>
											</div>
											<div class="product-wrapper mb-40">
												<div class="product-img">
													<a href="#"><img src="img/product/11.jpg" alt="" /></a>
													<span class="new-label">New</span>
													<div class="product-action">
														<a href="#"><i class="pe-7s-cart"></i></a>
														<a href="#"><i class="pe-7s-like"></i></a>
														<a href="#"><i class="pe-7s-folder"></i></a>
														<a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
													</div>
												</div>
												<div class="product-content">
													<div class="pro-title">
														<h3><a href="product-details.html">Cras Neque Metus</a></h3>
													</div>
													<div class="price-reviews">
														<div class="price-box">
															<span class="price product-price">$262.00</span>
															<span class="old-price product-price">$262.00</span>
														</div>
														<div class="pro-rating">
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-12">
											<div class="product-wrapper mb-40">
												<div class="product-img">
													<a href="#"><img src="img/product/12.jpg" alt="" /></a>
													<span class="new-label">New</span>
													<div class="product-action">
														<a href="#"><i class="pe-7s-cart"></i></a>
														<a href="#"><i class="pe-7s-like"></i></a>
														<a href="#"><i class="pe-7s-folder"></i></a>
														<a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
													</div>
												</div>
												<div class="product-content">
													<div class="pro-title">
														<h3><a href="product-details.html">Cras Neque Metus</a></h3>
													</div>
													<div class="price-reviews">
														<div class="price-box">
															<span class="price product-price">$262.00</span>
															<span class="old-price product-price">$262.00</span>
														</div>
														<div class="pro-rating">
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
														</div>
													</div>
												</div>
											</div>
											<div class="product-wrapper mb-40">
												<div class="product-img">
													<a href="#"><img src="img/product/10.jpg" alt="" /></a>
													<span class="new-label">New</span>
													<div class="product-action">
														<a href="#"><i class="pe-7s-cart"></i></a>
														<a href="#"><i class="pe-7s-like"></i></a>
														<a href="#"><i class="pe-7s-folder"></i></a>
														<a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
													</div>
												</div>
												<div class="product-content">
													<div class="pro-title">
														<h3><a href="product-details.html">Cras Neque Metus</a></h3>
													</div>
													<div class="price-reviews">
														<div class="price-box">
															<span class="price product-price">$262.00</span>
															<span class="old-price product-price">$262.00</span>
														</div>
														<div class="pro-rating">
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-12">
											<div class="product-wrapper mb-40">
												<div class="product-img">
													<a href="#"><img src="img/product/5.jpg" alt="" /></a>
													<span class="new-label">New</span>
													<div class="product-action">
														<a href="#"><i class="pe-7s-cart"></i></a>
														<a href="#"><i class="pe-7s-like"></i></a>
														<a href="#"><i class="pe-7s-folder"></i></a>
														<a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
													</div>
												</div>
												<div class="product-content">
													<div class="pro-title">
														<h3><a href="product-details.html">Cras Neque Metus</a></h3>
													</div>
													<div class="price-reviews">
														<div class="price-box">
															<span class="price product-price">$262.00</span>
															<span class="old-price product-price">$262.00</span>
														</div>
														<div class="pro-rating">
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
														</div>
													</div>
												</div>
											</div>
											<div class="product-wrapper mb-40">
												<div class="product-img">
													<a href="#"><img src="img/product/9.jpg" alt="" /></a>
													<span class="new-label">New</span>
													<div class="product-action">
														<a href="#"><i class="pe-7s-cart"></i></a>
														<a href="#"><i class="pe-7s-like"></i></a>
														<a href="#"><i class="pe-7s-folder"></i></a>
														<a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
													</div>
												</div>
												<div class="product-content">
													<div class="pro-title">
														<h3><a href="product-details.html">Cras Neque Metus</a></h3>
													</div>
													<div class="price-reviews">
														<div class="price-box">
															<span class="price product-price">$262.00</span>
															<span class="old-price product-price">$262.00</span>
														</div>
														<div class="pro-rating">
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-12">
											<div class="product-wrapper mb-40">
												<div class="product-img">
													<a href="#"><img src="img/product/6.jpg" alt="" /></a>
													<span class="new-label">New</span>
													<div class="product-action">
														<a href="#"><i class="pe-7s-cart"></i></a>
														<a href="#"><i class="pe-7s-like"></i></a>
														<a href="#"><i class="pe-7s-folder"></i></a>
														<a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
													</div>
												</div>
												<div class="product-content">
													<div class="pro-title">
														<h3><a href="product-details.html">Cras Neque Metus</a></h3>
													</div>
													<div class="price-reviews">
														<div class="price-box">
															<span class="price product-price">$262.00</span>
															<span class="old-price product-price">$262.00</span>
														</div>
														<div class="pro-rating">
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
														</div>
													</div>
												</div>
											</div>
											<div class="product-wrapper mb-40">
												<div class="product-img">
													<a href="#"><img src="img/product/9.jpg" alt="" /></a>
													<span class="new-label">New</span>
													<div class="product-action">
														<a href="#"><i class="pe-7s-cart"></i></a>
														<a href="#"><i class="pe-7s-like"></i></a>
														<a href="#"><i class="pe-7s-folder"></i></a>
														<a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
													</div>
												</div>
												<div class="product-content">
													<div class="pro-title">
														<h3><a href="product-details.html">Cras Neque Metus</a></h3>
													</div>
													<div class="price-reviews">
														<div class="price-box">
															<span class="price product-price">$262.00</span>
															<span class="old-price product-price">$262.00</span>
														</div>
														<div class="pro-rating">
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-12">
											<div class="product-wrapper mb-40">
												<div class="product-img">
													<a href="#"><img src="img/product/7.jpg" alt="" /></a>
													<span class="new-label">New</span>
													<div class="product-action">
														<a href="#"><i class="pe-7s-cart"></i></a>
														<a href="#"><i class="pe-7s-like"></i></a>
														<a href="#"><i class="pe-7s-folder"></i></a>
														<a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
													</div>
												</div>
												<div class="product-content">
													<div class="pro-title">
														<h3><a href="product-details.html">Cras Neque Metus</a></h3>
													</div>
													<div class="price-reviews">
														<div class="price-box">
															<span class="price product-price">$262.00</span>
															<span class="old-price product-price">$262.00</span>
														</div>
														<div class="pro-rating">
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
														</div>
													</div>
												</div>
											</div>
											<div class="product-wrapper mb-40">
												<div class="product-img">
													<a href="#"><img src="img/product/8.jpg" alt="" /></a>
													<span class="new-label">New</span>
													<div class="product-action">
														<a href="#"><i class="pe-7s-cart"></i></a>
														<a href="#"><i class="pe-7s-like"></i></a>
														<a href="#"><i class="pe-7s-folder"></i></a>
														<a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
													</div>
												</div>
												<div class="product-content">
													<div class="pro-title">
														<h3><a href="product-details.html">Cras Neque Metus</a></h3>
													</div>
													<div class="price-reviews">
														<div class="price-box">
															<span class="price product-price">$262.00</span>
															<span class="old-price product-price">$262.00</span>
														</div>
														<div class="pro-rating">
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="tab-pane" id="new">
									<div class="product-carousel">
										<div class="col-md-12">
											<div class="product-wrapper mb-40">
												<div class="product-img">
													<a href="#"><img src="img/product/2.jpg" alt="" /></a>
													<span class="new-label">New</span>
													<div class="product-action">
														<a href="#"><i class="pe-7s-cart"></i></a>
														<a href="#"><i class="pe-7s-like"></i></a>
														<a href="#"><i class="pe-7s-folder"></i></a>
														<a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
													</div>
												</div>
												<div class="product-content">
													<div class="pro-title">
														<h3><a href="product-details.html">Cras Neque Metus</a></h3>
													</div>
													<div class="price-reviews">
														<div class="price-box">
															<span class="price product-price">$262.00</span>
															<span class="old-price product-price">$262.00</span>
														</div>
														<div class="pro-rating">
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
														</div>
													</div>
												</div>
											</div>
											<div class="product-wrapper mb-40">
												<div class="product-img">
													<a href="#"><img src="img/product/10.jpg" alt="" /></a>
													<span class="new-label">New</span>
													<div class="product-action">
														<a href="#"><i class="pe-7s-cart"></i></a>
														<a href="#"><i class="pe-7s-like"></i></a>
														<a href="#"><i class="pe-7s-folder"></i></a>
														<a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
													</div>
												</div>
												<div class="product-content">
													<div class="pro-title">
														<h3><a href="product-details.html">Cras Neque Metus</a></h3>
													</div>
													<div class="price-reviews">
														<div class="price-box">
															<span class="price product-price">$262.00</span>
															<span class="old-price product-price">$262.00</span>
														</div>
														<div class="pro-rating">
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-12">
											<div class="product-wrapper mb-40">
												<div class="product-img">
													<a href="#"><img src="img/product/3.jpg" alt="" /></a>
													<span class="new-label">New</span>
													<div class="product-action">
														<a href="#"><i class="pe-7s-cart"></i></a>
														<a href="#"><i class="pe-7s-like"></i></a>
														<a href="#"><i class="pe-7s-folder"></i></a>
														<a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
													</div>
												</div>
												<div class="product-content">
													<div class="pro-title">
														<h3><a href="product-details.html">Cras Neque Metus</a></h3>
													</div>
													<div class="price-reviews">
														<div class="price-box">
															<span class="price product-price">$262.00</span>
															<span class="old-price product-price">$262.00</span>
														</div>
														<div class="pro-rating">
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
														</div>
													</div>
												</div>
											</div>
											<div class="product-wrapper mb-40">
												<div class="product-img">
													<a href="#"><img src="img/product/9.jpg" alt="" /></a>
													<span class="new-label">New</span>
													<div class="product-action">
														<a href="#"><i class="pe-7s-cart"></i></a>
														<a href="#"><i class="pe-7s-like"></i></a>
														<a href="#"><i class="pe-7s-folder"></i></a>
														<a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
													</div>
												</div>
												<div class="product-content">
													<div class="pro-title">
														<h3><a href="product-details.html">Cras Neque Metus</a></h3>
													</div>
													<div class="price-reviews">
														<div class="price-box">
															<span class="price product-price">$262.00</span>
															<span class="old-price product-price">$262.00</span>
														</div>
														<div class="pro-rating">
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-12">
											<div class="product-wrapper mb-40">
												<div class="product-img">
													<a href="#"><img src="img/product/4.jpg" alt="" /></a>
													<span class="new-label">New</span>
													<div class="product-action">
														<a href="#"><i class="pe-7s-cart"></i></a>
														<a href="#"><i class="pe-7s-like"></i></a>
														<a href="#"><i class="pe-7s-folder"></i></a>
														<a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
													</div>
												</div>
												<div class="product-content">
													<div class="pro-title">
														<h3><a href="product-details.html">Cras Neque Metus</a></h3>
													</div>
													<div class="price-reviews">
														<div class="price-box">
															<span class="price product-price">$262.00</span>
															<span class="old-price product-price">$262.00</span>
														</div>
														<div class="pro-rating">
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
														</div>
													</div>
												</div>
											</div>
											<div class="product-wrapper mb-40">
												<div class="product-img">
													<a href="#"><img src="img/product/10.jpg" alt="" /></a>
													<span class="new-label">New</span>
													<div class="product-action">
														<a href="#"><i class="pe-7s-cart"></i></a>
														<a href="#"><i class="pe-7s-like"></i></a>
														<a href="#"><i class="pe-7s-folder"></i></a>
														<a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
													</div>
												</div>
												<div class="product-content">
													<div class="pro-title">
														<h3><a href="product-details.html">Cras Neque Metus</a></h3>
													</div>
													<div class="price-reviews">
														<div class="price-box">
															<span class="price product-price">$262.00</span>
															<span class="old-price product-price">$262.00</span>
														</div>
														<div class="pro-rating">
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-12">
											<div class="product-wrapper mb-40">
												<div class="product-img">
													<a href="#"><img src="img/product/12.jpg" alt="" /></a>
													<span class="new-label">New</span>
													<div class="product-action">
														<a href="#"><i class="pe-7s-cart"></i></a>
														<a href="#"><i class="pe-7s-like"></i></a>
														<a href="#"><i class="pe-7s-folder"></i></a>
														<a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
													</div>
												</div>
												<div class="product-content">
													<div class="pro-title">
														<h3><a href="product-details.html">Cras Neque Metus</a></h3>
													</div>
													<div class="price-reviews">
														<div class="price-box">
															<span class="price product-price">$262.00</span>
															<span class="old-price product-price">$262.00</span>
														</div>
														<div class="pro-rating">
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
														</div>
													</div>
												</div>
											</div>
											<div class="product-wrapper mb-40">
												<div class="product-img">
													<a href="#"><img src="img/product/9.jpg" alt="" /></a>
													<span class="new-label">New</span>
													<div class="product-action">
														<a href="#"><i class="pe-7s-cart"></i></a>
														<a href="#"><i class="pe-7s-like"></i></a>
														<a href="#"><i class="pe-7s-folder"></i></a>
														<a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
													</div>
												</div>
												<div class="product-content">
													<div class="pro-title">
														<h3><a href="product-details.html">Cras Neque Metus</a></h3>
													</div>
													<div class="price-reviews">
														<div class="price-box">
															<span class="price product-price">$262.00</span>
															<span class="old-price product-price">$262.00</span>
														</div>
														<div class="pro-rating">
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-12">
											<div class="product-wrapper mb-40">
												<div class="product-img">
													<a href="#"><img src="img/product/12.jpg" alt="" /></a>
													<span class="new-label">New</span>
													<div class="product-action">
														<a href="#"><i class="pe-7s-cart"></i></a>
														<a href="#"><i class="pe-7s-like"></i></a>
														<a href="#"><i class="pe-7s-folder"></i></a>
														<a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
													</div>
												</div>
												<div class="product-content">
													<div class="pro-title">
														<h3><a href="product-details.html">Cras Neque Metus</a></h3>
													</div>
													<div class="price-reviews">
														<div class="price-box">
															<span class="price product-price">$262.00</span>
															<span class="old-price product-price">$262.00</span>
														</div>
														<div class="pro-rating">
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
														</div>
													</div>
												</div>
											</div>
											<div class="product-wrapper mb-40">
												<div class="product-img">
													<a href="#"><img src="img/product/9.jpg" alt="" /></a>
													<span class="new-label">New</span>
													<div class="product-action">
														<a href="#"><i class="pe-7s-cart"></i></a>
														<a href="#"><i class="pe-7s-like"></i></a>
														<a href="#"><i class="pe-7s-folder"></i></a>
														<a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
													</div>
												</div>
												<div class="product-content">
													<div class="pro-title">
														<h3><a href="product-details.html">Cras Neque Metus</a></h3>
													</div>
													<div class="price-reviews">
														<div class="price-box">
															<span class="price product-price">$262.00</span>
															<span class="old-price product-price">$262.00</span>
														</div>
														<div class="pro-rating">
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-12">
											<div class="product-wrapper mb-40">
												<div class="product-img">
													<a href="#"><img src="img/product/7.jpg" alt="" /></a>
													<span class="new-label">New</span>
													<div class="product-action">
														<a href="#"><i class="pe-7s-cart"></i></a>
														<a href="#"><i class="pe-7s-like"></i></a>
														<a href="#"><i class="pe-7s-folder"></i></a>
														<a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
													</div>
												</div>
												<div class="product-content">
													<div class="pro-title">
														<h3><a href="product-details.html">Cras Neque Metus</a></h3>
													</div>
													<div class="price-reviews">
														<div class="price-box">
															<span class="price product-price">$262.00</span>
															<span class="old-price product-price">$262.00</span>
														</div>
														<div class="pro-rating">
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
														</div>
													</div>
												</div>
											</div>
											<div class="product-wrapper mb-40">
												<div class="product-img">
													<a href="#"><img src="img/product/8.jpg" alt="" /></a>
													<span class="new-label">New</span>
													<div class="product-action">
														<a href="#"><i class="pe-7s-cart"></i></a>
														<a href="#"><i class="pe-7s-like"></i></a>
														<a href="#"><i class="pe-7s-folder"></i></a>
														<a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
													</div>
												</div>
												<div class="product-content">
													<div class="pro-title">
														<h3><a href="product-details.html">Cras Neque Metus</a></h3>
													</div>
													<div class="price-reviews">
														<div class="price-box">
															<span class="price product-price">$262.00</span>
															<span class="old-price product-price">$262.00</span>
														</div>
														<div class="pro-rating">
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- new-arrival-area end -->

@endsection
