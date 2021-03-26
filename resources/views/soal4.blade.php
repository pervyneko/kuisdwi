<form method="POST" action="{{url('/soal4/proses')}}">
	@csrf
	Angka : <input type="number" name="angka"> <br>
	<input type="submit" value="submit">
</form>