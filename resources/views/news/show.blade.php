@extends('layout.article')
@section('assets')
    @stop
@section('header')
    @stop
@section('content')

    <!-- Main Content -->
    <div id="Content">
        <div class="content_wrapper clearfix">
            <div class="sections_group">
                <div id="post-2287" class="post-2287 post  format-standard has-post-thumbnail  category-stories">
                    <div class="section section-post-header">
                        <div class="section_wrapper clearfix">
                            <!-- Posts Navigation -->
                            <!-- One full width row-->
                            {{--<div class="column one post-nav">--}}
                                {{--<a class="fixed-nav fixed-nav-prev " href="article-2.html"><span class="arrow"><i class="icon-left-open-big"></i></span>--}}
                                    {{--<div class="photo"><img width="80" height="80" src="images/home_university_blog_4-80x80.jpg" class="attachment-blog-navi wp-post-image" alt="home_university_blog_4" />--}}
                                    {{--</div>--}}
                                    {{--<div class="desc">--}}
                                        {{--<h6>Donec tempus urna risus</h6><span class="date"><i class="icon-clock"></i>May 2, 2015</span>--}}
                                    {{--</div></a><a class="fixed-nav fixed-nav-next " href="article-4.html"><span class="arrow"><i class="icon-right-open-big"></i></span>--}}
                                    {{--<div class="photo"><img width="80" height="80" src="images/home_university_blog_2-80x80.jpg" class="attachment-blog-navi wp-post-image" alt="home_university_blog_2" />--}}
                                    {{--</div>--}}
                                    {{--<div class="desc">--}}
                                        {{--<h6>Aenean ligula mol stie viver</h6><span class="date"><i class="icon-clock"></i>May 4, 2015</span>--}}
                                    {{--</div></a>--}}
                                {{--<ul class="next-prev-nav">--}}
                                    {{--<li class="prev">--}}
                                        {{--<a class="button button_js" href="article-2.html"><span class="button_icon"><i class="icon-left-open"></i></span></a>--}}
                                    {{--</li>--}}
                                    {{--<li class="next">--}}
                                        {{--<a class="button button_js" href="article-4.html"><span class="button_icon"><i class="icon-right-open"></i></span></a>--}}
                                    {{--</li>--}}
                                {{--</ul>--}}
                                {{--<a class="list-nav" href="news-events.blade.php"><i class="icon-layout"></i>Show all</a>--}}
                            {{--</div>--}}
                            <!-- Post Header-->
                            <!-- One full width row-->
                            <div class="column one post-header">
                                <div class="button-love">
                                    <a href="#" class="mfn-love " data-id="2287"><span class="icons-wrapper"><i class="icon-heart-empty-fa"></i><i class="icon-heart-fa"></i></span><span class="label">2</span></a>
                                </div>
                                <div class="title_wrapper">
                                    <h1 class="entry-title">{{$post->title}}</h1>
                                    <div class="post-meta clearfix">
                                        <div class="author-date">
                                            <span class="vcard author post-author"> Published by <i class="icon-user"></i> <span class="fn"><a href="#">admin</a></span> </span><span class="date"> on <i class="icon-clock"></i>
														<time class="entry-date" datetime="2014-05-03T09:37:11+00:00" >
															{{$post->created_at}}
														</time> </span>
                                        </div>
                                        <div class="category meta-categories">
                                            <span class="cat-btn">Categories <i class="icon-down-dir"></i></span>
                                            <div class="cat-wrapper">
                                                <ul class="post-categories">
                                                    <li>
                                                        <a href="category-stories.html" rel="category tag">Stories</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="category mata-tags">
                                            <span class="cat-btn">Tags <i class="icon-down-dir"></i></span>
                                            <div class="cat-wrapper">
                                                <ul></ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Post Featured Element (image / video / gallery)-->
                            <!-- One full width row-->
                            <div class="column one single-photo-wrapper">

                                <div class="image_frame scale-with-grid ">
                                    <div class="image_wrapper">
                                        <a href="/storage/{{$post->image}}" rel="prettyphoto">
                                            <div class="mask"></div><img width="1920" height="480" src="/storage/{{$post->image}}" class="scale-with-grid wp-post-image" alt="home_university_blog_3" />
                                        </a>
                                        <div class="image_links">
                                            <a href="/storage/{{$post->image}}" class="zoom" rel="prettyphoto"><i class="icon-search"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Post Content-->
                    <div class="post-wrapper-content">
                        <div class="entry-content">
                            <div class="section the_content">
                                <div class="section_wrapper">
                                    <div class="the_content_wrapper">
                                        <h5>
                                           {{$post->excerpt}}
                                        </h5>
                                        <p>
                                        <br>
                                        <hr class="no_line hrmargin_b_30" />
                                        <br>

                                            {!! $post->body  !!}
                                        </p>
                                        <div class="hr_dots hrmargin_b_30">
                                            <span></span><span></span><span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section section-post-footer">
                            <div class="section_wrapper clearfix">
                                <!-- One full width row-->
                                <div class="column one post-pager"></div>
                            </div>
                        </div>
                        <!--Author Info Area-->
                        <div class="section section-post-about">
                            <div class="section_wrapper clearfix">
                                <!-- One full width row-->
                                <div class="column one author-box">
                                    <div class="author-box-wrapper">
                                        <div class="avatar-wrapper">
                                            <img alt='admin' src='http://0.gravatar.com/avatar/057e2eb392b95a2ecfc9d32d554e3917?s=64&amp;d=http:%2F%2F0.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D64&amp;r=G' class='avatar avatar-64 photo' height='64' width='64' />
                                        </div>
                                        <div class="desc-wrapper">
                                            <h5><a href="#">admin</a></h5>
                                            <div class="desc"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Related posts area-->
                    <!-- Comments area-->
                    {{--<div class="section section-post-comments">--}}
                        {{--<div class="section_wrapper clearfix">--}}
                            {{--<!-- One full width row-->--}}
                            {{--<div class="column one comments">--}}
                                {{--<div id="comments">--}}
                                    {{--<div id="respond" class="comment-respond">--}}
                                        {{--<h3 id="reply-title" class="comment-reply-title">Leave a Reply <small><a rel="nofollow" id="cancel-comment-reply-link" href="article-1.html#respond" class="flv_disp_none">Cancel reply</a></small></h3>--}}
                                        {{--<p class="must-log-in">--}}
                                            {{--You must be <a href="#">logged in</a> to post a comment.--}}
                                        {{--</p>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                </div>
            </div>
            <!-- Sidebar area-->
            <div class="sidebar sidebar-1 four columns">
                <div class="widget-area clearfix ">
                    <!-- Search form-->
                    <aside id="search-2" class="widget widget_search">
                        <h3>Search</h3>
                        <form method="get" action="#">
                            <input type="text" class="field" name="s" placeholder="Enter your search" />
                            <input type="submit" class="submit" value="Search" />
                        </form>
                    </aside>
                    <!-- Text Area -->
                    <aside class="widget widget_text">
                        <h3>About our A2B</h3>
                        <div class="textwidget">
                             <span class="tooltip" data-tooltip="Donec nisl ac turpis"></span>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>

@stop
@section('footer')
    @stop
@section('scripts')
    @stop