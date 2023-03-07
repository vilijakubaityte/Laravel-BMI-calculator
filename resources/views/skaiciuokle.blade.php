@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header fs-1 text-center">KMI Skaičiuoklė</div>
                    <div class="card-body">
                        <form method="post" action="{{route("rezultatas")}}">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Įveskite svorį (kg)</label>
                                <input class="form-control" name="svoris" type="text">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Įveskite ūgį (cm)</label>
                                <input class="form-control" name="ugis" type="text">
                            </div>
                            <button class="btn btn-secondary">Skaičiuoti KMI</button>
                        </form>
                    </div>
            </div>
        </div>
    </div>
</div>



@endsection
