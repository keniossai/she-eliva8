@extends('layouts.frontend.app')

@section('title', 'Homepage')

@section('content')
    <!-- Banner section -->

  <section class="banner-section">
    <div class="main-banner">
      <div class="container">
        <div class="banner-bg">
          <div class="banner-bg-left">
          </div>
          <div class="banner-bg-right">
            <div class="banner-carousel">
                @foreach ($bannerposts as $post)
                    <div class="banner-item">

                    <div class="banner-img">
                        <a href="{{ route('post.details',$post->slug) }}">
                        <img src="{{ url('storage/post',$post->image) }}" alt="">
                        </a>
                    </div>

                    <div class="banner-text">
                        <ul class="category-tag-list">

                        <li class="category-tag-name">
                            <a href="#">{{ $post->category->name }}</a>
                        </li>
                        </ul>
                        <div class="title-font">
                        <a href="{{ route('post.details',$post->slug) }}">{{ $post->title }}</a>
                        </div>
                        <p class="mb-3">{!! \Illuminate\Support\Str::limit($post->body,'200') !!}</p>

                        <a href="{{ route('post.details',$post->slug) }}" class="btn btn-solid btn-read">Read More</a>
                    </div>
                    </div>
                @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="more-content-grid py-30">
        <div class="row">
          @forelse ($posts as $post)
            <div class="col-md-4">
              <post-card
                :post="{{ $post }}"
                :created-at="'{{ $post->created_at->diffForHumans() }}'"
                :is-guest="{{ (int) Auth::guest() }}"
                ></post-card>
            </div>
            @empty

            <h1>No post found</h1>
          @endforelse
        </div>
      </div>
    </div>
  </section>
  <!-- Banner section end -->

  <!-- Featured posts -->
  <section class="featured-posts">
    <div class="container">
      <div class="section-title">
        <h2>Featured posts</h2>
      </div>
      <div class="row">
        <div class="col-md-12 col-lg-7">
          <div class="featured-left">
            <div class="card">
              <a href="{{ route('post.details',$post->slug) }}"><img src="client/images/image-8.jpg" class="card-img " alt="" /></a>
              <div class="card-img-overlay">
                <ul class="category-tag-list">

                  <li class="category-tag-name">
                    <a href="#">Fitness</a>
                  </li>
                </ul>
                <h5 class="card-title title-font">
                  <a href="#">Why Is It Important To Stay Fit</a>
                </h5>
                <p class="card-text mb-3">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores
                  nostrum eum, cum ab iusto error totam quae nemo dicta nesciunt
                  quo earum ipsam, ex aspernatur.
                </p>
                <a href="{{ route('post.details',$post->slug) }}" class="btn btn-solid btn-read">Read More</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-12 col-lg-5">
          <div class="featured-right">
            <div class="card">
              <a href="{{ route('post.details',$post->slug) }}">
                <img src="client/images/image-10.jpg" class="card-img-top " alt="">
              </a>
              <div class="card-body">
                <ul class="category-tag-list">

                  <li class="category-tag-name">
                    <a href="#">Lifestyle</a>
                  </li>
                </ul>
                <h5 class="card-title title-font"><a href="{{ route('post.details',$post->slug) }}">Exercises In Group For Motivation</a>
                </h5>
                <div class="author-date">
                  <a class="author" href="#">
                    <img src="client/images/writer.jpg" alt="" class="rounded-circle" />
                    <span class="writer-name-small">Julie</span>
                  </a>
                  <a class="date" href="#">
                    <span>21 Dec, 2019</span>
                  </a>
                </div>
              </div>
            </div>
            <div class="card">
              <a href="{{ route('post.details',$post->slug) }}">
                <img src="client/images/image-9.jpg" class="card-img-top " alt="">

              </a>
              <div class="card-body">
                <ul class="category-tag-list">
                  <li class="category-tag-name">
                    <a href="#">Lifestyle</a>
                  </li>
                  <li class="category-tag-name">
                    <a href="#">Travel</a>
                  </li>
                </ul>
                <h5 class="card-title title-font"><a href="{{ route('post.details',$post->slug) }}">Why College Students Love BasketBall</a>
                </h5>
                <div class="author-date">
                  <a class="author" href="#">
                    <img src="client/images/writer.jpg" alt="" class="rounded-circle" />
                    <span class="writer-name-small">Julie</span>
                  </a>
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
  </section>
  <!-- Featured post end -->

  <!-- Recommended Posts -->
  <section class="recommended-posts">
    <div class="container">
      <div class="section-title pt-5">
        <h2 class="pt-5">Recommended posts</h2>
      </div>
      <div class="more-content-grid ">
        <div class="row">
          @foreach ($recommendedPosts as $post)
            <div class="col-md-4">
            <post-card
                :post="{{ $post }}"
                :created-at="'{{ $post->created_at->diffForHumans() }}'"
                :is-guest="{{ (int) Auth::guest() }}"
                :key="{{ $post->id }}"
                ></post-card>
            </div>
          @endforeach
        </div>
      </div>
    </div>
  </section>
  <!-- Recommended posts end -->
@endsection
