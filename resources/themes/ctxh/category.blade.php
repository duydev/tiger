@extends( 'layouts.default' )

@section( 'content' )
<div class="container sitecontainer single-wrapper bgw">
    <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-12 m22">

            <div class="widget">
                <div class="large-widget m30">
					@foreach( $articles as $art )
                    <div class="post clearfix">
                        <div class="post-media">
                            <a href="{{ url( '/'.$cat->slug.'/'.$art->slug ) }}">
                                <img alt="" src="{{ asset( $art->image ) }}" class="img-responsive">
                            </a>
                        </div>
                        <div class="large-post-meta">
                            <span class="avatar"><a href="author.html"><img src="{{ Theme::url( 'upload/avatar_02.png' ) }}" alt="" class="img-circle"> Mark Twisted</a></span>
                            <small>&#124;</small>
                            <span><a href="{{ url( '/'.$cat->slug ) }}">{{ $cat->name }}</a></span>
                            <small>&#124;</small>
                            <span><a href="single.html#comments">12 Comments</a></span>
                        </div><!-- end meta -->
                        <div class="large-widget-title">
                            <a href="{{ url( '/'.$cat->slug.'/'.$art->slug ) }}"> {{ $art->title }}</a>
                        </div>
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
                    </div><!-- end post -->
                    @if( $art != $articles->last() )
                    <hr>
                    @endif
                    @endforeach
                </div><!-- end large-widget -->
            </div><!-- end widget -->

            <div class="pagination-wrapper">
                <nav>
            		{{ $articles->render() }}
                </nav>
            </div>
        </div><!-- end col -->

		{{--
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="widget">
                <div class="widget-title">
                    <h4>Latest Reviews</h4>
                    <hr>
                </div><!-- end widget-title -->

                <div class="review-posts m30">
                    <div class="post-review">
                        <div class="post-media entry">
                            <a href="single-review.html" title="">
                            <img src="{{ Theme::url( 'upload/review_01.jpg' ) }}" alt="" class="img-responsive">
                            <div class="magnifier">
                                <div class="review-stat">
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                </div><!-- end review-stat -->
                                <div class="hover-title">
                                    <span>Tech Reviews</span>
                                </div><!-- end title -->
                            </div><!-- end magnifier -->
                            </a>
                        </div><!-- end media -->
                        <div class="post-title">
                            <h3><a href="single-review.html">MyWatch Review - Its work perfect on mobile?</a></h3>
                        </div><!-- end post-title -->
                    </div><!-- end post-review -->

                    <hr>

                    <div class="post-review">
                        <div class="post-media entry">
                            <a href="single-review.html" title="">
                            <img src="{{ Theme::url( 'upload/review_02.jpg' ) }}" alt="" class="img-responsive">
                            <div class="magnifier">
                                <div class="review-stat">
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                </div><!-- end review-stat -->
                                <div class="hover-title">
                                    <span>Tech Reviews</span>
                                </div><!-- end title -->
                            </div><!-- end magnifier -->
                            </a>
                        </div><!-- end media -->
                        <div class="post-title">
                            <h3><a href="single-review.html">Google Street View Coming to Bhutan</a></h3>
                        </div><!-- end post-title -->
                    </div><!-- end post-review -->

                    <hr>

                    <div class="post-review">
                        <div class="post-media entry">
                            <a href="single-review.html" title="">
                            <img src="{{ Theme::url( 'upload/review_03.jpg' ) }}" alt="" class="img-responsive">
                            <div class="magnifier">
                                <div class="review-stat">
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                </div><!-- end review-stat -->
                                <div class="hover-title">
                                    <span>Tech Reviews</span>
                                </div><!-- end title -->
                            </div><!-- end magnifier -->
                            </a>
                        </div><!-- end media -->
                        <div class="post-title">
                            <h3><a href="single-review.html">Mondo, the U.K. banking startup, opens public Beta</a></h3>
                        </div><!-- end post-title -->
                    </div><!-- end post-review -->
                </div><!-- end review-posts -->
            </div><!-- end widget -->

            <div class="widget">
                <div class="widget-title">
                    <h4>The Interviews</h4>
                    <hr>
                </div><!-- end widget-title -->

                <div class="mini-widget m30">
                    <div class="post clearfix">
                        <div class="mini-widget-thumb">
                            <a href="single.html">
                                <img alt="" src="{{ Theme::url( 'upload/mini_widget_01.jpg' ) }}" class="img-responsive">
                            </a>
                        </div>
                        <div class="mini-widget-title">
                            <a href="single.html"> Jessica and Martin talking about...</a>
                            <div class="mini-widget-hr"></div>
                        </div>
                    </div>

                    <div class="post clearfix">
                        <div class="mini-widget-thumb">
                            <a href="single.html">
                                <img alt="" src="{{ Theme::url( 'upload/mini_widget_02.jpg' ) }}" class="img-responsive">
                            </a>
                        </div>
                        <div class="mini-widget-title">
                            <a href="single.html"> ShowWP team moved to a new office </a>
                            <div class="mini-widget-hr"></div>
                        </div>
                    </div>

                    <div class="post clearfix">
                        <div class="mini-widget-thumb">
                            <a href="single.html">
                                <img alt="" src="{{ Theme::url( 'upload/mini_widget_03.jpg' ) }}" class="img-responsive">
                            </a>
                        </div>
                        <div class="mini-widget-title">
                            <a href="single.html"> How do web design? If no information</a>
                            <div class="mini-widget-hr"></div>
                        </div>
                    </div>

                    <div class="post clearfix">
                        <div class="mini-widget-thumb">
                            <a href="single.html">
                                <img alt="" src="{{ Theme::url( 'upload/mini_widget_04.jpg' ) }}" class="img-responsive">
                            </a>
                        </div>
                        <div class="mini-widget-title">
                            <a href="single.html"> A good strategy is to create 5 rule </a>
                            <div class="mini-widget-hr"></div>
                        </div>
                    </div>

                    <div class="post clearfix">
                        <div class="mini-widget-thumb">
                            <a href="single.html">
                                <img alt="" src="{{ Theme::url( 'upload/mini_widget_05.jpg' ) }}" class="img-responsive">
                            </a>
                        </div>
                        <div class="mini-widget-title">
                            <a href="single.html"> Google material design, colors</a>
                            <div class="mini-widget-hr"></div>
                        </div>
                    </div>

                    <div class="post clearfix">
                        <div class="mini-widget-thumb">
                            <a href="single.html">
                                <img alt="" src="{{ Theme::url( 'upload/mini_widget_06.jpg' ) }}" class="img-responsive">
                            </a>
                        </div>
                        <div class="mini-widget-title">
                            <a href="#"> The best desk and office designs for ever!</a>
                            <div class="mini-widget-hr"></div>
                        </div>
                    </div>
                </div><!-- end mini-widget -->
            </div><!-- end widget -->
        </div><!-- end col -->

        <div class="col-md-3 col-sm-6 col-xs-12">
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
                    <a href="#"><img src="{{ Theme::url( 'upload/banner_01.jpg' ) }}" alt="" class="img-responsive"></a>
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
                                <img alt="" src="{{ Theme::url( 'upload/carrer_01.jpg' ) }}" class="img-responsive">
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
                                <img alt="" src="{{ Theme::url( 'upload/carrer_02.jpg' ) }}" class="img-responsive">
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
                                <img alt="" src="{{ Theme::url( 'upload/carrer_03.jpg' ) }}" class="img-responsive">
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
                                <img alt="" src="{{ Theme::url( 'upload/carrer_04.jpg' ) }}" class="img-responsive">
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
		--}}

    </div><!-- end row -->
</div><!-- end container -->
@endsection