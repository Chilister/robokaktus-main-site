<section class="content-inner">
    <div class="container">
        <div class="row align-items-center flex-row-reverse">
            <div class="col-lg-6 m-b30 wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.2s">
                <div class="dz-media">
                    <img src="{{ \Helper::phpThumb($image, 'f=webp,w=700,h=700,zc=1,bg=FFFFFF,q=75')}}" style="box-shadow: 0 0 13px 0 rgba(50, 50, 50, 0.75);" class="move-1 rounded" alt="">
                </div>
            </div>
            <div class="col-lg-6 m-b30 wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.4s">
                <div class="section-head style-1 mb-4">
                    <h6 class="sub-title bgl-primary m-b20 text-primary">{{$title}}</h6>
                    <h2 class="title">{{$longtitle}}</h2>
                </div>
                <p>{{$f_desc}}</p>
                <p class="m-b30">{{$s_desc}}</p>
                <a target="_blank" href="{{$link}}" title="Дізнатись більше" class="btn btn-link d-inline-flex align-items-center"><i class="fa fa-angle-right m-r10"></i>Дізнатись більше</a>
            </div>
        </div>
    </div>
</section>