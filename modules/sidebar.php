<?php
/**
 * Created by PhpStorm.
 * User: Bright
 * Date: 28/04/2016
 * Time: 12:28
 */
class sidebar{
    function sidebar(){

    }
    public function renderHtml(){
        echo <<< EOD
                <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">
            <!-- special offer(temporary)-->
            <div class="list-group" id="offers">
                <a href="carpet_upholstery.html" class="list-group-item active">Special offer February & March <span class="label label-danger">New</span><span id="noty" class="badge"/></a>
                <a href="carpet_upholstery.html" class="list-group-item list-group-item-danger">
                    Spend &pound;55 on carpets or have three(3) piece suite cleaned <br/>
                    and have your hallway landing or bedroom cleaned <b>Free</b>
                </a>
            </div>
            <!-- old offers(will be reinstated after March) -->
            <!--<div class="list-group" id="offers">-->
                <!--<a href="carpet_upholstery.html" class="list-group-item active">Carpet Cleaning Offers <span class="label label-danger">New</span><span id="noty" class="badge"></span></a>-->
                <!--<a href="carpet_upholstery.html" class="list-group-item list-group-item-danger">Hallway £20 now £10</a>-->
                <!--<a href="carpet_upholstery.html" class="list-group-item list-group-item-danger">Landing £20 now £10</a>-->
                <!--<a href="carpet_upholstery.html" class="list-group-item list-group-item-danger">Flight of stairs £25 now £15</a>-->
                <!--<a href="carpet_upholstery.html" class="list-group-item list-group-item-danger">Box room £20 now £10</a>-->
                <!--<a href="carpet_upholstery.html" class="list-group-item list-group-item-danger">Dinning Room £55 now £20</a>-->
                <!--<a href="carpet_upholstery.html" class="list-group-item list-group-item-danger">Lounge/Living Room £55 now £35</a>-->
                <!--<a href="carpet_upholstery.html" class="list-group-item list-group-item-danger">Three Piece Suite £120 now £70</a>-->
                <!--<a href="carpet_upholstery.html" class="list-group-item list-group-item-danger">Diner & Lounge £80 now £55</a>-->
                <!--<a href="carpet_upholstery.html" class="list-group-item list-group-item-danger">Leather 3 Piece suite £120 now £70</a>-->
                <!--<a href="carpet_upholstery.html" class="list-group-item">No hidden extras!</a>-->
            <!--</div>-->
            <div class="hidden-xs hidden-sm">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#reviews" aria-controls="reviews" role="tab" data-toggle="tab">What they say</a></li>
                    <li role="presentation"><a href="#tweets" aria-controls="tweets" role="tab" data-toggle="tab">Tweets</a></li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in active" id="reviews">
                        <div>
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <div>
                                        <span class="review-author">Philippa Williams - </span>
                                        <span class="badge badge-rating">
                                            5 <span class="glyphicon glyphicon-star review-rating"></span>
                                        </span><br/>
                                        <div class="review-comment">
                                            We had this company for a 2 day deep clean of every room prior to putting our house up for sale.
                                            The result - a fantastic clean house from top to bottom!!
                                            It wasn' the easiest of jobs as the house is very old with lots of nooks, crannies and dusty beams.<br/>
                                            <a href="https://www.facebook.com/TriAquaCleaning?sk=reviews" target="_blank">... See More</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div>
                                        <span class="review-author">Joseph Lee - </span>
                                        <span class="badge badge-rating">
                                            5 <span class="glyphicon glyphicon-star review-rating"></span>
                                        </span><br/>
                                        <div class="review-comment">
                                            Great service from the Tri aqua team. Carpet cleaning with amazing results. Competitive pricing. Highly recommended<br/>
                                            <a href="https://www.facebook.com/TriAquaCleaning?sk=reviews" target="_blank">... See More</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div>
                                        <span class="review-author">Raymong Wong - </span>
                                        <span class="badge badge-rating">
                                            5 <span class="glyphicon glyphicon-star review-rating"></span>
                                        </span><br/>
                                        <div class="review-comment">
                                            Had various works carried out brilliantly, highly recommended<br/>
                                            <a href="https://www.facebook.com/TriAquaCleaning?sk=reviews" target="_blank">... See More</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div>
                                        <span class="review-author">Geoff Jones - </span>
                                        <span class="badge badge-rating">
                                            5 <span class="glyphicon glyphicon-star review-rating"></span>
                                        </span><br/>
                                        <div class="review-comment">
                                            Excellent service Job well done<br/>
                                            <a href="https://www.facebook.com/TriAquaCleaning?sk=reviews" target="_blank">... See More</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="tweets">
                        <div>
                            <a class="twitter-timeline" href="https://twitter.com/triaquaUK" data-widget-id="622853635794436096">Tweets by @triaquaUK</a>
                            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/.sidebar-offcanvas-->
EOD;
    }
}

