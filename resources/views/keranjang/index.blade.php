@extends('layouts.app')

@section('content')

@if(session('success'))
    <p class="alert alert-success">{{ session('success') }}</p>
@endif

<div id="wrapper">

    <div id="content-wrapper" class="d-flex flex-column">

        <div id="content">

            <div class="container-fluid">

                <h1 class="h3 mb-4 text-gray-800">Tabel Data</h1>

                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-success">Penghargaan Akademi Oscar 2024</h6>
                    </div>
                    <div class="card-body">
                        <a class="btn btn-success mb-3" href="{{ route('keranjang.create') }}">Tambah Data</a>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Nama Barang</th>
                                        <th>Jumlah</th>
                                        <th>Alamat</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($keranjang as $keranjang)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $keranjang->nama }}</td>
                                        <td>{{ $keranjang->nm_barang }}</td>
                                        <td>{{ $keranjang->jumlah }}</td>
                                        <td>{{ $keranjang->alamat }}</td>
                                        <td>
                                            <a class="btn btn-sm btn-primary" href="{{ route('keranjang.edit', $keranjang->id) }}">Edit</a>
                                            <!-- Tombol Hapus yang memicu modal -->
                                            <button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#deleteModal{{ $keranjang->id }}">Hapus</button>
                                            
                                            <!-- Modal Konfirmasi Hapus -->
                                            <div class="modal fade" id="deleteModal{{ $keranjang->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Hapus</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            Apakah Anda yakin ingin menghapus data ini? Data yang dihapus tidak dapat dikembalikan.
                                                        </div>
                                                        <div class="modal-footer">
                                                            <form action="{{ route('keranjang.destroy', $keranjang->id) }}" method="POST" style="display: inline-block;">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                                                <button type="submit" class="btn btn-danger">Hapus</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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

</div>

@endsection
