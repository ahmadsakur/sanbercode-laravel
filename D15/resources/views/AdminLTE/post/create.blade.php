@extends('AdminLTE.master')
@section('content')
<br>
<h2 class="text-center">Buat Pertanyaan</h2>
<div class="container">
   <div class="row justify-content-center">
      <div class="col-6">
         <form action="/pertanyaan" method="POST">
            @csrf
            <div class="form-group">
               <label for="judul">Judul</label>
               <input type="text" class="form-control" id="judul" value="{{old('judul' , '')}}" name="judul"
                  placeholder="CRUD Laravel">
               @error('judul')
               <div class="alert alert-danger">{{ $message }}</div>
               @enderror
            </div>
            <div class="form-group">
               <label for="pertanyaan">Pertanyaan</label>
               <input type="text" class="form-control" id="pertanyaan" value="{{old('pertanyaan' , '')}}"
                  name="pertanyaan" placeholder="Kenapa tugasnya banyak ?">
               @error('pertanyaan')
               <div class="alert alert-danger">{{ $message }}</div>
               @enderror
            </div>
            <button type="submit" class="btn btn-primary">Buat Pertanyaan</button>
         </form>
      </div>
   </div>
</div>
@endsection