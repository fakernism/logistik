@extends('layout.template')

@section('content')
<style>
    .dataTables_filter {
        display: none;
    }
</style>

<div class="page-content">
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Master</a></li>
            <li class="breadcrumb-item active" aria-current="page">Data Barang</li>
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
                            <a onClick="addBarang()" href="javascript:void(0)" class="btn btn-primary btn-icon-text">
                                <i class="btn-icon-prepend" data-feather="plus-circle"></i>
                                Tambah Data
                            </a>

                            <button type="button" id="btnExcel" class="btn btn-success btn-icon-text"><i class="btn-icon-prepend" data-feather="download"></i> Excel</button>
                            <button type="button" id="btnPrint" class="btn btn-danger btn-icon-text"><i class="btn-icon-prepend" data-feather="printer"></i> Print</button>
                        </div>
                        <div class="col-lg-3 pr-0">

                            <div class="row">
                                <div class="col-sm-3"></div>
                                <div class="col-sm-9">
                                    <div class="text-right">
                                        <div id="daterange" style="background: #181d23; color: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #e8ebf1; border-radius: 4px; width: 100%; text-align:center; font-size: 14px">
                                            <i class="btn-icon-prepend" style="width: 14px; height: 14px;" data-feather="calendar"></i>&nbsp;
                                            <span></span>
                                            <i class="btn-icon-prepend" style="width: 14px; height: 14px;" data-feather="chevron-down"></i>&nbsp;
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- <div class="row">
                        <div class="col-sm">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                <div class="input-group-text" id="btnGroupAddon2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                                </div>
                                </div>
                                <input type="text" id="search" class="form-control" placeholder="Search" aria-label="Input group example" aria-describedby="btnGroupAddon2">
                            </div>
                        </div>
                    </div> --}}

                    <div class="table-responsive">
                        <table class="table table-hover table-bordered" id="barang">
                            <thead>
                                <tr class="text-center">
                                    <th>No</th>
                                    <th>Kode</th>
                                    <th>Nama</th>
                                    <th>Ukuran</th>
                                    <th>Satuan</th>
                                    <th>Stok</th>
                                    <th>Harga (Rp)</th>
                                    <th>Total (Rp)</th>
                                    <th>Keterangan</th>
                                    <th>Role</th>
                                </tr>
                            </thead>
                            <tfoot align="right">
                                <tr>
                                    <td>harun</td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>


{{-- Start Modal --}}

<div class="modal fade" id="barang-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Barang</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="javascript:void(0)" id="BarangForm" name="BarangForm" class="form-horizontal" method="POST" enctype="multipart/form-data">
            <div class="modal-body">
                <input type="hidden" name="id" id="id">
                {{-- <div class="form-group">
                    <label for="kodebarang" class="col-form-label">Kode Barang</label>
                    <input type="text" class="form-control" id="kodebarang" name="kodebarang" placeholder="Kode Barang" value="{{ $kd }}" maxlength="50" required="">
                </div> --}}
                <div class="form-group">
                    <label for="namabarang" class="col-form-label">Nama</label>
                    <input type="text" class="form-control" id="namabarang" name="namabarang" placeholder="Nama Barang" maxlength="50" required="">
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="ukuran" class="col-form-label">Ukuran</label>
                            <input class="form-control" id="ukuran" name="ukuran" placeholder="Ukuran" maxlength="50" required="">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="satuan" class="col-form-label">Satuan</label>
                            <select name="satuan" id="satuan" class="form-control">
                                    <option>Pilih Satuan</option>
                                @foreach ($satuan as $st)
                                    <option value="{{ $st->singkatan }}">{{ $st->namasatuan }} - {{ $st->singkatan }}</option>
                                @endforeach
                            </select>
                                {{-- <input class="form-control" id="satuan" name="satuan" placeholder="Satuan" maxlength="50" required=""> --}}
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="stok" class="col-form-label">Stok</label>
                            <input class="form-control" id="stok" name="stok" placeholder="Stok" maxlength="50" required="">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="harga" class="col-form-label">Harga</label>
                            <input class="form-control" id="harga" name="harga" placeholder="Harga" maxlength="50" required="">
                            <span class="text-danger text-small">tanpa tanda titik (.)</span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="keterangan" class="col-form-label">Keterangan</label>
                    {{-- <input class="form-control" id="keterangan" name="keterangan" placeholder="Keterangan" maxlength="50" required=""> --}}
                    <textarea class="form-control" id="keterangan" name="keterangan" id="exampleFormControlTextarea1" rows="5"></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary" id="btn-save-barang">Simpan</button>
            </div>
        </form>
      </div>
    </div>
</div>



{{-- End Modal --}}

@endsection
