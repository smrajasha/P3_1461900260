<!DOCTYPE html>
<html>
<head>
	<title>Create</title>
</head>
<body>

	<h3>Data Pasien</h3>

	<a href="index"> Kembali</a>
	
	<br/>
	<br/>

	<form action="/pasien/store" method="post">
		{{ csrf_field() }}
		Nama <input type="text" name="nama" required="required"> <br/>
		Alamat <textarea name="alamat" required="required"></textarea> <br/>
		<input type="submit" value="Simpan Data">
	</form>

</body>
</html>