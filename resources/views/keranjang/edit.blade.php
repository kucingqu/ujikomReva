@extends('layouts/app')
@section('content')
        @if ($errors->any())
        @foreach($errors->all() as $err)
        <p class="alert alert-danger">{{$err}}</p>
        @endforeach
        @endif
        <form action ="{{url('keranjang/'.$data->id)}}" method="post" >
@csrf
@method('PUT')
<div class="row">
    <div class="col-12">
    <div class="card-shadow mb-4">
                <div class="card-header py-3">
                    <h6>Tambahkan Pesanan Anda</h6>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label>Nama: <span class="text-danger"> * </label>
                        <input type="text" class="form-control" name="nama" value="{{$data->nama}}"><br>
                        <label>Nama Barang: <span class="text-danger"> * </label>
                        <select name="nm_barang" class="custom-select">
                            <option value="" selected disabled hidden>--Pilih Barang--</option>
                            <option value="Cengkih kering" {{$data->nm_barang == 'Cengkih kering' ? 'selected': ''}}>Cengkih kering</option>
                            <option value="Cengkih" {{$data->nm_barang == 'Cengkih' ? 'selected': ''}}>Cengkih</option>
                            <option value="Vanili kering" {{$data->nm_barang == 'Vanili kering' ? 'selected': ''}}>Vanili Kering</option>
                            <option value="Vanili" {{$data->nm_barang == 'Vanili' ? 'selected': ''}}>Vanili</option>
                            <option value="Kapulaga kering" {{$data->nm_barang == 'Kapulaga kering' ? 'selected': ''}}>Kapulaga Kering</option>
                            <option value="Kapulaga" {{$data->nm_barang == 'Kapulaga' ? 'selected': ''}}>Kapulaga</option>
                            <option value="Mahkota dewa" {{$data->nm_barang == 'Mahkota dewa' ? 'selected': ''}}>Mahkota Dewa</option>
                            <option value="Kemiri" {{$data->nm_barang == 'Kemiri' ? 'selected': ''}}>Kemiri</option>

</select><br>
<label>Alamat: <span class="text-danger"> * </label>
<textarea class="form-control" name="alamat"> {{$data->alamat}}</textarea>
                        <label>Jumlah: <span class="text-danger"> * </label>
                        <input type="number" class="form-control" name="jumlah" value="{{$data->jumlah}}"><br>
                       
</div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-success">Simpan</button>
                    <a class="btn btn-danger" href="{{route('keranjang.index')}}">Kembali</a>
                </div>
            </div>
    </div>
</div>
@endsection