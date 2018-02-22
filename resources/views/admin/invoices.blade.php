@extends('admin.layout.auth')

@section('content')
<div class="container">
    <form action="" method="post">
        <div class="col-sm-4">
            <select class="form-control" multiple size=20>
                @foreach($users as $user)
                    <option>Ime: {{ $user->first_name }} &nbsp; Prezime: {{ $user->last_name }} </option>
                @endforeach
            </select>

            <div class="form-group">
                <label for="cenaPoM">Cena po m^2:</label>
                <input type="number" class="form-control" id="cenaPoM" required="">
            </div>
            <div class="form-group">
                <label for="cenaPoStanaru">Cena po stanaru:</label>
                <input type="number" class="form-control" id="cenaPoStanaru" required="">
            </div>
            <div class="form-group">
                <button class=" col-sm-12 btn btn-warning">Posalji</button>
            </div>
        </div>
        <div id="unos" class="col-sm-8">
            <div class="row">
                <div class="col-sm-2">Cifra</div>
                <div class="col-sm-7">Tekst</div>
                <button id="dodaj" class="btn btn-primary col-sm-2">Dodaj stavku</button>
            </div>
        </div>
    </form>
    
</div>
@endsection

@section('scripts') 
    <script src="js/custom.js"></script>
@endsection