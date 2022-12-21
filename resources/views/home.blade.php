@extends('layouts.app')

@section('title', 'Home')

@section('content')

<div class="container-group-cards">
    <div class="card-header d-inline-block py-3">
        <h6 class="m-0 font-weight-bold text-primary">Book List</h6>
    </div>
    <div class="card-body">
        <div class="container">
            <div class="row">
                @foreach ($book as $data)
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
        </div>
    </div>
</div>
@endsection
