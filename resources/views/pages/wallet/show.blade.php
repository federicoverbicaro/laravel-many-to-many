@extends('layouts.app')

@section('content')

<h2 class="text-center m-3 text-capitalize  ">dettagli progetto</h2>

<div class="container d-flex justify-content-center ">

    <div class="card col-4 mt-4">
        <img class="card-img-top" src="{{asset('storage/' . $wallet->new_image ) }}" alt="Title" />
        <div class="card-body">
            <h4 class="card-title">{{ $wallet->title}}</h4>
            <p class="card-text">{{ $wallet->description}}</p>
        </div>


        <div class="card-body">
            <p>Category: {{$wallet->category->name}}</p>
            <p class="card-text">Client: {{ $wallet->client}}</p>
            <p class="card-text">Date: {{ $wallet->date}}</p>
            <p class="card-text">address: {{ $wallet->url}}</p>
        </div>
    </div>

</div>


@endsection

