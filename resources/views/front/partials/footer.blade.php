<footer>
    <div class="footer-area">
        <div class="container">
            <div class="row">
            @include('front.partials.social',['social'=>$social])
            <!-- end single footer -->
            @include('front.partials.info',['information'=>$information])
            <!-- end single footer -->
            @include('front.partials.links',['link'=>$link])
            </div>
        </div>
    </div>
    <div class="footer-area-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="credits">
                        <!--
                        All the links in the footer should remain intact.
                        You can delete the links only if you purchased the pro version.
                        Licensing information: https://bootstrapmade.com/license/
                        Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=eBusiness
                      -->
                        Designed by <a href="#">AlirezaEsmaeili</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
