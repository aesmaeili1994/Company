<div id="blog" class="blog-area">
    <div class="blog-inner area-padding">
        <div class="blog-overly"></div>
        <div class="container ">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-headline text-center">
                        <h2>Latest Posts</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Start Blog -->
                @forelse($post as $item)
                    <div class="col-md-4 col-sm-4 col-xs-12 mb-3">
                        <div class="single-blog">
                            <div class="single-blog-img">
                                <a href="#">
                                    <img class="imgLatestNews" src="{{asset("images/post/".$item->image)}}" alt="{{$item->alt}}">
                                </a>
                            </div>
                            <div class="blog-meta">
                            <span class="date-type">
                                <i class="fa fa-calendar"></i>{{$item->created_at}}
                            </span>
                            </div>
                            <div class="blog-text">
                                <h4>
                                    <a href="#">{{$item->subject}}</a>
                                </h4>
                                <p>{{\Illuminate\Support\Str::limit($item->body,100)}}</p>
                            </div>
                            <span>
                                <a href="{{route('home.post',['id'=>$item->id])}}" class="ready-btn" target="_blank">Read more</a>
                            </span>
                        </div>
                        <!-- Start single blog -->
                    </div>
                @empty
                    <div class="col-10 offset-1">
                        <h2 class="text-center">no data</h2>
                    </div>
                @endforelse
                <!-- End Blog-->
            </div>
        </div>
    </div>
</div>
