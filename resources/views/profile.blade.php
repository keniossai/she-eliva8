@extends('layouts.frontend.app')


@section('title')
    {{ $author->name }}
@endsection


@section('content')
<main class="kavya-archive" style="transform: none;">

    <!-- Page header -->
    <section class="page-header">
        <div class="container">
            <div class="row align-items-center">
                <div class=" col-md-6">
                    <div class="page-title">
                        <h2>{{ $author->name }} Posts</h2>
                    </div>
                </div>
                <div class=" col-md-6">
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Profile</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- page header end -->

    <!-- Archive content -->
    <section class="archive-content" style="transform: none;">
        <div class="container" style="transform: none;">
            <div class="row " id="main-content" style="transform: none;">
                <div class="col-md-7 col-lg-8 content" style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">
                    <!-- Archive posts -->
                    <div class="archive-posts theiaStickySidebar" style="padding-top: 0px; padding-bottom: 1px; position: static; transform: none;">
                        @if ($posts->count() > 0)
                            @foreach ($posts as $post)
                                <div class="card border-0 mb-5">
                                    <div class="row no-gutters align-items-center align-items-center">
                                        <div class="col-md-5">
                                            <a href="#"> <img src="{{ url('storage/post/'.$post->image) }}" class="card-img" alt=""></a>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="card-body">
                                                <ul class="category-tag-list">
                                                    <li class="category-tag-name">
                                                        <a href="#">Travel</a>
                                                    </li>
                                                </ul>
                                                <h5 class="card-title title-font"><a href="{{ route('post.details',$post->slug) }}">{{ $post->title }}</a></h5>
                                                <p class="card-text">{!! \Illuminate\Support\Str::limit($post->body,'200') !!}</p>
                                                <div class="author-date">
                                                    <a class="author" href="#">
                                                        <img src="{{ url('storage/profile/'.$post->user->image) }}" alt="" class="rounded-circle">
                                                        <span class="writer-name-small">{{ $post->user->name }}</span>
                                                    </a>
                                                    <a class="date" href="#">
                                                        <span>{{ $post->created_at->diffForHumans() }}</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            @else
                            <section class="contact-section">
                                <div class="container">
                                  <div class="row no-gutters align-items-center">
                                    <div class="col-md-12">
                                      <div class="contact-info">
                                        <h3>Sorry, No post found</h3>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </section>
                        @endif

                    <div class="resize-sensor" style="position: absolute; inset: 0px; overflow: hidden; z-index: -1; visibility: hidden;"><div class="resize-sensor-expand" style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;"><div style="position: absolute; left: 0px; top: 0px; transition: all 0s ease 0s; width: 910px; height: 2447px;"></div></div><div class="resize-sensor-shrink" style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;"><div style="position: absolute; left: 0; top: 0; transition: 0s; width: 200%; height: 200%"></div></div></div></div>
                    <!-- Archive posts end -->
                </div>
                <div class="col-md-5 col-lg-4 sidebar" style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">
                    <!-- Sidebar posts -->
                    <div id="sticker" class="theiaStickySidebar" style="padding-top: 0px; padding-bottom: 1px; position: static; transform: none; left: 960px; top: 0px;">
                        <div class="author-section">
                            <div class="card author-card" style="border: 2px solid white;">
                              <h3 class="title-font">About the author</h3>
                              <div class="card-img">
                                <img src="{{ url('storage/profile/'.$post->user->image) }}" alt="">
                              </div>
                              <h5 class="text-white"><a href="javascript:void(0)">{{ $author->name }}</a></h5>
                              <small>{{ $post->user->role->name }} Since : {{ $author->created_at->toDateString() }} <br> with over <span class="text-white">{{ $author->posts->count() }}</span> posts published</small>
                              <p class="card-text">{{ $post->user->about }}</p>

                              <div class="social-links circular-icons">
                                <ul>
                                  <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                  <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                  <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                  <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        <div class="sidebar-posts">
                            <div class="sidebar-title">
                                <h5><i class="fas fa-circle"></i>Popular Posts</h5>
                            </div>
                            <div class="sidebar-content p-0">
                                <div class="card border-0">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col-3 col-md-3">
                                            <a href="#">
                                                <img src="assets/images/sea-lighthouse.jpg" class="card-img" alt="">
                                            </a>
                                        </div>
                                        <div class="col-9 col-md-9">
                                            <div class="card-body">
                                                <ul class="category-tag-list mb-0">
                                                    <li class="category-tag-name">
                                                        <a href="#">Lifestyle</a>
                                                    </li>
                                                </ul>
                                                <h5 class="card-title title-font"><a href="#">Lighthouse since
                                                        ages</a>
                                                </h5>
                                                <div class="author-date">
                                                    <a class="date" href="#">
                                                        <span>21 Dec, 2019</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="card border-0">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col-3 col-md-3">
                                            <a href="#">
                                                <img src="assets/images/paris.jpg" class="card-img" alt="">
                                            </a>
                                        </div>
                                        <div class="col-9 col-md-9">
                                            <div class="card-body">
                                                <ul class="category-tag-list mb-0">
                                                    <li class="category-tag-name">
                                                        <a href="#">Lifestyle</a>
                                                    </li>
                                                </ul>
                                                <h5 class="card-title title-font"><a href="#">5 things you should
                                                        not miss about Paris</a>
                                                </h5>
                                                <div class="author-date">
                                                    <a class="date" href="#">
                                                        <span>21 Dec, 2019</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="card border-0">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col-3 col-md-3">
                                            <a href="#">
                                                <img src="assets/images/orange-bus.jpg" class="card-img" alt="">
                                            </a>
                                        </div>
                                        <div class="col-9 col-md-9">
                                            <div class="card-body">
                                                <ul class="category-tag-list mb-0">
                                                    <li class="category-tag-name">
                                                        <a href="#">Lifestyle</a>
                                                    </li>
                                                </ul>
                                                <h5 class="card-title title-font"><a href="#">5 reasons for
                                                        travelling more</a>
                                                </h5>
                                                <div class="author-date">
                                                    <a class="date" href="#">
                                                        <span>21 Dec, 2019</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="card border-0">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col-3 col-md-3">
                                            <a href="#">
                                                <img src="assets/images/city-pink.jpg" class="card-img" alt="">

                                            </a>
                                        </div>
                                        <div class="col-9 col-md-9">
                                            <div class="card-body">
                                                <ul class="category-tag-list mb-0">

                                                    <li class="category-tag-name">
                                                        <a href="#">Lifestyle</a>
                                                    </li>
                                                </ul>
                                                <h5 class="card-title title-font"><a href="#">Pink city</a>
                                                </h5>
                                                <div class="author-date">

                                                    <a class="date" href="#">
                                                        <span>21 Dec, 2019</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="card border-0">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col-3 col-md-3">
                                            <a href="#">
                                                <img src="assets/images/umbrella.jpg" class="card-img" alt="">
                                            </a>
                                        </div>
                                        <div class="col-9 col-md-9">
                                            <div class="card-body">
                                                <ul class="category-tag-list mb-0">

                                                    <li class="category-tag-name">
                                                        <a href="#">Lifestyle</a>
                                                    </li>
                                                </ul>
                                                <h5 class="card-title title-font"><a href="#">Top 10 tips with
                                                        common lifestyles</a>
                                                </h5>
                                                <div class="author-date">

                                                    <a class="date" href="#">
                                                        <span>21 Dec, 2019</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="popular-tags mt-4">
                            <div class="sidebar-title">
                                <h5><i class="fas fa-circle"></i>Popular tags</h5>
                            </div>
                            <div class="sidebar-content">
                                <ul class="sidebar-list tags-list">
                                    {{-- @foreach ($posts->tags as $tag)
                                        <li><a href="#">Food</a></li>
                                    @endforeach --}}
                                </ul>
                            </div>

                        </div>

                        {{-- <div class="sidebar-posts mt-4">
                            <div class="sidebar-title">
                                <h5><i class="fas fa-circle"></i>Categories</h5>
                            </div>
                            <div class="sidebar-content">
                                <div class="category-name-list">
                                    <div class="card small-card">
                                        <a href="#"><img src="assets/images/shoes.jpg" class="card-img" alt=""></a>
                                        <div class="card-img-overlay">

                                            <h5 class="card-title title-font mb-0">
                                                <a href="#">Travel</a>
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="card small-card">
                                        <a href="#"><img src="assets/images/photography.jpg" class="card-img" alt=""></a>
                                        <div class="card-img-overlay">

                                            <h5 class="card-title title-font mb-0">
                                                <a href="#">Photography</a>
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="card small-card">
                                        <a href="#"><img src="assets/images/fashion.jpg" class="card-img" alt=""></a>
                                        <div class="card-img-overlay">

                                            <h5 class="card-title title-font mb-0">
                                                <a href="#">Fashion</a>
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="card small-card">
                                        <a href="#"><img src="assets/images/tech.jpg" class="card-img" alt=""></a>
                                        <div class="card-img-overlay">
                                            <h5 class="card-title title-font mb-0">
                                                <a href="#">Technology</a>
                                            </h5>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div> --}}
                    <div class="resize-sensor" style="position: absolute; inset: 0px; overflow: hidden; z-index: -1; visibility: hidden;"><div class="resize-sensor-expand" style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;"><div style="position: absolute; left: 0px; top: 0px; transition: all 0s ease 0s; width: 460px; height: 2447px;"></div></div><div class="resize-sensor-shrink" style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;"><div style="position: absolute; left: 0; top: 0; transition: 0s; width: 200%; height: 200%"></div></div></div></div>
                    <!-- Sidebar posts end -->
                </div>
            </div>
        </div>
    </section>
    <!-- Archive content end -->
    <!-- Pagination section -->
    <section class="pagination-section">
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                {{ $posts->links() }}
            </ul>
        </nav>
    </section>
    <!-- pagination section end -->

</main>
@endsection
