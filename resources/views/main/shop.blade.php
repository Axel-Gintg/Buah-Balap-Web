@extends('layouts.shop')

@section('content')
        <!-- Breadcrumb Section Begin -->
        <section class="breadcrumb-section st-color container" >
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="breadcrumb__text">
                            <h2 class="text-capitalize">Seller {{ $store->nama_toko }}</h2>
                      </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- <div class="container mt-5">
            <div class="row">
                <div class="col-lg-12 mt-4">
                    <div class="section-title related-blog-title">
                        <h2>Buah Balap</h2>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- Breadcrumb Section End -->
    
        <!-- Product Section Begin -->
        <section class="product spad mt-n5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 mt-1">
                        <a href="{{ route('shop') }}" class="site-btn btn-block text-center"><i class="fas fa-fw fa-store"></i> &nbsp;&nbsp;&nbsp;Kembali</a>
                    </div>
                    <div class="col-lg-7">
                        <div class="hero__search float-right">
                            <div class="hero__search__form">
                                <form  action="{{ route('detail_shop', $store->id) }}" method="POST">
                                    @csrf
                                    <div class="hero__search__categories">
                                        Pencarian
                                    </div>
                                    <input type="text" placeholder="Cari Buah..." autocomplete="off" name="keyword" class="text-dark" value="{{ ($keyword != null) ? $keyword : '' }}">
                                    <button type="submit" class="site-btn">Cari</button>
                                </form>
                            </div>
                            <div class="hero__search__phone">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mt-2">
                        <div class="filter__sort float-right">
                            <span>Filter Penjualan</span>
                            <form action="{{ route('detail_shop', $store->id) }}" method="POST" class="d-inline">
                                @csrf
                                <select name="sort" id="sort">
                                    @if ($sort == 'DESC')
                                        <option value="DESC" selected>Tinggi - Rendah</option>
                                        <option value="ASC">Rendah - Tinggi</option>
                                    @else
                                        <option value="DESC">Tinggi - Rendah</option>
                                        <option value="ASC" selected>Rendah - Tinggi</option>
                                    @endif
                                </select>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        
                        <div class="filter__item mt-n3">
                            <div class="row">
                            </div>
                        </div>
                        <div class="row mt-n5">
                            @foreach ($produk as $item)
                                <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
                                    <div class="featured__item">
                                        <div class="featured__item__pic set-bg" data-setbg="{{ asset('storage/'. $item->foto_produk) }}">
                                            <ul class="featured__item__pic__hover">
                                                
                                                @if (!auth()->check())
                                                    <li><a href="{{ route('login') }}"><i class="fa fa-shopping-cart"></i></a></li>
                                                @else
                                                    @if ($item->stock_produk == 0)
                                                        <li><a href="#" id="stock_habis"><i class="fa fa-shopping-cart"></i></a></li>
                                                    @else
                                                        <li>
                                                            <a href="javascript:;" data-id="{{ $item->id }}" data-toggle="modal" data-target="#modalKeranjang" class="modal_keranjang">
                                                                <i class="fa fa-shopping-cart"></i>
                                                            </a>
                                                        </li>  
                                                    @endif
                                                @endif
                                            </ul>
                                        </div>
                                        <div class="featured__item__text">
                                            <h6 class="text-capitalize"><a href="/shop/detail-produk/{{ $item->id }}">{{ $item->nama_produk }}</a></h6>
                                            <h5>Rp.{{ number_format($item->harga_produk, 0, ',', '.') }}</h5>
                                                @if ($item->stock_produk == 0)
                                                    <small class="badge badge-danger"> Stok Habis</small>
                                                @else
                                                    @if ($item->total > 10)
                                                        <small class="badge st-color"> {{ $item->total }} Pcs Terjual</small>
                                                    @elseif($item->total > 0 && $item->total < 10)
                                                        <small class="badge st-color"> 0{{ $item->total }} Pcs Terjual</small>
                                                    @endif
                                                @endif
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="row mt-5">
                            <div class="col-lg-12">
                                <div class="pull-left">
                                    {{ $produk->links() }}
                                </div>
                                <div class="pull-right">
                                    <small>
                                        Showing
                                        {{ $produk->firstItem() }}
                                        To
                                        {{ $produk->lastItem() }}
                                        Of
                                        {{ $produk->total() }}
                                        Items
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @include('main._modal_keranjang')
        <!-- Product Section End -->
      <script>
      $(document).on("click", "#keranjang", function(e) {
               e.preventDefault();
               var form = $(this).parents('form');
               var urlForm = $(this).parents('form').attr('action');
               // var idProduk = urlForm.split(",");
               var idProduk = urlForm.split("/");
               idProduk = idProduk[3];
               var url = "/shop/cek_produk";
               var token = $("meta[name='csrf-token']").attr("content");
               $.ajax({
                  type: "post",
                  url: url,
                  dataType: "html",
                  data: {
                     "_token": token,
                     "idProduk" : idProduk
                  },
                  success: function(msg) {
                     let tmp = JSON.parse(msg);
                     // alert(tmp.change);
                     if(tmp.change == 1){
                           Swal.fire({
                              title: 'Warning!',
                              text: "Anda memiliki item dari toko lain dalam keranjang, ganti item dari toko ini?",
                              icon: 'question',
                              showCancelButton: true,
                              confirmButtonColor: '#539165',
                              cancelButtonColor: '#d33',
                              confirmButtonText: 'Ya, Pesan Item Ini!'
                              }).then((result) => {
                              if (result.isConfirmed) {
                                 form.submit();
                              }
                           })
                     }else{
                           form.submit();
                     }
                  },error: function(){
                     Swal.fire({
                           title: 'Error!',
                           text: 'Kesalahan Akun Privilege',
                           icon: 'error'
                     });
                  }
               });
         });
   
         $(document).on("click", ".modal_keranjang", function() {
               var idProduk = $(this).data('id');
               var url = "/shop/modal/"+idProduk;
               var urlDetail = "/shop/detail-produk/"+idProduk;
               var urlTambah ="/shop/tambah_keranjang/"+idProduk;
               var gambar = 'storage/';
               $.ajax({
                  type: "get",
                  url: url,
                  dataType: "html",
                  success: function(msg) {
                     let tmp = JSON.parse(msg);
                     $(".modal-body #nama_produk").html(tmp.nama_produk);
                     $(".modal-body #desc_produk").html(tmp.desc_produk);
                     $(".modal-body #harga_produk").html(tmp.harga_produk);
                     $(".modal-body #toko").html(tmp.toko);
                     $(".modal-body #foto_produk").attr("src", tmp.foto_produk);
                     $(".modal-body .see-more").attr("href", urlDetail);
                     $(".modal-body #tambah_produk").attr("action", urlTambah);
                     
                  },error: function(){
                     Swal.fire({
                           title: 'Error!',
                           text: 'Error Get Data Produk',
                           icon: 'error'
                     });
                  }
               });
         });

         if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }

        $('#sort').change(function(e) {
            this.form.submit();
        });
      </script>

@endsection