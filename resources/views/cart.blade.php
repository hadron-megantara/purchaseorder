@extends('layouts.app')

@section('content')

<?php
	$totalPrice = 0;
	$totalPriceFinal = 0;
?>

<!-- breadcrumb start -->
<div class="breadcrumb-area" style="margin-top:10px">
	<div class="container">
		<ol class="breadcrumb" style="margin-top:-20px;margin-bottom:0px;padding-bottom:10px;border-bottom: 1px solid #ebebeb;">
			<a href="/"><i class="fa fa-home"></i></a>
			<span style="margin-left:5px;margin-right:5px">/</span>
			Cart
		</ol>
	</div>
</div>
<!-- breadcrumb end -->

<div class="row clear" style="margin-bottom:30px"></div>

<!-- cart-main-area start -->
<div class="cart-main-area">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<form action="#">
					<div class="table-content table-responsive">
						<table>
							<thead>
								<tr>
									<th class="product-thumbnail">Foto</th>
									<th class="product-name">Keterangan Produk</th>
									<th class="product-price">Harga</th>
									<th class="product-quantity">Jumlah</th>
									<th class="product-subtotal">Total</th>
									<th class="product-remove">Hapus</th>
								</tr>
							</thead>
							<tbody>
								@if($cartData != null)
									@foreach($cartData as $cartData2)
										<?php
											$totalPrice = $totalPrice + ($cartData2['price'] * $cartData2['total']);
										?>
										<tr>
											<td class="product-thumbnail"><a href="#"><img src="img/product/1.jpg" alt="" class="cartPhoto" id="photo-{{$cartData2['productId']}}-{{$cartData2['colorId']}}-{{$cartData2['sizeId']}}" /></a></td>
											<td class="product-name">
												<a href="#" style="font-size:16px">{{$cartData2['name']}}</a>
												<div class="row" style="padding-bottom:20px"></div>
												Warna : {{$cartData2['colorName']}}<br/>
												Ukuran : {{$cartData2['sizeName']}}<br/>
												Warna : {{$cartData2['colorName']}}<br/>
												<span style="display:none" id="total-{{$cartData2['productId']}}-{{$cartData2['colorId']}}-{{$cartData2['sizeId']}}"></span>
											</td>
											<td class="product-price"><span class="amount">{{$cartData2['price']}}</span></td>
											<td class="product-quantity"><input type="number" value="{{$cartData2['total']}}" /></td>
											<td class="product-subtotal">Rp {{number_format($cartData2['total']*$cartData2['price'],0,",",".")}}</td>
											<td class="product-remove"><a href="#"><i class="fa fa-times"></i></a></td>
										</tr>
									@endforeach

									<?php $totalPriceFinal = $totalPrice; ?>
								@else
									<tr>
										<td colspan="6">Keranjang Kosong</td>
									</tr>
								@endif
							</tbody>
						</table>
					</div>
					<div class="row">
						<div class="col-md-6 col-sm-7 col-xs-12">
							<div class="buttons-cart">
								<a href="/"><span class="fa fa-chevron-left"></span> LANJUTKAN BERBELANJA</a>
							</div>
							<div class="coupon">
								<h3>Voucher</h3>
								<p>Masukkan Kode Voucher Yang Anda Punya</p>
								<input type="text" placeholder="Kode Voucher" />
								<input type="submit" value="Gunakan" />
							</div>
						</div>
						<div class="col-md-6 col-sm-5 col-xs-12">
							<div class="cart_totals">
								<h2>Total Keranjang</h2>
								<table>
									<tbody>
										<tr class="cart-subtotal">
											<th>Subtotal</th>
											<td><span class="amount">Rp {{number_format($totalPrice,0,",",".")}}</span></td>
										</tr>

										<tr>
											<th>Voucher</th>
											<td>
												<span id="voucherNone">Tidak Tersedia</span>
												<span id="voucherAvailable" style="display:none">DISKONLEBARAN23</span>
											</td>
										</tr>

										<tr>
											<th style="width:200px">Diskon Voucher</th>
											<td>
												<span id="discountVoucherNone">Tidak Tersedia</span>
												<span id="discountVoucherAvailable" style="display:none">Rp 120.000</span>
											</td>
										</tr>

										<tr>
											<th>Biaya Pengiriman</th>
											<td><span>Akan ditambahkan setelah memilih metode pembayaran</span></td>
										</tr>

										<tr class="order-total">
											<th>Total</th>
											<td>
												<strong><span class="amount">Rp {{number_format($totalPriceFinal,0,",",".")}}</span></strong>
											</td>
										</tr>
									</tbody>
								</table>
								<div class="wc-proceed-to-checkout">
									<a href="#">LANJUT KE PEMBAYARAN</a>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- cart-main-area end -->

<div class="cart-space-area" style="margin-bottom:200px"></div>

cartPhoto
<script type="text/javascript">
	$(document).ready(function(){
		@if($cartData != null)
			$( ".cartPhoto" ).each(function( index ) {
				$(this).attr("src","/img/icons/ajax-loader.gif");
				var idPhoto = $(this).attr('id');

				$.ajax({
			        type: "get",
			        url: "/cart/get-photo",
			        data: {
						'id': idPhoto
					},
			        success: function(data) {
						$('#'+idPhoto).attr("src","{{env('API_BASE_URL')}}app/images/"+data);
			        }
			    });
			});
		@endif
	});
</script>
@endsection
