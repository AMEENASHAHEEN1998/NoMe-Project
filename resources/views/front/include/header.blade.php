<!-- mobile site__header -->
<header class="site__header d-lg-none">
    <!-- data-sticky-mode - one of [pullToShow, alwaysOnTop] -->
        <div class="mobile-header mobile-header--sticky" data-sticky-mode="pullToShow">
            <div class="mobile-header__panel">
                <div class="container">
                    <div class="mobile-header__body">
                        <button class="mobile-header__menu-button">
                            <i class="fa fa-list fa-2x" style="color: #fff;"></i>
                        </button>
                        <a class="mobile-header__logo" href="/">
                            <!-- mobile-logo -->
                            <div style="width: 196px; ">
                                <img src="css/image/logo.jpeg" alt="" style="width: 100px">
                            </div>
                            <!-- mobile-logo / end -->
                        </a>
                        <div class="search search--location--mobile-header mobile-header__search">
                            <div class="search__body">
                                <form class="search__form" action="/search" method="GET" style="margin-bottom: 0px;" >
                                    <input class="search__input" name="p" placeholder="ابحث في أكثر من 10,000 منتج" aria-label="Site search" type="text" autocomplete="off">
                                    <input type="hidden" name="c" value="all">
                                    <button class="search__button search__button--type--submit" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                    <button class="search__button search__button--type--close" type="button">
                                        <i class="fa fa-cross"></i>
                                    </button>
                                    <div class="search__border"></div>
                                </form>
                                <div class="search__suggestions suggestions suggestions--location--mobile-header"></div>
                            </div>
                        </div>
                        <div class="mobile-header__indicators">
                            <div class="indicator indicator--mobile-search indicator--mobile d-md-none">
                                <button class="indicator__button">
                                    <span class="indicator__area">
                                        <svg width="20px" height="20px">
                                            <use xlink:href="https://waslastore.ps//website/images/sprite.svg#search-20"></use>
                                        </svg>
                                    </span>
                                </button>
                            </div>
                                                    <div class="indicator indicator--mobile">
                                <a href="/login" class="indicator__button">
                                    <span class="indicator__area">
                                        <svg width="20px" height="20px">
                                            <use xlink:href="https://waslastore.ps//website/images/sprite.svg#person-20"></use>
                                        </svg>
                                    </span>
                                </a>
                            </div>

                        </div>
                    </div>
                                </div>
            </div>
        </div>
    </header>
        <!-- mobile site__header / end -->
        <header class="site__header d-lg-block d-none">
            <div class="site-header">
                <!-- .topbar -->
                <!-- <div class="site-header__topbar topbar">
                    <div class="topbar__container container">
                        <div class="topbar__row">
                            <div class="topbar__item topbar__item--link">
                                <a style="color: #f5a1d1" href="">
                                    <i class="fa fa-facebook"  aria-hidden="true"></i>
                                </a>
                            </div>
                            <div class="topbar__item topbar__item--link">
                                <a style="color: #f5a1d1" href="https://www.instagram.com/waslastore.ps/"> <i class="fab fa-instagram"></i>
                                </a>
                            </div>
                            <div class="topbar__item topbar__item--link">
                                <a style="color: #f5a1d1" href="https://twitter.com/waslastore">
                                    <i class="fa fa-twitter"></i></a>
                            </div>
                            <div class="topbar__item topbar__item--link">
                                <a style="color: #f5a1d1" href="https://api.whatsapp.com/send?phone=970592502504&amp;app=facebook&amp;entry_point=page_cta&amp;fbclid=IwAR2iwVf_bqw9g-remrm-px-bx6DXYMiQpW0W06MV8ca0BePZNKKspJhR4SY">
                                    <i class="fab fa-whatsapp"></i></a>
                            </div>
                            <div class="topbar__spring"></div>
                                                <div class="topbar__item">
                                <div class="topbar-dropdown">
                                    <button class="topbar-dropdown__btn" type="button" onclick="window.location = '/login';">
                                        تسجيل الدخول
                                    </button>
                                </div>
                            </div>
                            <div class="topbar__item">
                                <div class="topbar-dropdown">
                                    <button class="topbar-dropdown__btn" type="button" onclick="window.location = '/register';">
                                        انشاء حساب
                                    </button>
                                </div>
                            </div>


                            <div class="topbar__item">
                                <div class="topbar-dropdown">
                                    <button class="topbar-dropdown__btn" type="button">
                                        اللغة: <span class="topbar__item-value">العربية</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!-- .topbar / end -->
                <div class="site-header__middle container">
                    <div class="site-header__logo">
                        <a href="/">
                            <!-- logo -->
                            <div>
                                <img style="width: 50%" src="{{asset('front/css/image/logo-3.png')}}" alt="">
                            </div>
                            <!-- logo / end -->
                        </a>
                    </div>
                    <div class="site-header__search">
                        <div class="search search--location--header ">
                            <div class="search__body">

                                <form class="search__form" action="/search" method="GET" style="margin-bottom: 0px;">
                                    <select class="search__categories" aria-label="Category" name="c">
                                        <option value="all">جميع التصنيفات</option>
                                                                                                                                                            <option value="197">أزياء نسائي</option>
                                                                                        <option value="231">
                                                    &nbsp;&nbsp;&nbsp;&nbsp;بلايز</option>
                                                                                        <option value="237">
                                                    &nbsp;&nbsp;&nbsp;&nbsp;تنورة</option>
                                                                                        <option value="243">
                                                    &nbsp;&nbsp;&nbsp;&nbsp;فساتين</option>
                                                                                        <option value="299">
                                                    &nbsp;&nbsp;&nbsp;&nbsp;جاكيتات</option>
                                                                                        <option value="309">
                                                    &nbsp;&nbsp;&nbsp;&nbsp;قمصان</option>
                                                                                        <option value="478">
                                                    &nbsp;&nbsp;&nbsp;&nbsp;أفرهول</option>
                                                                                        <option value="504">
                                                    &nbsp;&nbsp;&nbsp;&nbsp;بناطيل</option>
                                                                                        <option value="620">
                                                    &nbsp;&nbsp;&nbsp;&nbsp;أحذية</option>
                                                                                        <option value="704">
                                                    &nbsp;&nbsp;&nbsp;&nbsp;ترنجات</option>
                                                                                        <option value="744">
                                                    &nbsp;&nbsp;&nbsp;&nbsp;شورت</option>
                                                                                        <option value="794">
                                                    &nbsp;&nbsp;&nbsp;&nbsp;ملابس حوامل</option>
                                                                                        <option value="1040">
                                                    &nbsp;&nbsp;&nbsp;&nbsp;عبايات</option>
                                                                                        <option value="1804">
                                                    &nbsp;&nbsp;&nbsp;&nbsp;ملابس رياضية</option>
                                                                                        <option value="1826">
                                                    &nbsp;&nbsp;&nbsp;&nbsp;ملابس داخلية</option>
                                                                                        <option value="5695">
                                                    &nbsp;&nbsp;&nbsp;&nbsp;مقاسات كبيرة</option>
                                                                                        <option value="6205">
                                                    &nbsp;&nbsp;&nbsp;&nbsp;أطقم</option>
                                                                                                                                                                                                                                                                                <option value="198">أزياء رجالي</option>
                                                                                        <option value="368">
                                                    &nbsp;&nbsp;&nbsp;&nbsp;بلايز</option>
                                                                                        <option value="369">
                                                    &nbsp;&nbsp;&nbsp;&nbsp;بناطيل</option>
                                                                                        <option value="370">
                                                    &nbsp;&nbsp;&nbsp;&nbsp;قمصان</option>
                                                                                        <option value="371">
                                                    &nbsp;&nbsp;&nbsp;&nbsp;بُدل رسميّة</option>
                                                                                        <option value="372">
                                                    &nbsp;&nbsp;&nbsp;&nbsp;شورت</option>
                                                                                        <option value="479">
                                                    &nbsp;&nbsp;&nbsp;&nbsp;ملابس رياضية</option>
                                                                                        <option value="573">
                                                    &nbsp;&nbsp;&nbsp;&nbsp;أحذية</option>
                                                                                        <option value="852">
                                                    &nbsp;&nbsp;&nbsp;&nbsp;جاكيتات</option>
                                                                                        <option value="1901">
                                                    &nbsp;&nbsp;&nbsp;&nbsp;ملابس داخلية</option>
                                                                                        <option value="2009">
                                                    &nbsp;&nbsp;&nbsp;&nbsp;ترنجات</option>
                                                                                        <option value="5694">
                                                    &nbsp;&nbsp;&nbsp;&nbsp;مقاسات كبيرة</option>
                                                                                                                                                                                                                                                                                <option value="199">أطفال</option>
                                                                                        <option value="340">
                                                    &nbsp;&nbsp;&nbsp;&nbsp;ولادي</option>
                                                                                        <option value="341">
                                                    &nbsp;&nbsp;&nbsp;&nbsp;بناتي</option>
                                                                                        <option value="525">
                                                    &nbsp;&nbsp;&nbsp;&nbsp;مواليد</option>
                                                                                        <option value="6213">
                                                    &nbsp;&nbsp;&nbsp;&nbsp;أفرهول - ولادي - أطفال</option>
                                                                                        <option value="6214">
                                                    &nbsp;&nbsp;&nbsp;&nbsp;أفرهول - ولادي</option>
                                                                                                                                                                                                                                                                                <option value="201">إكسسوارات الأزياء</option>
                                                                                        <option value="1780">
                                                    &nbsp;&nbsp;&nbsp;&nbsp;إكسسوارات نسائي</option>
                                                                                        <option value="2601">
                                                    &nbsp;&nbsp;&nbsp;&nbsp;إكسسوارات رجالي</option>
                                                                                                                                                                                                                                                                                <option value="221">إكسسوارات موبايل</option>
                                                                                        <option value="222">
                                                    &nbsp;&nbsp;&nbsp;&nbsp;غلاف موبايل</option>
                                                                                        <option value="350">
                                                    &nbsp;&nbsp;&nbsp;&nbsp;وصلات</option>
                                                                                        <option value="351">
                                                    &nbsp;&nbsp;&nbsp;&nbsp;غلاف سماعات</option>
                                                                                        <option value="352">
                                                    &nbsp;&nbsp;&nbsp;&nbsp;أخرى</option>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <option value="1874">أدوات مكتبية</option>
                                                                                        <option value="5709">
                                                    &nbsp;&nbsp;&nbsp;&nbsp;دفاتر</option>
                                                                                        <option value="5710">
                                                    &nbsp;&nbsp;&nbsp;&nbsp;أقلام</option>
                                                                                        <option value="5711">
                                                    &nbsp;&nbsp;&nbsp;&nbsp;إكسسوارات مكتب</option>
                                                                                        <option value="5712">
                                                    &nbsp;&nbsp;&nbsp;&nbsp;حقائب</option>
                                                                                        <option value="5713">
                                                    &nbsp;&nbsp;&nbsp;&nbsp;أخرى</option>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <option value="2465">مختارات وصلة</option>
                                                                                        <option value="2304">
                                                    &nbsp;&nbsp;&nbsp;&nbsp;إكسسوارات سيارات</option>
                                                                                        <option value="2319">
                                                    &nbsp;&nbsp;&nbsp;&nbsp;أدوات حلاقة</option>
                                                                                        <option value="2336">
                                                    &nbsp;&nbsp;&nbsp;&nbsp;مُعدات</option>
                                                                                        <option value="4550">
                                                    &nbsp;&nbsp;&nbsp;&nbsp;إكسسوارات حيوانات</option>
                                                                                        <option value="5716">
                                                    &nbsp;&nbsp;&nbsp;&nbsp;معدات تصوير</option>
                                                                                        <option value="5717">
                                                    &nbsp;&nbsp;&nbsp;&nbsp;معدات موسيقية</option>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <option value="5681">مستلزمات منزلية</option>
                                                                                        <option value="1117">
                                                    &nbsp;&nbsp;&nbsp;&nbsp;ديكورات</option>
                                                                                        <option value="1634">
                                                    &nbsp;&nbsp;&nbsp;&nbsp;ادوات مكياج</option>
                                                                                        <option value="2352">
                                                    &nbsp;&nbsp;&nbsp;&nbsp;أثاث منزلي</option>
                                                                                        <option value="5188">
                                                    &nbsp;&nbsp;&nbsp;&nbsp;مفارش</option>
                                                                                        <option value="5708">
                                                    &nbsp;&nbsp;&nbsp;&nbsp;أدوات مطبخ</option>
                                                                                                                                                                                                                                                                                <option value="5682">مستلزمات رياضية</option>
                                                                                        <option value="3802">
                                                    &nbsp;&nbsp;&nbsp;&nbsp;معدات رياضية</option>
                                                                                        <option value="4609">
                                                    &nbsp;&nbsp;&nbsp;&nbsp;أدوات مساج</option>
                                                                                        <option value="5714">
                                                    &nbsp;&nbsp;&nbsp;&nbsp;ملابس رياضية</option>
                                                                                        <option value="5715">
                                                    &nbsp;&nbsp;&nbsp;&nbsp;أخرى</option>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <option value="6207">ماركات عالمية</option>
                                                                                        <option value="6208">
                                                    &nbsp;&nbsp;&nbsp;&nbsp;DeFacto</option>
                                                                                        <option value="6209">
                                                    &nbsp;&nbsp;&nbsp;&nbsp;LC Waikiki</option>
                                                                                        <option value="6210">
                                                    &nbsp;&nbsp;&nbsp;&nbsp;Koton</option>
                                                                                        <option value="6211">
                                                    &nbsp;&nbsp;&nbsp;&nbsp;People By Fabrika</option>
                                                                                        <option value="6212">
                                                    &nbsp;&nbsp;&nbsp;&nbsp;Penti</option>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    </select>
                                    <input class="search__input" name="p" placeholder="ابحث في أكثر من 10,000 منتج" aria-label="Site search" type="text" autocomplete="off">
                                    <button class="search__button search__button--type--submit" type="submit">
                                        <svg width="20px" height="20px">
                                            <use xlink:href="https://waslastore.ps//website/images/sprite.svg#search-20"></use>
                                        </svg>
                                    </button>
                                    <div class="search__border"></div>
                                </form>
                                <div class="search__suggestions suggestions suggestions--location--header"></div>
                            </div>
                        </div>
                    </div>
                    <div class="site-header__phone">
                        <div class="site-header__phone-title">خدمة العملاء</div>
                        <div class="site-header__phone-number">059-722-8827</div>
                    </div>
                </div>
                <div class="site-header__nav-panel">
                    <!-- data-sticky-mode - one of [pullToShow, alwaysOnTop] -->
                    <div class="nav-panel nav-panel--sticky" data-sticky-mode="pullToShow" style="">
                        <div class="nav-panel__container container">
                            <div class="nav-panel__row">
                                <div class="nav-panel__departments">
                                    <!-- .departments -->
                                    <div class="departments departments--opens" data-departments-fixed-by=".block-slideshow">
                                        <div class="departments__body" style="height: auto;">
                                            <div class="departments__links-wrapper">
                                                <div class="departments__submenus-container"></div>
                                                <ul class="departments__links">

                                                    <li class="departments__item">
                                                    <a class="departments__item-link " href="/category/197" id="197">
                                                        أزياء نسائي
                                                        <i class="fa fa-arrow-right departments__item-arrow" width="6px" height="9px"></i>


                                                    </a>
                                            <div class="departments__submenu departments__submenu--type--megamenu departments__submenu--size--lg">
                                <!-- .megamenu -->
                                <div class="megamenu  megamenu--departments ">
                                    <div class="megamenu__body">

                                        <div class="row">
                                                                                    <div class="col-4">
                                                    <ul class="megamenu__links megamenu__links--level--0">
                                                        <li class="megamenu__item  megamenu__item--with-submenu ">
                                                            <a href="/category/231">بلايز</a>
                                                                                                                    <ul class="megamenu__links megamenu__links--level--1">
                                                                    <li class="megamenu__item" id="700">
                                                                        <a href="/category/700">تبانات</a>
                                                                    </li>
                                                                </ul>

                                                                                                                    <ul class="megamenu__links megamenu__links--level--1">
                                                                    <li class="megamenu__item" id="5689">
                                                                        <a href="/category/5689">تي شيرت</a>
                                                                    </li>
                                                                </ul>

                                                                                                                    <ul class="megamenu__links megamenu__links--level--1">
                                                                    <li class="megamenu__item" id="5690">
                                                                        <a href="/category/5690">هوديز</a>
                                                                    </li>
                                                                </ul>

                                                                                                                    <ul class="megamenu__links megamenu__links--level--1">
                                                                    <li class="megamenu__item" id="5773">
                                                                        <a href="/category/5773">سواريه</a>
                                                                    </li>
                                                                </ul>

                                                                                                            </li>
                                                    </ul>
                                                </div>
                                                                                    <div class="col-4">
                                                    <ul class="megamenu__links megamenu__links--level--0">
                                                        <li class="megamenu__item  megamenu__item--with-submenu ">
                                                            <a href="/category/237">تنورة</a>
                                                                                                            </li>
                                                    </ul>
                                                </div>
                                                                                    <div class="col-4">
                                                    <ul class="megamenu__links megamenu__links--level--0">
                                                        <li class="megamenu__item  megamenu__item--with-submenu ">
                                                            <a href="/category/243">فساتين</a>
                                                                                                                    <ul class="megamenu__links megamenu__links--level--1">
                                                                    <li class="megamenu__item" id="1911">
                                                                        <a href="/category/1911">بدل عرائس</a>
                                                                    </li>
                                                                </ul>

                                                                                                                    <ul class="megamenu__links megamenu__links--level--1">
                                                                    <li class="megamenu__item" id="5692">
                                                                        <a href="/category/5692">فساتين كاجوال</a>
                                                                    </li>
                                                                </ul>

                                                                                                                    <ul class="megamenu__links megamenu__links--level--1">
                                                                    <li class="megamenu__item" id="5693">
                                                                        <a href="/category/5693">فساتين سهرة</a>
                                                                    </li>
                                                                </ul>

                                                                                                            </li>
                                                    </ul>
                                                </div>
                                                                                    <div class="col-4">
                                                    <ul class="megamenu__links megamenu__links--level--0">
                                                        <li class="megamenu__item  megamenu__item--with-submenu ">
                                                            <a href="/category/299">جاكيتات</a>
                                                                                                            </li>
                                                    </ul>
                                                </div>
                                                                                    <div class="col-4">
                                                    <ul class="megamenu__links megamenu__links--level--0">
                                                        <li class="megamenu__item  megamenu__item--with-submenu ">
                                                            <a href="/category/309">قمصان</a>
                                                                                                            </li>
                                                    </ul>
                                                </div>
                                                                                    <div class="col-4">
                                                    <ul class="megamenu__links megamenu__links--level--0">
                                                        <li class="megamenu__item  megamenu__item--with-submenu ">
                                                            <a href="/category/478">أفرهول</a>
                                                                                                            </li>
                                                    </ul>
                                                </div>
                                                                                    <div class="col-4">
                                                    <ul class="megamenu__links megamenu__links--level--0">
                                                        <li class="megamenu__item  megamenu__item--with-submenu ">
                                                            <a href="/category/504">بناطيل</a>
                                                                                                            </li>
                                                    </ul>
                                                </div>
                                                                                    <div class="col-4">
                                                    <ul class="megamenu__links megamenu__links--level--0">
                                                        <li class="megamenu__item  megamenu__item--with-submenu ">
                                                            <a href="/category/620">أحذية</a>
                                                                                                                    <ul class="megamenu__links megamenu__links--level--1">
                                                                    <li class="megamenu__item" id="5683">
                                                                        <a href="/category/5683">سليبرز</a>
                                                                    </li>
                                                                </ul>

                                                                                                                    <ul class="megamenu__links megamenu__links--level--1">
                                                                    <li class="megamenu__item" id="5684">
                                                                        <a href="/category/5684">سنيكرز</a>
                                                                    </li>
                                                                </ul>

                                                                                                                    <ul class="megamenu__links megamenu__links--level--1">
                                                                    <li class="megamenu__item" id="5685">
                                                                        <a href="/category/5685">كعب عالي</a>
                                                                    </li>
                                                                </ul>

                                                                                                            </li>
                                                    </ul>
                                                </div>
                                                                                    <div class="col-4">
                                                    <ul class="megamenu__links megamenu__links--level--0">
                                                        <li class="megamenu__item  megamenu__item--with-submenu ">
                                                            <a href="/category/704">ترنجات</a>
                                                                                                            </li>
                                                    </ul>
                                                </div>
                                                                                    <div class="col-4">
                                                    <ul class="megamenu__links megamenu__links--level--0">
                                                        <li class="megamenu__item  megamenu__item--with-submenu ">
                                                            <a href="/category/744">شورت</a>
                                                                                                            </li>
                                                    </ul>
                                                </div>
                                                                                    <div class="col-4">
                                                    <ul class="megamenu__links megamenu__links--level--0">
                                                        <li class="megamenu__item  megamenu__item--with-submenu ">
                                                            <a href="/category/794">ملابس حوامل</a>
                                                                                                            </li>
                                                    </ul>
                                                </div>
                                                                                    <div class="col-4">
                                                    <ul class="megamenu__links megamenu__links--level--0">
                                                        <li class="megamenu__item  megamenu__item--with-submenu ">
                                                            <a href="/category/1040">عبايات</a>
                                                                                                            </li>
                                                    </ul>
                                                </div>
                                                                                    <div class="col-4">
                                                    <ul class="megamenu__links megamenu__links--level--0">
                                                        <li class="megamenu__item  megamenu__item--with-submenu ">
                                                            <a href="/category/1804">ملابس رياضية</a>
                                                                                                            </li>
                                                    </ul>
                                                </div>
                                                                                    <div class="col-4">
                                                    <ul class="megamenu__links megamenu__links--level--0">
                                                        <li class="megamenu__item  megamenu__item--with-submenu ">
                                                            <a href="/category/1826">ملابس داخلية</a>
                                                                                                                    <ul class="megamenu__links megamenu__links--level--1">
                                                                    <li class="megamenu__item" id="1902">
                                                                        <a href="/category/1902">ملابس داخلي</a>
                                                                    </li>
                                                                </ul>

                                                                                                                    <ul class="megamenu__links megamenu__links--level--1">
                                                                    <li class="megamenu__item" id="5686">
                                                                        <a href="/category/5686">مايوهات سباحة</a>
                                                                    </li>
                                                                </ul>

                                                                                                                    <ul class="megamenu__links megamenu__links--level--1">
                                                                    <li class="megamenu__item" id="5687">
                                                                        <a href="/category/5687">قمصان نوم</a>
                                                                    </li>
                                                                </ul>

                                                                                                            </li>
                                                    </ul>
                                                </div>
                                                                                    <div class="col-4">
                                                    <ul class="megamenu__links megamenu__links--level--0">
                                                        <li class="megamenu__item  megamenu__item--with-submenu ">
                                                            <a href="/category/5695">مقاسات كبيرة</a>
                                                                                                            </li>
                                                    </ul>
                                                </div>
                                                                                    <div class="col-4">
                                                    <ul class="megamenu__links megamenu__links--level--0">
                                                        <li class="megamenu__item  megamenu__item--with-submenu ">
                                                            <a href="/category/6205">أطقم</a>
                                                                                                            </li>
                                                    </ul>
                                                </div>
                                                                            </div>
                                    </div>
                                </div>
                                <!-- .megamenu / end -->
                            </div>
                                    </li>



                            <li class="departments__item">
                        <a class="departments__item-link " href="/category/198" id="198">
                            أزياء رجالي
                            <i class="fa fa-arrow-right departments__item-arrow" width="6px" height="9px"></i>

                        </a>
                                            <div class="departments__submenu departments__submenu--type--megamenu departments__submenu--size--sm">
                                <!-- .megamenu -->
                                <div class="megamenu  megamenu--departments ">
                                    <div class="megamenu__body">

                                        <div class="row">
                                            <div class="col-12">
                                                <ul class="megamenu__links megamenu__links--level--0">
                                                                                                                                                        <li class="megamenu__item ">
                                                                <a href="/category/368">بلايز</a>
                                                            </li>
                                                                                                                                                                                                        <li class="megamenu__item ">
                                                                <a href="/category/369">بناطيل</a>
                                                            </li>
                                                                                                                                                                                                        <li class="megamenu__item ">
                                                                <a href="/category/370">قمصان</a>
                                                            </li>
                                                                                                                                                                                                        <li class="megamenu__item ">
                                                                <a href="/category/371">بُدل رسميّة</a>
                                                            </li>
                                                                                                                                                                                                        <li class="megamenu__item ">
                                                                <a href="/category/372">شورت</a>
                                                            </li>
                                                                                                                                                                                                        <li class="megamenu__item ">
                                                                <a href="/category/479">ملابس رياضية</a>
                                                            </li>
                                                                                                                                                                                                        <li class="megamenu__item ">
                                                                <a href="/category/573">أحذية</a>
                                                            </li>
                                                                                                                                                                                                        <li class="megamenu__item ">
                                                                <a href="/category/852">جاكيتات</a>
                                                            </li>
                                                                                                                                                                                                        <li class="megamenu__item ">
                                                                <a href="/category/1901">ملابس داخلية</a>
                                                            </li>
                                                                                                                                                                                                        <li class="megamenu__item ">
                                                                <a href="/category/2009">ترنجات</a>
                                                            </li>
                                                                                                                                                                                                        <li class="megamenu__item ">
                                                                <a href="/category/5694">مقاسات كبيرة</a>
                                                            </li>
                                                                                                                                            </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                    </div></li>



                            <li class="departments__item">
                        <a class="departments__item-link " href="/category/199" id="199">
                            أطفال
                            <i class="fa fa-arrow-right departments__item-arrow" width="6px" height="9px"></i>

                        </a>
                                            <div class="departments__submenu departments__submenu--type--megamenu departments__submenu--size--sm">
                                <!-- .megamenu -->
                                <div class="megamenu  megamenu--departments ">
                                    <div class="megamenu__body">

                                        <div class="row">
                                            <div class="col-12">
                                                <ul class="megamenu__links megamenu__links--level--0">
                                                                                                                                                        <li class="megamenu__item ">
                                                                <a href="/category/340">ولادي</a>
                                                            </li>
                                                                                                                                                                                                        <li class="megamenu__item ">
                                                                <a href="/category/341">بناتي</a>
                                                            </li>
                                                                                                                                                                                                        <li class="megamenu__item ">
                                                                <a href="/category/525">مواليد</a>
                                                            </li>
                                                                                                                                                                                                        <li class="megamenu__item ">
                                                                <a href="/category/6213">أفرهول - ولادي - أطفال</a>
                                                            </li>
                                                                                                                                                                                                        <li class="megamenu__item ">
                                                                <a href="/category/6214">أفرهول - ولادي</a>
                                                            </li>
                                                                                                                                            </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                    </div></li>



                            <li class="departments__item">
                        <a class="departments__item-link " href="/category/201" id="201">
                            إكسسوارات الأزياء
                            <i class="fa fa-arrow-right departments__item-arrow" width="6px" height="9px"></i>

                        </a>
                                            <div class="departments__submenu departments__submenu--type--megamenu departments__submenu--size--sm">
                                <!-- .megamenu -->
                                <div class="megamenu  megamenu--departments ">
                                    <div class="megamenu__body">

                                        <div class="row">
                                            <div class="col-12">
                                                <ul class="megamenu__links megamenu__links--level--0">
                                                                                                                                                        <li class="megamenu__item ">
                                                                <a href="/category/1780">إكسسوارات نسائي</a>
                                                            </li>
                                                                                                                                                                                                        <li class="megamenu__item ">
                                                                <a href="/category/2601">إكسسوارات رجالي</a>
                                                            </li>
                                                                                                                                            </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                    </div></li>



                            <li class="departments__item">
                        <a class="departments__item-link " href="/category/221" id="221">
                            إكسسوارات موبايل
                            <i class="fa fa-arrow-right departments__item-arrow" width="6px" height="9px"></i>

                        </a>
                                            <div class="departments__submenu departments__submenu--type--megamenu departments__submenu--size--sm">
                                <!-- .megamenu -->
                                <div class="megamenu  megamenu--departments ">
                                    <div class="megamenu__body">

                                        <div class="row">
                                            <div class="col-12">
                                                <ul class="megamenu__links megamenu__links--level--0">
                                                                                                                                                        <li class="megamenu__item ">
                                                                <a href="/category/222">غلاف موبايل</a>
                                                            </li>
                                                                                                                                                                                                        <li class="megamenu__item ">
                                                                <a href="/category/350">وصلات</a>
                                                            </li>
                                                                                                                                                                                                        <li class="megamenu__item ">
                                                                <a href="/category/351">غلاف سماعات</a>
                                                            </li>
                                                                                                                                                                                                        <li class="megamenu__item ">
                                                                <a href="/category/352">أخرى</a>
                                                            </li>
                                                                                                                                            </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                    </div></li>

                            <li class="departments__item">
                        <a class="departments__item-link " href="/category/1874" id="1874">
                            أدوات مكتبية
                            <i class="fa fa-arrow-right departments__item-arrow" width="6px" height="9px"></i>

                        </a>
                                            <div class="departments__submenu departments__submenu--type--megamenu departments__submenu--size--sm">
                                <!-- .megamenu -->
                                <div class="megamenu  megamenu--departments ">
                                    <div class="megamenu__body">

                                        <div class="row">
                                            <div class="col-12">
                                                <ul class="megamenu__links megamenu__links--level--0">
                                                                                                                                                        <li class="megamenu__item ">
                                                                <a href="/category/5709">دفاتر</a>
                                                            </li>
                                                                                                                                                                                                        <li class="megamenu__item ">
                                                                <a href="/category/5710">أقلام</a>
                                                            </li>
                                                                                                                                                                                                        <li class="megamenu__item ">
                                                                <a href="/category/5711">إكسسوارات مكتب</a>
                                                            </li>
                                                                                                                                                                                                        <li class="megamenu__item ">
                                                                <a href="/category/5712">حقائب</a>
                                                            </li>
                                                                                                                                                                                                        <li class="megamenu__item ">
                                                                <a href="/category/5713">أخرى</a>
                                                            </li>
                                                                                                                                            </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                    </div></li>

                            <li class="departments__item">
                        <a class="departments__item-link " href="/category/2465" id="2465">
                            مختارات وصلة
                            <i class="fa fa-arrow-right departments__item-arrow" width="6px" height="9px"></i>

                        </a>
                                            <div class="departments__submenu departments__submenu--type--megamenu departments__submenu--size--sm">
                                <!-- .megamenu -->
                                <div class="megamenu  megamenu--departments ">
                                    <div class="megamenu__body">

                                        <div class="row">
                                            <div class="col-12">
                                                <ul class="megamenu__links megamenu__links--level--0">
                                                                                                                                                        <li class="megamenu__item ">
                                                                <a href="/category/2304">إكسسوارات سيارات</a>
                                                            </li>
                                                                                                                                                                                                        <li class="megamenu__item ">
                                                                <a href="/category/2319">أدوات حلاقة</a>
                                                            </li>
                                                                                                                                                                                                        <li class="megamenu__item ">
                                                                <a href="/category/2336">مُعدات</a>
                                                            </li>
                                                                                                                                                                                                        <li class="megamenu__item ">
                                                                <a href="/category/4550">إكسسوارات حيوانات</a>
                                                            </li>
                                                                                                                                                                                                        <li class="megamenu__item ">
                                                                <a href="/category/5716">معدات تصوير</a>
                                                            </li>
                                                                                                                                                                                                        <li class="megamenu__item ">
                                                                <a href="/category/5717">معدات موسيقية</a>
                                                            </li>
                                                                                                                                            </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                    </div></li>

                            <li class="departments__item">
                        <a class="departments__item-link " href="/category/5681" id="5681">
                            مستلزمات منزلية
                            <i class="fa fa-arrow-right departments__item-arrow" width="6px" height="9px"></i>

                        </a>
                                            <div class="departments__submenu departments__submenu--type--megamenu departments__submenu--size--sm">
                                <!-- .megamenu -->
                                <div class="megamenu  megamenu--departments ">
                                    <div class="megamenu__body">

                                        <div class="row">
                                            <div class="col-12">
                                                <ul class="megamenu__links megamenu__links--level--0">
                                                                                                                                                        <li class="megamenu__item ">
                                                                <a href="/category/1117">ديكورات</a>
                                                            </li>
                                                                                                                                                                                                        <li class="megamenu__item ">
                                                                <a href="/category/1634">ادوات مكياج</a>
                                                            </li>
                                                                                                                                                                                                        <li class="megamenu__item ">
                                                                <a href="/category/2352">أثاث منزلي</a>
                                                            </li>
                                                                                                                                                                                                        <li class="megamenu__item ">
                                                                <a href="/category/5188">مفارش</a>
                                                            </li>
                                                                                                                                                                                                        <li class="megamenu__item ">
                                                                <a href="/category/5708">أدوات مطبخ</a>
                                                            </li>
                                                                                                                                            </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                    </div></li>

                            <li class="departments__item">
                        <a class="departments__item-link " href="/category/5682" id="5682">
                            مستلزمات رياضية
                            <i class="fa fa-arrow-right departments__item-arrow" width="6px" height="9px"></i>

                        </a>
                                            <div class="departments__submenu departments__submenu--type--megamenu departments__submenu--size--sm">
                                <!-- .megamenu -->
                                <div class="megamenu  megamenu--departments ">
                                    <div class="megamenu__body">

                                        <div class="row">
                                            <div class="col-12">
                                                <ul class="megamenu__links megamenu__links--level--0">
                                                                                                                                                        <li class="megamenu__item ">
                                                                <a href="/category/3802">معدات رياضية</a>
                                                            </li>
                                                                                                                                                                                                        <li class="megamenu__item ">
                                                                <a href="/category/4609">أدوات مساج</a>
                                                            </li>
                                                                                                                                                                                                        <li class="megamenu__item ">
                                                                <a href="/category/5714">ملابس رياضية</a>
                                                            </li>
                                                                                                                                                                                                        <li class="megamenu__item ">
                                                                <a href="/category/5715">أخرى</a>
                                                            </li>
                                                                                                                                            </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                    </div></li>


                            <li class="departments__item">
                        <a class="departments__item-link " href="/category/6207" id="6207">
                            ماركات عالمية
                            <i class="fa fa-arrow-right departments__item-arrow" width="6px" height="9px"></i>

                        </a>
                                            <div class="departments__submenu departments__submenu--type--megamenu departments__submenu--size--sm">
                                <!-- .megamenu -->
                                <div class="megamenu  megamenu--departments ">
                                    <div class="megamenu__body">

                                        <div class="row">
                                            <div class="col-12">
                                                <ul class="megamenu__links megamenu__links--level--0">
                                                                                                                                                        <li class="megamenu__item ">
                                                                <a href="/category/6208">DeFacto</a>
                                                            </li>
                                                                                                                                                                                                        <li class="megamenu__item ">
                                                                <a href="/category/6209">LC Waikiki</a>
                                                            </li>
                                                                                                                                                                                                        <li class="megamenu__item ">
                                                                <a href="/category/6210">Koton</a>
                                                            </li>
                                                                                                                                                                                                        <li class="megamenu__item ">
                                                                <a href="/category/6211">People By Fabrika</a>
                                                            </li>
                                                                                                                                                                                                        <li class="megamenu__item ">
                                                                <a href="/category/6212">Penti</a>
                                                            </li>
                                                                                                                                            </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                    </div></li>

                                                </ul>
                                            </div>
                                        </div>
                                        <button class="departments__button">
                                            <i class="fa fa-bars fa-1x departments__button-icon"  width="18px" height="14px"  ></i>
                                            تسوق حسب الأقسام
                                            <i class="fa fa-arrow-circle-down fa-1x departments__button-arrow"  width="9px" height="6px"></i>
                                                </button>
                                    </div>
                                    <!-- .departments / end -->
                                </div>
                                <!-- .nav-links -->
                                <div class="nav-panel__nav-links nav-links">
                                    <ul class="nav-links__list">
                                        <li class="nav-links__item  nav-links__item--has-submenu ">
                                            <a class="nav-links__item-link" href="{{route('NoMe.home')}}">
                                                <div class="nav-links__item-body">
                                                    الرئيسية
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-links__item  nav-links__item--has-submenu ">
                                            <a class="nav-links__item-link" href="{{route('NoMe.products')}}">
                                                <div class="nav-links__item-body">
                                                    المنتجات
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-links__item  nav-links__item--has-submenu ">
                                            <a class="nav-links__item-link" href="{{route('NoMe.about')}}">
                                                <div class="nav-links__item-body">
                                                    من نحن
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-links__item  nav-links__item--has-submenu ">
                                            <a class="nav-links__item-link" href="{{route('NoMe.contact')}}">
                                                <div class="nav-links__item-body">
                                                    تواصل معنا
                                                </div>
                                            </a>
                                        </li>
                                        <!-- <li class="nav-links__item  nav-links__item--has-submenu ">
                                            <a class="nav-links__item-link" href="/usage-policy">
                                                <div class="nav-links__item-body">
                                                    سياسة الاستخدام
                                                </div>
                                            </a>
                                        </li> -->

                                    </ul>
                                </div>
                                <!-- .nav-links / end -->
                                <div class="nav-panel__indicators" >
                                    <div class="indicator" style="margin-left: 10px;">
                                        <a href="https://www.facebook.com/NO.ME888/" style="color: #f5a1d1"  class="indicator__button">

                                            <i class="fa fa-facebook-square fa-1x" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                    <div class="indicator " style="margin-left: 10px;">
                                        <a href="https://www.instagram.com/no.me.88/?utm_medium=copy_link" style="color: #f5a1d1" class="indicator__button">

                                            <i class="fa fa-instagram" aria-hidden="true"></i>
                                        </a>

                                    </div>
                                    <div class="indicator " style="margin-left: 10px;">
                                        <a href="https://wa.me/970597228827" style="color: #f5a1d1" class="indicator__button">

                                            <i class="fa fa-whatsapp" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
