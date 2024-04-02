{{-- <header class="header-area header-sticky">
    <div class="container">
        
        <style>
            .search-box {
            margin-top: 10px;
        }
        .search-box input[type="text"] {
            width: 100%;
            margin-right: 10px;
        }
        .user-options {
            margin-top: 10px;
        }
        </style>
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="{{ route('home') }}" class="logo">
                        <img src="{{ asset('front/assets/images/logo.png') }}">
                    </a>

                    <div class="search-box">
                        <input type="text" placeholder="Search...">
                        <button>Search</button>
                    </div>
                    <div class="user-options">
                        <a href="#">Login</a>
                        <a href="#">Cart</a>
                        <a href="#">Become a Seller</a>
                    </div>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                     <ul class="nav">
                        <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                        <li class="scroll-to-section"><a href="#men">Men's</a></li>
                        <li class="scroll-to-section"><a href="#women">Women's</a></li>
                        <li class="scroll-to-section"><a href="#kids">Kid's</a></li>
                        <li class="submenu">
                            <a href="javascript:;">Pages</a>
                            <ul>
                                <li><a href="about.html">About Us</a></li>
                                <li><a href="products.html">Products</a></li>
                                <li><a href="single-product.html">Single Product</a></li>
                                <li><a href="contact.html">Contact Us</a></li>
                            </ul>
                        </li>


                        <li class="submenu">
                            <a href="javascript:;">Features</a>
                            <ul>
                                <li><a href="#">Features Page 1</a></li>
                                <li><a href="#">Features Page 2</a></li>
                                <li><a href="#">Features Page 3</a></li>
                                <li><a rel="nofollow" href="https://templatemo.com/page/4" target="_blank">Template Page 4</a></li>
                            </ul>
                        </li>
                        <li class="scroll-to-section"><a href="#explore">Explore</a></li>
                    </ul>         
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header> --}}

<div class="sidebar">
    <div class="hdn-head">
        <h2>Hello, Sign in</h2>
    </div>
    <div class="hdn-content">
        <h3>Digital Content & Devices</h3>
        <ul>
            <div>
                <li>Amazon Music</li><i class="fa-solid fa-angle-right"></i>
            </div>
            <div>
                <li>Kindle E-Readers & Books</li><i class="fa-solid fa-angle-right"></i>
            </div>
            <div>
                <li>Appstore for Android</li><i class="fa-solid fa-angle-right"></i>
            </div>
        </ul>
        <div class="line"></div>
    </div>
    <div class="hdn-content">
        <h3>Shop By Department</h3>
        <ul>
            <div>
                <li>Electronics</li><i class="fa-solid fa-angle-right"></i>
            </div>
            <div>
                <li>Computers</li><i class="fa-solid fa-angle-right"></i>
            </div>
            <div>
                <li>Smart Homes</li><i class="fa-solid fa-angle-right"></i>
            </div>
            <div>
                <li>Arts & Crafts</li><i class="fa-solid fa-angle-right"></i>
            </div>
        </ul>
        <div class="line"></div>
    </div>
    <div class="hdn-content">
        <h3>Programs & Features</h3>
        <ul>
            <div>
                <li>Gift Cards & Mobile Recharges</li><i class="fa-solid fa-angle-right"></i>
            </div>
            <div>
                <li>Flight Tickets</li><i class="fa-solid fa-angle-right"></i>
            </div>
            <div>
                <li>Clearance Store</li><i class="fa-solid fa-angle-right"></i>
            </div>
        </ul>
        <div class="line"></div>
    </div>
</div>
<i class="fa-solid fa-xmark"></i>
<div class="triangle"><i class="fa-solid fa-triangle"></i></div>
    <div class="hdn-sign">
        <div class="hdn-table">
            <div>
                <h3>Your Lists</h3>
                <ul>
                    <li>Create a List</li>
                    <li>Find a List & Registry</li>
                    <li>Amazon Smile Charity Lists</li>
                </ul>
            </div>
            <div class="hdn-line"></div>
            <div>
                <h3>Your Account</h3>
                <ul>
                    <li>Account</li>
                    <li>Orders</li>
                    <li>Recommendations</li>
                    <li>Browsing History</li>
                    <li>Watchlist</li>
                    <li>Video Purchases</li>
                    <li>Kindle Unlimited</li>
                    <li>Content & Devices</li>
                    <li>Subscribe & Save Items</li>
                    <li>Membership</li>
                    <li>Music Library</li>
                </ul>
            </div>
        </div>
    </div>
<div class="black"></div>
<header>
    <div class="first">
        <div class="flex logo">
        <a href="#"><img src="{{ asset('front/assets/images/logo.png') }}" alt=""></a>
        <div class="map flex">
            <i class="fas fa-map-marker"></i>
            <div>
                <span>Deliver to</span>
                <span>India</span>
            </div>
        </div>
    </div>
    <div class="flex input">
        <div>
            <span>All</span>
            <i class="fas fa-caret-down"></i>
        </div>
        <input type="text">
        <i class="fas fa-search"></i>
    </div>
    <div class="flex right">
        <div class="flex lang">
            <img src="{{ asset('front/assets/images/usflag.jpg') }}" alt="">
            <i class="fas fa-caret-down"></i>
        </div>
        <div class="sign">
            <span>Hello, Sign in</span>
            <div class="flex ac">
                <span>Accounts & Lists</span>
                <i class="fas fa-caret-down"></i>
            </div>
        </div>
        <div class="sign">
            <span>Returns</span>
            <span>& Orders</span>
        </div>
        <div class="flex cart">
            <i class="fas fa-shopping-cart"></i>
            <span class="ca">Cart</span>
        </div>
    </div>
</div>
<div class="second">
    <div class="second-1">
        <div>
            <i class="fas fa-bars"></i>
            <span>All</span>
        </div>
    </div>
    <div class="second-2">
        <ul>
            <li>Today's Deal</li>
            <li>Customer Service</li>
            <li>Registry</li>
            <li>Gift Cards</li>
            <li>Sell</li>
        </ul>
    </div>
    <div class="second-3">
        <span>Shop Valentine's Day</span>
    </div>
</div>
</header>