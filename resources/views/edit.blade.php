<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>
 
	<h3>Edit Mahasiswa</h3>
 
	<a href="/mahasiswa"> Kembali</a>
	
	<br/>
	<br/>
 
	@foreach($mahasiswa as $m)
	<form action="/mahasiswa/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $m->id }}"> <br/>
		Nama <input type="text" required="required" name="nama" value="{{ $m->nama_lengkap }}"> <br/>
		Jurusan <input type="text" required="required" name="jurusan" value="{{ $m->jurusan }}"> <br/>
		Alamat <input type="text" required="required" name="alamat" value="{{ $m->alamat }}"> <br/>
		Agama <input type="text" required="required" name="agama" value="{{ $m->agama }}"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
		
</body>
</html>