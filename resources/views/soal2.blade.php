<form method="POST" action="{{url('/soal2/proses')}}">
	@csrf
	Angka : <input type="number" name="angka"> <br>
	<input type="submit" value="submit">
</form>