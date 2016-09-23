 @include('frontend.includes.header')
 <div class="breadcrumb-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <h4>About Us</h4>
                    </div>
                    <div class="col-sm-6 hidden-xs text-right">
                        <ol class="breadcrumb">
                            <li><a href="index.html">Home</a></li>
                            <li>about us</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div><!--breadcrumbs-->
        <div class="divide80"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 margin20">
                    <h3 class="heading">A little about us</h3>
                    <p>
                        Our Company was born out of the financial struggle of one police officer sacrificing quality of life to answer his calling as a public servant. Those who take the oath do so out of honor and a desire to help others, but a consistent dilemma that many officers face is finding a way to support their family on a police salary. Most reach a point in their career where they are confronted with the decision of whether to leave the career that they love in pursuit of financial stability. My Off Duty Cops evolved from a small group of police officers helping each other make ends meet and has since spanned across the country, helping countless officers supplement their income while they protect and serve.
                    </p>
                    <p><a href="{{ route('contact') }}" class="btn border-black btn-lg">Connect</a></p>
                </div>
                <div class="col-md-6">
                    <img src="img/showcase-1.jpg" class="img-responsive" alt="">
                </div>
            </div><!--about intro-->
            <div class="divide60"></div>
            <div class="row">
                <div class="col-md-4 margin20">
                    <h3 class="heading">We Bring Value</h3>
                    <div class="panel-group" id="accordion">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="about.html#collapseTwo">
                                        <i class="fa fa-level-down"></i>    Reduce Liability 
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse">
                                <div class="panel-body">
                                    Police at your location reduces liability not only from officers' professional expertise and guidance but also the immediate access to emergency services.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="about.html#collapseThree">
                                        <i class="fa fa-crop"></i>    Regulatory Compliance
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse">
                                <div class="panel-body">
                                    Ensure compliance with regulatory agencies and local variances by identifying potential violations before they become formal grievance or affect operation permits.  
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="about.html#collapseOne">
                                        <i class="fa fa-thumbs-o-up"></i>Good Business
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in">
                                <div class="panel-body">
                                   Companies who utilize My Off Duty Cops gain credibility by demonstrating that they are willing to take the initiative to make safety a top priority.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="about.html#collapseFour">
                                        <i class="fa fa-users"></i>    Community Liason
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseFour" class="panel-collapse collapse">
                                <div class="panel-body">
                                    Strengthen your company's relationship and image with the community by opening the opportunity for dialogue which can mitigate or resolve citizen complaints.
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--why hire us-->
                <div class="col-md-4 margin20">
                    <h3 class="heading">Key Benefits</h3>
                    <ul class="list-unstyled highlight-list">
                        <li><i class="fa fa-circle-o"></i> Rating System Maintains Integrity</li>
                        <li><i class="fa fa-circle-o"></i> Officer Bidding Process Ensures Fair Prices</li>
                        <li><i class="fa fa-circle-o"></i> Short Notice Service Available</li>
                        <li><i class="fa fa-circle-o"></i> Attentive Live Management </li>
                        <li><i class="fa fa-circle-o"></i> Multi-Agency Nationwide Police Network</li>
                        <li><i class="fa fa-circle-o"></i> Automated Technology Steamlines Process </li>
                    </ul>
                </div><!--col-->
                <div class="col-md-4 margin20">
                    <h3 class="heading">Core Principles</h3>
                    <!-- <p>
                       We are built on a foundation of core principles that shine through in our performance. When you choose My Off Duty Cops, there are a few things you’ll notice.
                    </p>
                     -->
                    <ul class="list-unstyled highlight-list">
                        <li><i class="fa fa-check"></i> Professional</li>
                        <li><i class="fa fa-check"></i> Knowledgeable</li>
                        <li><i class="fa fa-check"></i> Reliable</li>
                        <li><i class="fa fa-check"></i> Honest</li>
                        <li><i class="fa fa-check"></i> Passionate</li>
                        <li><i class="fa fa-check"></i> Punctual</li>
                    </ul>
                </div>
            </div><!--row of skills collapse and highlights-->
        </div>
        @include('frontend.includes.footer')
