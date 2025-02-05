@include('frontend.header')

<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="bg-breadcrumb-single"></div>
    <div class="container text-center py-5" style="max-width: 900px;">
        <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">{{$service->services_title}}</h4>
        <ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Services</a></li>
            <li class="breadcrumb-item active text-primary">{{$service->services_title}}</li>
        </ol>
    </div>
</div>
<!-- Header End -->

<!-- Service Start -->
<div class="container-fluid about bg-light py-5">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 col-xl-5 wow fadeInLeft" data-wow-delay="0.1s">
                <div class="about-img">
                    <img src="{{ url('public/uploads/' . $service->services_image) }}" class="img-fluid w-100 rounded bg-white" alt="Image">
                </div>
            </div>
            <div class="col-lg-6 col-xl-7 wow fadeInRight" data-wow-delay="0.3s">
                <h1 class="display-7 mb-4">{{$service->services_heading1}}</h1>
                <p class="text ps-4 mb-4">{{$service->services_description}}</p>


            </div>
        </div>
    </div>
</div>

<!-- why choose us -->
<div class="container-fluid py-5">
    <h2 class="text-center fs-1 py-3">Why <a href="#">Choose</a> Us?</h2>
    <div class="row">
        <div class="owl-carousel featured-carousel owl-theme">
            @foreach ($whychooseus as $whychoose)
            <div class="item">
                <div class="card ">
                    <div class="service-icon">
                        <i class="fa-solid fa-check"></i>
                    </div>
                    <div class="card-body">
                        <h5 class="text-center fw-2">{{ $whychoose->heading }}</h5>
                        <small>{{ $whychoose->description }}</small>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>


<div class="container-fluid bg-light py-5">
    <div class="container align-items-center">
        <p>
            {!! html_entity_decode($service->services_description2) !!}
        </p>

        <h2 class="py-3">{{$service->contact_heading}}</h2>
        <p> {!! html_entity_decode($service->contact_description) !!}</p>
    </div>
</div>

<!-- services provide -->

<div class="container-fluid service py-5">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
            <h4 class="text-primary">Services provide</h4>
            <!-- <h2 class="display-4">Tailored IT Solutions for Your Business Success.</h2> -->
        </div>
        <div class="row g-4 justify-content-center text-center">

            @foreach ($offer as $offer)
            <div class="col-md-6 col-lg-6 col-xl-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item bg-light rounded">
                    <div class="service-content text-center p-3">
                        <div class="service-content-inner">
                            <a href="#" class="h4 mb-4 d-inline-flex text-center">{{$offer->heading}}</a>
                            <p class="mb-4" style="text-align: justify;">{{$offer->description}}</p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
           




        </div>
    </div>
</div>
<!-- Services provide End -->


<div class="container-fluid bg-light pb-5">
    <div class="container page-inner">
        <h2 class="text-center py-3">FAQs About {{$service->services_title}} From CodeSavvy Nest.</h2>
        <div class="accordion" id="accordionExample">

            <div id="accordionExample">
                @foreach($faqs as $key => $faq)
                <div class="accordion-item my-3">
                    <h2 class="accordion-header" id="heading{{$key}}">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{$key}}" aria-expanded="true" aria-controls="collapse{{$key}}">
                            {{$faq->question}}
                        </button>
                    </h2>
                    <div id="collapse{{$key}}" class="accordion-collapse collapse" aria-labelledby="heading{{$key}}" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            {{$faq->answer}}
                        </div>
                    </div>
                </div>
                @endforeach
            </div>




        </div>
    </div>
</div>


<div class="container py-4">
     <h2 class="text-center py-3">Get Your Query Know</h2>
    <form method="POST" action="{{ url('services', $service->services_slug) }}">
                            @csrf
                            <div class="row g-3">
                                <div class="col-lg-12 col-xl-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="name" id="name" placeholder="Your Name">
                                        <label for="name">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-xl-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email">
                                        <label for="email">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-xl-12">
                                    <div class="form-floating">
                                        <input type="tel" maxlength="10" class="form-control" name="phone_number" id="phone" placeholder="+91 8563214782">
                                        <label for="phone">+91 8563214782</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <select class="form-control bg-white" name="service" id="services">
                                            <option>--Select--</option>
                                            <option value="Web Development">Web Development</option>
                                            <option value="WordPress Development">WordPress Development</option>
                                            <option value="SEO Optimization">SEO Optimization</option>
                                            <option value="Google Ad's">Google Ad's</option>
                                            <option value="WebSite Maintenance">WebSite Maintenance</option>
                                        </select>
                                        <label for="services">services</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" name="massage" placeholder="Leave a message here" id="message" style="height: 160px"></textarea>
                                        <label for="message">Message</label>
                                    </div>
                                </div>
                                <div class="col-12 text-center">
                                    <button class="btn btn-primary  py-3">Send Message</button>
                                </div>
                                 <input type="hidden" name="g-recaptcha-response" id="recaptcha-token">
                            </div>
                        </form>
</div>





<script>
    document.addEventListener('DOMContentLoaded', function() {
        var accordions = document.querySelectorAll('.accordion-collapse');
        accordions.forEach(function(accordion) {
            new bootstrap.Collapse(accordion, {
                toggle: false
            });
        });
    });
</script>


<script>
    $(document).ready(function() {
        $('[data-bs-toggle="collapse"]').collapse();
    });
</script>

@include('frontend.footer')