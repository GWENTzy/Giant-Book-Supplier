@extends('layouts.app')

@section('title', 'Home')

@section('content')

<div class="container-group-cards">
    <div class="card-header d-inline-block py-3">
        <h6 class="m-0 font-weight-bold text-primary">Category {{ $categoryName }}</h6>
    </div>
    <div class="card-body">
        <div class="container">
            <div class="row">
                @foreach ($bookCategory as $data)
                <div class="col-sm-3 mb-3">
                    <div class="card">
                        <img class="card-img-top" src="{{ asset('img/'.$data->book->image) }}" onerror="this.onerror=null; this.src='{{ $data->book->image }}'" width="200" height="400">
                        <div class="card-body">
                            <h5 class="card-title">{{ $data->book->title }}</h5>
                            <p class="card-text">By {{ $data->book->author }}</p>
                            <a href="{{ route('detail', ['id'=> $data->book->id]) }}" class="btn btn-primary">Book Detail</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
