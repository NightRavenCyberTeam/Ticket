<!doctype html>
<html lang="en">
    <head>
        <title>Detail Pesanan</title>
        <link rel="stylesheet" href="/suu/bootstrap.css">
        <link rel="stylesheet" href="/suu/font-awesome.min.css">
        <link rel="stylesheet" href="/suu/nice-select.css">
		<link rel="stylesheet" href="/suu/style.css">
		<link rel="shortcut icon" href="/suu/icooon.ico">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <section class="home_banner_area">
            <div class="banner_inner d-flex align-items-center">
				<div class="container">
					<div class="banner_content">
						<h5>The joy of home owning</h5>
						<h3>Find Your New Home</h3>
						<a href="/pesawat/list"><i class="w3-xxlarge fa fa-long-arrow-left" aria-hidden="true"></i></a>
					</div>
				</div>
            </div>
            <div class="container">
				<div class="advanced_search">
				@foreach($tiket as $p)	
					<h3>Detail Tiket {{ $p->nama }}</h3>
						<form action="#" method="post">
						{{ csrf_field() }}
					<div class="search_select">
						<a>Type Penerbangan:</a>
						<input type="text" class="s_select" placeholder="Nama" value="{{ $p->tipe }}" readonly>
						<a>Nama:</a>
						<input type="text" class="s_select" placeholder="Nama" value="{{ $p->nama }}" readonly>
						<a>Check In:</a>
						<input type="text" class="s_select" placeholder="Nama" value="{{ $p->checkin }}" readonly>
						<a>Dari:</a>
						<input type="text" class="s_select" placeholder="Nama" value="{{ $p->kota }}" readonly>
						<a>Ke:</a>
						<input type="text" class="s_select" placeholder="Nama" value="{{ $p->ke }}" readonly>
						<a>Jumlah Tiket:</a>
						<input type="text" class="s_select" placeholder="Nama" value="{{ $p->jumlah }}" readonly>
						<a>Pesawat:</a>
						<input type="text" class="s_select" placeholder="Nama" value="{{ $p->pesawat }}" readonly>
						<a>Class:</a>
						<input type="text" class="s_select" placeholder="Nama" value="{{ $p->class }}" readonly>
						<a>Total Harga:</a>
						<input type="text" class="s_select" placeholder="Nama" value="{{ $p->harga }}" readonly>	
					</div>
						</form>
					@endforeach
				</div>
            </div>
        </section>
    </body>
</html>