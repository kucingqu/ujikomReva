@extends('layouts/app')

@section('content')
<style>
    #about, #ramuan {
        scroll-margin-top: 5rem;
    }
</style>

<!-- Header Carousel Start -->
<div class="header-carousel owl-carousel">
    <div class="header-carousel-item">
        <img src="img/padi.jpg" class="img-fluid w-100" alt="Image">
        <div class="carousel-caption">
            <div class="container">
                <div class="row gy-0 gx-5">
                    <div class="col-lg-0 col-xl-5"></div>
                    <div class="col-xl-7 animated fadeInLeft">
                        <div class="text-sm-center text-md-end">
                            <h4 class="text-primary text-uppercase fw-bold mb-4">Welcome To Herby</h4>
                            <h1 class="display-4 text-uppercase text-white mb-4">Hasil alam yang alami</h1>
                            <p class="mb-5 fs-5">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy...
                            </p>
                            <div class="d-flex align-items-center justify-content-center justify-content-md-end">
                                <h2 class="text-white me-2">Follow Us:</h2>
                                <div class="d-flex justify-content-end ms-2">
                                    <a class="btn btn-md-square btn-light rounded-circle me-2" href="https://www.facebook.com/pangrumasan.co"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-md-square btn-light rounded-circle mx-2" href="https://www.instagram.com/desa_pangrumasan/"><i class="fab fa-instagram"></i></a>
                                    <a class="btn btn-md-square btn-light rounded-circle ms-2" href="https://klipaa.com/profil_desa/3205100001/profilh"><i class="fab fa-chrome"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-carousel-item">
        <img src="img/budak.jpg" class="img-fluid w-100" alt="Image">
        <div class="carousel-caption">
            <div class="container">
                <div class="row g-5">
                    <div class="col-12 animated fadeInUp">
                        <div class="text-center">
                            <h4 class="text-primary text-uppercase fw-bold mb-4">Welcome To Herby</h4>
                            <h1 class="display-4 text-uppercase text-white mb-4">bermanfaat bagi manusia berbagai umur</h1>
                            <p class="mb-5 fs-5">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy...
                            </p>
                            <div class="d-flex align-items-center justify-content-center">
                                <h2 class="text-white me-2">Follow Us:</h2>
                                <div class="d-flex justify-content-end ms-2">
                                    <a class="btn btn-md-square btn-light rounded-circle me-2" href="https://www.facebook.com/pangrumasan.co"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-md-square btn-light rounded-circle mx-2" href="https://www.instagram.com/desa_pangrumasan/"><i class="fab fa-instagram"></i></a>
                                    <a class="btn btn-md-square btn-light rounded-circle ms-2" href="https://klipaa.com/profil_desa/3205100001/profil"><i class="fab fa-chrome"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-carousel-item">
        <img src="img/duar.jpg" class="img-fluid w-100" alt="Image">
        <div class="carousel-caption">
            <div class="container">
                <div class="row g-5">
                    <div class="col-12 animated fadeInUp">
                        <div class="text-center">
                            <h4 class="text-primary text-uppercase fw-bold mb-4">Welcome To Herby</h4>
                            <h1 class="display-4 text-uppercase text-white mb-4">Lestarikan sumber daya alam</h1>
                            <p class="mb-5 fs-5">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy...
                            </p>
                            <div class="d-flex align-items-center justify-content-center">
                                <h2 class="text-white me-2">Follow Us:</h2>
                                <div class="d-flex justify-content-end ms-2">
                                    <a class="btn btn-md-square btn-light rounded-circle me-2" href="https://www.facebook.com/pangrumasan.co"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-md-square btn-light rounded-circle mx-2" href="https://www.instagram.com/desa_pangrumasan/"><i class="fab fa-instagram"></i></a>
                                    <a class="btn btn-md-square btn-light rounded-circle ms-2" href="https://klipaa.com/profil_desa/3205100001/profil"><i class="fab fa-chrome"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Header Carousel End -->

