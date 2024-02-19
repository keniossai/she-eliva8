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
    <section class="kavya-posts popular mt-5">
        <div class="container">
          <div class="row">
            <div class="col-md-7 col-lg-8">
              <div class="posts-wrapper">
                <div class="row">
                    @if ($posts->count() > 0)
                        @foreach ($posts as $post)
                            <div class="col-md-4">
                                <div class="card">
                                <a href="{{ route('post.details',$post->slug) }}">
                                    <img src="{{ url('storage/post/'.$post->image) }}" class="card-img-top" alt="">
                                </a>
                                <div class="card-body px-0">
                                    <ul class="category-tag-list">
                                    <li class="category-tag-name">
                                        <a href="#">{{ $post->category->name }}</a>
                                    </li>
                                    </ul>
                                    <h5 class="card-title title-font">
                                    <a href="{{ route('post.details',$post->slug) }}">{!! \Illuminate\Support\Str::limit($post->title,'40') !!}</a>
                                    </h5>
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
                </div>
              </div>
            </div>
            <div class="col-md-5 col-lg-4 sidebar">
                <div id="sticky-single" class="theiaStickySidebar">
                  <div class="author-section">
                    <div class="card author-card">
                      <h3 class="title-font">About the author</h3>
                      <div class="card-img">
                        <img src="{{ url('storage/profile/'.$post->user->image) }}" alt="">
                      </div>
                      <h5><a href="#">{{ $post->user->name }}</a></h5>
                      <small>{{ $post->user->role }}</small>
                      <p class="card-text">{{ $post->user->about }}</p>

                      <div class="social-links circular-icons">
                        <ul>
                          <li><a href="javascript:void()"><i class="fab fa-twitter"></i></a></li>
                          <li><a href="javascript:void()"><i class="fab fa-instagram"></i></a></li>
                          <li><a href="javascript:void()"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
          </div>
        </div>
      </section>
        <section class="pagination-section">
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                    {{ $posts->links() }}
                </ul>
            </nav>
        </section>
</main>
@endsection
