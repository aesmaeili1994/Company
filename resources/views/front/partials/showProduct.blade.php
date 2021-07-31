<div class="blog-page area-padding">
    <div class="container">
        <div class="row">
            @include('front.partials.product.recentProduct',['recentProduct'=>$recentProduct])
            <!-- End left sidebar -->
            <!-- Start single blog -->
            @include('front.partials.product.singleProduct',['singleProduct'=>$singleProduct])
        </div>
    </div>
</div>
