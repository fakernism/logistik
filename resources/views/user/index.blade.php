@extends('layout.templateUser')

@section('content')

<div class="page-content">
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Master</a></li>
            <li class="breadcrumb-item active" aria-current="page">User</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-xl-12 main-content">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div class="col-lg-3 pl-0 mb-2">
                            <a onClick="addUser()" href="javascript:void(0)" class="btn btn-primary btn-icon-text">
                                <i class="btn-icon-prepend" data-feather="plus-circle"></i>
                                Tambah Data
                            </a>

                        </div>
                        <div class="col-lg-3 pr-0">

                        </div>
                    </div>


                    <div class="table-responsive">
                        <table class="table table-hover table-bordered" id="tableUser">
                            <thead>
                                <tr class="text-center">
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Jabatan</th>
                                    <th>Username</th>
                                    <th>Dibuat pada</th>
                                    <th>Action</th>
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

<div class="modal fade" id="user-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">User</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="javascript:void(0)" id="UserForm" name="UserForm" class="form-horizontal" method="POST" enctype="multipart/form-data">
            <div class="modal-body">
                <input type="hidden" name="id" id="id">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="nama" class="col-form-label">Nama</label>
                            <input class="form-control" id="nama" name="nama" placeholder="Nama" maxlength="50" required="">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="jabatan" class="col-form-label">Jabatan</label>
                            <input class="form-control" id="jabatan" name="jabatan" placeholder="Jabatan" maxlength="50" required="">
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="form-group">
                            <label for="username" class="col-form-label">Username</label>
                            <input class="form-control" id="username" name="username" placeholder="Username" maxlength="50" required="">
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
