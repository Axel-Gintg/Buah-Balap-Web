<div class="modal fade" id="modalKeranjang" tabindex="-1" aria-labelledby="modalKeranjangLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalKeranjangLabel">Detail Ringkas Produk</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-6">
                        <img src="" alt="" id="foto_produk" width="100%" style="border-radius:16px;box-shadow:0 2px 16px rgba(44,62,80,0.07);">
                    </div>
                    <div class="col-lg-6">
                        <form action="" method="POST" id="tambah_produk">
                            @csrf
                            <div class="product__details__text mt-3">
                                <h3 class="text-capitalize" id="nama_produk">Nama Produk</h3>
                                <div class="product__details__price" style="font-size: 20px !important; color:#ABC270; font-weight:700;" id="harga_produk"></div>
                                <p class="text-justify pr-5" id="desc_produk"></p>
                                <div class="product__details__quantity mb-3">
                                    <div class="quantity">
                                        <div class="pro-qty" id="pro-qty">
                                            <input type="text" value="1" name="qty" autocomplete="off" style="width:60px;text-align:center;">
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" id="keranjang" class="modern-btn-cart border-0"><i class="fa fa-shopping-cart"></i></button>
                                <ul class="mt-3" style="list-style:none;padding-left:0;">
                                    <li><b>Stock</b> <span id="stock_produk">Tersedia</span></li>
                                    <li><b>Store</b> <span class="text-capitalize" id="toko"></span></li>
                                </ul>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div> 