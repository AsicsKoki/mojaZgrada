@extends('admin.layout.auth')

@section('content')
<div class="container">
        <h3>Meni i postovi za odredjenu zgradu</h3>
        <a href="/{{ $building->id }}/invoices"> {{ $building->address }} Invoices </a>
        <a href="/{{ $building->id }}/posts/create"> Napravite post </a>

    @foreach($posts as $post)
        <div class="blog-post">
            <h2 class="blog-post-title">{{ $post->title }}</h2>
            <p class="blof-post-meta">
                {{ $post->building->admin->first_name }} {{ $post->building->admin->last_name }},
                Datum: {{ $post->created_at->toFormattedDateString() }}
            </p>

            {{ $post->body }}
        </div>
    @endforeach
    
</div>
@endsection