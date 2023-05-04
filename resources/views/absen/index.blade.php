@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card mb-2">
                <div class="card-body">
                    <form action="{{route('absen.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label>Silakan Scan</label>
                            <input type="text" name="id_user" class="form-control">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Rekap Absen</div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <th>Nama Siswa</th>
                                <th>Masuk</th>
                                <th>Pilihan</th>
                            </thead>
                            <tbody>
                                @foreach($absen as $row)
                                <tr>
                                    <td>
                                        {{$row->users->name}}
                                    </td>
                                    <td>
                                        {{$row->tanggal}}
                                    </td>
                                    <td>
                                        <span class="badge badge-success">Hadir</span>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
