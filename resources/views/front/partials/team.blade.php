<div id="team" class="our-team-area area-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-headline text-center">
                    <h2>Our special Team</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- start column -->
            @forelse($team as $item)
                <div class="col-md-3 col-sm-3 col-xs-12 mb-2">
                    <div class="single-team-member">
                        <div class="team-img">
                            <a href="#">
                                <img class="imgTeam" src="{{asset("images/team/".$item->image)}}" alt="{{$item->alt}}">
                            </a>
                            <div class="team-social-icon text-center">
                                <ul>
                                    <li>
                                        <a href="{{$item->facebook}}" target="_blank">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{$item->twitter}}" target="_blank">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{$item->instagram}}" target="_blank">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-content text-center">
                            <h4>{{$item->fullname}}</h4>
                            <p>{{$item->job}}</p>
                        </div>
                    </div>
                </div>
            @empty
                <tr>
                    <td colspan="6">
                        <h3 class="text-center">no data</h3>
                    </td>
                </tr>
            @endforelse
            <!-- End column -->
        </div>
    </div>
</div>
