@extends('layouts.app')

@section('content')
<!-- checkout-area start -->
<div class="checkout-area" style="margin-top:50px">
	<div class="container">
		<div class="row">
			<form action="#" style="display: -webkit-box;">
				<div class="col-lg-6 col-md-6">
					<div class="checkbox-form">
						<h3>Informasi Anda</h3>
						<div class="row">
							<div class="col-md-12">
								<div class="checkout-form-list">
									<label>Nama Lengkap <span class="required">*</span></label>
									<input type="text" placeholder="" class="form-control" />
								</div>
							</div>
							<div class="col-md-12">
								<div class="checkout-form-list">
									<label>Nomor Handphone/Telepon <span class="required">*</span></label>
									<input type="text" placeholder="" class="form-control" />
								</div>
							</div>
							<div class="col-md-12">
								<div class="country-select">
									<label>Negara <span class="required">*</span></label>
									<select class="form-control">
									  <option value="volvo">Indonesia</option>
									</select>
								</div>
							</div>
							<div class="col-md-12">
								<div class="country-select">
									<label>Provinsi <span class="required">*</span></label>
									<select class="form-control">
									  <option value="volvo">Indonesia</option>
									</select>
								</div>
							</div>
							<div class="col-md-12">
								<div class="country-select">
									<label>Kota/Kabupaten <span class="required">*</span></label>
									<select class="form-control">
									  <option value="volvo">Indonesia</option>
									</select>
								</div>
							</div>
							<div class="col-md-12">
								<div class="country-select">
									<label>Kecamatan <span class="required">*</span></label>
									<select class="form-control">
									  <option value="volvo">Indonesia</option>
									</select>
								</div>
							</div>
							<div class="col-md-6">
								<div class="checkout-form-list">
									<label>Kode POS <span class="required">*</span></label>
									<input type="text" placeholder="Postcode / Zip" />
								</div>
							</div>
							<div class="col-md-6">&nbsp;</div>
							<div class="col-md-12">
								<div class="checkout-form-list create-acc">
									<input id="cbox" type="checkbox" />
									<label>Buat Akun?</label>
								</div>
								<div id="cbox_info" class="checkout-form-list create-account">
									<p>Buat akun Anda dengan mengisi password di bawah ini.</p>
									<label>Password Akun  <span class="required">*</span></label>
									<input type="password" placeholder="password" />
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-6" style="margin-top:-30px">
					<div class="your-order">
						<h3>Pemesanan Anda</h3>
						<div class="your-order-table table-responsive">
							<table>
								<thead>
									<tr>
										<th class="product-name">Produk</th>
										<th class="product-total">Total</th>
									</tr>
								</thead>
								<tbody>
									<?php $cartTotalProductPrice = 0; ?>
									@foreach($productDetail as $productDetailData)
										@foreach($productDetailData as $productDetailData2)
											@foreach($productDetailData2 as $productDetailData3)
												<tr class="cart_item">
													<td class="product-name">
														{{$productDetailData3['name']}} - {{$productDetailData3['color']}} - {{$productDetailData3['size']}} <strong class="product-quantity"> × {{$productDetailData3['total']}} </strong>
													</td>
													<td class="product-total">
														<span class="amount">Rp {{number_format($productDetailData3['price']*$productDetailData3['total'],0,",",".")}}</span>
														<?php $cartTotalProductPrice = $cartTotalProductPrice + $productDetailData3['price']*$productDetailData3['total']; ?>
													</td>
												</tr>
											@endforeach
										@endforeach
									@endforeach
								</tbody>
								<tfoot>
									<tr class="cart-subtotal">
										<th>Sub Total</th>
										<td><span class="amount">Rp {{number_format($cartTotalProductPrice,0,",",".")}}</span></td>
									</tr>
									<tr class="order-total">
										<th>Total Pemesanan</th>
										<td><strong><span class="amount">Rp {{number_format($cartTotalProductPrice,0,",",".")}}</span></strong>
										</td>
									</tr>
								</tfoot>
							</table>
						</div>
						<div class="payment-method">
							<div class="payment-accordion">
                                <div class="order-button-payment">
                                    <input type="submit" value="Lanjut ke Pembayaran" />
                                </div>
						    </div>
					    </div>
				    </div>
                </div>
			</form>
		</div>
	</div>
</div>
<!-- checkout-area end -->

@endsection
