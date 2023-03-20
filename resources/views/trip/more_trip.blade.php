@extends('layouts.master_web')



@section('css')
<style>

.center {
  display: block;
  margin: 0 auto;
}

h1 {
			text-align: center;
		}
</style>
@section('title')
    جميع النتائج
@stop
@endsection



@section('page-header')

@endsection




@section('content')
<p></p>
<main id="rlr-main" class="rlr-main--fixed-top" dir="rtl"><p></p>
    <div class="rlr-search-results-page container">
      <div class="rlr-search-results-page__breadcrumb-section">
        <!-- Breadcrumb -->
      
      </div>
      <aside class="row">
        <!-- Search results header -->
        <div class="rlr-search-results-header rlr-search-results-header__wrapper">
          <!-- Title -->
        
          <!-- Sort order -->
          <div class="rlr-search-results-header__sorting-wrapper">
            <span class="rlr-search-results-header__label">ترتيب حسب</span>
            <div class="dropdown rlr-dropdown rlr-js-dropdown">
              <button class="btn dropdown-toggle rlr-dropdown__button rlr-js-dropdown-button" type="button" id="rlr_dropdown_menu_search_results" data-bs-toggle="dropdown" aria-expanded="false" data-bs-offset="-50,35">الأكثر شهرة</button>
              <ul class="dropdown-menu rlr-dropdown__menu" aria-labelledby="rlr_dropdown_menu_search_results">
                <li>
                  <a class="dropdown-item rlr-dropdown__item rlr-js-dropdown-item" href="#">المقترح</a>
                </li>
                <li>
                  <a class="dropdown-item rlr-dropdown__item rlr-js-dropdown-item" href="#">السعر (الاقل إلي الأعلي)</a>
                </li>
                <li>
                  <a class="dropdown-item rlr-dropdown__item rlr-js-dropdown-item" href="#">السعر (الأعلي إالي الاقل)</a>
                </li>
                <li>
                  <hr class="dropdown-divider rlr-dropdown__divider" />
                </li>
                <li>
                  <a class="dropdown-item rlr-dropdown__item rlr-js-dropdown-item" href="#">المدة ( قصيرة إلي طويلة)</a>
                </li>
                <li>
                  <a class="dropdown-item rlr-dropdown__item rlr-js-dropdown-item" href="#">المدة (طويلة إلي قصيرة)</a>
                </li>
                <li>
                  <a class="dropdown-item rlr-dropdown__item rlr-js-dropdown-item" href="#">الأحدث عندنا</a>
                </li>
                <li>
                  <hr class="dropdown-divider rlr-dropdown__divider" />
                </li>
                <li>
                  <a class="dropdown-item rlr-dropdown__item rlr-js-dropdown-item" href="#">تقييمات المسافرون</a>
                </li>
                <li>
                  <a class="dropdown-item rlr-dropdown__item rlr-js-dropdown-item" href="#">الصفقات</a>
                </li>
                <li>
                  <a class="dropdown-item rlr-dropdown__item rlr-js-dropdown-item" href="#">المسافة</a>
                </li>
                <li>
                  <a class="dropdown-item rlr-dropdown__item rlr-js-dropdown-item" href="#">تصنيف النجوم</a>
                </li>
                <li>
                  <hr class="dropdown-divider rlr-dropdown__divider" />
                </li>
                <li>
                  <a class="dropdown-item rlr-dropdown__item rlr-js-dropdown-item" href="#">الطبيعي</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </aside>
     






@if ( !count($trip) == 0)
<div class="row rlr-search-results-page__product-details">
  <div class="rlr-search-results-page__product-list col-xl-12">
    <div class="row rlr-search-results-page__card-wrapper">
   
      @foreach ($trip as $item)
      <div class="col-md-6 col-xl-4 col-xxl-3 col-6">
          @include('layouts.product', ['item' => $item])
          
      </div>
      @endforeach

    </div>
    <hr class="rlr-search-results-page__divider" />
    {{-- <div class="d-flex">
      {!! $trip->links() !!}
  </div> --}}
  </div>
</div>
@else
<div>
  <img src="{{URL::asset('empty.gif')}}" class="center" width="400" height="300">

</div>

<h1>لا يوجد نتائج لهذه البحث</h1>



@endif











    </div>
  </main>
@endsection



@section('js')

@endsection