@extends('layouts.app')

@section('content')
    <div class="main-content pt--125">


        <div class="rn-blog-details-area">
            <div class="post-page-banner rn-section-gapTop">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                            <div class="content text-center">
                                <div class="page-title">
                                    <h1 class="theme-gradient">Best Corporate Tips You Will Read This Year.</h1>
                                </div>
                                <ul class="rn-meta-list">
                                    <li>
                                        <i class="feather-user"></i>
                                        <a href="#">Irin Pervin</a>
                                    </li>
                                    <li>
                                        <i class="feather-calendar"></i>
                                        10 Dec 2021
                                    </li>
                                </ul>
                                <div class="thumbnail alignwide mt--60"><img class="w-100 radius"
                                        src="{{ asset("doob_template_assets/images/blog/mthumb.jfif") }}" alt="Blog Images"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="blog-details-content pt--60 rn-section-gapBottom">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                            <div class="content">

                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                    unknown printer took a galley of type and scrambled it to make a type specimen
                                    book.There are many variations of passages of Lorem Ipsum available, but the
                                    majority have suffered alteration in some form, by injected humour, or
                                    randomised words which don't look even slightly believable. If you are going to
                                    use a passage of Lorem Ipsum, you need to be sure there isn't anything
                                    embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the
                                    Internet tend to repeat predefined chunks as necessary, making this the first
                                    true generator on the Internet. It uses a dictionary of over 200 Latin words,
                                    combined with a handful of model sentence structures, to generate Lorem Ipsum
                                    which looks reasonable.</p>


                                <p>It has survived not only five centuries, but also the leap into electronic
                                    typesetting, remaining essentially unchanged. It was popularised in the 1960s
                                    with the release of Letraset sheets containing Lorem Ipsum passages, and more
                                    recently with desktop publishing software like Aldus PageMaker including
                                    versions of Lorem Ipsum.</p>


                                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots
                                    in a piece of classical Latin literature from 45 BC, making it over 2000 years
                                    old. Richard McClintock, a Latin professor at Hampden-Sydney College in
                                    Virginia, looked up one of the more obscure Latin words.</p>

                                <p>There are many variations of passages of Lorem Ipsum available, but the majority
                                    have suffered alteration in some form, by injected humour, or randomised words
                                    which don't look even slightly believable.</p>

                                <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't
                                    anything embarrassing hidden in the middle of text. All the Lorem Ipsum
                                    generators on the Internet tend to repeat predefined chunks as necessary, making
                                    this the first true generator on the Internet.</p>

                                <p>There are many variations of passages of Lorem Ipsum available, but the majority
                                    have suffered alteration in some form, by injected humour, or randomised words
                                    which don't look even slightly believable. If you are going to use a passage of
                                    Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the
                                    middle of text. All the Lorem Ipsum generators on the Internet tend to repeat
                                    predefined chunks as necessary, making this the first true generator on the
                                    Internet. It uses a dictionary of over 200 Latin words, combined with a handful
                                    of model sentence structures, to generate Lorem Ipsum which looks reasonable.
                                </p>

                                <div class="category-meta">
                                    <span class="text">Tags:</span>
                                    <div class="tagcloud">
                                        <a href="#">Corporate</a>
                                        <a href="#">Agency</a>
                                        <a href="#">Creative</a>
                                        <a href="#">Design</a>
                                        <a href="#">Minimal</a>
                                        <a href="#">Company</a>
                                        <a href="#">Development</a>
                                        <a href="#">App Landing</a>
                                        <a href="#">Startup</a>
                                        <a href="#">App</a>
                                        <a href="#">Business</a>
                                        <a href="#">Software</a>
                                        <a href="#">Landing</a>
                                        <a href="#">Art</a>
                                    </div>
                                </div>

                                <!-- Start Contact Form Area  -->
                                <div class="rn-comment-form pt--60">
                                    <div class="inner">
                                        <div class="section-title">
                                            <span class="subtitle">Have a Comment?</span>
                                            <h2 class="title">Leave a Reply</h2>
                                        </div>
                                        <form class="mt--40" action="#">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-12 col-12">
                                                    <div class="rnform-group"><input type="text" placeholder="Name">
                                                    </div>
                                                    <div class="rnform-group"><input type="email" placeholder="Email">
                                                    </div>
                                                    <div class="rnform-group"><input type="text" placeholder="Website">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-12 col-12">
                                                    <div class="rnform-group">
                                                        <textarea placeholder="Comment"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="blog-btn"><a class="btn-default"
                                                            href="blog-details.html"><span>SEND
                                                                MESSAGE</span></a></div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- End Contact Form Area  -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>
@endsection
