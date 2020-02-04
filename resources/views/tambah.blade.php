<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>
 
	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Data Mahasiswa</h3>
 
	<a href="/mahasiswa"> Kembali</a>
	
	<br/>
	<br/>
 
	<form action="/mahasiswa/store" method="post">
		{{ csrf_field() }}
		Nama <input type="text" name="nama" required="required"> <br/>
		jurusan <input type="text" name="jurusan" required="required"> <br/>
		alamat <input type="text" name="alamat" required="required"> <br/>
		Agama <input type="text" name="agama" required="required"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
 
</body>
</html>