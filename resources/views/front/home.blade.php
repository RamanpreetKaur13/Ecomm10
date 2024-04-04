@extends('front.layout.layout')



@section('content')


<section class="sec-1">
  <div class="container">
    <div class="container-1">
      <div class="para">
        <p>You are on Amazon.com. You can also shop on Amazon India for millions of products with fast local delivery.
        </p><a
          href="https://www.amazon.in/?&ext_vrnc=hi&tag=googhydrabk1-21&ref=pd_sl_nxqtetlae_e&adgrpid=60571832564&hvpone=&hvptwo=&hvadid=486453138860&hvpos=&hvnetw=g&hvrand=12535176714638732243&hvqmt=e&hvdev=c&hvdvcmdl=&hvlocint=&hvlocphy=9061830&hvtargid=kwd-296458789801&hydadcr=14452_2154371&gclid=Cj0KCQjwnvOaBhDTARIsAJf8eVNJ6D0_UEAgzp9_IEK8-AtbwjPY81k1murdrRDI1PsbLEmGdhyqKDMaArp9EALw_wcB">Click
          here to go to amazon.in</a>
      </div>
      <div class="product-comp">
        <div class="box">
          <h3>Gaming Accessories</h3>
          <div class="box-a">
            <div>
              <img src="{{ asset('front/assets/images/ga1.jpg') }}" alt="">
              <span>Headsets</span>
            </div>
            <div>
              <img src="{{ asset('front/assets/images/ga2.jpg') }}" alt="">
              <span>Keyboards</span>
            </div>
            <div>
              <img src="{{ asset('front/assets/images/ga3.jpg') }}" alt="">
              <span>Computer mice</span>
            </div>
            <div>
              <img src="{{ asset('front/assets/images/ga4.jpg') }}" alt="">
              <span>Chairs</span>
            </div>
          </div>
          <a href="#">See More</a>
        </div>
        <div class="box">
          <h3>Shop By Category</h3>
          <div class="box-a">
            <div>
              <img src="{{ asset('front/assets/images/sc1.jpg') }}" alt="">
              <span>Laptop</span>
            </div>
            <div>
              <img src="{{ asset('front/assets/images/sc2.jpg') }}" alt="">
              <span>Video Games</span>
            </div>
            <div>
              <img src="{{ asset('front/assets/images/sc3.jpg') }}" alt="">
              <span>Baby</span>
            </div>
            <div>
              <img src="{{ asset('front/assets/images/sc4.jpg') }}" alt="">
              <span>Toy & Games</span>
            </div>
          </div>
          <a href="#">Shop Now</a>
        </div>
        <div class="box box-c">
          <h3>Amazon Basics</h3>
          <div>
            <img src="{{ asset('front/assets/images/amazon basics.jpg') }}" alt="">
          </div>
          <a href="#">See More</a>
        </div>
        <div class="box-b">
          <div class="best">
            <h3>Sign up for the Best Experience</h3>
            <button>Sign in securely</button>
          </div>
          <div>
            <img src="{{ asset('front/assets/images/banner.jpg') }}" alt="">
          </div>
        </div>
      </div>
      <div class="product-comp">
        <div class="box box-c">
          <h3>Shop Valentine's Day</h3>
          <div>
            <img src="{{ asset(" front/assets/images/shop valentine's.jpg") }}" alt="">
          </div>
          <a href="#">See More</a>
        </div>
        <div class="box box-c">
          <h3>Electronics</h3>
          <div>
            <img src="{{ asset(" front/assets/images/electronics.jpg") }}" alt="">
          </div>
          <a href="#">See More</a>
        </div>
        <div class="box box-c">
          <h3>Find your ideal TV</h3>
          <div>
            <img src="{{ asset(" front/assets/images/find your deal.jpg") }}" alt="">
          </div>
          <a href="#">See More</a>
        </div>
        <div class="box box-c">
          <h3>Easy Returns</h3>
          <div>
            <img src="{{ asset('front/assets/images/easy return.jpg') }}" alt="">
          </div>
          <a href="#">See More</a>
        </div>
      </div>
    </div>
    <div class="slider">
      <div class="image-box">
        @if ($getScrollBanners->isNotEmpty())
        @foreach ($getScrollBanners as $scrollBanner)
       
        <div class="slide">
          
          {{-- <img src="https://fakeimg.pl/3000x200/?text=Banner&font=lobster" alt=""> --}}
          <img src="{{ asset('storage/front/images/banners/'.$scrollBanner->image) }}" alt="">
        </div>
        @endforeach
        @else
        
        <div class="slide">
          {{-- <img src="https://fakeimg.pl/3000x600/?text=Banner&font=lobster" alt=""> --}}
          <img src="{{ asset('front/assets/images/bannerPlaceholderImg.png') }}" alt="">
        </div>

        @endif
       
       
        {{-- <div class="slide">
          <img src="{{ asset('front/assets/images/si2.jpg') }}" alt="">
        </div>
        <div class="slide">
          <img src="{{ asset('front/assets/images/si3.jpg') }}" alt="">
        </div>
        <div class="slide">
          <img src="{{ asset('front/assets/images/si4.jpg') }}" alt="">
        </div> --}}
      </div>
    </div>
  </div>
