<div class="col-md-8 col-sm-8 col-xs-12">
    <div class="row">
        <!-- End single product -->
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="single-blog">
                <div class="single-blog-img">
                    <a href="blog-details.html">
                        <img src="{{asset('images/post/'.$singlePost->image)}}" alt="{{asset($singlePost->alt)}}">
                    </a>
                </div>
                <div class="blog-meta">
                    <span class="date-type">
                      <i class="fa fa-calendar"></i>{{$singlePost->created_at}}
                    </span>
                </div>
                <div class="blog-text">
                    <h4>
                        <a href="#">{{$singlePost->subject}}</a>
                    </h4>
                    <p class="text-justify" style="line-height: 30px">{{$singlePost->body}}</p>
                </div>
            </div>
        </div>
        <!-- End single product -->
    </div>
</div>
