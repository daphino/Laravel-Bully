@extends('layouts.admin')

@section('title')
    {{ $title }}
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <a href="{{route('admin.psychiatrist.create')}}" class="float-left btn btn-primary mr-2 btn-sm">Tambah</a>
            <button type="button" onclick="confirmDelete('*', '/admin/psychiatrist/delete/all');" class="float-left btn btn-danger btn-sm">Hapus Semua</button>
            <table class="datatable table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Profile</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>No.HP</th>
                        <th>Gaji</th>
                        <th>Nama Bank</th>
                        <th>No. Rek</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($psychiatrists as $index => $item)
                        <tr>
                            <td>{{$index + 1}}</td>
                            <td>
                                <img src="{{$item->profile_img}}" alt="{{$item->name}}" style="max-width: 100px;">
                            </td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->email}}</td>
                            <td>{{$item->phone}}</td>
                            <td>{{$item->salary}}</td>
                            <td>{{$item->bank_name}}</td>
                            <td>{{$item->bank_number}}</td>
                            <td>{{$item->status}}</td>
                            <td>
                                <a href="{{ url('admin/psychiatrist/'.$item->id.'/edit') }}" class="btn btn-xs btn-primary"><i class="fas fa-edit"></i></a>
                                <button type="button" onclick="confirmDelete({{ $item->id }}, '/admin/psychiatrist/');" class="btn btn-xs btn-danger"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>#</th>
                        <th>Profile</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>No.HP</th>
                        <th>Gaji</th>
                        <th>Nama Bank</th>
                        <th>No. Rek</th>
                        <th>Statusk</th>
                        <th>Aksik</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
@endsection
