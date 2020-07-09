@extends('/layouts/master');

@section('content')
<a href="/jawaban/create" class="btn btn-primary">Input Baru</a>
<br>
@foreach ($jawaban as $key => $answer)

<div class="card shadow mb-4">
    <!-- Card Body -->
    <div class="card-body">
      <h2>Judul : {{$question->nama_pertanyan}}</h2>
      <a href="/artikel/{{$question->id_pertanyaan}}" class="btn btn-primary">Detail</a>
      <a href="/artikel/{{$question->id_pertanyaan}}/update" class="btn btn-primary">Update</a>
      <form action="/artikel/{{$question->id_pertanyaan}}" method="post" style="display: inline">
        @csrf
        @method('DELETE')
            <button type="submit" class="btn btn-sm-danger">
            <i class="fas fa-trash"></i>
            </button>
        </form>
    </div>
  </div>
@endforeach

@endsection

@push('scripts')
<script>
    Swal.fire({
        title: 'Berhasil!',
        text: 'Memasangkan script sweet alert',
        icon: 'success',
        confirmButtonText: 'Cool'
    })
</script>
@endpush




