<!DOCTYPE html>
<html>
<head>
	<title>PEMROGRAMAN WEB</title>
</head>
<body>

	<h2><a href="https://www.malasngoding.com"></a></h2>
	<h3>Absen Pegawai</h3>

	<a href="/absen"> Kembali</a>

	<br/>
	<br/>

	<form action="/absen/store" method="post">
		{{ csrf_field() }}
		ID <input type="number" name="ID" required="required"> <br/>
		IDPegawai <input type="number" name="IDPegawai" required="required"> <br/>
		Tanggal <input type="datetime" name="Tanggal" required="required"> <br/>
		Status <textarea name="Status" required="required"></textarea> <br/>
		<input type="submit" value="Simpan Data">
	</form>

</body>
</html>
