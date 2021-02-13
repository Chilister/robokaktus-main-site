<section class="content-inner about-wraper-1">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 m-b30 wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.2s">
                <div class="dz-media">
                    <img src="{{ \Helper::phpThumb($image, 'f=webp,w=900,h=600,zc=1,bg=FFFFFF,q=75')}}" alt="Фото автора сайту">
                </div>
            </div>
            <div class="col-lg-6 m-b30 wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.4s">
                <div class="section-head style-2">
                    <h6 class="sub-title text-primary">{{$title}}</h6>
                    <div class="dlab-separator style-1"></div>
                    <h2 class="title m-b20">{{$longtitle}}</h2>
                    <p>{{$description}}</p>
                </div>
                <ul class="list-check primary m-b30">
                    @if(!empty($o_field))
                        <li>{{$o_field}}</li>
                    @endif
                    @if(!empty($s_field))
                        <li>{{$s_field}}</li>
                    @endif
                    @if(!empty($t_field))
                        <li>{{$t_field}}</li>
                    @endif
                    @if(!empty($f_field))
                        <li>{{$f_field}}</li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
</section>