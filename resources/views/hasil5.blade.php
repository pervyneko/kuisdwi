@extends('base')

@section('base')
<div class="card" style="width: 18rem;">
    <div class="card-header">
        Turunan angka {{ $angka }}
    </div>
    <ul class="list-group list-group-flush">
        @for ($i = 1; $i <= $angka; $i++) <li class="list-group-item">
            {{ $i }}
            @if ($i % 2 == 0)
            {{ __('Genap') }}
            @else
            {{ __('Ganjil') }}
            @endif
            </li>
            @endfor
    </ul>
</div>
@endsection
