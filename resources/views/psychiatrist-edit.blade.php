@extends('layouts.admin')

@section('title')
    {{ $title }}
@endsection

@section('content')
    <form action="{{ url('/admin/psychiatrist/'.$psy->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Info</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label>Nama Lengkap <sup>*</sup></label>
                            <input type="text" class="form-control" required name="name" value="{{$psy->name}}" placeholder="Masukkan nama lengkap (beserta title)">
                        </div>
                        <div class="form-group">
                            <label>Alamat Email <sup>*</sup></label>
                            <input type="email" name="email" value="{{$psy->email}}" class="form-control" placeholder="Masukkan alamat email" required>
                        </div>
                        <div class="form-group">
                            <label>No HP <sup>*</sup></label>
                            <input type="text" name="phone" value="{{$psy->phone}}" class="form-control" placeholder="Masukkan nomor handphone" required>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Gaji</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label>Gaji <sup>*</sup></label>
                            <input type="number" min="0" name="salary" value="{{$psy->salary}}" class="form-control" placeholder="Masukkan gaji per 1 kasus yg di selesaikan" required>
                        </div>
                        <div class="form-group">
                            <label>Nama Bank Psikiater <sup>*</sup></label>
                            <input type="text" name="bank_name" value="{{$psy->bank_name}}" class="form-control" placeholder="Masukkan nama bank" required>
                        </div>
                        <div class="form-group">
                            <label>Nomor Rekening <sup>*</sup></label>
                            <input type="text" name="bank_number" value="{{$psy->bank_number}}" class="form-control" placeholder="Masukkan nomor rekening" required>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('admin.psychiatrist.index') }}" class="btn btn-secondary">Batal</a>

    </form>
@endsection
