@extends('layouts.admin')

@section('title')
    {{ $title }}
@endsection

@section('content')
    <form action="{{ url('/admin/psychiatrist/') }}" method="post">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Info</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label>Nama Lengkap <sup>*</sup></label>
                            <input type="text" class="form-control" required name="name" placeholder="Masukkan nama lengkap (beserta title)">
                        </div>
                        <div class="form-group">
                            <label>Alamat Email <sup>*</sup></label>
                            <input type="email" name="email" class="form-control" placeholder="Masukkan alamat email" required>
                        </div>
                        <div class="form-group">
                            <label>No HP <sup>*</sup></label>
                            <input type="text" name="phone" class="form-control" placeholder="Masukkan nomor handphone" required>
                        </div>
                        <div class="form-group">
                            <label>Password <sup>*</sup></label>
                            <input type="text" name="password" class="form-control" readonly value="{{$password}}">
                            <small>Harap catat password untuk login psikiater. (Selanjutnya password akan di update oleh ybs.)</small>
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
                            <input type="number" min="0" name="salary" class="form-control" placeholder="Masukkan gaji per 1 kasus yg di selesaikan" required>
                        </div>
                        <div class="form-group">
                            <label>Nama Bank Psikiater <sup>*</sup></label>
                            <input type="text" name="bank_name" class="form-control" placeholder="Masukkan nama bank" required>
                        </div>
                        <div class="form-group">
                            <label>Nomor Rekening <sup>*</sup></label>
                            <input type="text" name="bank_number" class="form-control" placeholder="Masukkan nomor rekening" required>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Tambah</button>
        <a href="{{ route('admin.psychiatrist.index') }}" class="btn btn-secondary">Batal</a>

    </form>
@endsection
