@extends('frontend.news-master-ENG')

@section('title', 'News')

@section('content')
<div class="bannernews">
            <!-- <img src="./images/Banner_01 4.png" alt="" style="width: 100%;"> -->
            <div class="container">
                <div class="text-left">
                    <p>News</p>
                </div>
            </div>

        </div>
    </header>
<main>
        <div class="container">
            <div class="press">
                <div class="title-center">
                    <p>Press</p>
                </div>
                <div class="tab">
                    <div class="row">
                    @foreach($press as $press)
                        <div class="col-md-4">

                            <div class="news">
                                <div class="img">
                                <img src="{{url('backend/images/press/')}}/{{$press->image}}" alt="">
                                </div>
                                <div class="infonews">
                                    <p>{{$press->title}}</p>
                                    <p>{{$press->create_at}}</p>
                                    <a href="./DocThem.html">Readmore</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="row">
                        <!-- <div class="col-md-4">
                            <div class="news">
                                <div class="img">
                                    <img src="./images/new.png" alt="">
                                </div>
                                <div class="info">
                                    <p>We provide what you need to start or grow your business.</p>
                                    <p>4 Aug, 2020</p>
                                    <a href="./DocThem.html">Readmore</a>
                                </div>
                            </div>
                        </div> -->
                        
                    </div>
                </div>
                <div class="owl-carousel owl-theme" id="hide">
                    <div class="item">
                        <div class="news">
                            <div class="img">
                                <img src="./images/new.png" alt="">
                            </div>
                            <div class="info">
                                <p>We provide what you need to start or grow your business.</p>
                                <p>4 Aug, 2020</p>
                                <a href="./DocThem.html">Readmore</a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="news">
                            <div class="img">
                                <img src="./images/new.png" alt="">
                            </div>
                            <div class="info">
                                <p>We provide what you need to start or grow your business.</p>
                                <p>4 Aug, 2020</p>
                                <a href="./DocThem.html">Readmore</a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="news">
                            <div class="img">
                                <img src="./images/new.png" alt="">
                            </div>
                            <div class="info">
                                <p>We provide what you need to start or grow your business.</p>
                                <p>4 Aug, 2020</p>
                                <a href="./DocThem.html">Readmore</a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="news">
                            <div class="img">
                                <img src="./images/new.png" alt="">
                            </div>
                            <div class="info">
                                <p>We provide what you need to start or grow your business.</p>
                                <p>4 Aug, 2020</p>
                                <a href="./DocThem.html">Readmore</a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="news">
                            <div class="img">
                                <img src="./images/new.png" alt="">
                            </div>
                            <div class="info">
                                <p>We provide what you need to start or grow your business.</p>
                                <p>4 Aug, 2020</p>
                                <a href="./DocThem.html">Readmore</a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="news">
                            <div class="img">
                                <img src="./images/new.png" alt="">
                            </div>
                            <div class="info">
                                <p>We provide what you need to start or grow your business.</p>
                                <p>4 Aug, 2020</p>
                                <a href="./DocThem.html">Readmore</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="button-center">
                    <button>see more</button>
                </div>
            </div>
            <div class="new">
                <div class="title-center">
                    <p>News</p>
                </div>
                <div class="tab">
              
                    <div class="row">
                    @foreach($news as $news)
                        <div class="col-md-4  ">
                            <div class="news">
                                <div class="img">
                                    <img src="{{url('backend/images/news/')}}/{{$news->image}}" alt="">
                                </div>
                                <div class="infonews">
                                    <p>{{$news->title}}</p>
                                    <p>{{$news->create_at}}</p>
                                    <a href="./DocThem.html">Readmore</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                       
                    </div>
                   
                    <!-- <div class="row">
                        <div class="col-md-4">
                            <div class="news">
                                <div class="img">
                                    <img src="./images/new.png" alt="">
                                </div>
                                <div class="info">
                                    <p>We provide what you need to start or grow your business.</p>
                                    <p>4 Aug, 2020</p>
                                    <a href="./DocThem.html">Readmore</a>
                                </div>
                            </div>
                        </div>
                       
                    </div> -->
                </div>
                <div class="owl-carousel owl-theme" id="hide2">
                    <div class="item">
                        <div class="news">
                            <div class="img">
                                <img src="./images/new.png" alt="">
                            </div>
                            <div class="info">
                                <p>We provide what you need to start or grow your business.</p>
                                <p>4 Aug, 2020</p>
                                <a href="./DocThem.html">Readmore</a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="news">
                            <div class="img">
                                <img src="./images/new.png" alt="">
                            </div>
                            <div class="info">
                                <p>We provide what you need to start or grow your business.</p>
                                <p>4 Aug, 2020</p>
                                <a href="./DocThem.html">Readmore</a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="news">
                            <div class="img">
                                <img src="./images/new.png" alt="">
                            </div>
                            <div class="info">
                                <p>We provide what you need to start or grow your business.</p>
                                <p>4 Aug, 2020</p>
                                <a href="./DocThem.html">Readmore</a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="news">
                            <div class="img">
                                <img src="./images/new.png" alt="">
                            </div>
                            <div class="info">
                                <p>We provide what you need to start or grow your business.</p>
                                <p>4 Aug, 2020</p>
                                <a href="./DocThem.html">Readmore</a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="news">
                            <div class="img">
                                <img src="./images/new.png" alt="">
                            </div>
                            <div class="info">
                                <p>We provide what you need to start or grow your business.</p>
                                <p>4 Aug, 2020</p>
                                <a href="./DocThem.html">Readmore</a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="news">
                            <div class="img">
                                <img src="./images/new.png" alt="">
                            </div>
                            <div class="info">
                                <p>We provide what you need to start or grow your business.</p>
                                <p>4 Aug, 2020</p>
                                <a href="./DocThem.html">Readmore</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="button-center">
                    <button>see more</button>
                </div>
            </div>
        </div>
    </main>
    @endsection