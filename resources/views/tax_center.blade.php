@extends('layouts.app')

@section('content')
    <div class="main-content pt--125">


        <div class="rwt-split-area rn-section-gap">
            <div class="wrapper">
                <div class="row">
                    <div class="col-lg-12 mb--40">
                        <div class="section-title text-center sal-animate" data-sal="slide-up" data-sal-duration="400" data-sal-delay="150">
                            <h4 class="subtitle "><span class="theme-gradient">Services . {{ $tax_center->title }}                            </span></h4>
                            <h2 class="title w-600 mb--20">{{ $tax_center->title }}</h2>
                        </div>
                    </div>
                </div>
                <div class="rn-splite-style">
                    <div class="split-wrapper">
                        <div class="row g-0 radius-10">
                            <div class="col-lg-12 col-xl-6 col-12">
                                <div class="thumbnail">
                                    <img src="{{ asset("images/tax_center/".$tax_center->img) }}" alt="tax-center-image">
                                </div>
                            </div>
                            <div class="col-lg-12 col-xl-6 col-12">
                                <div class="split-inner dynamic-content">
                                    {!! $tax_center->content !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
@endsection
