@extends('layouts.master_web')



@section('css')

@section('title')
    الصفحه الرئيسيه
@stop

@endsection





@section('content')
<div class="outter">
    <div id="rlr_banner_slider" class="splide rlr-banner-splide rlr-banner-splide--fullwidth-v2">
        <div class="splide__track rlr-banner-splide__track">
            <ul class="splide__list">
                <!-- Banner slide 1 -->
                <li class="splide__slide rlr-banner-splide__slide">
                    <div class="rlr-banner-splide__image-wrapper">
                        <img class="rlr-banner-splide__banner-img" src="{{ URL::asset('assets/img/back2.png') }}"
                            alt="#">
                    </div>
                    <article class="rlr-banner-splide__content-wrapper container">
                        <div class="row justify-content-center">
                            <div class="col-xl-9">
                                <header class="rlr-banner-splide__header">
                                    <h2 class="rlr-banner-splide__slogan">استكشف العالم الغريب..</h2> <span
                                        class="rlr-banner-splide__sub-title">جولات المدينة التي صنعت لماركو بولو في
                                        داخلك</span>
                                </header>
                            </div>
                        </div>
                        <div class="row justify-content-md-center">
                            <div class="col-xxl-10">
                                <!-- Search banner -->
                                <form class="rlr-banner-search rlr-banner-search--rounded" action="{{ route('alltrip') }}">
                                    <div class="rlr-banner-search__input-wrapper">
                                        <!-- Destination -->
                                        <div
                                            class="rlr-banner-input-group rlr-banner-input-group rlr-banner-input-group--home-search rlr-js-autocomplete-demo rlr-banner-search__banner-input
                                            rlr-js-search-layout-wrapper">
                                            <label class="rlr-banner-input-group__label" for="destination_input">
                                                <mark>المكان</mark>
                                            </label>
                                            <div class="rlr-banner-input-group__input-wrapper">
                                                <input  name="location" type='text'
                                                    autocomplete="off"
                                                    class="rlr-banner-input-group__input destination_input"
                                                    placeholder="أدخل وجهتك">
                                                
                                              
                                            </div>
                                        </div> <!-- Activity -->
                                        <div
                                            class="rlr-banner-input-group rlr-js-autocomplete-activity-demo rlr-banner-search__banner-input rlr-js-search-layout-wrapper">
                                            <label class="rlr-banner-input-group__label"
                                                for="rlr-banner-input-group-activity">
                                                <mark>النشاط</mark>
                                            </label>
                                            <div class="rlr-banner-input-group__input-wrapper">
                                                <input  name="activity"
                                                    type='text' autocomplete="off"
                                                    class="rlr-banner-input-group__input activity_autocomplete"
                                                    placeholder="القفز بالمنطاد">
                                                <i class="rlr-icon-font  flaticon-outline-down ">

                                                </i>
                                             
                                            </div>
                                        </div> <!-- Date -->
                                        <div
                                            class="rlr-banner-input-group rlr-banner-search__banner-input rlr-js-search-layout-wrapper">
                                            <label class="rlr-banner-input-group__label"
                                                for="rlr-banner-input-group-dates">
                                                <mark>الموعد</mark>
                                            </label>
                                            <div class="rlr-banner-input-group__input-wrapper">
                                                <input id="rlr-banner-input-group-dates" type='text'
                                                    autocomplete="off"
                                                    class="rlr-banner-input-group__input eee_home_search_flatpickr"
                                                    placeholder="حدد التواريخ">
                                                <i class="rlr-icon-font  flaticon-calendar ">

                                                </i>
                                                <ul id="home_date_results"
                                                    class="rlr-banner-input-group--date-dropdown rlr-autocomplete">
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <button class="rlr-banner-search__submit-button"  href="{{ route('alltrip') }}" aria-label="banner submit">
                                        <i class="rlr-icon-font flaticon-search">

                                        </i> </button>
                                </form>

                            </div>
                        </div>
                       
                    </article>
                </li>
            </ul>
        </div>
    </div>
</div>


























<!-- Product Carousel -->
<section class="rlr-section rlr-section__my">
    <div class="container">
        <!-- Swiper -->
        <div class="rlr-carousel__items">
            <div class="swiper rlr-js-product-card-swiper" dir="rtl">
                <!-- Carousel header -->
                <div class="rlr-section-header">
                    <!-- Section heading -->
                    <div class="rlr-section__title">
                        <h2 class="rlr-section__title--main text-end">مغامرات</h2> <span
                            class="rlr-section__title--sub">بعض الأسباب الرائعة يجب أن يكون 77trips متجرك الوحيد!</span>
                    </div>
                    <div class="button-row">

                        <button type="button" class="btn rlr-button button button--next rlr-button--carousel"
                            aria-label="Next">
                            <i class="rlr-icon-font  flaticon-chevron ">

                            </i></button>
                        <div class="button-group button-group--cells">
                            <button class="button is-selected">1</button>
                            <button class="button">2</button>
                        </div>
                        <button type="button" class="btn rlr-button button button--previous rlr-button--carousel"
                            aria-label="Previous">
                            <i class="rlr-icon-font  flaticon-left-chevron ">

                            </i></button>
                    </div>
                </div>
                <div class="swiper-wrapper">


                    @foreach ($tripAdvun as $item)
                        <div class="swiper-slide">
                            @include('layouts.product', ['item' => $item])
                        </div>
                    @endforeach






                </div>
            </div>
        </div>
    </div>
</section>








<!-- Category Carousel -->
<section class="rlr-section rlr-section__my">
    <div class="container">
        <!-- Swiper -->
        <div class="rlr-carousel__items">
            <div class="swiper rlr-js-category-card-swiper" dir="rtl">
                <!-- Carousel header -->
                <div class="rlr-section-header">
                    <!-- Section heading -->
                    <div class="rlr-section__title">
                        <h2 class="rlr-section__title--main text-end">اختار حدث</h2> <span
                            class="rlr-section__title--sub">بعض الأسباب الرائعة يجب أن يكون 77trips متجرك
                            الوحيد!</span>
                    </div>
                    <div class="button-row">

                        <button type="button" class="btn rlr-button button button--next rlr-button--carousel"
                            aria-label="Next">
                            <i class="rlr-icon-font  flaticon-chevron ">

                            </i></button>
                        <div class="button-group button-group--cells">
                            <button class="button is-selected">1</button>
                            <button class="button">2</button>
                        </div>
                        <button type="button" class="btn rlr-button button button--previous rlr-button--carousel"
                            aria-label="Previous">
                            <i class="rlr-icon-font  flaticon-left-chevron ">

                            </i></button>
                    </div>
                </div>
                <div class="swiper-wrapper">


                    @foreach ($event as $item)
                        <div class="swiper-slide" data-aos="fade-up" data-aos-duration="700" data-aos-once="true">
                            <!-- Category card item -->
                            <article class="rlr-category-card">
                                <div class="rlr-category-card__badge">
                                    <span class="rlr-badge rlr-badge--right rlr-badge--">
                                        4.2
                                    </span>
                                </div>
                                <div class="rlr-category-card__icon">
                                    <i class="rlr-icon-font  flaticon-jungle ">

                                    </i>
                                </div>
                                <header>
                                    <a href="{{ route('alltrip.Type', $item->id) }}" class="rlr-category-card__title">
                                        <h4>{{ $item->name }}</h4>
                                    </a>
                                    <a href="{{ route('alltrip.Type', $item->id) }}"
                                        class="rlr-category-card__sub-title">
                                        <span>712 نشاط</span>
                                    </a>
                                </header>
                            </article>
                        </div>
                    @endforeach


                </div>
            </div>
        </div>
    </div>
</section>




