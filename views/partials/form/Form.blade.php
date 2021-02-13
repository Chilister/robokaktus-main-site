<section class="content-inner" id="contact-form">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 m-b30 wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.2s">
                <div class="dlab-media">
                    <img src="assets/templates/images/about/img8.png" class="move-1" alt="">
                </div>
            </div>
            <div class="col-lg-6 m-b30 wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.4s">
                <form class="dlab-form style-1" method="post">
                    <input type="hidden" value="offer" name="formid">
                    <div class="section-head style-3">
                        <h2 class="title m-t10">Будь в тренді</h2>
                        <div class="dlab-separator style-2 bg-primary"></div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="input-group">
                                <input type="text" name="name" class="{{$data['name.classname']}} form-control" value="{{$data['name.value']}}" placeholder="ФІО">
                                {{$data['name.error']}}
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="input-group">
                                <input type="email" name="email" class="{{$data['email.classname']}} form-control" value="{{$data['email.value']}}" placeholder="Електрона пошта">
                                {{$data['email.error']}}
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="input-group">
                                <input type="text" name="number" class="{{$data['phone.classname']}} form-control" value="{{$data['phone.value']}}" placeholder="Номер телефону">
                                {{$data['phone.error']}}
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="input-group">
                                <textarea name="message" placeholder="Повідомлення" class="{{$data['message.classname']}} form-control">{{$data['message.value']}}</textarea>
                                {!!  $data['message.error']!!}
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <button type="submit" onclick="window.scrollTo(0,300)" class="btn btn-corner gradient btn-block btn-primary">Замовити сайт</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>