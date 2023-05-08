<footer class="rlr-footer rlr-section rlr-section__mt">
    <div class="container">
        <div class="rlr-footer__getintouch">
            <div class="rlr-footer__getintouch_col rlr-footer__getintouch__col--address p-0 text-end">
                <h4>مكاتبنا</h4>
                <a >{{$company_data->company_address}}</a>
            </div>
            <div class="rlr-footer__getintouch_col rlr-footer__getintouch__col--title text-end">
                <h4>احصل على السفر</h4>
                <p>مغامرات تدعوكم يا شباب!</p>
            </div>
        </div> <!-- Footer menu -->
        <div class="rlr-footer__menu">
            <nav class="rlr-footer__menu__col rlr-footer__menu__col--lg text-end">
                <h4>ابقى على تواصل</h4>
            
                <form class="rlr-subscribe" data-aos="fade-up" data-aos-offset="250" data-aos-duration="700">
                    <button class="btn">ارسل الان!</button>

                    <input type="email" class="rlr-subscribe__input text-end pe-4"
                        placeholder="أدخل بريدك الألكتروني">
                </form>
            </nav>
            <nav class="rlr-footer__menu__col text-end">
                <!-- Footer menu col -->
                <h4>خدمات</h4>
                <ul>
                    
                    <li><a >المسؤاليه الكامله</a></li>
                    <li><a >رحله امنه</a></li>
                    <li><a >رحله كامله</a></li>
                    <li><a >اكتشف المراكب</a></li>
                    <li><a >اكتشف المغامرات</a></li>
                </ul>
            </nav>
            {{-- <nav class="rlr-footer__menu__col text-end">
                <!-- Footer menu col -->
                <h4>مغامرات</h4>
                <ul>
                    <li><a >Beach Activity</a></li>
                    <li><a >Bungee Jump</a></li>
                    <li><a >City Tour</a></li>
                    <li><a >Hiking Trips</a></li>
                    <li><a >Jungle Safari</a></li>
                </ul>
            </nav> --}}
            <nav class="rlr-footer__menu__col text-end">
                <!-- Footer menu col -->
                <h4>المدن</h4>
                <ul>
                    <li><a >دبي</a></li>
                    <li><a >ابوظبي</a></li>
                    <li><a >الشارقه</a></li>
                    <li><a >الرويس</a></li>
                    <li><a >عجمان</a></li>
                </ul>
            </nav>
            <!-- Subscribe -->
        </div> <!-- Footer bottom -->
        <div class="rlr-footer__legal">
            <div class="rlr-footer__legal__row rlr-footer__legal__row--top">
                <div class="rlr-footer__legal__row__col ">
                    <a href="#">سياسة الخصوصية</a>
                </div>
                <!-- Footer social links -->
                <div class="rlr-footer__legal__row__col">
                    <a href="{{$company_data->linkedin}}">لينكدان</a>
                    <span class="separate">/</span>
                    <a href="{{$company_data->facebook}}">فيسبوك</a>
                    <span class="separate">/</span>
                    <a href="{{$company_data->google}}">انستجرام</a>
                </div>
            </div>
            <!-- Footer copyright -->
            <div class="rlr-footer__legal__row rlr-footer__legal__row--bottom">
                <div class="rlr-footer__legal__row__col">
                    <span>2023 © NTS</span>
                </div>
                <!-- Footer payment thumbs -->
                <div class="rlr-footer__legal__row__col">
                    <img src="./assets/images/ele-payments.png" alt="Payments">
                </div>
            </div>
        </div>
    </div>
</footer> <!-- Scripts -->
