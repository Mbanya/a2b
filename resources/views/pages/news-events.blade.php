@extends('layout.blog')
@section('assets')
    <title>News & Updates </title>
    @endsection
@section('header')
    <div id="Subheader">
        <div class="container">
            <div class="column one">
                <h1 class="title">News &#038; Events</h1>
                <!--BreadCrumbs area-->
                <ul class="breadcrumbs">
                    <li>
                        <a href="{{url('/')}}">Home</a><span><i class="icon-right-open"></i></span>
                    </li>
                    <li>
                        <a href="{{url('news')}}">News &#038; Events</a><span><i class="icon-right-open"></i></span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    @endsection
@section('content')
        <!-- Main Content -->
        <div id="Content">
            <div class="content_wrapper clearfix">
                <div class="sections_group">
                    <div class="extra_content">
                        <div class="section the_content">
                            <div class="section_wrapper">
                                <div class="the_content_wrapper"></div>
                            </div>
                        </div>
                    </div>
                    <div class="section">
                        <div class="section_wrapper clearfix">
                            <!--  Filter Area -->
                            <div id="Filters" class="column one ">
                                <ul class="filters_buttons">
                                    <li class="label">
                                        Filter by
                                    </li>
                                    <li class="categories">
                                        <a class="open" href="#"><i class="icon-docs"></i>Categories<i class="icon-down-dir"></i></a>
                                    </li>
                                    <li class="tags">
                                        <a class="open" href="#"><i class="icon-tag"></i>Tags<i class="icon-down-dir"></i></a>
                                    </li>
                                    <li class="authors">
                                        <a class="open" href="#"><i class="icon-user"></i>Authors<i class="icon-down-dir"></i></a>
                                    </li>
                                    <li class="reset">
                                        <a class="close" data-rel="*" href="#l"><i class="icon-cancel"></i>Show all</a>
                                    </li>
                                </ul>
                                <div class="filters_wrapper">
                                    <ul class="categories">
                                        <li>
                                            <a data-rel=".category-news" href="category-news.html">News</a>
                                        </li>
                                        <li>
                                            <a data-rel=".category-stories" href="category-stories.html">Stories</a>
                                        </li>
                                        <li class="close">
                                            <a href="#"><i class="icon-cancel"></i></a>
                                        </li>
                                    </ul>
                                    <ul class="tags">
                                        <li>
                                            <a data-rel=".tag-design" href="tag-design.html">Design</a>
                                        </li>
                                        <li>
                                            <a data-rel=".tag-themeforest" href="tag-themeforest.html">Themeforest</a>
                                        </li>
                                        <li class="close">
                                            <a href="#"><i class="icon-cancel"></i></a>
                                        </li>
                                    </ul>
                                    <ul class="authors">
                                        <li>
                                            <a data-rel=".author-admin" href="#">admin</a>
                                        </li>
                                        <li class="close">
                                            <a href="#"><i class="icon-cancel"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- One full width row-->
                            <div class="column one column_blog">
                                <div class="blog_wrapper isotope_wrapper">
                                    <div class="post-2283 post  format-standard has-post-thumbnail  category-stories tag-design post-item isotope-item clearfix">
                                        <div class="date_label">
                                            {{$post->created_at->format('F d,Y')}}
                                        </div>
                                        <div class="image_frame post-photo-wrapper scale-with-grid">
                                            <div class="image_wrapper">
                                                <a href="/post/{{ $post->slug }}">
                                                    <div class="mask"></div><img width="576" height="450" src="university/images/olu-eletu-211914.jpg" class="scale-with-grid wp-post-image" alt="home_university_blog_1" />
                                                </a>
                                                <div class="image_links double">
                                                    <a href="university/images/olu-eletu-211914.jpg" class="zoom" rel="prettyphoto"><i class="icon-search"></i></a><a href="/post/{{ $post->slug }}" class="link"><i class="icon-link"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="post-desc-wrapper">
                                            <div class="post-desc">
                                                <div class="post-meta clearfix">
                                                    <div class="author-date">
                                                        <span class="vcard author post-author"><span class="label">Published by </span><i class="icon-user"></i> <span class="fn"><a href="#">{{$post->author->name}}</a></span></span><span class="date"><span class="label">at </span><i class="icon-clock"></i> <span class="post-date updated">May 5, 2015</span></span>
                                                    </div>
                                                </div>
                                                <div class="post-title">
                                                    <h2 class="entry-title"><a href="/post/{{ $post->slug }}">{{$post->title}}</a></h2>
                                                </div>
                                                <div class="post-excerpt">
                                                    {{$post->excerpt}}
                                                </div>
                                                <div class="post-footer">
                                                    <div class="post-links">
                                                        <i class="icon-doc-text"></i><a href="/post/{{ $post->slug }}" class="post-more">Read more</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                            <h3>About our university</h3>
                            <div class="textwidget">
                                Mauris imperdiet, urna mi, gravida sod ales. <span class="tooltip" data-tooltip="Donec nisl ac turpis">Vivamus hendrerit</span> nulla erat ornare tortor in vestibulum id.
                            </div>
                        </aside>
                        <!-- Recent posts -->
                        <aside class="widget widget_mfn_recent_posts">
                            <h3>Latest posts</h3>
                            <div class="Recent_posts">
                                <ul>
                                    <li class="post ">
                                        <a href="article-32.html">
                                            <div class="photo"><img width="80" height="80" src="university/images/home_university_blog_1-80x80.jpg" class="scale-with-grid wp-post-image" alt="home_university_blog_1" /><span class="c">0</span>
                                            </div>
                                            <div class="desc">
                                                <h6>Pellentes malesuada fames</h6><span class="date"><i class="icon-clock"></i>May 5, 2015</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="post ">
                                        <a href="article-32.html">
                                            <div class="photo"><img width="80" height="80" src="university/images/home_university_blog_2-80x80.jpg" class="scale-with-grid wp-post-image" alt="home_university_blog_2" /><span class="c">0</span>
                                            </div>
                                            <div class="desc">
                                                <h6>Aenean ligula mol stie viver</h6><span class="date"><i class="icon-clock"></i>May 4, 2015</span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </aside>
                        <!-- Categories Area -->
                        <aside id="categories-2" class="widget widget_categories">
                            <h3>Categories</h3>
                            <ul>
                                <li class="cat-item cat-item-7">
                                    <a href="category-news.html">News</a>
                                </li>
                                <li class="cat-item cat-item-6">
                                    <a href="category-stories.html">Stories</a>
                                </li>
                            </ul>
                        </aside>
                        <!-- Meta Links Area -->
                        <aside id="meta-2" class="widget widget_meta">
                            <h3>Meta</h3>
                            <ul>
                                <li>
                                    <a href="#">Log in</a>
                                </li>
                                <li>
                                    <a href="#">Entries <abbr title="Really Simple Syndication">RSS</abbr></a>
                                </li>
                                <li>
                                    <a href="#">Comments <abbr title="Really Simple Syndication">RSS</abbr></a>
                                </li>
                                <li>
                                    <a href="https://wordpress.org/" title="Powered by WordPress, state-of-the-art semantic personal publishing platform.">WordPress.org</a>
                                </li>
                            </ul>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
@endsection
@section('footer')
    @endsection
@section('scripts')
    @endsection