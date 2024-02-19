@extends('layouts.frontend.app')


@section('title', 'Posts')

@section('content')
<section class="popular-posts section-padding">
    <div class="container">
      <div class="section-title">
        <h2>Popular Posts</h2>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            @foreach ($posts as $post)
            <div class="col-md-4">
                <div class="card">
                  <a href="single-layout-one.html">
                    <img src="{{ url('storage/post/'.$post->image) }}" class="card-img-top" alt="">
                  </a>

                  <div class="card-body px-0">
                    <ul class="category-tag-list">
                      <li class="category-tag-name">
                        <a href="{{ route('category.posts',$post->category->slug) }}">{{ $post->category->name }}</a>
                      </li>
                    </ul>
                    <h5 class="card-title title-font">
                      <a href="single-layout-one.html">
                        {{ $post->title }}
                      </a>
                    </h5>
                    <div class="author-date">
                      <a class="author" href="#">
                        <img src="assets/images/writer.jpg" alt="" class="rounded-circle">
                        <span class="writer-name-small">{{ $post->user->name }}</span>
                      </a>
                      <a class="date" href="#">
                        <span>{{ $post->created_at->diffForHumans() }}</span>
                      </a>
                    </div>

                  </div>
                </div>
              </div>
            @endforeach
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
@endsection
