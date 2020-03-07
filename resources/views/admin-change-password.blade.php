@extends('layouts.admin')

@section('title')
    {{$title}}
@endsection

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    @if(session()->has('password'))
                        <div class="alert alert-success">
                            {{session()->get('password')}}
                        </div>
                    @endif
                    <form action="{{route('admin.change.password')}}" id="formSubmit" method="post">
                        @csrf
{{--                        <div class="form-group">--}}
{{--                            <label>Password Lama</label>--}}
{{--                            <input type="password" required name="old_password" class="form-control" placeholder="Masukkan password lama">--}}
{{--                            <div class="invalid-feedback">--}}
{{--                                Please provide a valid city.--}}
{{--                            </div>--}}
{{--                        </div>--}}
                        <div class="form-group">
                            <label>Password Baru</label>
                            <input type="password" required name="new_password" id="new_password" class="form-control" placeholder="Masukkan password baru">
                        </div>
                        <div class="form-group">
                            <label>Ulangi Password Baru</label>
                            <input type="password" id="new_password_confirmation" required name="new_password_confirmation" placeholder="Masukkan lagi password baru" class="form-control">
                        </div>
                        <button type="button" onclick="formValidate()" class="btn btn-primary">Ubah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('custom-scripts')
    <script>
        function formValidate(){
            let new_password = $('#new_password').val()
            let new_password_confirmation = $('#new_password_confirmation').val()

            if(new_password != new_password_confirmation) {
                alert('Password baru dan password konfirmasi tidak sesuai.')
                return;
            }else{
                $('#formSubmit').submit()
            }
        }
    </script>
@endsection
