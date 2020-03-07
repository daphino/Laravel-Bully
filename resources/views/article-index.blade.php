@extends('layouts.admin')

@section('title')
    {{ $title }}
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <a href="{{route('admin.article.create')}}" class="float-left btn btn-primary mr-2 btn-sm">Tambah</a>
            <button type="button" onclick="confirmDelete('*', '/admin/article/delete/all');" class="float-left btn btn-danger btn-sm">Hapus Semua</button>
            <table class="datatable table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Short</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($articles as $index=>$item)
                        <tr>
                            <td>{{$index+1}}</td>
                            <td>{{$item->title}}</td>
                            <td>{{$item->short}}</td>
                            <td>
                                <a href="{{ url('admin/article/'.$item->id.'/edit') }}" class="btn btn-xs btn-primary"><i class="fas fa-edit"></i></a>
                                <button type="button" onclick="confirmDelete({{ $item->id }}, '/admin/article/');" class="btn btn-xs btn-danger"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Short</th>
                        <th>Aksi</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
@endsection
