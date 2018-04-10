@extends('layouts.app')

@section('content')

<style>
	input{
		width: fit-content;
		height: fit-content;
	}

	.filterColor:hover{
		visibility: visible;
	}
</style>

<!-- breadcrumb start -->
<div class="breadcrumb-area" style="margin-top:10px;margin-bottom:20px">
	<div class="container">
		<ol class="breadcrumb" style="margin-top:-20px;margin-bottom:0px;padding-bottom:10px;border-bottom: 1px solid #ebebeb;">
			<a href="/"><i class="fa fa-home"></i></a>
			<span style="margin-left:5px;margin-right:5px">/</span>
			Cart
		</ol>
	</div>
</div>
<!-- breadcrumb end -->

<!-- shop-area start -->
<div class="shop-area">
	<div class="container">
		<div class="row">
			<div class="col-md-3 col-sm-4">
				<div class="column">
					<div class="row" style="margin-bottom:20px"></div>
					<span class="pull-left" style="font-size:18px;font-weight:bold">Filter</span>
					<span class="pull-right"><a href="#" style="color:#000000"><span class="fa fa-close"></span>Hapus Semua Filter</a></span>
					<div class="row" style="margin-bottom:50px"></div>
					<div class="sidebar-widget">
						<h3 class="sidebar-title">Kategori</h3>
						<ul class="sidebar-menu">
							@foreach($dataCategory as $dataCategoryList)
							<li>
								<input class="categoryCheck" type="checkbox" value="{{$dataCategoryList->Id}}" style="margin-right:10px">{{$dataCategoryList->Name}}
							</li>
							@endforeach
						</ul>
					</div>
					<div class="sidebar-widget">
						<h3 class="sidebar-title">Gender</h3>
						<ul class="sidebar-menu">
							@foreach($dataGender as $dataGenderList)
							<li>
								<input type="checkbox" value="{{$dataGenderList->Id}}" style="margin-right:10px">{{$dataGenderList->Name}}
							</li>
							@endforeach
						</ul>
					</div>
					<div class="sidebar-widget">
						<h3 class="sidebar-title">Warna</h3>
						<ul class="sidebar-menu filterColor" style="height:200px;overflow: scroll;">
							@foreach($dataColor as $dataColorList)
							<li>
								<input type="checkbox" value="{{$dataColorList->Id}}" style="margin-right:10px">{{$dataColorList->Name}}
							</li>
							@endforeach
						</ul>
					</div>
					<div class="sidebar-widget">
						<h3 class="sidebar-title">Harga</h3>
						<div class="price-filter">
							<p>
							  <label for="amount">Range:</label>
							  <input type="text" id="amount" readonly style="border:0; color:#f6931f; font-weight:bold;">
							</p>
							<div id="slider-range"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-9 col-sm-8" style="margin-top:-50px">
				<h2 class="page-heading mt-40">
					<span class="cat-name">Scarf</span>
					<span class="heading-counter">400 produk tersedia</span>
				</h2>
				<div class="shop-page-bar">
					<div>
						<div class="shop-bar">
							<!-- Nav tabs -->
							<div class="selector-field f-left ml-20 hidden-xs">
								<form action="#">
									<label>Sort by</label>
									<select name="select">
										<option value="">Newest</option>
										<option value="">Oldest</option>
										<option value="">Lowest Price</option>
										<option value="">Highest Price</option>
									</select>
								</form>
							</div>
						</div>
						<!-- Tab panes -->
						<div class="tab-content">
							<div role="tabpanel" class="tab-pane active" id="home">
								<div class="row">
									@foreach($productList as $productListData)
									<div class="col-md-4 col-sm-6">
										<div class="product-wrapper mb-40">
											<div class="product-img">
												<a href="/products/detail/{{$productListData->Id}}">
													<img src="{{$productListData->Photo}}" alt="" style="height:410px"/>
												</a>
												@if($productListData->Discount != null)
													@if($productListData->DiscountType == "Percent")
														<span class="new-label" style="padding-left:10px;padding-right:10px; background-color:red;text-transform: capitalize;;">Diskon {{$productListData->Discount}} %</span>
													@else
														<span class="new-label" style="background-color:red;padding-left:5px;padding-right:5px;text-transform: capitalize;">Diskon Rp {{number_format($productListData->Discount,0,",",".")}}</span>
													@endif
												@endif
												<div class="product-action">
													<a href="{{$productListData->Photo}}"><i class="pe-7s-look"></i></a>
												</div>
											</div>
											<div class="product-content">
												<div class="pro-title">
													<h3><a href="product-details.html">{{$productListData->Name}}</a></h3>
												</div>
												<div class="price-reviews">
													<div class="price-box">
														<span class="price product-price">Rp {{number_format($productListData->newPrice,0,",",".")}}</span>
														@if($productListData->Discount != null)
															<span class="old-price product-price">Rp {{number_format($productListData->oldPrice,0,",",".")}}</span>
														@endif
													</div>
												</div>
											</div>
										</div>
									</div>
									@endforeach
								</div>
							</div>

							<div class="content-sortpagibar pull-right">
								<div class="product-count display-inline">Showing 1 - 12 of 13 items</div>
								<ul class="shop-pagi display-inline">
									<li><a href="#"><i class="fa fa-angle-left"></i></a></li>
									<li class="active"><a href="#">1</a></li>
									<li><a href="#">2</a></li>
									<li><a href="#">3</a></li>
									<li><a href="#"><i class="fa fa-angle-right"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- shop-area end -->

<script type="text/javascript">
	$(document).ready(function(){
		var category = [];
		$('.categoryCheck').click(function(){
			if($(this).is(":checked")){
				category.push($(this).val());
			} else{
				category.splice($.inArray($(this).val() ,category),1);
			}

			console.log(category);
		});
	});
</script>

@endsection
