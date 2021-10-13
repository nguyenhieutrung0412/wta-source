<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>About Us  </title>

    <!-- Bootstrap -->
    <link href="{{ url('vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ url('vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ url('vendors/nprogress/nprogress.css')}}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{ url('build/css/custom.min.css')}}" rel="stylesheet">
</head>

<body class="nav-md">

</body>
@include('backend.partial.header')
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Update About Us</h3>
            </div>

            <div class="title_right">
                <div class="col-md-5 col-sm-5 form-group pull-right top_search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">Go!</button>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Update About Us </h2>
                        @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
                @endif
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Settings 1</a>
                                    <a class="dropdown-item" href="#">Settings 2</a>
                                </div>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        @foreach($about as $about)
                        
                        <form class="" action="{{URL::to('/about-us/update/'.$about->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <meta name="csrf-token" content="{{ csrf_token() }}">
                            <p>For alternative validation library <code>parsleyJS</code> check out in the <a href="form.html">form page</a>
                            </p>
                            <span class="section">About Us Home</span>
                            <div class="field item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3  label-align">Tiêu đề<span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6">
                                        <input class="form-control"  value="{{$about->title}}"  name="title" placeholder="...." required="required" />
                                    </div>
                                </div>

                            <div class="field item form-group">
                                <label class="col-form-label col-md-3 col-sm-3  label-align">Nội dung 1<span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" value="{{$about->content}}" name="content" placeholder=" ...." required="required" />
                                </div>
                            </div>
                            <div class="field item form-group">
                                <label class="col-form-label col-md-3 col-sm-3  label-align">Nội dung 2<span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" value="{{$about->content_2}}" name="content_2" placeholder=" ...." required="required" />
                                </div>
                            </div>
                            <div class="field item form-group">
                                <label class="col-form-label col-md-3 col-sm-3  label-align">Nội dung 3<span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" value="{{$about->content_3}}" name="content_3" placeholder=" ...." required="required" />
                                </div>
                            </div>

                            <div class="field item form-group">
                                <label class="col-form-label col-md-3 col-sm-3  label-align">Link video<span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" value="{{$about->link_video}}" name="link_video" placeholder="" required="required" />
                                </div>
                            </div>


                            


                            <div class="ln_solid">
                                <div class="form-group">
                                    <div class="col-md-6 offset-md-3">
                                        <button type='submit' name="update_product" class="btn btn-primary">Submit</button>
                                      
                                    </div>
                                </div>
                            </div>

                        </form>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /page content -->

@include('backend.partial.footer')
<!-- Javascript functions	-->

</html>