@extends('base')

@section('base')
<form action="{{ route('soal5.proses') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label class="form-label">Angka</label>
        <input type="number" class="form-control" name="angka">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
