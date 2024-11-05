<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Paymaster - Payment solution</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Paymaster" />
        <meta name="website" content="Paymaster" />
 
        <!-- favicon -->
        <link rel="shortcut icon" href="./assets/img/favicon.ico">
        <!-- Bootstrap -->
        <link href="./layouts/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- Icons -->
        <link href="./layouts/css/materialdesignicons.min.css" rel="stylesheet" type="text/css" />
        <link href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" rel="stylesheet">
        <!-- Main Css -->
        <link href="./layouts/css/style.min.css" rel="stylesheet" type="text/css" id="theme-opt" />
<script>
$(document).ready(function(){
 $("form").submit(function(){
   var response = grecaptcha.getResponse();
      if(response.length == 0){
          alert('Please check the Captcha');
    return false;
 } 
 });
});
</script>
 <script type="text/javascript">
 var onloadCallback = function() {
 grecaptcha.render('html_element', {
 'sitekey' : '6LcRx2oqAAAAAPjk1fow3er6IhZAzx_zTCSmVT6T'
 });
 };
 </script>
    </head>
 
    <body>
   <!-- Messenger Plugin de discussion Code -->
   <div id="fb-root"></div>
 
<!-- Your Plugin de discussion code -->
<div id="fb-customer-chat" class="fb-customerchat">
</div>
 
<script>
  var chatbox = document.getElementById('fb-customer-chat');
  chatbox.setAttribute("page_id", "233515016504170");
  chatbox.setAttribute("attribution", "biz_inbox");
</script>
 
<!-- Your SDK code -->
<script>
  window.fbAsyncInit = function() {
    FB.init({
      xfbml            : true,
      version          : 'v19.0'
    });
  };
 
  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
</script>   
 
 
 
 
    <div id="app">
 
 
        <link rel="stylesheet" href="https://paymaster.tn/dz/dz/style-prefix.css">
 
<script src="https://dz.paymaster.pro/cpay/sdk/payment-widget.js"></script>
 
        <!-- Start -->
        <section class="bg-half-130 d-table bg-primary w-100" style="background: url('./images/bg-lines-one.png') center;">
            <div class="container">
                <div class="row mt-5">
                    <div class="col-12">
<center><a href="{{ url('/') }}" class="text-foot"><img src="./images/logo-light1.png" class="l-light" alt=""></a></center>
                      <h3 class="heading fw-bold text-white title-dark text-center">Essayez maintenant notre solution de paiement </h3>
 
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
 
        </section><!--end section-->
        <!-- End -->
        <div class="container mt-5">
          <div class="row">
              <div class="col-12">
                  <ul class="list-unstyled text-muted h6 text-lg-center mb-0">
                      <li class="list-inline-item me-lg-5 me-4"><span class="text-primary h3 me-2"><i class="uil uil-check-circle align-middle"></i></span>Une solution parfaite</li>
                      <li class="list-inline-item me-lg-5 me-4"><span class="text-primary h3 me-2"><i class="uil uil-check-circle align-middle"></i></span>100% Sécurisé</li>
                      <li class="list-inline-item me-lg-5 me-4"><span class="text-primary h3 me-2"><i class="uil uil-check-circle align-middle"></i></span>Différentes méthodes de paiement</li>
                      <li class="list-inline-item me-lg-5 me-4"><span class="text-primary h3 me-2"><i class="uil uil-check-circle align-middle"></i></span>Intégration rapide</li>
                  </ul>
              </div><!--end col-->
          </div><!--end row-->
      </div>
 
        <!-- Start -->
        <section class="section">
            <div class="container">
 
 
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="row">
 
          <div class="product-featured">
 
 
            <div class="showcase-wrapper has-scrollbar">
 
              <div class="showcase-container">
 
                <div class="showcase">
 
                  <div class="showcase-banner">
                    <img src="./images/desc_2.jpg" alt="img" class="showcase-img">
                  </div>
 
                  <div class="showcase-content">
 
                    <div class="showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>
                    </div>
 
                    <a href="#">
                      <h3 class="showcase-title">Paiement du test
                        </h3>
                    </a>
 
                    <p class="showcase-desc">
                      Toutes les transactions présentées ici sont des transactions de test et de démonstration et ne sont pas effectuées dans le système. Tous les fonds resteront sur leurs comptes ; le système réel n'est en aucun cas impliqué.
 
                    </p>
 
                    <div class="price-box">
                      <p class="price">1.00<sup><B>DA</B></sup></p>
                      <p></p>
 
                      <del>200.00<sup><B>DA</B></sup></del>
                    </div>
                    <script>
function pay () {
 
    var paymentWidget = new cpay.PaymentWidget();
 
    paymentWidget.init({
        merchantId: "113389ac-6a42-4099-9fc4-e69f392efeb8",
        invoice: {
            description: "test payment"
        },
        amount: {
            value: 1,
            currency: "DZD"
        }
    });
}
</script>
 
 
<form id="saveForm" class="form-check" method="post" >
  <label>
      <input  class="form-check-input"  type="checkbox" id="myCheckbox" onchange="toggleSubmitButton()"> 
     <strong> j'accepte <a href="https://paymaster.tn/dz/dz/acord.html" target="_blank">les conditions d'utilisation</a> <strong>
  </label>
 
 
 
  <br>
  <div class="g-recaptcha" data-sitekey="6LdY0moqAAAAAHTdZ_ETODurDoC7BOdyej6F7tdy" data-callback="onCaptchaSuccess"></div>
  <br>
  <button type="submit" id="submitButton" onclick="pay()"  class="btn btn-soft-primary mb-2"target="_blank" disabled><img src="https://paymaster.tn/dz/dz/CIB Cartes.png" alt="" width="50" height="30"> Payer</button>        
  <div class="showcase-status">
    <div class="wrapper">
      <p>
        déjà vendus : <b>20</b>
      </p>
 
      <p>
        disponible: <b>40</b>
      </p>
    </div>
 
    <div class="showcase-status-bar"></div>
  </div>
  <input type="checkbox" class="form-control " 
                             id="first-name-icon" name="email" required="required">   
</form>
 
<script>
  let captchaCompleted = false;
 
  function onCaptchaSuccess() {
      captchaCompleted = true;
      toggleSubmitButton();
  }
 
  function resetCaptcha() {
      grecaptcha.reset();
      captchaCompleted = false;
      toggleSubmitButton();
  }
 
  function toggleSubmitButton() {
      const checkbox = document.getElementById('myCheckbox');
      const submitButton = document.getElementById('submitButton');
      submitButton.disabled = !(checkbox.checked && captchaCompleted);
  }
