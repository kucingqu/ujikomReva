@extends('layouts/app')

@section('content')
<div class="row">
    <div class="col-md-6">
        @if ($errors->any())
            @foreach($errors->all() as $err)
                <p class="alert alert-danger">{{ $err }}</p>
            @endforeach
        @endif
    </div>
</div>

<form action="{{ route('keranjang.store') }}" method="post">
    @csrf
    <div class="row">
        <div class="col">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6>Tambahkan Pesanan Anda</h6>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label>Nama: <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="nama" value="{{ old('nama') }}"><br>

                        <label>Nama Barang: <span class="text-danger">*</span></label>
                        <select name="nm_barang" class="custom-select">
                            <option value="" selected disabled hidden>--Pilih Barang--</option>
                            <option value="Cengkih kering" {{ old('nm_barang') == 'Cengkih kering' ? 'selected' : '' }}>Cengkeh Kering</option>
                            <option value="Cengkih" {{ old('nm_barang') == 'Cengkih' ? 'selected' : '' }}>Cengkeh</option>
                            <option value="Vanili kering" {{ old('nm_barang') == 'Vanili kering' ? 'selected' : '' }}>Vanili Kering</option>
                            <option value="Vanili" {{ old('nm_barang') == 'Vanili' ? 'selected' : '' }}>Vanili</option>
                            <option value="Kapulaga kering" {{ old('nm_barang') == 'Kapulaga kering' ? 'selected' : '' }}>Kapulaga Kering</option>
                            <option value="Kapulaga" {{ old('nm_barang') == 'Kapulaga' ? 'selected' : '' }}>Kapulaga</option>
                            <option value="Mahkota Dewa" {{ old('nm_barang') == 'Mahkota Dewa' ? 'selected' : '' }}>Mahkota Dewa</option>
                            <option value="Tanaman Kapulaga" {{ old('nm_barang') == 'Tanaman Kapulaga' ? 'selected' : '' }}>Tanaman Kapulaga</option>
                            <option value="Kemiri" {{ old('nm_barang') == 'Kemiri' ? 'selected' : '' }}>Kemiri</option>
                        </select><br>

                        <label>Jumlah: <span class="text-danger">*</span></label>
                        <input type="number" class="form-control" name="jumlah" value="{{ old('jumlah') }}"><br>

                        <label>Alamat: <span class="text-danger">*</span></label>
                        <textarea class="form-control" name="alamat">{{ old('alamat') }}</textarea>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-success">Simpan</button>
                    <a class="btn btn-danger" href="{{ route('keranjang.index') }}">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection
