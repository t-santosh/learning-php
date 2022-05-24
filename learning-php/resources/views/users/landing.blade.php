@extends('layouts.master')
@section('content')

<div class="row big-screen" style="background-image: url('/images/img.jpeg'); background-repeat: no-repeat; height: 500px; background-size: cover;">
<div class="col-6">
    <!-- <h2>This is a heading</h2> -->
</div>
 
</div>
<div class="container">
    <!-- Slider section -->
    <!-- <div class="slideshow-container">

        <div class="mySlides fade">
            <div class="numbertext">1 / 3</div>
            <img src="{{(URL::asset('/images/slide-1.jpeg'))}}" style="width:100%;">
            <div class="text">Caption Text</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">2 / 3</div>
            <img src="i{{(URL::asset('/images/slide-2.jpeg'))}}" style="width:100%">
            <div class="text">Caption Two</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">3 / 3</div>
            <img src="{{(URL::asset('/images/slide-1.jpeg'))}}" style="width:100%">
            <div class="text">Caption Three</div>
        </div>

        <a class="prev" onclick="plusSlides(-1)">❮</a>
        <a class="next" onclick="plusSlides(1)">❯</a>

    </div>
    <br>

    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span> 
        <span class="dot" onclick="currentSlide(2)"></span> 
        <span class="dot" onclick="currentSlide(3)"></span> 
    </div> -->


    <!-- About us Section -->
    <div class="row about">
        <div class="col-7 hm-text">
            <h1>About us</h1>
            <h2>Who we are</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, quaerat beatae nihil earum iure quis in. Suscipit reprehenderit voluptatibus, itaque molestias corrupti obcaecati inventore autem dolorem quia voluptatum! Fugit, ea.</p>
            <button class="btn btn-primary about-us">Learn more about us</button>
        </div>
        <div class="col-5 hm-text">
            <img src="{{(URL::asset('/images/map.jpeg'))}}">
        </div>
    </div>
    <!-- Services Section -->
    <div class="row services">
        <div class="col-4 hm-text">
            <h1>Services</h1>
            <h2>What we do</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, quaerat beatae nihil earum iure quis in. Suscipit reprehenderit voluptatibus, itaque molestias corrupti obcaecati inventore autem dolorem quia voluptatum! Fugit, ea.</p>
            <p>Suscipit reprehenderit voluptatibus, itaque molestias corrupti obcaecati inventore autem dolorem quia voluptatum! Fugit, ea.</p>
        </div>
        <div class="col-4 hm-text">
            <div class="card">
                <div class="container">
                    <img src="{{(URL::asset('/images/service-1.png'))}}">
                    <h4><b>Loreum Ipsum</b></h4>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing que temporaipsum. Atque temporaipsum dolor sit amet consectetur adipisicing elit. Atque temporaipsum dolor sit amet consectetur adipisicing elit. Atque tempora architecto hic aut nam quas saepe placeat cumque ad enim? Adipisci, earum. Minus accusantium sint magni aspernatur tempore, quasi ex.</p>
                </div>
            </div>

        </div>
        <div class="col-4 hm-text">
        <div class="card">
            <div class="container">
            <img src="{{(URL::asset('/images/service-1.png'))}}">
            <h4><b>Loreum Ipsium</b></h4>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Atque tempora, adipisicing elit. Atque tempora, adipisicing elit. Atque tempora, architecto hic aut nam quas saepe placeat cumque ad enim? Adipisci, earum. Minus accusantium sint magni aspernatur tempore, quasi ipsum dolor sit amet consectetur adipisicing elit. Atque temporaex.</p>
            </div>
        </div>

        </div>
    </div>
</div>

    <!-- Industry Section -->
    <div class="row industry">
        <div class="col-8 colored hm-text">
            <h1>Industries</h1>
            <h2>For almost a decade, we have worked with the following industries</h2>
        </div>
        <div class="col-4">

        </div>
 
        <div class="row">
            <div class="col-8 colored hm-text">
                <p>There will be slide show...</p>
                <div class="row">
                    <div class="col-4" style="padding: 10px 10px 0 0;">
                        <div class="card" style="padding: 10px 10px 30px;">
                            <div class="container">
                                <img src="{{(URL::asset('/images/service-1.png'))}}">
                                <h4><b>Loreum Ipsium</b></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-4" style="padding: 10px 10px 0 0;">
                        <div class="card" style="padding: 10px 10px 30px;">
                            <div class="container">
                                <img src="{{(URL::asset('/images/service-1.png'))}}">
                                <h4><b>Loreum Ipsium</b></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-4" style="padding: 10px 10px 0 0;">
                        <div class="card" style="padding: 10px 10px 30px;">
                            <div class="container">
                                <img src="{{(URL::asset('/images/service-1.png'))}}">
                                <h4><b>Loreum Ipsium</b></h4>
                            </div>
                        </div>
                    </div>

                </div>
                
            </div>
            <div class="col-4 colored hm-text">
                <p>Every industry has its own set of challenges, keeping that in mind, our engineers use the latest technologies to create purpose-built solutions and aptly tailor it to clients specific needs and requirements.</p>
                <button class="btn btn-primary industry">Customer stories</button>
            </div>
        </div>
    </div>

    <!-- Stories or Blogs Section -->
<div class="container">
    <div class="blog titles hm-text">

        <h1>Stories</h1>
        <h2>Recents blogs and events</h2>

    </div>
    <div class="row blogs">
        <div class="row">
            <div class="col-4 hm-text">
                <div class="card blog">
                    <img src="{{(URL::asset('/blogs/blog-1.webp'))}}">
                    <div class="container blog">
                        <h1 class="post-title">New Initiatives to Learn Hands-on AWS Skills: AWS Cloud Quest & AWS Educate</h1>
                        <h3 class="date">Posted Date</h3>
                        <p class="description">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Atque tempora, architecto hic aut nam quas saepe placeat cumque ad enim? Adipisci, earum. Minus accusantium sint magni aspernatur tempore, quasi ex.</p>
                    </div>
                </div>
            </div>

            <div class="col-4 hm-text">
                <div class="card blog">
                    <img src="{{(URL::asset('/blogs/blog-2.png'))}}" alt="Avatar" style="width:100%">
                    <div class="container blog">
                        <h1>Discover DevOps: Future of Devops in 2022</h1>
                        <h3>Posted Date</h3>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Atque tempora, architecto hic aut nam quas saepe placeat cumque ad enim? Adipisci, earum. Minus accusantium sint magni aspernatur tempore, quasi ex.</p>
                    </div>
                </div>
            </div>

            <div class="col-4 hm-text">
                <div class="card blog">
                    <img src="{{(URL::asset('/blogs/blog-3.jpeg'))}}" alt="Avatar" style="width:100%">
                    <div class="container blog">
                        <h1>10 Things We Don’t Do to Get Our Important Tasks Done</h1>
                        <h3>Posted Date</h3>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Atque tempora, architecto hic aut nam quas saepe placeat cumque ad enim? Adipisci, earum. Minus accusantium sint magni aspernatur tempore, quasi ex.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