<!-- Services Start -->
<div class="container-fluid service pb-5">
    <!-- Content for services can be added here -->
</div>
<!-- Services End -->

<!-- Features Start -->
<div class="container-fluid feature pb-5">
    <div class="container pb-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-primary">Our Goal</h4>
            <h1 class="display-5 mb-4">Tujuan Kami</h1>
            <p class="mb-0">Ditanam dengan sangat baik dan menciptakan hasil alam yang melimpah ditengah era modern, dan menambah sebagian paru-paru dunia.</p>
        </div>
        <div class="row g-4">
            <!-- Feature Item Start -->
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                <div class="feature-item p-4">
                    <div class="feature-icon p-4 mb-4">
                        <i class="fas fa-hand-holding-medical fa-4x text-primary"></i>
                    </div>
                    <h4>Health of living creatures</h4>
                    <p class="mb-4">Sebagai Tempat Hidup, alam menjadi tempat berpijak dan memberikan manfaat bagi makhluk hidup.</p>
                </div>
            </div>
            <!-- Feature Item End -->
            <!-- Feature Item Start -->
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
                <div class="feature-item p-4">
                    <div class="feature-icon p-4 mb-4">
                        <i class="fas fa-flask fa-4x text-primary"></i>
                    </div>
                    <h4>Traditional Medicine</h4>
                    <p class="mb-4">Ada berbagai bagian tanaman yang bisa digunakan sebagai obat herbal, mulai dari daun, akar, hingga bunga nya.</p>
                </div>
            </div>
            <!-- Feature Item End -->
            <!-- Feature Item Start -->
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                <div class="feature-item p-4">
                    <div class="feature-icon p-4 mb-4">
                        <i class="fas fa-lungs fa-4x text-primary"></i>
                    </div>
                    <h4>Lungs of the world</h4>
                    <p class="mb-4">Hutan sebagai paru-paru dunia dengan menyerap karbon dioksida dan melepaskan oksigen dan keanekaragaman hayati terbesar di muka bumi.</p>
                </div>
            </div>
            <!-- Feature Item End -->
            <!-- Feature Item Start -->
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">
                <div class="feature-item p-4">
                    <div class="feature-icon p-4 mb-4">
                        <i class="fas fa-tree fa-4x text-primary"></i>
                    </div>
                    <h4>Prevent natural disasters</h4>
                    <p class="mb-4">Hutan memegang dua peran dalam global warming, yaitu sebagai penyerap dan penyumbang emisi dan menjaga ekologi.</p>
                </div>
            </div>
            <!-- Feature Item End -->
        </div>
    </div>
</div>
<!-- Features End -->

<!-- About Start -->
<div class="container-fluid about py-5" id="about">
    <div class="container py-5">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-primary">Our Purpose</h4>
            <h1 class="display-5 mb-4">Why Are We Here?</h1>
            <p class="mb-0">Kami hadir untuk melestarikan dan menjaga keanekaragaman hayati, serta menyediakan produk yang bermanfaat bagi kesehatan dan lingkungan.</p>
        </div>
        <div class="row g-5">
            <div class="col-lg-6">
                <div class="position-relative overflow-hidden rounded-3">
                    <img class="img-fluid" src="img/about.jpg" alt="">
                    <a href="https://www.youtube.com/watch?v=ScMzIvxBSi4" class="position-absolute top-50 start-50 translate-middle video-button">
                        <i class="fa fa-play"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-6">
                <h2 class="mb-4">Tentang Kami</h2>
                <p class="mb-4">Kami adalah penggiat pelestarian alam yang fokus pada penggunaan sumber daya alam secara berkelanjutan dan memanfaatkan keanekaragaman hayati untuk kebaikan bersama.</p>
                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="d-flex align-items-center">
                            <i class="fa fa-check-circle fa-2x text-primary me-3"></i>
                            <h5 class="mb-0">Lestarikan Alam</h5>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex align-items-center">
                            <i class="fa fa-check-circle fa-2x text-primary me-3"></i>
                            <h5 class="mb-0">Manfaatkan Sumber Daya</h5>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex align-items-center">
                            <i class="fa fa-check-circle fa-2x text-primary me-3"></i>
                            <h5 class="mb-0">Pendidikan Lingkungan</h5>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex align-items-center">
                            <i class="fa fa-check-circle fa-2x text-primary me-3"></i>
                            <h5 class="mb-0">Pengobatan Tradisional</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

