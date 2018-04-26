@extends('layouts.app')

@section('content')

<!-- login-area start -->
<div class="login-area mb-50">
    <div class="container">
		<div class="row">
			<div class="col-md-5" style="background-color:#ffffff;padding:20px;margin-top:20px;height:100%">
				<label><strong style="font-size:18px">Informasi Akun</strong></label>

				<div class="row" style="margin-top:10px">
					<label for="inputEmail" class="col-md-4"><span class="pull-right" style="margin-top:12px">Email</span></label>

					<div class="col-md-8">
						<input class="form-control" id="inputEmail" type="email" value="{{$user['email']}}" disabled />
					</div>
				</div>

				<div class="row" style="margin-top:20px;margin-bottom:-20px">
					<label for="inputPassword" class="col-md-4"><span class="pull-right" style="margin-top:12px">Password</span></label>

					<div class="col-md-4">
						<input class="form-control" id="inputPassword" type="password" value="********" disabled />
					</div>

					<div class="col-md-4" style="margin-top:7px">
						<a href="/profile/change-password" class="btn-sm btn-success form-control"><span class="fa fa-key"></span> Ubah Password</a>
					</div>
				</div>

				<hr style="margin-bottom:20px">

				<label><strong style="font-size:18px;">Informasi Profil</strong></label>

				<div class="row" style="margin-bottom:20px;margin-top:10px">
					<label for="inputPhone" class="col-md-4"><span class="pull-right" style="margin-top:12px">No HP/Telepon</span></label>

					<div class="col-md-8">
						<input class="form-control" id="inputPhone" type="text" value="{{$user['phone']}}" />
					</div>
				</div>
			</div>

			<div class="col-md-1"></div>

			<div class="col-md-6" style="background-color:#ffffff;padding:20px;margin-top:20px">
				<label><strong style="font-size:18px">Informasi Alamat</strong></label>

				<div class="row" style="margin-bottom:20px">
					<div class="col-md-12">
						<button type="button" id="btnAddAddressArea" class="btn-sm btn-success pull-right" style="cursor:pointer">
							<span class="fa fa-plus"></span> Tambah Alamat
						</button>
					</div>
				</div>

				<div class="row" style="margin-bottom:20px">
					<div class="col-md-12 text-center">
						@if(isset($address) && count($address))

						@else
							<span>Belum ada alamat yang terdaftar</span>
						@endif
					</div>
				</div>

				<div style="border:2px solid #E6E9ED;padding:10px;display:none" id="addAddressArea">
					<form action="/profile/address/add" method="POST">
						{!! csrf_field() !!}

						<div class="row" style="margin-bottom:20px;">
							<label for="inputProvince" class="col-md-4"><span class="pull-right" style="margin-top:12px">Nama Alamat</span></label>

							<div class="col-md-8">
								<input type="text" class="form-control" name="addressName" id="addressName" placeholder="Nama Alamat (ex: Rumah/Kantor)" />
							</div>
						</div>

						<div class="row" style="margin-bottom:20px;">
							<label for="inputProvince" class="col-md-4"><span class="pull-right" style="margin-top:12px">Provinsi</span></label>

							<div class="col-md-8">
								<select class="form-control" id="inputProvince" name="provinceId">
									<option value="">--- Pilih Provinsi ---</option>
									@foreach($province as $provinceData)
										<option value="{{$provinceData->Id}}">{{$provinceData->Name}}</option>
									@endforeach
								</select>
							</div>
						</div>

						<div class="row" style="margin-bottom:20px;">
							<label for="inputCity" class="col-md-4"><span class="pull-right" style="margin-top:12px">Kota/Kabupaten</span></label>

							<div class="col-md-8">
								<select class="form-control" id="inputCity" name="cityId">
									<option value="">--- Pilih Kota/Kabupaten ---</option>
								</select>
							</div>
						</div>

						<div class="row" style="margin-bottom:20px;">
							<label for="inputDistrict" class="col-md-4"><span class="pull-right" style="margin-top:12px">Kecamatan</span></label>

							<div class="col-md-8">
								<select class="form-control" id="inputDistrict" name="districtId">
									<option value="">--- Pilih Kecamatan ---</option>
								</select>
							</div>
						</div>

						<div class="row" style="margin-bottom:40px;">
							<label for="inputAddress" class="col-md-4"><span class="pull-right" style="margin-top:12px">Alamat</span></label>

							<div class="col-md-8">
								<textarea class="form-control" style="resize:none" rows="3" id="inputAddress" name="address" placeholder="Masukkan Alamat"></textarea>
							</div>

							<div class="col-md-12" style="margin-top:20px">
								<div class="pull-right">
									<button type="button" id="btnHideAddAddressArea" class="btn btn-success" style="background-color:#ffffff;border:2px solid #317398;color:#317398;margin-right:10px">
										<span class="fa fa-close"></span> Batal
									</button>

									<button type="submit" class="btn btn-success" style="background-color:#317398">
										<span class="fa fa-save"></span> Simpan
									</button>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function(){
		$('#btnAddAddressArea').click(function(){
			$('#addAddressArea').show();
		});

		$('#btnHideAddAddressArea').click(function(){
			$('#addAddressArea').hide();
		});

		$('#inputProvince').change(function(){
			$.ajax({
				type: "get",
				url: "/config/city/get",
				data: {
					'provinceId': $(this).val(),
				},
				success: function(data) {
					$('#inputCity').html('<option value="">--- Pilih Kota/Kabupaten ---</option>');

					$.each(data, function(k, v) {
						$('#inputCity').append('<option value="'+v.Id+'">'+v.Name+'</option>');
					});
				}
			});
		});

		$('#inputCity').change(function(){
			$.ajax({
				type: "get",
				url: "/config/district/get",
				data: {
					'cityId': $(this).val(),
				},
				success: function(data) {
					$('#inputDistrict').html('<option value="">--- Pilih Kecamatan ---</option>');

					$.each(data, function(k, v) {
						$('#inputDistrict').append('<option value="'+v.Id+'">'+v.Name+'</option>');
					});
				}
			});
		});
	});
</script>

@endsection
