<div class="container-fluid mb-3">
    <div class="row px-xl-5">
        <div class="col-lg-8">
            <div id="header-carousel" class="carousel slide carousel-fade mb-30 mb-lg-0" data-ride="carousel">

                <ol class="carousel-indicators">
                    <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#header-carousel" data-slide-to="1"></li>
                    <li data-target="#header-carousel" data-slide-to="2"></li>
                    <li data-target="#header-carousel" data-slide-to="3"></li>
                </ol>
                <div class="carousel-inner">
                    @foreach ($sliders as $key => $slider)
                        <div class="carousel-item position-relative {{ $key == 0 ? 'active' : '' }}"
                            style="height: 430px;">
                            <img class="position-absolute w-100 h-100"
                                src="{{ asset('backend/slider/' . $slider->photo) }}" style="object-fit: cover;">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">
                                        {{ $slider->title }}</h1>
                                    <p class="mx-md-5 px-5 animate__animated animate__bounceIn">
                                        {{ $slider->description }}</p>
                                    <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp"
                                        href="#">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="product-offer mb-30" style="height: 200px;">
                <img class="img-fluid" src="{{ asset('Frontend/img/offer-1.jpg') }}" alt="">
                <div class="offer-text">
                    <h6 class="text-white text-uppercase">Save 20%</h6>
                    <h3 class="text-white mb-3">Special Offer</h3>
                    <a href="" class="btn btn-primary">Shop Now</a>
                </div>
            </div>
            <div class="product-offer mb-30" style="height: 200px;">
                <img class="img-fluid" src="{{ asset('Frontend/img/offer-2.jpg') }}" alt="">
                <div class="offer-text">
                    <h6 class="text-white text-uppercase">Save 20%</h6>
                    <h3 class="text-white mb-3">Special Offer</h3>
                    <a href="" class="btn btn-primary">Shop Now</a>
                </div>
            </div>
        </div>
    </div>
</div>
