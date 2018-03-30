@extends('layouts.app')

@section('content')

	<!-- breadcrumb start -->
		<div class="breadcrumb-area">
			<div class="container" style="margin-bottom:10px">
				<ol class="breadcrumb" style="margin-top:-20px;margin-bottom:0px;padding-bottom:10px">
					<a href="/"><i class="fa fa-home"></i></a>
					<span style="margin-right:5px">/</span>
	                <a href="/">Kerudung</a>
					<span style="margin-left:5px;margin-right:5px">/</span>
					{{$detail->Name}}
				</ol>
			</div>
		</div>
		<!-- breadcrumb end -->
		<!-- shop-area start -->
		<div class="shop-area">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-5">
						<div class="product-zoom">
							<!-- Tab panes -->
							<div class="tab-content">
								@foreach($photo as $photoData)
								<div class="tab-pane @if($photoData->Selected == 1) active @endif" id="photo-{{$photoData->Id}}">
									<div class="pro-large-img">
										<img src="{{env('API_BASE_URL').'app/images/'.$photoData->Photo}}" alt="" />
										<a class="popup-link" href="{{env('API_BASE_URL').'app/images/'.$photoData->Photo}}">View larger <i class="fa fa-search-plus" aria-hidden="true"></i></a>
									</div>
								</div>
								@endforeach
							</div>
							<!-- Nav tabs -->
							<div class="details-tab">
								@foreach($photo as $photoData2)
								<div @if($photoData2->Selected == 1) class="active" @endif style="max-height:150px"><a href="#photo-{{$photoData2->Id}}" data-toggle="tab"><img src="{{env('API_BASE_URL').'app/images/'.$photoData2->Photo}}" alt="" /></a></div>
								@endforeach
							</div>
						</div>
					</div>

					<div class="col-xs-12 col-sm-1 col-md-1">
						&nbsp;
					</div>

					<div class="col-xs-12 col-sm-5 col-md-6">
						<div class="product-details">
							<h2 class="pro-d-title">{{$detail->Name}}</h2>
							<div class="price-box">
								<span class="price product-price">Rp {{number_format($detail->Price,0,",",".")}}</span>
							</div>
							<div class="short-desc">
								<p>{{$detail->Description}}</p>
							</div>
							<div class="box-quantity">
								<form action="#">
									<label>Quantity</label>
									<input type="number" value="1" />
									<button>add to cart</button>
								</form>
							</div>
							<div class="usefull_link_block">
								<ul>
									<li><a href="#"><i class="fa fa-envelope-o"></i>Send to a friend</a></li>
									<li><a href="#"><i class="fa fa-print"></i>Print</a></li>
									<li><a href="#"><i class="fa fa-heart-o"></i> Add to wishlist</a></li>
								</ul>
							</div>
							<div class="select-size">
								<form action="#">
									<label>Size </label>
									<select>
										<option value="">5</option>
										<option value="">6</option>
										<option value="">7</option>
										<option value="">8</option>
										<option value="">9</option>
									</select>
								</form>
							</div>
							<div class="color-list">
								<a href="#"></a>
								<a href="#"></a>
							</div>
							<div class="share-icon">
								<a class="twitter" href="#"><i class="fa fa-facebook"></i>  facebook</a>
								<a class="facebook" href="#"><i class="fa fa-twitter"></i>  twitter</a>
								<a class="google" href="#"><i class="fa fa-google-plus"></i>  linkedin</a>
								<a class="pinterest" href="#"><i class="fa fa-pinterest"></i>  facebook</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- shop-area end -->

		<div style="margin-bottom:100px"></div>

		<script type="text/javascript">
			$(document).ready(function(){

			})
		</script>
@endsection
