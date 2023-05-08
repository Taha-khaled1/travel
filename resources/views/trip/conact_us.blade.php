@extends('layouts.master_web')



@section('css')

@section('title')
تواصل معنا
@stop
@endsection






@section('content')


<main id="rlr-main" class="rlr-main--fixed-top" dir="rtl">
    <!-- Header banner -->
    <section class="rlr-section">
      <div class="rlr-cta rlr-cta--no-button">
        <h2>اتصل بنا</h2>
        <p>تواصل معنا عبر الهاتف أو البريد الإلكتروني أو املأ النموذج أدناه</p>
      </div>
    </section>
    <!-- Main content -->
    <section class="rlr-section rlr-section__mt">
      <div class="container">
        <div class="row justify-content-around">
          <!-- Contact form -->
          <div class="col-xl-offset-1 col-xxl-5 col-lg-5">
            <div class="rlr-contact-form">
              <div class="rlr-contact-form__header">
                <div class="rlr-page-title">
                  <span class="rlr-page-title__icon"> <i class="rlr-icon-font flaticon-fluent-hand-left-20-regular"> </i> </span>
                  <div>
                    <h2 class="type-h3 rlr-page-title__title">مرحبًا ، يسعدنا مساعدتك!</h2>
                    <span class="rlr-page-title__desc">يُرجى إدخال البيانات حتى نتمكن من التواصل معك</span>
                  </div>
                </div>
              </div>
              <div class="rlr-contact-form__body">
                <form action="/">
                  <div class="rlr-contact-form__input-group"><label class="type-body-medium rlr-contact-form__label">اسم</label> <input type="text" name="name" autocomplete="off" class="form-control" placeholder="جون" /></div>
                  <div class="rlr-contact-form__input-group"><label class="type-body-medium rlr-contact-form__label">هاتف</label> <input type="tel" name="phone"  autocomplete="off" class="form-control" placeholder="000000000000" /></div>
                  <div class="rlr-contact-form__input-group"><label class="type-body-medium rlr-contact-form__label">رساله</label> <textarea class="form-control form-control--text-area" name="description"  placeholder="يرجى توضيح المشكلة التي تواجهها." rows="12"></textarea></div>
                  <div class="rlr-contact-form__input-group"><label class="type-body-medium rlr-contact-form__label">بريد إلكتروني</label> <input type="email" autocomplete="off" class="form-control" name="email" placeholder="johndoe@email.com" /></div>
                  <button type="submit" class="btn rlr-button btn rlr-button custom-class rlr-button--medium rlr-button--rounded rlr-button__color--white rlr-button--brand rlr-button-- rlr-button-- rlr-button__color-- rlr-button-- rlr-button-- w-100">إرسال</button>
                </form>
              </div>
            </div>
          </div>
          <!-- Contact Details -->
          <div class="col-xl-offset-1 col-xxxl-offset-1 col-xxl-4 col-lg-5 mt-5 mt-lg-0">
            <div class="rlr-contact-details">
              <div class="rlr-contact-details__details">
                <div class="rlr-contact-detail-item">
                  <span class="rlr-contact-detail-item__icon"> <i class="rlr-icon-font flaticon-phone-receiver-silhouette"> </i> </span>
                  <div>
                    <p class="rlr-contact-detail-item__title">هاتف</p>
                    <h6 class="rlr-contact-detail-item__desc">000 00000 00</h6>
                  </div>
                </div>
                <div class="rlr-contact-detail-item">
                  <span class="rlr-contact-detail-item__icon"> <i class="rlr-icon-font flaticon-email"> </i> </span>
                  <div>
                    <p class="rlr-contact-detail-item__title">بريد إلكتروني</p>
                    <h6 class="rlr-contact-detail-item__desc">support@77trips.tours</h6>
                  </div>
                </div>
                <div class="rlr-contact-detail-item">
                  <span class="rlr-contact-detail-item__icon"> <i class="rlr-icon-font flaticon-map-marker"> </i> </span>
                  <div>
                    <p class="rlr-contact-detail-item__title">عنوان</p>
                    <h6 class="rlr-contact-detail-item__desc">27 Kensington Gardens, London, SW7</h6>
                  </div>
                </div>
              </div>
             
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>



















@endsection



@section('js')

@endsection