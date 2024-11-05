
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Paymaster - Payment solution</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Paymaster" />
        <meta name="website" content="Paymaster" />
      
        <!-- favicon -->
        <link rel="shortcut icon" href="{{ URL::to('assets/img/favicon.ico') }}">
        <!-- Bootstrap -->
        <link href="{{ URL::to('layouts/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- Icons -->
        <link href="{{ URL::to('layouts/css/materialdesignicons.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" rel="stylesheet">
        <!-- Main Css -->
        <link href="{{ URL::to('layouts/css/style.min.css') }}" rel="stylesheet" type="text/css" id="theme-opt" />

    </head>

    <body>
   
    
      
        <!-- Navbar STart -->
        <header id="topnav" class="defaultscroll sticky">
            <div class="container">
                <!-- Logo container-->
                <div>
                    <a class="logo" href="{{ url('/') }}">
                        <span class="logo-light-mode">
                            <img src="images/logo-dark1.png" class="l-dark"  alt="">
                            <img src="images/logo-dark1.png" class="l-light"  alt="">
                        </span>
                        <img src="images/logo-dark1.png"  class="logo-dark-mode" alt="">
                    </a>
                </div>                 
                <div class="buy-button">
                  <a href="{{ url('inscription') }}">
                    <div class="btn btn-primary login-btn-primary">Register</div>
                        <div class="btn btn-light login-btn-light">Register</div>
                    </a>
                </div><!--end login button-->
                <!-- End Logo container-->
                <div class="menu-extras">
                    <div class="menu-item">
                        <!-- Mobile menu toggle-->
                        <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                        <!-- End mobile menu toggle-->
                    </div>
                </div>
        
                <div id="navigation">
                    <!-- Navigation Menu-->   
                    <ul class="navigation-menu nav-right">
                    
                        <li><a href="{{ url('/') }}" class="sub-menu-item">Home</a></li>
                        <li class="has-submenu parent-parent-menu-item"><a href="">Company</a><span class="menu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="{{ url('about') }}" class="sub-menu-item">About us</a></li>
                                <li><a href="{{ url('blog') }}" class="sub-menu-item">Blog</a></li>
                                <li><a href="{{ url('faq') }}" class="sub-menu-item">FQA</a></li>
                                <li><a href="{{ url('contact') }}" class="sub-menu-item">Contacts</a></li>
                                <li><a href="{{ url('partenaire') }}" class="sub-menu-item">Partners</a></li>

                            </ul>
                        </li>
                        <li class="has-submenu parent-parent-menu-item"><a href="">Service</a><span class="menu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="{{ url('Systemepaiement') }}" class="sub-menu-item">Payment system</a></li>
                                <li><a href="{{ url('Modepaiement') }}" class="sub-menu-item">Payment methods
                                </a></li>
                                <li><a href="{{ url('SolutionCaisse') }}" class="sub-menu-item">POS Cashier System
                                </a></li>

                            </ul>
                            </li>


                            <li class="has-submenu parent-parent-menu-item"><a href="">API Documentation</a><span class="menu-arrow"></span>
                            <ul class="submenu">
                            <li><a href="{{ url('widget') }}" class="sub-menu-item">API Widget</a></li>
                                <li><a href="https://psp.paymaster.tn/docs/en/api" class="sub-menu-item">API Paymaster</a></li>
                                <li><a href="images/Services_payment_protocol_LY_paymentsapi_v1.0.4.pdf" download class="sub-menu-item"> API RunPay Services</a></li>
                                <li><a href="images/embeddedwalletapi_LY_documentation_v1.0.pdf" download class="sub-menu-item"> API Embedded Wallet</a></li> 

                            </ul>
                            </li>
                            <li><a href="{{ url('cms') }}" class="sub-menu-item">CMS</a></li>
                            <li><a href="{{ url('test') }}" class="sub-menu-item">Test</a></li>
                         
                        
                    </ul><!--end navigation menu-->
                  
                </div><!--end navigation-->
            </div><!--end container-->
        </header><!--end header-->
        <!-- Navbar End -->

    <div id="app">

        @yield('menu')
        {{-- content main page --}}
        @yield('content')
       
   
     <!-- ======= Footer ======= -->
     <div class="position-relative">
            <div class="shape overflow-hidden text-footer">
                <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
                </svg>
            </div>
        </div>

        
    <!-- Footer Start -->
    <footer class="bg-footer footer-bar">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 mb-0 mb-md-4 pb-0 pb-md-2">
                        <a href="#" class="logo-footer">
                            <img src="images/logo-light1.png" height="48" alt="">
                           

                        </a>
                        <ul class="list-unstyled footer-list px-0 mt-4">
                            <li><i data-feather="map-pin" class="fea icon-sm me-2"></i><a href="{{ url('contact') }}" class="text-foot">Mousahamat Digital Payment services 
