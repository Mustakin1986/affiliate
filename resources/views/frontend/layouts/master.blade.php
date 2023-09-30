@include('frontend.layouts.includes.header')

<body>
    <!-- Topbar Start -->
    @include('frontend.layouts.includes.topbar')
    <!-- Topbar End -->


    <!-- Navbar Start -->
    @include('frontend.layouts.includes.navbar')
    <!-- Navbar End -->


    <!-- Carousel Start -->
    @include('frontend.layouts.includes.slider')
    <!-- Carousel End -->
    <!-- Featured Products Start -->
    <div class="py-2">
        <div class="container-fluid pt-2 pb-3 bg-white ">
            <h3 class="section-title position-relative text-uppercase mx-xl-5 mb-2"><span class="pr-3">Featured
                    Products</span></h3>
            <div class="row px-xl-5">
                <div class="owl-carousel featured-carousel owl-theme">
                    @foreach ($all_product as $row)
                        <div class="item ">
                            <div class="card">
                                <img src="{{ asset('backend/product/' . $row->photo) }}" alt=""
                                    style="height:200px">
                                <div class="card-body">
                                    <div class="d-flex mt-2">
                                        <h5>{{ $row->price }}</h5>
                                        <h6 class="text-muted ml-5"><del>$123.00</del></h6>
                                    </div>
                                    <div class="d-flex align-items-center mb-1">
                                        <small class="fa fa-star text-primary mr-1"></small>
                                        <small class="fa fa-star text-primary mr-1"></small>
                                        <small class="fa fa-star text-primary mr-1"></small>
                                        <small class="fa fa-star text-primary mr-1"></small>
                                        <small class="fa fa-star text-primary mr-1"></small>
                                        <small>(99)</small>
                                    </div>
                                    <h3>{{ $row->title }}</h3>
                                    <div class="d-flex align-items-center">
                                        <a class="btn btn-square" href=""><i class="fa fa-shopping-cart"></i></a>
                                        <a class="btn btn-square" href=""><i class="far fa-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- Featured Products end -->

    <!-- Best Selling Start -->
    <div class="py-2">
        <div class="container-fluid pt-2 pb-3 bg-white ">
            <h3 class="section-title position-relative text-uppercase mx-xl-5 mb-2"><span class="pr-3">Best Selling
                </span></h3>
            <div class="row px-xl-5 mb-2">
                <div class="owl-carousel featured-carousel owl-theme">
                    @foreach ($all_product as $row)
                        <div class="item" style="height:200px">
                            <div class="card">
                                <img src="{{ asset('backend/product/' . $row->photo) }}" alt=""
                                    style="height:100px">
                                <div class="card-body">
                                    <div class="d-flex mt-2">
                                        <h5>{{ $row->price }}</h5>
                                        <h6 class="text-muted ml-5"><del>$123.00</del></h6>
                                    </div>
                                    <div class="d-flex align-items-center mb-1">
                                        <small class="fa fa-star text-primary mr-1"></small>
                                        <small class="fa fa-star text-primary mr-1"></small>
                                        <small class="fa fa-star text-primary mr-1"></small>
                                        <small class="fa fa-star text-primary mr-1"></small>
                                        <small class="fa fa-star text-primary mr-1"></small>
                                        <small>(99)</small>
                                    </div>
                                    <h3>{{ $row->title }}</h3>
                                    <div class="d-flex align-items-center">
                                        <a class="btn btn-square" href=""><i class="fa fa-shopping-cart"></i></a>
                                        <a class="btn btn-square" href=""><i class="far fa-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="row px-xl-5 mt-5">
                <div class="owl-carousel featured-carousel owl-theme">
                    @foreach ($all_product as $row)
                        <div class="item" style="height:200px">
                            <div class="card">
                                <img src="{{ asset('backend/product/' . $row->photo) }}" alt=""
                                    style="height:150px">
                                <div class="card-body">
                                    <div class="d-flex mt-2">
                                        <h5>{{ $row->price }}</h5>
                                        <h6 class="text-muted ml-5"><del>$123.00</del></h6>
                                    </div>
                                    <div class="d-flex align-items-center mb-1">
                                        <small class="fa fa-star text-primary mr-1"></small>
                                        <small class="fa fa-star text-primary mr-1"></small>
                                        <small class="fa fa-star text-primary mr-1"></small>
                                        <small class="fa fa-star text-primary mr-1"></small>
                                        <small class="fa fa-star text-primary mr-1"></small>
                                        <small>(99)</small>
                                    </div>
                                    <h3>{{ $row->title }}</h3>
                                    <div class="d-flex align-items-center">
                                        <a class="btn btn-square" href=""><i class="fa fa-shopping-cart"></i></a>
                                        <a class="btn btn-square" href=""><i class="far fa-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- Best Selling end  -->
    <!-- Recent Start -->
    <div class="container-fluid pt-5 pb-3">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Recent
                Products</span></h2>
        <div class="row px-xl-5">
            @foreach ($all_product as $row)
                <div class="col-lg-2 col-md-3 col-sm-5 pb-1">

                    <div class="product-item bg-light mb-4">

                        <div class="product-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{ asset('backend/product/' . $row->photo) }}"
                                alt="">
                            <div class="product-action">
                                <a class="btn btn-outline-dark btn-square" href=""><i
                                        class="fa fa-shopping-cart"></i></a>
                                <a class="btn btn-outline-dark btn-square" href=""><i
                                        class="far fa-heart"></i></a>
                                <a class="btn btn-outline-dark btn-square" href=""><i
                                        class="fa fa-sync-alt"></i></a>
                                <a class="btn btn-outline-dark btn-square" href=""><i
                                        class="fa fa-search"></i></a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <a class="h6 text-decoration-none text-truncate" href="">Product Name Goes Here</a>
                            <div class="d-flex align-items-center justify-content-center mt-2">
                                <h5>$123.00</h5>
                                <h6 class="text-muted ml-2"><del>$123.00</del></h6>
                            </div>
                            <div class="d-flex align-items-center justify-content-center mb-1">
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small>(99)</small>
                            </div>
                        </div>

                    </div>

                </div>
            @endforeach
        </div>
    </div>
    <!-- Products End -->

    <!-- Products Start -->
    <div class="container-fluid pt-5 pb-3">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">All
                Products</span></h2>
        <div class="row px-xl-5">
            @foreach ($all_product as $row)
                <div class="col-lg-2 col-md-3 col-sm-5 pb-1">

                    <div class="product-item bg-light mb-4">
                        <div class="product-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{ asset('backend/product/' . $row->photo) }}"
                                alt="">
                            <div class="product-action">
                                <a class="btn btn-outline-dark btn-square" href=""><i
                                        class="fa fa-shopping-cart"></i></a>
                                <a class="btn btn-outline-dark btn-square" href=""><i
                                        class="far fa-heart"></i></a>
                                <a class="btn btn-outline-dark btn-square" href=""><i
                                        class="fa fa-sync-alt"></i></a>
                                <a class="btn btn-outline-dark btn-square" href=""><i
                                        class="fa fa-search"></i></a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <a class="h6 text-decoration-none text-truncate" href="">Product Name Goes Here</a>
                            <div class="d-flex align-items-center justify-content-center mt-2">
                                <h5>$123.00</h5>
                                <h6 class="text-muted ml-2"><del>$123.00</del></h6>
                            </div>
                            <div class="d-flex align-items-center justify-content-center mb-1">
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small>(99)</small>
                            </div>
                        </div>
                    </div>

                </div>
            @endforeach
        </div>
    </div>
    <!-- Products End -->
    <!-- Vendor Start -->
    @include('frontend.layouts.includes.ourvendor');
    <!-- Vendor End -->


    <!-- Footer Start -->
    @include('frontend.layouts.includes.footer')
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>

    @include('frontend.layouts.includes.script');
</body>

</html>
