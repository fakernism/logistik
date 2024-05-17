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

    <div class="row">
        <div class="col-lg-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Form Tambah BPP Sambungan Baru (SB)</h4>
                    <p class="card-description">Read the <a href="https://jqueryvalidation.org/" target="_blank"> Official jQuery Validation Documentation </a>for a full list of instructions and other options.</p>
                    <form class="cmxform" action="{{ route('bppsb.create') }}" method="POST" enctype="multipart/form-data">
                        <fieldset>
                            <div class="form-group">
                                <label for="namapel">Nama Pelanggan</label>
                                <input id="namapel" class="form-control" name="namapel" type="text">
                            </div>
                            <div class="form-group">
                                <label for="alamatpel">Alamat</label>
                                <input id="alamatpel" class="form-control" name="alamatpel" type="text">
                            </div>
                            <div class="form-group">
                                <label for="clampsaddle">Clamp Saddle</label>
                                <input id="clampsaddle" class="form-control" name="clampsaddle" type="text">
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
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>


@endsection
