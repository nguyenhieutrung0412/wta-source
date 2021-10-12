@extends('frontend.news-master-ENG')

@section('title', 'About')

@section('content')

<div class="titleabout">
            <div class="container">
                <h1>About us</h1>
                <div class="text-left">

                </div>
            </div>
        </div>  
    </header>


    <div class="main">
        <div class="container">
            <div class="top-main">
                <div class="row">
                    <div class="col-md-6"></div>
                    <div class="col-md-6">
                        <div class="content">
                            <p>WomenTech Singapore was born as an Innovative Startup Fund with the mission of supporting, creating and accompanying women entrepreneurs and businesswomen in the digital era.<br><br>WomenTech with a vision of becoming the locomotive
                                to lead and accompany businesses, aspiring and creative businesswomen<br><br>After many years of creating a premise and building the foundation of an ecosystem, WomenTech has officially released WTA Token based on Blockchain
                                technology for individuals, entrepreneurs and businesses for development and supply chain management. through smart contracts. At the same time WTA Token is also the official digital asset of the Global Women's Creative
                                Startup Fund, developed by a team of experts and advisors in many parts of the world.<br><br>With the 5 years roadmap, WTA will support millions of people around the world and thousands of innovative startups, building
                                a sustainable business ecosystem and platform.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wta">
                <div class="row">
                    <div class="col-md-6">
                        <div class="title-wta">
                            <h1>WTA</h1>
                            <h1>applications</h1>
                        </div>
                    </div>
                </div>
                <!-- mobile -->
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="box-left box">
                                <img src="{{url('frontend/images/Vector (3).svg')}}" alt="">
                                <h1>Administration</h1>
                                <p>Implement and invest in transparent public projects</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="box-right box">
                                <img src="{{url('frontend/images/Vector (4).svg')}}" alt="">
                                <h1>Finance</h1>
                                <p>Set bars for financial protocols on the system and ecosystem</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="box-left box">
                                <img src="{{url('frontend/images/Group 875.svg')}}" alt="">
                                <h1>Assets</h1>
                                <p>Applications are digital assets, collateral, peer-to-peer lending services</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="box-right box">
                                <img src="{{url('frontend/images/Vector (5).svg')}}" alt="">
                                <h1>Culture & Arts</h1>
                                <p>Digitizing fungible and non-fungible assets through NFT technology</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- pc -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="box-left box">
                            <img src="{{url('frontend/images/Vector (3).svg')}}" alt="">
                            <h1>Administration</h1>
                            <p>Implement and invest in transparent public projects</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="box-right box">
                            <img src="{{url('frontend/images/Vector (4).svg')}}" alt="">
                            <h1>Finance</h1>
                            <p>Set bars for financial protocols on the system and ecosystem</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="box-left box">
                            <img src="{{url('frontend/images/Group 875.svg')}}" alt="">
                            <h1>Assets</h1>
                            <p>Applications are digital assets, collateral, peer-to-peer lending services</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="box-right box">
                            <img src="{{url('frontend/images/Vector (5).svg')}}" alt="">
                            <h1>Culture & Arts</h1>
                            <p>Digitizing fungible and non-fungible assets through NFT technology</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="wta-bottom">
                        <p>WTA is used in the WomenTech ecosystem to exchange life services such as: E-commerce, online learning platform, restaurants, hotels, real estate, and applications in the system. Ecological<br><br>With a goal and mission towards
                            serving the community, especially women in the digital age, WTA is an investment asset associated with the significant development of the ecosystem through its practical application to life and human values.
                        </p>
                    </div>
                </div>
            </div>
            <div class="team">
                <div class="title-team">
                    <h1>Team</h1>
                </div>
                <!-- mobile -->
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="box">
                                <div class="layer"></div>
                                <img src="{{url('frontend/images/01 7.jpg')}}" alt="">
                                <div class="box-name">
                                    <p id="name">Master - Pham Thi Thuy</p>
                                    <p id="position">Chairman of the Board of Directors</p>
                                    <ul id="infor">
                                        <li>President of the Hundred Families of Vietnam</li>
                                        <li>Teacher, Educational researcher in the 4.0 era</li>
                                        <li>Education investor, school manager</li>
                                        <li>Set up and operator of Hoang Dieu Victoria international school systems in Hanoi, Binh Duong and Pleiku</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="box">
                                <div class="layer"></div>
                                <img src="{{url('frontend/images/01 2.jpg')}}" alt="">
                                <div class="box-name">
                                    <p id="name">Doctor - Nguyen Dung Thuong</p>
                                    <p id="position">CEO – Member of the Board of Directors</p>
                                    <ul id="infor">
                                        <li>President and Director of the Institute of Finance, Investment and Trade Cooperation in Southeast Asia</li>
                                        <li>Author and Project Manager Edutech - The No. 1 Online School in Vietnam</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="box">
                                <div class="layer"></div>
                                <img src="{{url('frontend/images/01 3.jpg')}}" alt="">
                                <div class="box-name">
                                    <p id="name">Mr - Trinh Van Sao</p>
                                    <p id="position">Sales Director – Member of the Board of Directors</p>
                                    <ul id="infor">
                                        <li>Sales Director – Member of the Board of Directors</li>
                                        <li>10 Years of Officials in Vietnam's Health Industry</li>
                                        <li>10 Years of Human System Development & Experience</li>
                                        <li>5 Years of Experience In Crypto Market</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="box">
                                <div class="layer"></div>
                                <img src="{{url('frontend/images/01 4.jpg')}}" alt="">
                                <div class="box-name">
                                    <p id="name">Mr - Bui Quang Huy</p>
                                    <p id="position">Marketing Director – Member of the Board of Directors</p>
                                    <ul id="infor">
                                        <li>Founder & CEO of Onicorn Media Joint Stock Company</li>
                                        <li>Member of JCI Vietnam – Member of the World Federation of Young Leaders and Entrepreneurs</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="box">
                                <div class="layer"></div>
                                <img src="{{url('frontend/images/01 5.jpg')}}" alt="">
                                <div class="box-name">
                                    <p id="name">Ms. - Le Phuong Linh</p>
                                    <p id="position">HR and Administration Director</p>
                                    <ul id="infor">
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="box">
                                <div class="layer"></div>
                                <img src="{{url('frontend/images/01 6.jpg')}}" alt="">
                                <div class="box-name">
                                    <p id="name">Ms. Vu Thi Thuy Ha</p>
                                    <p id="position">Finance and Accounting Director</p>
                                    <ul id="infor">
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="box">
                                <div class="layer"></div>
                                <img src="{{url('frontend/images/01 13.jpg')}}" alt="">
                                <div class="box-name">
                                    <p id="name">Mr. Ho Phuoc That</p>
                                    <p id="position">Technology Director – Member of the Board of Directors</p>
                                    <ul id="infor">
                                        <li>Founder & CEO of Corevestor Joint Stock Company</li>
                                        <li>Technology & Blockchain developer</li>
                                    </ul>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- pc -->
                <div class="row">
                    <div class="col-md-4">
                        <div class="box">
                            <div class="layer"></div>
                            <img src="{{url('frontend/images/01 7.jpg')}}" alt="">
                            <div class="box-name">
                                <p id="name">Master - Pham Thi Thuy</p>
                                <p id="position">Chairman of the Board of Directors</p>
                                <ul id="infor">
                                    <li>President of the Hundred Families of Vietnam</li>
                                    <li>Teacher, Educational researcher in the 4.0 era</li>
                                    <li>Education investor, school manager</li>
                                    <li>Set up and operator of Hoang Dieu Victoria international school systems in Hanoi, Binh Duong and Pleiku</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box">
                            <div class="layer"></div>
                            <img src="{{url('frontend/images/01 2.jpg')}}" alt="">
                            <div class="box-name">
                                <p id="name">Doctor - Nguyen Dung Thuong</p>
                                <p id="position">CEO – Member of the Board of Directors</p>
                                <ul id="infor">
                                    <li>President and Director of the Institute of Finance, Investment and Trade Cooperation in Southeast Asia</li>
                                    <li>Author and Project Manager Edutech - The No. 1 Online School in Vietnam</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box">
                            <div class="layer"></div>
                            <img src="{{url('frontend/images/01 3.jpg')}}" alt="">
                            <div class="box-name">
                                <p id="name">Mr - Trinh Van Sao</p>
                                <p id="position">Sales Director – Member of the Board of Directors</p>
                                <ul id="infor">
                                    <li>Sales Director – Member of the Board of Directors</li>
                                    <li>10 Years of Officials in Vietnam's Health Industry</li>
                                    <li>10 Years of Human System Development & Experience</li>
                                    <li>5 Years of Experience In Crypto Market</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="box">
                            <div class="layer"></div>
                            <img src="{{url('frontend/images/01 4.jpg')}}" alt="">
                            <div class="box-name">
                                <p id="name">Mr - Bui Quang Huy</p>
                                <p id="position">Marketing Director – Member of the Board of Directors</p>
                                <ul id="infor">
                                    <li>Founder & CEO of Onicorn Media Joint Stock Company</li>
                                    <li>Member of JCI Vietnam – Member of the World Federation of Young Leaders and Entrepreneurs</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box">
                            <div class="layer"></div>
                            <img src="{{url('frontend/images/01 5.jpg')}}" alt="">
                            <div class="box-name">
                                <p id="name">Ms. - Le Phuong Linh</p>
                                <p id="position">HR and Administration Director</p>
                                <ul id="infor">
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box">
                            <div class="layer"></div>
                            <img src="{{url('frontend/images/01 6.jpg')}}" alt="">
                            <div class="box-name">
                                <p id="name">Ms. Vu Thi Thuy Ha</p>
                                <p id="position">Finance and Accounting Director</p>
                                <ul id="infor">
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="box">
                            <div class="layer"></div>
                            <img src="{{url('frontend/images/01 13.jpg')}}" alt="">
                            <div class="box-name">
                                <p id="name">Mr. Ho Phuoc That</p>
                                <p id="position">Technology Director – Member of the Board of Directors</p>
                                <ul id="infor">
                                    <li>Founder & CEO of Corevestor Joint Stock Company</li>
                                    <li>Technology & Blockchain developer</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">

                    </div>
                    <div class="col-md-4">

                    </div>
                </div>
            </div>

            <div class="adviser">
                <div class="title-adviser">
                    <h1>Advisors</h1>
                </div>
                <!-- mobile -->
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="box">
                                <div class="layer"></div>
                                <img src="{{url('frontend/images/01 4 (1).jpg')}}" alt="">
                                <div class="box-name">
                                    <p id="name">Assoc. Prof-Dr. Vu Duong Thuy</p>
                                    <ul id="infor">
                                        <li>Former Editor-in-Chief of Vietnam Education Publishing House</li>
                                        <li>Director of Vietnam Institute for Potential Research and Development</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="box">
                                <div class="layer"></div>
                                <img src="{{url('frontend/images/01 5 (1).jpg')}}" alt="">
                                <div class="box-name">
                                    <p id="name">Dr. Le Doan Hop</p>
                                    <ul id="infor">
                                        <li>Former Minister of Communications and Information of Vietnam</li>
                                        <li>Honorary President of Vietnam Digital Media Association</li>
                                        <li>Chairman of Nghe An Compatriot Council</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="box">
                                <div class="layer"></div>
                                <img src="{{url('frontend/images/01 6 (1).jpg')}}" alt="">
                                <div class="box-name">
                                    <p id="name">Dr. Bui Quang Ngoc</p>
                                    <ul id="infor">
                                        <li>Vice Chairman of the Board of Directors and General Director of FPT</li>
                                        <li>Member of the Board of Directors of FPT Telecom</li>
                                        <li>Director of FPT Investment Co., Ltd</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="box">
                                <div class="layer"></div>
                                <img src="{{url('frontend/images/01 7 (1).jpg ')}}" alt="">
                                <div class="box-name">
                                    <p id="name">GS-Dr. Ho Trong Ngu</p>
                                    <ul id="infor">
                                        <li>Former Vice Chairman of the National Assembly Committee for National Defense and Security of the Socialist Republic of Vietnam</li>
                                        <li>Former Deputy Director of the People's Police Academy</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="box">
                                <div class="layer"></div>
                                <img src="{{url('frontend/images/01 8.jpg')}}" alt="">
                                <div class="box-name">
                                    <p id="name">Dr. Bui Dinh Vu</p>
                                    <ul id="infor">
                                        <li>Vice Chairman of the Council of Vietnamese Clans</li>
                                        <li>Former senior expert of the Government Inspection Department</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="box">
                                <div class="layer"></div>
                                <img src="{{url('frontend/images/01 9.jpg')}}" alt="">
                                <div class="box-name">
                                    <p id="name">Darren Wong</p>
                                    <ul id="infor">
                                        <li>Director of MREGIS TRADING PTE. LTD. Singapore</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="box">
                                <div class="layer"></div>
                                <img src="{{url('frontend/images/01 10.jpg')}}" alt="">
                                <div class="box-name">
                                    <p id="name">Tan Yung Tjien Andrew </p>
                                    <ul id="infor">
                                        <li>Cluster Finance Manager</li>
                                        <li>Shell Specialities at Shell Eastern Petroleum Pte Ltd</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- pc -->
                <div class="row">
                    <div class="col-md-4">
                        <div class="box">
                            <div class="layer"></div>
                            <img src="{{url('frontend/images/01 4 (1).jpg')}}" alt="">
                            <div class="box-name">
                                <p id="name">Assoc. Prof-Dr. Vu Duong Thuy</p>
                                <ul id="infor">
                                    <li>Former Editor-in-Chief of Vietnam Education Publishing House</li>
                                    <li>Director of Vietnam Institute for Potential Research and Development</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box">
                            <div class="layer"></div>
                            <img src="{{url('frontend/images/01 5 (1).jpg')}}" alt="">
                            <div class="box-name">
                                <p id="name">Dr. Le Doan Hop</p>
                                <ul id="infor">
                                    <li>Former Minister of Communications and Information of Vietnam</li>
                                    <li>Honorary President of Vietnam Digital Media Association</li>
                                    <li>Chairman of Nghe An Compatriot Council</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box">
                            <div class="layer"></div>
                            <img src="{{url('frontend/images/01 6 (1).jpg')}}" alt="">
                            <div class="box-name">
                                <p id="name">Dr. Bui Quang Ngoc</p>
                                <ul id="infor">
                                    <li>Vice Chairman of the Board of Directors and General Director of FPT</li>
                                    <li>Member of the Board of Directors of FPT Telecom</li>
                                    <li>Director of FPT Investment Co., Ltd</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="box">
                            <div class="layer"></div>
                            <img src="{{url('frontend/images/01 7 (1).jpg')}}" alt="">
                            <div class="box-name">
                                <p id="name">GS-Dr. Ho Trong Ngu</p>
                                <ul id="infor">
                                    <li>Former Vice Chairman of the National Assembly Committee for National Defense and Security of the Socialist Republic of Vietnam</li>
                                    <li>Former Deputy Director of the People's Police Academy</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box">
                            <div class="layer"></div>
                            <img src="{{url('frontend/images/01 8.jpg')}}" alt="">
                            <div class="box-name">
                                <p id="name">Dr. Bui Dinh Vu</p>
                                <ul id="infor">
                                    <li>Vice Chairman of the Council of Vietnamese Clans</li>
                                    <li>Former senior expert of the Government Inspection Department</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box">
                            <div class="layer"></div>
                            <img src="{{url('frontend/images/01 9.jpg')}}" alt="">
                            <div class="box-name">
                                <p id="name">Darren Wong</p>
                                <ul id="infor">
                                    <li>Director of MREGIS TRADING PTE. LTD. Singapore</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="box">
                            <div class="layer"></div>
                            <img src="{{url('frontend/images/01 10.jpg')}}" alt="">
                            <div class="box-name">
                                <p id="name">Tan Yung Tjien Andrew </p>
                                <ul id="infor">
                                    <li>Cluster Finance Manager</li>
                                    <li>Shell Specialities at Shell Eastern Petroleum Pte Ltd</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                    </div>
                    <div class="col-md-4">
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
                    <div class="slide"><img src="{{url('frontend/images/Group 635.svg')}}" alt="logo"></div>
                    <div class="slide"><img src="{{url('frontend/images/Group 636.svg')}}" alt="logo"></div>
                    <div class="slide"><img src="{{url('frontend/images/Group 639.svg')}}" alt="logo"></div>
                    <div class="slide"><img src="{{url('frontend/images/Group 638.svg')}}" alt="logo"></div>
                    <div class="slide"><img src="{{url('frontend/images/Group 634.svg')}}" alt="logo"></div>
                    <div class="slide"><img src="{{url('frontend/images/Group 632.svg')}}" alt="logo"></div>
                    <div class="slide"><img src="{{url('frontend/images/Group 637.svg')}}" alt="logo"></div>
                </section>
            </div>
        </div>
    </div>
@endsection