<!-- Destination Masonary Grid -->
<section class="rlr-section rlr-section__mb">
    <div class="container">
        <!-- Section heading -->
        <div class="rlr-section__title text-end">
            <h2 class="rlr-section__title--main">افضل المدن</h2>
            <span class="rlr-section__title--sub">بعض الأسباب الرائعة يجب أن يكون 77trips متجرك الوحيد!</span>
        </div>
        <div class="rlr-masonary-grid__container" dir="rtl">
            <div class="rlr-masonary-grid__one">
                <!-- Destination card -->
                <a class="rlr-destination-card" href="{{ route('alltrip') }}">
                    <img data-sizes="auto" data-src="{{ URL::asset('assets/catogery/1.png') }}"
                        data-srcset="./assets/images/dest/01@2x.jpg 2x" class="rlr-destination-card__img lazyload"
                        alt="...">
                    <span
                        class="rlr-badge rlr-badge--left rlr-badge--
                      rlr-badge--abs rlr-badge--abs-dest">
                        200+
                    </span>
                    <div
                        class="rlr-destination-card__info rlr-destination-card__info--left rlr-destination-card__info--bottom">
                        <h2 class="rlr-destination-card__info--main">عجمان </h2>
                    </div>
                </a>
            </div>
            <div class="rlr-masonary-grid__two">
                <!-- Destination card -->
                <a class="rlr-destination-card" href="{{ route('alltrip') }}">
                    <img data-sizes="auto" data-src="{{ URL::asset('assets/catogery/2.png') }}"
                        data-srcset="./assets/images/dest/02@2x.jpg 2x" class="rlr-destination-card__img lazyload"
                        alt="...">
                    <span
                        class="rlr-badge rlr-badge--left rlr-badge--
                      rlr-badge--abs rlr-badge--abs-dest">
                        320 Tours
                    </span>
                    <div
                        class="rlr-destination-card__info rlr-destination-card__info--left rlr-destination-card__info--bottom">
                        <h2 class="rlr-destination-card__info--main">ابوظبي </h2>
                    </div>
                </a>
            </div>
            <div class="rlr-masonary-grid__three">
                <!-- Destination card -->
                <a class="rlr-destination-card" href="{{ route('alltrip') }}">
                    <img data-sizes="auto" data-src="{{ URL::asset('assets/catogery/3.png') }}"
                        data-srcset="./assets/images/dest/03@2x.jpg 2x" class="rlr-destination-card__img lazyload"
                        alt="...">
                    <span
                        class="rlr-badge rlr-badge--left rlr-badge--
                      rlr-badge--abs rlr-badge--abs-dest">
                        58 Tours
                    </span>
                    <div
                        class="rlr-destination-card__info rlr-destination-card__info--left rlr-destination-card__info--bottom">
                        <h2 class="rlr-destination-card__info--main">دبي </h2>
                    </div>
                </a>
            </div>
            <div class="rlr-masonary-grid__four">
                <!-- Destination card -->
                <a class="rlr-destination-card" href="{{ route('alltrip') }}">
                    <img data-sizes="auto" data-src="{{ URL::asset('assets/catogery/4.png') }}"
                        data-srcset="./assets/images/dest/04@2x.jpg 2x" class="rlr-destination-card__img lazyload"
                        alt="...">
                    <span
                        class="rlr-badge rlr-badge--left rlr-badge--
                      rlr-badge--abs rlr-badge--abs-dest">
                        406 Tours
                    </span>
                    <div
                        class="rlr-destination-card__info rlr-destination-card__info--left rlr-destination-card__info--bottom">
                        <h2 class="rlr-destination-card__info--main">الشارقه </h2>
                    </div>
                </a>
            </div>
            <div class="rlr-masonary-grid__five">
                <!-- Destination card -->
                <a class="rlr-destination-card" href="{{ route('alltrip') }}">
                    <img data-sizes="auto" data-src="{{ URL::asset('assets/catogery/5.png') }}"
                        data-srcset="./assets/images/dest/05@2x.jpg 2x" class="rlr-destination-card__img lazyload"
                        alt="...">
                    <span
                        class="rlr-badge rlr-badge--left rlr-badge--
                      rlr-badge--abs rlr-badge--abs-dest">
                        37 Tours
                    </span>
                    <div
                        class="rlr-destination-card__info rlr-destination-card__info--left rlr-destination-card__info--bottom">
                        <h2 class="rlr-destination-card__info--main">العين </h2>
                    </div>
                </a>
            </div>
            <div class="rlr-masonary-grid__six">
                <!-- Destination card -->
                <a class="rlr-destination-card" href="{{ route('alltrip') }}">
                    <img data-sizes="auto" data-src="{{ URL::asset('assets/catogery/4.png') }}"
                        data-srcset="./assets/images/dest/06@2x.jpg 2x" class="rlr-destination-card__img lazyload"
                        alt="...">
                    <span
                        class="rlr-badge rlr-badge--left rlr-badge--
                      rlr-badge--abs rlr-badge--abs-dest">
                        74 Tours
                    </span>
                    <div
                        class="rlr-destination-card__info rlr-destination-card__info--left rlr-destination-card__info--bottom">
                        <h2 class="rlr-destination-card__info--main">الرويس </h2>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Product Carousel -->
