@extends('dashboard.layouts.app')

@section('title','User Profile')

@section('content')



<!-- Page sidebar end-->
<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6 col-12">
                    <h2>User Profile</h2>
                </div>
                <div class="col-sm-6 col-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="iconly-Home icli svg-color"></i></a></li>
                        <li class="breadcrumb-item">Users</li>
                        <li class="breadcrumb-item active">User Profile</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="user-profile">
            <div class="row">
                <!-- user profile first-style start-->
                <div class="col-sm-12">
                    <div class="card hovercard text-center">
                        <div class="cardheader"></div>
                        <div class="user-image">
                            <div class="avatar"><img alt="" src="{{asset('assets/images/user/7.jpg')}}"></div>
                            <div class="icon-wrapper"><i class="iconly-Edit icli"></i></div>
                        </div>
                        <div class="info">
                            <div class="row">
                                <div class="col-sm-6 col-lg-4 order-sm-1 order-xl-0">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="ttl-info text-start">
                                                <h6><i class="fa-solid fa-envelope"></i>   Email</h6><span>Admindjali@yahoo.com</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="ttl-info text-start">
                                                <h6><i class="fa-solid fa-calendar"></i>   Birthday</h6><span>02 January 2001</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-lg-4 order-sm-0 order-xl-1">
                                    <div class="user-designation">
                                        <div class="title"><a target="_blank" href="#">Admin Djali</a></div>
                                        <div class="desc">Developer</div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-4 order-sm-2 order-xl-2">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="ttl-info text-start">
                                                <h6><i class="fa-solid fa-phone"></i>   Contact Us</h6><span>Albania +355-688-797-135 </span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="ttl-info text-start">
                                                <h6><i class="fa-solid fa-location-arrow"></i>   Location</h6><span>Durres Albania</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="social-media">
                                <ul class="list-inline">
                                    <li class="list-inline-item"><a href="https://www.facebook.com/" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li class="list-inline-item"><a href="https://accounts.google.com/" target="_blank"><i class="fa-brands fa-google-plus-g"></i></a></li>
                                    <li class="list-inline-item"><a href="https://twitter.com/" target="_blank"><i class="fa-brands fa-twitter"></i></a></li>
                                    <li class="list-inline-item"><a href="https://www.instagram.com/" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                                    <li class="list-inline-item"><a href="https://rss.app/" target="_blank"><i class="fa-solid fa-rss"></i></a></li>
                                </ul>
                            </div>
                            <div class="follow">
                                <div class="row">
                                    <div class="col-6 text-md-end border-right">
                                        <div class="follow-num counter">25869</div><span>Follower</span>
                                    </div>
                                    <div class="col-6 text-md-start">
                                        <div class="follow-num counter">659887</div><span>Following</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- user profile first-style end-->
                <!-- user profile second-style start-->
                <div class="col-sm-12">
                    <div class="card">
                        <div class="profile-img-style">
                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="d-flex"><img class="img-thumbnail rounded-circle me-3" src="{{asset('assets/images/user/7.jpg')}}" alt="Generic placeholder image">
                                        <div class="flex-grow-1 align-self-center">
                                            <h3 class="mt-0 user-name">JOHAN DIO</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 align-self-center">
                                    <div class="float-sm-end f-w-600"><small>10 Hours ago</small></div>
                                </div>
                            </div>
                            <hr>
                            <p>you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.</p>
                            <div class="img-container">
                                <div class="my-gallery" id="aniimated-thumbnials" itemscope="">
                                    <figure itemprop="associatedMedia" itemscope=""><a href="../assets/images/other-images/profile-style-img3.png" itemprop="contentUrl" data-size="1600x950"><img class="img-fluid rounded" src="{{asset('assets/images/other-images/profile-style-img3.png')}}" itemprop="thumbnail" alt="gallery"></a>
                                        <figcaption itemprop="caption description">Image caption  1</figcaption>
                                    </figure>
                                </div>
                            </div>
                            <div class="like-comment">
                                <ul class="list-inline">
                                    <li class="list-inline-item border-right pe-3">
                                        <label class="m-0"><a href="#"><i class="fa-solid fa-heart"></i></a>  Like</label><span class="ms-2 counter">2659</span>
                                    </li>
                                    <li class="list-inline-item ms-2">
                                        <label class="m-0"><a href="#"><i class="fa-solid fa-comment"></i></a>  Comment</label><span class="ms-2 counter">569</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- user profile second-style end-->
                <!-- user profile third-style start-->
                <div class="col-sm-12">
                    <div class="card">
                        <div class="profile-img-style">
                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="d-flex"><img class="img-thumbnail rounded-circle me-3" src="{{asset('assets/images/user/7.jpg')}}" alt="Generic placeholder image">
                                        <div class="flex-grow-1 align-self-center">
                                            <h3 class="mt-0 user-name">JOHAN DIO</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 align-self-center">
                                    <div class="float-sm-end f-w-600"><small>10 Hours ago</small></div>
                                </div>
                            </div>
                            <hr>
                            <p>you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.</p>
                            <div class="row mt-4 pictures my-gallery" id="aniimated-thumbnials-2" itemscope="">
                                <figure class="col-sm-6" itemprop="associatedMedia" itemscope=""><a href="../assets/images/other-images/profile-style-img3.png" itemprop="contentUrl" data-size="1600x950"><img class="img-fluid rounded" src="{{asset('assets/images/other-images/profile-style-img.png')}}" itemprop="thumbnail" alt="gallery"></a>
                                    <figcaption itemprop="caption description">Image caption  1</figcaption>
                                </figure>
                                <figure class="col-sm-6" itemprop="associatedMedia" itemscope=""><a href="../assets/images/other-images/profile-style-img3.png" itemprop="contentUrl" data-size="1600x950"><img class="img-fluid rounded" src="{{asset('assets/images/other-images/profile-style-img.png')}}" itemprop="thumbnail" alt="gallery"></a>
                                    <figcaption itemprop="caption description">Image caption  2</figcaption>
                                </figure>
                            </div>
                            <div class="like-comment">
                                <ul class="list-inline">
                                    <li class="list-inline-item border-right pe-3">
                                        <label class="m-0"><a href="#"><i class="fa-solid fa-heart"></i></a>  Like</label><span class="ms-2 counter">2659</span>
                                    </li>
                                    <li class="list-inline-item ms-2">
                                        <label class="m-0"><a href="#"><i class="fa-solid fa-comment"></i></a>  Comment</label><span class="ms-2 counter">569</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- user profile third-style end-->
                <!-- user profile fourth-style start-->
                <div class="col-sm-12">
                    <div class="card">
                        <div class="profile-img-style">
                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="d-flex"><img class="img-thumbnail rounded-circle me-3" src="{{asset('assets/images/user/7.jpg')}}" alt="Generic placeholder image">
                                        <div class="flex-grow-1 align-self-center">
                                            <h3 class="mt-0 user-name">JOHAN DIO</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 align-self-center">
                                    <div class="float-sm-end f-w-600"><small>10 Hours ago</small></div>
                                </div>
                            </div>
                            <hr>
                            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source .Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source</p>
                            <div class="like-comment mt-4">
                                <ul class="list-inline">
                                    <li class="list-inline-item border-right pe-3">
                                        <label class="m-0"><a href="#"><i class="fa-solid fa-heart"></i></a>  Like</label><span class="ms-2 counter">2659</span>
                                    </li>
                                    <li class="list-inline-item ms-2">
                                        <label class="m-0"><a href="#"><i class="fa-solid fa-comment"></i></a>  Comment</label><span class="ms-2 counter">569</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- user profile fourth-style end-->
                <!-- user profile fifth-style start-->
                <div class="col-sm-12">
                    <div class="card">
                        <div class="profile-img-style">
                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="d-flex"><img class="img-thumbnail rounded-circle me-3" src="{{asset('assets/images/user/7.jpg')}}" alt="Generic placeholder image">
                                        <div class="flex-grow-1 align-self-center">
                                            <h3 class="mt-0 user-name">JOHAN DIO</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 align-self-center">
                                    <div class="float-sm-end f-w-600"><small>10 Hours ago</small></div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-lg-12 col-xl-4">
                                    <div class="my-gallery" id="aniimated-thumbnials-3" itemscope="">
                                        <figure itemprop="associatedMedia" itemscope=""><a href="../assets/images/blog/img.png" itemprop="contentUrl" data-size="1600x950"><img class="img-fluid rounded" src="{{asset('assets/images/blog/img.png')}}" itemprop="thumbnail" alt="gallery"></a>
                                            <figcaption itemprop="caption description">Image caption  1</figcaption>
                                        </figure>
                                    </div>
                                    <div class="like-comment mt-4 like-comment-sm-mb">
                                        <ul class="list-inline">
                                            <li class="list-inline-item border-right pe-3">
                                                <label class="m-0"><a href="#"><i class="fa-solid fa-heart"></i></a>  Like</label><span class="ms-2 counter">2659</span>
                                            </li>
                                            <li class="list-inline-item ms-2">
                                                <label class="m-0"><a href="#"><i class="fa-solid fa-comment"></i></a>  Comment</label><span class="ms-2 counter">569</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consecteturContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- user profile fifth-style end-->
                <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="pswp__bg"></div>
                    <div class="pswp__scroll-wrap">
                        <div class="pswp__container">
                            <div class="pswp__item"></div>
                            <div class="pswp__item"></div>
                            <div class="pswp__item"></div>
                        </div>
                        <div class="pswp__ui pswp__ui--hidden">
                            <div class="pswp__top-bar">
                                <div class="pswp__counter"></div>
                                <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                                <button class="pswp__button pswp__button--share" title="Share"></button>
                                <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                                <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                                <div class="pswp__preloader">
                                    <div class="pswp__preloader__icn">
                                        <div class="pswp__preloader__cut">
                                            <div class="pswp__preloader__donut"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                                <div class="pswp__share-tooltip"></div>
                            </div>
                            <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>
                            <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
                            <div class="pswp__caption">
                                <div class="pswp__caption__center"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 footer-copyright">
                <p class="mb-0">Copyright 2024 © Admiro theme by pixelstrap.</p>
            </div>
            <div class="col-md-6">
                <p class="float-end mb-0">Hand crafted &amp; made with
                    <svg class="svg-color footer-icon">
                        <use href="https://admin.pixelstrap.net/admiro/assets/svg/iconly-sprite.svg#heart"></use>
                    </svg>
                </p>
            </div>
        </div>
    </div>
</footer>
</div>
</div>

@endsection
