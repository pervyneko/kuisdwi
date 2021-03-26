<form method="POST" action="{{url('/soal1/proses')}}">
	@csrf
	Nama Pembeli : <input type="text" name="nama"> <br>
	Jenis Kopi : <select name="jenis">
		<option value="Nescafe">Nescafe</option>
		<option value="latte">Latte</option>
	</select><br>
	Harga : <input type="number" name="harga"><br>
	Jumlah : <input type="number" name="jumlah"><br>
	<input type="submit" value="submit">
</form>