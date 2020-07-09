@extends('/layouts/master')

@section('content')
<div class="card mb-4">
    <div class="card-header">
      Form Pembuatan Pertanyaan
    </div>
    <div class="card-body">
        <form action="#" method="POST">
            @csrf
            <div class="form-group">
                <label for="nama_pertanyaan">Judul Pertanyaan</label>
                <input type="text" class="form-control" id="nama_pertanyaan" placeholder="Judul Pertanyaan" name="nama_pertanyaan">
            </div>

            <div class="form-group">
              <label for="isi_pertanyaan">Isi Pertanyaan</label>
              <textarea class="form-control" id="isi_pertanyaan" rows="5" name="isi_pertanyaan"></textarea>
            </div>

            <div class="form-group">
                <label for="id_user">ID User</label>
                <input type="text" class="form-control" id="id_user" placeholder="ID User" name="id_user">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="/pertanyaan" class="btn btn-primary">Kembali</a>
        </form>
    </div>
  </div>
@endsection
