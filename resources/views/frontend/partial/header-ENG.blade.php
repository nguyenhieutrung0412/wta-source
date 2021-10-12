<header>
        <div id="Sidenav" class="sidenav" style="width: 0px;">
            <a href="#" class="closebtn" onclick="closeNav()">×</a>
            <div class="button-menu">
                <button id="menu7" data-i18n="language.menu.link7"><a href="https://wallet.wta.finance/login.html">Sign In</a> </button> <br>
                <button id="menu8" data-i18n="language.menu.link7"><a href="https://wallet.wta.finance/register.html">Sign Up</a></button>
            </div>
            <a id="menu1" href="{{url('/home-user')}}" data-i18n="language.menu.link1">Home</a>
            <a class="menu2" id="menu2" href="#" data-i18n="language.menu.link2">
                <p style="margin-bottom: 0;">About WTA</p><i class="bi bi-caret-down-fill"></i></a>
            <div class="items">
                <a href="./about-english.html">About Us</a>
                <a href="./LoTrinhEn.html">Token</a>
            </div>
            <a id="menu3" href="./DichVuEn.html" data-i18n="language.menu.link3">Service</a>
            <a id="menu4" href="./TinTucEn.html" data-i18n="language.menu.link4">News</a>
            <a id="menu5" href="#" data-i18n="language.menu.link5">Help</a>
            <a id="menu6" href="./LienheEn.html" data-i18n="language.menu.link6">Contact</a>
            <div class="icon-menu">
                <a href="https://www.facebook.com/Womentech.WTA/" target="_blank"><img src="./images/facebook.png" alt=""></a>
                <a href="https://twitter.com/WomenTechWTA" target="_blank"><img src="./images/tx.png" alt=""></a>
                <a href="https://t.me/womentechofficial" target="_blank"><img src="./images/telegram_icon.png" alt=""></a>
                <a href="https://t.me/WomentechCommunity" target="_blank"><img src="./images/telegram_icon.png" alt=""></a>
                <a href="https://www.youtube.com/channel/UCrwy06dxtzEx-iZILvnQBSg/" target="_blank"><img src="./images/yb.png" alt=""></a>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg navbar-dark">
            <!-- logo -->
            <div class="container">
                <a class="navbar-brand" href="./home-english.html"><img src="{{url('frontend/images/Logo.png')}}" alt=""></a>
                <!-- login button mobile -->
                <div class="menu-mb">
                    <img onclick="window.location.href = 'TinTuc.html'" class="img-mb" src="{{url('frontend/svg/laco.svg')}}" alt="">
                    <a class="login-button-mb" href="https://wallet.wta.finance/register.html"> <button type="submit">Sign up</button></a>
                    <div class="slide" id="slide" onclick="open_menu()">
                        <a class="toggle" id="btn-toggle-sidebar">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <path fill="currentColor" d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z">
                                    </path>
                                </svg>
                        </a>
                    </div>
                </div>
                <!-- nav menu -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{url('/home-user')}}">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            About WTA 
                        </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{url('/about-user')}}">About Us</a>
                                <a class="dropdown-item" href="{{url('/token-user')}}">Token</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <!-- <a class="nav-link" href="./LoTrinhEn.html">Token</a> -->
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/service-user')}}">Service</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/news-user')}}">News</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Help</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/contact-user')}}">Contact</a>
                        </li>
                        <li class="nav-item login">
                            <span class="button">
                                <a class="nav-link" href="https://wallet.wta.finance/login.html"> <button type="submit">Sign In</button></a>
                            </span>
                        </li>
                        <li class="nav-item login">
                            <span class="button">
                                <a class="nav-link" href="https://wallet.wta.finance/register.html"> <button type="submit">Sign Up</button></a>
                            </span>
                        </li>
                        <!-- <li class="nav-item login">
                            <img src="./svg/laco.svg" onclick="window.location.href = 'DichVu.html'" alt="">
                        </li> -->
                        <li class="nav-item login dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="{{url('frontend/images/united-states.png')}}" alt=""></a>
                            <div class="dropdown-menu dropdown-flag" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item flag" href="./TinTuc.html"><img src="{{url('frontend/images/laco.png')}}" alt=""></a>
                                <a class="dropdown-item flag" href="./TinTucEn.html"><img src="{{url('frontend/images/united-states.png')}}" alt=""></a>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
      