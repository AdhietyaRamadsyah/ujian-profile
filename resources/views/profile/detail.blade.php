@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card border-0 shadow">
                <div class="card-body">
                    <h4>Cek Profile</h4>
                    <p>Menampilkan Detail Profile</p>
                    <table class="table table-striped">
                        <tbody>
                            <tr>
                                <td>Nama</td>
                                <td>{{$profile->nama}}</td>
                            </tr>
                            <tr>
                                <td>Tempat Lahir</td>
                                <td>{{$profile->tempat}}</td>
                            </tr>
                            <tr>
                                <td>Tanggal Lahir</td>
                                <td>{{$profile->tanggal}}</td>
                            </tr>
                            <tr>
                                <td>Jenis Kelamin</td>
                                <td>{{$profile->kelamin}}</td>
                            <tr>
                                <td>Usia</td>
                                <td>{{$profile->usia}}</td>
                            <tr>
                                <td>Hoby</td>
                                <td>{{$profile->hoby}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection