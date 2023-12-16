@extends('layouts.frontend.app')

@section('title')
    {{ $query }}
@endsection


@section('content')
<main class="kavya-search">
    <!-- Page header -->
    <section class="page-header">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6">
            <div class="page-title">
              <h2>Search results: <span> {{ $query }}</span></h2>
            </div>
          </div>
          <div class="col-md-6">
            <div class="page-breadcrumb">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Search results</li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- page header end -->

    <!-- search results -->
    <section class="search-results">
      <div class="container">
          <h5 class="search-result-title">Great! We've found {{ $posts->count() }} matching of {{ $query }}.</h5>
          <div class="row align-items-center">
              @if ($posts->count() > 0)
                @foreach ($posts as $post)
                    <div class="col-md-12 col-lg-6">
                        <div class="card p-3">
                        <div class="row no-gutters align-items-center align-items-center">
                            <div class="col-md-5">
                            <a href="{{ route('post.details',$post->slug) }}"> <img src="{{ url('storage/post/'.$post->image) }}" class="card-img" alt=""></a>
                            </div>
                            <div class="col-md-7">
                            <div class="card-body">
                                <ul class="category-tag-list">
                                <li class="category-tag-name">
                                    <a href="#">{{ $query }}</a>
                                </li>
                                </ul>
                                <h5 class="card-title title-font"><a href="{{ route('post.details',$post->slug) }}">{{ $post->title }}</a></h5>
                                <p class="card-text">{!! \Illuminate\Support\Str::limit($post->body,'100') !!}</p>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                @endforeach
            @else
            <h5 class="search-result-title text-center">No Result Found.</h5>
            @endif

        </div>
      </div>
    </section>
    <!-- search resukts end -->

    <!-- Pagination section -->
    <section class="pagination-section">
      <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
          <li class="page-item disabled">
            <a class="page-link" href="#" tabindex="-1"><i class="fas fa-arrow-left"></i></a>
          </li>
          <li class="page-item active"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item">
            <a class="page-link" href="#"><i class="fas fa-arrow-right"></i></a>
          </li>
        </ul>
      </nav>
    </section>
    <!-- Pagination section end -->
  </main>
@endsection
