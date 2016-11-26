@extends('layouts.default')

@php
Theme::configSet('page-title', 'Bài viết '.$article->title);
@endphp

@section('content')
<div class="container sitecontainer single-wrapper bgw">
    <div class="row">
        <div class="col-md-9 col-sm-9 col-xs-12 m22 single-post">
            <div class="widget">
                <div class="large-widget m30">
                    <div class="post clearfix">

                        <div class="title-area">
                            <div class="bread">
                                <ol class="breadcrumb">
                                    <li><a href="{{ url( '' ) }}">{{ trans( 'site.home' ) }}</a></li>
                                    <li class="">{{ $article->category->name }}</li>
                                    <li class="active">{{ $article->title }}</li>
                                </ol>
                            </div><!-- end bread -->
                            <div class="colorfulcats">
                                <a href="#"><span class="label label-primary">Interview</span></a>
                                <a href="#"><span class="label label-warning">Web Design</span></a>
                            </div>
                            <h3>{{ $article->title }}</h3>

                            <div class="large-post-meta">
                                <span class="avatar"><a href="author.html"><img src="upload/avatar_02.png" alt="" class="img-circle"> Mark Twisted</a></span>
                                <small>&#124;</small>
                                <span><a href="category.html"><i class="fa fa-clock-o"></i> {{ $article->date }}</a></span>
                                <small class="hidden-xs">&#124;</small>
                                <span class="hidden-xs"><a href="single.html#comments"><i class="fa fa-comments-o"></i> 92</a></span>
                                <small class="hidden-xs">&#124;</small>
                                <span class="hidden-xs"><a href="single.html"><i class="fa fa-eye"></i> 1223</a></span>
                            </div><!-- end meta -->

                            <div class="post-sharing">
                                <ul class="list-inline">
                                    <li><a href="#" class="fb-button btn btn-primary"><i class="fa fa-facebook"></i> <span class="hidden-xs">Share on Facebook</span></a></li>
                                    <li><a href="#" class="tw-button btn btn-primary"><i class="fa fa-twitter"></i> <span class="hidden-xs">Tweet on Twitter</span></a></li>
                                    <li><a href="#" class="gp-button btn btn-primary"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div><!-- end post-sharing -->
                        </div><!-- /.pull-right -->

                        <div class="post-media">
                            <a href="{{ url()->current() }}">
                                <img alt="" src="{{ asset( $article->image ) }}" class="img-responsive">
                            </a>
                        </div>

                    </div><!-- end post -->

					<div class="post-desc">
					{!! $article->content !!}
                    </div><!-- end post-desc -->

                    <div class="post-bottom">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="tags">
                                    <h4>Tags</h4>
                                    <a href="#">cinema</a>
                                    <a href="#">club</a>
                                    <a href="#">html5</a>
                                    <a href="#">css3</a>
                                    <a href="#">web design</a>
                                </div><!-- end tags -->
                            </div><!-- end col -->

                            <div class="col-md-4 hidden-xs">
                                <div class="post-share">
                                    <div class="customshare">
                                         <span class="list">
                                            <strong><i class="fa fa-share-alt"></i> 980
                                            <a href="#" class="tw"><i class="fa fa-twitter"></i></a>
                                            <a href="#" class="fb"><i class="fa fa-facebook"></i></a>
                                            <a href="#" class="gp"><i class="fa fa-google-plus"></i></a>
                                            </strong>
                                        </span>
                                    </div>
                                </div><!-- end share -->
                            </div><!-- end col -->
                        </div><!-- end row -->
                    </div><!-- end bottom -->

                    <div class="post-pager clearfix hidden-xs">
                        <ul class="pager row">
                            <li class="previous col-md-6 col-sm-12 text-left">
                                <div class="post">
                                    <div class="mini-widget-thumb">
                                        <a href="single.html">
                                            <img alt="" src="upload/carrer_04.jpg" class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="mini-widget-title">
                                        <a href="single.html"> Looking Logo Designer ($15 Budget) </a>
                                        <small>Previous Post</small>
                                    </div>
                                </div>
                            </li>
                            <li class="next col-md-6 col-sm-12 text-right">
                                <div class="post">
                                    <div class="mini-widget-thumb">
                                        <a href="single.html">
                                            <img alt="" src="upload/carrer_01.jpg" class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="mini-widget-title">
                                        <a href="single.html"> How to Make a Logo like Professional </a>
                                        <small>Next Post</small>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div><!-- end post-pager -->

                    <div class="authorbox">
                        <div class="row">
                            <div class="col-sm-12 col-md-12">
                                <div class="post clearfix">
                                    <div class="avatar-author">
                                        <a href="author.html">
                                            <img alt="" src="upload/avatar_02.png" class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="author-title desc">
                                        <a href="single.html">Roy DOE</a>
                                        <a class="authorlink" href="">http://templatevisual.com</a>
                                        <p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel ntium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo..</p>
                                        <ul class="list-inline authorsocial">
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                            <li><a href="#"><i class="fa fa-github"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div><!-- end col -->
                          </div><!-- end row -->
                    </div><!-- end authorbox -->

                    <div class="row m22 related-posts">
                        <div class="col-md-12">
                            <div class="widget">
                                <div class="widget-title">
                                    <h4>You May Also Like <span><a href="#">View all</a></span></h4>
                                    <hr>
                                </div><!-- end widget-title -->

                                <div class="review-posts row m30">
                                    <div class="post-review col-md-4 col-sm-12 col-xs-12">
                                        <div class="post-media entry">
                                            <img src="upload/news_01.jpg" alt="" class="img-responsive">
                                            <div class="magnifier">
                                                <div class="hover-title-left">
                                                    <span><a href="#" title=""><i class="fa fa-folder-open"></i> Mobile</a></span>
                                                </div><!-- end title -->
                                                <div class="hover-title">
                                                    <span><a href="#" title=""><i class="fa fa-comments-o"></i> 21 Comments</a></span>
                                                </div><!-- end title -->
                                            </div><!-- end magnifier -->
                                        </div><!-- end media -->
                                        <div class="post-title">
                                            <h3><a href="single.html">TechMag's all the details of the March 21 event at Apple!</a></h3>
                                        </div><!-- end post-title -->
                                    </div><!-- end post-review -->

                                    <div class="post-review col-md-4 col-sm-12 col-xs-12">
                                        <div class="post-media entry">
                                            <img src="upload/news_02.jpg" alt="" class="img-responsive">
                                            <div class="magnifier">
                                                <div class="hover-title-left">
                                                    <span><a href="#" title=""><i class="fa fa-folder-open"></i> Automotive</a></span>
                                                </div><!-- end title -->
                                                <div class="hover-title">
                                                    <span><a href="#" title=""><i class="fa fa-comments-o"></i> 21 Comments</a></span>
                                                </div><!-- end title -->
                                            </div><!-- end magnifier -->
                                        </div><!-- end media -->
                                        <div class="post-title">
                                            <h3><a href="single.html">Say Hello to Apple Titan Automative News Released</a></h3>
                                        </div><!-- end post-title -->
                                    </div><!-- end post-review -->

                                    <div class="post-review col-md-4 col-sm-12 col-xs-12">
                                        <div class="post-media entry">
                                            <img src="upload/news_03.jpg" alt="" class="img-responsive">
                                            <div class="magnifier">
                                                <div class="hover-title-left">
                                                    <span><a href="#" title=""><i class="fa fa-folder-open"></i> Space</a></span>
                                                </div><!-- end title -->
                                                <div class="hover-title">
                                                    <span><a href="#" title=""><i class="fa fa-comments-o"></i> 12 Comments</a></span>
                                                </div><!-- end title -->
                                            </div><!-- end magnifier -->
                                        </div><!-- end media -->
                                        <div class="post-title">
                                            <h3><a href="single.html">Starts over the world travel to Mars in March 2017</a></h3>
                                        </div><!-- end post-title -->
                                    </div><!-- end post-review -->

                                    <div class="post-review col-md-4 col-sm-12 col-xs-12">
                                        <div class="post-media entry">
                                            <img src="upload/news_04.jpg" alt="" class="img-responsive">
                                            <div class="magnifier">
                                                <div class="hover-title-left">
                                                    <span><a href="#" title=""><i class="fa fa-folder-open"></i> Space</a></span>
                                                </div><!-- end title -->
                                                <div class="hover-title">
                                                    <span><a href="#" title=""><i class="fa fa-comments-o"></i> 13 Comments</a></span>
                                                </div><!-- end title -->
                                            </div><!-- end magnifier -->
                                        </div><!-- end media -->
                                        <div class="post-title">
                                            <h3><a href="single.html">Supported Uber for next month, last time to change anything</a></h3>
                                        </div><!-- end post-title -->
                                    </div><!-- end post-review -->

                                    <div class="post-review col-md-4 col-sm-12 col-xs-12">
                                        <div class="post-media entry">
                                            <img src="upload/news_05.jpg" alt="" class="img-responsive">
                                            <div class="magnifier">
                                                <div class="hover-title-left">
                                                    <span><a href="#" title=""><i class="fa fa-folder-open"></i> Mobile</a></span>
                                                </div><!-- end title -->
                                                <div class="hover-title">
                                                    <span><a href="#" title=""><i class="fa fa-comments-o"></i> 21 Comments</a></span>
                                                </div><!-- end title -->
                                            </div><!-- end magnifier -->
                                        </div><!-- end media -->
                                        <div class="post-title">
                                            <h3><a href="single.html">Freddie Mac Die time 2016 News and Updates</a></h3>
                                        </div><!-- end post-title -->
                                    </div><!-- end post-review -->

                                    <div class="post-review col-md-4 col-sm-12 col-xs-12">
                                        <div class="post-media entry">
                                            <img src="upload/news_06.jpg" alt="" class="img-responsive">
                                            <div class="magnifier">
                                                <div class="hover-title-left">
                                                    <span><a href="#" title=""><i class="fa fa-folder-open"></i> Automotive</a></span>
                                                </div><!-- end title -->
                                                <div class="hover-title">
                                                    <span><a href="#" title=""><i class="fa fa-comments-o"></i> 21 Comments</a></span>
                                                </div><!-- end title -->
                                            </div><!-- end magnifier -->
                                        </div><!-- end media -->
                                        <div class="post-title">
                                            <h3><a href="single.html">Bloomberg Has been released new site called Name..</a></h3>
                                        </div><!-- end post-title -->
                                    </div><!-- end post-review -->
                                </div><!-- end review-post -->
                            </div><!-- end widget -->
                        </div><!-- end col -->
                    </div><!-- end row -->

                    <div id="comments" class="row">
                        <div class="col-md-12">
                            <div class="widget">
                                <div class="widget-title">
                                    <h4>What other's say about : How ThePhone thriller..</h4>
                                    <hr>
                                </div><!-- end widget-title -->

                                <div class="comments">
                                    <div class="well">
                                        <div class="media">
                                            <div class="media-left">
                                                <a href="#">
                                                  <img class="media-object img-circle" src="upload/avatar_02.png" alt="Generic placeholder image">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading">John DOE</h4>
                                                <div class="time-comment clearfix">
                                                    <small class="pull-left">21 Jun 2015</small>
                                                    <a class="pull-right btn btn-primary btn-xs">Reply</a>
                                                </div><!-- end time-comment -->
                                                <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                                            </div>
                                        </div><!-- end media -->

                                        <div class="media comment-reply">
                                            <div class="media-left">
                                                <a href="#">
                                                  <img class="media-object img-circle" src="upload/avatar_01.png" alt="Generic placeholder image">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading">Amanda FOX</h4>
                                                <div class="time-comment clearfix">
                                                    <small class="pull-left">21 Jun 2015</small>
                                                    <a class="pull-right btn btn-primary btn-xs">Reply</a>
                                                </div><!-- end time-comment -->
                                                <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                                            </div>
                                        </div><!-- end media -->

                                        <div class="media">
                                            <div class="media-left">
                                                <a href="#">
                                                  <img class="media-object img-circle" src="images/avatar.png" alt="Generic placeholder image">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading">Mark BOBS</h4>
                                                <div class="time-comment clearfix">
                                                    <small class="pull-left">21 Jun 2015</small>
                                                    <a class="pull-right btn btn-primary btn-xs">Reply</a>
                                                </div><!-- end time-comment -->
                                                <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                                            </div>
                                        </div><!-- end media -->
                                    </div><!-- end well -->
                                </div><!-- end collapse -->
                            </div><!-- end widget -->
                        </div><!-- end col -->
                    </div><!-- end row -->

                    <div class="row">
                        <div class="col-md-12">
                            <div class="widget">
                                <div class="widget-title">
                                    <h4>Leave a Comment</h4>
                                    <hr>
                                </div><!-- end widget-title -->

                               <div class="commentform">
                                    <form class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <label>Comment <span class="required">*</span></label>
                                            <textarea class="form-control" placeholder=""></textarea>
                                        </div>
                                        <div class="col-md-4 col-sm-12">
                                            <label>Name <span class="required">*</span></label>
                                            <input type="text" class="form-control" placeholder="">
                                        </div>
                                        <div class="col-md-4 col-sm-12">
                                            <label>Email <span class="required">*</span></label>
                                            <input type="email" class="form-control" placeholder="">
                                        </div>

                                        <div class="col-md-4 col-sm-12">
                                            <label>Website</label>
                                            <input type="text" class="form-control" placeholder="">
                                        </div>

                                        <div class="col-md-12 col-sm-12">
                                            <input type="submit" value="Send Comment" class="btn btn-primary" />
                                        </div>
                                    </form>
                                </div><!-- end newsletter -->
                            </div><!-- end widget -->
                        </div><!-- end col -->
                    </div><!-- end row -->

                </div><!-- end large-widget -->
            </div><!-- end widget -->
        </div><!-- end col -->

        <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="widget">
                <div class="widget-title">
                    <h4>Social Media</h4>
                    <hr>
                </div><!-- end widget-title -->

                <div class="social-media-widget m30">
                    <ul class="list-social clearfix">
                        <li class="facebook"><a href="#"><i class="fa fa-facebook"></i> <small>12.042</small></a></li>
                        <li class="twitter"><a href="#"><i class="fa fa-twitter"></i> <small>67.221</small></a></li>
                        <li class="googleplus"><a href="#"><i class="fa fa-google-plus"></i> <small>44.213</small></a></li>
                        <li class="rss"><a href="#"><i class="fa fa-rss"></i> <small>22.551</small></a></li>
                        <li class="pinterest"><a href="#"><i class="fa fa-pinterest"></i> <small>33.122</small></a></li>
                        <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i> <small>55.123</small></a></li>
                        <li class="youtube"><a href="#"><i class="fa fa-youtube"></i> <small>44.112</small></a></li>
                        <li class="instagram"><a href="#"><i class="fa fa-instagram"></i> <small>12.441</small></a></li>
                    </ul>
                </div><!-- end social -->
            </div>

            <div class="widget hidden-xs">
                <div class="widget-title">
                    <h4>Advertising</h4>
                    <hr>
                </div><!-- end widget-title -->

                <div class="ads-widget m30">
                    <a href="#"><img src="upload/banner_01.jpg" alt="" class="img-responsive"></a>
                </div><!-- end ads-widget -->
            </div><!-- end widget -->

            <div class="widget">
                <div class="widget-title">
                    <h4>Carrier</h4>
                    <hr>
                </div><!-- end widget-title -->

                <div class="mini-widget carrier-widget m30">
                    <div class="post clearfix">
                        <div class="mini-widget-thumb">
                            <a href="single.html">
                                <img alt="" src="upload/carrer_01.jpg" class="img-responsive">
                            </a>
                        </div>
                        <div class="mini-widget-title">
                            <a href="single.html"> We are looking a team member</a>
                            <span class="label label-primary">Full time</span>
                        </div>
                    </div>

                    <div class="post clearfix">
                        <div class="mini-widget-thumb">
                            <a href="single.html">
                                <img alt="" src="upload/carrer_02.jpg" class="img-responsive">
                            </a>
                        </div>
                        <div class="mini-widget-title">
                            <a href="single.html"> Looking for support members (15-25 mails)</a>
                            <span class="label label-danger">Part time</span>
                        </div>
                    </div>

                    <div class="post clearfix">
                        <div class="mini-widget-thumb">
                            <a href="single.html">
                                <img alt="" src="upload/carrer_03.jpg" class="img-responsive">
                            </a>
                        </div>
                        <div class="mini-widget-title">
                            <a href="single.html"> Who fix my PHP problem?</a>
                            <span class="label label-info">Freelancer</span>
                        </div>
                    </div>

                    <div class="post clearfix">
                        <div class="mini-widget-thumb">
                            <a href="single.html">
                                <img alt="" src="upload/carrer_04.jpg" class="img-responsive">
                            </a>
                        </div>
                        <div class="mini-widget-title">
                            <a href="single.html"> Looking Logo Designer ($15 Budget) </a>
                            <span class="label label-info">Freelancer</span>
                        </div>
                    </div>
                </div><!-- end mini-widget -->
            </div><!-- end widget -->
        </div><!-- end col -->
    </div><!-- end row -->
</div><!-- end container -->
@endsection