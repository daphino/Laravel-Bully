@extends('layouts.admin')

@section('title')
    {{$title}}
@endsection

@section('content')
    <div class="row">
        <div class="col-md-3">
            <div class="card card-primary card-outline">
                <div class="card-body box-profile">
                    <div class="text-center">
                        <img class="profile-user-img img-fluid img-circle" src="{{ asset('bower_components/admin-lte/dist/img/user2-160x160.jpg') }}" alt="User profile picture">
                    </div>
                    <h3 class="profile-username text-center">{{auth()->user()->name}}</h3>
                    <p class="text-muted text-center">Super Admin</p>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Aktifitas</h3>
                </div>
                <div class="card-body">
                    <div class="text-center">
                        <small>Tidak ada aktifitas.</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
