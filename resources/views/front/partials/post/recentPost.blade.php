<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
    <div class="page-head-blog">
        <div class="single-blog-page">
            <!-- product recent start -->
            <div class="left-blog">
                <h4>recent post</h4>
                <div class="recent-post">
                    <!-- start single post -->
                    @forelse($recentPost as $item)
                        <div class="recent-single-post">
                            <div class="post-img">
                                <a href="{{route('home.post',['id'=>$item->id])}}">
                                    <img class="imgProductRecent" src="{{asset('images/post/'.$item->image)}}" alt="{{$item->alt}}">
                                </a>
                            </div>
                            <div class="pst-content">
                                <p>
                                    <a href="{{route('home.post',['id'=>$item->id])}}">
                                        {{\Illuminate\Support\Str::limit($item->body,100)}}
                                    </a>
                                </p>
                            </div>
                        </div>
                    @empty
                        <h2 class="text-center">no data</h2>
                @endforelse
                <!-- End single post -->
                </div>
            </div>
            <!-- product recent end -->
        </div>
    </div>
</div>
