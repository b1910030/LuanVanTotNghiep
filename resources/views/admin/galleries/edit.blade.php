@extends('admin.layout')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Cập nhật hình ảnh</h1>
    </div>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

<!-- Content Row -->
        <div class="card shadow">
            <div class="card-body">
                <form action="{{ route('admin.tours.galleries.update', [$tour,$gallery]) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="path">Image</label>
                        @if($gallery->path)
                            <div>
                                <img width="100" src="/backend/img/{{ $tour->galleries->first()->path }}">
                            </div>
                        @endif

                        <input type="file" class="form-control" id="path" name="path" value="{{ $gallery->path }}" />
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Save Image</button>
                </form>
            </div>
        </div>
    

    <!-- Content Row -->

</div>
@endsection