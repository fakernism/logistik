
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
                            <input type="text" class="form-control" id="search-barangMasuk" placeholder="Search here...">
                        </div>
                    </form>
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="languageDropdown" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="flag-icon flag-icon-id" title="id" id="id"></i> <span
                                    class="font-weight-medium ml-1 mr-1">Indonesia</span>
                            </a>
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
                                                <p>New customer registered</p>
                                                <p class="sub-text text-muted">2 sec ago</p>
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

    {{-- start table laporan barang masuk --}}
    <script type="text/javascript">
    var tableLaporanMasuk;
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

                tableLaporanMasuk.draw();
            });

            tableLaporanMasuk =  $('#laporanBarangMasuk').DataTable({
                processing: true,
                serverSide: true,
                scrollY     : false,
                "dom": 'rtip',
                "oLanguage": {
                    "sSearch": "",
                    "sEmptyTable": "Tidak ada data yang tersedia pada tabel"
                },
                ajax        : {
                    url :"{{ route('laporanIn.index') }}",
                    data : function(data){
                        data.from_date = $('#daterange').data('daterangepicker').startDate.format('YYYY-MM-DD H:I:S');
                        data.to_date = $('#daterange').data('daterangepicker').endDate.format('YYYY-MM-DD H:I:S');
                    }
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
                ],
                columnDefs: [
                    { targets: "no-sort", orderable: false, },
                    { targets: [0,1,2,4,5,6], className: "text-center", },
                    {
                        targets: 5,
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
					columns: [ 0, 1, 2, 3, 4 ]
					},
				},

				{
					extend: 'print',
                    class: 'buttons-print',
                    init: function(api, node, config) {
                        $(node).hide();
                    },
					exportOptions: {
					columns: [ 0, 1, 2, 3, 4, 5 ]
					},
				},
				],

				pageLength:50,
            });
        });

        $('#search-laporanBarangMasuk').on('keyup change', function () {
            tableLaporanMasuk.search(this.value).draw();
        });

        $('#btnExcelLaporanMasuk').on('click', function() {
            tableLaporanMasuk.button('.buttons-excel').trigger();
        });

        $('#btnPrintLaporanMasuk').on('click', function() {
            tableLaporanMasuk.button('.buttons-print').trigger();
        });
    </script>
    {{-- end table Laporan Barang Masuk --}}


    {{-- start table laporan barang keluar --}}
    <script type="text/javascript">
        var tableLaporanKeluar;
            $(document).ready( function () {
                $.ajaxSetup({
                    headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                var start = moment().subtract(1, 'M');

                var end = moment();

                $('#daterangekeluar span').html(start.format('D MMMM YYYY') + ' - ' + end.format('D MMMM YYYY'));

                $('#daterangekeluar').daterangepicker({
                    startDate : start,
                    endDate : end
                }, function(start, end){
                    $('#daterangekeluar span').html(start.format('D MMMM YYYY') + ' - ' + end.format('D MMMM YYYY'));

                    tableLaporanKeluar.draw();
                });

                tableLaporanKeluar =  $('#laporanBarangKeluar').DataTable({
                    processing: true,
                    serverSide: true,
                    scrollY     : false,
                    "dom": 'rtip',
                    "oLanguage": {
                        "sSearch": "",
                        "sEmptyTable": "Tidak ada data yang tersedia pada tabel"
                    },
                    ajax        : {
                        url :"{{ route('laporanOut.index') }}",
                        data : function(data){
                            data.from_date = $('#daterangekeluar').data('daterangepicker').startDate.format('YYYY-MM-DD H:I:S');
                            data.to_date = $('#daterangekeluar').data('daterangepicker').endDate.format('YYYY-MM-DD H:I:S');
                        }
                    },
                    columns: [
                        {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                        { data: 'kodetrk', name: 'kodetrk', orderable: false },
                        { data: 'created_at', name: 'created_at', orderable: false,
                            render: function(data, type, row){
                                if(type === "sort" || type === "type"){
                                    return data;
                                }
                                return moment(data).format("DD-MM-YYYY");
                            }
                        },
                        { data: 'namabarang', name: 'namabarang', orderable: false },
                        { data: 'jumlah_keluar', name: 'jumlah_keluar', orderable: false },
                        { data: 'harga', name: 'harga', orderable: false },
                        {
                            data: 'total',
                            render: (data, type, row) => {
                                return parseInt(row.jumlah_keluar * row.harga).toLocaleString('en-US');
                            }
                        },
                        { data: 'lampiran', name: 'lampiran', orderable: false },
                    ],
                    columnDefs: [
                        { targets: "no-sort", orderable: false, },
                        { targets: [0,1,2,4,5,6], className: "text-center", },
                        {
                            targets: 5,
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
                        columns: [ 0, 1, 2, 3, 4, 5 ]
                        },
                    },

                    {
                        extend: 'print',
                        class: 'buttons-print',
                        init: function(api, node, config) {
                            $(node).hide();
                        },
                        exportOptions: {
                        columns: [ 0, 1, 2, 3, 4, 5 ]
                        },
                    },
                    ],

                    pageLength:50,
                });
            });

            $('#search-laporanBarangKeluar').on('keyup change', function () {
                tableLaporanKeluar.search(this.value).draw();
            });

            $('#btnExcelLaporanKeluar').on('click', function() {
                tableLaporanKeluar.button('.buttons-excel').trigger();
            });

            $('#btnPrintLaporanKeluar').on('click', function() {
                tableLaporanKeluar.button('.buttons-print').trigger();
            });
        </script>

        {{-- end table Laporan Barang Keluar --}}
</body>
</html>
