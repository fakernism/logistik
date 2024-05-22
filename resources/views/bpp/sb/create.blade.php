@extends('layout.templateBpp')
@section('content')

<div class="page-content">
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/bpp-sb">BPP</a></li>
            <li class="breadcrumb-item"><a href="/bpp-sb">Sambungan Baru</a></li>
            <li class="breadcrumb-item active" aria-current="page">Tambah</li>
        </ol>
    </nav>
    <form class="cmxform" action="/bpp-sb-store" method="POST" enctype="multipart/form-data">
        @csrf
        <fieldset>
            <div class="row">
                <div class="col-lg-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Form Tambah BPP Sambungan Baru (SB)</h4>
                            {{-- <p class="card-description">Read the <a href="https://jqueryvalidation.org/" target="_blank"> Official jQuery Validation Documentation </a>for a full list of instructions and other options.</p> --}}
                                    <div class="form-group">
                                        <label for="nobppsb">Nomor BPP SB</label>
                                        <input id="nobppsb" class="form-control" name="nobppsb" type="text" value="{{ $kd.'/BPP/'.date('m').'/'.date('Y') }}" readonly>
                                        @error('nobppsb') <span
                                                            class="text-danger small">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="nosamb">No. Sambung</label>
                                        <input id="nosamb" class="form-control" name="nosamb" type="text">
                                        @error('nosamb') <span
                                                            class="text-danger small">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="namapel">Nama Pelanggan</label>
                                        <input id="namapel" class="form-control" name="namapel" type="text">
                                        @error('namapel') <span
                                                            class="text-danger small">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="alamatpel">Alamat</label>
                                        <input id="alamatpel" class="form-control" name="alamatpel" type="text">
                                    </div>
                                    <div class="form-group">
                                        <label for="clampsaddleUk">Clamp Saddle Ukuran</label>
                                        <input id="clampsaddleUk" class="form-control" name="clampsaddleUk" type="text">
                                    </div>
                                    <div class="form-group">
                                        <label for="created_at">Tanggal</label>
                                        <input class="form-control date datepicker" id="created_at" name="created_at" value="{{ date("d-m-Y") }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="diterima">Diterima</label>
                                        <input id="diterima" class="form-control" name="diterima" type="text">
                                    </div>

                                    <input class="btn btn-primary" type="submit" value="Submit">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">List Barang</h4>
                            <div id="container-barang">
                                <div class="form-group form-barang">
                                    <label for="barang">Nama Barang</label>
                                    <div class="row">
                                        <div class="col-lg-1">
                                            <button type="button" class="btnremove btn btn-danger">X</button>
                                        </div>
                                        <div class="col-lg-7">
                                            <select name="barang[]" id="satuan" class="js-example-basic-single">
                                                <option>Pilih Barang</option>
                                            @foreach ($barang as $br)
                                                <option value="{{ $br->type }}">{{ $br->namabarang }}</option>
                                            @endforeach
                                            </select>
                                        </div>
                                        <div class="col-lg-2">
                                            <input class="form-control" name="barang_qty[]" type="number" value="0" min="0">
                                        </div>
                                        <div class="col-lg-2">
                                            <button type="button" class="btnadd btn btn-success">+</button>
                                        </div>
                                    </div>
                                    @error('barang') <span class="text-danger small">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            {{-- <form class="cmxform" action="/bpp-sb-store" method="POST" enctype="multipart/form-data">
                                @csrf
                                <fieldset> --}}
                        </div>
                    </div>
                </div>

            </div>
        </fieldset>
    </form>

</div>


@endsection
