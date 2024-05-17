@extends('layout.template_laporanBarang')

@section('content')
<div class="page-content">
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="laporan-out">Laporan</a></li>
            <li class="breadcrumb-item active" aria-current="page">Barang Keluar</li>
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
                            <button type="button" id="btnExcelLaporanKeluar" class="btn btn-success btn-icon-text"><i class="btn-icon-prepend" data-feather="download"></i> Excel</button>
                            <button type="button" id="btnPrintLaporanKeluar" class="btn btn-danger btn-icon-text"><i class="btn-icon-prepend" data-feather="printer"></i> Print</button>
                        </div>
                        <div class="col-lg-3 pr-0">
                            <div class="row">
                                <div class="col-sm-3"></div>
                                <div class="col-sm-9">
                                    <div class="text-right">
                                        <div id="daterangekeluar" style="background: #181d23; color: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #e8ebf1; border-radius: 4px; width: 100%; text-align:center; font-size: 14px">
                                            <i class="btn-icon-prepend" style="width: 14px; height: 14px;" data-feather="calendar"></i>&nbsp;
                                            <span></span>
                                            <i class="btn-icon-prepend" style="width: 14px; height: 14px;" data-feather="chevron-down"></i>&nbsp;
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                                <input type="text" id="search-laporanBarangKeluar" class="form-control" placeholder="Search" aria-label="Input group example" aria-describedby="btnGroupAddon2">
                            </div>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-hover table-bordered" id="laporanBarangKeluar">
                            <thead>
                                <tr class="text-center">
                                    <th>No</th>
                                    <th>Kode</th>
                                    <th>Tanggal</th>
                                    <th>Barang</th>
                                    <th>Jumlah Keluar</th>
                                    <th>Harga (Rp)</th>
                                    <th>Total (Rp)</th>
                                    <th>Lampiran</th>
                                    {{-- <th>Action</th> --}}
                                </tr>
                            </thead>
                        </table>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>

@endsection
