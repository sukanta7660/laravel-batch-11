@extends('layouts.master')
@section('title','Home')
@section('content')
<section class="site-section pt-5 pb-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">

          <div class="owl-carousel owl-theme home-slider">
            <div>
              <a href="blog-single.html" class="a-block d-flex align-items-center height-lg" style="background-image: url('{{asset('public/asset')}}/images/img_1.jpg'); ">
                <div class="text half-to-full">
                  <span class="category mb-5">Food</span>
                  <div class="post-meta">
                    
                    <span class="author mr-2"><img src="{{asset('public/asset')}}/images/person_1.jpg" alt="Colorlib"> Colorlib</span>&bullet;
                    <span class="mr-2">March 15, 2018 </span> &bullet;
                    <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                    
                  </div>
                  <h3>How to Find the Video Games of Your Youth</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem nobis, ut dicta eaque ipsa laudantium!</p>
                </div>
              </a>
            </div>
            <div>
              <a href="blog-single.html" class="a-block d-flex align-items-center height-lg" style="background-image: url('{{asset('public/asset')}}/images/img_2.jpg'); ">
                <div class="text half-to-full">
                  <span class="category mb-5">Travel</span>
                  <div class="post-meta">
                    
                    <span class="author mr-2"><img src="{{asset('public/asset')}}/images/person_1.jpg" alt="Colorlib"> Colorlib</span>&bullet;
                    <span class="mr-2">March 15, 2018 </span> &bullet;
                    <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                    
                  </div>
                  <h3>How to Find the Video Games of Your Youth</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem nobis, ut dicta eaque ipsa laudantium!</p>
                </div>
              </a>
            </div>
            <div>
              <a href="blog-single.html" class="a-block d-flex align-items-center height-lg" style="background-image: url('{{asset('public/asset')}}/images/img_3.jpg'); ">
                <div class="text half-to-full">
                  <span class="category mb-5">Sports</span>
                  <div class="post-meta">
                    
                    <span class="author mr-2"><img src="{{asset('public/asset')}}/images/person_1.jpg" alt="Colorlib"> Colorlib</span>&bullet;
                    <span class="mr-2">March 15, 2018 </span> &bullet;
                    <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                    
                  </div>
                  <h3>How to Find the Video Games of Your Youth</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem nobis, ut dicta eaque ipsa laudantium!</p>
                </div>
              </a>
            </div>
          </div>
          
        </div>
      </div>
      
    </div>


  </section>
  <!-- END section -->

  <section class="site-section py-sm">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h2 class="mb-4">Latest Posts</h2>
        </div>
      </div>
      <div class="row blog-entries">
        <div class="col-md-12 col-lg-8 main-content">
          <div class="row">
            <div class="col-md-6">
              <a href="blog-single.html" class="blog-entry element-animate" data-animate-effect="fadeIn">
                <img src="{{asset('public/asset')}}/images/img_5.jpg" alt="Image placeholder">
                <div class="blog-content-body">
                  <div class="post-meta">
                    <span class="author mr-2"><img src="{{asset('public/asset')}}/images/person_1.jpg" alt="Colorlib"> Colorlib</span>&bullet;
                    <span class="mr-2">March 15, 2018 </span> &bullet;
                    <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                  </div>
                  <h2>How to Find the Video Games of Your Youth</h2>
                </div>
              </a>
            </div>
            <div class="col-md-6">
              <a href="blog-single.html" class="blog-entry element-animate" data-animate-effect="fadeIn">
                <img src="{{asset('public/asset')}}/images/img_6.jpg" alt="Image placeholder">
                <div class="blog-content-body">
                  <div class="post-meta">
                    <span class="author mr-2"><img src="{{asset('public/asset')}}/images/person_1.jpg" alt="Colorlib"> Colorlib</span>&bullet;
                    <span class="mr-2">March 15, 2018 </span> &bullet;
                    <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                  </div>
                  <h2>How to Find the Video Games of Your Youth</h2>
                </div>
              </a>
            </div>

            <div class="col-md-6">
              <a href="blog-single.html" class="blog-entry element-animate" data-animate-effect="fadeIn">
                <img src="{{asset('public/asset')}}/images/img_7.jpg" alt="Image placeholder">
                <div class="blog-content-body">
                  <div class="post-meta">
                    <span class="author mr-2"><img src="{{asset('public/asset')}}/images/person_1.jpg" alt="Colorlib"> Colorlib</span>&bullet;
                    <span class="mr-2">March 15, 2018 </span> &bullet;
                    <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                  </div>
                  <h2>How to Find the Video Games of Your Youth</h2>
                </div>
              </a>
            </div>
            <div class="col-md-6">
              <a href="blog-single.html" class="blog-entry element-animate" data-animate-effect="fadeIn">
                <img src="{{asset('public/asset')}}/images/img_8.jpg" alt="Image placeholder">
                <div class="blog-content-body">
                  <div class="post-meta">
                    <span class="author mr-2"><img src="{{asset('public/asset')}}/images/person_1.jpg" alt="Colorlib"> Colorlib</span>&bullet;
                    <span class="mr-2">March 15, 2018 </span> &bullet;
                    <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                  </div>
                  <h2>How to Find the Video Games of Your Youth</h2>
                </div>
              </a>
            </div>

            <div class="col-md-6">
              <a href="blog-single.html" class="blog-entry element-animate" data-animate-effect="fadeIn">
                <img src="{{asset('public/asset')}}/images/img_9.jpg" alt="Image placeholder">
                <div class="blog-content-body">
                  <div class="post-meta">
                    <span class="author mr-2"><img src="{{asset('public/asset')}}/images/person_1.jpg" alt="Colorlib"> Colorlib</span>&bullet;
                    <span class="mr-2">March 15, 2018 </span> &bullet;
                    <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                  </div>
                  <h2>How to Find the Video Games of Your Youth</h2>
                </div>
              </a>
            </div>
            <div class="col-md-6">
              <a href="blog-single.html" class="blog-entry element-animate" data-animate-effect="fadeIn">
                <img src="{{asset('public/asset')}}/images/img_10.jpg" alt="Image placeholder">
                <div class="blog-content-body">
                  <div class="post-meta">
                    <span class="author mr-2"><img src="{{asset('public/asset')}}/images/person_1.jpg" alt="Colorlib"> Colorlib</span>&bullet;
                    <span class="mr-2">March 15, 2018 </span> &bullet;
                    <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                  </div>
                  <h2>How to Find the Video Games of Your Youth</h2>
                </div>
              </a>
            </div>

            <div class="col-md-6">
              <a href="blog-single.html" class="blog-entry element-animate" data-animate-effect="fadeIn">
                <img src="{{asset('public/asset')}}/images/img_11.jpg" alt="Image placeholder">
                <div class="blog-content-body">
                  <div class="post-meta">
                    <span class="author mr-2"><img src="{{asset('public/asset')}}/images/person_1.jpg" alt="Colorlib"> Colorlib</span>&bullet;
                    <span class="mr-2">March 15, 2018 </span> &bullet;
                    <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                  </div>
                  <h2>How to Find the Video Games of Your Youth</h2>
                </div>
              </a>
            </div>
            <div class="col-md-6">
              <a href="blog-single.html" class="blog-entry element-animate" data-animate-effect="fadeIn">
                <img src="{{asset('public/asset')}}/images/img_12.jpg" alt="Image placeholder">
                <div class="blog-content-body">
                  <div class="post-meta">
                    <span class="author mr-2"><img src="{{asset('public/asset')}}/images/person_1.jpg" alt="Colorlib"> Colorlib</span>&bullet;
                    <span class="mr-2">March 15, 2018 </span> &bullet;
                    <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                  </div>
                  <h2>How to Find the Video Games of Your Youth</h2>
                </div>
              </a>
            </div>
          </div>

          <div class="row mt-5">
            <div class="col-md-12 text-center">
              <nav aria-label="Page navigation" class="text-center">
                <ul class="pagination">
                  <li class="page-item  active"><a class="page-link" href="#">&lt;</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">4</a></li>
                  <li class="page-item"><a class="page-link" href="#">5</a></li>
                  <li class="page-item"><a class="page-link" href="#">&gt;</a></li>
                </ul>
              </nav>
            </div>
          </div>
        </div>

        <!-- END main-content -->

        @include('include.user.sidebar')
        <!-- END sidebar -->

      </div>
    </div>
  </section>
@endsection