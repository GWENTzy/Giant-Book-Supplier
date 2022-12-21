@extends('layouts.app')

@section('title', 'Home')

@section('content')

<div class="container-group-cards">
    <div class="card-header d-inline-block py-3">
        <h6 class="m-0 font-weight-bold text-primary">Publisher List</h6>
    </div>
    <div class="card-body">
        <div class="container">
            <div class="row">
                @foreach ($publisher as $data)
                <div class="col-sm-3 mb-3">
                    <div class="card">
                        <img class="card-img-top" src="{{ asset('img/'.$data->image) }}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{ $data->name }}</h5>
                            <a href="{{ route('publisherDetail', ['id'=> $data->id]) }}" class="btn btn-primary">Publisher Detail</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
