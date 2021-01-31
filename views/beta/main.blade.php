@extends('layouts.app')

@section('content')
    <div class="banner-two gradient">
        <div class="container">
            <div class="banner-inner">
                <img class="img1 move-2" src="assets/templates/images/pattern/pattern8.png" alt="йцу">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="banner-content text-white">
                            <h6 class="wow fadeInUp sub-title bgl-light text-white" data-wow-delay="0.5s">We are The Best</h6>
                            <h1 class="wow fadeInUp m-b20" data-wow-delay="1s">{{$documentObject['longtitle']}}</h1>
                            <p 	class="wow fadeInUp m-b30" data-wow-delay="1.5s">{{$documentObject['description']}}</p>
                            <a href="#contact-form" class="wow fadeInUp btn btn-light text-primary shadow rounded-xl"  data-wow-delay="2s">Замовити сайт</a>
                        </div>
                    </div>
                </div>
                <img class="img2 move-1" src="assets/templates/images/pattern/pattern8.png" alt="">
                <img class="img3 move-2" src="assets/templates/images/pattern/pattern9.png" alt="">
            </div>
        </div>
        <div class="dz-media">
            <img src="assets/images/custom/baneer.jpg" class="move-2" alt="">
        </div>
    </div>
    <section class="content-inner about-wraper-1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 m-b30 wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.2s">
                    <div class="dz-media">
                        <img src="assets/images/custom/kaktus.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 m-b30 wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.4s">
                    <div class="section-head style-2">
                        <h6 class="sub-title text-primary">About Us</h6>
                        <div class="dlab-separator style-1"></div>
                        <h2 class="title m-b20">We Have Creative Team To Build Your Business Website Better</h2>
                        <p>Proin laoreet leo vel enim gravida, at porttitor metus ultricies. Cras eu velit enim. Vivamus blandit, dolor ut aliquet rutrum, ex elit mattis sapien, non molestie felis neque et nulla. Sed euismod turpis id nibh suscipit semper. Pellentesque dapibus risus arcu.</p>
                    </div>
                    <ul class="list-check primary m-b30">
                        <li>Suspendisse ullamcorper mollis orci in facilisis.</li>
                        <li>Etiam orci magna, accumsan varius enim volutpat.</li>
                        <li>Donec fringilla velit risus, in imperdiet turpis euismod quis.</li>
                        <li>Aliquam pulvinar diam tempor erat pellentesque, accumsan mauri.</li>
                    </ul>
                    <a href="javascript:void(0);" class="btn btn-primary rounded-xl gradient">Learn More</a>
                </div>
            </div>
        </div>
    </section>
    <section class="content-inner-2" style="background-image: url(assets/templates/images/background/bg1.png);">
        <div class="container">
            <div class="section-head style-1 text-center">
                <h6 class="sub-title bgl-primary m-b20 text-primary">Services</h6>
                <h2 class="title">Provide Awesome Service To You</h2>
            </div>
            <div class="row">
                @foreach(json_decode($documentObject['service'], true)['fieldValue'] as $serv)
                @include('partials.components.service', [
                'icon' => $serv['icon'],
                'title' => $serv['title'],
                'description' => $serv['description'],
                'color' => $serv['color'],
                'shadow' => $serv['shadow'],
                ])
                @endforeach
            </div>
        </div>
    </section>
    <section class="content-inner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 m-b30 wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.2s">
                    <div class="dz-media">
                        <img src="assets/templates/images/about/img4.png" class="move-1" alt="">
                    </div>
                </div>
                <div class="col-lg-6 m-b30 wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.4s">
                    <div class="section-head style-1 mb-4">
                        <h6 class="sub-title bgl-primary m-b20 text-primary">About Us</h6>
                        <h2 class="title">How We Can Help You Achieve Your Business Goal</h2>
                    </div>
                    <p>Integer pretium molestie nisl, non blandit lectus suscipit in. Vivamus tellus diam, iaculis eget nulla sit amet, tincidunt consectetur sem. Suspendisse laoreet, quam sed faucibus feugiat, tortor velit suscipit orci, sed consectetur ante eros id urna. Mauris luctus nulla ut pharetra tempor.</p>
                    <p class="m-b30">Mauris egestas eleifend sapien eu malesuada. Phasellus at metus eget sapien tristique accumsan non sit amet augue.</p>
                    <img src="assets/templates/images/sign.png" alt="">
                    <h4 class="m-b30">CEO Jhone Doe</h4>
                    <a href="about-us-1.html" class="btn btn-link d-inline-flex align-items-center"><i class="fa fa-angle-right m-r10"></i>Learn More</a>
                </div>
            </div>
        </div>
    </section>
    <section class="content-inner">
        <div class="container">
            <div class="section-head style-1 text-center">
                <h6 class="sub-title bgl-primary m-b20 text-primary">Team</h6>
                <h2 class="title">Our Best Expertise</h2>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="team-carousel1 owl owl-carousel owl-none owl-theme owl-dots-primary-full">
                        @foreach(json_decode($documentObject['team'], true)['fieldValue'] as $members)
                            @include('partials.components.team', [
                            'image' => $members['image'],
                            'name' => $members['name'],
                            'position' => $members['position'],
                            'instagram' => $members['instagram'],
                            ])
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="content-inner-1 bg-gray" style="background-image: url(assets/templates/images/background/bg3.png);">
        <div class="container">
            <div class="section-head style-3 text-center">
                <h2 class="title m-t10">What Our Clients Say’s</h2>
                <div class="dlab-separator style-2 bg-primary"></div>
            </div>
            <div class="testimonials-carousel2 owl-carousel owl-theme owl-none owl-theme owl-dots-primary-full wow fadeIn" data-wow-duration="2s" data-wow-delay="0.6s">
                @foreach(json_decode($documentObject['feedback'], true)['fieldValue'] as $count)
                @include('partials.components.feedback', [
                'image' => $count['image'],
                'text' => $count['text'],
                'name' => $count['name'],
                ])
                @endforeach
            </div>
        </div>
    </section>
{{--    {!! evolutionCMS()->runSnippet('FormLister', [--}}
{{--                    'formid' => 'offer',--}}
{{--                    'to' => 'rus.sayko17@gmail.com',--}}
{{--                    'subject' => 'Offer',--}}
{{--                    'protectSubmit' => '0',--}}
{{--                    'submitLimit' => '0',--}}
{{--                    'rules' => [--}}
{{--                        'name' => [--}}
{{--                            'required' => 'Name is required!',--}}
{{--                        ],--}}
{{--                        'email' => [--}}
{{--                            'required' => 'Email is required!',--}}
{{--                            'email' => 'Incorrect data type!'--}}
{{--                        ],--}}
{{--                        'number' => [--}}
{{--                            'required' => 'Phone is empty!',--}}
{{--                        ],--}}
{{--                        'message' => [--}}
{{--                                'required' => 'Message is empty!',--}}
{{--                        ],--}}
{{--                        'title' => [--}}
{{--                                'required' => 'Title is empty!',--}}
{{--                        ]--}}
{{--                    ],--}}
{{--                    'formTpl' => '@B_FILE:partials/form/Form',--}}
{{--                    'reportTpl' => '@B_FILE:partials/form/FormReport',--}}
{{--                    'successTpl' => '@B_FILE:partials/form/FormSuccess'--}}
{{--                    ])!!}--}}
    <section class="content-inner" id="contact-form">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 m-b30 wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.2s">
                    <div class="dlab-media">
                        <img src="assets/templates/images/about/img8.png" class="move-1" alt="">
                    </div>
                </div>
                <div class="col-lg-6 m-b30 wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.4s">
                    <form class="dlab-form style-1">
                        <div class="section-head style-3">
                            <h2 class="title m-t10">Get In Touch With Us</h2>
                            <div class="dlab-separator style-2 bg-primary"></div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Full Name">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Email Address">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Phone No.">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Project Title">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="input-group">
                                    <textarea class="form-control">Message</textarea>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-corner gradient btn-block btn-primary">Submit Now</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection