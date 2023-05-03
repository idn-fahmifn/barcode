@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
        <div class="card mb-2">
                <div class="card-body">
                    <form action="{{route('buku.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label>Judul Buku</label>
                            <input type="text" name="judul" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Pengarang</label>
                            <input type="text" name="pengarang" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Jumlah Halaman</label>
                            <input type="number" name="jumlah_halaman" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Stok</label>
                            <input type="number" name="stok" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Scan / Masukan kode buku</label>
                            <input type="number" name="kode_buku" class="form-control">
                        </div>
                        <div class="form-group float-right">
                            <button type="submit" class="btn btn-success">Tambah Buku</button>
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
                                <th>Judul Buku</th>
                                <th>Pengarang</th>
                                <th>Pilihan</th>
                            </thead>
                            <tbody>
                                @foreach($buku as $row)
                                <tr>
                                    <td>{!!DNS1D::getBarcodeHTML("$row->kode_buku", 'PHARMA')!!}</td>
                                    <td>{{$row->judul}}</td>
                                    <td>{{$row->pengarang}}</td>
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
