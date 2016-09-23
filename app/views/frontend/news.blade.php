@include('frontend.includes.header')
<div class="breadcrumb-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <h4>News</h4>
                    </div>
                    <div class="col-sm-6 hidden-xs text-right">
                        <ol class="breadcrumb">
                            <li><a href="index.html">Home</a></li>
                            <li>News</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div><!--breadcrumbs-->
        <div class="divide40"></div>
        <div class="container">
            <div class="row">
                    <div class="col-md-12">
                        <div class="center-heading">
                        <h2>News</h2>
                        <span class="center-line"></span>
                        <p>
                            We believe in community policing and are on a <br>mission to support positive engagement between citizens and police.
                        </p> 
                    </div>
                </div>                   
            </div><!--center heading row-->
            <div class="row">
                <div class="col-md-5 col-md-offset-1">
                     @if (count($news)>0)
                            @for ($x = 0; $x < count($news); $x++)
                            @if($x%2==0)
                                    <div class="blog-post">
                                        <a href="#">
                                            <div class="item-img-wrap">
                                                <img src="{{{ $news[$x]->pic_link }}}" class="img-responsive" alt="workimg">
                                                <div class="item-img-overlay">
                                                    <span></span>
                                                </div>
                                            </div>                       
                                        </a><!--work link-->
                                        <ul class="list-inline post-detail">
                                            <li>by <a href="#">{{{ $news[$x]->source }}}</a></li>
                                            <li><i class="fa fa-calendar"></i> {{{ $news[$x]->date }}}</li>
                                            <li><i class="fa fa-tag"></i> <a href="#">{{{ $news[$x]->category }}}</a></li>
                                        </ul>
                                        <h2 style="min-height: 74px;max-height: 74px"><a href="#">{{{ $news[$x]->title }}}</a></h2>
                                        <p style="min-height: 160px;max-height: 160px;overflow: hidden">
                                        {{{ $news[$x]->shortdesc }}}
                                        </p>
                                        <p>{{ link_to_route('shownews','Read More..', $news[$x]->id,array('class'=>'btn btn-theme-dark')) }}</p>
                                    </div><!--blog post-->
                                @endif
                            @endfor
                    @else
                        There are no news
                    @endif
                </div><!--col 5-->
                
                <div class="col-md-5">
                     @if (count($news)>0)
                            @for ($x = 0; $x < count($news); $x++)
                            @if($x%2!=0)
                                    <div class="blog-post">
                                        <a href="#">
                                            <div class="item-img-wrap">
                                                <img src="{{{ $news[$x]->pic_link }}}" class="img-responsive" alt="workimg">
                                                <div class="item-img-overlay">
                                                    <span></span>
                                                </div>
                                            </div>                       
                                        </a><!--work link-->
                                        <ul class="list-inline post-detail">
                                            <li>by <a href="#">{{{ $news[$x]->source }}}</a></li>
                                            <li><i class="fa fa-calendar"></i> {{{ $news[$x]->date }}}</li>
                                            <li><i class="fa fa-tag"></i> <a href="#">{{{ $news[$x]->category }}}</a></li>
                                        </ul>
                                        <h2 style="min-height: 74px;max-height: 74px"><a href="#">{{{ $news[$x]->title }}}</a></h2>
                                        <p style="min-height: 160px;max-height: 160px;overflow: hidden">
                                        {{{ $news[$x]->shortdesc }}}
                                        </p>
                                        <p>{{ link_to_route('shownews','Read More..', $news[$x]->id,array('class'=>'btn btn-theme-dark')) }}</p>
                                    </div><!--blog post-->
                                @endif
                            @endfor
                    @else
                        There are no news
                    @endif
                </div><!--col 5-->
                
            </div><!--row for blog post-->
            <div class="row">
                <div class="text-center col-md-12">
                    {{ $news->links() }}
                </div>
            </div>
        </div><!--blog full main container-->
        <div class="divide60"></div>
        @include('frontend.includes.footer')
