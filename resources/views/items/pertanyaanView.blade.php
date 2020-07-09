@extends('/layouts/master');

@section('content')
<a href="/pertanyaan/create" class="btn btn-primary">Input Baru</a>
{{-- <a href="/" class="btn btn-primary">ERD</a> --}}
<br>
@foreach ($pertanyaan as $key => $question)

<div class="card shadow mb-4">
    <!-- Card Body -->
    <div class="card-body">
      <h2>Judul : {{$question->nama_pertanyaan}}</h2>
      <a href="/pertanyaan/{{$question->id_pertanyaan}}" class="btn btn-primary">Detail</a>
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




