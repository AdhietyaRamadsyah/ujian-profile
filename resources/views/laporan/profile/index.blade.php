@extends('layouts.cetak')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="text-center">
            <P>
                <b>
                    <h3>Profile
                        <br>
                        Jl SuryaKencana
                    </h3>
                    <hr>
                </b>
            </P>
        </div>

        @if (request('tgl_awal'))
        <small>dari tanggal {{ request('tgl_awal') }}
            sampai tanggal {{ request('tgl_akhir') }}
        </small>
        @endif

        <u>
            <h4>Laporan Profile</h4>
        </u>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Jenis Kelamin</th>
                    <th>Usia</th>
                    <th>Hobby</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($profile as $get)
                <tr>
                    <td>{{$get->nama}}</td>
                    <td>{{$get->tempat}}</td>
                    <td>{{$get->tanggal}}</td>
                    <td>{{$get->kelamin}}</td>
                    <td>{{$get->usia}}</td>
                    <td>{{$get->hoby}}</td>
                </tr>
                @empty
                <tr>
                    <td colspan="4">Data tidak ditemukan</td>
                </tr>

                @endforelse
            </tbody>
        </table>
    </div>
</div>

@endsection