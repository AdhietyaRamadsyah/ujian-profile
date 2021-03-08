@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <a href="{{route('profile.formulir')}}" class="btn btn-info">Tambahkan Profile</a>
                        </div>
                        <div>
                            <form action="{{route('laporan.profile')}}" method="GET">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="date" name="" class="form-control" id="">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="date" name="" class="form-control" id="">
                                        </div>
                                    </div>
                                    <div>
                                        <button class="btn btn-info"> Cari data profile terkini </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Tempat Lahir</th>
                                <th>Tanggal Lahir</th>
                                <th>Jenis Kelamin</th>
                                <th>Usia</th>
                                <th>Hobby</th>
                                <th>Options</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($profiles as $profile)
                            <tr>
                                <td>{{$profile->nama}}</td>
                                <td>{{$profile->tempat}}</td>
                                <td>{{$profile->tanggal}}</td>
                                <td>{{$profile->kelamin}}</td>
                                <td>{{$profile->usia}}</td>
                                <td>{{$profile->hoby}}</td>
                                <td>
                                    <form action="{{route('profile.delete', $profile->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{route('profile.edit',$profile->id)}}" class="btn btn-outline-warning btn-sm">Edit</a>
                                        <a href="{{route('profile.show',$profile->id)}}" class="btn btn-outline-primary btn-sm">Detail</a>
                                        <button class="btn btn-outline-danger btn-sm">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        @endsection