@extends('layouts.app')

@section('content')
    <div class="banner-two gradient">
        <div class="container">
            <div class="banner-inner">
                <img class="img1 move-2" src="assets/templates/images/pattern/pattern8.png" alt="Круг">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="banner-content text-white">
                            <h6 class="wow fadeInUp sub-title bgl-light text-white" data-wow-delay="0.5s">We are The
                                Best</h6>
                            <h1 class="wow fadeInUp m-b20" data-wow-delay="1s">{{$documentObject['longtitle']}}</h1>
                            <p class="wow fadeInUp m-b30" data-wow-delay="1.5s">{{$documentObject['description']}}</p>
                            <a href="#contact-form" title="Замовити сайт"
                               class="wow contact-form fadeInUp btn btn-light text-primary shadow rounded-xl"
                               data-wow-delay="2s">Замовити сайт</a>
                        </div>
                    </div>
                </div>
                <img class="img2 move-1" src="assets/templates/images/pattern/pattern8.png" alt="Круг">
                <img class="img3 move-2" src="assets/templates/images/pattern/pattern9.png" alt="Круг">
            </div>
        </div>
        <div class="dz-media">
            <img src="{{ \Helper::phpThumb($documentObject['main_image'], 'f=webp,w=899,h=899,zc=1,bg=FFFFFF,q=75')}}"
                 class="move-2" alt="Головне фото">
        </div>
    </div>
    @foreach(json_decode($documentObject['about'], true)['fieldValue'] as $section)
        @include('partials.components.about', [
               'image' => $section['image'],
               'title' => $section['title'],
               'description' => $section['description'],
               'longtitle' => $section['longtitle'],
               'o_field' => $section['o_field'],
               's_field' => $section['s_field'],
               't_field' => $section['t_field'],
               'f_field' => $section['f_field'],
               ])
    @endforeach
    <section class="content-inner-2" style="background-image: url(assets/templates/images/background/bg1.png);">
        <div class="container">
            <div class="section-head style-1 text-center">
                <h2 class="title">Гарантія успіху - сучасні технології</h2>
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
    @foreach(json_decode($documentObject['dispute'], true)['fieldValue'] as $disp)
        @if ($loop->even)
            @include('partials.components.disputeRight', [
           'image' => $disp['image'],
           'title' => $disp['title'],
           'f_desc' => $disp['f_desc'],
           's_desc' => $disp['s_desc'],
           'longtitle' => $disp['longtitle'],
           'link' => $disp['link'],
            ])
        @endif
        @if ($loop->odd)
            @include('partials.components.dispute', [
              'image' => $disp['image'],
              'title' => $disp['title'],
              'f_desc' => $disp['f_desc'],
              's_desc' => $disp['s_desc'],
              'longtitle' => $disp['longtitle'],
              'link' => $disp['link'],
            ])
        @endif
    @endforeach
    <section class="content-inner">
        <div class="container">
            <div class="section-head style-1 text-center">
                <h2 class="title">Наша команда</h2>
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
                <h2 class="title m-t10">Відгуки</h2>
                <div class="dlab-separator style-2 bg-primary"></div>
            </div>
            <div class="testimonials-carousel2 owl-carousel owl-theme owl-none owl-theme owl-dots-primary-full wow fadeIn"
                 data-wow-duration="2s" data-wow-delay="0.6s">
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
    {!! evolutionCMS()->runSnippet('FormLister', [
                    'formid' => 'offer',
                    'to' => 'robokaktus.web@gmail.com',
                    'subject' => 'Замовлення сайту',
                    'protectSubmit' => '0',
                    'submitLimit' => '0',
                    'rules' => [
                        'name' => [
                            'required' => 'Name is required!',
                        ],
                        'email' => [
                            'required' => 'Email is required!',
                            'email' => 'Incorrect data type!'
                        ],
                        'number' => [
                            'required' => 'Phone is empty!',
                        ],
                        'message' => [
                                'required' => 'Message is empty!',
                        ],
                    ],
                    'formTpl' => '@B_FILE:partials/form/Form',
                    'reportTpl' => '@B_FILE:partials/form/FormReport',
                    'successTpl' => '@B_FILE:partials/form/FormSuccess'
    ])!!}
@endsection