@extends('layouts.master_web')



@section('css')

@section('title')
    معلومات عنا
@stop
@endsection



@section('content')

<main id="rlr-main" class="rlr-main--fixed-top" dir="rtl">
    <!-- Hero Banner -->
    <section class="rlr-about-hero">
      <div class="container">
        <div class="rlr-about-hero__content">
          <img class="rlr-about-hero__bg" src="{{URL::asset('r.png')}}" alt="..." />
          <div class="rlr-about-hero__content-inner">
            <h1 class="type-d1 rlr-about-hero__title">معلومات عنا</h1>
            <div class="rlr-about-hero__cards">
              <div class="rlr-about-hero-card" data-aos="fade-up" data-aos-offset="250" data-aos-duration="700">
                <h5 class="type-h5-semibold rlr-about-hero-card__title">مهمة الشركة ورؤيتها?</h5>
                <p class="type-lead rlr-about-hero-card__desc">تتمثل مهمتنا في رحلات ، في خلق تجارب لا تُنسى لعملائنا من خلال تقديم رحلات ومغامرات ترفيهية مثيرة ، وخدمات تأجير القوارب والسيارات الموثوقة ، وخدمات الترفيه على أعلى مستوى. نسعى جاهدين لنكون الوجهة المفضلة لأي شخص يبحث عن تجربة سفر فريدة لا تُنسى.</p>
              </div>
              <div class="rlr-about-hero-card" data-aos="fade-up" data-aos-offset="250" data-aos-duration="700">
                <h5 class="type-h5-semibold rlr-about-hero-card__title">تاريخ الشركة:?</h5>
                <p class="type-lead rlr-about-hero-card__desc">تأسست شركة رحلات في عام 2010 ، وسرعان ما أصبحت واحدة من أكثر شركات السفر ثقة واحترامًا في هذا المجال. يمتلك فريق الخبراء لدينا عقودًا من الخبرة في صناعات السفر والترفيه ، وقد استخدمنا هذه الخبرة لبناء شركة تقدم خدمة استثنائية وتجارب لا تُنسى..</p>
              </div>
              <div class="rlr-about-hero-card" data-aos="fade-up" data-aos-offset="250" data-aos-duration="700">
                <h5 class="type-h5-semibold rlr-about-hero-card__title">أعضاء الفريق?</h5>
                <p class="type-lead rlr-about-hero-card__desc">يتكون فريقنا من محترفين متمرسين شغوفين بالسفر ومكرسين لتقديم أفضل خدمة ممكنة لعملائنا. قابل بعض أعضاء فريقنا الرئيسيين أدناه:.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Our Vision -->
    <section class="rlr-about rlr-section rlr-section__my">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <!-- Section heading -->
            <div class="rlr-section__title">
              <h2 class="rlr-section__title--main">رؤيتنا</h2>
              <span class="rlr-section__title--sub">بعض الأسباب الرائعة يجب أن يكون 77trips متجرك الوحيد!</span>
            </div>
            <div class="row gy-5">
              <div class="col-xl-6" data-aos="fade-up" data-aos-offset="250" data-aos-duration="500">
                <!-- Text card -->
                <div class="rlr-text-card rlr-text-card--numbered">
                  <h5 class="rlr-text-card__title">1</h5>
                  <p class="rlr-text-card__desc">تتمثل رؤيتنا في أن نكون مبتكرين رائدين في صناعتنا ، ودائمًا ما ندفع حدود ما هو ممكن لتقديم قيمة استثنائية لعملائنا..</p>
                </div>
              </div>
              <div class="col-xl-6" data-aos="fade-up" data-aos-offset="275" data-aos-duration="600">
                <!-- Text card -->
                <div class="rlr-text-card rlr-text-card--numbered">
                  <h5 class="rlr-text-card__title">2</h5>
                  <p class="rlr-text-card__desc">نحن ملتزمون بوضع عملائنا في قلب كل ما نقوم به ، وتتمثل رؤيتنا في أن نكون الشركة الأكثر تركيزًا على العملاء في صناعتنا..</p>
                </div>
              </div>
              <div class="col-xl-6" data-aos="fade-up" data-aos-offset="300" data-aos-duration="700">
                <!-- Text card -->
                <div class="rlr-text-card rlr-text-card--numbered">
                  <h5 class="rlr-text-card__title">3</h5>
                  <p class="rlr-text-card__desc">نعتقد أن ممارسات الأعمال المستدامة ضرورية لنجاحنا ، ورؤيتنا هي أن نكون روادًا في تعزيز المسؤولية البيئية والاستدامة الاجتماعية..</p>
                </div>
              </div>
              <div class="col-xl-6" class="col-xl-6" data-aos="fade-up" data-aos-offset="325" data-aos-duration="800">
                <!-- Text card -->
                <div class="rlr-text-card rlr-text-card--numbered">
                  <h5 class="rlr-text-card__title">4</h5>
                  <p class="rlr-text-card__desc">تتمثل رؤيتنا في أن نكون شركة عالمية حقًا ، مع وجود في جميع الأسواق الرئيسية حول العالم والقدرة على تقديم خدمة عالمية المستوى للعملا </p>
                </div>
              </div>
            </div>
          </div>
          <div class="offset-xl-1 col-lg-5">
            <div class="rlr-img rlr-img--dotted img-fluid">
              <img class="img-fluid" src="{{URL::asset('trip/1.png')}}" alt=" image our vision" style="width:500px; height:650px;"/>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Our Values -->
    <section class="rlr-about rlr-section rlr-section__my">
      <div class="container">
        <div class="row">
          <div class="offset-xl-1 col-lg-5 flex-sm-column-reverse rlr-dotted-image">
            <div class="rlr-img rlr-img--dotted-reversed">
              <img class="img-fluid" src="{{URL::asset('trip/6.png')}}" alt=" image our values" style="width:500px; height:650px;"/>
            </div>
          </div>
          <div class="col-lg-6">
            <!-- Section heading -->
            <div class="rlr-section__title">
              <h2 class="rlr-section__title--main">رؤيتنا</h2>
              <span class="rlr-section__title--sub">بعض الأسباب الرائعة يجب أن يكون 77trips متجرك الوحيد!</span>
            </div>
            <div class="row gy-5">
              <div class="col-xl-6" data-aos="fade-up" data-aos-offset="250" data-aos-duration="500">
                <!-- Text card -->
                <div class="rlr-text-card rlr-text-card--numbered">
                  <h5 class="rlr-text-card__title">1</h5>
                  <p class="rlr-text-card__desc">نحن ملتزمون بتقديم خدمة استثنائية وضمان رضا عملائنا دائمًا عن تجاربهم. نسعى جاهدين لإنشاء علاقات طويلة الأمد مع عملائنا مبنية على الثقة والشفافية والاحترام..</p>
                </div>
              </div>
              <div class="col-xl-6" data-aos="fade-up" data-aos-offset="275" data-aos-duration="600">
                <!-- Text card -->
                <div class="rlr-text-card rlr-text-card--numbered">
                  <h5 class="rlr-text-card__title">2</h5>
                  <p class="rlr-text-card__desc">نولي الأولوية القصوى للجودة والسلامة في كل ما نقوم به. من المعدات التي نستخدمها إلى الأنشطة التي نقدمها ، نتخذ كل الاحتياطات لضمان أن يتمكن عملاؤنا من الاستمتاع بتجاربهم براحة بال تامة.</p>
                </div>
              </div>
              <div class="col-xl-6" data-aos="fade-up" data-aos-offset="300" data-aos-duration="700">
                <!-- Text card -->
                <div class="rlr-text-card rlr-text-card--numbered">
                  <h5 class="rlr-text-card__title">3</h5>
                  <p class="rlr-text-card__desc">بصفتنا شركة تقدم خدمات ترفيهية في بعض أجمل البيئات الطبيعية في العالم ، فإننا ملتزمون بشدة بتعزيز المسؤولية البيئية. نحن نسعى جاهدين لتقليل تأثيرنا على البيئة وتثقيف عملائنا حول أهمية الحفاظ عليها..</p>
                </div>
              </div>
              <div class="col-xl-6" class="col-xl-6" data-aos="fade-up" data-aos-offset="325" data-aos-duration="800">
                <!-- Text card -->
                <div class="rlr-text-card rlr-text-card--numbered">
                  <h5 class="rlr-text-card__title">4</h5>
                  <p class="rlr-text-card__desc">نعتقد أن نجاحنا يعتمد على قوة فريقنا وقدرتنا على العمل بشكل تعاوني نحو هدف مشترك. نحن نعزز ثقافة العمل الجماعي والتعاون والتواصل المفتوح ، ونشجع موظفينا على المساهمة بمواهبهم.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Our Team -->

  </main>


@endsection



@section('js')

@endsection