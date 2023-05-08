@extends('layouts.master_web')



@section('css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">

<style>.pagination {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 20px;
  }
  
  .pagination li {
    display: inline-block;
    padding: 5px 10px;
    border: 1px solid #ddd;
    border-radius: 4px;
    margin-right: 5px;
    font-size: 16px;
    color: #333;
  }
  
  .pagination li a, .pagination li span {
    display: block;
    width: 100%;
    height: 100%;
    text-align: center;
    text-decoration: none;
  }
  
  .pagination li a:hover, .pagination li span:hover {
    background-color: #f2f2f2;
  }
  
  .pagination li.disabled {
    opacity: 0.5;
    cursor: default;
  }
  
  .pagination li.disabled a, .pagination li.disabled span {
    cursor: default;
  }
  
  .pagination li:first-child, .pagination li:last-child {
    display: none;
  }
  
  .pagination li:first-child + li a:before {
    content: "<<";
    margin-right: 5px;
  }
  
  .pagination li:last-child - li a:after {
    content: ">>";
    margin-left: 5px;
  }
  
  </style>
@section('title')
    المدونه
@stop
@endsection



@section('page-header')

@endsection




@section('content')
<main id="rlr-main" class="rlr-main--fixed-top" dir="rtl">
    <div class="container">
      <div class="row rlr-search-results-page__product-details justify-content-center">
      
@if (!count($blogs) == 0)
<section class="rlr-search-results-page__product-list">
  <div class="row rlr-listings__header">
    <!-- Breadcrumb -->
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb rlr-breadcrumb__items flex-row-reverse justify-content-end">
        <li class="breadcrumb-item rlr-breadcrumb__item"><a href="/">Home</a></li>
        <li class="breadcrumb-item rlr-breadcrumb__item"><a href="/">Destination</a></li>
        <li class="breadcrumb-item rlr-breadcrumb__item active" aria-current="page">Tour</li>
      </ol>
    </nav>
    <h1 class="rlr-section__heading--main">قائمة المدونات المتاحة</h1>
  </div>
  <div class="row rlr-search-results-page__card-wrapper">


   @foreach ($blogs as $item)
   <div class="col-md-6 col-lg-4 col-6">
    <article class="rlr-postcard">
      <img class="rlr-postcard__thumbnail" src="{{ URL::asset($item->image) }}" alt="blog image" />
      <div class="rlr-postcard__summary">
        <span class="rlr-postcard__author">تم النشر | {{ $item->created_at->locale('ar')->diffForHumans() }}  </span>
        <a href="{{ route('showblog',$item->id) }}" class="rlr-product-card__anchor-title">
          <h2 class="rlr-product-card__title">{{$item->title	}}</h2>
        </a>
        <p>{{ \Illuminate\Support\Str::limit($item->content, 100, '...') }}</p>
        <div class="rlr-product-card__footer">
          <a href="#" class="rlr-icon-text rlr-icon-text--anchor rlr-icon-text__anchor rlr-product-card__icon-text"> <i class="rlr-icon-font flaticon-comment-left"> </i> <span class="rlr-postcard__replies">0</span> </a>
          <div class="rlr-product-card__icon-text-list">
            <a href="#" class="rlr-icon-text rlr-icon-text--anchor rlr-icon-text__anchor rlr-product-card__icon-text"> <i class="rlr-icon-font flaticon-check"> </i> <span class="rlr-postcard__tag">رحلات </span> </a>
            <a href="#" class="rlr-icon-text rlr-icon-text--anchor rlr-icon-text__anchor rlr-product-card__icon-text"> <i class="rlr-icon-font flaticon-check"> </i> <span class="rlr-postcard__tag">ترفيهه </span> </a>
            <a href="#" class="rlr-icon-text rlr-icon-text--anchor rlr-icon-text__anchor rlr-product-card__icon-text"> <i class="rlr-icon-font flaticon-check"> </i> <span class="rlr-postcard__tag">مغامارات </span> </a>
          </div>
        </div>
      </div>
    </article>
  </div>
   @endforeach 







  </div>

  <hr class="rlr-search-results-page__divider" />



<div class="d-flex">
    {!! $blogs->links() !!}
</div>

  
</section>
@else
<div>
  <img src="{{URL::asset('empty.gif')}}" class="center" width="400" height="300">

</div>

<h1>لا يوجد نتائج لهذه البحث</h1>
@endif










      </div>
    </div>
@endsection



@section('js')

@endsection