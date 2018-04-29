@extends('layouts.app')

@section('content')

<!-- login-area start -->
<div class="login-area mb-50" style="margin-top:-20px">
    <div class="container">
		<div class="row">
			<div class="col-md-12 row" style="background-color:#ffffff;padding:20px;margin-top:30px;height:100%">
                <label><strong style="font-size:18px">Riwayat Pemesanan</strong></label>

				<div class="row" style="margin-top:30px;">
                    @foreach ($bookingHistory->data as $bookingHistoryData)
                        <div class="col-md-6 row-eq-height" style="margin-bottom:20px">
                            <div class="col-md-11" style="box-shadow: 3px 2px 1px 1px rgba(0,0,0,.21);border: 1px solid hsla(0,0%,4%,.25);border-radius: 5px;padding:10px 20px">
                                <div class="col-md-10">
                                    <div class="col-md-6">
                                        Kode Pemesanan
                                        <span class="pull-right">:</span>
                                    </div>

                                    <div class="col-md-6">
                                        <strong>{{$bookingHistoryData->OrderCode}}</strong>
                                    </div>

                                    <div class="col-md-6">
                                        Status Pemesanan
                                        <span class="pull-right">:</span>
                                    </div>

                                    <div class="col-md-6">
                                        @if($bookingHistoryData->Status == 0)
                                            Menunggu Pembayaran
                                        @elseif($bookingHistoryData->Status == 1)
                                            Pembayaran Telah Diterima
                                        @elseif($bookingHistoryData->Status == 2)
                                            Pemesanan Sedang Diproses
                                        @elseif($bookingHistoryData->Status == 3)
                                            Pemesanan Sedang Dikirim
                                        @elseif($bookingHistoryData->Status == 4)
                                            Pemesanan Telah Sampai Tujuan
                                        @elseif($bookingHistoryData->Status == 5)
                                            Pemesanan Dibatalkan
                                        @endif
                                    </div>

                                    <div class="col-md-6">
                                        Jumlah Transaksi
                                        <span class="pull-right">:</span>
                                    </div>

                                    <div class="col-md-6">
                                        Rp {{number_format($bookingHistoryData->FinalPrice,0,",",".")}}
                                    </div>
                                </div>

                                <div class="col-md-2" style="height:100%;padding:inherit">
                                    <a href="/booking-history/{{$bookingHistoryData->OrderCode}}" style="display:inline-flex;padding:inherit">Detail <span class="fa fa-chevron-right" style="margin-left:5px"> </span></a>
                                </div>
                            </div>

                            <div class="col-md-1">&nbsp;</div>
                        </div>
                    @endforeach
				</div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function(){

	});
</script>

@endsection
