@extends('layouts.admin')

@section('title')
    {{ $title }}
@endsection

@section('content')
    <form action="{{ url('/admin/article/'.$article->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Umum</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" name="title" value="{{$article->title}}" required placeholder="Masukkan judul artikel" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Konten</label>
                            <textarea name="contents" id="ckeditor" class="form-control">{{$article->contents}}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Deskripsi Pendek</label>
                            <input type="text" name="short" value="{{$article->short}}" required placeholder="Masukkan deskripsi pendek" class="form-control">
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('admin.article.index') }}" class="btn btn-secondary">Batal</a>

    </form>
@endsection

@section('custom-scripts')
    <script>
        CKEDITOR.replace( 'ckeditor',{
            filebrowserUploadUrl: "{{route('admin.article.picture.upload', ['_token' => csrf_token() ])}}",
            filebrowserUploadMethod: 'form'
        } );
    </script>
@endsection
