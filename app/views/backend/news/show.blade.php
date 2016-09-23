@include('frontend.includes.header')
<div class="breadcrumb-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <h4>News Details</h4>
                    </div>
                </div>
            </div>
        </div><!--breadcrumbs-->
        <div class="divide20"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="blog-post">
                           <!--  <div>
                                <img src="{{ asset('img/showcase-2.jpg') }}" class="img-responsive" alt="workimg">
                          
                            </div>  -->                      
                        
                        <h2>{{{ $news->title }}}</h2>
                        <p>
                          {{ $news->longdesc }}
                        </p>
                    </div><!--blog post-->
                    
                    <ul class="pager">
                    <p>

                        <li class="previous"><a href="{{ $previous }}">&larr; Previous News</a></li>
                        <li class="next"><a href="{{ $next }}">Next News &rarr;</a></li>
                    </ul><!--pager-->
                    
                </div><!--col-->
              
            </div><!--row for blog post-->
        </div><!--blog full main container-->
        <div class="divide60"></div>
        @include('frontend.includes.footer')
