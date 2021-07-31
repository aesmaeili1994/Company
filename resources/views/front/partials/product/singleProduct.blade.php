<div class="col-md-8 col-sm-8 col-xs-12">
    <div class="row">
        <!-- End single product -->
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="single-blog">
                <div class="single-blog-img">
                    <a href="blog-details.html">
                        <img src="{{asset('images/product/'.$singleProduct->image)}}" alt="{{asset($singleProduct->alt)}}">
                    </a>
                </div>
                <div class="blog-meta">
                    <span class="date-type">
                      <i class="fa fa-calendar"></i>{{$singleProduct->created_at}}
                    </span>
                </div>
                <div class="blog-text">
                    <h4>
                        <a href="#">{{$singleProduct->title}}</a>
                    </h4>
                    <p class="text-justify" style="line-height: 30px">{{$singleProduct->body}}</p>
                </div>
            </div>
        </div>
        <!-- End single product -->
    </div>
</div>
