@extends('layouts.app')

@section('content')
    <div class="main-content pt--125">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center sal-animate" data-sal="slide-up" data-sal-duration="400"
                        data-sal-delay="150">
                        <h4 class="subtitle "><span class="theme-gradient">Our Experts. </span></h4>
                    </div>
                </div>
                <div class="col-lg-8 offset-lg-2">
                    <div class="content text-center">
                        <div class="page-title">
                            <h1 class="theme-gradient"> Our Experts Team </h1>
                        </div>
                    </div>
                </div>
                @foreach ($members as $member)
                    <div class="col-xl-4 col-lg-6  col-md-6  pt-4 pb-4">
                        <div class="mt--30 sal-animate me-3 ms-3" data-sal="slide-up" data-sal-duration="700"
                            data-sal-delay="200">
                            <div class="rn-team team-style-default">
                                <div class="inner">
                                    <div class="thumbnail">
                                        <img src="{{ asset('images/members/' . $member->img) }}" alt="member-image">
                                    </div>
                                    <div class="content">
                                        <h2 class="title">{{ $member->name }}</h2>
                                        <h6 class="subtitle theme-gradient">{{ $member->job_title }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
