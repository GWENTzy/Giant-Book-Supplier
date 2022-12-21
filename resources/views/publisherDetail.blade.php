@extends('layouts.app')

@section('title', 'Publisher')

@section('content')
        <div class="publisher-info">
            <div class="row">
                <div class="col publisher-detail">
                    <h4>Address - {{ $publisher->address }}</h4>
                    <h4>Phone - {{ $publisher->phone }}</h4>
                    <h4>Email - {{ $publisher->email }}</h4>
                </div>
                <div class="col d-flex flex-row-reverse logo-image">
                    <img src= "{{ asset('img/'.$publisher->image) }}" onerror="this.onerror=null; this.src='{{ $publisher->image }}'" width="200" height="auto">
                </div>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-md-3 g-4 container-group-cards">
            @foreach ($publisher->book as $data)
            <div class="col-sm-3 mb-3">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('img/'.$data->image) }}" onerror="this.onerror=null; this.src='{{ $data->image }}'" width="200" height="400">
                    <div class="card-body">
                        <h5 class="card-title">{{ $data->title }}</h5>
                        <p class="card-text">By {{ $data->author }}</p>
                        <a href="{{ route('detail', ['id'=> $data->id]) }}" class="btn btn-primary">Book Detail</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
@endsection
