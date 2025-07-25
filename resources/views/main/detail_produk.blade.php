@extends('layouts.shop')


@section('content')
    
    <!-- Breadcrumb Section Begin -->
    <section class="container breadcrumb-section set-bg st-color">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2 class="text-capitalize">{{ $produk->nama_produk }}</h2>
                        <div class="breadcrumb__option">
                            <a href="{{ route('home') }}">Beranda</a>
                            <a href="{{ route('shop') }}">Toko</a>
                            <span>Detail Produk</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Product Details Section Begin -->
    <section class="product-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__pic">
                        <img class="tengah" src="{{ asset('storage/' . $produk->foto_produk) }}" alt="" width="70%">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__text">
                        <h3 class="text-capitalize">{{ $produk->nama_produk }}</h3>
                        <div class="product__details__price">Rp. {{ number_format($produk->harga_produk, 0, ',', '.') }}</div>
                        <p class="text-justify pr-5">{{ strip_tags(Str::limit($produk->desc_produk, 200)) }}</p>
                        
                        @if (!auth()->check())
                            <a href="{{ route('login') }}" class="primary-btn">ADD TO CART</a>
                        @else
                            @if ($produk->stock_produk == 0)
                                <a href="#" id="stock_habis" class="primary-btn">ADD TO CART</a>
                            @else
                                <form action="{{ route('tambah_keranjang', $produk->id) }}" method="POST" class="form-tambah-keranjang">
                                    @csrf
                                    <div class="product__details__quantity">
                                        <div class="quantity">
                                            <div class="pro-qty" id="pro-qty">
                                                <input type="text" value="1" name="qty" autocomplete="off">
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" id="keranjang" class="primary-btn border-0"><i class="fa fa-shopping-cart"></i></button>
                                </form>
                            @endif
                        @endif
                        <ul>
                            <li><b>Stock</b> 
                                @if ($produk->stock_produk == 0)
                                    <span>Tidak Tersedia</span>
                                @else
                                    <span>Tersedia</span>
                                @endif
                            </li>
                            <li><b>Store</b> <span class="text-capitalize">{{ $produk->store->nama_toko }}</span></li>
                            <li><b>Total Terjual</b> <span class="text-capitalize">
                                @if ($sold->total > 10)
                                    {{ $sold->total }} Pcs
                                @else
                                    0{{ $sold->total }} Pcs
                                @endif
                            </span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="product__details__tab">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab"
                                    aria-selected="true">Deskripsi Produk</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                <div class="product__details__tab__desc text-justify">
                                    <p>{!! $produk->desc_produk !!}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Details Section End -->

    <!-- Related Product Section Begin -->
    @if (count($related) != 0)
    <section class="related-product">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title related__product__title">
                        <h2>Produk Lainnya</h2>
                    </div>
                </div>
            </div>
            <div class="row">
               @foreach ($related as $item)
                <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="{{ asset('storage/'. $item->foto_produk) }}">
                        </div>
                        <div class="featured__item__text">
                            <h6 class="text-capitalize"><a href="/shop/detail-produk/{{ $item->id }}">{{ $item->nama_produk }}</a></h6>
                            <h5>Rp.{{ number_format($item->harga_produk, 0, ',', '.') }}</h5>
                        </div>
                    </div>
                </div>
               @endforeach
            </div>
        </div>
    </section>
    @endif
    <!-- Related Product Section End -->
    <script>
        $(document).on('submit', '.form-tambah-keranjang', function(e) {
            e.preventDefault();
            var form = $(this);
            var urlForm = form.attr('action');
            var qty = form.find('input[name="qty"]').val();
            var token = $("meta[name='csrf-token']").attr("content");
            $.ajax({
                type: "POST",
                url: urlForm,
                data: {
                    _token: token,
                    qty: qty
                },
                success: function(response) {
                    // Update jumlah keranjang di header jika ada
                    if(response.totalCart !== undefined) {
                        $(".cart-count").text(response.totalCart);
                    }
                    toastr.success('Produk berhasil ditambahkan ke keranjang!');
                    // Jika di halaman keranjang, reload untuk update isi
                    if(window.location.pathname === '/shop/keranjang'){
                        location.reload();
                    }
                },
                error: function(xhr) {
                    toastr.error('Gagal menambahkan ke keranjang!');
                }
            });
        });

    </script>

@endsection