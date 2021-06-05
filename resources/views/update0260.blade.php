<!DOCTYPE html>
<html>
<head>
	<title>Update Data</title>
</head>
<body>

	<h1>Edit Pegawai</h1>

	<a href="/index"> Home</a>
	
	<br/>
	<br/>

	@foreach($pasien as $p)
	<form action="/pasien/up" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->id }}"> <br/>
		Nama <input type="text" required="required" name="nama" value="{{ $p->nama }}"> <br/>
		Alamat <textarea required="required" name="alamat">{{ $p->alamat }}</textarea> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
		

</body>
</html>