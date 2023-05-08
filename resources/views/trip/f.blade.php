@extends('layouts.master_web')



@section('css')

@section('title')
    {{$trip->name}}
@stop
@endsection



@section('content')
   <!-- Main Content -->
   <main id="rlr-main" class="rlr-main--fixed-top">
    <!-- Main Content -->
    <div class="container">
      <!-- Media Slider -->
      <aside class="row">
        <!-- Media main image carousel -->


        <div class="col-md-10 rlr-media">

          <div class="splide rlr-media--wrapper rlr-js-media">
            <!-- Arrows -->
            <div class="splide__arrows">
              <button class="rlr-media__arrow splide__arrow splide__arrow--prev">
                <svg width="10" height="16" viewBox="0 0 10 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M1.889 14.942 8.47 8.36 1.889 1.778" stroke="var(--white)" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
              </button>
              <button class="rlr-media__arrow splide__arrow splide__arrow--next">
                <svg width="10" height="16" viewBox="0 0 10 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M1.889 14.942 8.47 8.36 1.889 1.778" stroke="var(--white)" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
              </button>
            </div>
            <!-- Media main images -->
            <div class="splide__track rlr-media__strack">
              <ul id="image-preview" class="splide__list">
                <li class="splide__slide rlr-media__image-view">
                  <img class="lazyload" data-src="{{URL::asset($trip->image)}}" alt="media image" />
                </li>
            
              </ul>
            </div>
            <!-- Media pagination counter -->
        
          </div>



        </div>

        
        <!-- Media Thumbnails -->
        <div class="col-md-2 rlr-media">
          <!-- Media sidebar -->
          <div class="splide rlr-media--wrapper rlr-media--sidebar rlr-js-thumbnail-media">
            <!-- Arrows -->
            <div class="splide__arrows">
              <button class="rlr-media__arrow splide__arrow splide__arrow--prev">
                <svg width="10" height="16" viewBox="0 0 10 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M1.889 14.942 8.47 8.36 1.889 1.778" stroke="var(--white)" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
              </button>
              <button class="rlr-media__arrow splide__arrow splide__arrow--next">
                <svg width="10" height="16" viewBox="0 0 10 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M1.889 14.942 8.47 8.36 1.889 1.778" stroke="var(--white)" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
              </button>
            </div>
            <!-- Thumbnails -->
          
          </div>
        </div>



      </aside>
      <!-- Product Detail Sextion -->
      <section class="row rlr-product-detail-section">
        <div class="rlr-product-detail-section__details col-xl-8">
          <!-- Product Detail Header -->
          <div class="rlr-product-detail-header" id="rlr-js-detail-header">
            <div class="rlr-product-detail-header__contents">
              <!-- Breadcrumb -->
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb rlr-breadcrumb__items">
                  <li class="breadcrumb-item rlr-breadcrumb__item"><a href="/">Home</a></li>
                  <li class="breadcrumb-item rlr-breadcrumb__item"><a href="/">Destination</a></li>
                  <li class="breadcrumb-item rlr-breadcrumb__item active" aria-current="page">Tour</li>
                </ol>
              </nav>
              <h1 class="rlr-section__heading--main rlr-product-detail-header__title">{{$trip->name}}</h1>
              <div class="rlr-review-stars" itemscope itemtype="https://schema.org/Product">
                <div class="rlr-review-stars" itemprop="ratingValue" itemscope itemtype="https://schema.org/Product">
                  <i class="rlr-icon-font flaticon-star-1"> </i> <i class="rlr-icon-font flaticon-star-1"> </i> <i class="rlr-icon-font flaticon-star-1"> </i> <i class="rlr-icon-font flaticon-star-1"> </i> <i class="rlr-icon-font flaticon-star"> </i>
                </div>
                <div class="rlr-review-stars__content">
                  <span class="rlr-review-stars__count">6,788</span>
                  <span> مراجعه </span>
                </div>
              </div>
            </div>
            <div class="rlr-product-detail-header__actions">
              <button type="button" data-bs-toggle="popover-share" data-content-id="rlr-js-share-popover" id="rlr-js-share-button" class="btn rlr-button rlr-button--circle rlr-popover-button" aria-label="share">
                <i class="rlr-icon-font flaticon-share-1"></i>
              </button>
              <div id="rlr-js-share-popover" class="rlr-popover--hide">
                <div class="rlr-share">
                  <h3 class="rlr-share__title">شارك مع الاصدقاء</h3>
                  <ul class="rlr-share__items">
                    <li class="rlr-share__list rlr-js--facebook">
                      <a href="#" class="rlr-icon-text rlr-icon-text--anchor rlr-icon-text__block rlr-share__item"> <i class="rlr-icon-font flaticon-facebook"> </i> <span class="rlr-share__title">Facebook </span> </a>
                    </li>
                    <li class="rlr-share__list rlr-js--twitter">
                      <a href="#" class="rlr-icon-text rlr-icon-text--anchor rlr-icon-text__block rlr-share__item"> <i class="rlr-icon-font flaticon-twitter"> </i> <span class="rlr-share__title">Twitter </span> </a>
                    </li>
                   
                    <li class="rlr-share__list rlr-js--whatsapp">
                      <a href="#" class="rlr-icon-text rlr-icon-text--anchor rlr-icon-text__block rlr-share__item"> <i class="rlr-icon-font flaticon-whatsapp"> </i> <span class="rlr-share__title">Whatsapp </span> </a>
                    </li>
                  
                    <li class="rlr-share__list rlr-js--email">
                      <a href="#" class="rlr-icon-text rlr-icon-text--anchor rlr-icon-text__block rlr-share__item"> <i class="rlr-icon-font flaticon-email-1"> </i> <span class="rlr-share__title">Email </span> </a>
                    </li>
                  </ul>
                  <div class="rlr-copylink">
                    <label class="rlr-copylink__title">شارك الرابط</label>
                    <div class="rlr-copylink__wrapper"><input type="text" autocomplete="off" class="form-control rlr-copylink__input" value="join.untitledui.com/project" /> <i class="rlr-icon-font flaticon-copy"> </i></div>
                  </div>
                </div>
              </div>
              <div class="rlr-product-detail-header__button-wrapper">
                <button type="button" class="btn rlr-button rlr-button--circle rlr-wishlist rlr-wishlist-button rlr-js-action-wishlist" aria-label="Save to Wishlist">
                  <i class="rlr-icon-font flaticon-heart-1"> </i>
                </button>
                <span class="rlr-product-detail-header__helptext rlr-js-helptext"></span>
              </div>
            </div>
          </div>
          <!-- Secondary Menu -->
          <nav class="rlr-product-detail-secondary-menu">
            <ul class="rlr-product-detail-secondary-menu__tabitems" id="rlr-js-secondary-menu">
              <li class="rlr-product-detail-secondary-menu__tabitem js-tabitem is-active" id="rlr-product-sec-overview"><span>Overview</span></li>
              <li class="rlr-product-detail-secondary-menu__tabitem js-tabitem" id="rlr-product-sec-itinerary"><span>Itinerary</span></li>
              <li class="rlr-product-detail-secondary-menu__tabitem js-tabitem" id="rlr-product-sec-inclusion"><span>Inclusions</span></li>
              <li class="rlr-product-detail-secondary-menu__tabitem js-tabitem" id="rlr-product-sec-review"><span>Reviews</span></li>
              <li class="rlr-product-detail-secondary-menu__tabitem js-tabitem" id="rlr-product-sec-faq"><span>FAQ</span></li>
              <li class="rlr-product-detail-secondary-menu__tabitem js-tabitem" id="rlr-product-sec-info"><span>Essential Info</span></li>
            </ul>
          </nav>
          <!-- Overview -->
          <div class="rlr-secondary-menu-desc" data-id="rlr-product-sec-overview">
            <div class="rlr-secondary-menu-desc__icon">
              <svg width="41" height="51" viewBox="0 0 41 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M40.327 13.61H28.296c-.334 0-.558-.221-.558-.55l.002-11.852c0-.329.224-.55.558-.55.334 0 .558.221.558.55l-.002 11.304h11.473c.334 0 .558.22.558.55 0 .33-.224.547-.558.547z" fill="#99A3AD" />
                <path
                  d="M36.54 50.707H4.568C2.005 50.707 0 48.73 0 46.207L.002 5.047c0-2.525 2.005-4.5 4.568-4.5h23.728c.11 0 .334.109.445.109L40.885 12.51c.11.11.11.22.11.439v33.255c.113 2.527-1.892 4.503-4.455 4.503zM4.568 1.756c-1.892 0-3.342 1.428-3.342 3.292v41.158c0 1.867 1.56 3.402 3.453 3.402H36.65c1.894 0 3.453-1.537 3.453-3.402l.002-32.926-11.92-11.524H4.567z"
                  fill="#99A3AD"
                />
                <path
                  d="M33.309 19.756h-19.27c-.335 0-.558-.22-.558-.55 0-.329.223-.549.557-.549h19.273c.334 0 .558.22.558.55-.002.329-.226.55-.56.55zM33.309 25.133H7.91c-.334 0-.558-.22-.558-.55 0-.328.224-.549.558-.549h25.399c.334 0 .558.22.558.55 0 .331-.224.55-.558.55zM33.309 30.622H7.91c-.334 0-.558-.22-.558-.55 0-.329.224-.55.558-.55h25.399c.334 0 .558.221.558.55 0 .33-.224.55-.558.55zM33.309 36.11H7.91c-.334 0-.558-.22-.558-.55 0-.329.224-.549.558-.549h25.399c.334 0 .558.22.558.55 0 .329-.224.55-.558.55zM33.309 41.487H7.91c-.334 0-.558-.22-.558-.549 0-.33.224-.55.558-.55h25.399c.334 0 .558.22.558.55 0 .33-.224.55-.558.55z"
                  fill="#99A3AD"
                />
              </svg>
            </div>
            <div class="rlr-secondary-menu-desc__details">
              <div class="rlr-overview-detail">
                <div class="rlr-readmore-desc rlr-overview-detail__description">
                  <p class="rlr-readmore-desc__content rlr-js-desc">
                    {{$trip->trip_details->description}}
                    <p></p>
                  </p>
                  <span class="rlr-readmore-desc__readmore rlr-js-readmore">Show more...</span>
                </div>
                <div class="rlr-overview-detail__icon-groupset">
                  <div class="rlr-overview-detail__icon-group">
                    <span class="rlr-overview-detail__label">تم نشر</span>
                    <div class="rlr-overview-detail__icons">
                      <figure class="rlr-icon-text"><i class="rlr-icon-font flaticon-three-o-clock-clock"> </i> <span class="">{{ $trip->created_at->locale('ar')->diffForHumans() }}</span></figure>
                    </div>
                  </div>
                  <div class="rlr-overview-detail__icon-group">
                    <span class="rlr-overview-detail__label">نوع الحدث</span>
                    <div class="rlr-overview-detail__icons">
                      <figure class="rlr-icon-text"><i class="rlr-icon-font flaticon-beach"> </i> <span class=""> {{$trip->event->name}} </span></figure>
                    </div>
                  </div>
                  <div class="rlr-overview-detail__icon-group">
                    <span class="rlr-overview-detail__label">النوغ</span>
                    <div class="rlr-overview-detail__icons">
                      <figure class="rlr-icon-text"><i class="rlr-icon-font flaticon-icecream-cone"> </i> <span class="">رفاهيه </span></figure>
                    </div>
                  </div>
                  <div class="rlr-overview-detail__icon-group">
                    <span class="rlr-overview-detail__label">حجم الافراد للحدث</span>
                    <div class="rlr-overview-detail__icons">
                      <figure class="rlr-icon-text"><i class="rlr-icon-font flaticon-add-user"> </i> <span class="">8 </span></figure>
                    </div>
                  </div>
                  <div class="rlr-overview-detail__icon-group">
                    <span class="rlr-overview-detail__label">العمر</span>
                    <div class="rlr-overview-detail__icons">
                      <figure class="rlr-icon-text"><i class="rlr-icon-font flaticon-carbon-tall-man"> </i> <span class="">7+ </span></figure>
                    </div>
                  </div>
                  <div class="rlr-overview-detail__icon-group">
                    <span class="rlr-overview-detail__label">المدينه</span>
                    <div class="rlr-overview-detail__icons">
                      <figure class="rlr-icon-text"><i class="rlr-icon-font flaticon-map-marker"> </i> <span class=""> {{$trip->trip_details->city}}</span></figure>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Itinerary -->
         
          <!-- Inclusion and Exclusions -->



          <div class="rlr-secondary-menu-desc" data-id="rlr-product-sec-inclusion">
            <!-- Icon -->
            <div class="rlr-secondary-menu-desc__icon">
              <svg width="50" height="56" viewBox="0 0 50 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M25.0157 0.127686H24.9679C21.6869 0.129864 18.4385 0.787955 15.4081 2.06438C12.3776 3.34081 9.62461 5.21058 7.30612 7.56694C4.98764 9.92329 3.14911 12.7201 1.89553 15.7976C0.641942 18.8752 -0.00215716 22.1732 5.42768e-06 25.5034C0.000252218 25.6667 0.0590139 25.8244 0.165333 25.9469C0.271652 26.0695 0.41827 26.1487 0.577845 26.1696C0.737421 26.1906 0.89906 26.1519 1.03262 26.0609C1.16618 25.9698 1.26255 25.8325 1.30374 25.6746C1.47986 24.998 2.10654 23.0634 2.89022 22.2039C3.99055 21.1594 5.33307 20.6056 6.77668 20.6172C8.20636 20.6136 9.57983 21.182 10.5995 22.1992C11.6258 23.3104 12.1684 24.6663 12.1684 26.1199C12.1684 26.2984 12.2382 26.4695 12.3626 26.5957C12.4869 26.7219 12.6555 26.7928 12.8313 26.7928C13.0071 26.7928 13.1758 26.7219 13.3001 26.5957C13.4244 26.4695 13.4942 26.2984 13.4942 26.1199C13.4942 24.6681 14.035 23.3147 15.058 22.2046C16.1518 21.1661 17.4853 20.6173 18.9187 20.6173C19.6312 20.6115 20.3379 20.7482 20.9984 21.0196C21.6589 21.2911 22.2602 21.6919 22.768 22.1993C23.7943 23.3105 24.3369 24.6665 24.3369 26.1199V44.326C24.3369 45.5699 23.8501 46.7629 22.9835 47.6424C22.1169 48.522 20.9416 49.0162 19.7161 49.0162C18.4905 49.0162 17.3152 48.522 16.4486 47.6424C15.582 46.7629 15.0952 45.5699 15.0952 44.326V42.1116C15.0952 41.9331 15.0253 41.762 14.901 41.6358C14.7767 41.5096 14.6081 41.4387 14.4323 41.4387C14.2565 41.4387 14.0878 41.5096 13.9635 41.6358C13.8392 41.762 13.7694 41.9331 13.7694 42.1116V44.326C13.7694 45.9268 14.3959 47.4621 15.5111 48.594C16.6263 49.7259 18.1389 50.3619 19.7161 50.3619C21.2932 50.3619 22.8058 49.7259 23.921 48.594C25.0362 47.4621 25.6628 45.9268 25.6628 44.326V26.1199C25.6628 24.6679 26.2034 23.3148 27.2265 22.2051C28.3203 21.1667 29.6536 20.6179 31.0872 20.6179H31.1138C32.5435 20.6143 33.917 21.1828 34.9366 22.2C35.9629 23.3111 36.5055 24.6665 36.5055 26.1206C36.5055 26.2991 36.5754 26.4702 36.6997 26.5964C36.824 26.7226 36.9926 26.7935 37.1685 26.7935C37.3443 26.7935 37.5129 26.7226 37.6372 26.5964C37.7615 26.4702 37.8314 26.2991 37.8314 26.1206C37.8314 24.6689 38.372 23.3155 39.3952 22.2052C40.489 21.1667 41.8224 20.618 43.2557 20.618H43.2824C44.7121 20.6144 46.0856 21.1827 47.1053 22.1999C47.8914 23.0567 48.5195 24.9971 48.6963 25.6745C48.7375 25.8324 48.8338 25.9697 48.9674 26.0608C49.101 26.1518 49.2626 26.1905 49.4222 26.1695C49.5818 26.1486 49.7284 26.0694 49.8347 25.9468C49.941 25.8242 49.9998 25.6665 50 25.5032V25.4707C49.9958 18.7479 47.3617 12.3019 42.6767 7.5496C37.9917 2.79732 31.6392 0.127744 25.0157 0.127686ZM48.0616 21.268C48.0558 21.2616 48.0497 21.2553 48.0435 21.2491C46.7765 19.9788 45.0662 19.2682 43.2853 19.272H43.2522C41.4716 19.272 39.8184 19.9522 38.4714 21.239C38.4617 21.2483 38.4522 21.258 38.443 21.2678C37.9254 21.8213 37.4952 22.4528 37.168 23.1398C36.841 22.4529 36.4112 21.8214 35.8938 21.268C35.8878 21.2616 35.8817 21.2552 35.8757 21.2491C34.6086 19.9788 32.8983 19.2682 31.1173 19.272H31.0842C29.3035 19.272 27.6503 19.9522 26.3035 21.239C26.2937 21.2483 26.2843 21.2579 26.2752 21.2677C25.7574 21.8211 25.3272 22.4525 24.9998 23.1395C24.6726 22.4525 24.2425 21.821 23.7248 21.2675C23.7189 21.2611 23.7129 21.2548 23.7067 21.2487C22.4397 19.9784 20.7294 19.2678 18.9485 19.2716H18.9154C17.1347 19.2716 15.4816 19.9517 14.1344 21.2386C14.1247 21.2479 14.1152 21.2575 14.106 21.2674C13.5885 21.8209 13.1586 22.4525 12.8314 23.1395C12.5042 22.4524 12.0741 21.821 11.5564 21.2675C11.5505 21.2611 11.5445 21.2548 11.5383 21.2487C10.2714 19.9785 8.56139 19.2678 6.78066 19.2715H6.74751C4.9668 19.2715 3.3136 19.9516 1.96655 21.2385C1.95683 21.2478 1.94733 21.2574 1.93816 21.2674C1.82613 21.3891 1.72132 21.5174 1.62426 21.6517C2.52389 16.0239 5.36592 10.9042 9.64244 7.20767C13.9189 3.51112 19.3512 1.47861 24.9683 1.47341H24.9998C25.0051 1.47273 25.0105 1.47273 25.0157 1.47341C30.6357 1.47473 36.0719 3.50557 40.3517 7.20259C44.6315 10.8996 47.4758 16.0216 48.3756 21.6523C48.2785 21.518 48.1737 21.3896 48.0616 21.268Z"
                  fill="#99A3AD"
                />
                <path
                  d="M49.6287 34.0793L39.8939 29.2311C39.8032 29.1859 39.7034 29.1624 39.6023 29.1624C39.5011 29.1624 39.4014 29.1859 39.3106 29.2311L29.5758 34.0655C29.4644 34.1209 29.3705 34.2069 29.3048 34.3137C29.2391 34.4206 29.2043 34.544 29.2043 34.67V43.919C29.2043 44.9461 29.4805 46.0925 30.0031 47.2341C30.6726 48.6962 31.6698 49.9592 32.739 50.6977L39.2287 55.1857C39.3387 55.2618 39.4688 55.3025 39.6019 55.3025C39.7351 55.3025 39.8651 55.2618 39.9751 55.1857L46.465 50.6976C48.447 49.3275 49.9997 46.3499 49.9997 43.9189V34.6834C49.9997 34.5576 49.9649 34.4343 49.8993 34.3275C49.8337 34.2207 49.74 34.1347 49.6287 34.0793ZM48.6738 43.9187C48.6738 45.8829 47.3205 48.4779 45.7186 49.5853L39.6019 53.8151L33.4852 49.5853C32.6078 48.9787 31.777 47.915 31.2054 46.6666C30.7699 45.7153 30.53 44.7394 30.53 43.9191V35.0895L39.6009 30.5845L48.6733 35.1027L48.6738 43.9187Z"
                  fill="#99A3AD"
                />
                <path
                  d="M35.9457 41.4619C35.8196 41.3385 35.6505 41.2707 35.4754 41.2734C35.3002 41.2761 35.1332 41.349 35.0109 41.4763C34.8885 41.6036 34.8208 41.7749 34.8225 41.9527C34.8242 42.1305 34.8952 42.3004 35.0199 42.4253L37.9605 45.3362C38.0844 45.4587 38.2505 45.5274 38.4234 45.5274C38.5964 45.5274 38.7625 45.4587 38.8863 45.3362L44.1839 40.0917C44.3086 39.9668 44.3796 39.7969 44.3813 39.6191C44.383 39.4413 44.3153 39.27 44.193 39.1427C44.0706 39.0154 43.9036 38.9425 43.7285 38.9398C43.5533 38.9371 43.3842 39.0049 43.2581 39.1284L38.4239 43.9146L35.9457 41.4619Z"
                  fill="#99A3AD"
                />
              </svg>
            </div>
            <!-- Overview -->
            <div class="rlr-secondary-menu-desc__details">
             
              <ul class="list-group list-group-flush rlr-secondary-menu-desc__list-group">
                <!-- Inclusions -->
                @foreach ($trip->features as $item)
                <li class="rlr-icon-text rlr-secondary-menu-desc__list"><i class="rlr-icon-font flaticon-check-rounded"> </i> <span class="rlr-icon-text__text">{{$item->name}}</span></li>

                @endforeach
             
              </ul>
            </div>
            <p></p>
          </div>

          <p></p>


          <!-- Reviews -->
      
          <!-- FAQ-->
    
        </div>
        <!-- Booking Form -->
        <aside class="col-xl-4 col-xxxl-3 d-xl-block offset-xxxl-1 mt-5 mt-lg-0">
          <form class="rlr-booking-card">
            <fieldset class="rlr-fieldrow">
              <legend class="rlr-booking-card__legend--hide">Booking form</legend>
              <article itemscope itemtype="https://schema.org/Offer" class="rlr-booking-card__price-details rlr-fieldrow__form-element">
                <span class="rlr-booking-card__total-price">اجمالي السعر</span>
                <header class="rlr-booking-card__offer">
                  <h2 class="rlr-booking-card__price" itemscope itemtype="https://schema.org/AggregateOffer">
                    <span class="rlr-booking-card__current-price rlr-booking-card--currency" itemprop="priceCurrency">AED : </span>
                    <span itemprop="lowPrice" class="rlr-booking-card__current-price rlr-booking-card--low-price">{{$trip->price}}</span>
                  </h2>
                  <svg width="56" height="57" viewBox="0 0 56 57" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#a)">
                      <rect y=".411" width="56" height="56" rx="28" fill="#28B0A6" />
                      <path d="M24.253 40.365a1.629 1.629 0 0 1-2.31 0l-9.225-9.226a2.45 2.45 0 0 1 0-3.466l1.155-1.155a2.45 2.45 0 0 1 3.466 0l5.76 5.76L38.66 16.715a2.45 2.45 0 0 1 3.466 0l1.155 1.155a2.45 2.45 0 0 1 0 3.465l-19.029 19.03z" fill="#fff" />
                    </g>
                    <defs>
                      <clipPath id="a">
                        <path fill="#fff" transform="translate(0 .411)" d="M0 0h56v56H0z" />
                      </clipPath>
                    </defs>
                  </svg>
                </header>
                <span class="rlr-booking-card__info">*Price based on selections bellow.</span>
              </article>
              <div class="rlr-fieldrow__item rlr-booking-card__form-item">
                <label class="rlr-form-label rlr-form-label--dark rlr-booking-card__label" for="rlr-booking-dateranges-input"> Dates </label>
                <div class="rlr-input-group rlr-input-group__datefield rlr-js-booking-form-daterange" id="rlr-booking-startRange">
                  <input type="text" autocomplete="off" id="rlr-booking-dateranges-input" class="form-control form-input" placeholder="Select preferred dates" />
                </div>
              </div>
              <div class="rlr-fieldrow__item rlr-booking-card__form-item">
                <label class="rlr-form-label rlr-form-label--dark rlr-booking-card__label" for="rlr-booking-travellers-input"> Travellers </label>
                <div class="rlr-input-group" data-bs-toggle="popover-booking" data-content-id="rlr-js-booking-travellers" id="rlr-js-booking-travellers-button">
                  <input type="button" value="1 Adult" id="rlr-booking-travellers-input" class="form-control form-input rlr-popover-button" />
                  <div class="rlr-input-group__iconset--absolute">
                    <span class="rlr-booking-card__counter rlr-js-counter">1</span>
                  </div>
                </div>
                <div id="rlr-js-booking-travellers" class="rlr-popover--hide">
                  <div id="rlr-js-booking-travellers-bookingform" data-name="booking-form">
                    <div class="rlr-popover__header">
                      <label class="rlr-form-label rlr-form-label--dark"> Travellers </label>
                      <button type="button" class="btn rlr-button rlr-js-booking-close rlr-button--transparent">
                        <i class="rlr-icon-font flaticon-check-mark"> </i>
                      </button>
                    </div>
                    <div class="rlr-popover-wrapper rlr-popover--travellers">
                      <div class="rlr-input-groups">
                        <div class="rlr-input-group rlr-input-group__numberfield rlr-custom-input--numberfield rlr-popover__numberfield">
                          <label class="rlr-form-label rlr-form-label--light"> Adult </label>
                          <div class="rlr-input-group__iconset rlr-js-input-group__iconset">
                            <button type="button" tabindex="0" aria-label="decrease quantity" class="rlr-input-group__button"></button>
                            <input type="number" autocomplete="off" id="rlr-popover-numberfield-adult" class="form-control form-input rlr-booking-card__counter rlr-js-input-counter" placeholder="0" data-name="Adults" />
                            <button type="button" tabindex="0" aria-label="increase quantity" class="rlr-input-group__button"></button>
                          </div>
                        </div>
                        <div class="rlr-input-group rlr-input-group__numberfield rlr-custom-input--numberfield rlr-popover__numberfield">
                          <label class="rlr-form-label rlr-form-label--light"> Children </label>
                          <div class="rlr-input-group__iconset rlr-js-input-group__iconset">
                            <button type="button" tabindex="0" aria-label="decrease quantity" class="rlr-input-group__button"></button>
                            <input type="number" autocomplete="off" id="rlr-popover-numberfield-child" class="form-control form-input rlr-booking-card__counter rlr-js-input-counter" placeholder="0" data-name="Child" />
                            <button type="button" tabindex="0" aria-label="increase quantity" class="rlr-input-group__button"></button>
                          </div>
                        </div>
                        <div class="rlr-input-group rlr-input-group__numberfield rlr-custom-input--numberfield rlr-popover__numberfield">
                          <label class="rlr-form-label rlr-form-label--light"> Infants </label>
                          <div class="rlr-input-group__iconset rlr-js-input-group__iconset">
                            <button type="button" tabindex="0" aria-label="decrease quantity" class="rlr-input-group__button"></button>
                            <input type="number" autocomplete="off" id="rlr-popover-numberfield-infant" class="form-control form-input rlr-booking-card__counter rlr-js-input-counter" placeholder="0" data-name="Infant" />
                            <button type="button" tabindex="0" aria-label="increase quantity" class="rlr-input-group__button"></button>
                          </div>
                        </div>
                        <div class="rlr-input-group rlr-input-group__numberfield rlr-custom-input--numberfield rlr-popover__numberfield">
                          <label class="rlr-form-label rlr-form-label--light"> Seniors </label>
                          <div class="rlr-input-group__iconset rlr-js-input-group__iconset">
                            <button type="button" tabindex="0" aria-label="decrease quantity" class="rlr-input-group__button"></button>
                            <input type="number" autocomplete="off" id="rlr-popover-numberfield-senior" class="form-control form-input rlr-booking-card__counter rlr-js-input-counter" placeholder="0" data-name="Senior" />
                            <button type="button" tabindex="0" aria-label="increase quantity" class="rlr-input-group__button"></button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="rlr-fieldrow__item rlr-booking-card__form-item">
                <label class="rlr-form-label rlr-form-label--dark rlr-booking-card__label" for="rlr-booking-selection-input"> Selections </label>
                <div class="rlr-input-group" data-bs-toggle="popover-booking" data-content-id="rlr-js-booking-selection" id="rlr-js-booking-selection-button">
                  <input type="text" id="rlr-booking-selection-input" autocomplete="off" class="form-control form-input rlr-popover-button" placeholder="Flight, hotel, car etc." />
                  <div class="rlr-input-group__iconset--absolute">
                    <span class="rlr-svg-icon">
                      <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 .017A11.983 11.983 0 1 0 23.984 12 11.997 11.997 0 0 0 12.002.017zm0 21.787A9.804 9.804 0 1 1 21.806 12 9.816 9.816 0 0 1 12 21.804z" fill="#99A3AD" />
                        <path d="M17.446 10.91h-4.358V6.554a1.09 1.09 0 1 0-2.178 0v4.358H6.552a1.09 1.09 0 1 0 0 2.178h4.358v4.358a1.09 1.09 0 1 0 2.178 0v-4.358h4.358a1.09 1.09 0 0 0 0-2.178z" fill="#99A3AD" />
                      </svg>
                    </span>
                  </div>
                </div>
                <div id="rlr-js-booking-selection" class="rlr-popover--hide">
                  <div id="rlr-js-booking-selection-bookingform" data-name="booking-form">
                    <div class="rlr-popover__header">
                      <label class="rlr-form-label rlr-form-label--light"> Selections </label>
                      <button type="button" class="btn rlr-button rlr-js-booking-close rlr-button--transparent">
                        <i class="rlr-icon-font flaticon-check-mark"> </i>
                      </button>
                    </div>
                    <div class="rlr-popover__wrapper">
                      <ul class="rlr-checkboxes">
                        <li class="form-check form-check-block rlr-popover__checkbox-wrapper">
                          <div class="rlr-popover__checkbox">
                            <input class="form-check-input rlr-form-check-input" id="rlr-booking-single-room" type="checkbox" value="Single Room" /> <label class="rlr-form-label rlr-form-label--checkbox" for="rlr-booking-single-room"> Single Room </label>
                          </div>
                          <span class="rlr-popover__price">$110.00</span>
                        </li>
                        <li class="form-check form-check-block rlr-popover__checkbox-wrapper">
                          <div class="rlr-popover__checkbox">
                            <input class="form-check-input rlr-form-check-input" id="rlr-booking-deluxe-room" type="checkbox" value="Deluxe Room" /> <label class="rlr-form-label rlr-form-label--checkbox" for="rlr-booking-deluxe-room"> Deluxe Room </label>
                          </div>
                          <span class="rlr-popover__price">$200.00</span>
                        </li>
                        <li class="form-check form-check-block rlr-popover__checkbox-wrapper">
                          <div class="rlr-popover__checkbox">
                            <input class="form-check-input rlr-form-check-input" id="rlr-airport-pickup" type="checkbox" value="Airport Pickup" /> <label class="rlr-form-label rlr-form-label--checkbox" for="rlr-airport-pickup"> Airport Pickup </label>
                          </div>
                          <span class="rlr-popover__price">$120.00</span>
                        </li>
                        <li class="form-check form-check-block rlr-popover__checkbox-wrapper">
                          <div class="rlr-popover__checkbox"><input class="form-check-input rlr-form-check-input" id="rlr-breakfast" type="checkbox" value="Breakfast" /> <label class="rlr-form-label rlr-form-label--checkbox" for="rlr-breakfast"> Breakfast </label></div>
                          <span class="rlr-popover__price">$140.00</span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </fieldset>
            <fieldset class="rlr-booking-card__results rlr-booking-card__results--found">
              <ul class="rlr-booking-card__result-list">
                <li class="rlr-icon-text">
                  <i class="rlr-icon-font flaticon-three-o-clock-clock"> </i>
                  <div class="rlr-icon-text__text-wrapper">
                    <span class="">10:00 AM </span>
                    <span class="rlr-icon-text__subtext">Starting Time</span>
                  </div>
                </li>
              </ul>
              <div class="rlr-icon-text rlr-booking-card__message">
                <i class="rlr-icon-font flaticon-carbon-result"> </i>
                <div class="rlr-icon-text__text-wrapper">
                  <span class="">Instant confirmation </span>
                  <span class="rlr-icon-text__subtext">Once you confirm booking, you&#x27;ll receive details to print.</span>
                </div>
              </div>
            </fieldset>
            <a href="./checkout-page.html" class="btn rlr-button rlr-booking-card__button"> Proceed to Booking </a>
          </form>
        </aside>
      </section>
      <!-- Similar Products -->
      <section class="rlr-section rlr-section__mt rlr-related-product-wrapper">
        <!-- Section heading -->
        <div class="rlr-section-header">
          <!-- Section heading -->
          <div class="rlr-section__title">
            <h2 class="rlr-section__title--main">Similar Product</h2>
            <span class="rlr-section__title--sub">Sost Brilliant reasons 77trips should be your one-stop-shop!</span>
          </div>
          <div class="button-row">
            <a href="./search-results--left-sidebar.html" class="btn rlr-button rlr-button--large rlr-button--rounded rlr-button--brand"> Check All </a>
          </div>
        </div>
        <div class="row rlr-featured__cards">
          <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-offset="250" data-aos-duration="700">
            <!-- Featured prodcut card -->
            <article class="rlr-product-card rlr-product-card--featured" itemscope itemtype="https://schema.org/Product">
              <!-- Image -->
              <figure class="rlr-product-card__image-wrapper">
                <img itemprop="image" data-src="./assets/images/product-images/small/featured-thumb-01.jpg" data-srcset="./assets/images/product-images/small/featured-thumb-01.jpg" data-sizes="auto" class="lazyload" alt="" />
              </figure>
              <!-- Card body -->
              <div class="rlr-product-card--featured__inner">
                <span class="rlr-badge rlr-badge--right rlr-badge-- rlr-badge--abs rlr-badge--abs-right"> 4.9 </span>
                <div class="rlr-product-card--featured__body card-img-overlay">
                  <div class="rlr-product-card--featured__duration">
                    <p class="body">10 Days | 09 Nights</p>
                    <h4 class="type-h4">$895.50</h4>
                  </div>
                  <div class="rlr-product-detail-header__actions">
                    <div class="rlr-product-detail-header__button-wrapper">
                      <button type="button" class="btn rlr-button rlr-button--circle rlr-wishlist rlr-wishlist-button--no-bg rlr-wishlist-button rlr-js-action-wishlist" aria-label="Save to Wishlist">
                        <i class="rlr-icon-font flaticon-heart-1"> </i>
                      </button>
                      <span class="rlr-product-detail-header__helptext rlr-js-helptext"></span>
                    </div>
                    <a href="./product-detail-page.html" class="btn rlr-button product-card-buttonrlr-button--medium rlr-button--rounded rlr-button--brand"> Explore </a>
                  </div>
                </div>
              </div>
              <a href="./product-detail-page.html" class="rlr-product-card__anchor rlr-product-card__anchor--featured"></a>
            </article>
            <!-- Summary -->
            <div class="rlr-product-card--featured__summary">
              <h4 class="type-h6-semi-bold">Train Tour Skyline</h4>
              <p class="type-body">Check Out Daily Deals and Promotion on Hotels. Easy &amp; Fast Booking</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-offset="300" data-aos-duration="725">
            <!-- Featured prodcut card -->
            <article class="rlr-product-card rlr-product-card--featured" itemscope itemtype="https://schema.org/Product">
              <!-- Image -->
              <figure class="rlr-product-card__image-wrapper">
                <img itemprop="image" data-src="./assets/images/product-images/small/featured-thumb-02.jpg" data-srcset="./assets/images/product-images/small/featured-thumb-02.jpg" data-sizes="auto" class="lazyload" alt="" />
              </figure>
              <!-- Card body -->
              <div class="rlr-product-card--featured__inner">
                <span class="rlr-badge rlr-badge--right rlr-badge-- rlr-badge--abs rlr-badge--abs-right"> 4.9 </span>
                <div class="rlr-product-card--featured__body card-img-overlay">
                  <div class="rlr-product-card--featured__duration">
                    <p class="body">10 Days | 09 Nights</p>
                    <h4 class="type-h4">$895.50</h4>
                  </div>
                  <div class="rlr-product-detail-header__actions">
                    <div class="rlr-product-detail-header__button-wrapper">
                      <button type="button" class="btn rlr-button rlr-button--circle rlr-wishlist rlr-wishlist-button--no-bg rlr-wishlist-button rlr-js-action-wishlist" aria-label="Save to Wishlist">
                        <i class="rlr-icon-font flaticon-heart-1"> </i>
                      </button>
                      <span class="rlr-product-detail-header__helptext rlr-js-helptext"></span>
                    </div>
                    <a href="./product-detail-page.html" class="btn rlr-button product-card-buttonrlr-button--medium rlr-button--rounded rlr-button--brand"> Explore </a>
                  </div>
                </div>
              </div>
              <a href="./product-detail-page.html" class="rlr-product-card__anchor rlr-product-card__anchor--featured"></a>
            </article>
            <!-- Summary -->
            <div class="rlr-product-card--featured__summary">
              <h4 class="type-h6-semi-bold">Train Tour Skyline</h4>
              <p class="type-body">Check Out Daily Deals and Promotion on Hotels. Easy &amp; Fast Booking</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-offset="350" data-aos-duration="750">
            <!-- Featured prodcut card -->
            <article class="rlr-product-card rlr-product-card--featured" itemscope itemtype="https://schema.org/Product">
              <!-- Image -->
              <figure class="rlr-product-card__image-wrapper">
                <img itemprop="image" data-src="./assets/images/product-images/small/featured-thumb-03.jpg" data-srcset="./assets/images/product-images/small/featured-thumb-03.jpg" data-sizes="auto" class="lazyload" alt="" />
              </figure>
              <!-- Card body -->
              <div class="rlr-product-card--featured__inner">
                <span class="rlr-badge rlr-badge--right rlr-badge-- rlr-badge--abs rlr-badge--abs-right"> 4.9 </span>
                <div class="rlr-product-card--featured__body card-img-overlay">
                  <div class="rlr-product-card--featured__duration">
                    <p class="body">10 Days | 09 Nights</p>
                    <h4 class="type-h4">$895.50</h4>
                  </div>
                  <div class="rlr-product-detail-header__actions">
                    <div class="rlr-product-detail-header__button-wrapper">
                      <button type="button" class="btn rlr-button rlr-button--circle rlr-wishlist rlr-wishlist-button--no-bg rlr-wishlist-button rlr-js-action-wishlist" aria-label="Save to Wishlist">
                        <i class="rlr-icon-font flaticon-heart-1"> </i>
                      </button>
                      <span class="rlr-product-detail-header__helptext rlr-js-helptext"></span>
                    </div>
                    <a href="./product-detail-page.html" class="btn rlr-button product-card-buttonrlr-button--medium rlr-button--rounded rlr-button--brand"> Explore </a>
                  </div>
                </div>
              </div>
              <a href="./product-detail-page.html" class="rlr-product-card__anchor rlr-product-card__anchor--featured"></a>
            </article>
            <!-- Summary -->
            <div class="rlr-product-card--featured__summary">
              <h4 class="type-h6-semi-bold">Train Tour Skyline</h4>
              <p class="type-body">Check Out Daily Deals and Promotion on Hotels. Easy &amp; Fast Booking</p>
            </div>
          </div>
        </div>
      </section>
    </div>
  </main>
@endsection



@section('js')

@endsection 