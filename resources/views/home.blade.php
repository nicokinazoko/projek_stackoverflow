@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <p>You are logged in!</p>
                    <a href="/pertanyaan/create" class="btn btn-primary btn-md my-2">Create Pertanyaan</a>
                    @foreach ($pertanyaan as $key => $tanya)
                    <div class="card my-2">
                        <div class="card-body">
                            <h5 class="card-title">Judul : {{$tanya->judul}}</h5>
                            <p class="card-text">{{$tanya->isi}}</p>
                            <p >#{{$tanya->tag}}</p>
                            <a href="" class="btn btn-info btn-md">Jawaban</a>
                            <a href="" class="btn btn-info btn-warning ">Edit</a>
                            <form action="" method="POST" style="display:inline">
                                <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                            </form>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection