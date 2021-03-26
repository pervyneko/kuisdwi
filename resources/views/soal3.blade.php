<form method="POST" action="{{url('/soal3/proses')}}">
	@csrf
	Angka Bulan : <input type="number" name="angka" min="1" max="12"> <br>
	<input type="submit" value="submit">
</form>