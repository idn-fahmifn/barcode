@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
        <div class="card mb-2">
                <div class="card-body">
                    <form action="{{route('user.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label>Nama Siswa</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Kelas</label>
                            <select name="kelas" class="form-control">
                                <option value="Pilih">Pilih</option>
                                <option value="Sepuluh">Sepuluh</option>
                                <option value="Sebelas">Sebelas</option>
                                <option value="Dua Belas">Dua Belas</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Jurusan</label>
                            <select name="jurusan" class="form-control">
                                <option value="Pilih">Pilih</option>
                                <option value="DMM">DMM</option>
                                <option value="RPL">RPL</option>
                                <option value="TKJ">TKJ</option>
                            </select>
                        </div>
                        <div class="form-group float-right">
                            <button type="submit" class="btn btn-success">Tambah Siswa</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Buku</div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <th>Barcode</th>
                                <th>Nama Siswa</th>
                                <th>Kelas</th>
                                <th>Jurusan</th>
                                <th>Pilihan</th>
                            </thead>
                            <tbody>
                                @foreach($user as $row)
                                <tr>
                                    <td>{!!DNS1D::getBarcodeHTML("$row->kode_user", 'PHARMA')!!}</td>
                                    <td>{{$row->name}}</td>
                                    <td>{{$row->kelas}}</td>
                                    <td>{{$row->jurusan}}</td>
                                    <td>
                                        <a href="#" class="btn btn-success">Pilihan</a>
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
