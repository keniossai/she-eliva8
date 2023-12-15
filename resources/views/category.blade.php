@extends('layouts.frontend.app')


@section('title', 'Category Posts')


@section('content')
<main class="kavya-archive kavya-archive-4">

    <section class="page-header">
        <div class="container">
          <div class="row align-items-center">
            <div class=" col-md-6">
              <div class="page-title">
                <h2>{{ $category->name }}</h2>
              </div>
            </div>
            <div class=" col-md-6">
              <div class="page-breadcrumb">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $category->name }}</li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </section>
    <section class="archive-content">
        <div class="container">
          <div class="row">
            @if ($category->posts->count() > 0)
                @foreach ($category->posts as $post)
                    <div class="col-md-4">
                        <div class="card simple-overlay-card border-0">
                            <a href="single-layout-one.html"><img src="{{ url('storage/post/'.$post->image) }}" class="card-img" alt=""></a>
                            <div class="card-img-overlay">
                            <ul class="category-tag-list">
                                <li class="category-tag-name">
                                <a href="#">{{ $category->name }}</a>
                                </li>
                            </ul>
                            <h5 class="card-title title-font">
                                <a href="single-layout-one.html">{{ $post->title }}</a>
                            </h5>
                            <div class="author-date">
                                <a class="author" href="#">
                                <img src="assets/images/person1.jpg" alt="" class="rounded-circle">
                                <span class="writer-name-small">{{ $post->user->name }}
                                </span>
                                </a>
                                <a class="date" href="#">
                                <span>{{ $post->created_at->diffForHumans() }}</span>
                                </a>
                            </div>
                            </div>
                        </div><!-- card -->
                    </div>
                @endforeach
            @else

            @endif
          </div>
        </div><!-- container close -->
      </section>
      <section class="pagination-section">
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                {{-- {{ $category->posts->links() }} --}}
            </ul>
        </nav>
    </section>
</main>
@endsection
