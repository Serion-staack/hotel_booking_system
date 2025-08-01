<header class="page-header row">
    <div class="logo-wrapper d-flex align-items-center col-auto"><a href="index.html"><img class="light-logo img-fluid" src="{{asset('assets/images/logo/logo1.png')}}" alt="logo"/><img class="dark-logo img-fluid" src="{{asset('assets/images/logo/logo-dark.png')}}" alt="logo"/></a><a class="close-btn toggle-sidebar" href="javascript:void(0)">
            <svg class="svg-color">
                <use href="https://admin.pixelstrap.net/admiro/assets/svg/iconly-sprite.svg#Category"></use>
            </svg></a></div>
    <div class="page-main-header col">
        <div class="header-left">
            <form class="form-inline search-full col" action="#" method="get">
                <div class="form-group w-100">
                    <div class="Typeahead Typeahead--twitterUsers">
                        <div class="u-posRelative">
                            <input class="demo-input Typeahead-input form-control-plaintext w-100" type="text" placeholder="Search Admiro .." name="q" title="" autofocus="autofocus"/>
                            <div class="spinner-border Typeahead-spinner" role="status"><span class="sr-only">Loading...</span></div><i class="close-search" data-feather="x"></i>
                        </div>
                        <div class="Typeahead-menu"></div>
                    </div>
                </div>
            </form>
            <div class="form-group-header d-lg-block d-none">
                <div class="Typeahead Typeahead--twitterUsers">
                    <div class="u-posRelative d-flex align-items-center">
                        <input class="demo-input py-0 Typeahead-input form-control-plaintext w-100" type="text" placeholder="Type to Search..." name="q" title=""/><i class="search-bg iconly-Search icli"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="nav-right">
            <ul class="header-right">
                <li class="custom-dropdown">
                    <div class="translate_wrapper">
                        <div class="current_lang"><a class="lang" href="javascript:void(0)"><i class="flag-icon flag-icon-us"></i>
                                <h6 class="lang-txt f-w-700">ENG</h6></a></div>
                        <ul class="custom-menu profile-menu language-menu py-0 more_lang">
                            <li class="d-block"><a class="lang" href="#" data-value="English"><i class="flag-icon flag-icon-us"></i>
                                    <div class="lang-txt">English</div></a></li>
                            <li class="d-block"><a class="lang" href="#" data-value="fr"><i class="flag-icon flag-icon-fr"></i>
                                    <div class="lang-txt">Français</div></a></li>
                            <li class="d-block"><a class="lang" href="#" data-value="es"><i class="flag-icon flag-icon-es"></i>
                                    <div class="lang-txt">Español</div></a></li>
                        </ul>
                    </div>
                </li>
                <li class="search d-lg-none d-flex"> <a href="javascript:void(0)">
                        <svg>
                            <use href="https://admin.pixelstrap.net/admiro/assets/svg/iconly-sprite.svg#Search"></use>
                        </svg></a></li>
                <li>  <a class="dark-mode" href="javascript:void(0)">
                        <svg>
                            <use href="https://admin.pixelstrap.net/admiro/assets/svg/iconly-sprite.svg#moondark"></use>
                        </svg></a></li>
                <li class="custom-dropdown"><a href="javascript:void(0)">
                        <svg>
                            <use href="https://admin.pixelstrap.net/admiro/assets/svg/iconly-sprite.svg#cart-icon"></use>
                        </svg></a><span class="badge rounded-pill badge-primary">2</span>
                    <div class="custom-menu cart-dropdown py-0 overflow-hidden">
                        <h3 class="title dropdown-title">Cart</h3>
                        <ul class="pb-0">
                            <li>
                                <div class="d-flex"><img class="img-fluid b-r-5 me-3 img-60" src="{{asset('assets/images/dashboard-2/1.png')}}" alt=""/>
                                    <div class="flex-grow-1"><span class="f-w-600">Watch multicolor</span>
                                        <div class="qty-box">
                                            <div class="input-group"><span class="input-group-prepend">
                                <button class="btn quantity-left-minus" type="button" data-type="minus" data-field="">-</button></span>
                                                <input class="form-control input-number" type="text" name="quantity" value="1"/><span class="input-group-prepend">
                                <button class="btn quantity-right-plus" type="button" data-type="plus" data-field="">+</button></span>
                                            </div>
                                        </div>
                                        <h6 class="font-primary">$500</h6>
                                    </div>
                                    <div class="close-circle"><a class="bg-danger" href="#"><i data-feather="x"></i></a></div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex"><img class="img-fluid b-r-5 me-3 img-60" src="{{asset('assets/images/dashboard-2/2.png')}}" alt=""/>
                                    <div class="flex-grow-1"><span class="f-w-600">Airpods</span>
                                        <div class="qty-box">
                                            <div class="input-group"><span class="input-group-prepend">
                                <button class="btn quantity-left-minus" type="button" data-type="minus" data-field="">-</button></span>
                                                <input class="form-control input-number" type="text" name="quantity" value="1"/><span class="input-group-prepend">
                                <button class="btn quantity-right-plus" type="button" data-type="plus" data-field="">+</button></span>
                                            </div>
                                        </div>
                                        <h6 class="font-primary">$500.00</h6>
                                    </div>
                                    <div class="close-circle"><a class="bg-danger" href="#"><i data-feather="x"></i></a></div>
                                </div>
                            </li>
                            <li class="total">
                                <h6 class="mb-0">Order Total : <span class="f-w-600">$1000.00</span></h6>
                            </li>
                            <li class="text-center"><a class="d-block mb-3 view-cart f-w-700 text-primary" href="cart.html">Go to your cart</a><a class="btn btn-primary view-checkout text-white" href="checkout.html">Checkout</a></li>
                        </ul>
                    </div>
                </li>
                <li class="custom-dropdown"><a href="javascript:void(0)">
                        <svg>
                            <use href="https://admin.pixelstrap.net/admiro/assets/svg/iconly-sprite.svg#notification"></use>
                        </svg></a><span class="badge rounded-pill badge-primary">4</span>
                    <div class="custom-menu notification-dropdown py-0 overflow-hidden">
                        <h3 class="title bg-primary-light dropdown-title">Notification <span class="font-primary">View all</span></h3>
                        <ul class="activity-timeline">
                            <li class="d-flex align-items-start">
                                <div class="activity-line"></div>
                                <div class="activity-dot-primary"></div>
                                <div class="flex-grow-1">
                                    <h6 class="f-w-600 font-primary">30-04-2024<span>Today</span><span class="circle-dot-primary float-end">
                            <svg class="circle-color">
                              <use href="https://admin.pixelstrap.net/admiro/assets/svg/iconly-sprite.svg#circle"></use>
                            </svg></span></h6>
                                    <h5>Alice Goodwin</h5>
                                    <p class="mb-0">Fashion should be fun. It shouldn't be labelled intellectual.</p>
                                </div>
                            </li>
                            <li class="d-flex align-items-start">
                                <div class="activity-dot-secondary"></div>
                                <div class="flex-grow-1">
                                    <h6 class="f-w-600 font-secondary">28-06-2024<span>1 hour ago</span><span class="float-end circle-dot-secondary">
                                          <svg class="circle-color">
                                            <use href="https://admin.pixelstrap.net/admiro/assets/svg/iconly-sprite.svg#circle"></use>
                                          </svg></span></h6>
                                    <h5>Herry Venter</h5>
                                    <p>I am convinced that there can be luxury in simplicity.</p>
                                </div>
                            </li>
                            <li class="d-flex align-items-start">
                                <div class="activity-dot-primary"></div>
                                <div class="flex-grow-1">
                                    <h6 class="f-w-600 font-primary">04-08-2024<span>Today</span><span class="float-end circle-dot-primary">
                                          <svg class="circle-color">
                                            <use href="https://admin.pixelstrap.net/admiro/assets/svg/iconly-sprite.svg#circle"></use>
                                          </svg></span></h6>
                                    <h5>Loain Deo</h5>
                                    <p>I feel that things happen for open new opportunities.</p>
                                </div>
                            </li>
                            <li class="d-flex align-items-start">
                                <div class="activity-dot-secondary"></div>
                                <div class="flex-grow-1">
                                    <h6 class="f-w-600 font-secondary">12-11-2024<span>Yesterday</span><span class="float-end circle-dot-secondary">
                                          <svg class="circle-color">
                                            <use href="https://admin.pixelstrap.net/admiro/assets/svg/iconly-sprite.svg#circle"></use>
                                          </svg></span></h6>
                                    <h5>Fenter Jessy</h5>
                                    <p>Sometimes the simplest things are the most profound.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li><a class="full-screen" href="javascript:void(0)">
                        <svg>
                            <use href="https://admin.pixelstrap.net/admiro/assets/svg/iconly-sprite.svg#scanfull"></use>
                        </svg></a></li>
                <li class="custom-dropdown"><a href="javascript:void(0)">
                        <svg>
                            <use href="https://admin.pixelstrap.net/admiro/assets/svg/iconly-sprite.svg#bookmark"></use>
                        </svg></a>
                    <div class="custom-menu bookmark-dropdown py-0 overflow-hidden">
                        <h3 class="title bg-primary-light dropdown-title">Bookmark</h3>
                        <ul>
                            <li>
                                <form class="mb-0">
                                    <div class="input-group">
                                        <input class="form-control" type="text" placeholder="Search Bookmark..."/><span class="input-group-text">
                            <svg class="svg-color">
                              <use href="https://admin.pixelstrap.net/admiro/assets/svg/iconly-sprite.svg#Search"></use>
                            </svg></span>
                                    </div>
                                </form>
                            </li>
                            <li class="d-flex align-items-center">
                                <div class="flex-shrink-0 me-2 btn-activity-primary"><a href="index.html">
                                        <svg class="svg-color">
                                            <use href="https://admin.pixelstrap.net/admiro/assets/svg/iconly-sprite.svg#cube"></use>
                                        </svg></a></div>
                                <div class="d-flex justify-content-between align-items-center w-100"><a href="index.html">Dashboard</a>
                                    <svg class="svg-color icon-star">
                                        <use href="https://admin.pixelstrap.net/admiro/assets/svg/iconly-sprite.svg#star"></use>
                                    </svg>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <div class="flex-shrink-0 me-2 btn-activity-secondary"><a href="to-do.html">
                                        <svg class="svg-color">
                                            <use href="https://admin.pixelstrap.net/admiro/assets/svg/iconly-sprite.svg#check"></use>
                                        </svg></a></div>
                                <div class="d-flex justify-content-between align-items-center w-100"><a href="to-do.html">To-do</a>
                                    <svg class="svg-color icon-star">
                                        <use href="https://admin.pixelstrap.net/admiro/assets/svg/iconly-sprite.svg#star"></use>
                                    </svg>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <div class="flex-shrink-0 me-2 btn-activity-danger"><a href="apex_chart.html">
                                        <svg class="svg-color">
                                            <use href="https://admin.pixelstrap.net/admiro/assets/svg/iconly-sprite.svg#pie"></use>
                                        </svg></a></div>
                                <div class="d-flex justify-content-between align-items-center w-100"><a href="apex_chart.html">Chart</a>
                                    <svg class="svg-color icon-star">
                                        <use href="https://admin.pixelstrap.net/admiro/assets/svg/iconly-sprite.svg#star"></use>
                                    </svg>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="cloud-design"><a class="cloud-mode">
                        <svg class="climacon climacon_cloudDrizzle" id="cloudDrizzle" version="1.1" viewBox="15 15 70 70">
                            <g class="climacon_iconWrap climacon_iconWrap-cloudDrizzle">
                                <g class="climacon_wrapperComponent climacon_wrapperComponent-drizzle">
                                    <path class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-left" d="M42.001,53.644c1.104,0,2,0.896,2,2v3.998c0,1.105-0.896,2-2,2c-1.105,0-2.001-0.895-2.001-2v-3.998C40,54.538,40.896,53.644,42.001,53.644z"></path>
                                    <path class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-middle" d="M49.999,53.644c1.104,0,2,0.896,2,2v4c0,1.104-0.896,2-2,2s-1.998-0.896-1.998-2v-4C48.001,54.54,48.896,53.644,49.999,53.644z"></path>
                                    <path class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-right" d="M57.999,53.644c1.104,0,2,0.896,2,2v3.998c0,1.105-0.896,2-2,2c-1.105,0-2-0.895-2-2v-3.998C55.999,54.538,56.894,53.644,57.999,53.644z"></path>
                                </g>
                                <g class="climacon_wrapperComponent climacon_wrapperComponent-cloud">
                                    <path class="climacon_component climacon_component-stroke climacon_component-stroke_cloud" d="M63.999,64.944v-4.381c2.387-1.386,3.998-3.961,3.998-6.92c0-4.418-3.58-8-7.998-8c-1.603,0-3.084,0.481-4.334,1.291c-1.232-5.316-5.973-9.29-11.664-9.29c-6.628,0-11.999,5.372-11.999,12c0,3.549,1.55,6.729,3.998,8.926v4.914c-4.776-2.769-7.998-7.922-7.998-13.84c0-8.836,7.162-15.999,15.999-15.999c6.004,0,11.229,3.312,13.965,8.203c0.664-0.113,1.336-0.205,2.033-0.205c6.627,0,11.998,5.373,11.998,12C71.997,58.864,68.655,63.296,63.999,64.944z"></path>
                                </g>
                            </g>
                        </svg>
                        <h3>15</h3></a></li>
                <li class="profile-nav custom-dropdown">
                    <div class="user-wrap">
                        <div class="user-img"><img src="{{asset('assets/images/profile.png')}}" alt="user"/></div>
                        <div class="user-content">
                            <h6>Ava Davis</h6>
                            <p class="mb-0">Admin<i class="fa-solid fa-chevron-down"></i></p>
                        </div>
                    </div>
                    <div class="custom-menu overflow-hidden">
                        <ul class="profile-body">
                            <li class="d-flex">
                                <svg class="svg-color">
                                    <use href="https://admin.pixelstrap.net/admiro/assets/svg/iconly-sprite.svg#Profile"></use>
                                </svg><a class="ms-2" href="user-profile.html">Account</a>
                            </li>
                            <li class="d-flex">
                                <svg class="svg-color">
                                    <use href="https://admin.pixelstrap.net/admiro/assets/svg/iconly-sprite.svg#Message"></use>
                                </svg><a class="ms-2" href="letter-box.html">Inbox</a>
                            </li>
                            <li class="d-flex">
                                <svg class="svg-color">
                                    <use href="https://admin.pixelstrap.net/admiro/assets/svg/iconly-sprite.svg#Document"></use>
                                </svg><a class="ms-2" href="to-do.html">Task</a>
                            </li>
                            <li class="d-flex">
                                <svg class="svg-color">
                                    <use href="https://admin.pixelstrap.net/admiro/assets/svg/iconly-sprite.svg#Login"></use>
                                </svg>

                                <form method="POST" action="{{route('logout')}}">
                                    @csrf
                                    <button type="submit" class="btn btn-primary">Log Out</button>
                                </form>

                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</header>
