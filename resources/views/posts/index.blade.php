
@extends('layouts.master')



@section('content')

    @include('layouts.header')



    <!-- Main Content -->
    <div class="container">

        <div class="form-group share">
            <a href="/posts/create" class="btn btn-info">Share Your Location</a>
        </div>
        
        <br>
        <br>
        <br>
        
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">

                @foreach($posts as $post)
                    <div class="post-preview">
                        <a href="/posts/{{ $post->id }}">
                            <h2 class="post-title">
                                {{ $post->title }}
                            </h2>
                            <h3 class="post-subtitle">
                                {{ $post->subtitle }}
                            </h3>
                        </a>
                        <p class="post-meta">
                            Posted by 
                            <a href="#">{{ $post->user->name }}</a> 
                            on {{ $post->created_at->toFormattedDateString() }}
                        </p>
                    </div>
                    <hr>
                @endforeach

                <!-- Pager -->
                <ul class="pager">
                    <li class="next">
                        <a href="#">Older Posts &rarr;</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        var draggable = false ; 
        var zoomable = false ;
    </script>
    
    @include('layouts.googleapi')

@endsection
