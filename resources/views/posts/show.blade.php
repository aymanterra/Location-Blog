
@extends('layouts.master')

@section('content')

    <?php

        $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

    ?>
<!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <!-- <header class="intro-header" style="background-image: url('img/post-bg.jpg')"> -->
    <div id="map"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="post-heading">
                    
                    <h1>
                        {{ $post->title }}
                    </h1>
                    
                    <h2 class="subheading">
                        {{ $post->subtitle }}
                    </h2>

                    <div class="post-preview">
                        <span class="post-meta">
                            Posted by 
                            <a href="#">
                                {{ $post->user->name }}
                            </a> 
                            on 
                            {{ $post->created_at->toFormattedDateString() }}
                        </span>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- </header> -->

    <!-- Post Content -->
    <article>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <p>
                        {{ $post->body }}
                    </p>

                    <hr>

                    <div class="fb-like" data-href="{{$actual_link}}" data-layout="button_count" data-action="like" data-size="large" data-show-faces="true" data-share="true">
                    </div>
                    
                    <br>
                    <br>

                    <div class="fb-comments" data-href="{{$actual_link}}" data-numposts="5" data-width="450" data-order-by="reverse_time">
                    </div>

                </div>
            </div>
        </div>
    </article>

    <script>
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.9";
            fjs.parentNode.insertBefore(js, fjs);
        }
        (document, 'script', 'facebook-jssdk'));
    </script>

    <script type="text/javascript">
        var draggable = false ; 
        var zoomable = false ;
        var postPos = {
            lat: {{ $post->lat }},
            lng: {{ $post->lng }}
        };
        // console.log(postPos);
    </script>

    @include('layouts.googleapi')

@endsection