</script>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
 
 
 
 
                    <div class="countdown-box">
 
                      <p class="countdown-desc">
                        Dépêchez-vous ! L'offre se termine en :                      </p>
 
                      <div class="countdown">
 
                        <div class="countdown-content">
 
                          <p class="display-number">360</p>
 
                          <p class="display-text">Jours</p>
 
                        </div>
 
                        <div class="countdown-content">
                          <p class="display-number">24</p>
                          <p class="display-text">Heures</p>
                        </div>
 
                        <div class="countdown-content">
                          <p class="display-number">59</p>
                          <p class="display-text">Min</p>
                        </div>
 
                        <div class="countdown-content">
                          <p class="display-number">00</p>
                          <p class="display-text">Sec</p>
                        </div>
 
                      </div>
 
                    </div>
 
                  </div>
 
                </div>
 
              </div>
 
 
 
            </div>
 
          </div>
 
 
 
          <!--
            - PRODUCT GRID
          -->
 
          <div class="product-main">
 
            <h4 class="heading fw-bold mb-4">Paiement par widget</h4>
            <p class="showcase-desc">
                      Toutes les transactions présentées ici sont des transactions de test et de démonstration et ne sont pas effectuées dans le système. Tous les fonds resteront sur leurs comptes ; le système réel n'est en aucun cas impliqué.
 
                    </p>      <p class="showcase-desc" style="color:#af2204">
                       <strong> Pour payer avec widget, vous devez accepter les conditions d'utilisation</strong>
 
                    </p>
<div class="mb-0">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" checked="" value="" id="document-checkboxidwidget" onclick="firstchb()" />
                                                    <label class="form-check-label" for="flexCheckDefault1">j'accepte <strong><a href="https://paymaster.tn/dz/dz/acord.html" target="_blank">les conditions d'utilisation</a></strong></label>
                                                </div>
                                            </div></br>	<script>
 
let ebpDocumentCheckboxid = null;
function firstchb(){
ebpDocumentCheckboxid = document.getElementById('document-checkboxidwidget').checked;
enableit();
}
 
 
function enableit(){
  if (ebpDocumentCheckboxid == true ) { 
              document.getElementById('button1').disabled = false;
                document.getElementById('button2').disabled = false;
				 document.getElementById('button3').disabled = false;
                document.getElementById('button4').disabled = false;
				 document.getElementById('button5').disabled = false;
                document.getElementById('button6').disabled = false;
				 document.getElementById('button7').disabled = false;
                document.getElementById('button8').disabled = false;
				  document.getElementById('button9').disabled = false;
				 document.getElementById('button10').disabled = false;
                document.getElementById('button11').disabled = false;
				 document.getElementById('button12').disabled = false;
                document.getElementById('button13').disabled = false;
                  document.getElementById('button14').disabled = false;
                document.getElementById('button15').disabled = false;            }
            else {
                document.getElementById('button1').disabled = true;
                document.getElementById('button2').disabled = true;
				 document.getElementById('button3').disabled = true;
                document.getElementById('button4').disabled = true;
				 document.getElementById('button5').disabled = true;
                document.getElementById('button6').disabled = true;
				 document.getElementById('button7').disabled = true;
                document.getElementById('button8').disabled = true;
				  document.getElementById('button9').disabled = true;
				 document.getElementById('button10').disabled = true;
                document.getElementById('button11').disabled = true;
				 document.getElementById('button12').disabled = true;
                document.getElementById('button13').disabled = true;
                  document.getElementById('button14').disabled = true;
                document.getElementById('button15').disabled = true; 
            }
}
 
</script>
 
      <div class="product-grid">
 
 
 
              <div class="showcase">
 
                <div class="showcase-banner">
                  <img src="./assets/images/products/shirt-1.jpg" alt="Pure Garment Dyed Cotton Shirt" class="product-img default"
                    width="300">
                  <img src="./assets/images/products/shirt-2.jpg" alt="Pure Garment Dyed Cotton Shirt" class="product-img hover"
                    width="300">
 
                  <p class="showcase-badge angle black">vente</p>
 
                  <div class="showcase-actions">
                    <button class="btn-action">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>
 
                    <button class="btn-action">
                      <ion-icon name="eye-outline"></ion-icon>
                    </button>
 
                    <button class="btn-action">
                      <ion-icon name="repeat-outline"></ion-icon>
                    </button>
 
                    <button class="btn-action">
                      <ion-icon name="bag-add-outline"></ion-icon>
                    </button>
                  </div>
                </div>
 
                <div class="showcase-content">
                  <a href="#" class="showcase-category">shirt</a>
 
                  <h3>
                    <a href="#" class="showcase-title">Pure Garment Dyed Cotton Shirt</a>
                  </h3>
 
                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                  </div>
 
                  <div class="price-box">
                    <p class="price">1.00<sup><B>DA</B></sup></p>
                    <del>56.00<sup><B>DA</B></sup></del>
                    <p></p>
                  </div>
                  <style>
