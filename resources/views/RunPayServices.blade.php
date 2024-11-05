@extends('layouts.paymastermaster')

@section('content')
<!-- Hero Start -->
<section class="bg-half-170 d-table w-100 bg-light">
        <div class="container">
            <div class="row mt-5 justify-content-center">
                <div class="col-12">
                    <div class="heading-title text-center">
                        <h1 class="title fw-bold">API <span style="color:#94c83d;">Run</span><span style="color:#024894;">Pay</span>  Services</h1>
                        <p class="para-desc mx-auto text-muted mb-0">With many years of experience in payments and financial services industry, our team of experts has a proven track record of delivering innovative solutions that drive growth and success.</p>

                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!--end section-->
    <div class="position-relative">
        <div class="shape overflow-hidden text-white">
            <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
            </svg>
        </div>
    </div>
    <!-- Hero End -->

    <section class="section">
    <div class="container mt-20 mt-60">
                <div class="row align-items-center">
                    <div class="col-md-6 order-1 order-md-2">
                        <div class="section-title">
                        <h6 class="text-primary">Service</h6>

                            <h4 class="title mb-4">Runpay Solutions</h4>
                            <p class="para=desc text-muted"> 
                            At Runpay Solutions, we're passionate about empowering businesses with the latest payment and IT solutions. Whether you're a fintech startup, bank, financial or credit company, government agency, or any other organization, we're committed to helping you thrive in today's digital economy. With years of experience in the payments and financial services industry, our team of experts has a proven track record of delivering innovative solutions that drive growth and success. Join our community of satisfied clients and see how Runpay Solutions can take your business to the next level. Through our API services interfaces and sophisticated back-end, we process payments that cater to hundreds of vendors across the country. Our expansive service list includes support for internet services, cellular providers, gaming platforms, cryptocurrency wallets, utility bill payments, Bank transactions, bank card deposits, and cash-outs. Our robust and secured infrastructure can efficiently handle upwards of 75,000 transactions each second. So don't hesitate to get all services from RunPay to simplify your business life.
                            </p>
                             
                            <div class="mt-4">
                            <a href="images/file/Services_payment_protocol_LY_paymentsapi_v1.0.4.pdf" download class="btn btn-primary m-1">API Documentation</a>
                                <a href="" class="btn btn-soft-primary m-1">Go to Runpay <i data-feather="arrow-right" class="fea icon-sm"></i></a>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-md-6 order-2 order-md-1 mt-4 pt-2 mt-sm-0 pt-sm-0">
                        <div class="card border-0 shadow rounded me-lg-4">
                            <div class="p-2">
                                <a class="text-danger"><i class="uil uil-circle"></i></a>
                                <a class="text-warning"><i class="uil uil-circle"></i></a>
                                <a class="text-success"><i class="uil uil-circle"></i></a>
                            </div>
                            <div class="bg-light card-body p-md-4 p-2">
                                <img src="logo/runpay.png" alt="" class="img-fluid mx-auto d-block">
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->

    <div class="container">
            <div class="row justify-content-center mb-4">
                
            <div class="col-12">

                        <div class="section-title text-center mb-4 pb-2">
                            </br></br>
                            <h4 class="title mb-4">Runpay Service </h4>
                        </div>
                
                <div class="col-12 filters-group-wrap">
                    <div class="filters-group">
                        <ul class="container-filter categories-filter list-inline mb-0 filter-options text-center">
                            <li class="list-inline-item position-relative categories categories-name text-dark rounded px-1 mx-1 active" data-group="all"><B> All</B></li>
                            <li class="list-inline-item position-relative categories categories-name text-dark rounded px-1 mx-1" data-group="GSM"><B>GSM Tickets</B></li>
                            <li class="list-inline-item position-relative categories categories-name text-dark rounded px-1 mx-1" data-group="IP"><B>IP-TV</B></li>
                            <li class="list-inline-item position-relative categories categories-name text-dark rounded px-1 mx-1" data-group="Games"><B>Games</B></li>
                            <li class="list-inline-item position-relative categories categories-name text-dark rounded px-1 mx-1" data-group="INTERNET"><B>INTERNET</B></li>
                            <li class="list-inline-item position-relative categories categories-name text-dark rounded px-1 mx-1" data-group="Softwares"><B>Softwares and Antiviruses</B></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--end of container-->


        <div class="container">
            <div id="grid" class="row row-cols-lg-5 row-cols-md-2 pb-2 mb-4">
                <div class="col-12 spacing picture-item" data-groups='["Softwares"]'>
                    <div class="card portfolio portfolio-modern d-grid border-0">
                        <div class="portfolio-box position-relative rounded-2 shadow overflow-hidden">
                            <img src="Service/10.png" class="img-fluid" alt="">
                            <div class="overlay-work"></div>
                            <div class="content bottom-0 p-4 position-absolute">
                                <h6 class="tag mb-1">Softwares</h6>
                                <a  class="title fw-bold d-block mb-0 text-decoration-none h5">Norton</a>
                            </div>
                        </div>
                    </div>
                </div>
             
                <div class="col-12 spacing picture-item" data-groups='["Games"]'>
                    <div class="card portfolio portfolio-modern d-grid border-0">
                        <div class="portfolio-box position-relative rounded-2 shadow overflow-hidden">
                            <img src="Service/35.png" class="img-fluid" alt="">
                            <div class="overlay-work"></div>
                            <div class="content bottom-0 p-4 position-absolute">
                                <h6 class="tag mb-1">Games</h6>
                                <a  class="title fw-bold d-block mb-0 text-decoration-none h5">EA play</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 spacing picture-item" data-groups='["Games"]'>
                    <div class="card portfolio portfolio-modern d-grid border-0">
                        <div class="portfolio-box position-relative rounded-2 shadow overflow-hidden">
                            <img src="Service/36.png" class="img-fluid" alt="">
                            <div class="overlay-work"></div>
                            <div class="content bottom-0 p-4 position-absolute">
                                <h6 class="tag mb-1">Games</h6>
                                <a  class="title fw-bold d-block mb-0 text-decoration-none h5">eBay</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 spacing picture-item" data-groups='["Games"]'>
                    <div class="card portfolio portfolio-modern d-grid border-0">
                        <div class="portfolio-box position-relative rounded-2 shadow overflow-hidden">
                            <img src="Service/37.png" class="img-fluid" alt="">
                            <div class="overlay-work"></div>
                            <div class="content bottom-0 p-4 position-absolute">
                                <h6 class="tag mb-1">Games</h6>
                                <a  class="title fw-bold d-block mb-0 text-decoration-none h5">Valorant</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 spacing picture-item" data-groups='["Softwares"]'>
                    <div class="card portfolio portfolio-modern d-grid border-0">
                        <div class="portfolio-box position-relative rounded-2 shadow overflow-hidden">
                            <img src="Service/11.png" class="img-fluid" alt="">
                            <div class="overlay-work"></div>
                            <div class="content bottom-0 p-4 position-absolute">
                                <h6 class="tag mb-1">Softwares</h6>
                                <a  class="title fw-bold d-block mb-0 text-decoration-none h5">Trend</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 spacing picture-item" data-groups='["Games"]'>
                    <div class="card portfolio portfolio-modern d-grid border-0">
                        <div class="portfolio-box position-relative rounded-2 shadow overflow-hidden">
                            <img src="Service/34.png" class="img-fluid" alt="">
                            <div class="overlay-work"></div>
                            <div class="content bottom-0 p-4 position-absolute">
                                <h6 class="tag mb-1">Games</h6>
                                <a  class="title fw-bold d-block mb-0 text-decoration-none h5">AMAZON GIFT CARD</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 spacing picture-item" data-groups='["Games"]'>
                    <div class="card portfolio portfolio-modern d-grid border-0">
                        <div class="portfolio-box position-relative rounded-2 shadow overflow-hidden">
                            <img src="Service/12.png" class="img-fluid" alt="">
                            <div class="overlay-work"></div>
                            <div class="content bottom-0 p-4 position-absolute">
                                <h6 class="tag mb-1">Games</h6>
                                <a  class="title fw-bold d-block mb-0 text-decoration-none h5">Gold</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 spacing picture-item" data-groups='["Games"]'>
                    <div class="card portfolio portfolio-modern d-grid border-0">
                        <div class="portfolio-box position-relative rounded-2 shadow overflow-hidden">
                            <img src="Service/7.png" class="img-fluid" alt="">
                            <div class="overlay-work"></div>
                            <div class="content bottom-0 p-4 position-absolute">
                                <h6 class="tag mb-1">Games</h6>
                                <a  class="title fw-bold d-block mb-0 text-decoration-none h5">Xbox</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 spacing picture-item" data-groups='["Games"]'>
                    <div class="card portfolio portfolio-modern d-grid border-0">
                        <div class="portfolio-box position-relative rounded-2 shadow overflow-hidden">
                            <img src="Service/6.png" class="img-fluid" alt="">
                            <div class="overlay-work"></div>
                            <div class="content bottom-0 p-4 position-absolute">
                                <h6 class="tag mb-1">Games</h6>
                                <a  class="title fw-bold d-block mb-0 text-decoration-none h5">APEX</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 spacing picture-item" data-groups='["Games"]'>
                    <div class="card portfolio portfolio-modern d-grid border-0">
                        <div class="portfolio-box position-relative rounded-2 shadow overflow-hidden">
                            <img src="Service/5.png" class="img-fluid" alt="">
                            <div class="overlay-work"></div>
                            <div class="content bottom-0 p-4 position-absolute">
                                <h6 class="tag mb-1">Games</h6>
                                <a  class="title fw-bold d-block mb-0 text-decoration-none h5">PUBG</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 spacing picture-item" data-groups='["INTERNET"]'>
                    <div class="card portfolio portfolio-modern d-grid border-0">
                        <div class="portfolio-box position-relative rounded-2 shadow overflow-hidden">
                            <img src="Service/4.png" class="img-fluid" alt="">
                            <div class="overlay-work"></div>
                            <div class="content bottom-0 p-4 position-absolute">
                                <h6 class="tag mb-1">INTERNET</h6>
                                <a  class="title fw-bold d-block mb-0 text-decoration-none h5">ALNABDA</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 spacing picture-item" data-groups='["INTERNET"]'>
                    <div class="card portfolio portfolio-modern d-grid border-0">
                        <div class="portfolio-box position-relative rounded-2 shadow overflow-hidden">
                            <img src="Service/3.png" class="img-fluid" alt="">
                            <div class="overlay-work"></div>
                            <div class="content bottom-0 p-4 position-absolute">
                                <h6 class="tag mb-1">INTERNET</h6>
                                <a  class="title fw-bold d-block mb-0 text-decoration-none h5">CONNECT</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 spacing picture-item" data-groups='["INTERNET"]'>
                    <div class="card portfolio portfolio-modern d-grid border-0">
                        <div class="portfolio-box position-relative rounded-2 shadow overflow-hidden">
                            <img src="Service/2.png" class="img-fluid" alt="">
                            <div class="overlay-work"></div>
                            <div class="content bottom-0 p-4 position-absolute">
                                <h6 class="tag mb-1">INTERNET</h6>
                                <a  class="title fw-bold d-block mb-0 text-decoration-none h5">OXYGEN</a>
                            </div>
                        </div>
                    </div>
                </div>



               
                <div class="col-12 spacing picture-item" data-groups='["Games"]'>
                    <div class="card portfolio portfolio-modern d-grid border-0">
                        <div class="portfolio-box position-relative rounded-2 shadow overflow-hidden">
                            <img src="Service/13.png" class="img-fluid" alt="">
                            <div class="overlay-work"></div>
                            <div class="content bottom-0 p-4 position-absolute">
                                <h6 class="tag mb-1">Games</h6>
                                <a  class="title fw-bold d-block mb-0 text-decoration-none h5">Freefire</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 spacing picture-item" data-groups='["Games"]'>
                    <div class="card portfolio portfolio-modern d-grid border-0">
                        <div class="portfolio-box position-relative rounded-2 shadow overflow-hidden">
                            <img src="Service/14.png" class="img-fluid" alt="">
                            <div class="overlay-work"></div>
                            <div class="content bottom-0 p-4 position-absolute">
                                <h6 class="tag mb-1">Games</h6>
                                <a  class="title fw-bold d-block mb-0 text-decoration-none h5">Robolox</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 spacing picture-item" data-groups='["Games"]'>
                    <div class="card portfolio portfolio-modern d-grid border-0">
                        <div class="portfolio-box position-relative rounded-2 shadow overflow-hidden">
                            <img src="Service/15.png" class="img-fluid" alt="">
                            <div class="overlay-work"></div>
                            <div class="content bottom-0 p-4 position-absolute">
                                <h6 class="tag mb-1">Games</h6>
                                <a  class="title fw-bold d-block mb-0 text-decoration-none h5">V</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 spacing picture-item" data-groups='["Games"]'>
                    <div class="card portfolio portfolio-modern d-grid border-0">
                        <div class="portfolio-box position-relative rounded-2 shadow overflow-hidden">
                            <img src="Service/16.png" class="img-fluid" alt="">
                            <div class="overlay-work"></div>
                            <div class="content bottom-0 p-4 position-absolute">
                                <h6 class="tag mb-1">Games</h6>
                                <a  class="title fw-bold d-block mb-0 text-decoration-none h5">Nintendo</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 spacing picture-item" data-groups='["Softwares"]'>
                    <div class="card portfolio portfolio-modern d-grid border-0">
                        <div class="portfolio-box position-relative rounded-2 shadow overflow-hidden">
                            <img src="Service/17.png" class="img-fluid" alt="">
                            <div class="overlay-work"></div>
                            <div class="content bottom-0 p-4 position-absolute">
                                <h6 class="tag mb-1">Softwares</h6>
                                <a  class="title fw-bold d-block mb-0 text-decoration-none h5">AVG</a>
                            </div>
                        </div>
                    </div>
                </div>
            
                <div class="col-12 spacing picture-item" data-groups='["IP"]'>
                    <div class="card portfolio portfolio-modern d-grid border-0">
                        <div class="portfolio-box position-relative rounded-2 shadow overflow-hidden">
                            <img src="Service/18.png" class="img-fluid" alt="">
                            <div class="overlay-work"></div>
                            <div class="content bottom-0 p-4 position-absolute">
                                <h6 class="tag mb-1">IP</h6>
                                <a  class="title fw-bold d-block mb-0 text-decoration-none h5">Netflix</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 spacing picture-item" data-groups='["IP"]'>
                    <div class="card portfolio portfolio-modern d-grid border-0">
                        <div class="portfolio-box position-relative rounded-2 shadow overflow-hidden">
                            <img src="Service/19.png" class="img-fluid" alt="">
                            <div class="overlay-work"></div>
                            <div class="content bottom-0 p-4 position-absolute">
                                <h6 class="tag mb-1">IP</h6>
                                <a  class="title fw-bold d-block mb-0 text-decoration-none h5">Shahid VIP</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 spacing picture-item" data-groups='["Softwares"]'>
                    <div class="card portfolio portfolio-modern d-grid border-0">
                        <div class="portfolio-box position-relative rounded-2 shadow overflow-hidden">
                            <img src="Service/20.png" class="img-fluid" alt="">
                            <div class="overlay-work"></div>
                            <div class="content bottom-0 p-4 position-absolute">
                                <h6 class="tag mb-1">Softwares</h6>
                                <a  class="title fw-bold d-block mb-0 text-decoration-none h5">MCAfee</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 spacing picture-item" data-groups='["INTERNET"]'>
                    <div class="card portfolio portfolio-modern d-grid border-0">
                        <div class="portfolio-box position-relative rounded-2 shadow overflow-hidden">
                            <img src="Service/21.png" class="img-fluid" alt="">
                            <div class="overlay-work"></div>
                            <div class="content bottom-0 p-4 position-absolute">
                                <h6 class="tag mb-1">INTERNET</h6>
                                <a  class="title fw-bold d-block mb-0 text-decoration-none h5">ALRIYADA</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 spacing picture-item" data-groups='["INTERNET"]'>
                    <div class="card portfolio portfolio-modern d-grid border-0">
                        <div class="portfolio-box position-relative rounded-2 shadow overflow-hidden">
                            <img src="Service/22.png" class="img-fluid" alt="">
                            <div class="overlay-work"></div>
                            <div class="content bottom-0 p-4 position-absolute">
                                <h6 class="tag mb-1">INTERNET</h6>
                                <a  class="title fw-bold d-block mb-0 text-decoration-none h5">LTT</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 spacing picture-item" data-groups='["INTERNET"]'>
                    <div class="card portfolio portfolio-modern d-grid border-0">
                        <div class="portfolio-box position-relative rounded-2 shadow overflow-hidden">
                            <img src="Service/23.png" class="img-fluid" alt="">
                            <div class="overlay-work"></div>
                            <div class="content bottom-0 p-4 position-absolute">
                                <h6 class="tag mb-1">INTERNET</h6>
                                <a  class="title fw-bold d-block mb-0 text-decoration-none h5">GIGA</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 spacing picture-item" data-groups='["INTERNET"]'>
                    <div class="card portfolio portfolio-modern d-grid border-0">
                        <div class="portfolio-box position-relative rounded-2 shadow overflow-hidden">
                            <img src="Service/24.png" class="img-fluid" alt="">
                            <div class="overlay-work"></div>
                            <div class="content bottom-0 p-4 position-absolute">
                                <h6 class="tag mb-1">INTERNET</h6>
                                <a  class="title fw-bold d-block mb-0 text-decoration-none h5">
