@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h5>Judul : {{$pertanyaan->judul}}</h5>
                    <p>{{$pertanyaan->isi}}</p>
                </div>
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    @foreach ($jawaban as $key => $jawab)
                    <div class="card my-2">
                        <div class="card-body">
                            <p class="card-text">{{$jawab->isi}}</p>
                            <a href="/jawaban/{{$jawab->id}}" class="btn btn-info btn-md">Jawaban</a>
                            <a href="/jawaban/{{$jawab->id}}/edit" class="btn btn-info btn-warning ">Edit</a>
                            <form action="/jawaban/{{$jawab->id}}" method="POST" style="display:inline">
                            @csrf
                            @method("DELETE")
                                <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                            </form>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="card-footer">
                    <a href="/jawaban/{{$pertanyaan->id}}/create" class="btn btn-primary btn-md my-2">Jawab</a>
                    <a href="/home" class="btn btn-danger btn-md my-2">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection