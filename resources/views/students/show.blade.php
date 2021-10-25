@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('STUDENT DATA') }}</div>
                <div class="card-body">
                <table class="table table-responsive">
                        <tr><th>ID</th><th>:</th><td>{{ $statment->id }}</td></tr>
                        <tr><th>NIM</th><th>:</th><td>{{ $statment->nik }}</td></tr>
                        <tr><th>Name</th><th>:</th><td>{{ $statment->name }}</td></tr>                        
                        <tr><th>Class</th><th>:</th><td>{{ $statment->class }}</td></tr>
                        <tr><th>Departement</th><th>:</th><td>{{ $statment->departement }}</td></tr>
                        <tr><th>Phone Number</th><th>:</th><td>{{ $statment->phone_number }}</td></tr>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection