@extends('layouts.admin')

@section('title')
    {{ $title }}
@endsection

@section('content')
    <form action="{{ url('/admin/article/') }}" method="post">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Umum</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" name="title" required placeholder="Masukkan judul artikel" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Konten</label>
                            <textarea name="contents" id="ckeditor" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Deskripsi Pendek</label>
                            <input type="text" name="short" required placeholder="Masukkan deskripsi pendek" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Tambah</button>
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
