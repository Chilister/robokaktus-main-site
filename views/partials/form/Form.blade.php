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
                    <input type="hidden" value="offer" name="formid">
                    <div class="section-head style-3">
                        <h2 class="title m-t10">Get In Touch With Us</h2>
                        <div class="dlab-separator style-2 bg-primary"></div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="input-group">
                                <input type="text" name="name" class="{{$data['name.classname']}} form-control" value="{{$data['name.value']}}" placeholder="Full Name">
                                {{$data['name.error']}}
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="input-group">
                                <input type="email" name="email" class="{{$data['email.classname']}} form-control" value="{{$data['email.value']}}" placeholder="Email Address">
                                {{$data['email.error']}}
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="input-group">
                                <input type="text" name="number" class="{{$data['phone.classname']}} form-control" value="{{$data['phone.value']}}" placeholder="Phone No.">
                                {{$data['phone.error']}}
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="input-group">
                                <input name="title" value="{{$data['title.value']}}" type="text" class="{{$data['title.classname']}} form-control" placeholder="Project Title">
                                {{$data['title.error']}}
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="input-group">
                                <textarea name="message" class="{{$data['message.classname']}} form-control">{{$data['message.value']}}</textarea>
                                {!!  $data['message.error']!!}
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