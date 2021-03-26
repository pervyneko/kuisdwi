@extends('base')

@section('base')
<div class="card" style="width: 18rem;">
    <div class="card-header">
        Turunan angka {{ $angka }}
    </div>
    <ul class="list-group list-group-flush">
        @for ($i = $angka; $i > 0; $i--)
        <li class="list-group-item">{{ $i }}</li>
        @endfor
    </ul>
</div>
@endsection
