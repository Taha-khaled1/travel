@extends('layouts.master_web')



@section('css')

@section('title')
    {{$blog->title}}
@stop
@endsection



@section('content')




<main id="rlr-main" class="rlr-main--fixed-top" dir="rtl">
    <!-- Blog Element -->
    <div class="container-xxl">
      <article class="rlr-article rlr-article-single--v2">
        <header class="rlr-article__header">
          <div class="rlr-article__header__timestamp">تم النشر {{ $blog->created_at->locale('ar')->diffForHumans() }}</div>
          <h1 class="type-h1">{{$blog->title}}</h1>
        </header>
        <div class="rlr-article__featured-photo">
          <img src="{{ URL::asset($blog->image) }}" alt="Featured Photo" />
        </div>
        <div class="rlr-article__wrapper m-0">
          <div class="content">
            <div class="content__highlight">
              <h2 class="type-h3">معلومات عن {{$blog->title}}</h2>
              <p class="type-lead">
                {{$blog->content}}
              </p>
            </div>
     
           
         <div class="rlr-article__badges">

              <span class="rlr-badge rlr-badge--left rlr-badge-- rlr-badge rlr-badge--left"> مقاله </span>
               <span class="rlr-badge rlr-badge--left rlr-badge-- rlr-badge rlr-badge--left"> رحلات </span>
              <span class="rlr-badge rlr-badge--left rlr-badge-- rlr-badge rlr-badge--left"> سفر </span>

            </div>
          </div>
        </div>
      </article>
   
    </div>
  </main>








@endsection



@section('js')

@endsection