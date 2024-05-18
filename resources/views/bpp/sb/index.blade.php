@extends('layout.templateBpp')
@section('content')

<div class="page-content">
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="keluar">BPP</a></li>
            <li class="breadcrumb-item active" aria-current="page">Sambungan Baru</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-xl-12 main-content">
            {{-- <h1 class="page-title">Data Barang</h1>
            <hr> --}}
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div class="col-lg-6 pl-0 mb-2">

                            <a href="{{ route('bppsb.create') }}" class="btn btn-primary btn-icon-text">
                                <i class="btn-icon-prepend" data-feather="plus-circle"></i>
                                Tambah BPP SB
                            </a>

                            <button type="button" id="btnExcelBppSb" class="btn btn-success btn-icon-text"><i class="btn-icon-prepend" data-feather="download"></i> Excel</button>
                            <button type="button" id="btnPrintBppSb" class="btn btn-danger btn-icon-text"><i class="btn-icon-prepend" data-feather="printer"></i> Print</button>

                        </div>
                        <div class="col-lg-3 pr-0">

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
                                <input type="text" id="search-barangKeluar" class="form-control" placeholder="Search" aria-label="Input group example" aria-describedby="btnGroupAddon2">
                            </div>
                        </div>
                    </div> --}}

                    <div class="table-responsive">
                        <table class="table table-hover table-bordered" id="bppsb-table">
                            <thead>
                                <tr class="text-center">
                                    <th>No</th>
                                    <th>Nomor BPP</th>
                                    <th>Tanggal</th>
                                    <th>No. Sambung</th>
                                    <th>Nama</th>
                                    <th>Alamat</th>
                                    <th>Clamp Saddle</th>
                                    <th>Diterima</th>
                                    <th>action</th>
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
