<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>

	<h3>Data Mahasiswa</h3>

	<a href="/mahasiswa/tambah"> + Tambah Mahasiswa Baru</a>
	
	<br/>
	<br/>

	<table border="1">
		<tr>
			<th>Nama Lengkap</th>
			<th>Jurusan</th>
			<th>Alamat</th>
			<th>Agama</th>
			<th>Opsi</th>
		</tr>
		@foreach($mahasiswa as $m)
		<tr>
			<td>{{ $m->nama_lengkap }}</td>
			<td>{{ $m->jurusan }}</td>
			<td>{{ $m->alamat }}</td>
			<td>{{ $m->agama }}</td>
			<td>
				<a href="/mahasiswa/edit/{{ $m->id }}">Edit</a>
				|
				<a href="/mahasiswa/hapus/{{ $m->id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>


</body>
</html>