<!-- Ramuan Start -->
<div class="container-fluid ramuan py-5" id="ramuan">
    <div class="container py-5">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-primary">Our Products</h4>
            <h1 class="display-5 mb-4">Produk Herbal Kami</h1>
            <p class="mb-0">Kami menyediakan berbagai produk herbal yang terbuat dari bahan alami berkualitas tinggi untuk kesehatan dan kesejahteraan Anda.</p>
        </div>
        <div class="row g-5">
            <!-- Product Item Start -->
            <div class="col-lg-4 col-md-6">
                <div class="product-item d-flex align-items-center bg-light rounded-3 p-4">
                    <div class="product-icon bg-white rounded-circle p-3 me-3">
                        <i class="fa fa-capsules fa-2x text-primary"></i>
                    </div>
                    <div>
                        <h5 class="mb-2">Herbal A</h5>
                        <p class="mb-0">Deskripsi singkat produk herbal A yang mengandung bahan alami berkualitas tinggi.</p>
                    </div>
                </div>
            </div>
            <!-- Product Item End -->
            <!-- Product Item Start -->
            <div class="col-lg-4 col-md-6">
                <div class="product-item d-flex align-items-center bg-light rounded-3 p-4">
                    <div class="product-icon bg-white rounded-circle p-3 me-3">
                        <i class="fa fa-capsules fa-2x text-primary"></i>
                    </div>
                    <div>
                        <h5 class="mb-2">Herbal B</h5>
                        <p class="mb-0">Deskripsi singkat produk herbal B yang mengandung bahan alami berkualitas tinggi.</p>
                    </div>
                </div>
            </div>
            <!-- Product Item End -->
            <!-- Product Item Start -->
            <div class="col-lg-4 col-md-6">
                <div class="product-item d-flex align-items-center bg-light rounded-3 p-4">
                    <div class="product-icon bg-white rounded-circle p-3 me-3">
                        <i class="fa fa-capsules fa-2x text-primary"></i>
                    </div>
                    <div>
                        <h5 class="mb-2">Herbal C</h5>
                        <p class="mb-0">Deskripsi singkat produk herbal C yang mengandung bahan alami berkualitas tinggi.</p>
                    </div>
                </div>
            </div>
            <!-- Product Item End -->
        </div>
    </div>
</div>
<!-- Ramuan End -->

<!-- Contact Start -->
<div class="container-fluid contact py-5">
    <div class="container py-5">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-primary">Contact Us</h4>
            <h1 class="display-5 mb-4">Get In Touch</h1>
            <p class="mb-0">Jika Anda memiliki pertanyaan atau ingin informasi lebih lanjut, jangan ragu untuk menghubungi kami melalui form berikut atau mengunjungi kantor kami.</p>
        </div>
        <div class="row g-5">
            <div class="col-lg-6">
                <form>
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="name" placeholder="Your Name">
                                <label for="name">Your Name</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="email" class="form-control" id="email" placeholder="Your Email">
                                <label for="email">Your Email</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea class="form-control" id="message" placeholder="Your Message" style="height: 150px;"></textarea>
                                <label for="message">Your Message</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary py-3 px-5" type="submit">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-6">
                <div class="contact-info">
                    <h4>Our Address</h4>
                    <p>123 Main Street, City, Country</p>
                    <h4>Phone</h4>
                    <p>+123 456 7890</p>
                    <h4>Email</h4>
                    <p>info@herby.com</p>
                    <h4>Working Hours</h4>
                    <p>Monday - Friday: 9:00 AM - 6:00 PM</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->
@endsection
