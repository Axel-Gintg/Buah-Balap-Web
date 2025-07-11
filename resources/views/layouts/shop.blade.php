<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }} | Buah Balap</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://momentjs.com/downloads/moment.min.js"></script>
    <script src="https://momentjs.com/downloads/moment-with-locales.min.js"></script>
    <script>moment.locale('id');</script>
    <link rel="stylesheet" href="{{ asset('/template/css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('/template/css/font-awesome.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('/template/css/elegant-icons.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('/template/css/owl.carousel.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('/template/css/jquery-ui.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('/template/css/slicknav.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('/template/css/style.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('/css/bootstrap-select/bootstrap-select.css') }}">
    <link rel="stylesheet" href="{{ asset('/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/bootstrap-datepicker/bootstrap-datepicker.css') }}">
    
    <script src="{{ asset('/template/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap-datepicker/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('/plugins/sweetalert2/sweetalert2.all.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('/css/toastr/toastr.css') }}">
    <style>      
        .pagination > li > a,
        .pagination > li > span {
            color: #ABC270; // use your own color here
        }

        .pagination > .active > a,
        .pagination > .active > a:focus,
        .pagination > .active > a:hover,
        .pagination > .active > span,
        .pagination > .active > span:focus,
        .pagination > .active > span:hover {
            background-color: #ABC270 !important;
            border-color: #ABC270 !important;
            color: white;
        }
    </style>
</head>

<body>
    <!-- Promo Bar -->
    <div class="promo-bar bg-dark-green text-white text-center py-1" style="background:#184A2C;color:#FFD600;font-weight:600;font-size:0.98rem;letter-spacing:0.5px;">
        Get <span style="color:#FFD600;">free delivery</span> on shopping $200. Order now!
    </div>
    @include('partials.header_shop')
    @yield('content')

   
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

   
    <script src="{{ asset('/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('/template/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('/template/js/jquery.slicknav.js') }}"></script>
    <script src="{{ asset('/template/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('/template/js/mixitup.min.js') }}"></script>

    <script src="{{ asset('/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>

    <script src="{{ asset('/js/bootstrap-filestyle/bootstrap-filestyle.min.js') }}"> </script>
    <script src="{{ asset('/js/bootstrap-select/bootstrap-select.js') }}"></script>
    <script src="{{ asset('/js/toastr/toastr.min.js') }}"></script>
    <script src="{{ asset('/js/jquery-mask/jquery.mask.js') }}"></script>
    <script src="{{ asset('/template/js/main.js') }}"></script>
    <script src="{{ asset('/js/myjs.js') }}"></script>
    @if (Session::has('success'))
    <script>
            var message = '{{ Session::get('success') }}';
            toastr.info(message);
    </script>
    @endif

    <script>
         $(document).ready(function() {
            $("#stock_habis").click(function() {
                toastr.error('Stock Tidak Tersedia');
                // You can add your code to execute when the button is clicked here
            });
        });
    </script>
</body>

</html>