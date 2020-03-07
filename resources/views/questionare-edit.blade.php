@extends('layouts.admin')

@section('title')
  {{ $title }}
@endsection

@section('content')
  <form action="{{ url('/admin/questionare/'.$questionare->id) }}" method="post">
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
              <label>Pertanyaan <sup>*</sup></label>
              <textarea name="question" placeholder="Masukkan pertanyaan kuesioner" required class="form-control">{{ $questionare->question }}</textarea>
            </div>
            <div class="form-group">
              <label>Tipe Pertanyaan <sup>*</sup></label>
              <select name="type" class="form-control" required>
                <option @if($questionare->type == '') selected="selected" @endif value="">-- Pilih</option>
                <option @if($questionare->type == 'input') selected="selected" @endif value="input">Input Text (User menginputkan jawaban)</option>
                <option @if($questionare->type == 'check') selected="selected" @endif value="check">Chechbox (User memilih beberapa pilihan)</option>
                <option @if($questionare->type == 'select') selected="selected" @endif value="select">Select Option (User memilih pilihan)</option>
                <option @if($questionare->type == 'radio') selected="selected" @endif value="radio">Radio (User memilih pilihan radio)</option>
              </select>
            </div>
            <div class="form-group">
              <label>Urutan <sup>*</sup></label>
              <input type="number" required value="{{ $questionare->order }}" name="order" placeholder="Masukkan urutan pertanyaan yg ditampilkan" class="form-control" min="1">
            </div>
          </div>
        </div>
      </div>

      @if($questionare->type != 'input')
        <div class="col-md-6" id="options">
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
                  @foreach( json_decode($questionare->options) as $k => $v )
                      <div class="input-group mb-3 option-item" id="el-{{$k}}">
                          <div class="input-group-prepend">
                              <span class="input-group-text">Pilihan {{$k+1}}</span>
                          </div>
                          <input type="text" class="form-control" name="options[]" required placeholder="Masukkan pilihan {{$k+1}}" value="{{ $v }}">
                          @if($k < 1)
                          <div class="input-group-append">
                              <button class="btn btn-outline-secondary" type="button" id="delete-item"><i class="fas fa-minus"></i></button>
                              <button class="btn btn-outline-secondary" type="button" id="add-item"><i class="fas fa-plus"></i></button>
                          </div>
                          @endif
                      </div>
                  @endforeach
              </div>

            </div>
          </div>
        </div>
      @endif
    </div>

    <button type="submit" class="btn btn-primary">Update</button>
    <a href="{{ route('admin.questionare.index') }}" class="btn btn-secondary">Batal</a>

  </form>
@endsection
