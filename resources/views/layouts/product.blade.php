
    <!-- Product card item -->
    <article class="rlr-product-card rlr-product-card--v3" itemscope itemtype="https://schema.org/Product">
        <!-- Product card image -->
        <figure class="rlr-product-card__image-wrapper">
            <span class="rlr-badge rlr-badge-- rlr-badge--accent-red
                 rlr-product-card__badge">
                0% اليوم
            </span>
            <div class="rlr-product-detail-header__button-wrapper">
                <button type="button"
                    class="btn rlr-button rlr-button--circle rlr-wishlist rlr-wishlist-button--light rlr-wishlist-button rlr-js-action-wishlist"
                    aria-label="Save to Wishlist">
                    <i class="rlr-icon-font  flaticon-heart-1 ">

                    </i></button> <span class="rlr-product-detail-header__helptext rlr-js-helptext"></span>
            </div>
            <a href="{{ route('detalis.Trip',$item->id) }}">
                <div class="swiper rlr-js-product-multi-image-swiper">


                    <div class="swiper-slide">
                        <img itemprop="image" data-sizes="auto" data-src="{{ URL::asset($item->image) }}"
                            data-srcset="{{ URL::asset($item->image) }}" class="lazyload" alt="product-image" />
                    </div>


                    <button type="button" class="btn rlr-button splide__arrow splide__arrow--prev"
                        aria-label="prev button">
                        <i class="rlr-icon-font  flaticon-left-chevron ">

                        </i></button> <button type="button" class="btn rlr-button splide__arrow splide__arrow--next"
                        aria-label="next button">
                        <i class="rlr-icon-font  flaticon-chevron ">

                        </i></button>
                </div>
            </a>
        </figure>
        <div class="rlr-product-card__detail-wrapper rlr-js-detail-wrapper">
            <!-- Product card header -->
            <header class="rlr-product-card__header">
                <div>
                    <a href="{{ route('detalis.Trip',$item->id) }}" class="rlr-product-card__anchor-title">
                        <h2 class="rlr-product-card__title" itemprop="name">
                            {{ $item->name }}
                        </h2>
                    </a>
                    <div>
                        <a href="{{ route('detalis.Trip',$item->id) }}" class="rlr-product-card__anchor-cat">
                            <span class="rlr-product-card__sub-title"> {{ $item->event->name }}</span>
                        </a>
                        <span class="rlr-product-card__sub-title">|</span>
                        <a href="{{ route('detalis.Trip',$item->id) }}" class="rlr-product-card__anchor-sub-cat">
                            <span class="rlr-product-card__sub-title">نوع الحدث</span>
                        </a>
                    </div>
                </div>
            </header>
            <!-- Product card body -->
            <div class="rlr-product-card__details">
                <div class="rlr-product-card__prices" itemprop="offers" itemscope itemtype="https://schema.org/Offer">
                    <span class="rlr-product-card__from">من </span>
                    <span class="rlr-product-card__price">
                        <mark itemprop="priceCurrency">$</mark><mark itemprop="price"> {{ $item->price }}</mark>
                    </span>
                </div>
                <div class="rlr-product-card__ratings" itemprop="aggregateRating" itemscope
                    itemtype="https://schema.org/AggregateRating">
                    <div class="rlr-review-stars" itemprop="ratingValue" itemscope
                        itemtype="https://schema.org/Product">
                        @for ($i = 0; $i < $item->review; $i++)
                            <i class="rlr-icon-font  flaticon-star-1 ">

                            </i>
                        @endfor





                    </div> <span class="rlr-product-card__rating-text" itemprop="reviewCount">{{ $item->review }}
                        (577)</span>
                </div>
            </div>
            <!-- Product card footer -->
            <div class="rlr-product-card__footer">
                <div class="rlr-icon-text  rlr-product-card__icon-text">
                    <i class="rlr-icon-font  flaticon-three-o-clock-clock ">

                    </i> <span class="">{{ $item->created_at->locale('ar')->diffForHumans() }}
                    </span>

                </div>
                <ul class="rlr-product-card__icon-text-list">
                    <li class="rlr-icon-text  rlr-product-card__icon-text">
                        <i class="rlr-icon-font  flaticon-check ">

                        </i> <span class="rlr-icon-text__title">ملعب كرة قدم
                        </span>

                    </li>
                    <li class="rlr-icon-text  rlr-product-card__icon-text">
                        <i class="rlr-icon-font  flaticon-check ">

                        </i> <span class="rlr-icon-text__title">انترنت مجاني
                        </span>

                    </li>
                </ul>
            </div>
        </div>
    </article>

