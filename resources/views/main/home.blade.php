@extends('layouts.shop')

@section('content')
<!-- Banner Promosi ala TazaMart -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
<style>
    .promo-banner {
        background: #184A2C;
        border-radius: 18px;
        padding: 32px 32px 32px 40px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 32px;
        color: #fff;
        box-shadow: 0 2px 16px rgba(24,74,44,0.10);
        font-family: 'Poppins', sans-serif;
    }
    .promo-banner .promo-text h2 {
        font-size: 2.1rem;
        font-weight: 700;
        margin-bottom: 10px;
    }
    .promo-banner .promo-text span {
        color: #FFD600;
    }
    .promo-banner .promo-text p {
        font-size: 1.1rem;
        color: #fff;
        margin-bottom: 18px;
    }
    .promo-banner .promo-btn {
        background: #FFD600;
        color: #184A2C;
        border: none;
        border-radius: 24px;
        padding: 10px 28px;
        font-weight: 600;
        font-size: 1.1rem;
        transition: background 0.2s;
        box-shadow: 0 2px 8px rgba(24,74,44,0.08);
    }
    .promo-banner .promo-btn:hover {
        background: #FF9900;
        color: #fff;
    }
    .promo-banner .promo-img {
        width: 180px;
        height: 140px;
        object-fit: contain;
        margin-left: 32px;
    }
    @media (max-width: 767px) {
        .promo-banner { flex-direction: column; text-align: center; padding: 24px 12px; }
        .promo-banner .promo-img { margin: 18px auto 0 auto; width: 120px; height: 90px; }
    }
    .filter-bar {
        display: flex;
        gap: 16px;
        align-items: center;
        margin-bottom: 24px;
        flex-wrap: wrap;
        font-family: 'Poppins', sans-serif;
    }
    .filter-bar select, .filter-bar .form-control {
        border-radius: 18px;
        padding: 6px 18px;
        font-size: 1rem;
        border: 1px solid #e0e0e0;
    }
    .modern-card {
        position: relative;
    }
    .modern-badge {
        position: absolute;
        top: 12px;
        left: 12px;
        background: #FF9900;
        color: #fff;
        font-size: 0.85rem;
        font-weight: 600;
        border-radius: 8px;
        padding: 3px 10px;
        z-index: 2;
    }
    .modern-badge.best-sale { background: #D7263D; }
    .modern-rating {
        color: #FFD600;
        font-size: 1rem;
        margin-bottom: 6px;
    }
    .modern-btn-cart {
        background: #184A2C;
        color: #fff;
        border: none;
        border-radius: 50%;
        width: 40px;
        height: 40px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.2rem;
        transition: background 0.2s;
        margin: 0 auto;
    }
    .modern-btn-cart:hover {
        background: #FF9900;
        color: #fff;
    }
    .promo-banner-carousel { position: relative; background: #184A2C; border-radius: 18px; overflow: hidden; min-height: 220px; display: flex; align-items: center; justify-content: center; margin-bottom: 32px; }
    .promo-slide { display: none; align-items: center; justify-content: space-between; padding: 32px 32px 32px 40px; color: #fff; width: 100%; min-height: 220px; }
    .promo-slide.active { display: flex; animation: fadeInUp 0.8s cubic-bezier(.23,1.01,.32,1) both; }
    .promo-slide .promo-text { flex: 1; }
    .promo-slide .promo-img { width: 180px; height: 140px; object-fit: contain; margin-left: 32px; }
    .promo-carousel-nav { position: absolute; left: 50%; bottom: 18px; transform: translateX(-50%); display: flex; gap: 8px; }
    .promo-dot { width: 12px; height: 12px; border-radius: 50%; background: #FFD600; opacity: 0.5; cursor: pointer; transition: opacity 0.2s; }
    .promo-dot.active { opacity: 1; }
    @media (max-width: 767px) { .promo-slide, .promo-slide.active { flex-direction: column; text-align: center; padding: 24px 12px; } .promo-slide .promo-img { margin: 18px auto 0 auto; width: 120px; height: 90px; } }
</style>
<div class="container">
    <div class="promo-banner-carousel fade-in-up" id="promoBannerCarousel">
        <div class="promo-slide active">
            <div class="promo-text" style="color:#fff;">
                <h2 style="color:#fff;">Diskon <span style="color:#FFD600;">Spesial Akhir Pekan!</span></h2>
                <p style="color:rgba(255,255,255,0.85);">Belanja buah segar favoritmu, hemat hingga <b>30%</b> hanya di Buah Balap. Stok terbatas!</p>
                <a href="#" class="promo-btn">Lihat Promo</a>
            </div>
            <img src="/template/img/hero/banner1.jpg" alt="Banner 1" class="promo-img swing">
        </div>
        <div class="promo-slide">
            <div class="promo-text" style="color:#fff;">
                <h2 style="color:#fff;">Gratis Ongkir <span style="color:#FFD600;">Se-Batam</span></h2>
                <p style="color:rgba(255,255,255,0.85);">Pesan buah minimal Rp100.000 dan nikmati layanan antar gratis ke seluruh Batam. Cepat, segar, sampai rumah!</p>
                <a href="#" class="promo-btn">Belanja Sekarang</a>
            </div>
            <img src="/template/img/product/product-4.jpg" alt="Gratis Ongkir" class="promo-img swing">
        </div>
        <div class="promo-slide">
            <div class="promo-text" style="color:#fff;">
                <h2 style="color:#fff;">Buah Import <span style="color:#FFD600;">Super Fresh</span></h2>
                <p style="color:rgba(255,255,255,0.85);">Stok buah import premium: apel fuji, anggur, pir, dan lainnya. Kualitas terbaik, harga bersahabat!</p>
                <a href="#" class="promo-btn">Cek Buah Import</a>
            </div>
            <img src="/template/img/product/product-7.jpg" alt="Buah Import" class="promo-img swing">
        </div>
        <div class="promo-carousel-nav">
            <span class="promo-dot active" onclick="setPromoSlide(0)"></span>
            <span class="promo-dot" onclick="setPromoSlide(1)"></span>
            <span class="promo-dot" onclick="setPromoSlide(2)"></span>
        </div>
    </div>
    <!-- Filter & Sort Bar -->
    <div class="filter-bar fade-in-up">
        <select class="form-control" name="category" style="min-width:150px;">
            <option value="">All Categories</option>
            <!-- @foreach ($categories as $cat) <option value="{{ $cat->id }}">{{ $cat->name }}</option> @endforeach -->
        </select>
        <select class="form-control" name="sort" style="min-width:120px;">
            <option value="">Sort by</option>
            <option value="price_asc">Price: Low to High</option>
            <option value="price_desc">Price: High to Low</option>
            <option value="best_sale">Best Sale</option>
        </select>
    </div>
    <div class="modern-featured-title">All Products</div>
    <div class="row">
        @foreach ($produk as $item)
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4 d-flex fade-in-up">
                <div class="modern-card w-100">
                    @if(isset($item->is_best_sale) && $item->is_best_sale)
                        <span class="modern-badge best-sale">Best Sale</span>
                    @elseif(isset($item->is_promo) && $item->is_promo)
                        <span class="modern-badge">Promo</span>
                    @endif
                    <a href="{{ url('/shop/detail-produk/'. $item->id) }}">
                        <img class="modern-card-img" src="{{ asset('storage/'. $item->foto_produk) }}" alt="{{ $item->nama_produk }}">
                    </a>
                    <div class="modern-card-title text-capitalize">{{ $item->nama_produk }}</div>
                    <div class="modern-rating">
                        <i class="fa fa-star"></i> {{ $item->rating ?? '4.8' }}
                    </div>
                    <div class="modern-card-price">Rp.{{ number_format($item->harga_produk, 0, ',', '.') }}<span style="font-size:0.95em;color:#888;">/kg</span></div>
                    <div class="modern-card-action">
                        @if (!auth()->check())
                            <a href="{{ route('login') }}" class="modern-btn-cart"><i class="fa fa-plus"></i></a>
                        @else
                            <a href="javascript:;" data-id="{{ $item->id }}" data-toggle="modal" data-target="#modalKeranjang" class="modern-btn-cart modal_keranjang">
                                <i class="fa fa-plus"></i>
                            </a>
                        @endif
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@include('main._modal_keranjang')
<script>
let promoSlideIdx = 0;
const promoSlides = document.querySelectorAll('.promo-slide');
const promoDots = document.querySelectorAll('.promo-dot');
function showPromoSlide(idx) {
    promoSlides.forEach((slide, i) => {
        slide.classList.toggle('active', i === idx);
        promoDots[i].classList.toggle('active', i === idx);
    });
    promoSlideIdx = idx;
}
function setPromoSlide(idx) { showPromoSlide(idx); resetPromoInterval(); }
let promoInterval = setInterval(() => { nextPromoSlide(); }, 4000);
function nextPromoSlide() { showPromoSlide((promoSlideIdx + 1) % promoSlides.length); }
function resetPromoInterval() { clearInterval(promoInterval); promoInterval = setInterval(() => { nextPromoSlide(); }, 4000); }
document.addEventListener('DOMContentLoaded', function() { showPromoSlide(0); });
</script>
@endsection