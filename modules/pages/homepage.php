<?php
/**
 * Created by PhpStorm.
 * User: Bright
 * Date: 28/04/2016
 * Time: 12:46
 */

class homepage {
    function homepage(){

    }
    public function renderHtml(){
        echo <<< EOD
        <div class="col-xs-12 col-sm-9">
            <p class="pull-right visible-xs">
                <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Offers</button>
            </p>
            <img src="img/logo.gif" class="img-responsive">
            <div class="jumbotron" style="background-color: transparent; padding: 0">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    </ol>
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img src="img/office_1.jpg" alt="Office cleaning" class="img-responsive">
                            <div class="carousel-caption">
                                Office Cleaning
                            </div>
                        </div>
                        <div class="item">
                            <img src="img/tenancy_cleaning_2_carousel.jpg" alt="tenancycleaning" class="img-responsive">
                            <div class="carousel-caption">
                                Tenancy Cleaning
                            </div>
                        </div>
                        <div class="item">
                            <img src="img/hard_flooring_e.jpg" alt="Floor Cleaning" class="img-responsive">
                            <div class="carousel-caption">
                                Floor Cleaning
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-lg-12">
                    <div class="jumbotron">
                        <h2 class="lead">Tri-Aqua Cleaning Protecting Managing</h2>
                        <hr>
                        <p class="text-muted mStatement_p">
                            Maintaining a clean and healthy environment at work is of great importance from affecting the mindset of your workers to the first impressions with new clients.
                        </p>
                        <p class="text-muted mStatement_p">
                            Your office should always remain a clean fresh inviting place to be. Cleaning companies achieving these high cleaning standards that make the difference are hard to come by.
                        </p>
                        <p class="text-muted mStatement_p">
                            Tri-Aqua can make the difference with a core work ethic of exceeding expectations, we guarantee to impress.
                        </p>
                    </div>
                </div>
                <div class="col-xs-12 col-lg-4">
                    <div class="panel panel-primary panel-mod-primary">
                        <div class="panel-heading panel-mod-heading">
                            <div class="panel-title">
                                <span>Office Cleaning</span>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="thumbnail">
                                <img src="img/office_clean_2_e.jpg" class="img-responsive"/>
                            </div>
                            <span>
                                 Your office should always remain a clean, fresh inviting place to be and for first impressions. <a href="office_cleaning.html">...See More</a>
                            </span>
                        </div>
                        <div class="panel-footer">
                            <p><a class="btn btn-primary btn-mod-primary get-quote" href="#"  data-toggle="modal" data-target="#myModal" role="button">Get a quote &raquo;</a></p>
                        </div>
                    </div>
                </div><!--/.col-xs-6.col-lg-4-->
                <div class="col-xs-12 col-lg-4">
                    <div class="panel panel-primary panel-mod-primary">
                        <div class="panel-heading panel-mod-heading">
                            <div class="panel-title">
                                <span>Floor Stripping & Re-Sealing</span>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="thumbnail">
                                <img src="img/floor_cleaning.jpg" class="img-responsive"/>
                            </div>
                            <span>
                                We can revive your old tired floor back to its original state, removing any old polish<a href="floor_stripping.html">...See More</a>
                            </span>
                        </div>
                        <div class="panel-footer">
                            <p><a class="btn btn-primary btn-mod-primary get-quote" href="" role="button" data-toggle="modal" data-target="#myModal">Get a quote &raquo;</a></p>
                        </div>
                    </div>
                </div><!--/.col-xs-6.col-lg-4-->
                <div class="col-xs-12 col-lg-4">
                    <div class="panel panel-primary panel-mod-primary">
                        <div class="panel-heading panel-mod-heading">
                            <div class="panel-title">
                                <span>Carpet & Upholstery Cleaning</span>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="thumbnail">
                                <img src="img/carpet_cleaning-2_e.jpg"/>
                            </div>
                            <span>
                                Dry fusion is recommended by all major carpet and carpet tile companies <a href="carpet_upholstery.html">...See More</a>
                            </span>
                        </div>
                        <div class="panel-footer">
                            <p><a class="btn btn-primary btn-mod-primary get-quote" href="#" data-toggle="modal" data-target="#myModal" role="button">Get a quote &raquo;</a></p>
                        </div>
                    </div>
                </div><!--/.col-xs-6.col-lg-4-->
            </div><!--/row-->
        </div><!--/.col-xs-12.col-sm-9-->
EOD;
    }
}

