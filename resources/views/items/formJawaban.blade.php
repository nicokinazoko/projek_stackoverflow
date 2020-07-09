@extends('/layouts/master')

@section('content')
<div class="card mb-4">
    <div class="card-header">
      Form Pembuatan Jawaban
    </div>
    <div class="card-body">
        <form action="#" method="POST">
            @csrf
            <div class="form-group">
                <label for="nama_pertanyaan">Judul Pertanyaan</label>
                <input type="text" class="form-control" id="nama_pertanyaan" placeholder="Judul Pertanyaan" name="nama_pertanyaan">
            </div>

            <div class="form-group">
              <label for="isi_jawaban">Isi Jawaban</label>
              <textarea class="form-control" id="isi_jawaban" rows="5" name="isi_jawaban"></textarea>
            </div>

            <div class="form-group">
                <label for="id_pertanyaan">ID Pertanyaan</label>
                <input type="text" class="form-control" id="id_pertanyaan" placeholder="ID User" name="id_pertanyaan">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="/jawaban" class="btn btn-primary">Kembali</a>
        </form>
    </div>
  </div>
@endsection
