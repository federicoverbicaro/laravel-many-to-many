@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center text-capitalize ">Elenco dei progetti</h1>

        <a href="{{ route('dashboard.wallets.create') }}" class="btn btn-primary col-12 m-3" >Inserisci un nuovo Progetto</a>

        <table class="table">
            <thead>
                <tr class="text-center">
                    <th>ID</th>
                    <th>Titolo</th>
                    <th>Descrizione</th>
                    <th>Immagine</th>
                    <th>Azioni</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($wallets as $wallet)

                    <tr class="">
                        <td>{{ $wallet->id }}</td>

                        <td class="text-center">
                            <a href="{{ route('dashboard.wallets.show', $wallet->slug) }}" class="text-uppercase">
                                {{ $wallet->title }}
                            </a>
                        </td>

                        <td>{{ $wallet->description }}</td>
                        <td class="text-center">
                            <img src="{{asset('storage/' . $wallet->new_image ) }}" alt="Immagine del portafoglio" width="100">
                        </td>


                        <td class=" d-flex gap-2 align-items-end border-0 ">
                            <a href="{{ route('dashboard.wallets.edit',$wallet->slug) }}"type="submit"
                                class="btn btn-primary ">Edit</a>

                            <form action="{{ route('dashboard.wallets.destroy', $wallet->slug) }}" method="Post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger ">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