</section>
<section class="sec-2">
  <h3>Popular Products in Wireless Internationally</h3>
  <div class="slide-sec">
    <div class="l-btn"><i class="fa-solid fa-chevron-left"></i></div>
    <div class="r-btn"><i class="fa-solid fa-chevron-right"></i></div>
    <h3>Popular Products in Wireless Internationally</h3>
    <ul class="product-slide">
      <li><img src="{{ asset('front/assets/images/pinter1.jpg') }}" alt=""></li>
      <li><img src="{{ asset('front/assets/images/pinter2.jpg') }}" alt=""></li>
      <li><img src="{{ asset('front/assets/images/pinter3.jpg') }}" alt=""></li>
      <li><img src="{{ asset('front/assets/images/pinter4.jpg') }}" alt=""></li>
      <li><img src="{{ asset('front/assets/images/pinter5.jpg') }}" alt=""></li>
      <li><img src="{{ asset('front/assets/images/pinter6.jpg') }}" alt=""></li>
      <li><img src="{{ asset('front/assets/images/pinter7.jpg') }}" alt=""></li>
      <li><img src="{{ asset('front/assets/images/pinter8.jpg') }}" alt=""></li>
      <li><img src="{{ asset('front/assets/images/pinter9.jpg') }}" alt=""></li>
      <li><img src="{{ asset('front/assets/images/pinter10.jpg') }}" alt=""></li>
      <li><img src="{{ asset('front/assets/images/pinter11.jpg') }}" alt=""></li>
      <li><img src="{{ asset('front/assets/images/pinter12.jpg') }}" alt=""></li>
      <li><img src="{{ asset('front/assets/images/pinter13.jpg') }}" alt=""></li>
      <li><img src="{{ asset('front/assets/images/pinter14.jpg') }}" alt=""></li>
      <li><img src="{{ asset('front/assets/images/pinter15.jpg') }}" alt=""></li>
    </ul>
  </div>
</section>
<section class="sec-2">
  <!-- <h3>Popular Products in Wirelessly Internationally</h3> -->
  <div class="slide-sec">
    <div class="l-btn btn-1b"><i class="fa-solid fa-chevron-left"></i></div>
    <div class="r-btn btn-1a"><i class="fa-solid fa-chevron-right"></i></div>
    <h3>Popular Products in PC Internationally</h3>
    <ul class="product-slide product-slide-1">
      <li><img src="{{ asset('front/assets/images/pc2.jpg') }}" alt=""></li>
      <li><img src="{{ asset('front/assets/images/pc3.jpg') }}" alt=""></li>
      <li><img src="{{ asset('front/assets/images/pc4.jpg') }}" alt=""></li>
      <li><img src="{{ asset('front/assets/images/pc5.jpg') }}" alt=""></li>
      <li><img src="{{ asset('front/assets/images/pc6.jpg') }}" alt=""></li>
      <li><img src="{{ asset('front/assets/images/pc7.jpg') }}" alt=""></li>
      <li><img src="{{ asset('front/assets/images/pc8.jpg') }}" alt=""></li>
      <li><img src="{{ asset('front/assets/images/pc9.jpg') }}" alt=""></li>
      <li><img src="{{ asset('front/assets/images/pc10.jpg') }}" alt=""></li>
      <li><img src="{{ asset('front/assets/images/pc11.jpg') }}" alt=""></li>
      <li><img src="{{ asset('front/assets/images/pc12.jpg') }}" alt=""></li>
      <li><img src="{{ asset('front/assets/images/pc13.jpg') }}" alt=""></li>
      <li><img src="{{ asset('front/assets/images/pc14.jpg') }}" alt=""></li>
      <li><img src="{{ asset('front/assets/images/pc15.jpg') }}" alt=""></li>
    </ul>
  </div>