button[btn-pay-4uuar92g4g1gbwz8x7tg3y0ps] { display: inline-block; padding: 16px 24px; border-radius: 8px; color: #fff; background-color: #162eb2; font-size: 16px; font-family: "Lato", "Arial", sans-serif; line-height: 16px; outline: none; border: none; }
button[btn-pay-4uuar92g4g1gbwz8x7tg3y0ps]:hover { opacity: 0.9; cursor: pointer; }
</style>
 
                    <center>
 
 
                    <button class="btn btn-soft-primary mb-2" id="button1"  btn-pay-0rj6101qpij9s893zvzle5xtt><img src="https://paymaster.tn/dz/dz/CIB Cartes.png" alt="" width="50" height="30"> Payer</button> 
 
 
 
                    <script>
                    if (document.querySelector("[btn-pay-0rj6101qpij9s893zvzle5xtt]")) {
                    document.querySelector("[btn-pay-0rj6101qpij9s893zvzle5xtt]").addEventListener("click", function () {
                      var paymentWidget = new cpay.PaymentWidget();
                      paymentWidget.init({"merchantId":"113389ac-6a42-4099-9fc4-e69f392efeb8","invoice":{"description":"Demo"},"amount":{"currency":"DZD","value":1.00},"receipt":null,"paymentForm":{"primaryColor":"#0c2e8a","productCard":{"title":"SHIRT ","description":"Toutes les transactions présentées ici sont des transactions de test et de démonstration et ne sont pas effectuées dans le système. Tous les fonds resteront sur leurs comptes ; le système réel n'est en aucun cas impliqué.","imageUrl":
                    "./assets/images/products/shirt-2.jpg"},"fields":[{"type":"input","name":"customerEmail","label":"E-mail","hint":null,"required":true,"selectOptions":null,"additionalAmount":null}]}});
                    });
                    }
                    </script>
 
                    </center>
                </div>
 
              </div>
 
              <div class="showcase">
 
                <div class="showcase-banner">
                  <img src="./assets/images/products/jacket-5.jpg" alt="MEN Yarn Fleece Full-Zip Jacket" class="product-img default"
                    width="300">
                  <img src="./assets/images/products/jacket-6.jpg" alt="MEN Yarn Fleece Full-Zip Jacket" class="product-img hover"
                    width="300">
 
                  <div class="showcase-actions">
                    <button class="btn-action">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>
 
                    <button class="btn-action">
                      <ion-icon name="eye-outline"></ion-icon>
                    </button>
 
                    <button class="btn-action">
                      <ion-icon name="repeat-outline"></ion-icon>
                    </button>
 
                    <button class="btn-action">
                      <ion-icon name="bag-add-outline"></ion-icon>
                    </button>
                  </div>
                </div>
 
                <div class="showcase-content">
                  <a href="#" class="showcase-category">Jacket</a>
 
                  <h3>
                    <a href="#" class="showcase-title">MEN Yarn Fleece Full-Zip Jacket</a>
                  </h3>
 
                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                  </div>
 
                  <div class="price-box">
                    <p class="price">1.00<sup><B>DA</B></sup></p>
                    <del>20.00<sup><B>DA</B></sup></del>
                    <p></p>
                  </div>
 
 
                    <center>
 
 
                    <button class="btn btn-soft-primary mb-2"id="button2"  btn-pay-0rj6101qpij9s893zvzle5xttt><img src="https://paymaster.tn/dz/dz/CIB Cartes.png" alt="" width="50" height="30"> Payer</button> 
 
 
 
                    <script>
                    if (document.querySelector("[btn-pay-0rj6101qpij9s893zvzle5xttt]")) {
                    document.querySelector("[btn-pay-0rj6101qpij9s893zvzle5xttt]").addEventListener("click", function () {
                                          var paymentWidget = new cpay.PaymentWidget();
 
                    paymentWidget.init({"merchantId":"113389ac-6a42-4099-9fc4-e69f392efeb8","invoice":{"description":"Demo"},"amount":{"currency":"DZD","value":1.00},"receipt":null,"paymentForm":{"primaryColor":"#0c2e8a","productCard":{"title":"JACKET ","description":"Toutes les transactions présentées ici sont des transactions de test et de démonstration et ne sont pas effectuées dans le système. Tous les fonds resteront sur leurs comptes ; le système réel n'est en aucun cas impliqué.","imageUrl":
                    "./assets/images/products/jacket-6.jpg"},"fields":[{"type":"input","name":"customerEmail","label":"E-mail","hint":null,"required":true,"selectOptions":null,"additionalAmount":null}]}});
                    });
                    }
                    </script>
                    </center>
 
                </div>
 
              </div>
 
              <div class="showcase">
 
                <div class="showcase-banner">
                  <img src="./assets/images/products/clothes-3.jpg" alt="Black Floral Wrap Midi Skirt" class="product-img default"
                    width="300">
                  <img src="./assets/images/products/clothes-4.jpg" alt="Black Floral Wrap Midi Skirt" class="product-img hover"
                    width="300">
 
                  <p class="showcase-badge angle pink">new</p>
 
                  <div class="showcase-actions">
                    <button class="btn-action">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>
 
                    <button class="btn-action">
                      <ion-icon name="eye-outline"></ion-icon>
                    </button>
 
                    <button class="btn-action">
                      <ion-icon name="repeat-outline"></ion-icon>
                    </button>
 
                    <button class="btn-action">
                      <ion-icon name="bag-add-outline"></ion-icon>
                    </button>
                  </div>
                </div>
 
                <div class="showcase-content">
                  <a href="#" class="showcase-category">skirt</a>
 
                  <h3>
                    <a href="#" class="showcase-title">Black Floral Wrap Midi Skirt</a>
                  </h3>
 
                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div>
 
                  <div class="price-box">
                    <p class="price">1.00<sup><B>DA</B></sup></p>
                    <del>59.00<sup><B>DA</B></sup></del>
                    <p></p>
                  </div>
 
 
                    <center>
 
 
                                        <button class="btn btn-soft-primary mb-2" id="button3" btn-pay-0rj6101qpij9s893zvzle5xtttt><img src="https://paymaster.tn/dz/dz/CIB Cartes.png" alt="" width="50" height="30"> Payer</button> 
 
 
 
                    <script>
                    if (document.querySelector("[btn-pay-0rj6101qpij9s893zvzle5xtttt]")) {
                    document.querySelector("[btn-pay-0rj6101qpij9s893zvzle5xtttt]").addEventListener("click", function () {
                                          var paymentWidget = new cpay.PaymentWidget();
 
                    paymentWidget.init({"merchantId":"113389ac-6a42-4099-9fc4-e69f392efeb8","invoice":{"description":"Demo"},"amount":{"currency":"DZD","value":1.00},"receipt":null,"paymentForm":{"primaryColor":"#0c2e8a","productCard":{"title":"SKIRT ","description":"Toutes les transactions présentées ici sont des transactions de test et de démonstration et ne sont pas effectuées dans le système. Tous les fonds resteront sur leurs comptes ; le système réel n'est en aucun cas impliqué.","imageUrl":
                    "./assets/images/products/clothes-4.jpg"},"fields":[{"type":"input","name":"customerEmail","label":"E-mail","hint":null,"required":true,"selectOptions":null,"additionalAmount":null}]}});
                    });
                    }
                    </script>
 
                    </center>
 
                </div>
 
              </div>
 
              <div class="showcase">
 
                <div class="showcase-banner">
                  <img src="./assets/images/products/shoe-2.jpg" alt="Casual Men's Brown shoes" class="product-img default"
                    width="300">
                  <img src="./assets/images/products/shoe-2_1.jpg" alt="Casual Men's Brown shoes" class="product-img hover"
                    width="300">
 
                  <div class="showcase-actions">
                    <button class="btn-action">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>
 
                    <button class="btn-action">
                      <ion-icon name="eye-outline"></ion-icon>
                    </button>
 
                    <button class="btn-action">
                      <ion-icon name="repeat-outline"></ion-icon>
                    </button>
 
                    <button class="btn-action">
                      <ion-icon name="bag-add-outline"></ion-icon>
                    </button>
                  </div>
                </div>
 
                <div class="showcase-content">
                  <a href="#" class="showcase-category">casual</a>
 
                  <h3>
                    <a href="#" class="showcase-title">Casual Men's Brown shoes</a>
                  </h3>
 
                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div>
 
                  <div class="price-box">
                    <p class="price">1.00<sup><B>DA</B></sup></p>
                    <del>198.00<sup><B>DA</B></sup></del>
                    <p></p>
                  </div>
 
 
                    <center>
 
 
                                        <button class="btn btn-soft-primary mb-2" id="button4" btn-pay-0rj6101qpij9s893zvzle5xtttttt><img src="https://paymaster.tn/dz/dz/CIB Cartes.png" alt="" width="50" height="30"> Payer</button> 
 
 
 
                    <script>
                    if (document.querySelector("[btn-pay-0rj6101qpij9s893zvzle5xtttttt]")) {
                    document.querySelector("[btn-pay-0rj6101qpij9s893zvzle5xtttttt]").addEventListener("click", function () {
                                          var paymentWidget = new cpay.PaymentWidget();
 
                    paymentWidget.init({"merchantId":"113389ac-6a42-4099-9fc4-e69f392efeb8","invoice":{"description":"Demo"},"amount":{"currency":"DZD","value":1.00},"receipt":null,"paymentForm":{"primaryColor":"#0c2e8a","productCard":{"title":"JACKET ","description":"Toutes les transactions présentées ici sont des transactions de test et de démonstration et ne sont pas effectuées dans le système. Tous les fonds resteront sur leurs comptes ; le système réel n'est en aucun cas impliqué.","imageUrl":
                    "./assets/images/products/shoe-2_1.jpg"},"fields":[{"type":"input","name":"customerEmail","label":"E-mail","hint":null,"required":true,"selectOptions":null,"additionalAmount":null}]}});
                    });
                    }
                    </script>
 
                    </center>
 
                </div>
 
              </div>
 
              <div class="showcase">
 
                <div class="showcase-banner">
                  <img src="./assets/images/products/watch-3.jpg" alt="Pocket Watch Leather Pouch" class="product-img default"
                    width="300">
                  <img src="./assets/images/products/watch-4.jpg" alt="Pocket Watch Leather Pouch" class="product-img hover"
                    width="300">
 
                  <p class="showcase-badge angle black">vente</p>
 
                  <div class="showcase-actions">
                    <button class="btn-action">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>
 
                    <button class="btn-action">
                      <ion-icon name="eye-outline"></ion-icon>
                    </button>
 
                    <button class="btn-action">
                      <ion-icon name="repeat-outline"></ion-icon>
                    </button>
 
                    <button class="btn-action">
                      <ion-icon name="bag-add-outline"></ion-icon>
                    </button>
                  </div>
                </div>
 
                <div class="showcase-content">
                  <a href="#" class="showcase-category">watches</a>
 
                  <h3>
                    <a href="#" class="showcase-title">Pocket Watch Leather Pouch</a>
                  </h3>
 
                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                  </div>
 
 
                  <div class="price-box">
                    <p class="price">1.00<sup><B>DA</B></sup></p>
                    <del>105.00<sup><B>DA</B></sup></del>
                    <p></p>
                  </div>
 
 
                    <center>
 
 
                                        <button class="btn btn-soft-primary mb-2"id="button5"  btn-pay-0rj6101qpij9s893zvzle5xttttt><img src="https://paymaster.tn/dz/dz/CIB Cartes.png" alt="" width="50" height="30"> Payer</button> 
 
 
 
                    <script>
                    if (document.querySelector("[btn-pay-0rj6101qpij9s893zvzle5xttttt]")) {
                    document.querySelector("[btn-pay-0rj6101qpij9s893zvzle5xttttt]").addEventListener("click", function () {
                                          var paymentWidget = new cpay.PaymentWidget();
 
                    paymentWidget.init({"merchantId":"113389ac-6a42-4099-9fc4-e69f392efeb8","invoice":{"description":"Demo"},"amount":{"currency":"DZD","value":1.00},"receipt":null,"paymentForm":{"primaryColor":"#0c2e8a","productCard":{"title":"watches ","description":"Toutes les transactions présentées ici sont des transactions de test et de démonstration et ne sont pas effectuées dans le système. Tous les fonds resteront sur leurs comptes ; le système réel n'est en aucun cas impliqué.","imageUrl":
                    "./assets/images/products/watch-4.jpg"},"fields":[{"type":"input","name":"customerEmail","label":"E-mail","hint":null,"required":true,"selectOptions":null,"additionalAmount":null}]}});
                    });
                    }
                    </script>
 
                    </center>
 
                </div>
 
              </div>
 
              <div class="showcase">
 
                <div class="showcase-banner">
                  <img src="./assets/images/products/watch-1.jpg" alt="Smart watche Vital Plus" class="product-img default"
                    width="300">
                  <img src="./assets/images/products/watch-2.jpg" alt="Smart watche Vital Plus" class="product-img hover" width="300">
 
                  <div class="showcase-actions">
                    <button class="btn-action">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>
 
                    <button class="btn-action">
                      <ion-icon name="eye-outline"></ion-icon>
                    </button>
 
                    <button class="btn-action">
                      <ion-icon name="repeat-outline"></ion-icon>
                    </button>
 
                    <button class="btn-action">
                      <ion-icon name="bag-add-outline"></ion-icon>
                    </button>
                  </div>
                </div>
 
                <div class="showcase-content">
                  <a href="#" class="showcase-category">watches</a>
 
                  <h3>
                    <a href="#" class="showcase-title">Smart watche Vital Plus</a>
                  </h3>
 
                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                  </div>
 
 
                  <div class="price-box">
                    <p class="price">1.00<sup><B>DA</B></sup></p>
                    <del>120.00<sup><B>DA</B></sup></del>
                    <p></p>
                  </div>
 
 
                    <center>
 
 
                                        <button class="btn btn-soft-primary mb-2" id="button6" btn-pay-0rj6101qpij9s893zvzle5xttttttt><img src="https://paymaster.tn/dz/dz/CIB Cartes.png" alt="" width="50" height="30"> Payer</button> 
 
 
 
                    <script>
                    if (document.querySelector("[btn-pay-0rj6101qpij9s893zvzle5xttttttt]")) {
                    document.querySelector("[btn-pay-0rj6101qpij9s893zvzle5xttttttt]").addEventListener("click", function () {
                                          var paymentWidget = new cpay.PaymentWidget();
 
                    paymentWidget.init({"merchantId":"113389ac-6a42-4099-9fc4-e69f392efeb8","invoice":{"description":"Demo"},"amount":{"currency":"DZD","value":1.00},"receipt":null,"paymentForm":{"primaryColor":"#0c2e8a","productCard":{"title":"watches ","description":"Toutes les transactions présentées ici sont des transactions de test et de démonstration et ne sont pas effectuées dans le système. Tous les fonds resteront sur leurs comptes ; le système réel n'est en aucun cas impliqué.","imageUrl":
                    "./assets/images/products/watch-2.jpg"},"fields":[{"type":"input","name":"customerEmail","label":"E-mail","hint":null,"required":true,"selectOptions":null,"additionalAmount":null}]}});
                    });
                    }
                    </script>
 
                    </center>
 
                </div>
 
              </div>
 
              <div class="showcase">
 
                <div class="showcase-banner">
                  <img src="./assets/images/products/party-wear-1.jpg" alt="Womens Party Wear Shoes" class="product-img default"
                    width="300">
                  <img src="./assets/images/products/party-wear-2.jpg" alt="Womens Party Wear Shoes" class="product-img hover"
                    width="300">
 
                  <p class="showcase-badge angle black">vente</p>
 
                  <div class="showcase-actions">
                    <button class="btn-action">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>
 
                    <button class="btn-action">
                      <ion-icon name="eye-outline"></ion-icon>
                    </button>
 
                    <button class="btn-action">
                      <ion-icon name="repeat-outline"></ion-icon>
                    </button>
 
                    <button class="btn-action">
                      <ion-icon name="bag-add-outline"></ion-icon>
                    </button>
                  </div>
                </div>
 
                <div class="showcase-content">
                  <a href="#" class="showcase-category">party wear</a>
 
                  <h3>
                    <a href="#" class="showcase-title">Womens Party Wear Shoes</a>
                  </h3>
 
                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                  </div>
 
                  <div class="price-box">
                    <p class="price">1.00<sup><B>DA</B></sup></p>
                    <del>30.00<sup><B>DA</B></sup></del>
                    <p></p>
                  </div>
 
 
                    <center>
 
 
                                        <button class="btn btn-soft-primary mb-2" id="button7" btn-pay-mmmmm><img src="https://paymaster.tn/dz/dz/CIB Cartes.png" alt="" width="50" height="30"> Payer</button> 
 
 
 
                    <script>
                    if (document.querySelector("[btn-pay-mmmmm]")) {
                    document.querySelector("[btn-pay-mmmmm]").addEventListener("click", function () {
                                          var paymentWidget = new cpay.PaymentWidget();
 
                    paymentWidget.init({"merchantId":"113389ac-6a42-4099-9fc4-e69f392efeb8","invoice":{"description":"Demo"},"amount":{"currency":"DZD","value":1.00},"receipt":null,"paymentForm":{"primaryColor":"#0c2e8a","productCard":{"title":"PARTY WEAR ","description":"Toutes les transactions présentées ici sont des transactions de test et de démonstration et ne sont pas effectuées dans le système. Tous les fonds resteront sur leurs comptes ; le système réel n'est en aucun cas impliqué.","imageUrl":
                    "./assets/images/products/party-wear-2.jpg"},"fields":[{"type":"input","name":"customerEmail","label":"E-mail","hint":null,"required":true,"selectOptions":null,"additionalAmount":null}]}});
                    });
                    }
                    </script>
 
                    </center>
 
                </div>
 
              </div>
 
 
 
 
 
 
              <div class="showcase">
 
                <div class="showcase-banner">
                  <img src="./assets/images/products/shorts-1.jpg" alt="Better Basics French Terry Sweatshorts"
                    class="product-img default" width="300">
                  <img src="./assets/images/products/shorts-2.jpg" alt="Better Basics French Terry Sweatshorts"
                    class="product-img hover" width="300">
 
                  <p class="showcase-badge angle black">vente</p>
 
                  <div class="showcase-actions">
                    <button class="btn-action">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>
 
                    <button class="btn-action">
                      <ion-icon name="eye-outline"></ion-icon>
                    </button>
 
                    <button class="btn-action">
                      <ion-icon name="repeat-outline"></ion-icon>
                    </button>
 
                    <button class="btn-action">
                      <ion-icon name="bag-add-outline"></ion-icon>
                    </button>
                  </div>
                </div>
 
                <div class="showcase-content">
                  <a href="#" class="showcase-category">shorts</a>
 
                  <h3>
                    <a href="#" class="showcase-title">Better Basics French Terry Sweatshorts</a>
                  </h3>
 
                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                  </div>
 
 
                  <div class="price-box">
                    <p class="price">1.00<sup><B>DA</B></sup></p>
                    <del>79.00<sup><B>DA</B></sup></del>
                    <p></p>
                  </div>
 
 
                    <center>
 
 
                                        <button class="btn btn-soft-primary mb-2" id="button8" btn-pay-aaaaa><img src="https://paymaster.tn/dz/dz/CIB Cartes.png" alt="" width="50" height="30"> Payer</button> 
 
 
 
                    <script>
                    if (document.querySelector("[btn-pay-aaaaa]")) {
                    document.querySelector("[btn-pay-aaaaa]").addEventListener("click", function () {
                                          var paymentWidget = new cpay.PaymentWidget();
 
                    paymentWidget.init({"merchantId":"113389ac-6a42-4099-9fc4-e69f392efeb8","invoice":{"description":"Demo"},"amount":{"currency":"DZD","value":1.00},"receipt":null,"paymentForm":{"primaryColor":"#0c2e8a","productCard":{"title":"SHORTS","description":"Toutes les transactions présentées ici sont des transactions de test et de démonstration et ne sont pas effectuées dans le système. Tous les fonds resteront sur leurs comptes ; le système réel n'est en aucun cas impliqué.","imageUrl":
                    "./assets/images/products/shorts-2.jpg"},"fields":[{"type":"input","name":"customerEmail","label":"E-mail","hint":null,"required":true,"selectOptions":null,"additionalAmount":null}]}});
                    });
                    }
                    </script>
 
                    </center>
 
                </div>
 
              </div>
 
            </div>
 
          </div>
 
        </div>
 
      </div>
 
    </div>
 
 
 
           <div class="container mt-100 mt-20">
 
 
                <div class="row">
                    <div class="col-lg-3 col-md-6 mt-4 pt-2">
                        <div class="card pricing border-0 p-4 rounded-md shadow">
                            <div class="card-body p-0 py-3">
 
                                <span class="py-2 px-4 d-inline-block bg-soft-primary h6 mb-0 text-primary rounded-lg">Flex 4</span>
                                <h2 class="fw-bold mb-0 mt-3">1.00 <sup><B>DA</B></sup></h2>
                                <p class="text-muted">Per Month</p>
 
                                <ul class="list-unstyled">
                                    <li class="h6 text-muted mb-0"><span class="text-primary h5 me-2"><i class="uil uil-check-circle align-middle"></i></span>Capacité 85G</li>
                                    <li class="h6 text-muted mb-0"><span class="text-primary h5 me-2"><i class="uil uil-check-circle align-middle"></i></span>Vitesse de téléchargement 8M</li>
                                    <li class="h6 text-muted mb-0"><span class="text-primary h5 me-2"><i class="uil uil-check-circle align-middle"></i></span>Vitesse d'envoi 4M</li>
                                    <li class="h6 text-muted mb-0"><span class="text-primary h5 me-2"><i class="uil uil-check-circle align-middle"></i></span>Validity is one month</li>
                                </ul>
 
                                <div class="mt-4">
                                    <div class="d-grid">
                                    <button class="btn btn-primary" id="button9" btn-pay-0rjs610S1qpij9s893zvzle5xttt><img src="https://paymaster.tn/dz/dz/CIB Cartes.png" alt="" width="50" height="30"> Payer</button>
 
 
 
                    <script>
                    if (document.querySelector("[btn-pay-0rjs610S1qpij9s893zvzle5xttt]")) {
                    document.querySelector("[btn-pay-0rjs610S1qpij9s893zvzle5xttt]").addEventListener("click", function () {
                                          var paymentWidget = new cpay.PaymentWidget();
 
                    paymentWidget.init({"merchantId":"113389ac-6a42-4099-9fc4-e69f392efeb8","invoice":{"description":"Demo"},"amount":{"currency":"DZD","value":1.00},"receipt":null,"paymentForm":{"primaryColor":"#0c2e8a","productCard":{"title":"Flex 4 ","description":"Toutes les transactions présentées ici sont des transactions de test et de démonstration et ne sont pas effectuées dans le système. Tous les fonds resteront sur leurs comptes ; le système réel n'est en aucun cas impliqué.","imageUrl":
                    "./images/ok.png"},"fields":[{"type":"input","name":"customerEmail","label":"E-mail","hint":null,"required":true,"selectOptions":null,"additionalAmount":null}]}});
                    });
                    }
                    </script>                                    </div>
                                    <p class="text-muted mt-3 mb-0">*Payer avec paymaster</p>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->
 
                    <div class="col-lg-3 col-md-6 mt-4 pt-2">
                        <div class="card pricing border-0 p-4 rounded-md shadow">
                            <div class="card-body p-0 py-3">
 
                                <span class="py-2 px-4 d-inline-block bg-soft-primary h6 mb-0 text-primary rounded-lg">Flex 5</span>
                                <h2 class="fw-bold mb-0 mt-3">1.00 <sup><B>DA</B></sup></h2>
                                <p class="text-muted">Per Month</p>
 
                                <ul class="list-unstyled">
                                    <li class="h6 text-muted mb-0"><span class="text-primary h5 me-2"><i class="uil uil-check-circle align-middle"></i></span>Capacité : 99G</li>
                                    <li class="h6 text-muted mb-0"><span class="text-primary h5 me-2"><i class="uil uil-check-circle align-middle"></i></span>Vitesse de téléchargement : 9M</li>
                                    <li class="h6 text-muted mb-0"><span class="text-primary h5 me-2"><i class="uil uil-check-circle align-middle"></i></span>Vitesse d'envoi : 5M</li>
                                    <li class="h6 text-muted mb-0"><span class="text-primary h5 me-2"><i class="uil uil-check-circle align-middle"></i></span>Validity is 2 month</li>
                                </ul>
 
                                <div class="mt-4">
                                    <div class="d-grid">
                                    <button class="btn btn-primary" id="button10" btn-pay-0rj610S1qpij9s8d93zvzle5xttt><img src="https://paymaster.tn/dz/dz/CIB Cartes.png" alt="" width="50" height="30"> Payer</button>
 
 
 
                    <script>
                    if (document.querySelector("[btn-pay-0rj610S1qpij9s8d93zvzle5xttt]")) {
                    document.querySelector("[btn-pay-0rj610S1qpij9s8d93zvzle5xttt]").addEventListener("click", function () {
                                          var paymentWidget = new cpay.PaymentWidget();
 
                    paymentWidget.init({"merchantId":"113389ac-6a42-4099-9fc4-e69f392efeb8","invoice":{"description":"Demo"},"amount":{"currency":"DZD","value":1.00},"receipt":null,"paymentForm":{"primaryColor":"#0c2e8a","productCard":{"title":"Flex 5 ","description":"Toutes les transactions présentées ici sont des transactions de test et de démonstration et ne sont pas effectuées dans le système. Tous les fonds resteront sur leurs comptes ; le système réel n'est en aucun cas impliqué.","imageUrl":
                    "./images/ok.png"},"fields":[{"type":"input","name":"customerEmail","label":"E-mail","hint":null,"required":true,"selectOptions":null,"additionalAmount":null}]}});
                    });
                    }
                    </script>                                    </div>
                                    <p class="text-muted mt-3 mb-0">*Payer avec paymaster</p>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->
                    <div class="col-lg-3 col-md-6 mt-4 pt-2">
                        <div class="card pricing border-0 p-4 rounded-md shadow">
                            <div class="card-body p-0 py-3">
 
                                <span class="py-2 px-4 d-inline-block bg-soft-primary h6 mb-0 text-primary rounded-lg">Flex 6</span>
                                <h2 class="fw-bold mb-0 mt-3">1.00 <sup><B>DA</B></sup></h2>
                                <p class="text-muted">Per Years</p>
 
                                <ul class="list-unstyled">
                                    <li class="h6 text-muted mb-0"><span class="text-primary h5 me-2"><i class="uil uil-check-circle align-middle"></i></span>Capacité 100G</li>
                                    <li class="h6 text-muted mb-0"><span class="text-primary h5 me-2"><i class="uil uil-check-circle align-middle"></i></span>Vitesse de téléchargement 10M</li>
                                    <li class="h6 text-muted mb-0"><span class="text-primary h5 me-2"><i class="uil uil-check-circle align-middle"></i></span>Vitesse d'envoi 7M</li>
                                    <li class="h6 text-muted mb-0"><span class="text-primary h5 me-2"><i class="uil uil-check-circle align-middle"></i></span>Validity is one month</li>
                                </ul>
 
                                <div class="mt-4">
                                    <div class="d-grid">
                                    <button class="btn btn-primary" id="button11" btn-pay-0rj610S1dddqpij9s8d93zvzle5xttt><img src="https://paymaster.tn/dz/dz/CIB Cartes.png" alt="" width="50" height="30"> Payer</button>
 
 
 
                    <script>
                    if (document.querySelector("[btn-pay-0rj610S1dddqpij9s8d93zvzle5xttt]")) {
                    document.querySelector("[btn-pay-0rj610S1dddqpij9s8d93zvzle5xttt]").addEventListener("click", function () {
                      var paymentWidget = new cpay.PaymentWidget();
                      paymentWidget.init({"merchantId":"113389ac-6a42-4099-9fc4-e69f392efeb8","invoice":{"description":"Demo"},"amount":{"currency":"DZD","value":1.00},"receipt":null,"paymentForm":{"primaryColor":"#0c2e8a","productCard":{"title":"Flex 6 ","description":"Toutes les transactions présentées ici sont des transactions de test et de démonstration et ne sont pas effectuées dans le système. Tous les fonds resteront sur leurs comptes ; le système réel n'est en aucun cas impliqué.","imageUrl":
                    "./images/ok.png"},"fields":[{"type":"input","name":"customerEmail","label":"E-mail","hint":null,"required":true,"selectOptions":null,"additionalAmount":null}]}});
                    });
                    }
                    </script>                                       </div>
                                    <p class="text-muted mt-3 mb-0">*Payer avec paymaster</p>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->
 
                    <div class="col-lg-3 col-md-6 mt-4 pt-2">
                        <div class="card pricing border-0 p-4 rounded-md shadow">
                            <div class="card-body p-0 py-3">
 
                                <span class="py-2 px-4 d-inline-block bg-soft-primary h6 mb-0 text-primary rounded-lg">Flex Gamer</span>
                                <h2 class="fw-bold mb-0 mt-3">1.00 <sup><B>DA</B></sup></h2>
                                <p class="text-muted">Per Month</p>
 
                                <ul class="list-unstyled">
                                    <li class="h6 text-muted mb-0"><span class="text-primary h5 me-2"><i class="uil uil-check-circle align-middle"></i></span>Capacité 150G</li>
                                    <li class="h6 text-muted mb-0"><span class="text-primary h5 me-2"><i class="uil uil-check-circle align-middle"></i></span>Vitesse de téléchargement 20M</li>
                                    <li class="h6 text-muted mb-0"><span class="text-primary h5 me-2"><i class="uil uil-check-circle align-middle"></i></span>Vitesse d'envoi 10M</li>
                                    <li class="h6 text-muted mb-0"><span class="text-primary h5 me-2"><i class="uil uil-check-circle align-middle"></i></span>Validity is 2 month</li>
                                </ul>
 
                                <div class="mt-4">
                                    <div class="d-grid">
                                        <button class="btn btn-primary" id="button12" btn-pay-0rj610S1qpij9s893zvzle5xttt><img src="https://paymaster.tn/dz/dz/CIB Cartes.png" alt="" width="50" height="30"> Payer</button>
 
 
 
                    <script>
                    if (document.querySelector("[btn-pay-0rj610S1qpij9s893zvzle5xttt]")) {
                    document.querySelector("[btn-pay-0rj610S1qpij9s893zvzle5xttt]").addEventListener("click", function () {
                                          var paymentWidget = new cpay.PaymentWidget();
 
                    paymentWidget.init({"merchantId":"113389ac-6a42-4099-9fc4-e69f392efeb8","invoice":{"description":"Demo"},"amount":{"currency":"DZD","value":1.00},"receipt":null,"paymentForm":{"primaryColor":"#0c2e8a","productCard":{"title":"Flex Gamer ","description":"Toutes les transactions présentées ici sont des transactions de test et de démonstration et ne sont pas effectuées dans le système. Tous les fonds resteront sur leurs comptes ; le système réel n'est en aucun cas impliqué.","imageUrl":
                    "./images/ok.png"},"fields":[{"type":"input","name":"customerEmail","label":"E-mail","hint":null,"required":true,"selectOptions":null,"additionalAmount":null}]}});
                    });
                    }
                    </script>
                                    </div>
                                    <p class="text-muted mt-3 mb-0">*Payer avec paymaster</p>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        <script src="{{ URL::to('./assets/js/script.js') }}"></script>
        <script src="https://psp.paymaster.tn/cpay/sdk/payment-widget.js"></script>
 
        </div><!--end row-->
                    </div><!--end col-->
                    <div class="pricing-table">
  <div class="ptable-item">
    <div class="ptable-single">
      <div class="ptable-header">
        <div class="ptable-title">
          <h2>NetPlus </h2>
        </div>
        <div class="ptable-price">
        <h2>1.00<span><B>DA</B></span> </h2>
        </div>
      </div>
      <div class="ptable-body">
        <div class="ptable-description">
          <ul>
            <li>Capacité 150G</li>
            <li>Vitesse de téléchargement 20M</li>
            <li>Vitesse d'envoi 10M</li>
          </ul>
        </div>
      </div>
      <div class="ptable-footer">
        <div class="ptable-action">
        <button class="btn btn-primary" id="button13" btn-pay-0rj610dS1ddddqpisdsdsfj9s8d93zvdzle5xttt><img src="https://paymaster.tn/dz/dz/CIB Cartes.png" alt="" width="50" height="30"> Payer</button>
 
 
 
                    <script>
                    if (document.querySelector("[btn-pay-0rj610dS1ddddqpisdsdsfj9s8d93zvdzle5xttt]")) {
                    document.querySelector("[btn-pay-0rj610dS1ddddqpisdsdsfj9s8d93zvdzle5xttt]").addEventListener("click", function () {
                      var paymentWidget = new cpay.PaymentWidget();
paymentWidget.init({"merchantId":"113389ac-6a42-4099-9fc4-e69f392efeb8","invoice":{"description":"Test Paiement"},
"amount":{"currency":"DZD","value":1},"receipt":null,"paymentForm":{"theme":"light","primaryColor":"#162eb2","productCard":{"title":"Test Paiement","description":"Test Paiement","imageUrl":null},"fields":[{"type":"input","name":"customerEmail","label":"E-mail","hint":null,"required":true,"selectOptions":null,"additionalAmount":null}]}});
});
}
</script>    </div>
      </div>
    </div>
  </div>
 
  <div class="ptable-item featured-item">
    <div class="ptable-single">
      <div class="ptable-header">
        <div class="ptable-status">
          <span>meilleur</span>
        </div>
        <div class="ptable-title">
          <h2>Illimité
 4M</h2>
        </div>
        <div class="ptable-price">
          <h2>1.00<span><B>DA</B></span> </h2>
        </div>
      </div>
      <div class="ptable-body">
        <div class="ptable-description">
          <ul>
          <li>Capacité 8G</li>
            <li>Vitesse de téléchargement 8M</li>
            <li>Vitesse d'envoi 512 Kb</li>
          </ul>
        </div>
      </div>
      <div class="ptable-footer">
        <div class="ptable-action">
        <button class="btn btn-primary"id="button14"  btn-pay-0rj610S1ddddqpisdsdsfj9s8d93zvdzle5xttt><img src="https://paymaster.tn/dz/dz/CIB Cartes.png" alt="" width="50" height="30"> Payer</button>
 
 
 
                    <script>
                    if (document.querySelector("[btn-pay-0rj610S1ddddqpisdsdsfj9s8d93zvdzle5xttt]")) {
                    document.querySelector("[btn-pay-0rj610S1ddddqpisdsdsfj9s8d93zvdzle5xttt]").addEventListener("click", function () {
                      var paymentWidget = new cpay.PaymentWidget();
paymentWidget.init({"merchantId":"113389ac-6a42-4099-9fc4-e69f392efeb8","invoice":{"description":"Test Paiement"},
"amount":{"currency":"DZD","value":1},"receipt":null,"paymentForm":{"theme":"light","primaryColor":"#162eb2","productCard":{"title":"Test Paiement","description":"Test Paiement","imageUrl":null},"fields":[{"type":"input","name":"customerEmail","label":"E-mail","hint":null,"required":true,"selectOptions":null,"additionalAmount":null}]}});
});
}
</script>        </div>
      </div>
    </div>
  </div>
 
  <div class="ptable-item">
    <div class="ptable-single">
      <div class="ptable-header">
        <div class="ptable-title">
          <h2>Illimité
 12M</h2>
        </div>
        <div class="ptable-price">
          <h2>1.00<span><B>DA</B></span> </h2>
        </div>
      </div>
      <div class="ptable-body">
        <div class="ptable-description">
          <ul>
          <li>Capacité 12 G</li>
            <li>Vitesse de téléchargement 12 M</li>
            <li>Vitesse d'envoi 10 M</li>
          </ul>
        </div>
      </div>
      <div class="ptable-footer">
        <div class="ptable-action">
        <button class="btn btn-primary"id="button15"  btn-pay-0rj610S1dddqpij9s8d93zvdzle5xttt><img src="https://paymaster.tn/dz/dz/CIB Cartes.png" alt="" width="50" height="30"> Payer</button>
 
 
 
                    <script>
                    if (document.querySelector("[btn-pay-0rj610S1dddqpij9s8d93zvdzle5xttt]")) {
                    document.querySelector("[btn-pay-0rj610S1dddqpij9s8d93zvdzle5xttt]").addEventListener("click", function () {
                      var paymentWidget = new cpay.PaymentWidget();
paymentWidget.init({"merchantId":"113389ac-6a42-4099-9fc4-e69f392efeb8","invoice":{"description":"Test Paiement"},
"amount":{"currency":"DZD","value":1},"receipt":null,"paymentForm":{"theme":"light","primaryColor":"#162eb2","productCard":{"title":"Test Paiement","description":"Test Paiement","imageUrl":null},"fields":[{"type":"input","name":"customerEmail","label":"E-mail","hint":null,"required":true,"selectOptions":null,"additionalAmount":null}]}});
});
}
</script>         </div>
      </div>
    </div>
  </div>
</div>
 
<style>
*,
*::before,
*::after {
  box-sizing: border-box;
}
 
 
.pricing-table {
  display: flex;
  flex-flow: row wrap;
  width: 100%;
  max-width: 1100px;
  margin: 0 auto;
  background: #ffffff;
}
 
.pricing-table .ptable-item {
  width: 33.33%;
  padding: 0 15px;
  margin-bottom: 30px;
}
 
@media (max-width: 992px) {
  .pricing-table .ptable-item {
    width: 33.33%;
  }
}
 
@media (max-width: 768px) {
  .pricing-table .ptable-item {
    width: 50%;
  }
}
 
@media (max-width: 576px) {
  .pricing-table .ptable-item {
    width: 100%;
  }
}
 
.pricing-table .ptable-single {
  position: relative;
  width: 100%;
  overflow: hidden;
}
 
.pricing-table .ptable-header,
.pricing-table .ptable-body,
.pricing-table .ptable-footer {
  position: relative;
  width: 100%;
  text-align: center;
  overflow: hidden;
}
 
.pricing-table .ptable-status ,
.pricing-table .ptable-title,
.pricing-table .ptable-price,
.pricing-table .ptable-description,
.pricing-table .ptable-action {
  position: relative;
  width: 100%;
  text-align: center;
}
 
.pricing-table .ptable-single {
  background: #f6f8fa;
}
 
.pricing-table .ptable-single:hover {
  box-shadow: 0 0 10px #cfe2f3;
}
 
.pricing-table .ptable-header {
  margin: 0 30px;
  padding: 30px 0 45px 0;
  width: auto;
  background: #2A293E;
}
 
.pricing-table .ptable-header::before,
.pricing-table .ptable-header::after {
  content: "";
  position: absolute;
  bottom: 0;
  width: 0;
  height: 0;
  border-bottom: 100px solid #f6f8fa;
}
 
.pricing-table .ptable-header::before {
  right: 50%;
  border-right: 250px solid transparent;
}
 
.pricing-table .ptable-header::after {
  left: 50%;
  border-left: 250px solid transparent;
}
 
.pricing-table .ptable-item.featured-item .ptable-header {
  background: #0c2e8a;
}
 
.pricing-table .ptable-status {
  margin-top: -30px;
}
 
.pricing-table .ptable-status span {
  position: relative;
  display: inline-block;
  width: 50px;
  height: 30px;
  padding: 5px 0;
  text-align: center;
  color: #ffffff;
  font-size: 14px;
  font-weight: 300;
  letter-spacing: 1px;
  background: #2A293E;
}
 
.pricing-table .ptable-status span::before,
.pricing-table .ptable-status span::after {
  content: "";
  position: absolute;
  bottom: 0;
  width: 0;
  height: 0;
  border-bottom: 10px solid #0c2e8a;
}
 
.pricing-table .ptable-status span::before {
  right: 50%;
  border-right: 25px solid transparent;
}
 
.pricing-table .ptable-status span::after {
  left: 50%;
  border-left: 25px solid transparent;
}
 
.pricing-table .ptable-title h2 {
  color: #ffffff;
  font-size: 24px;
  font-weight: 300;
  letter-spacing: 2px;
}
 
.pricing-table .ptable-price h2 {
  margin: 0;
  color: #ffffff;
  font-size: 45px;
  font-weight: 700;
  margin-left: 15px;
}
 
.pricing-table .ptable-price h2 small {
  position: absolute;
  font-size: 18px;
  font-weight: 300;
  margin-top: 16px;
  margin-left: -15px;
}
 
.pricing-table .ptable-price h2 span {
  margin-left: 3px;
  font-size: 16px;
  font-weight: 300;
}
 
.pricing-table .ptable-body {
  padding: 20px 0;
}
 
.pricing-table .ptable-description ul {
  margin: 0;
  padding: 0;
  list-style: none;
}
 
.pricing-table .ptable-description ul li {
  color: #2A293E;
  font-size: 14px;
  font-weight: 300;
  letter-spacing: 1px;
  padding: 7px;
  border-bottom: 1px solid #dedede;
}
 
.pricing-table .ptable-description ul li:last-child {
  border: none;
}
 
.pricing-table .ptable-footer {
  padding-bottom: 30px;
}
 
.pricing-table .ptable-action a {
  display: inline-block;
  padding: 10px 20px;
  color: #ffffff;
  font-size: 14px;
  font-weight: 500;
  letter-spacing: 2px;
  text-decoration: none;
  background: #2A293E;
}
 
.pricing-table .ptable-action a:hover {
  color: #ffffff;
  background: #0c2e8a;
}
 
.pricing-table .ptable-item.featured-item .ptable-action a {
  color: #ffffff;
  background: #0c2e8a;
}
 
.pricing-table .ptable-item.featured-item .ptable-action a:hover {
  color: #ffffff;
  background: #2A293E;
}
 
</style>
 
 
 
 
 
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