<section class="rlr-section rlr-section__my">
    <div class="container">
        <!-- Swiper -->
        <div class="rlr-carousel__items">
            <div class="swiper rlr-js-product-card-swiper" dir="rtl">
                <!-- Carousel header -->
                <div class="rlr-section-header">
                    <!-- Section heading -->
                    <div class="rlr-section__title">
                        <h2 class="rlr-section__title--main text-end">رحلات</h2>
                        <span class="rlr-section__title--sub">بعض الأسباب الرائعة يجب أن يكون 77trips متجرك
                            الوحيد!</span>
                    </div>
                    <div class="button-row">
                        <button type="button" class="btn rlr-button button button--next rlr-button--carousel"
                            aria-label="Next">
                            <i class="rlr-icon-font  flaticon-chevron ">

                            </i></button>
                        <div class="button-group button-group--cells">
                            <button class="button is-selected">1</button>
                            <button class="button">2</button>
                        </div>
                        <button type="button" class="btn rlr-button button button--previous rlr-button--carousel"
                            aria-label="Previous">
                            <i class="rlr-icon-font  flaticon-left-chevron ">

                            </i></button>
                    </div>
                </div>
                <div class="swiper-wrapper">


                    @foreach ($tripship as $item)
                        <div class="swiper-slide">
                            @include('layouts.product', ['item' => $item])
                        </div>
                    @endforeach






                </div>
            </div>
        </div>
    </div>
</section>








<section class="rlr-section rlr-section__my">
    <div class="container">
        <!-- Swiper -->
        <div class="rlr-carousel__items">
            <div class="swiper rlr-js-product-card-swiper" dir="rtl">
                <!-- Carousel header -->
                <div class="rlr-section-header">
                    <!-- Section heading -->
                    <div class="rlr-section__title">
                        <h2 class="rlr-section__title--main text-end">ايجار مركبات</h2>
                        <span class="rlr-section__title--sub">بعض الأسباب الرائعة يجب أن يكون 77trips متجرك
                            الوحيد!</span>
                    </div>
                    <div class="button-row">
                        <button type="button" class="btn rlr-button button button--next rlr-button--carousel"
                            aria-label="Next">
                            <i class="rlr-icon-font  flaticon-chevron ">

                            </i></button>
                        <div class="button-group button-group--cells">
                            <button class="button is-selected">1</button>
                            <button class="button">2</button>
                        </div>
                        <button type="button" class="btn rlr-button button button--previous rlr-button--carousel"
                            aria-label="Previous">
                            <i class="rlr-icon-font  flaticon-left-chevron ">

                            </i></button>
                    </div>
                </div>
                <div class="swiper-wrapper">


                    @foreach ($tripcar as $item)
                        <div class="swiper-slide">
                            @include('layouts.product', ['item' => $item])
                        </div>
                    @endforeach






                </div>
            </div>
        </div>
    </div>
</section>



@endsection



@section('js')
<script>$(document).ready(function() {
    $('.add-to-favorites').on('click', function(event) {
        event.preventDefault();
        
        var productId = $(this).data('product-id');
        var url = "{{ route('favorites.add', ':id') }}".replace(':id', productId);

        $.ajax({
            type: "POST",
            url: url,
            data: {_token: '{{ csrf_token() }}'},
            success: function(data) {
                var icon = $('.add-to-favorites[data-product-id="' + productId + '"]').find('.favorite-icon');
                if (icon.hasClass("fa fa-heart")) {
                    icon.addClass("pe-7s-like").removeClass("fa fa-heart text-danger");

                    flashBox('success', '{{ __('Removed from favorite') }}');
                } else {
                    icon.addClass("fa fa-heart text-danger").removeClass("pe-7s-like");

                    flashBox('success', '{{ __('Added to favorite') }}');
                }
            },
            error: function(xhr, status, error) {
                alert('An error occurred while adding to favorites');
            }
        });
    });
});
</script>
@endsection
