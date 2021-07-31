<div class="blog-page area-padding">
    <div class="container">
        <div class="row">
        @include('front.partials.post.recentPost',['recentPost'=>$recentPost])
        <!-- End left sidebar -->
        <!-- Start single blog -->
        @include('front.partials.post.singlePost',['singlePost'=>$singlePost])
        </div>
    </div>
</div>
