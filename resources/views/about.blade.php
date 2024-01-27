@extends('layouts.frontend.app')

@section('title', 'About Us')

@section('content')
<main class="kavya-about">


    <!-- header end -->
    <section class="page-header">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6">
            <div class="page-title">
              <h2>About</h2>
            </div>
          </div>
          <div class="col-md-6">
            <div class="page-breadcrumb">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">About</li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- page header end -->
    <section class="featured-posts">
        <div class="container mt-5">
          <div class="row">
            <div class="col-md-12">
              <div class="featured-left">
                <div class="card">
                  <a href=""><img src="{{ asset('client/images/women.jpeg') }}" class="card-img " alt="" /></a>
                  <div class="card-img-overlay">
                    <h5 class="card-title title-font">
                      <span class="text-white">Welcome to She Elevates Africa</span>
                    </h5>
                    <p class="card-text mb-3">
                        She Elevates Africa, a vibrant online community and news platform dedicated to empowering African women on their
                        journey of self-development. Our mission is to provide a supportive space where women from all walks of life can
                        connect, inspire, and collaborate with the intent of fostering personal growth and collective empowerment.
                    </p>
                  </div>
                </div>
              </div>
            </div>
            {{-- <div class="col-md-12 col-lg-5">
              <div class="featured-right">
                <div class="card">
                  <a href="">
                    <img src="client/images/image-10.jpg" class="card-img-top " alt="">
                  </a>
                  <div class="card-body">
                    <ul class="category-tag-list">

                      <li class="category-tag-name">
                        <a href="#">Lifestyle</a>
                      </li>
                    </ul>
                    <h5 class="card-title title-font"><a href="">Exercises In Group For Motivation</a>
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
                  <a href="">
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
                    <h5 class="card-title title-font"><a href="">Why College Students Love BasketBall</a>
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
            </div> --}}
          </div>
        </div>
      </section>
    <!-- About section -->
    <section class="about-section">
      <div class="container">
        <div class="about-inner">
          <div class="row no-gutters">
            <div class="col-md-7">
              <div class="about-text">
                <h3 class="about-title">Our Story</h3>
                <p class="text-justify">She Elevates Africa was founded with a vision to create a digital haven for women seeking inspiration,
                    guidance, and a sense of community. Recognizing the incredible strength and resilience that women possess,
                    we aim to amplify their voices, celebrate their achievements, and address the unique challenges they face.</p>
              </div>
            </div>
            <div class="col-md-5">
              <div class="about-img">
                <img src="{{ asset('client/images/about.png') }}" alt="">
              </div>
            </div>

          </div>
        </div>
        <div class="about-inner-2">
          <div class="row no-gutters align-items-center">
            <div class="col-md-7">
              <div class="about-img">
                <img src="{{ asset('client/images/welcome-.png') }}" alt="">
              </div>
            </div>
            <div class="col-md-5">
              <div class="about-text">
                <h3 class="about-title">Our Story</h3>
                <p>She Elevates Africa was founded with a vision to create a digital haven for women seeking inspiration,
                    guidance, and a sense of community. Recognizing the incredible strength and resilience that women possess,
                    we aim to amplify their voices, celebrate their achievements, and address the unique challenges they face.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- About section -->
    <section class="single-layout">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
              <div class="blog-content-wrap">
                <div class="blog-title-wrap">
                    <div class="author-date">
                        <h1 class="title-font">What We Offer</h1>
                    </div>

                <div class="blog-desc">
                  <p><span style="color: #f6814a">Inspiring Stories:</span> Discover real-life stories of African women who have overcome obstacles,
                    pursued their passions, and made a positive impact on their communities. These stories serve as
                    beacons of inspiration, reminding us, especially the young generation, that we are all capable of
                    achieving greatness.</p>

                  <p>
                    <span style="color: #f6814a">Community Building:</span>
                    Connect with like-minded individuals through our vibrant community forums.
                    Share your experiences, seek advice, and build meaningful relationships with
                    women who understand and support your journey.</p>
                  <p>
                    <span style="color: #f6814a">Expert Advice:</span>
                    Access expert insights on various aspects of self-development, including career
                    growth, personal wellness, relationships, and more. Our team of experienced contributors
                    and professionals is here to provide valuable guidance to help you thrive in every aspect of your life.</p>
                  <p>
                    <span style="color: #f6814a">Events and Workshops:</span>
                    Stay informed about upcoming events and workshops designed to enhance your skills,
                    broaden your perspectives, and foster personal development. Join webinars, virtual meet-ups,
                    and hands-on sessions led by experts in their respective fields.</p>
                  <p>
                    <span style="color: #f6814a">News and Updates:</span>
                    Stay up-to-date with the latest news and trends relevant to women's issues, empowerment,
                    and self-development. Our editorial team curates content that matters, keeping you informed and engaged.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="single-layout">
        <div class="container">
          <div class="row ">
            <div class="col-lg-12">
              <div class="blog-content-wrap">
                <div class="blog-title-wrap align-items-center">
                    <div class="author-date">
                        <h1 class="title-font">Our Values</h1>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="blog-desc">
                                <blockquote style="background: #f6814a; color: white;">
                                    <span style="color: black; font-weight: bold;">Inclusivity:</span> We believe in a diverse and inclusive community where women from all backgrounds feel welcome and valued.
                                </blockquote>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="blog-desc">
                                <blockquote style="background: #4d4b4a; color: white;">
                                    <span style="color: #f6814a; font-weight: bold;">Empowerment:</span> We are committed to empowering women to take control of their lives, embrace their strengths, and pursue their dreams.
                                </blockquote>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="blog-desc">
                                <blockquote style="background: #4d4b4a; color: white;">
                                    <span style="color: #f6814a; font-weight: bold;">Support:</span> Our platform fosters a supportive environment where women can lean on each other for encouragement, mentorship and advice.
                                </blockquote>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="blog-desc">
                                <blockquote style="background: #303c6c; color: white;">
                                    <span style="color: #f6814a; font-weight: bold;">Education:</span> We are dedicated to providing educational resources and insights that contribute to the ongoing growth and development of women.
                                </blockquote>
                            </div>
                        </div>
                    </div>
              </div>
            </div>
          </div>
        </div>
      </section>

    <section class="author-section mt-4">
      <div class="container">
        <h2>Meet our authors</h2>
        <div class="row">


          @foreach ($authors as $author)
            <div class="col-md-6 col-lg-3">
                <div class="card author-card">
                <div class="card-img">
                    <img src="storage/profile/{{ $author->image }}" alt="">
                </div>
                <h5><a href="#">{{ $author->name }}</a></h5>
                <small>{{ $author->role }}</small>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. A ipsum labore quaerat magni
                    non saepe. Lorem ipsum dolor sit amet.</p>

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
          @endforeach
        </div>
      </div>
    </section>
    <!-- About section -->

    <!-- Scroll to top -->
    <div id="stop" class="scroll-to-top" style="opacity: 1;">
      <span><a href="#"><i class="fas fa-arrow-up"></i></a></span>
    </div>
  </main>
@endsection
