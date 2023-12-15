@extends('layouts.frontend.app')


@section('title', 'Category Posts')


@section('content')
<section class="archive-content">
    <div class="container">
      <div class="row">
        @foreach ($posts->category as $category)
            <div class="col-md-4">
                <div class="card simple-overlay-card border-0">
                    <a href="single-layout-one.html"><img src="assets/images/town-street.jpg" class="card-img" alt=""></a>
                    <div class="card-img-overlay">
                    <ul class="category-tag-list">
                        <li class="category-tag-name">
                        <a href="#">Lifestyle</a>
                        </li>
                    </ul>
                    <h5 class="card-title title-font">
                        <a href="single-layout-one.html">10 ideas for travelling more</a>
                    </h5>
                    <div class="author-date">
                        <a class="author" href="#">
                        <img src="assets/images/person1.jpg" alt="" class="rounded-circle">
                        <span class="writer-name-small">Sallie Allen
                        </span>
                        </a>
                        <a class="date" href="#">
                        <span>21 Dec, 2019</span>
                        </a>
                    </div>
                    </div>
                </div><!-- card -->
            </div>
        @endforeach
      </div>
    </div><!-- container close -->
  </section>
@endsection
