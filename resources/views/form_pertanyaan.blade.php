@extends('/layouts/app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mb-4">
                <div class="card-header">
                    Form Pembuatan Pertanyaan
                </div>
                <div class="card-body">
                    <form action="/pertanyaan" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="judul">Judul Pertanyaan</label>
                            <input type="text" class="form-control" id="judul" placeholder="Judul Pertanyaan" name="judul">
                        </div>

                        <div class="form-group">
                            <label for="isi">Isi Pertanyaan</label>
                            <textarea class="form-control" id="isi" rows="5" name="isi"></textarea>
                        </div>
                        
                        <div class="form-group">
                            <label for="tag">Tag</label>
                            <input class="form-control" id="tag" name="tag" placeholder="tag">
                        </div>
                                            
                        <div class="form-group">
                            <label for="user_id">ID User</label>
                            <input type="text" class="form-control" id="user_id" placeholder="ID User" name="user_id">
                        </div>
                        

                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="/home" class="btn btn-primary">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection