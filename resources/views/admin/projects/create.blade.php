@extends('layouts.admin')

@section('content')
    <h1 class="text-center">Crea un progetto</h1>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{route('adminprojects.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="title" class="form-label">Titolo</label>
          <input type="text" class="form-control" id="title" name="title" value="{{old('title')}}">
        </div>
        <div class="mb-3">
            <label for="client_name" class="form-label">Client name</label>
            <input type="text" class="form-control" id="client_name" name="client_name" value="{{old('client_name')}}" >
        </div>
        <div class="mb-3">
            <label for="cover_image" class="form-label">Image</label>
            <input class="form-control" type="file" id="formFile" name="cover_image">
        </div>
        <div class="mb-3">
            <label for="summary" class="form-label">Summary</label>
            <textarea class="form-control" id="summary"  name="summary" rows="10">{{old('summary')}}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
@endsection