@extends('layouts.app')


@section('content')
    <h1 class="text-center text-capitalize m-3  ">Modifica il progetto</h1>

    <form class="container" action="{{ route('dashboard.wallets.update',$wallet->id) }}"
        method="post"
        enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3 d-flex flex-column gap-2">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" id="title"
                class="form-control  @error('title') is-invalid @enderror"
                placeholder="" value="{{ old('title',$wallet->title ) }}" />

            @error('title')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror


            <label for="description" class="form-label">Description</label>
            <textarea name="description" id="description" cols="60" rows="10" class=" @error('title') is-invalid @enderror">{{ old('description',$wallet->description) }}</textarea>

            @error('description')
            <div class="alert alert-danger">
                    {{ $message }}
            </div>
            @enderror


            <label for="new_image" class="form-label">Image</label>
            <input type="file" name="new_image" id="new_image" class="form-control @error('title') is-invalid @enderror" placeholder=""
                aria-describedby="helpId"  value="{{ old('new_image',$wallet->new_image )}}" />
                @error('new_image')
                <div class="alert alert-danger">
                        {{ $message }}
                </div>
                @enderror


                <div class="mb-3">
                    <label for="category_id" class="form-label">Category</label>
                    <select
                        class="form-select form-select-lg @error('category_id') is-invalid
                        @enderror"
                        name="category_id"
                        id="category_id">
                        <option selected value="">Select one</option>

                        @foreach ($categories as $element )
                            <option
                            value="{{ old('category_id',$wallet->category )}}">{{ $element->name }}</option>
                        @endforeach
                    </select>
                </div>

            <label for="client" class="form-label">Client</label>
            <input type="text" name="client" id="client" class="form-control" placeholder=""
                aria-describedby="helpId" value="{{ old('client',$wallet->client )}}" />

            <label for="date" class="form-label">Date</label>
            <input type="date" name="date" id="date" class="form-control" placeholder=""
                aria-describedby="helpId" value="{{ old('date',$wallet->date ) }}"/>
        </div>

        <button type="submit" class="btn btn-primary ">Invia</button>
    </form>
@endsection
