@extends('/layouts/master');

@section('content')
<a href="/artikel/create" class="btn btn-primary">Input Baru</a>
<a href="/" class="btn btn-primary">ERD</a>
<br>
@foreach ($user as $key => $users)

<div class="card shadow mb-4">
    <!-- Card Body -->
    <div class="card-body">
      <h2>Judul : {{$users->nama_user}}</h2>
      <a href="/artikel/{{$users->id_user}}" class="btn btn-primary">Detail</a>
      <a href="/artikel/{{$users->id_user}}/update" class="btn btn-primary">Update</a>
      <form action="/artikel/{{$users->id_user}}" method="post" style="display: inline">
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




