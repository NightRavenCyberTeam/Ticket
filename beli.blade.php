<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Pesan</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Six+Caps&display=swap" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="../beli/bootstrap.min.css">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="../beli/style.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		
	<link rel="shortcut icon" href="/beli/icooon.ico">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>
<body>

	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="booking-cta">
							<h3>Let Us Take You Away</h3>
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate laboriosam numquam at</p>
						</div>
					</div>
					<div class="col-md-7 col-md-offset-1">
						<div class="booking-form">
							<form action="/pesawat/store" method="post">
							{{ csrf_field() }}
								<div class="form-group">
									<div class="form-checkbox">
										<label for="roundtrip">
											<input type="radio" name="tipe" id="roundtrip" value="Roundtrip" checked>
											<span></span>Roundtrip
										</label>
										<label for="one-way">
											<input type="radio" name="tipe" id="one-way" value="One Way">
											<span></span>One Way
										</label>
										<label for="multi-city">
											<input type="radio" name="tipe" id="multi-city" value="Multi-City">
											<span></span>Multi-City
										</label>
									</div>
								</div>
								<a href="/pesawat/list" class="kmbali"><i class="w3-xxlarge fa fa-chevron-left" aria-hidden="true"></i></a>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<span class="form-label">Nama</span>
											<input class="form-control" type="text" name="nama" placeholder="Masukkan Nama" required autocomplete="off">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<span class="form-label">Chcek In</span>
											<input class="form-control" type="date" name="checkin" required autocomplete="off">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<span class="form-label">Flying from</span>
											<select class="form-control" name="dari" required placeholder="Masukkan Kota" id="kota" autocomplete="off">
											@foreach($kota as $a)
												<option value="{{$a -> id}}" enable="true">{{$a -> kota}}</option>
											@endforeach
											</select>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<span class="form-label">Flying to</span>
											<select class="form-control" name="ke" required placeholder="Masukkan Kota" autocomplete="off">
												<option>Jakarta</option>
												<option>Semarang</option>
												<option>Bali</option>
												<option>Banten</option>
												<option>Samarinda</option>
											</select>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<span class="form-label">Jumlah Tiket</span>
											<select class="form-control" name="jumlah" required autocomplete="off">
												<option>1</option>
												<option>2</option>
												<option>3</option>
											</select>
											<span class="select-arrow"></span>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<span class="form-label">Pesawat</span>
											<select class="form-control" name="pesawat" required autocomplete="off">
												<option>Garuda Indonesia</option>
												<option>Batik Air</option>
												<option>Lion Air</option>
											</select>
											<span class="select-arrow"></span>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<span class="form-label">Travel class</span>
											<select class="form-control" name="class" required autocomplete="off">
												<option>Economy class</option>
												<option>Business class</option>
												<option>First class</option>
											</select>
											<span class="select-arrow"></span>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<span class="form-label">Total Harga</span>
											<input class="form-control" type="text" name="harga" required id="harga" autocomplete="off">
										</div>
									</div>
								</div>
								<div class="form-btn">
									<input type="submit" value="Pesan" class="submit-btn">
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="../js/jquery-3.4.1.min.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){
		$(document).on('change','#kota',function(){
			var apa = $(this).val();
			console.log(apa);
			var op = "";
			$.ajax({
				url: 'http://localhost:8000/findprice/'+apa
			})
				.done(function(data){
					console.log(data.harga);
					
					$('#harga').val(data.harga);
				});
		});
	});
	</script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>