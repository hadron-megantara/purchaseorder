@extends('layouts.app')

@section('content')

<style>
#cover {
   position: absolute;
   top: 0;
   left: 0;
   right: 0;
   bottom: 0;
   opacity: 0.80;
   background: #aaa;
   z-index: 10;
   display: none;
}

#cartPostCode::placeholder{
    color:#000000;
}

</style>
<!-- checkout-area start -->
<div class="checkout-area" style="margin-top:50px">
	<div class="container">
		<div class="row">
			<form action="/checkout" style="display: -webkit-box;" method="POST">
				<div class="col-lg-6 col-md-6">
					<div class="checkbox-form">
						<h3>Pilih Metode Pembayaran</h3>
						<div class="row"></div>
					</div>
				</div>
				<div class="col-lg-6 col-md-6" style="margin-top:-30px">
					<div class="your-order">
						<h3>Pemesanan Anda</h3>
						<div class="your-order-table table-responsive">

						</div>
				    </div>
                </div>
			</form>
		</div>
	</div>
</div>
<!-- checkout-area end -->

<div id="cover"> </div>

<script type="text/javascript">
	$(document).ready(function(){

	});
</script>

@endsection