</section>
<div class="product-comp">
  <div class="box box-c">
    <h3>Shop Activity Trackers and Smart Watches</h3>
    <div>
      <img src="{{ asset('front/assets/images/watch.jpg') }}" alt="">
    </div>
    <a href="#">See More</a>
  </div>
  <div class="box box-d">
    <h3>Comfy Styles for Men</h3>
    <div class="box-a">
      <div>
        <img src="{{ asset('front/assets/images/cm1.jpg') }}" alt="">
        <span>Sweatshirts</span>
      </div>
      <div>
        <img src="{{ asset('front/assets/images/cm2.jpg') }}" alt="">
        <span>Joggers</span>
      </div>
      <div>
        <img src="{{ asset('front/assets/images/cm3.jpg') }}" alt="">
        <span>Cardigans</span>
      </div>
      <div>
        <img src="{{ asset('front/assets/images/cm4.jpg') }}" alt="">
        <span>Easy Tees</span>
      </div>
    </div>
    <a href="#">See More</a>
  </div>
  <div class="box box-d">
    <h3>Gaming Merchandise</h3>
    <div class="box-a">
      <div>
        <img src="{{ asset('front/assets/images/gm1.jpg') }}" alt="">
        <span>Apparel</span>
      </div>
      <div>
        <img src="{{ asset('front/assets/images/gm2.jpg') }}" alt="">
        <span>Hats</span>
      </div>
      <div>
        <img src="{{ asset('front/assets/images/gm3.jpg') }}" alt="">
        <span>Action Figures</span>
      </div>
      <div>
        <img src="{{ asset('front/assets/images/gm4.jpg') }}" alt="">
        <span>Mugs</span>
      </div>
    </div>
    <a href="#">See More</a>
  </div>
  <div class="box box-c">
    <h3>Shop Pet Supplies</h3>
    <div>
      <img src="{{ asset('front/assets/images/pets.jpg') }}" alt="">
    </div>
    <a href="#">See More</a>
  </div>

</div>
<div class="product-comp">
  <div class="box box-c">
    <h3>For your Fitness Needs</h3>
    <div>
      <img src="{{ asset('front/assets/images/fitness.jpg') }}" alt="">
    </div>
    <a href="#">Shop Now</a>
  </div>
  <div class="box box-c">
    <h3>Create with Strip Lights</h3>
    <div>
      <img src="{{ asset('front/assets/images/light.jpg') }}" alt="">
    </div>
    <a href="#">Shop Now</a>
  </div>
  <div class="box box-c">
    <h3>New arrivals in Toys</h3>
    <div>
      <img src="{{ asset('front/assets/images/craft.jpg') }}" alt="">
    </div>
    <a href="#">Shop Now</a>
  </div>
  <div class="box box-c">
    <h3>Kindle E Readers</h3>
    <div>
      <img src="{{ asset('front/assets/images/reader.jpg') }}" alt="">
    </div>
    <a href="#">Shop Now</a>
  </div>
</div>
<section class="sec-2">
  <!-- <h3>Popular Products in Wirelessly Internationally</h3> -->
  <div class="slide-sec">
    <div class="l-btn btn-1c"><i class="fa-solid fa-chevron-left"></i></div>
    <div class="r-btn btn-1d"><i class="fa-solid fa-chevron-right"></i></div>
    <h3>Top Sellers in Books</h3>
    <ul class="product-slide product-slide-2">
      <li><img src="{{ asset('front/assets/images/b1.jpg') }}" alt=""></li>
      <li><img src="{{ asset('front/assets/images/b2.jpg') }}" alt=""></li>
      <li><img src="{{ asset('front/assets/images/b3.jpg') }}" alt=""></li>
      <li><img src="{{ asset('front/assets/images/b4.jpg') }}" alt=""></li>
      <li><img src="{{ asset('front/assets/images/b5.jpg') }}" alt=""></li>
      <li><img src="{{ asset('front/assets/images/b6.jpg') }}" alt=""></li>
      <li><img src="{{ asset('front/assets/images/b7.jpg') }}" alt=""></li>
      <li><img src="{{ asset('front/assets/images/b8.jpg') }}" alt=""></li>
      <li><img src="{{ asset('front/assets/images/b9.jpg') }}" alt=""></li>
      <li><img src="{{ asset('front/assets/images/b10.jpg') }}" alt=""></li>
    </ul>
  </div>
</section>

{{-- <script src="app.js"></script> --}}

@endsection