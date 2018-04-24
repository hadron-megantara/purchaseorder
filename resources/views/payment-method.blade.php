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

<?php
    $bankNameList = "";
    foreach($bankAccount as $bankAccount2){
        if($bankNameList != ''){
            $bankNameList = $bankNameList.', ';
        }
        $bankNameList = $bankNameList.$bankAccount2->BankName;
    }
?>

<!-- checkout-area start -->
<div class="checkout-area" style="margin-top:50px">
	<div class="container">
		<div class="row">
			<form action="/payment-method" style="display: -webkit-box;width:100%" method="POST">
				<div class="col-lg-7 col-md-7">
					<div class="checkbox-form">
						<h3>Pilih Metode Pembayaran</h3>
						<div class="row"></div>

                        <div class="col-md-12 row">
                            <div class="checkout-form-list">
                                <label class="radio-inline">
                                    <input type="radio" name="gender" value="BankTransfer" checked="checked" style="width:20px;height:15px"> Bank Transfer ({{$bankNameList}})
                                </label>
                            </div>
                        </div>

                        <div class="col-md-12" style="background-color:#ffffff;margin-top:-10px;padding-top:15px;padding-bottom:15px;">
                            <div class="col-md-12 row">
                                <div class="col-md-6">
                                    Subtotal
                                    <span class="pull-right">:</span>
                                </div>

                                <div class="col-md-6 pull-right">
                                    <span class="pull-right">Rp {{number_format($orderData->price,0,",",".")}}</span>
                                </div>
                            </div>

                            <div class="col-md-12 row" style="margin-top: 5px">
                                <div class="col-md-6" style="background-color:#F1F1F1">
                                    Biaya Pengiriman
                                    <span class="pull-right">:</span>
                                </div>

                                <div class="col-md-6 pull-right" style="background-color:#F1F1F1">
                                    <span class="pull-right">Rp 0,0</span>
                                </div>
                            </div>

                            <div class="col-md-12 row" style="margin-top: 5px">
                                <div class="col-md-6">
                                    Kode Transaksi
                                    <span class="pull-right">:</span>
                                </div>

                                <div class="col-md-6">
                                    <span class="pull-right">{{$orderData->transactionCode}}</span>
                                </div>
                            </div>

                            <div class="col-md-12 row" style="margin-top: 5px">
                                <div class="col-md-6" style="background-color:#F1F1F1">
                                    Total
                                    <span class="pull-right">:</span>
                                </div>

                                <div class="col-md-6 pull-right" style="background-color:#F1F1F1">
                                    <span class="pull-right">Rp {{number_format($orderData->finalPrice,0,",",".")}}</span>
                                </div>
                            </div>

                            <div class="col-md-12 row" style="margin-top: 20px">
                                @foreach($bankAccount as $bankAccount2)
                                    <img src="{{$bankAccount2->BankPath}}" style="height:50px;margin-right:20px" />
                                @endforeach
                            </div>

                            <div class="col-md-12" style="margin-top: 20px">
                                <ul>
                                    <li style="list-style-type: circle;">
                                        Setelah Anda melakukan pemesanan di KANGKODING.COM, harap mentransfer dalam jangka waktu yang tertera pada halaman Pembayaran/Konfirmasi atau pesanan Anda akan dibatalkan secara otomatis.
                                    </li>

                                    <li style="list-style-type: circle;">
                                        Harap melakukan konfirmasi setelah selesai mentransfer.
                                    </li>

                                    <li style="list-style-type: circle;">
                                        Pembayaran dengan Bank Transfer hanya dapat digunakan pembeli dari Indonesia.
                                    </li>
                                </ul>
                            </div>

                            <div class="col-md-12 row" style="margin-top: 20px">
                                <button type="submit" class="btn btn-primary form-control">Proses Pembayaran</button>
                            </div>

                        </div>
					</div>
				</div>
				<div class="col-lg-5 col-md-5" style="margin-top:-30px;">
					<div class="your-order">
						<h3>Detail Produk</h3>
                        <div class="row"></div>

                        <div class="col-md-12" style="background-color:#ffffff;margin-top:-10px;padding-top:15px;padding-bottom:15px;height:415px;overflow: scroll;-webkit-overflow-scrolling: touch;">
                            @foreach($orderData->products as $orderData2)
                                <div class="row" style="margin-bottom:10px">
                                    <div class="col-md-6">
                                        <img src="{{env('API_BASE_URL')}}app/images/{{$orderData2->productPhoto}}" style="width:100%" />
                                    </div>

                                    <div class="col-md-6" style="margin:auto">
                                        <b style="font-size:14px">{{$orderData2->productName}}</b> <br/>
                                        Warna : {{$orderData2->productColor}} <br/>
                                        Ukuran : {{$orderData2->productSize}} <br/>
                                        Jumlah : {{$orderData2->productTotal}} <br/>
                                        Harga /pcs : Rp {{number_format($orderData2->productPrice,0,",",".")}} <br/>
                                        Harga Total : Rp {{number_format($orderData2->productTotalPrice,0,",",".")}}
                                    </div>
                                </div>
                            @endforeach
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
