@extends('layouts.admin')

@section('title')
    {{ $title }}
@endsection

@section('content')
    <form action="{{ url('/admin/questionare/') }}" method="post">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Umum</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label>Pertanyaan <sup>*</sup></label>
                            <textarea name="question" placeholder="Masukkan pertanyaan kuesioner" required class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Tipe Pertanyaan <sup>*</sup></label>
                            <select name="type" class="form-control" id="question-type" required>
                                <option value="">-- Pilih</option>
                                <option value="input">Input Text (User menginputkan jawaban)</option>
                                <option value="check">Chechbox (User memilih beberapa pilihan)</option>
                                <option value="select">Select Option (User memilih pilihan)</option>
                                <option value="radio">Radio (User memilih pilihan radio)</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Urutan <sup>*</sup></label>
                            <input type="number" required name="order" placeholder="Masukkan urutan pertanyaan yg ditampilkan" class="form-control" min="1">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6" id="options" style="display: none">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Pilihan <sup><b>*</b></sup></h3>
                    </div>
                    <div class="card-body">
                        <div class="alert alert-info">
                            <p class="mb-0">
                                Tambahkan pilihan jawaban dari pertanyaan yang diberikan!
                            </p>
                        </div>

                        <div class="options">
                            <div class="input-group mb-3 option-item" id="el-0">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Pilihan 1</span>
                                </div>
                                <input type="text" class="form-control" name="options[]" placeholder="Masukkan pilihan 1">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary" type="button" id="delete-item" style="display: none"><i class="fas fa-minus"></i></button>
                                        <button class="btn btn-outline-secondary" type="button" id="add-item"><i class="fas fa-plus"></i></button>
                                    </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Tambah</button>
        <a href="{{ route('admin.questionare.index') }}" class="btn btn-secondary">Batal</a>

    </form>
@endsection
