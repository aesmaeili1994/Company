<div class="col-md-4 col-sm-4 col-xs-12">
    <div class="footer-content">
        <div class="footer-head">
            <h4>Related Links</h4>
            <div class="flicker-img">
                @forelse($link as $item)
                    <a href="{{$item->link}}">{{$item->name}}</a>
                @empty
                    <h4>no data</h4>
                @endforelse
            </div>
        </div>
    </div>
</div>
