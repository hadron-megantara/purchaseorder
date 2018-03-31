@extends('layouts.app')

@section('content')

<!-- breadcrumb start -->
<div class="breadcrumb-area" style="margin-top:10px">
	<div class="container">
		<ol class="breadcrumb" style="margin-top:-20px;margin-bottom:0px;padding-bottom:10px;border:none">
			<a href="/"><i class="fa fa-home"></i></a>
			<span style="margin-left:5px;margin-right:5px">/</span>
			Cart
		</ol>
	</div>
</div>
<!-- breadcrumb end -->

<div class="row clear"></div>

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
									<th class="product-thumbnail">Image</th>
									<th class="product-name">Product</th>
									<th class="product-price">Price</th>
									<th class="product-quantity">Quantity</th>
									<th class="product-subtotal">Total</th>
									<th class="product-remove">Remove</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td class="product-thumbnail"><a href="#"><img src="img/product/1.jpg" alt="" /></a></td>
									<td class="product-name"><a href="#">Vestibulum suscipit</a></td>
									<td class="product-price"><span class="amount">£165.00</span></td>
									<td class="product-quantity"><input type="number" value="1" /></td>
									<td class="product-subtotal">£165.00</td>
									<td class="product-remove"><a href="#"><i class="fa fa-times"></i></a></td>
								</tr>
								<tr>
									<td class="product-thumbnail"><a href="#"><img src="img/product/2.jpg" alt="" /></a></td>
									<td class="product-name"><a href="#">Vestibulum dictum magna</a></td>
									<td class="product-price"><span class="amount">£50.00</span></td>
									<td class="product-quantity"><input type="number" value="1" /></td>
									<td class="product-subtotal">£50.00</td>
									<td class="product-remove"><a href="#"><i class="fa fa-times"></i></a></td>
								</tr>
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
								<h2>Cart Totals</h2>
								<table>
									<tbody>
										<tr class="cart-subtotal">
											<th>Subtotal</th>
											<td><span class="amount">Rp 1.500.000</span></td>
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
												<strong><span class="amount">Rp 1.500.000</span></strong>
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

@endsection
