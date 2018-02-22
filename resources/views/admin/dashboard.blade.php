@extends('admin.layout.auth')

@section('content')
<div class="container">

    @foreach($buildings as $building)
        <a href="/{{ $building->id }}/invoices"> {{ $building->address }} Invoices </a>
    @endforeach
    
</div>
@endsection