@extends('layouts.frontend.app')

@section('title', 'Categories')


@section('content')
<section class="popular-posts section-padding">
    <div class="container">
      <div class="section-title">
        <h2>Discussion Topics</h2>
      </div>
      <div class="row">
        <div class="col-lg-12">
            <div class="sidebar-posts">
              <div class="sidebar-content">
                <div class="category-name-list d-grid">
                    <div class="row">
                        @foreach ($categories as $category)
                        <div class="col-md-4 p-3">
                            <div class="card small-card">
                                <a href="{{ route('category.posts',$category->slug) }}"><img src="client/images/shoes.jpg" class="card-img" alt="" /></a>
                                <div class="card-img-overlay">
                                <h5 class="card-title title-font mb-0">
                                    <a href="{{ route('category.posts',$category->slug) }}">{{ $category->name }}</a>
                                </h5>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    </div>
                </div>
              </div>
            </div>
        </div>
        </div>
      </div>
    </div>
  </section>
@endsection
