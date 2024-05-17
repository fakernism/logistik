
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<title>{{ $title }}</title>
	<!-- core:css -->
	<link rel="stylesheet" href="{{ asset('assets/vendors/core/core.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/select2/select2.min.css') }}">
	<!-- endinject -->
    <!-- plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css') }}">
	<!-- end plugin css for this page -->
	<!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/mdi/css/materialdesignicons.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/fonts/feather-font/css/iconfont.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/vendors/flag-icon-css/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
	<!-- endinject -->
    <!-- Layout styles -->
	<link rel="stylesheet" href="{{ asset('assets/css/demo_1/style.css') }}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" />
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/chosen/chosen.min.css') }}">



</head>
<body class="sidebar-dark">
	<div class="main-wrapper">

		<!-- partial:partials/_sidebar.html -->
        @extends('layout.sidebar')
		<!-- partial -->

		<div class="page-wrapper">

			<!-- partial:partials/_navbar.html -->
            <nav class="navbar">
                <a href="#" class="sidebar-toggler">
                    <i data-feather="menu"></i>
                </a>
                <div class="navbar-content">
                    <form class="search-form">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i data-feather="search"></i>
                                </div>
                            </div>
                            <input type="text" class="form-control" id="search" placeholder="Search here...">
                        </div>
                    </form>
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="languageDropdown" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="flag-icon flag-icon-id" title="id" id="id"></i> <span
                                    class="font-weight-medium ml-1 mr-1">Indonesia</span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="languageDropdown">
                                <a href="javascript:;" class="dropdown-item py-2"><i class="flag-icon flag-icon-us" title="us"
                                        id="us"></i> <span class="ml-1"> English </span></a>
                                <a href="javascript:;" class="dropdown-item py-2"><i class="flag-icon flag-icon-fr" title="fr"
                                        id="fr"></i> <span class="ml-1"> French </span></a>
                                <a href="javascript:;" class="dropdown-item py-2"><i class="flag-icon flag-icon-de" title="de"
                                        id="de"></i> <span class="ml-1"> German </span></a>
                                <a href="javascript:;" class="dropdown-item py-2"><i class="flag-icon flag-icon-pt" title="pt"
                                        id="pt"></i> <span class="ml-1"> Portuguese </span></a>
                                <a href="javascript:;" class="dropdown-item py-2"><i class="flag-icon flag-icon-es" title="es"
                                        id="es"></i> <span class="ml-1"> Spanish </span></a>
                            </div>
                        </li>
                        <li class="nav-item dropdown nav-apps">
                            <a class="nav-link dropdown-toggle" href="#" id="appsDropdown" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i data-feather="grid"></i>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="appsDropdown">
                                <div class="dropdown-header d-flex align-items-center justify-content-between">
                                    <p class="mb-0 font-weight-medium">Web Apps</p>
                                    <a href="javascript:;" class="text-muted">Edit</a>
                                </div>
                                <div class="dropdown-body">
                                    <div class="d-flex align-items-center apps">
                                        <a href="pages/apps/chat.html"><i data-feather="message-square" class="icon-lg"></i>
                                            <p>Chat</p>
                                        </a>
                                        <a href="pages/apps/calendar.html"><i data-feather="calendar" class="icon-lg"></i>
                                            <p>Calendar</p>
                                        </a>
                                        <a href="pages/email/inbox.html"><i data-feather="mail" class="icon-lg"></i>
                                            <p>Email</p>
                                        </a>
                                        <a href="pages/general/profile.html"><i data-feather="instagram" class="icon-lg"></i>
                                            <p>Profile</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="dropdown-footer d-flex align-items-center justify-content-center">
                                    <a href="javascript:;">View all</a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown nav-messages">
                            <a class="nav-link dropdown-toggle" href="#" id="messageDropdown" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i data-feather="mail"></i>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="messageDropdown">
                                <div class="dropdown-header d-flex align-items-center justify-content-between">
                                    <p class="mb-0 font-weight-medium">9 New Messages</p>
                                    <a href="javascript:;" class="text-muted">Clear all</a>
                                </div>
                                <div class="dropdown-body">
                                    <a href="javascript:;" class="dropdown-item">
                                        <div class="figure">
                                            <img src="https://via.placeholder.com/30x30" alt="userr">
                                        </div>
                                        <div class="content">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <p>Leonardo Payne</p>
                                                <p class="sub-text text-muted">2 min ago</p>
                                            </div>
                                            <p class="sub-text text-muted">Project status</p>
                                        </div>
                                    </a>
                                    <a href="javascript:;" class="dropdown-item">
                                        <div class="figure">
                                            <img src="https://via.placeholder.com/30x30" alt="userr">
                                        </div>
                                        <div class="content">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <p>Carl Henson</p>
                                                <p class="sub-text text-muted">30 min ago</p>
                                            </div>
                                            <p class="sub-text text-muted">Client meeting</p>
                                        </div>
                                    </a>
                                    <a href="javascript:;" class="dropdown-item">
                                        <div class="figure">
                                            <img src="https://via.placeholder.com/30x30" alt="userr">
                                        </div>
                                        <div class="content">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <p>Jensen Combs</p>
                                                <p class="sub-text text-muted">1 hrs ago</p>
                                            </div>
                                            <p class="sub-text text-muted">Project updates</p>
                                        </div>
                                    </a>
                                    <a href="javascript:;" class="dropdown-item">
                                        <div class="figure">
                                            <img src="https://via.placeholder.com/30x30" alt="userr">
                                        </div>
                                        <div class="content">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <p>Amiah Burton</p>
                                                <p class="sub-text text-muted">2 hrs ago</p>
                                            </div>
                                            <p class="sub-text text-muted">Project deadline</p>
                                        </div>
                                    </a>
                                    <a href="javascript:;" class="dropdown-item">
                                        <div class="figure">
                                            <img src="https://via.placeholder.com/30x30" alt="userr">
                                        </div>
                                        <div class="content">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <p>Yaretzi Mayo</p>
                                                <p class="sub-text text-muted">5 hr ago</p>
                                            </div>
                                            <p class="sub-text text-muted">New record</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="dropdown-footer d-flex align-items-center justify-content-center">
                                    <a href="javascript:;">View all</a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown nav-notifications">
                            <a class="nav-link dropdown-toggle" href="#" id="notificationDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i data-feather="bell"></i>
                                @if ($stok_barang)
                                    <div class="indicator">
                                        <div class="circle"></div>
                                    </div>
                                @else

                                @endif
                            </a>
                            <div class="dropdown-menu" aria-labelledby="notificationDropdown">
                                <div class="dropdown-header d-flex align-items-center justify-content-between">
                                    <p class="mb-0 font-weight-medium">New Notifications</p>
                                    {{-- <a href="javascript:;" class="text-muted">Clear all</a> --}}
                                </div>
                                <div class="dropdown-body">
                                    @if ($stok_barang)
                                        @foreach ($stok_barang as $stb)
                                            <a href="/" class="dropdown-item">
                                                <div class="icon">
                                                    <i data-feather="alert-circle"></i>
                                                </div>
                                                <div class="content">
                                                    <p>{{ $stb->nama }}</p>
                                                    <p class="sub-text text-muted">Tersisa {{ $stb->stok }} barang</p>
                                                </div>
                                            </a>
                                        @endforeach
                                    @else
                                        <a href="javascript:;" class="dropdown-item">
                                            <div class="icon">
                                                <i data-feather="thumbs-up"></i>
                                            </div>
                                            <div class="content">
                                                <p>Tidak ada notifikasi</p>
                                                <p class="sub-text text-muted">sekarang</p>
                                            </div>
                                        </a>
                                    @endif
                                </div>
                                <div class="dropdown-footer d-flex align-items-center justify-content-center">
                                    <a href="/">View all</a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown nav-profile">
                            <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <img src="https://via.placeholder.com/30x30" alt="profile">
                            </a>
                            <div class="dropdown-menu" aria-labelledby="profileDropdown">
                                <div class="dropdown-header d-flex flex-column align-items-center">
                                    <div class="figure mb-3">
                                        <img src="https://via.placeholder.com/80x80" alt="">
                                    </div>
                                    <div class="info text-center">
                                        <p class="name font-weight-bold mb-0">{{ auth()->user()->nama }}</p>
                                        <p class="email text-muted mb-3">{{ auth()->user()->jabatan }}</p>
                                    </div>
                                </div>
                                <div class="dropdown-body">
                                    <ul class="profile-nav p-0 pt-3">
                                        <li class="nav-item">
                                            <a href="pages/general/profile.html" class="nav-link">
                                                <i data-feather="user"></i>
                                                <span>Profile</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="/logout" class="nav-link">
                                                <i data-feather="log-out"></i>
                                                <span>Log Out</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>

			<!-- partial -->



			<!-- partial post-->
            @yield('content')
			<!-- partial -->

			<!-- partial:partials/_footer.html -->
			@include('layout.footer')

			<!-- partial -->

		</div>
	</div>

	<!-- core:js -->
	<script src="{{ asset('assets/vendors/core/core.js') }}"></script>
    <script src="{{ asset('assets/vendors/select2/select2.min.js') }}"></script>
	<!-- endinject -->
    <!-- plugin js for this page -->
    <script src="{{ asset('assets/vendors/chartjs/Chart.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jquery.flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('assets/vendors/jquery.flot/jquery.flot.resize.js') }}"></script>
    <script src="{{ asset('assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/progressbar.js/progressbar.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/datatables.net/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js') }}"></script>
	<!-- end plugin js for this page -->
	<!-- inject:js -->
	<script src="{{ asset('assets/vendors/feather-icons/feather.min.js') }}"></script>
	<script src="{{ asset('assets/js/template.js') }}"></script>
    <script src="{{ asset('assets/js/select2.js') }}"></script>
    {{-- <script>
        $(document).ready(function(){
            $.fn.modal.Constructor.prototype.enforceFocus = function () {};
        });
    </script> --}}
	<!-- endinject -->
    <!-- custom js for this page -->
    <script src="{{ asset('assets/js/dashboard.js') }}"></script>
    <script src="{{ asset('assets/js/datepicker.js') }}"></script>
    <script src="{{ asset('assets/js/data-table.js') }}"></script>
    <script src="{{ asset('assets/vendors/chosen/chosen.jquery.min.js') }}"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>

	<!-- end custom js for this page -->

    {{-- start table barang --}}
    <script type="text/javascript">
        var table;
        $(document).ready( function () {
            $.ajaxSetup({
                headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            var start = moment().subtract(1, 'M');

            var end = moment();

            $('#daterange span').html(start.format('D MMMM YYYY') + ' - ' + end.format('D MMMM YYYY'));

            $('#daterange').daterangepicker({
                startDate : start,
                endDate : end
            }, function(start, end){
                $('#daterange span').html(start.format('D MMMM YYYY') + ' - ' + end.format('D MMMM YYYY'));

                table.draw();
            });


                table =  $('#barang').DataTable({
                processing  : true,
                serverSide  : true,
                ajax        : {
                    url :"{{ route('barang.index') }}",
                    data : function(data){
                        data.from_date = $('#daterange').data('daterangepicker').startDate.format('YYYY-MM-DD H:I:S');
                        data.to_date = $('#daterange').data('daterangepicker').endDate.format('YYYY-MM-DD H:I:S');
                    }
                },
                scrollY     : false,
                // dom: 'Bfrtip',
                "oLanguage": {
                    "sSearch": "",
                    "sEmptyTable": "Tidak ada data yang tersedia pada tabel"
                },
                columns     : [
                    {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                    { data: 'kodebarang', name: 'kodebarang', orderable: false },
                    { data: 'namabarang', name: 'namabarang', orderable: false },
                    { data: 'ukuran', name: 'ukuran', orderable: false },
                    { data: 'satuan', name: 'satuan', orderable: false},
                    { data: 'stok', name: 'stok', orderable: false },
                    { data: 'harga', name: 'harga', orderable: false },
                    {
                        data: 'total',
                        render: (data, type, row) => {
                            return (row.harga * row.stok).toLocaleString('en-US');
                        }
                    },
                    { data: 'keterangan', name: 'keterangan', orderable: false },
                    { data: 'action', name: 'action', orderable: false},
                ],
                columnDefs: [
                    { targets: "no-sort", orderable: false, },
                    { targets: [0,1,3,4,5,6,7,8,9], className: "text-center", },
                    {
                        targets: 6,
                        render: $.fn.dataTable.render.number(',', '.', 0, '')
                    }
                ],
                "dom": 'rtip',
                // paging: false,
                order       : [[0, 'asc']],
                buttons: [
				{
					extend: 'excel',
                    class: 'buttons-excel',
                    init: function(api, node, config) {
                        $(node).hide();
                    },
					exportOptions: {
					columns: [ 0, 1, 2, 3, 4, 5, 6, 7 ]
					},
				},

				{
					extend: 'print',
                    class: 'buttons-print',
                    init: function(api, node, config) {
                        $(node).hide();
                    },
					exportOptions: {
					columns: [ 0, 1, 2, 3, 4, 5, 6, 7 ]
					},
				},
				],

				pageLength:50,
            });
        });



        // Call reloadDataTable function wherever needed


        $('#search').on('keyup change', function () {
            table.search(this.value).draw();
        });

        $('#btnExcel').on('click', function() {
            table.button('.buttons-excel').trigger();
        });

        $('#btnPrint').on('click', function() {
            table.button('.buttons-print').trigger();
        });

        function addBarang(){
            $('#BarangForm').trigger("reset");
            $('#BarangModal').html("Tambah Barang");
            $('#barang-modal').modal('show');
            $('#id').val('');
        }

        function editBarang(id){
            $.ajax({
                type:"POST",
                url: "{{ url('edit') }}",
                data: { id: id },
                dataType: 'json',
                success: function(res){
                    $('#BarangModal').html("Edit Barang");
                    $('#barang-modal').modal('show');
                    $('#id').val(res.id);
                    $('#namabarang').val(res.namabarang);
                    $('#ukuran').val(res.ukuran);
                    $('#satuan').val(res.satuan);
                    $('#stok').val(res.stok);
                    $('#harga').val(res.harga);
                    $('#keterangan').val(res.keterangan);
                }
            });
        }

        function deleteFunc(id){
            if (confirm("Delete Record?") == true) {
                var id = id;
                // ajax
                $.ajax({
                    type:"POST",
                    url: "{{ url('delete') }}",
                    data: { id: id },
                    dataType: 'json',
                    success: function(res){
                        var oTable = $('#barang').dataTable();
                        oTable.fnDraw(false);
                    }
                });
            }
        }

        $('#BarangForm').submit(function(e) {
            e.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                type:'POST',
                url: "{{ url('store')}}",
                data: formData,
                cache:false,
                contentType: false,
                processData: false,
                success: (data) => {
                    $("#barang-modal").modal('hide');
                    var oTable = $('#barang').dataTable();
                    oTable.fnDraw(false);
                    $("#btn-save-barang").html('Simpan');
                    $("#btn-save-barang").attr("disabled", false);
                },
                error: function(data){
                    console.log(data);
                }
            });
        });
    </script>
    {{-- end table barang --}}


    {{-- start barang masuk --}}
    <script type="text/javascript">
        var tableBarangMasuk;
            $(document).ready( function () {
                $.ajaxSetup({
                    headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                tableBarangMasuk =  $('#barangMasuk').DataTable({
                    processing: true,
                    serverSide: true,
                    scrollY     : false,
                    "dom": 'rtip',
                    "oLanguage": {
                        "sSearch": "",
                        "sEmptyTable": "Tidak ada data yang tersedia pada tabel"
                    },
                    ajax        : {
                        url :"{{ route('masuk.index') }}",
                    },
                    columns: [
                        {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                        { data: 'kodetrm', name: 'kodetrm', orderable: false },
                        { data: 'created_at', name: 'created_at', orderable: false,
                            render: function(data, type, row){
                                if(type === "sort" || type === "type"){
                                    return data;
                                }
                                return moment(data).format("DD-MM-YYYY");
                            }
                        },
                        { data: 'namabarang', name: 'namabarang', orderable: false },
                        { data: 'jumlah_masuk', name: 'jumlah_masuk', orderable: false },
                        { data: 'harga', name: 'harga', orderable: false },
                        {
                            data: 'total',
                            render: (data, type, row) => {
                                return (row.jumlah_masuk * row.harga).toLocaleString('en-US');
                            }
                        },
                        { data: 'lampiran', name: 'lampiran', orderable: false },
                        { data: 'action', name: 'action', orderable: false},
                    ],
                    columnDefs: [
                        { targets: "no-sort", orderable: false, },
                        { targets: [0,1,2,4,5,6,7,8], className: "text-center", },
                        {
                            targets: 5,
                            render: $.fn.dataTable.render.number(',', '.', 0, '')
                        }
                    ],
                    "dom": 'rtip',
                    // paging: false,
                    order       : [[0, 'asc']],
                    pageLength:50,
                });
            });

            $('#search-barangMasuk').on('keyup change', function () {
                tableBarangMasuk.search(this.value).draw();
            });

            function addBarangMasuk(){
                $('#barangMasukForm').trigger("reset");
                $('#barangMasukModal').html("Tambah Barang Masuk");
                $('#barangMasuk-modal').modal('show');
                $('#id').val('');
            }

            function editBarangMasuk(id){
                $.ajax({
                    type:"POST",
                    url: "{{ route('masuk.edit') }}",
                    data: { id: id },
                    dataType: 'json',
                    success: function(res){
                        $('#barangMasukModal').html("Edit Barang Masuk");
                        $('#barangMasuk-modal').modal('show');
                        $('#id').val(res.id);
                        $('#kodebarang').val(res.kodebarang);
                        $('#jumlah_masuk').val(res.jumlah_masuk);
                        $('#harga').val(res.harga);
                        $('#lampiran').val(res.lampiran);
                    }
                });
            }

            function deleteBarangMasuk(id){
                if (confirm("Delete Record?") == true) {
                    var id = id;
                    // ajax
                    $.ajax({
                        type:"POST",
                        url: "{{ route('masuk.delete') }}",
                        data: { id: id },
                        dataType: 'json',
                        success: function(res){
                            var oTableBarangMasuk = $('#barangMasuk').dataTable();
                            oTableBarangMasuk.fnDraw(false);
                        }
                    });
                }
            }

            $('#barangMasukForm').submit(function(e) {
                e.preventDefault();
                var formData = new FormData(this);
                $.ajax({
                    type:'POST',
                    url: "{{ route('masuk.store')}}",
                    data: formData,
                    cache:false,
                    contentType: false,
                    processData: false,
                    success: (data) => {
                        $("#barangMasuk-modal").modal('hide');
                        var oTableBarangMasuk = $('#barangMasuk').dataTable();
                        oTableBarangMasuk.fnDraw(false);
                        $("#btn-save").html('Simpan');
                        $("#btn-save"). attr("disabled", false);
                    },
                    error: function(data){
                        console.log(data);
                    }
                });
            });
        </script>

        {{-- end table satuan --}}


        <script>
            $(document).ready(function() {
                $('#kodebarang').on('change', function() {
                    var kodebarang = $(this).val();
                    // console.log(kodebarang);
                    if (kodebarang) {
                        $.ajax({
                            url: '/barang-masuk/' + kodebarang,
                            type: 'GET',
                            data: {
                                '_token': '{{ csrf_token() }}'
                            },
                            dataType: 'json',
                            success: function(data) {
                                // console.log(data);
                                $('#stok').val(data);
                                if (data) {
                                    $.each(data, function(key, result) {
                                        $('#stok').val(result.stok);
                                        $('#harga').val(result.harga);
                                        $('#spansatuan').html('<span class="input-group-text text-dark">' + result.satuan + '</span>');
                                    });
                                } else {
                                    $('#barang').empty();
                                }
                            }
                        });
                    } else {
                        $('#stok').empty();
                    }
                });
            });
        </script>

        <script>
            $(document).ready(function(){
                // Get value on keyup funtion
                $("#jumlah_masuk, #stok").keyup(function(){

                    var total_stok = 0;
                    var x = Number($("#jumlah_masuk").val());
                    var y = Number($("#stok").val());
                    var total_stok = x + y;

                    $('#total_stok').val(total_stok);

                });
            });
        </script>

        <script>
            $('#jumlah_masuk').keypress(function(event) {
                if (((event.which != 46 || (event.which == 46 && $(this).val() == '')) ||
                        $(this).val().indexOf('.') != -1) && (event.which < 48 || event.which > 57)) {
                    event.preventDefault();
                }
            }).on('paste', function(event) {
                event.preventDefault();
            });
        </script>

        <script>
            $('.datepicker').datepicker({
                format: 'dd-mm-yyyy',
            });
        </script>
    {{-- end barang masuk --}}


    {{-- start barang keluar --}}
    <script type="text/javascript">
        var tableBarangKeluar;
        $(document).ready( function () {
            $.ajaxSetup({
                headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            tableBarangKeluar =  $('#barangKeluar').DataTable({
                processing: true,
                serverSide: true,
                scrollY     : false,
                "dom": 'rtip',
                "oLanguage": {
                    "sSearch": "",
                    "sEmptyTable": "Tidak ada data yang tersedia pada tabel"
                },
                ajax        : {
                    url :"{{ route('keluar.index') }}",
                },
                columns: [
                    {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                    { data: 'kodetrk', name: 'kodetrk', orderable: false },
                    {
                        data: 'created_at',
                        name: 'created_at', orderable: false,
                        render: function(data, type, row){
                            if(type === "sort" || type === "type"){
                                return data;
                            }
                            return moment(data).format("DD/MM/YYYY");
                        }
                    },
                    { data: 'namabarang', name: 'namabarang', orderable: false },
                    { data: 'jumlah_keluar', name: 'jumlah_keluar', orderable: false },
                    { data: 'harga', name: 'harga', orderable: false },
                    {
                        data: 'total',
                        render: (data, type, row) => {
                            return (row.jumlah_keluar * row.harga).toLocaleString('en-US');
                        }
                    },
                    { data: 'lampiran', name: 'lampiran', orderable: false },
                    { data: 'action', name: 'action', orderable: false},
                ],
                columnDefs: [
                    { targets: "no-sort", orderable: false, },
                    { targets: [0,1,2,4,5,6,7,8], className: "text-center", },
                    {
                        targets: 5,
                        render: $.fn.dataTable.render.number(',', '.', 0, '')
                    }
                ],
                "dom": 'rtip',
                // paging: false,
                order       : [[0, 'asc']],
				pageLength:50,
            });
        });

        $('#search-barangKeluar').on('keyup change', function () {
            tableBarangKeluar.search(this.value).draw();
        });

        function addBarangKeluar(){
            $('#barangKeluarForm').trigger("reset");
            $('#barangKeluarModal').html("Tambah Barang Keluar");
            $('#barangKeluar-modal').modal('show');
            $('#id').val('');
        }

        function editBarangKeluar(id){
            $.ajax({
                type:"POST",
                url: "{{ route('keluar.edit') }}",
                data: { id: id },
                dataType: 'json',
                success: function(res){
                    $('#barangKeluarModal').html("Edit Barang Keluar");
                    $('#barangKeluar-modal').modal('show');
                    $('#id').val(res.id);
                    $('#kodebarang').val(res.kodebarang);
                    $('#jumlah_keluar').val(res.jumlah_keluar);
                    $('#harga').val(res.harga);
                    $('#lampiran').val(res.lampiran);
                }
            });
        }

        function deleteBarangKeluar(id){
            if (confirm("Delete Record?") == true) {
                var id = id;
                // ajax
                $.ajax({
                    type:"POST",
                    url: "{{ route('keluar.delete') }}",
                    data: { id: id },
                    dataType: 'json',
                    success: function(res){
                        var oTableBarangKeluar = $('#barangKeluar').dataTable();
                        oTableBarangKeluar.fnDraw(false);
                    }
                });
            }
        }

        $('#barangKeluarForm').submit(function(e) {
            e.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                type:'POST',
                url: "{{ route('keluar.store')}}",
                data: formData,
                cache:false,
                contentType: false,
                processData: false,
                success: (data) => {
                    $("#barangKeluar-modal").modal('hide');
                    var oTableBarangKeluar = $('#barangKeluar').dataTable();
                    oTableBarangKeluar.fnDraw(false);
                    $("#btn-save").html('Simpan');
                    $("#btn-save"). attr("disabled", false);
                },
                error: function(data){
                    console.log(data);
                }
            });
        });
    </script>
    {{-- end table barang keluar --}}

    <script>
        $(document).ready(function() {
            $('#kodebarang').on('change', function() {
                var kodebarang = $(this).val();
                // console.log(kodebarang);
                if (kodebarang) {
                    $.ajax({
                        url: '/barang-keluar/' + kodebarang,
                        type: 'GET',
                        data: {
                            '_token': '{{ csrf_token() }}'
                        },
                        dataType: 'json',
                        success: function(data) {
                            // console.log(data);
                            $('#stok').val(data);
                            if (data) {
                                $.each(data, function(key, result) {
                                    $('#stok').val(result.stok);
                                    $('#harga').val(result.harga);
                                    $('#spansatuan').html('<span class="input-group-text text-dark">' + result.satuan + '</span>');
                                });
                            } else {
                                $('#barang').empty();
                            }
                        }
                    });
                } else {
                    $('#stok').empty();
                }
            });
        });
    </script>

    <script>
        $(document).ready(function(){
            // Get value on keyup funtion
            $("#jumlah_keluar, #stok").keyup(function(){

                var total_stok = 0;
                var x = Number($("#jumlah_keluar").val());
                var y = Number($("#stok").val());
                var total_stok = y - x;

                $('#total_stok').val(total_stok);

            });
        });
    </script>

    <script>
        $('#jumlah_keluar').keypress(function(event) {
            if (((event.which != 46 || (event.which == 46 && $(this).val() == '')) ||
                    $(this).val().indexOf('.') != -1) && (event.which < 48 || event.which > 57)) {
                event.preventDefault();
            }
        }).on('paste', function(event) {
            event.preventDefault();
        });
    </script>

    <script>
        $('.datepicker').datepicker({
            format: 'dd-mm-yyyy',
        });
    </script>

    {{-- end barang keluar --}}



</body>
</html>
