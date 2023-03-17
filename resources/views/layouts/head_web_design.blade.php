<header>
    <nav id="navigation" class="navigation rlr-navigation default-nav fixed-top shadow-sm">
      <!-- Logo -->
      <div class="navigation-header">
        <div class="navigation-brand-text">
          <div class="rlr-logo rlr-logo__navbar-brand rlr-logo--default">
            <a href="./index.html">
              <img src="{{URL::asset('./assets/svg/emprise-logo-dark.svg')}}" alt="#" class="" />
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
            <a class="navigation-link" href="#"><img class="ui right spaced avatar image me-2" src="{{URL::asset('./assets/images/blog-single-avatar.png')}}" alt="account avatar" /> Sarah J </a>
            <ul class="navigation-dropdown">
              <li class="navigation-dropdown-item">
                <a class="navigation-dropdown-link" href="./my-account-pages--dashboard.html">الملف الشخصي</a>
              </li>
              <li class="navigation-dropdown-item">
                <a class="navigation-dropdown-link" href="./my-account-pages--order.html">طلباتك</a>
              </li>
              <li class="navigation-dropdown-item">
                <a class="navigation-dropdown-link" href="./my-account-pages--subscription.html">الاشتراكات</a>
              </li>
              <li class="navigation-dropdown-item">
                <a class="navigation-dropdown-link" href="./search-results--no-sidebar.html">المفضلة</a>
              </li>
              <li class="navigation-dropdown-item">
                <hr class="dropdown-divider rlr-dropdown__divider" />
              </li>
              <li class="navigation-dropdown-item">
                <a class="navigation-dropdown-link" href="./account-pages--login.html">تسجيل الخروج</a>
              </li>
            </ul>
          </li>
        </ul>
        <!-- Main menu -->
        <ul class="navigation-menu rlr-navigation__menu rlr-navigation__menu--main-links flex-lg-row-reverse flex-sm-column">
          <!-- Dropdown menu 1 -->
          <li class="navigation-item is-active">
            <a class="navigation-link" href="{{ route('home') }}">الصفحه الرئيسيه</a>
           
          </li>
          <!-- Mega menu -->
          {{-- <li class="navigation-item has-submenu">
            <a class="navigation-link" href="#">جميع الفاعليات</a>
            <ul class="navigation-megamenu navigation-submenu navigation-megamenu-half">
              <li class="navigation-megamenu-container">
                <ul class="navigation-tabs">
                  <li class="rlr-navigation__tabbed-list">
                    <ul class="navigation-tabs-nav">
                      <li class="navigation-tabs-nav-item is-active"><a href="#">Africa</a></li>
                      <li class="navigation-tabs-nav-item"><a href="#">Asia</a></li>
                      <li class="navigation-tabs-nav-item"><a href="#">Australias</a></li>
                      <li class="navigation-tabs-nav-item"><a href="#">Europe</a></li>
                      <li class="navigation-tabs-nav-item"><a href="#">Americas</a></li>
                      <li class="navigation-tabs-nav-item"><a href="#">Middle East</a></li>
                      <li class="navigation-tabs-nav-item"><a href="#">View All</a></li>
                    </ul>
                  </li>
                  <li class="navigation-tabs-pane is-active">
                    <ul class="navigation-row">
                      <li class="navigation-col">
                        <ul class="navigation-list">
                          <li class="rlr-icon-text">
                            <div class="rlr-icon-text__text-wrapper">
                              <span class="rlr-icon-text__title"><a href="./search-results--left-sidebar.html"> Botswana</a></span>
                            </div>
                          </li>
                          <li class="rlr-icon-text">
                            <div class="rlr-icon-text__text-wrapper">
                              <span class="rlr-icon-text__title"><a href="./search-results--left-sidebar.html"> Egypt</a></span>
                            </div>
                          </li>
                          <li class="rlr-icon-text">
                            <div class="rlr-icon-text__text-wrapper">
                              <span class="rlr-icon-text__title"><a href="./search-results--left-sidebar.html"> Ethiopia</a></span>
                            </div>
                          </li>
                          <li class="rlr-icon-text">
                            <div class="rlr-icon-text__text-wrapper">
                              <span class="rlr-icon-text__title"><a href="./search-results--left-sidebar.html"> Ghana</a></span>
                            </div>
                          </li>
                          <li class="rlr-icon-text">
                            <div class="rlr-icon-text__text-wrapper">
                              <span class="rlr-icon-text__title"><a href="./search-results--left-sidebar.html"> Kenya</a></span>
                            </div>
                          </li>
                          <li class="rlr-icon-text">
                            <div class="rlr-icon-text__text-wrapper">
                              <span class="rlr-icon-text__title"><a href="./search-results--left-sidebar.html"> Madagascar</a></span>
                            </div>
                          </li>
                          <li class="rlr-icon-text">
                            <div class="rlr-icon-text__text-wrapper">
                              <span class="rlr-icon-text__title"><a href="./search-results--left-sidebar.html"> Morocco</a></span>
                            </div>
                          </li>
                          <li class="rlr-icon-text">
                            <div class="rlr-icon-text__text-wrapper">
                              <span class="rlr-icon-text__title"><a href="./search-results--left-sidebar.html"> Mozambique</a></span>
                            </div>
                          </li>
                        </ul>
                      </li>
                      <li class="navigation-col">
                        <ul class="navigation-list">
                          <li class="rlr-icon-text">
                            <div class="rlr-icon-text__text-wrapper">
                              <span class="rlr-icon-text__title"><a href="./search-results--left-sidebar.html"> Namibia</a></span>
                            </div>
                          </li>
                          <li class="rlr-icon-text">
                            <div class="rlr-icon-text__text-wrapper">
                              <span class="rlr-icon-text__title"><a href="./search-results--left-sidebar.html"> Senegal</a></span>
                            </div>
                          </li>
                          <li class="rlr-icon-text">
                            <div class="rlr-icon-text__text-wrapper">
                              <span class="rlr-icon-text__title"><a href="./search-results--left-sidebar.html"> South Africa</a></span>
                            </div>
                          </li>
                          <li class="rlr-icon-text">
                            <div class="rlr-icon-text__text-wrapper">
                              <span class="rlr-icon-text__title"><a href="./search-results--left-sidebar.html"> Tanzania</a></span>
                            </div>
                          </li>
                          <li class="rlr-icon-text">
                            <div class="rlr-icon-text__text-wrapper">
                              <span class="rlr-icon-text__title"><a href="./search-results--left-sidebar.html"> Tunisia</a></span>
                            </div>
                          </li>
                          <li class="rlr-icon-text">
                            <div class="rlr-icon-text__text-wrapper">
                              <span class="rlr-icon-text__title"><a href="./search-results--left-sidebar.html"> Zambia</a></span>
                            </div>
                          </li>
                          <li class="rlr-icon-text">
                            <div class="rlr-icon-text__text-wrapper">
                              <span class="rlr-icon-text__title"><a href="./search-results--left-sidebar.html"> Zanzibar</a></span>
                            </div>
                          </li>
                          <li class="rlr-icon-text">
                            <div class="rlr-icon-text__text-wrapper">
                              <span class="rlr-icon-text__title"><a href="./search-results--left-sidebar.html"> Zimbabwe</a></span>
                            </div>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li class="navigation-tabs-pane">
                    <ul class="navigation-row">
                      <li class="navigation-col">
                        <ul class="navigation-list">
                          <li class="rlr-icon-text">
                            <div class="rlr-icon-text__text-wrapper">
                              <span class="rlr-icon-text__title"><a href="./about.html"> Armenia</a></span>
                            </div>
                          </li>
                          <li class="rlr-icon-text">
                            <div class="rlr-icon-text__text-wrapper">
                              <span class="rlr-icon-text__title"><a href="./search-results--left-sidebar.html"> Azerbaijan</a></span>
                            </div>
                          </li>
                          <li class="rlr-icon-text">
                            <div class="rlr-icon-text__text-wrapper">
                              <span class="rlr-icon-text__title"><a href="./search-results--left-sidebar.html"> Bali</a></span>
                            </div>
                          </li>
                          <li class="rlr-icon-text">
                            <div class="rlr-icon-text__text-wrapper">
                              <span class="rlr-icon-text__title"><a href="./search-results--left-sidebar.html"> Bhutan</a></span>
                            </div>
                          </li>
                          <li class="rlr-icon-text">
                            <div class="rlr-icon-text__text-wrapper">
                              <span class="rlr-icon-text__title"><a href="./search-results--left-sidebar.html"> Cambodia</a></span>
                            </div>
                          </li>
                          <li class="rlr-icon-text">
                            <div class="rlr-icon-text__text-wrapper">
                              <span class="rlr-icon-text__title"><a href="./search-results--left-sidebar.html"> China</a></span>
                            </div>
                          </li>
                          <li class="rlr-icon-text">
                            <div class="rlr-icon-text__text-wrapper">
                              <span class="rlr-icon-text__title"><a href="./search-results--left-sidebar.html"> India</a></span>
                            </div>
                          </li>
                          <li class="rlr-icon-text">
                            <div class="rlr-icon-text__text-wrapper">
                              <span class="rlr-icon-text__title"><a href="./search-results--left-sidebar.html"> Indonesia</a></span>
                            </div>
                          </li>
                        </ul>
                      </li>
                      <li class="navigation-col">
                        <ul class="navigation-list">
                          <li class="rlr-icon-text">
                            <div class="rlr-icon-text__text-wrapper">
                              <span class="rlr-icon-text__title"><a href="./about.html"> Japan</a></span>
                            </div>
                          </li>
                          <li class="rlr-icon-text">
                            <div class="rlr-icon-text__text-wrapper">
                              <span class="rlr-icon-text__title"><a href="./search-results--left-sidebar.html"> Malaysia</a></span>
                            </div>
                          </li>
                          <li class="rlr-icon-text">
                            <div class="rlr-icon-text__text-wrapper">
                              <span class="rlr-icon-text__title"><a href="./search-results--left-sidebar.html"> Nepal</a></span>
                            </div>
                          </li>
                          <li class="rlr-icon-text">
                            <div class="rlr-icon-text__text-wrapper">
                              <span class="rlr-icon-text__title"><a href="./search-results--left-sidebar.html"> Philippines</a></span>
                            </div>
                          </li>
                          <li class="rlr-icon-text">
                            <div class="rlr-icon-text__text-wrapper">
                              <span class="rlr-icon-text__title"><a href="./search-results--left-sidebar.html"> Singapore</a></span>
                            </div>
                          </li>
                          <li class="rlr-icon-text">
                            <div class="rlr-icon-text__text-wrapper">
                              <span class="rlr-icon-text__title"><a href="./search-results--left-sidebar.html"> Sri Lanka</a></span>
                            </div>
                          </li>
                          <li class="rlr-icon-text">
                            <div class="rlr-icon-text__text-wrapper">
                              <span class="rlr-icon-text__title"><a href="./search-results--left-sidebar.html"> Thailand</a></span>
                            </div>
                          </li>
                          <li class="rlr-icon-text">
                            <div class="rlr-icon-text__text-wrapper">
                              <span class="rlr-icon-text__title"><a href="./search-results--left-sidebar.html"> Vietnam</a></span>
                            </div>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li class="navigation-tabs-pane">
                    <ul class="navigation-row">
                      <li class="navigation-col">
                        <ul class="navigation-list">
                          <li class="rlr-icon-text">
                            <div class="rlr-icon-text__text-wrapper">
                              <span class="rlr-icon-text__title"><a href="./about.html"> Australia</a></span>
                            </div>
                          </li>
                          <li class="rlr-icon-text">
                            <div class="rlr-icon-text__text-wrapper">
                              <span class="rlr-icon-text__title"><a href="./search-results--left-sidebar.html"> Northern Territory</a></span>
                            </div>
                          </li>
                          <li class="rlr-icon-text">
                            <div class="rlr-icon-text__text-wrapper">
                              <span class="rlr-icon-text__title"><a href="./search-results--left-sidebar.html"> South Australia</a></span>
                            </div>
                          </li>
                          <li class="rlr-icon-text">
                            <div class="rlr-icon-text__text-wrapper">
                              <span class="rlr-icon-text__title"><a href="./search-results--left-sidebar.html"> Tasmania</a></span>
                            </div>
                          </li>
                          <li class="rlr-icon-text">
                            <div class="rlr-icon-text__text-wrapper">
                              <span class="rlr-icon-text__title"><a href="./search-results--left-sidebar.html"> Western Australia</a></span>
                            </div>
                          </li>
                          <li class="rlr-icon-text">
                            <div class="rlr-icon-text__text-wrapper">
                              <span class="rlr-icon-text__title"><a href="./search-results--left-sidebar.html"> Cook Islands</a></span>
                            </div>
                          </li>
                          <li class="rlr-icon-text">
                            <div class="rlr-icon-text__text-wrapper">
                              <span class="rlr-icon-text__title"><a href="./search-results--left-sidebar.html"> Fiji</a></span>
                            </div>
                          </li>
                        </ul>
                      </li>
                      <li class="navigation-col">
                        <ul class="navigation-list">
                          <li class="rlr-icon-text">
                            <div class="rlr-icon-text__text-wrapper">
                              <span class="rlr-icon-text__title"><a href="./about.html"> French Polynesia</a></span>
                            </div>
                          </li>
                          <li class="rlr-icon-text">
                            <div class="rlr-icon-text__text-wrapper">
                              <span class="rlr-icon-text__title"><a href="./search-results--left-sidebar.html"> New Zealand</a></span>
                            </div>
                          </li>
                          <li class="rlr-icon-text">
                            <div class="rlr-icon-text__text-wrapper">
                              <span class="rlr-icon-text__title"><a href="./search-results--left-sidebar.html"> Papua New Guinea</a></span>
                            </div>
                          </li>
                          <li class="rlr-icon-text">
                            <div class="rlr-icon-text__text-wrapper">
                              <span class="rlr-icon-text__title"><a href="./search-results--left-sidebar.html"> Samoa</a></span>
                            </div>
                          </li>
                          <li class="rlr-icon-text">
                            <div class="rlr-icon-text__text-wrapper">
                              <span class="rlr-icon-text__title"><a href="./search-results--left-sidebar.html"> Solomon Islands</a></span>
                            </div>
                          </li>
                          <li class="rlr-icon-text">
                            <div class="rlr-icon-text__text-wrapper">
                              <span class="rlr-icon-text__title"><a href="./search-results--left-sidebar.html"> South Pacific</a></span>
                            </div>
                          </li>
                          <li class="rlr-icon-text">
                            <div class="rlr-icon-text__text-wrapper">
                              <span class="rlr-icon-text__title"><a href="./search-results--left-sidebar.html"> Vanuatu</a></span>
                            </div>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li class="navigation-tabs-pane">
                    <ul class="navigation-row">
                      <li class="navigation-col">
                        <ul class="navigation-list">
                          <li class="rlr-icon-text">
                            <div class="rlr-icon-text__text-wrapper">
                              <span class="rlr-icon-text__title"><a href="./about.html"> Austria</a></span>
                            </div>
                          </li>
                          <li class="rlr-icon-text">
                            <div class="rlr-icon-text__text-wrapper">
                              <span class="rlr-icon-text__title"><a href="./search-results--left-sidebar.html"> Belgium</a></span>
                            </div>
                          </li>
                          <li class="rlr-icon-text">
                            <div class="rlr-icon-text__text-wrapper">
                              <span class="rlr-icon-text__title"><a href="./search-results--left-sidebar.html"> Croatia</a></span>
                            </div>
                          </li>
                          <li class="rlr-icon-text">
                            <div class="rlr-icon-text__text-wrapper">
                              <span class="rlr-icon-text__title"><a href="./search-results--left-sidebar.html"> Cyprus</a></span>
                            </div>
                          </li>
                          <li class="rlr-icon-text">
                            <div class="rlr-icon-text__text-wrapper">
                              <span class="rlr-icon-text__title"><a href="./search-results--left-sidebar.html"> Denmark</a></span>
                            </div>
                          </li>
                          <li class="rlr-icon-text">
                            <div class="rlr-icon-text__text-wrapper">
                              <span class="rlr-icon-text__title"><a href="./search-results--left-sidebar.html"> Finland</a></span>
                            </div>
                          </li>
                          <li class="rlr-icon-text">
                            <div class="rlr-icon-text__text-wrapper">
                              <span class="rlr-icon-text__title"><a href="./search-results--left-sidebar.html"> France</a></span>
                            </div>
                          </li>
                          <li class="rlr-icon-text">
                            <div class="rlr-icon-text__text-wrapper">
                              <span class="rlr-icon-text__title"><a href="./search-results--left-sidebar.html"> Germany</a></span>
                            </div>
                          </li>
                        </ul>
                      </li>
                      <li class="navigation-col">
                        <ul class="navigation-list">
                          <li class="rlr-icon-text">
                            <div class="rlr-icon-text__text-wrapper">
                              <span class="rlr-icon-text__title"><a href="./about.html"> Greece</a></span>
                            </div>
                          </li>
                          <li class="rlr-icon-text">
                            <div class="rlr-icon-text__text-wrapper">
                              <span class="rlr-icon-text__title"><a href="./search-results--left-sidebar.html"> Ireland</a></span>
                            </div>
                          </li>
                          <li class="rlr-icon-text">
                            <div class="rlr-icon-text__text-wrapper">
                              <span class="rlr-icon-text__title"><a href="./search-results--left-sidebar.html"> Italy</a></span>
                            </div>
                          </li>
                          <li class="rlr-icon-text">
                            <div class="rlr-icon-text__text-wrapper">
                              <span class="rlr-icon-text__title"><a href="./search-results--left-sidebar.html"> Portugal</a></span>
                            </div>
                          </li>
                          <li class="rlr-icon-text">
                            <div class="rlr-icon-text__text-wrapper">
                              <span class="rlr-icon-text__title"><a href="./search-results--left-sidebar.html"> Spain</a></span>
                            </div>
                          </li>
                          <li class="rlr-icon-text">
                            <div class="rlr-icon-text__text-wrapper">
                              <span class="rlr-icon-text__title"><a href="./search-results--left-sidebar.html"> Switzerland</a></span>
                            </div>
                          </li>
                          <li class="rlr-icon-text">
                            <div class="rlr-icon-text__text-wrapper">
                              <span class="rlr-icon-text__title"><a href="./search-results--left-sidebar.html"> United Kingdom</a></span>
                            </div>
                          </li>
                          <li class="rlr-icon-text">
                            <div class="rlr-icon-text__text-wrapper">
                              <span class="rlr-icon-text__title"><a href="./search-results--left-sidebar.html"> Ukraine</a></span>
                            </div>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li class="navigation-tabs-pane">
                    <ul class="navigation-row">
                      <li class="navigation-col">
                        <ul class="navigation-list">
                          <li class="rlr-icon-text">
                            <div class="rlr-icon-text__text-wrapper">
                              <span class="rlr-icon-text__title"><a href="./about.html"> Botswana</a></span>
                            </div>
                          </li>
                          <li class="rlr-icon-text">
                            <div class="rlr-icon-text__text-wrapper">
                              <span class="rlr-icon-text__title"><a href="./search-results--left-sidebar.html"> Egypt</a></span>
                            </div>
                          </li>
                          <li class="rlr-icon-text">
                            <div class="rlr-icon-text__text-wrapper">
                              <span class="rlr-icon-text__title"><a href="./search-results--left-sidebar.html"> Ethiopia</a></span>
                            </div>
                          </li>
                          <li class="rlr-icon-text">
                            <div class="rlr-icon-text__text-wrapper">
                              <span class="rlr-icon-text__title"><a href="./search-results--left-sidebar.html"> Ghana</a></span>
                            </div>
                          </li>
                          <li class="rlr-icon-text">
                            <div class="rlr-icon-text__text-wrapper">
                              <span class="rlr-icon-text__title"><a href="./search-results--left-sidebar.html"> Kenya</a></span>
                            </div>
                          </li>
                          <li class="rlr-icon-text">
                            <div class="rlr-icon-text__text-wrapper">
                              <span class="rlr-icon-text__title"><a href="./search-results--left-sidebar.html"> Madagascar</a></span>
                            </div>
                          </li>
                          <li class="rlr-icon-text">
                            <div class="rlr-icon-text__text-wrapper">
                              <span class="rlr-icon-text__title"><a href="./search-results--left-sidebar.html"> Morocco</a></span>
                            </div>
                          </li>
                          <li class="rlr-icon-text">
                            <div class="rlr-icon-text__text-wrapper">
                              <span class="rlr-icon-text__title"><a href="./search-results--left-sidebar.html"> Mozambique</a></span>
                            </div>
                          </li>
                        </ul>
                      </li>
                      <li class="navigation-col">
                        <ul class="navigation-list">
                          <li class="rlr-icon-text">
                            <div class="rlr-icon-text__text-wrapper">
                              <span class="rlr-icon-text__title"><a href="./about.html"> Namibia</a></span>
                            </div>
                          </li>
                          <li class="rlr-icon-text">
                            <div class="rlr-icon-text__text-wrapper">
                              <span class="rlr-icon-text__title"><a href="./search-results--left-sidebar.html"> Senegal</a></span>
                            </div>
                          </li>
                          <li class="rlr-icon-text">
                            <div class="rlr-icon-text__text-wrapper">
                              <span class="rlr-icon-text__title"><a href="./search-results--left-sidebar.html"> South Africa</a></span>
                            </div>
                          </li>
                          <li class="rlr-icon-text">
                            <div class="rlr-icon-text__text-wrapper">
                              <span class="rlr-icon-text__title"><a href="./search-results--left-sidebar.html"> Tanzania</a></span>
                            </div>
                          </li>
                          <li class="rlr-icon-text">
                            <div class="rlr-icon-text__text-wrapper">
                              <span class="rlr-icon-text__title"><a href="./search-results--left-sidebar.html"> Tunisia</a></span>
                            </div>
                          </li>
                          <li class="rlr-icon-text">
                            <div class="rlr-icon-text__text-wrapper">
                              <span class="rlr-icon-text__title"><a href="./search-results--left-sidebar.html"> Zambia</a></span>
                            </div>
                          </li>
                          <li class="rlr-icon-text">
                            <div class="rlr-icon-text__text-wrapper">
                              <span class="rlr-icon-text__title"><a href="./search-results--left-sidebar.html"> Zanzibar</a></span>
                            </div>
                          </li>
                          <li class="rlr-icon-text">
                            <div class="rlr-icon-text__text-wrapper">
                              <span class="rlr-icon-text__title"><a href="./search-results--left-sidebar.html"> Zimbabwe</a></span>
                            </div>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
            </ul>
          </li> --}}
          <!-- Dropdown menu 1 -->

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
                <img src="{{URL::asset('./assets/svg/emprise-logo-dark.svg')}}" alt="#" class="" />
              </a>
            </div>
          </div>
          <span class="rlr-sVGIcon navigation-body-close-button"> <i class="rlr-icon-font rlr-icon-font--megamenu flaticon-close"> </i> </span>
        </div>
      </div>
    </nav>
  </header>