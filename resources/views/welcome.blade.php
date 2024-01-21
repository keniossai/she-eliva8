@extends('layouts.frontend.app')

@section('title', 'Homepage')

@section('content')
  <section class="banner-section">
    <div class="main-banner">
      <div class="container">
        <div class="banner-bg">
          <div class="banner-bg-left">
          </div>
          <div class="banner-bg-right">
            <div class="banner-carousel">
                @foreach ($bannerPosts as $post)
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
        @forelse ($featuredPosts as $post)
            <div class="col-lg-6">
                <feature-card
                :post="{{ $post }}"
                :created-at="'{{ $post->created_at->diffForHumans() }}'"
                :is-guest="{{ (int) Auth::guest() }}"
                :key="{{ $post->id }}"
                ></feature-card>
            </div>
        @empty

        @endforelse

      </div>
    </div>
  </section>
  <!-- Featured post end -->

  <!-- Recommended Posts -->
  <section class="recommended-posts">
    <div class="container">
      <div class="section-title pt-2">
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
