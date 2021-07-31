<div id="product" class="blog-area">
    <div class="blog-inner area-padding">
        <div class="blog-overly"></div>
        <div class="container ">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-headline text-center">
                        <h2>Product Company</h2>
                    </div>
                </div>
            </div>
            <div class="row">
            @forelse ($product as $item)

                <!-- Start Left product -->
                    <div class="col-md-4 col-sm-4  col-xs-12" style="margin-bottom: 10px !important;">
                        <div class="single-blog">
                            <div class="single-blog-img">
                                <a href="blog.html">
                                    <img class="imgProduct" src="{{asset("images/product/".$item->image)}}" alt="{{$item->alt}}">
                                </a>
                            </div>
                            <div class="blog-meta">
              <span class="date-type">
                  <i class="fa fa-calendar"></i>{{$item->created_at}}
                </span>
                            </div>
                            <div class="blog-text">
                                <h4>
                                    {{$item->title}}
                                </h4>
                                <p>
                                    {{\Illuminate\Support\Str::limit($item->body,150)}}
                                </p>
                            </div>
                            <span>
                <a href="{{route('home.product',['id'=>$item->id])}}" target="_blank" class="btn btn-info  btn-block" style="height:50px;line-height: 40px;">Read more</a>
              </span>
                        </div>
                        <!-- Start single blog -->
                    </div>
                    <!-- End Left product-->
                @empty
                    <div class="col-10 offset-1">
                        <h2 class="text-center">no data</h2>
                    </div>
                @endforelse

            </div>
            <div class="row m-0">
                <section class="col">
                    {{$product->links()}}
                </section>
            </div>
        </div>
    </div>
</div>
