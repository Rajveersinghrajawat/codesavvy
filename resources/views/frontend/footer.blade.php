<!-- Footer Start -->
<div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="footer-item d-flex flex-column">
                    <div class="footer-item">
                        <h4 class="text-white mb-4">About Us</h4>
                        <p class="mb-3">Welcome to CodeSavvyNest, your trusted partner for top IT solutions for business. Based in Jodhpur, India, we specialize in delivering expert IT solutions tailored to meet your unique business needs.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="footer-item d-flex flex-column">
                    <h4 class="text-white mb-4">Quick Links</h4>
                    <a href="#"><i class="fas fa-angle-right me-2"></i>Meet The Team</a>
                    <a href="#"><i class="fas fa-angle-right me-2"></i>Letest Blog</a>
                    <a href="{{url('/contact-us')}}"><i class="fas fa-angle-right me-2"></i>Contact Us</a>
                    <a href="#"><i class="fas fa-angle-right me-2"></i> Latest Projects</a>
                    <a href="{{url('/terms-and-conditions')}}"><i class="fas fa-angle-right me-2"></i>Terms & Conditions</a>
                    <a href="{{url('/refund-policy')}}"><i class="fas fa-angle-right me-2"></i>Refund Policy</a>
                </div>
            </div>

            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="footer-item d-flex flex-column">
                    <h4 class="text-white mb-4">Our Servies</h4>
                    <a href="https://codesavvynest.com/services/website-development"><i class="fas fa-angle-right me-2"></i>Wesite Development</a>
                    <a href="https://codesavvynest.com/services/wordpress-development"><i class="fas fa-angle-right me-2"></i>WordPress Development</a>
                    <a href="https://codesavvynest.com/services/seo-optimization"><i class="fas fa-angle-right me-2"></i>SEO Optimization</a>
                    <a href="https://codesavvynest.com/services/google-ads"><i class="fas fa-angle-right me-2"></i>Google Ad's</a>
                    <a href="https://codesavvynest.com/services/website-maintenance"><i class="fas fa-angle-right me-2"></i>Website Maintenance</a>
                </div>
            </div>

            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="footer-item-post d-flex flex-column">
                    <h4 class="text-white mb-4">Get In Touch</h4>
                    <div class="d-flex flex-column mb-3">
                        <a href="#" class="text-body mb-3">
                            <i class="fas fa-phone-alt" aria-hidden="true"></i>
                            7726044133 / 9571730422
                        </a>

                        <a href="#" class="text-body">
                            <i class="fas fa-envelope" aria-hidden="true"></i>
                            codesavvynestinfo@gmail.com</a>
                    </div>
                    <div class="d-flex flex-column mb-3">
                        <a href="#" class="text-body">
                            <i class="fa fa-location-arrow" aria-hidden="true"></i>
                            Tirupati Nagar, Nandri, Jodhpur,
                            Rajasthan 342027</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->


<!-- Copyright Start -->
<div class="container-fluid copyright py-4">
    <div class="container">
        <div class="row g-4 align-items-center">
            <div class="col-md-12 text-center  mb-md-0">
                <span class="text-body"><a href="https://codesavvynest.com/" class="border-bottom text-primary"><i class="fas fa-copyright text-light me-2"></i>2024,Codesavvy Nest</a>, All right reserved.</span>
            </div>
        </div>
    </div>
</div>
<!-- Copyright End -->


</body>

<!-- Back to Top -->
<a href="#header" class="btn btn-primary btn-lg-square back-to-top"><i class="fa fa-arrow-up"></i></a>


<!-- JavaScript Libraries -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('frontend/lib/wow/wow.min.js') }}"></script>
<script src="{{ asset('frontend/lib/easing/easing.min.js') }}"></script>
<script src="{{ asset('frontend/lib/waypoints/waypoints.min.js') }}"></script>
<script src="{{ asset('frontend/lib/counterup/counterup.min.js') }}"></script>
<script src="{{ asset('frontend/lib/owlcarousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('frontend/lib/lightbox/js/lightbox.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script>
    $('.featured-carousel').owlCarousel({
    loop:true,
    dots:false,
    margin:10,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:3
        }
    }
})
</script>

<!-- Template Javascript -->
<script src="{{ asset('frontend/js/main.js') }}"></script>

<script src="https://www.google.com/recaptcha/api.js?render={{ env('RECAPTCHA_SITE_KEY') }}"></script>
<script>
    grecaptcha.ready(function() {
        grecaptcha.execute('{{ env('RECAPTCHA_SITE_KEY') }}', {action: 'submit'}).then(function(token) {
            document.getElementById('recaptcha-token').value = token;
        });
    });
</script>

<script>
  function onClick(e) {
    e.preventDefault();
    grecaptcha.enterprise.ready(async () => {
      const token = await grecaptcha.enterprise.execute('6LfB2cIqAAAAAN9VH_lA1Un5d6vc-ykeX_4uKfCi', {action: 'LOGIN'});
    });
  }
</script>

<script>
    document.getElementById('phone').addEventListener('input', function (e) {
    this.value = this.value.replace(/[^0-9]/g, ''); // Removes non-numeric characters
});
</script>

</html>

