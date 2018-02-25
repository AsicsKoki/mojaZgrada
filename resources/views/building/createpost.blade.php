@extends('admin.layout.auth')

@section('content')
<div class="container">
        <h1>Kreiranje posta</h1>

        <form method="POST" action="/{{ $building->id }}/posts">

            {{ csrf_field() }}
            
            <div class="form-group">
              <label for="title">Naslov:</label>
              <input type="text" class="form-control" id="title" name="title" >
            </div>

            <div class="form-group">
              <label for="body">Tekst</label>
              <textarea name="body" id="body" class="form-control" ></textarea>
            </div><!-- moze da se postavi polje required ali to client moze da ukloni pa je potrebno i server da vrsi validaciju-->

            <div class="form-group">
              <button type="submit" class="btn btn-primary">Prosledi</button>
            </div>
          </form>
</div>
@endsection