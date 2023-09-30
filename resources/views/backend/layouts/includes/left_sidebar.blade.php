<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('home') }}">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        {{-- Banner section --}}
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#bannersection" aria-expanded="false"
                aria-controls="bannersection">
                <i class="icon-picture"></i>
                <span class="menu-title ml-auto">Banner section</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="bannersection">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="{{ route('banner.index') }}">All Banner</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('banner.create') }}">Create Banner</a></li>
                </ul>
            </div>
        </li>
        {{-- Slider section --}}
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#slidersection" aria-expanded="false"
                aria-controls="bannersection">
                <i class="icon-picture"></i>
                <span class="menu-title ml-auto">Slider section</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="slidersection">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="{{ route('slider.index') }}">All slider</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('slider.create') }}">Create Slider</a></li>
                </ul>
            </div>
        </li>

        {{-- category section --}}
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#category" aria-expanded="false" aria-controls="category">
                <i class="icon-layers"></i>
                <span class="menu-title ml-auto">Category section</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="category">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="{{ route('category.index') }}">All
                            Category</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('category.create') }}">Add Category</a>
                </ul>
            </div>
        </li>
        {{-- Brand section --}}
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#product" aria-expanded="false" aria-controls="product">
                <i class="icon-briefcase"></i>
                <span class="menu-title ml-auto">Brand Section</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="product">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{ route('brand.index') }}">All Brand</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{ route('brand.create') }}">Add Brand</a></li>
                </ul>
            </div>
        </li>
        {{-- Product section --}}
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#cart" aria-expanded="false" aria-controls="cart">
                <i class="fa-solid fa-cart-plus"></i>
                <span class="menu-title ml-auto">Product Section</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="cart">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{ route('product.index') }}">All Product</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{ route('product.create') }}">Add Product</a></li>
                </ul>
            </div>
        </li>
        {{-- cart section --}}
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#cart" aria-expanded="false" aria-controls="cart">
                <i class="fa-solid fa-cart-plus"></i>
                <span class="menu-title ml-auto">Cart</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="cart">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">Dropdowns</a>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Typography</a>
                    </li>
                </ul>
            </div>
        </li>
        {{-- post section --}}
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#post_cat" aria-expanded="false"
                aria-controls="post_cat">
                <i class="icon-present"></i>
                <span class="menu-title ml-3">Post Category</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="post_cat">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">Dropdowns</a>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Typography</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#tage" aria-expanded="false" aria-controls="tage">
                <i class="icon-tag"></i>
                <span class="menu-title ml-3">Post Tage</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="tage">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">Dropdowns</a>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Typography</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#post" aria-expanded="false" aria-controls="post">
                <i class="icon-layout menu-icon"></i>
                <span class="menu-title">Post Management</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="post">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">Dropdowns</a>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Typography</a>
                    </li>
                </ul>
            </div>
        </li>
        {{-- Review section --}}
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#Review" aria-expanded="false" aria-controls="Review">
                <i class="icon-people"></i>
                <span class="menu-title ml-3">User Management </span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="Review">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{ route('user.index') }}">All User</a></li>
                    <li class="nav-item"> <a class="nav-link" href="">Dropdowns</a>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="">Typography</a>
                    </li>
                </ul>
            </div>
        </li>
        {{-- Order Management section --}}
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#Order" aria-expanded="false" aria-controls="Order">
                <i class="icon-layout menu-icon"></i>
                <span class="menu-title">Order Manage </span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="Order">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">Dropdowns</a>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Typography</a>
                    </li>
                </ul>
            </div>
        </li>
        {{-- website setting --}}
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#setting" aria-expanded="false"
                aria-controls="setting">
                <i class="icon-settings"></i>
                <span class="menu-title ml-auto">Setting</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="setting">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">Dropdowns</a>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Typography</a>
                    </li>
                </ul>
            </div>
        </li>


        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false"
                aria-controls="form-elements">
                <i class="icon-columns menu-icon"></i>
                <span class="menu-title">Form elements</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form-elements">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="pages/forms/basic_elements.html">Basic
                            Elements</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
                <i class="icon-bar-graph menu-icon"></i>
                <span class="menu-title">Charts</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="charts">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/charts/chartjs.html">ChartJs</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
                <i class="icon-grid-2 menu-icon"></i>
                <span class="menu-title">Tables</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="tables">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/tables/basic-table.html">Basic table</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
                <i class="icon-contract menu-icon"></i>
                <span class="menu-title">Icons</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="icons">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/icons/mdi.html">Mdi icons</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                <i class="icon-head menu-icon"></i>
                <span class="menu-title">User Pages</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register </a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#error" aria-expanded="false" aria-controls="error">
                <i class="icon-ban menu-icon"></i>
                <span class="menu-title">Error pages</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="error">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> 404 </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html"> 500 </a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="pages/documentation/documentation.html">
                <i class="icon-paper menu-icon"></i>
                <span class="menu-title">Documentation</span>
            </a>
        </li>
    </ul>
</nav>
