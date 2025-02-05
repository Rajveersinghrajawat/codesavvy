@include('frontend.header')

  <!-- Header Start -->
  <div class="container-fluid bg-breadcrumb">
            <div class="bg-breadcrumb-single"></div>
            <div class="container text-center py-5" style="max-width: 900px;">
                <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Refund Policy</h4>
                <ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active text-primary">Refund Policy</li>
                </ol>    
            </div>
        </div>
        <!-- Header End -->


            <!-- section start -->
            <div class="container py-5">
            <h4 class="text-center display-3 wow fadeInDown">{{$refund->heading}}</h4>
            <div class="page-inner py-5">
                <p> {!! html_entity_decode($refund->description) !!}</p>
            </div>
         </div>

        <!-- end section -->


@include('frontend.footer')