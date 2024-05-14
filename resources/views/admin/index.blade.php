

@extends('layouts.master')
@section('content') 
    <div class="mt-5"></div>
    <div class="pt-4"></div>
    <div class="container">
        <!-- Beranda -->
        <section id="beranda" class="container-fluid">
            <div class="row">
            <div class="col-12 text-center">
                <h1 class="kondisi"><b>HALAMAN ADMIN</b></h1>
                <p>Tempat terbaik untuk menikmati makanan dan minuman berkualitas</p>
                <img src="https://ugc.production.linktr.ee/Emm3GtFbQte5rHM3sQjt_a1LRStJEpu3G8cUR?io=true&size=avatar-v3_0"class="img-home d-inline-block align-text-top">
                </a>
            </div>
            </div>
        </section>

        <!-- About -->
        <section id="about" class="container mt-5">
            <div data-aos="fade-right">
            <div class="about-content">
                <div class="about-text">
                <div class="text-center mt-3">
                <h2><b>About Kedai Cinta</b></h2>
                <p>Kedai Cinta adalah tempat yang memancarkan aura hangat dan romantis, di mana Anda bisa menikmati makanan dan minuman berkualitas sambil merasakan kebahagiaan cinta. Dengan dekorasi yang menawan dan suasana yang intim, Kedai Cinta menjadi destinasi favorit bagi pasangan dan teman-teman yang ingin merayakan momen spesial mereka.</p> 
                    <h2><b>Favorite menu</b></h2>
                </div>
                <div class="row mt-4">
                    <div class="col-md-4">
                    <div class="card">
                        <img src="https://i.ytimg.com/vi/EWc_HSBNrDw/maxresdefault.jpg" class="card-img-top" alt="Image 1">
                        <div class="card-body">
                        <h5 class="card-title">Corndog</h5>
                        </div>
                    </div>
                    </div>
                    <div class="col-md-4">
                    <div class="card">
                        <img src="https://lh5.googleusercontent.com/p/AF1QipOnkdfXs_gGZeN3Mwo4XXB3SFcHeSdcjAW5fipd=w408-h612-k-no" class="card-img-top" alt="Image 2">
                        <div class="card-body">
                        <h5 class="card-title">strawberry milk</h5>
                        </div>
                    </div>
                    </div>
                    <div class="col-md-4">
                    <div class="card">
                        <img src="https://pewartasatu.com/wp-content/uploads/2022/10/IMG_20221015_090109-960x911.jpg" class="card-img-top" alt="Image 3">
                        <div class="card-body">
                        <h5 class="card-title">boba milk tea</h5>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="text-center mt-3">
                    <a href="#fullMenu" class="btn btn-secondary">FULL MENU</a>
                </div>
                </div>
            </div>
            </div>
        </section>
    </div>

        <!-- We Are Open -->
        <section id="open" class="bg-light text-center py-5">
            <div class="container">
            <h2>We Are Open</h2>
            <p>Visit us during our opening hours:</p>
            <p>Monday - Friday: 9:00 AM - 10:00 PM</p>
            <p>Saturday - Sunday: 10:00 AM - 11:00 PM</p>
            </div>
        </section>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        //message with toastr
        @if(session()->has('success'))
        
            toastr.success('{{ session('success') }}', 'BERHASIL!'); 

        @elseif(session()->has('error'))

            toastr.error('{{ session('error') }}', 'GAGAL!'); 
            
        @endif
    </script>
@endsection