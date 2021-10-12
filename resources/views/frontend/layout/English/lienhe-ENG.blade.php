@extends('frontend.news-master-ENG')

@section('title', 'Contact')

@section('content')

<div class="bannerlienhe">
            <!-- <img src="./images/Banner_01 4.png" alt="" style="width: 100%;"> -->
            <div class="container">
                <div class="text-left">
                    <p>Contact</p>
                </div>
            </div>

        </div>
    </header>
    <main>
        <div class="container">
            <div class="mainlienhe">
                <div class="titlelienhe">
                    <p>how can we help?</p>
                </div>
                <div class="from">
                    <form>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">First name *</label>
                                <input type="text" class="form-control form-control-lg" placeholder="First name">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Last name *</label>
                                <input type="text" class="form-control form-control-lg" placeholder="Last name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Email address *</label>
                            <input type="email" class="form-control form-control-lg" id="exampleFormControlInput1" placeholder="Email address">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Location *</label>
                            <select class="form-control form-control-lg" id="exampleFormControlSelect1">
                            <option value="" selected disabled>Choose a location</option>
                              <option>1</option>
                              <option>2</option>
                              <option>3</option>
                              <option>4</option>
                              <option>5</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Briefly describe how we can help (300 characters max)</label>
                            <textarea class="form-control form-control-lg" id="exampleFormControlTextarea1" rows="5"></textarea>
                            <label for="exampleFormControlTextarea1">0 of 300 max characters</label>
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck">
                                <label class="form-check-label" for="gridCheck">
                                    Yes, please sign me up for WTA developer information, event information, newsletters, and general WTA marketing materials (optional)
                              </label>
                            </div>
                        </div>
                        <div class="check-robot">
                            <label class="check">
                                <p>I’m not a robot</p>
                                <input type="checkbox">
                                <span class="checkmark"></span>
                              </label>
                        </div>
                        <button type="submit" class="btn">Send</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection