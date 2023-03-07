@extends('layouts.app')

@section('content')

    <div class="container">
        <a class="btn btn-secondary" href="{{ route('forma') }}">Atgal</a>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header fs-1 text-center">KMI Skaičiuoklė</div>
                    <div class="card-body">
                       <p><strong>Jūsų KMI: </strong> {{ $kmi }}</p>
                        <p> {{ $ats }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
