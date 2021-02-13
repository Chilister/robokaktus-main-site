@extends('layouts.app')

@section('content')
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog p-2">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Створити</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="dlab-form">
                        <div class="row">
{{--                            <div class="col-sm-6">--}}
{{--                                <div class="input-group">--}}
{{--                                    <input type="text" class="quizes-person-name form-control" placeholder="Ім'я">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-sm-6">--}}
{{--                                <div class="input-group">--}}
{{--                                    <input type="text" class="quizes-person-surname form-control" placeholder="Прізвище">--}}
{{--                                </div>--}}
{{--                            </div>--}}
                            <div class="col-sm-12">
                                <div class="input-group">
                                    <input type="text" class="quizes-name form-control" placeholder="Назва" maxlength="30">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="input-group">
                                    <textarea class="quizes-description form-control" placeholder="Опис" maxlength="100"></textarea>
                                </div>
                            </div>
{{--                            <div class="col-sm-12">--}}
{{--                                <div class="input-group custom-file">--}}
{{--                                    <input type="file" class="form-control custom-file-input">--}}
{{--                                    <label class="custom-file-label">Вибрати фото</label>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                            <div class="col-sm-12 d-flex mt-2 justify-content-around">
                                <button type="button" class="btn rounded-xl btn-secondary" data-dismiss="modal">Закрити</button>
                                <button type="submit" id="quizes-submit" data-dismiss="modal" class="btn btn-primary rounded-xl gradient">Створити</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <section class="content-inner" style="background-image: url(/assets/templates/images/background/bg2.png);">
        <div class="container mb-4">
            <div class="top-bar">
                <div class="row d-flex justify-content-end align-items-center">
                    <div class="dlab-topbar-right">
                        <ul class="dlab-social-icon">
                            <li><a class="fas fa-plus" href="" data-toggle="modal" data-target="#exampleModal"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row" id="quizes-list">
                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
                    <div class="dlab-blog style-1 m-b30">
                        <div class="dlab-info">
                            <div class="dlab-meta">
                                <ul>
                                    <li class="post-date"><i class="flaticon-clock m-r10"></i>7 March, 2020</li>
                                    <li class="post-author"><i class="flaticon-user m-r10"></i>By <a
                                                href="javascript:void(0);"> Johne Doe</a>
                                    </li>
                                </ul>
                            </div>
                            <h4 class="dlab-title">
                                <a href="blog-details-2.html">Donec feugiat mollis nisi in dignissim. Morbi sollicitudin
                                    quis lectus vel euismod.</a>
                            </h4>
                            <p class="m-b0">Maecenas aliquet quam sed tellus cursus, eget sodales elit luctus. Proin
                                blandit sed arcu sed ultricies. Fusce ac ligula vel enim fermentum blandit. </p>
                        </div>
                        <div class="dlab-media dlab-img-effect zoom">
                            <a href="blog-details-2.html"><img src="/assets/templates/images/blog/blog-grid/pic1.jpg"
                                                               alt="Фото квіза"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection