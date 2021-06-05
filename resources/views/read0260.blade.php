<!DOCTYPE html>
<html>
<head>
	<title>Read Data</title>
</head>
<body>

	<center><h1>Data Pasien</h1></center>

    <ul>
        <li><a href="index">Home</a></li>
        <li><a href="/hal_create">Create</a></li>
        <li><a href="/hal_update">Update</a></li>

            
    </ul>
	
	<br/>
	<br/>

	<table border="1">
		<tr>
			<th>ID</th>
            <th>Nama</th>
			<th>Alamat</th>
		</tr>
		@foreach($pasien as $p)
		<tr>
			<td>{{ $p->id }}</td>
			<td>{{ $p->nama }}</td>
			<td>{{ $p->alamat }}</td>
            <td>
                <a href="/hal_update{{ $p->id }}">Edit</a>
            </td>
		</tr>
		@endforeach
	</table>


</body>
</html>