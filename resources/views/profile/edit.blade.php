@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <form action="{{route('profile.update', $profile->id)}}" method="post">
                            @csrf
                            @method('PATCH')
                            <div class="form-group">
                                <label for="nama"> Nama </label>
                                <input type="text" name="nama" id="nama" class="form-control" value="{{$profile->nama}}">
                            </div>
                            <div class="form-group">
                                <label for="tempat"> Tempat lahir</label>
                                <input type="text" name="tempat" id="tempat" class="form-control" value="{{$profile->tempat}}">
                            </div>
                            <div class="form-group">
                                <label for="tanggal"> Tanggal lahir</label>
                                <input type="text" name="tanggal" id="tanggal" class="form-control" value="{{$profile->tanggal}}">
                            </div>
                            <div class="form-group">
                                <label for="kelamin"> Jenis Kelamin</label>
                                <input type="text" name="kelamin" id="kelamin" class="form-control" value="{{$profile->kelamin}}">
                            </div>
                            <div class="form-group">
                                <label for="usia"> Usia</label>
                                <input type="text" name="usia" id="usia" class="form-control" value="{{$profile->usia}}">
                            </div>
                            <div class="form-group">
                                <label for="hoby"> Hoby</label>
                                <input type="text" name="hoby" id="hoby" class="form-control" value="{{$profile->hoby}}">
                            </div>
                                <button class="btn btn-outline-info btn-block">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection