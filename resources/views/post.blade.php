@extends('layouts.frontend.app')

@section('title', 'Post')

@section('content')


<main class="kavya-single kavya-single-4" style="transform: none;">

    <section class="single-layout">
        <div class="container">
          <div class="blog-img-title-wrap">
               <div class="blog-img-main">
                  <img src="{{ url('storage/post/'.$post->image) }}" alt="">
                </div>
                <div class="blog-title-wrap">
                  <ul class="category-tag-list mb-0">
                      <li class="category-tag-name">
                        <a href="#">Featured</a>
                      </li>
                      <li class="category-tag-name">
                        <a href="#">{{ $post->category->name }}</a>
                      </li>
                  </ul>

                  <h1 class="title-font">{{ $post->title }}</h1>
                  <div class="author-date">
                    <a class="author" href="#">
                      <img src="{{ url('storage/profile/'.$post->user->image) }}" alt="" class="rounded-circle" />
                      <span class="">{{ $post->user->name }}</span>
                    </a>
                    <a class="date" href="#">
                      <span>{{ $post->created_at->diffForHumans() }}</span>
                    </a>
                  </div>
                </div>
          </div>
            <ul class="category-tag-list d-flex" >
                <div class="comments_and_views">
                <li class="category-tag-name" >
                    @guest
                        <a href="javascript:void(0)" class="likes" onclick="toastr.info('To add to favorite list you need to login first','Info',{
                            closeButton: true,
                            progressBar: true,
                        })">
                            <i class="fas fa-heart"> {{ $post->favorite_to_user->count() }}</i>
                        </a>
                    @else
                        <a href="javascript:void(0)" class="likes {{ !Auth::user()->favorite_posts->where('pivot.post_id',$post->id)->count()  == 0 ? 'favorite_posts' : ''}}" onclick="document.getElementById('favorite-form-{{ $post->id }}').submit()">
                            <i class="fas fa-heart"> {{ $post->favorite_to_user->count() }}</i>
                        </a>
                        <form id="favorite-form-{{ $post->id }}" action="{{ route('post.favorite',$post->id) }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    @endguest
                    </li>
                    <li class="category-tag-name">
                    <a href="" class="likes">
                        <i class="fas fa-eye"> {{ $post->view_count }}</i>
                    </a>
                    </li>
                    <li class="category-tag-name">
                    <a href="" class="likes">
                        <i class="fas fa-comment"> {{ $post->comments->count() }}</i>
                    </a>
                    </li>
                </div>
            </ul>
          <div class="row">
            <div class="col-md-7 col-lg-8 content">
              <div class="blog-content-wrap theiaStickySidebar">
                <div class="blog-desc">
                  <p>{!! html_entity_decode($post->body) !!}</p>
                </div>
                <div class="tags-wrap">
                  <div class="blog-tags">
                    <p>Tags:</p>
                    <ul class="sidebar-list tags-list">
                        @foreach ($post->tags as $tag)
                            <li><a href="{{ route('tag.posts',$tag->slug) }}">{{ $tag->name }}</a></li>
                        @endforeach
                    </ul>
                  </div>


                  <div class="share-buttons">
                    <p>Share Now:</p>
                    <ul class="share-list">
                      <li><a href="#"><img src="assets/images/facebook.png" alt=""></a></li>
                      <li><a href="#"><img src="assets/images/twitter.png" alt=""></a></li>
                      <li><a href="#"><img src="assets/images/pinterest.png" alt=""></a></li>
                      <li><a href="#"><img src="assets/images/messenger.png" alt=""></a></li>
                    </ul>
                  </div>
                </div>
                <div class="blog-author-info">
                  <div class="author-img">
                    <img src="{{ url('storage/profile/'.$post->user->image) }}" alt="">
                  </div>
                  <div class="author-desc">
                    <small>written by</small>
                    <h5>{{ $post->user->name }}</h5>
                    <p>{{ $post->user->role }}</p>
                  </div>
                </div>
                <div class="comment-section">
                  <div class="all-response">
                    <a class="btn view-all-btn" data-toggle="collapse" href="#collapseExample" role="button"
                      aria-expanded="false" aria-controls="collapseExample">
                      View all comments ( {{ $post->comments->count() }} )
                    </a>
                  </div>
                  <div class="collapse" id="collapseExample">
                    {{-- Comments --}}
                    @if ($post->comments->count() > 0)
                        @foreach ($post->comments as $comment)
                            <div class="card comment-card">
                                <div class="card-body">
                                <div class="author-date">
                                    <div class="author">
                                    <img src="{{ url('storage/profile/'.$comment->user->image) }}" alt="" class="rounded-circle" />
                                    </div>
                                    <div class="inner-author-date">
                                    <div class="author">
                                        <span class="text-white">{{ $comment->user->name }}</span>
                                    </div>
                                    <div class="date"><span>on {{ $comment->created_at->diffForHumans() }}</span></div>
                                    </div>
                                </div>
                                <div class="comment-text mt-2">
                                    <p>{{ $comment->comment }}</p>
                                </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <p class="py-4">No comment yet. Be the first <i class="fa fa-smile-o" aria-hidden="true"></i></p>
                    @endif
                    {{-- End Comments --}}
                  </div>
                  @guest
                    <p class="py-4">To post a new comment, you need to login first.</p>
                    <a href="{{ route('login') }}" class="btn btn-solid m-0">Login</a>
                  @else
                    <form class="comment-form" action="{{ route('comment.store', $post->id) }}" method="POST">
                        @csrf
                        <h5>Leave a comment</h5>
                        <div class="row">
                        <div class="col-12 mb-4">
                            <textarea rows="7" class="form-control" name="comment" placeholder="Comment"></textarea>
                        </div>
                        </div>
                        <button type="submit" class="btn btn-solid">Submit</button>
                    </form>
                  @endguest
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
                  <div class="sidebar-content">
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
                            <h5 class="card-title title-font"><a href="#">5 reasons for travelling more</a>
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
                            <h5 class="card-title title-font"><a href="#">Top 10 tips with common lifestyles</a>
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
                <div class="recent-posts mt-4">
                  <div class="sidebar-title">
                    <h5><i class="fas fa-circle"></i>Trending Now</h5>
                  </div>
                  <div class="sidebar-content">
                    <ul class="sidebar-list">
                      <li class="sidebar-item">
                        <div class="num-left">
                          1
                        </div>
                        <div class="content-right">
                          <a href="#">Healthy Dieting Habits for any age</a>

                        </div>
                      </li>
                      <li class="sidebar-item">
                        <div class="num-left">
                          2
                        </div>
                        <div class="content-right">
                          <a href="#"> 10 foods you should try in Kathmandu</a>
                        </div>
                      </li>
                      <li class="sidebar-item">
                        <div class="num-left">
                          3
                        </div>
                        <div class="content-right">
                          <a href="#">Everything You Wanted to Know About Love Life</a>
                        </div>
                      </li>
                      <li class="sidebar-item">
                        <div class="num-left">
                          4
                        </div>
                        <div class="content-right">
                          <a href="#">Yoga works only under these conditions</a>
                        </div>
                      </li>
                      <li class="sidebar-item">
                        <div class="num-left">
                          5
                        </div>
                        <div class="content-right">
                          <a href="#">Top 10 mysterious places you didn't know</a>
                        </div>
                      </li>

                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="related-posts">
        <div class="container">
          <div class="related-title">
            <h3>Related posts</h3>
          </div>
          <div class="row">
            @foreach ($randomposts as $post)
                <div class="col-md-6 col-lg-3">
                    <div class="card small-card simple-overlay-card">
                        <a href="{{ route('post.details',$post->slug) }}">
                            <img src="{{ url('storage/post/'.$post->image) }}" class="card-img" alt="" />
                        </a>
                        <div class="card-img-overlay">
                            <ul class="category-tag-list mb-0">
                            <li class="category-tag-name">
                                <a href="#">Travel</a>
                            </li>
                            </ul>
                            <h5 class="card-title title-font">
                            <a href="{{ route('post.details',$post->slug) }}">{{ $post->title }}</a>
                            </h5>
                            <ul class="category-tag-list d-flex" >
                                <div class="comments_and_views">
                                <li class="category-tag-name" >
                                    @guest
                                        <a href="javascript:void(0)" class="likes" onclick="toastr.info('To add to favorite list you need to login first','Info',{
                                            closeButton: true,
                                            progressBar: true,
                                        })">
                                            <i class="fas fa-heart"> {{ $post->favorite_to_user->count() }}</i>
                                        </a>
                                    @else
                                        <a href="javascript:void(0)" class="likes {{ !Auth::user()->favorite_posts->where('pivot.post_id',$post->id)->count()  == 0 ? 'favorite_posts' : ''}}" onclick="document.getElementById('favorite-form-{{ $post->id }}').submit()">
                                            <i class="fas fa-heart"> {{ $post->favorite_to_user->count() }}</i>
                                        </a>
                                        <form id="favorite-form-{{ $post->id }}" action="{{ route('post.favorite',$post->id) }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    @endguest
                                    </li>
                                    <li class="category-tag-name">
                                    <a href="" class="likes">
                                        <i class="fas fa-eye"> {{ $post->view_count }}</i>
                                    </a>
                                    </li>
                                    <li class="category-tag-name">
                                    <a href="" class="likes">
                                        <i class="fas fa-comment"> {{ $post->comments->count() }}</i>
                                    </a>
                                    </li>
                                </div>
                            </ul>
                        </div>
                    </div>
                </div>
            @endforeach
          </div>
        </div>
      </section>
</main>

@endsection
