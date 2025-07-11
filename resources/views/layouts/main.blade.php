<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Buah Balap">
    <meta name="author" content="MangDharma">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $title }} | Buah Balap</title>

    <link href="/sb-admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <script src="https://momentjs.com/downloads/moment.min.js"></script>
    <script src="https://momentjs.com/downloads/moment-with-locales.min.js"></script>
    <script>moment.locale('id');</script>
    <link rel="stylesheet" href="{{ asset('/css/toastr/toastr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/bootstrap-select/bootstrap-select.css') }}">
    <link rel="stylesheet" href="{{ asset('/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/trix.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/bootstrap-datepicker/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('/sb-admin/css/sb-admin-2.css') }}">

    <script src="{{ asset('/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('/js/trix.js') }}"></script>
    <script src="{{ asset('js/bootstrap-datepicker/bootstrap-datepicker.js') }}"></script>

</head>

<body id="page-top">

    <div id="wrapper">

        @include('partials.sidebar')

        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                @include('partials.navbar')
                <div class="container-fluid">
                   @yield('content')
                </div>
            </div>


            <footer style="background:#d6e5c6; color:#3a4632; padding:40px 0 0 0; font-family:'Kanit',sans-serif;">
                <div style="max-width:1100px; margin:auto; display:flex; flex-wrap:wrap; justify-content:space-between; align-items:flex-start; gap:32px;">
                    <!-- Kiri: Logo & Newsletter -->
                    <div style="flex:1 1 260px; min-width:220px;">
                        <div style="font-size:2rem; font-weight:bold; margin-bottom:8px;">Buah Balap<span style="font-size:1rem; font-weight:normal;">™</span></div>
                        <div style="margin-bottom:16px;">Join our newsletter to stay up to date on features and releases.</div>
                        <form style="display:flex; gap:8px; margin-bottom:8px;">
                            <input type="email" placeholder="Enter your email" style="padding:8px 12px; border-radius:4px; border:1px solid #b2c8a2; background:#f4f8f2; color:#3a4632; flex:1;">
                            <button type="submit" style="background:#3a4632; color:#d6e5c6; border:none; border-radius:4px; padding:8px 20px; font-weight:bold; cursor:pointer;">Subscribe</button>
                        </form>
                        <div style="font-size:0.85rem; color:#5a6b4d;">
                            By subscribing, you agree to our <a href="#" style="color:#3a4632; text-decoration:underline;">Privacy Policy</a> and consent to receive updates from our company.
                        </div>
                    </div>
                    <!-- Tengah: Layanan -->
                    <div style="flex:1 1 180px; min-width:160px;">
                        <div style="font-weight:bold; margin-bottom:12px;">Our Services</div>
                        <ul style="list-style:none; padding:0; margin:0; line-height:2;">
                            <li>Buah Segar</li>
                            <li>Paket Buah</li>
                            <li>Pengiriman Cepat</li>
                            <li>Konsultasi Gizi</li>
                        </ul>
                    </div>
                    <!-- Kanan: Sosial Media -->
                    <div style="flex:1 1 180px; min-width:160px;">
                        <div style="font-weight:bold; margin-bottom:12px;">Follow Us</div>
                        <ul style="list-style:none; padding:0; margin:0; line-height:2; display:flex; gap:16px;">
                            <li><a href="https://instagram.com/axel.gtg48" target="_blank" style="color:#3a4632; font-size:1.5rem;"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="https://linkedin.com/in/axel-archie-clement-ginting" target="_blank" style="color:#3a4632; font-size:1.5rem;"><i class="fab fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div style="border-top:1px solid #b2c8a2; margin-top:32px; padding:16px 0 0 0;">
                    <div style="max-width:1100px; margin:auto; display:flex; justify-content:space-between; align-items:center; flex-wrap:wrap; font-size:0.95rem;">
                        <div>&copy;{{ date('Y') }}, All right reserved.</div>
                        <div>
                            <a href="#" style="color:#3a4632; margin-right:16px; text-decoration:underline;">Privacy Policy</a>
                            <a href="#" style="color:#3a4632; margin-right:16px; text-decoration:underline;">Terms of Service</a>
                            <a href="#" style="color:#3a4632; text-decoration:underline;">Cookies Settings</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>

    </div>
   
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Yakin Keluar?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Tekan tombol Keluar jika anda yakin mengakhiri sesi ini</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                    <form action="/logout" method="POST">
                       @csrf
                       <button class="btn btn-danger" type="submit">Keluar</button>
                    </form>
                 </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('/sb-admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('/sb-admin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('/sb-admin/js/sb-admin-2.min.js') }}"></script>
    <script src="{{ asset('/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('/js/bootstrap-select/bootstrap-select.js') }}"></script>
    <script src="{{ asset('/js/select/defaults-id_ID.js') }}"></script>
    <script src="{{ asset('/js/toastr/toastr.min.js') }}"></script>
    <script src="{{ asset('/js/jquery-mask/jquery.mask.js') }}"></script>
    <script src="{{ asset('/js/bootstrap-filestyle/bootstrap-filestyle.min.js') }}"> </script>
    <script src="{{ asset('/plugins/sweetalert2/sweetalert2.all.min.js') }}"></script>
    <script src="{{ asset('/js/myjs.js') }}"></script>
    @if (Session::has('success'))
        <script>
            var message = '{{ Session::get('success') }}';
            Swal.fire({
                title: 'Success',
                text:  message,
                icon: 'success'
            });
        </script>   
    @endif

    @if (Session::has('error'))
    <script>
        var message = '{{ Session::get('error') }}';
        Swal.fire({
            title: 'Error',
            text:  message,
            icon: 'error'
        });
    </script>   
@endif

</body>

</html>