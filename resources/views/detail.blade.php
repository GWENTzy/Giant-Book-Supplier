@extends('layouts.app')

@section('content')
    <div class="page-title">
        <h3>Book Detail</h3>
    </div>

    <div class="row row-cols-1 row-cols-md-3 g-4 container-group-cards justify-content-center">
        <div class="col w-100">
            <div class="card h-100">
                <img class="card-img-top" src="{{ asset('img/'.$data->book->image) }}" onerror="this.onerror=null; this.src='{{ $data->book->image }}'">
                <div class="card-body">
                    <h5 class="card-title">Title : {{ $data->book->title }}</h5>
                    <h5 class="card-title">Author : {{ $data->book->author }}</h5>
                    <h5 class="card-title">Publisher : {{ $data->book->publisher->name }}</h5>
                    <h5 class="card-title">Year : {{ $data->book->year }}</h5>
                    <h5 class="card-title">Synopsis : {{ $data->book->synopsis }}</h5>
                    <p class="card-text"></p>
                </div>
            </div>
        </div>
    </div>
@endsection
