@extends('layout.template')

@section('content')

<div class="page-content">
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="masuk">Transaksi</a></li>
            <li class="breadcrumb-item active" aria-current="page">Barang Masuk</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-xl-12 main-content">
            {{-- <h1 class="page-title">Data Barang</h1>
            <hr> --}}
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div class="col-lg-3 pl-0 mb-2">
                            <a onClick="addBarangMasuk()" href="javascript:void(0)" class="btn btn-primary btn-icon-text">
                                <i class="btn-icon-prepend" data-feather="plus-circle"></i>
                                Tambah Data
                            </a>
                        </div>
                        <div class="col-lg-3 pr-0">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                <div class="input-group-text" id="btnGroupAddon2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                                </div>
                                </div>
                                <input type="text" id="search-barangMasuk" class="form-control" placeholder="Search" aria-label="Input group example" aria-describedby="btnGroupAddon2">
                            </div>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-hover table-bordered" id="barangMasuk">
                            <thead>
                                <tr class="text-center">
                                    <th>No</th>
                                    <th>Kode</th>
                                    <th>Tanggal</th>
                                    <th>Barang</th>
                                    <th>Masuk</th>
                                    <th>Harga (Rp)</th>
                                    <th>Total (Rp)</th>
                                    <th>Lampiran</th>
                                    <th>Role</th>
                                </tr>
                            </thead>
                        </table>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>

{{-- Start Modal --}}

<div class="modal fade" id="barangMasuk-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Barang Masuk</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="javascript:void(0)" id="barangMasukForm" name="barangMasukForm" class="form-horizontal" method="POST" enctype="multipart/form-data">
            <div class="modal-body">
                <input type="hidden" name="id" id="id">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="barang" class="col-form-label">Barang</label>
                            <select name="kodebarang" id="kodebarang" class="js-example-basic-single" style="width: 100%">
                                <option>Pilih Barang</option>
                                @foreach ($barang as $br)
                                    <option value="{{ $br->kodebarang }}">{{ $br->kodebarang }} - {{ $br->namabarang }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="harga" class="col-form-label">Harga</label>
                            <input class="form-control" id="harga" name="harga" placeholder="Harga" maxlength="50" required="" readonly>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="jumlah_masuk" class="col-form-label">Jumlah Masuk</label>
                            <input class="form-control" id="jumlah_masuk" name="jumlah_masuk" placeholder="Jumlah Masuk" maxlength="50" required="">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="created_at" class="col-form-label">Tanggal</label>
                            <input class="form-control date datepicker" id="created_at" name="created_at" value="{{ date("d-m-Y") }}" maxlength="50" required="">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="stok" class="col-form-label">Stok Sekarang</label>
                            <div class="input-group">
                                <input type="text" id="stok" name="stok" class="form-control" readonly>
                                <div id="spansatuan" class="input-group-append">
                                    {{-- <span class="input-group-text text-dark">Buah</span> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="total_stok" class="col-form-label">Total</label>
                            <input class="form-control" id="total_stok" name="total_stok" maxlength="50" required="" readonly>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="lampiran" class="col-form-label">Lampiran</label>
                            <input class="form-control" id="lampiran" name="lampiran" placeholder="Lampiran" maxlength="50" required="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary" id="btn-save">Simpan</button>
            </div>
        </form>
      </div>
    </div>
</div>


{{-- End Modal --}}

@endsection