12, Al Nakhla Str, Dahra, HT Group build, 7th floor Office 14, Tripoli, Libya</a></li>
                            <li><i data-feather="mail" class="fea icon-sm me-2"></i><a href="mailto:paymaster@runpay.ly" class="text-foot">paymaster@runpay.ly<br>support@paymaster.ly  
                            </a></li>
                            <li><i data-feather="phone" class="fea icon-sm me-2"></i><a href="tel:+218945782199" class="text-foot">+218 94 578 2199</a></li>
                        </ul>
                    </div><!--end col-->

                    <div class="col-lg-9 col-md-12">
                        <div class="row">
                            <div class="col-md-3 col-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                                <h5 class="footer-head">Company</h5>
                                <ul class="list-unstyled footer-list mt-4">
                                    <li><a href="{{ url('about') }}" class="text-foot"> About</a></li>
                                    <li><a href="{{ url('blog') }}" class="text-foot"> Blog</a></li>
                                    <li><a href="{{ url('faq') }}" class="text-foot"> FQA</a></li>
                                    <li><a href="{{ url('contact') }}" class="text-foot"> Contacts</a></li>
                                    <li><a href="{{ url('partenaire') }}" class="text-foot"> Partner</a></li>
                                </ul>
                            </div><!--end col-->
                            
                            <div class="col-md-3 col-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                                <h5 class="footer-head">Services</h5>
                                <ul class="list-unstyled footer-list mt-4">
                                    <li><a href="{{ url('Systemepaiement') }}" class="text-foot"> Payment system</a></li>
                                    <li><a href="{{ url('Modepaiement') }}" class="text-foot"> Payment method</a></li>
                                    <li><a href="{{ url('inscription') }}" class="text-foot"> Register</a></li>
 
                                </ul>
                            </div><!--end col-->
                            
                            <div class="col-md-3 col-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                                <h5 class="footer-head">API Documentation</h5>
                                <ul class="list-unstyled footer-list mt-4">
                                    <li><a href="{{ url('widget') }}" class="text-foot"> API Widget</a></li>
                                    <li><a href="https://psp.paymaster.tn/docs/en/api" class="text-foot"> API Paymaster</a></li>
                                    <li><a href="images/Services_payment_protocol_LY_paymentsapi_v1.0.4.pdf" download class="text-foot"> API RunPay Services</a></li>
                                    <li><a href="images/embeddedwalletapi_LY_documentation_v1.0.pdf" download class="text-foot"> API Embedded Wallet</a></li>
                                    <li><a href="{{ url('cms') }}" class="text-foot"> CMS</a></li>
                                    <li><a href="{{ url('test') }}" class="text-foot"> Demo</a></li>
                                </ul>
                            </div><!--end col-->
                            
                            <div class="col-md-3 col-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                                <h5 class="footer-head">Useful links
                                </h5>
                                <ul class="list-unstyled footer-list mt-4">
                                    <li><a href="javascript:void(0)" class="text-foot">  Terms of use</a></li>
                                    <li><a href="javascript:void(0)" class="text-foot">  Privacy policy</a></li>
                               
                                </ul>
                            </div><!--end col-->
                        </div><!--end row-->
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->

            <div class="container mt-5">
                <div class="pt-4 footer-bar">
                    <div class="row align-items-center">
                        <div class="col-sm-6">
                            <div class="text-sm-start text-center">
                                <ul class="list-unstyled social-icon social mb-0 mt-4 mt-sm-0">
                                    <li class="list-inline-item"><a href="" target="_blank" class="rounded"><i class="uil uil-linkedin" title="Linkedin"></i></a></li>

                                    <li class="list-inline-item"><a href="mailto:paymaster@runpay.tn" class="rounded"><i class="uil uil-envelope align-middle" title="email"></i></a></li>                                
                                </ul><!--end icon-->
                            </div>
                        </div>
    
                        <div class="col-sm-6 mt-4 mt-sm-0">
                            <ul class="list-unstyled footer-list text-sm-end text-center mb-0">
                                <li class="list-inline-item"><a href="javascript:void(0)" class="text-foot me-2">Terms of use</a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)" class="text-foot me-2">Privacy policy</a></li>
                                <li class="list-inline-item"><a href="{{ url('about') }}" class="text-foot me-2">About</a></li>
                                <li class="list-inline-item"><a href="{{ url('contact') }}" class="text-foot me-2">Contacts</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="row justify-content-center mt-4">
                        <div class="col-12 text-center">
                            <p class="mb-0">© <script>document.write(new Date().getFullYear())</script> PayMaster Libya | Online payment solution </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer><!--end footer-->
        <!-- Footer End -->
       

        <!-- Back to top -->
        <a href="#" class="btn btn-icon btn-pills btn-primary back-to-top" id="back-to-top"><i data-feather="arrow-up" class="icons"></i></a>
        <!-- Back to top -->

        
      
        <!-- javascript -->
        <script src="layouts/js/bootstrap.bundle.min.js"></script>
        <!-- Icons -->
        <script src="layouts/js/feather.min.js"></script>
      
        <!-- Main Js -->
        <script src="layouts/js/app.js"></script>
     
        <script src="layouts/js/tobii.min.js"></script>
        <script src="layouts/js/tiny-slider.js "></script>
        <script src="layouts/js/tiny-slider-init.js "></script>

        <!-- Icons -->
    </body>
</html>