@extends('layouts.admin')

@section('title')
  {{ $title }}
@endsection

@section('content')
  <div class="card">
    <div class="card-body">
      <a href="{{route('admin.questionare.create')}}" class="float-left btn btn-primary mr-2 btn-sm">Tambah</a>
      <button type="button" onclick="confirmDelete('*', '/admin/questionare/delete/all');" class="float-left btn btn-danger btn-sm">Hapus Semua</button>
      <table class="datatable table table-bordered table-striped">
        <thead>
          <tr>
            <th>#</th>
            <th>Pertanyaan</th>
            <th>Tipe</th>
            <th>Pilihan</th>
            <th>Urutan</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          @foreach($questionares as $index => $value)
            <tr>
              <td>{{ $index+1 }}</td>
              <td>{{ $value->question }}</td>
              <td>{{ $value->type }}</td>
              <td>
                @if( !json_decode($value->options) )
                  -
                @endif
                <ol class="pl-2">
                    @if($value->options)
                        @foreach( json_decode($value->options) as $item )
                            <li>{{ $value->options }}</li>
                        @endforeach
                    @else
                      <li>-</li>
                    @endif
                </ol>
              </td>
              <td>{{ $value->order }}</td>
              <td>
                <a href="{{ url('admin/questionare/'.$value->id.'/edit') }}" class="btn btn-xs btn-primary"><i class="fas fa-edit"></i></a>
                <button type="button" onclick="confirmDelete({{ $value->id }}, '/admin/questionare/');" class="btn btn-xs btn-danger"><i class="fas fa-trash"></i></button>
              </td>
            </tr>
          @endforeach
        </tbody>
        <tfoot>
          <tr>
            <th>#</th>
            <th>Pertanyaan</th>
            <th>Tipe</th>
            <th>Pilihan</th>
            <th>Urutan</th>
            <th>Aksi</th>
          </tr>
        </tfoot>
      </table>
    </div>
  </div>
@endsection
