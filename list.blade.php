<!DOCTYPE html>
<html lang="en">
<head>
	<title>List Tiket</title>
	<link rel="stylesheet" type="text/css" href="../tiket/util.css">
	<link rel="stylesheet" type="text/css" href="../tiket/main.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="/tiket/icooon.ico">
<!--===============================================================================================-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#inpt").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#tbl tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

</head>
<div class="src"><input  id="inpt" type="text" name="search" placeholder="Search.." autocomplete="off"></div>
<a href="/pesawat/tambah" class="tambah"><i class="w3-xxlarge fa fa-plus-circle" aria-hidden="true"></i></a>
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100">
					<table>
						<thead>
							<tr class="table100-head">
								<th class="column1">Type</th>
								<th class="column2">Nama</th>
								<th class="column3">Check In</th>
								<th class="column4">From</th>
								<th class="column5">To</th>
								<th class="column6">Amount</th>
								<th class="column7">Plane</th>
								<th class="column8">Class</th>
								<th class="column9">Harga</th>
								<th class="column10">Opsi</th>
							</tr>
						</thead>
						<tbody id="tbl">
						@foreach($tiket as $p)
								<tr>
									<td class="column1">{{ $p->tipe }}</td>
									<td class="column2">{{ $p->nama }}</td>
									<td class="column3">{{ $p->checkin }}</td>
									<td class="column4">{{ $p->kota }}</td>
									<td class="column5">{{ $p->ke }}</td>
									<td class="column6">{{ $p->jumlah }}</td>
									<td class="column7">{{ $p->pesawat }}</td>
									<td class="column8">{{ $p->class }}</td>
									<td class="column9">{{ $p->harga }}</td>
									<td>
										<a class="column10" href="/pesawat/edit/{{ $p->tiket_id }}">Edit</a>
											|
										<a class="column10" href="/pesawat/hapus/{{ $p->tiket_id }}">Hapus</a>
									</td>
								</tr>							
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>


	

<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>