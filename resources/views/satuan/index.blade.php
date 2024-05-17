@extends('layout.template_satuan')

@section('content')
<div class="page-content">
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Master</a></li>
            <li class="breadcrumb-item active" aria-current="page">Satuan</li>
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
                            <a onClick="addSatuan()" href="javascript:void(0)" class="btn btn-primary btn-icon-text">
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
                                <input type="text" id="search-satuan" class="form-control" placeholder="Search" aria-label="Input group example" aria-describedby="btnGroupAddon2">
                            </div>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-hover table-bordered" id="satuan">
                            <thead>
                                <tr class="text-center">
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Singkatan</th>
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

<div class="modal fade" id="satuan-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Satuan</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="javascript:void(0)" id="SatuanForm" name="SatuanForm" class="form-horizontal" method="POST" enctype="multipart/form-data">
            <div class="modal-body">
                <input type="hidden" name="id" id="id">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="namasatuan" class="col-form-label">Nama</label>
                            <input class="form-control" id="namasatuan" name="namasatuan" placeholder="Nama Satuan" maxlength="50" required="">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="singkatan" class="col-form-label">Singkatan</label>
                            <input class="form-control" id="singkatan" name="singkatan" placeholder="Singkatan" maxlength="50" required="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary" id="btn-save-satuan">Simpan</button>
            </div>
        </form>
      </div>
    </div>
</div>



{{-- End Modal --}}

@endsection
