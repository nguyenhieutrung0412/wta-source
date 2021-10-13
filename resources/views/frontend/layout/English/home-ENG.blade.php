@extends('frontend.news-master-ENG')

@section('title', 'Home')

@section('content')

<div class="bannerhome">
            <div class="container">
                <h4>Welcome to WomenTech</h4>
                <h1>WomenTech</h1>
                <p>WTA is the standard currency of the WomenTech ecosystem</p>
                <a href="https://wallet.wta.finance/login.html">
                    <button type="submit">Sign in</button>
                </a>
            </div>
        </div>
    </header>
<div class="main">
        <div class="container">
            <div class="about-us">
                <h1>About us</h1>
                <div class="row">
                    @foreach($about as $about)
                   
                    <div class="col-md-5">
                        <h2>{{$about->title}}</h2>
                        <p>{{$about->content}}</p>
                        <p>{{$about->content_2}}</p>
                        <p>{{$about->content_3}}</p>
                    </div>
                    <div class="col-md-7">
                        <iframe width="900" height="506" src="{{$about->link_video}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="service">
                <h1>Service</h1>

                <!-- service mobile  -->
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="box">
                                <img src="{{url('frontend/images/Group.svg')}}" alt="">
                                <h3>Connect</h3>
                                <p>Connect, create community, create a development environment</p>
                                <a href="./DichVu.html">Readmore</a>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="box">
                                <img src="{{url('frontend/images/Group (1)')}}.svg" alt="">
                                <h3>Invest</h3>
                                <p>Invest, raise capital, increase financial capacity</p>
                                <a href="./DichVu.html">Readmore</a>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="box">
                                <img src="{{url('frontend/images/Group 640')}}.svg" alt="">
                                <h3>Build</h3>
                                <p>Creating the foundation and core values</p>
                                <a href="./DichVu.html">Readmore</a>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="box">
                                <img src="{{url('frontend/images/Vector (2')}}).svg" alt="">
                                <h3>Develop</h3>
                                <p>Companion to create sustainable growth momentum</p>
                                <a href="./DichVu.html">Readmore</a>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="box">
                                <img src="{{url('frontend/images/Group 641')}}.svg" alt="">
                                <h3>Sustainable ecosystem</h3>
                                <p>Linking and creating a strong cooperation network</p>
                                <a href="./DichVu.html">Readmore</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- service pc -->
                <div class="row row-no-gutters">
                    <div class="col-md-4 col-xs-6">
                        <div class="box">
                            <img src="{{url('frontend/images/Group.svg')}}" alt="">
                            <h3>Connect</h3>
                            <p>Connect, create community, create a development environment</p>
                            <a href="./DichVu.html">Readmore</a>
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-6">
                        <div class="box">
                            <img src="{{url('frontend/images/Group (1)')}}.svg" alt="">
                            <h3>Invest</h3>
                            <p>Invest, raise capital, increase financial capacity</p>
                            <a href="./DichVu.html">Readmore</a>
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-6">
                        <div class="box">
                            <img src="{{url('frontend/images/Group 640')}}.svg" alt="">
                            <h3>Build</h3>
                            <p>Creating the foundation and core values</p>
                            <a href="./DichVu.html">Readmore</a>
                        </div>
                    </div>
                </div>
                <div class="row row-no-gutters">
                    <div class="col-md-4 col-xs-6">
                        <div class="box">
                            <img src="{{url('frontend/images/Vector (2')}}).svg" alt="">
                            <h3>Develop</h3>
                            <p>Companion to create sustainable growth momentum</p>
                            <a href="./DichVu.html">Readmore</a>
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-6">
                        <div class="box">
                            <img src="{{url('frontend/images/Group 641')}}.svg" alt="">
                            <h3>Sustainable ecosystem</h3>
                            <p>Linking and creating a strong cooperation network</p>
                            <a href="./DichVu.html">Readmore</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- media  -->
            <div class="media">
                <div class="row">
                    <div class="col-md-9">
                        <h1>Media</h1>
                    </div>
                    <div class="col-md-3">
                        <a href="#">
                            <button type="submit">view all</button>
                        </a>
                    </div>
                </div>
                <!-- media-mobile -->
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner1">
                        <div class="carousel-item active">
                            <div class="box">
                                <div class="background">
                                    <img src="{{url('frontend/images/media01.j')}}pg" alt="">
                                    <div class="layer"></div>
                                </div>
                                <div class="contenthome">
                                    <h6>The strength of association creates a strong step forward for women Women Tech</h6>
                                    <p>12 Jun 2020</p>
                                    <a href="https://womentech.com.vn/tin-tuc/suc-manh-lien-ket-tao-buoc-tien-manh-cua-phu-nu-women-tech">Readmore</a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="box">
                                <div class="background">
                                    <img src="{{url('frontend/images/media02.j')}}pg" alt="">
                                    <div class="layer"></div>
                                </div>
                                <div class="contenthome">
                                    <h6>Background of the birth and alliance of "superpower" partners of Women Tech</h6>
                                    <p>18 Sep 2021</p>
                                    <a href="https://womentech.com.vn/tin-tuc/boi-canh-ra-doi-va-lien-minh-doi-tac-sieu-cuong-cua-women-tech">Readmore</a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="box">
                                <div class="background">
                                    <img src="{{url('frontend/images/media03.j')}}pg" alt="">
                                    <div class="layer"></div>
                                </div>
                                <div class="contenthome">
                                    <h6>How to take advantage of potential, overcome difficulties and challenges?</h6>
                                    <p>16 Sep 2021</p>
                                    <a href="https://womentech.com.vn/tin-tuc/tan-dung-tiem-nang-khac-phuc-nhung-kho-khan-thach-thuc-nhu-the-nao">Readmore</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- media-pc -->
                <div class="row">
                    <div class="col-md-4 col-xs-6">
                        <div class="box">
                            <div class="background">
                                <img src="{{url('frontend/images/media01.j')}}pg" alt="">
                                <div class="layer"></div>
                            </div>
                            <div class="contenthome">
                                <h6>The strength of association creates a strong step forward for women Women Tech</h6>
                                <p>12 Jun 2020</p>
                                <a href="https://womentech.com.vn/tin-tuc/suc-manh-lien-ket-tao-buoc-tien-manh-cua-phu-nu-women-tech">Readmore</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-6">
                        <div class="box">
                            <div class="background">
                                <img src="{{url('frontend/images/media02.j')}}pg" alt="">
                                <div class="layer"></div>
                            </div>
                            <div class="contenthome">
                                <h6>Background of the birth and alliance of "superpower" partners of Women Tech</h6>
                                <p>18 Sep 2021</p>
                                <a href="https://womentech.com.vn/tin-tuc/boi-canh-ra-doi-va-lien-minh-doi-tac-sieu-cuong-cua-women-tech">Readmore</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-6">
                        <div class="box">
                            <div class="background">
                                <img src="{{url('frontend/images/media03.j')}}pg" alt="">
                                <div class="layer"></div>
                            </div>
                            <div class="contenthome">
                                <h6>How to take advantage of potential, overcome difficulties and challenges?</h6>
                                <p>16 Sep 2021</p>
                                <a href="https://womentech.com.vn/tin-tuc/tan-dung-tiem-nang-khac-phuc-nhung-kho-khan-thach-thuc-nhu-the-nao">Readmore</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="partner">
        <div class="container">
            <h1>Partner</h1>
            <div class="container">
                <section class="customer-logos slider">
                    <div class="slide"><img src="{{url('frontend/images/Group 635')}}.svg" alt="logo"></div>
                    <div class="slide"><img src="{{url('frontend/images/Group 636')}}.svg" alt="logo"></div>
                    <div class="slide"><img src="{{url('frontend/images/Group 639')}}.svg" alt="logo"></div>
                    <div class="slide"><img src="{{url('frontend/images/Group 638')}}.svg" alt="logo"></div>
                    <div class="slide"><img src="{{url('frontend/images/Group 634')}}.svg" alt="logo"></div>
                    <div class="slide"><img src="{{url('frontend/images/Group 632')}}.svg" alt="logo"></div>
                    <div class="slide"><img src="{{url('frontend/images/Group 637')}}.svg" alt="logo"></div>
                </section>
            </div>
        </div>
    </div>

@endsection