Rawafed Libya</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 spacing picture-item" data-groups='["Softwares"]'>
                    <div class="card portfolio portfolio-modern d-grid border-0">
                        <div class="portfolio-box position-relative rounded-2 shadow overflow-hidden">
                            <img src="Service/25.png" class="img-fluid" alt="">
                            <div class="overlay-work"></div>
                            <div class="content bottom-0 p-4 position-absolute">
                                <h6 class="tag mb-1">Softwares</h6>
                                <a  class="title fw-bold d-block mb-0 text-decoration-none h5">Kaspersky</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 spacing picture-item" data-groups='["Softwares"]'>
                    <div class="card portfolio portfolio-modern d-grid border-0">
                        <div class="portfolio-box position-relative rounded-2 shadow overflow-hidden">
                            <img src="Service/26.png" class="img-fluid" alt="">
                            <div class="overlay-work"></div>
                            <div class="content bottom-0 p-4 position-absolute">
                                <h6 class="tag mb-1">Softwares</h6>
                                <a  class="title fw-bold d-block mb-0 text-decoration-none h5">avast</a>
                            </div>
                        </div>
                    </div>
                </div>
            

                <div class="col-12 spacing picture-item" data-groups='["Games"]'>
                    <div class="card portfolio portfolio-modern d-grid border-0">
                        <div class="portfolio-box position-relative rounded-2 shadow overflow-hidden">
                            <img src="Service/27.png" class="img-fluid" alt="">
                            <div class="overlay-work"></div>
                            <div class="content bottom-0 p-4 position-absolute">
                                <h6 class="tag mb-1">Games</h6>
                                <a  class="title fw-bold d-block mb-0 text-decoration-none h5"> Google Play US</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 spacing picture-item" data-groups='["Games"]'>
                    <div class="card portfolio portfolio-modern d-grid border-0">
                        <div class="portfolio-box position-relative rounded-2 shadow overflow-hidden">
                            <img src="Service/28.png" class="img-fluid" alt="">
                            <div class="overlay-work"></div>
                            <div class="content bottom-0 p-4 position-absolute">
                                <h6 class="tag mb-1">Games</h6>
                                <a  class="title fw-bold d-block mb-0 text-decoration-none h5">Apple Card US</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 spacing picture-item" data-groups='["Games"]'>
                    <div class="card portfolio portfolio-modern d-grid border-0">
                        <div class="portfolio-box position-relative rounded-2 shadow overflow-hidden">
                            <img src="Service/29.png" class="img-fluid" alt="">
                            <div class="overlay-work"></div>
                            <div class="content bottom-0 p-4 position-absolute">
                                <h6 class="tag mb-1">Games</h6>
                                <a  class="title fw-bold d-block mb-0 text-decoration-none h5">MINECRAFT</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 spacing picture-item" data-groups='["Games"]'>
                    <div class="card portfolio portfolio-modern d-grid border-0">
                        <div class="portfolio-box position-relative rounded-2 shadow overflow-hidden">
                            <img src="Service/30.png" class="img-fluid" alt="">
                            <div class="overlay-work"></div>
                            <div class="content bottom-0 p-4 position-absolute">
                                <h6 class="tag mb-1">Games</h6>
                                <a  class="title fw-bold d-block mb-0 text-decoration-none h5">BLIZZARD</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 spacing picture-item" data-groups='["Games"]'>
                    <div class="card portfolio portfolio-modern d-grid border-0">
                        <div class="portfolio-box position-relative rounded-2 shadow overflow-hidden">
                            <img src="Service/31.png" class="img-fluid" alt="">
                            <div class="overlay-work"></div>
                            <div class="content bottom-0 p-4 position-absolute">
                                <h6 class="tag mb-1">Games</h6>
                                <a  class="title fw-bold d-block mb-0 text-decoration-none h5">Apple iTunes GIFT CARD</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 spacing picture-item" data-groups='["Games"]'>
                    <div class="card portfolio portfolio-modern d-grid border-0">
                        <div class="portfolio-box position-relative rounded-2 shadow overflow-hidden">
                            <img src="Service/32.png" class="img-fluid" alt="">
                            <div class="overlay-work"></div>
                            <div class="content bottom-0 p-4 position-absolute">
                                <h6 class="tag mb-1">Games</h6>
                                <a  class="title fw-bold d-block mb-0 text-decoration-none h5">Google GIFT CARD</a>
                            </div>
                        </div>
                    </div>
                </div>
             
                <div class="col-12 spacing picture-item" data-groups='["Games"]'>
                    <div class="card portfolio portfolio-modern d-grid border-0">
                        <div class="portfolio-box position-relative rounded-2 shadow overflow-hidden">
                            <img src="Service/33.png" class="img-fluid" alt="">
                            <div class="overlay-work"></div>
                            <div class="content bottom-0 p-4 position-absolute">
                                <h6 class="tag mb-1">Games</h6>
                                <a  class="title fw-bold d-block mb-0 text-decoration-none h5">STEAM</a>
                            </div>
                        </div>
                    </div>
                </div>
          
                <div class="col-12 spacing picture-item" data-groups='["Softwares"]'>
                    <div class="card portfolio portfolio-modern d-grid border-0">
                        <div class="portfolio-box position-relative rounded-2 shadow overflow-hidden">
                            <img src="Service/1.png" class="img-fluid" alt="">
                            <div class="overlay-work"></div>
                            <div class="content bottom-0 p-4 position-absolute">
                                <h6 class="tag mb-1">Softwares</h6>
                                <a  class="title fw-bold d-block mb-0 text-decoration-none h5">Bitdefender</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 spacing picture-item" data-groups='["Games"]'>
                    <div class="card portfolio portfolio-modern d-grid border-0">
                        <div class="portfolio-box position-relative rounded-2 shadow overflow-hidden">
                            <img src="Service/38.png" class="img-fluid" alt="">
                            <div class="overlay-work"></div>
                            <div class="content bottom-0 p-4 position-absolute">
                                <h6 class="tag mb-1">Games</h6>
                                <a  class="title fw-bold d-block mb-0 text-decoration-none h5"> Merge Kingdom Warlords</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 spacing picture-item" data-groups='["Games"]'>
                    <div class="card portfolio portfolio-modern d-grid border-0">
                        <div class="portfolio-box position-relative rounded-2 shadow overflow-hidden">
                            <img src="Service/39.png" class="img-fluid" alt="">
                            <div class="overlay-work"></div>
                            <div class="content bottom-0 p-4 position-absolute">
                                <h6 class="tag mb-1">Games</h6>
                                <a  class="title fw-bold d-block mb-0 text-decoration-none h5">imo</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 spacing picture-item" data-groups='["Games"]'>
                    <div class="card portfolio portfolio-modern d-grid border-0">
                        <div class="portfolio-box position-relative rounded-2 shadow overflow-hidden">
                            <img src="Service/40.png" class="img-fluid" alt="">
                            <div class="overlay-work"></div>
                            <div class="content bottom-0 p-4 position-absolute">
                                <h6 class="tag mb-1">Games</h6>
                                <a  class="title fw-bold d-block mb-0 text-decoration-none h5">League of Legends EU</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 spacing picture-item" data-groups='["GSM"]'>
                    <div class="card portfolio portfolio-modern d-grid border-0">
                        <div class="portfolio-box position-relative rounded-2 shadow overflow-hidden">
                            <img src="logo/madar.png" class="img-fluid" alt="">
                            <div class="overlay-work"></div>
                            <div class="content bottom-0 p-4 position-absolute">
                                <h6 class="tag mb-1">GSM</h6>
                                <a  class="title fw-bold d-block mb-0 text-decoration-none h5">Almadar</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 spacing picture-item" data-groups='["GSM"]'>
                    <div class="card portfolio portfolio-modern d-grid border-0">
                        <div class="portfolio-box position-relative rounded-2 shadow overflow-hidden">
                            <img src="logo/libyana.png" class="img-fluid" alt="">
                            <div class="overlay-work"></div>
                            <div class="content bottom-0 p-4 position-absolute">
                                <h6 class="tag mb-1">GSM</h6>
                                <a  class="title fw-bold d-block mb-0 text-decoration-none h5">Libyana</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         
        </div>
        <!--end of container-->

    
    

   
    
    </section>
          <!-- javascript -->
    <script src="Service/shuffle.js"></script>
    <!-- Icons -->
        @endsection
       