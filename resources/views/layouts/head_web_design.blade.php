<header>
    <nav id="navigation" class="navigation rlr-navigation default-nav fixed-top shadow-sm">
      <!-- Logo -->
      <div class="navigation-header">
        <div class="navigation-brand-text">
          <div class="rlr-logo rlr-logo__navbar-brand rlr-logo--default">
            <a href="./index.html">
              <img src="{{URL::asset('logoweb.png')}}" alt="#" class="" width="150" height="80" />
            </a>
          </div>
        </div>
        <div class="navigation-button-toggler">
          <span class="rlr-sVGIcon"> <i class="rlr-icon-font rlr-icon-font--megamenu flaticon-menu"> </i> </span>
        </div>
      </div>
      <div class="navigation-body rlr-navigation__body container">
      <ul class="navigation-menu rlr-navigation__menu align-to-left">
          <!-- Currency dropdown -->
          <!-- User account dropdown -->
          <li class="navigation-item">
            <a class="navigation-link" href="#">
              <img class="ui right spacedd avatar image me-2" src="{{URL::asset('logoam.png')}}"  width="100" height="100" />
              الحساب
            </a>
            
            <ul class="navigation-dropdown">
              <li class="navigation-dropdown-item">
                <a class="navigation-dropdown-link" href="{{route('profile.edit')}}">الملف الشخصي</a>
              </li>
              {{-- <li class="navigation-dropdown-item">
                <a class="navigation-dropdown-link" href="./my-account-pages--order.html">حجوزاتك</a>
              </li> --}}
            
              <li class="navigation-dropdown-item">
                <hr class="dropdown-divider rlr-dropdown__divider" />
              </li>
              @auth
              <li class="navigation-dropdown-item">
                {{-- <a class="navigation-dropdown-link" href="{{route('logout')}}">تسجيل الخروج</a> --}}

                <a class="navigation-dropdown-link" href="{{ route('logout') }}"
                onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i
                class="bx bx-log-out"></i>تسجيل خروج</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
                </form>









              </li>  
              @endauth
              @guest
              <li class="navigation-dropdown-item">

            


                <a class="navigation-dropdown-link" href="{{route('login')}}">تسجيل الدخول</a>
              </li> 
              @endguest
              @guest
              <li class="navigation-dropdown-item">
                <a class="navigation-dropdown-link" href="{{route('register')}}">انشاء حساب</a>
              </li> 
              @endguest
            </ul>
          </li>

        </ul>
        <!-- Main menu -->
        <ul class="navigation-menu rlr-navigation__menu rlr-navigation__menu--main-links flex-lg-row-reverse flex-sm-column">
          <!-- Dropdown menu 1 -->
          <li class="navigation-item is-active">
            <a class="navigation-link" href="{{ route('home') }}">الصفحه الرئيسيه</a>
           
          </li>
        

          <li class="navigation-item">
            <a class="navigation-link" href="{{ route('alltrip') }}">جميع الفاعليات</a>
           
          </li>

          <li class="navigation-item">
            <a class="navigation-link" href="./home-page.html"> الاحداث المميزه</a>
            <ul class="navigation-dropdown">
            
            @foreach ($event as $item)
            <li class="navigation-dropdown-item">
              <a class="navigation-dropdown-link" href="{{ route('alltrip.Type',$item->id) }}">{{$item->name}}</a>
            </li>
            @endforeach
            
           
            </ul>
          </li>
          <li class="navigation-item">
            <a class="navigation-link" href="{{ route('blogview') }}">المدونه</a>
           
          </li>
          <li class="navigation-item">
            <a class="navigation-link" href="{{ route('contactUs') }}"> تواصل معنا </a>
          </li>
          <li class="navigation-item">
            <a class="navigation-link" href="{{ route('about') }}">معلومات عنا</a>
           
          </li>

          <!-- Mega menu -->
        
          <!-- Dropdown menu 2 -->
        
          <!-- Dropdown menu 2 -->
        
        </ul>
        <!-- User actions menu -->
        <div class="navigation-body-header rlr-navigation__body-header">
          <div class="navigation-brand-text">
            <div class="rlr-logo rlr-logo__navbar-brand rlr-logo--default">
              <a href="./index.html">
                <img src="{{URL::asset('logoweb.png')}}" alt="#" class="" width="150" height="80" />
              </a>
            </div>
          </div>
          <span class="rlr-sVGIcon navigation-body-close-button"> <i class="rlr-icon-font rlr-icon-font--megamenu flaticon-close"> </i> </span>
        </div>
      </div>
    </nav>
  </header>