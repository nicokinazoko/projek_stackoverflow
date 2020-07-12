@extends('/layouts/app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mb-4">
                <div class="card-header">
                    Form Jawaban
                </div>
                <div class="card-body">
                    <form action="/jawaban" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="isi">Jawaban</label>
                            <textarea class="form-control" id="isi" rows="5" name="isi"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="user_id">ID User</label>
                            <input type="text" class="form-control" id="user_id" value="{{$pertanyaan->user_id}}" name="user_id">
                        </div>
                        <div class="form-group">
                            <label for="pertanyaan_id">ID Pertanyaan</label>
                            <input type="text" class="form-control" id="pertanyaan_id" value="{{$pertanyaan->id}}" name="pertanyaan_id">
                        </div>                        
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="/jawaban/{{$pertanyaan->id}}" class="btn btn-danger">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection