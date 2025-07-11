@extends('layouts.shop')

@section('content')
      <section class="related-blog spad mb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mt-n5">
                    <div class="section-title related-blog-title">
                        <h2>TENTANG KAMI</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="/dist/img/logoweb.png" alt="Logo Buah Balap" style="max-width:140px;height:auto;border-radius:16px;object-fit:contain;display:block;margin:16px auto 12px auto;background:#fff;">
                        </div>
                        
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-8 text-justify">
                    <p class="text-dark">Buah merupakan makanan yang sehat untuk dikonsumsi. Buah berperan penting bagi manusia karena memiliki kandungan lemak dan karbohidrat yang rendah, tetapi tinggi vitamin, mineral dan serat makanan yang penting bagi kesehatan. Banyak ahli gizi mendorong orang untuk mengonsumsi banyak buah dengan merekomendasikan konsumsi lima porsi atau lebih dalam sehari. Awalnya, manusia mengumpulkan buah dari alam liar oleh pemburu-pengumpul sebelum adanya sistem pertanian. Dan sistem ini kami buat untuk mempermudah UMKM Buah dalam mempromosikan atau menjual Buahnya dan mempermudah para pembeli agar tidak perlu repot – repot ke pasar untuk membeli Buah.</p>
                    <div class="accordion mt-4" id="faqExample">
                        <div class="card">
                            <div class="card-header p-2 st-color" id="headingOne">
                                <h5 class="mb-0">
                                    <button class="btn btn-link text-light" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Q: Apa itu Buah Balap?
                                    </button>
                                    </h5>
                            </div>
        
                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#faqExample">
                                <div class="card-body">
                                    <b>Answer:</b> Buah Balap adalah toko online yang dapat digunakan untuk memesan berbagai kebutuhan buah anda melalui aplikasi berbasis website
                                </div>
                            </div>
                        </div>
                        <div class="card mt-3">
                            <div class="card-header p-2 st-color" id="headingTwo">
                                <h5 class="mb-0">
                                <button class="btn btn-link text-light collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Q: Bagaimana Cara memesan buah di Buah Balap?
                                </button>
                                </h5>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#faqExample">
                                <div class="card-body text-left">
                                <b>Answer:</b> <br>
                                  1. Customer dapat memilih buah yang diinginkan <br>
                                  2. Customer dapat melakukan konfirmasi pemesanan dan pembayaran <br>
                                  3. Customer dapat menunggu sampai kebutuhan buah anda diterima <br>
                                </div>
                            </div>
                        </div>
                        <div class="card mt-3">
                            <div class="card-header p-2 st-color" id="headingThree">
                                <h5 class="mb-0">
                                    <button class="btn btn-link text-light collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Q. Bagaimana Kebutuhan buah kami dapat diterima?
                                    </button>
                                    </h5>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#faqExample">
                                <div class="card-body">
                                <b>Answer:</b> Buah Balap menyediakan jasa pengiriman sesuai dengan harga dari masing-masing penjual buah yang sudah ditentukan sesuai lokasi customer                                </div>
                          </div>
                        </div>
                        <div class="card mt-3">
                            <div class="card-header p-2 st-color" id="headingFour">
                                <h5 class="mb-0">
                                    <button class="btn btn-link text-light collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        Q. Jam Buka Pesanan Buah Balap?
                                    </button>
                                    </h5>
                            </div>
                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#faqExample">
                                <div class="card-body">
                                    <b>Answer:</b>  Buah Balap dapat menerima pesanan 24 jam, namun akan dikonfirmasi oleh admin dan penjual dari pukul 07.00 AM - 17.00 PM                                </div>
                          </div>
                        </div>
                    </div>
                </div>
              
            </div>
           
        </div>
    </section>
@endsection