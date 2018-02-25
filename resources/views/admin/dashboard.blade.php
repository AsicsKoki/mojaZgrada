@extends('admin.layout.auth')

@section('content')
<div class="container">

    <h3>Zgrade</h3>
    @foreach($buildings as $building)
        <a href="/{{ $building->id }}/posts"> {{ $building->address }} zgrada </a>
    @endforeach
    
</div>
@endsection