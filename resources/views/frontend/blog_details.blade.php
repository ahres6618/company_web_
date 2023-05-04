@extends('frontend.main_master')
@section('main')
   <!-- main-area -->
   <main>

    <!-- breadcrumb-area -->
    <section class="breadcrumb__wrap">
        <div class="container custom-container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-10">
                    <div class="breadcrumb__wrap__content">
                        <h2 class="title">Single Article</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Blog Details</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="breadcrumb__wrap__icon">
            <ul>
                <li><img src="assets/img/icons/breadcrumb_icon01.png" alt=""></li>
                <li><img src="assets/img/icons/breadcrumb_icon02.png" alt=""></li>
                <li><img src="assets/img/icons/breadcrumb_icon03.png" alt=""></li>
                <li><img src="assets/img/icons/breadcrumb_icon04.png" alt=""></li>
                <li><img src="assets/img/icons/breadcrumb_icon05.png" alt=""></li>
                <li><img src="assets/img/icons/breadcrumb_icon06.png" alt=""></li>
            </ul>
        </div>
    </section>
    <!-- breadcrumb-area-end -->


    <!-- blog-details-area -->
    <section class="standard__blog blog__details">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="standard__blog__post">
                        <div class="standard__blog__thumb">
                            <img src="assets/img/blog/blog_thumb01.jpg" alt="">
                        </div>
                        <div class="blog__details__content services__details__content">
                            <ul class="blog__post__meta">
                                <li><i class="fal fa-calendar-alt"></i>{{Carbon\Carbon::parse($blog->created_at)->diffForhumans()}}</li>
                               
                            </ul>
                            <h2 class="title">{{$blog->blog_title}}</h2>
                            
                               <p>{{$blog->blog_description}} </p>
                          
                            <ul class="services__details__list">
                                <li>Achieving effectiveness,</li>
                                <li>Perceiving and utilizing opportunities,</li>
                                <li>Mobilising resources,</li>
                                <li>Securing an advantageous position,</li>
                                <li>Meeting challenges and threats,</li>
                                <li>Directing efforts and behaviour and</li>
                                <li>Gaining command over the situation.</li>
                            </ul>
                            <p>A business strategy is a set of competitive moves and actions that a business uses to attract customers, compete successfully, strengthening performance, and achieve organizational goals. It outlines how business should be carried out to reach the desired ends</p>
                            <div class="services__details__img">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <img src="assets/img/blog/blog_details_img01.jpg" alt="">
                                    </div>
                                    <div class="col-sm-6">
                                        <img src="assets/img/blog/blog_details_img02.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <h2 class="small-title">Nature of Business Strategy</h2>
                            <p>A business strategy is a combination of proactive actions on the part of management, for the purpose of enhancing the company’s market position and overall performance and reactions to unexpected developments and new market.</p>
                            <p>The maximum part of the company’s present strategy is a result of formerly initiated actions and business approaches, but when market conditions take an unanticipated turn, the company requires a strategic reaction to cope with contingencies. Hence, for unforeseen development, a part of the business strategy is formulated as a reasoned response nature of business strategy.</p>
                        </div>
                        <div class="blog__details__bottom">
                            <ul class="blog__details__tag">
                                <li class="title">Tag:</li>
                                <li class="tags-list">
                                    <a href="#">{{$blog->blog_tags}}</a>
                                  
                                </li>
                            </ul>
                            <ul class="blog__details__social">
                                <li class="title">Share :</li>
                                <li class="social-icons">
                                    <a href="#"><i class="fab fa-facebook"></i></a>
                                    <a href="#"><i class="fab fa-twitter-square"></i></a>
                                    <a href="#"><i class="fab fa-linkedin"></i></a>
                                    <a href="#"><i class="fab fa-pinterest"></i></a>
                                </li>
                            </ul>
                        </div>
                     
                       
                      
                    </div>
                </div>
                <div class="col-lg-4">
                    <aside class="blog__sidebar">
                        <div class="widget">
                            <form action="#" class="search-form">
                                <input type="text" placeholder="Search">
                                <button type="submit"><i class="fal fa-search"></i></button>
                            </form>
                        </div>
                        <div class="widget">
                            <h4 class="widget-title">Recent Blog</h4>
                            <ul class="rc__post">
                                @foreach($latestblog as $post)
                                <li class="rc__post__item">
                                    <div class="rc__post__thumb">
                                        <a href="blog-details.html"><img src="assets/img/blog/rc_thumb01.jpg" alt=""></a>
                                    </div>
                                    <div class="rc__post__content">
                                        <h5 class="title"><a href="{{route('blog.details',$post->id)}}">{{$post->blog_title}}</a></h5>
                                        <span class="post-date"><i class="fal fa-calendar-alt"></i> {{Carbon\Carbon::parse($post->created_at)->diffForhumans()}}</span>
                                    </div>
                                </li>
                                @endforeach
                               
                            </ul>
                        </div>
                        <div class="widget">
                            <h4 class="widget-title">Categories</h4>
                            <ul class="sidebar__cat">
                                @foreach ($categories as $cat)
                                
                                <li class="sidebar__cat__item"><a href="{{route('category.post',$cat->blog_category )}}">{{$cat->blog_category}}</a></li>
                                @endforeach
                               
                            </ul>
                        </div>
                        
                        <div class="widget">
                            <h4 class="widget-title">Popular Tags</h4>
                            <ul class="sidebar__tags">
                                <li><a href="blog.html"></a></li>
                              
                            </ul>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>
    <!-- blog-details-area-end -->


 

</main>
<!-- main-area-end -->
@endsection