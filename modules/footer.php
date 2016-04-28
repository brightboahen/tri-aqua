<?php
/**
 * Created by PhpStorm.
 * User: Bright
 * Date: 28/04/2016
 * Time: 12:08
 */
echo <<< EOD
        <!-- Site footer -->
<div class="accreditation">
    <div class="container">
        <div class="row">
            <div class="col-xs-4 col-sm-4 col-md-4">
                <img class="img-thumbnail img-responsive" src="img/bicsc_logo.jpg"/>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4">
                <img src="img/dry_fusion.jpg" class="img-thumbnail img-responsive"/>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4">
                <img src="img/safe_mark.png" class="img-thumbnail img-responsive"/>
            </div>
        </div>
    </div>
</div>
<div class="site-footer">
    <div class="container">
        <footer class="footer">
            <div class="row">
                <div class="col-xs-12 col-lg-4">
                    <h4><span class="glyphicon glyphicon-folder-open"></span> &nbsp; Mission Statement</h4>
                    <hr>
                    <p>
                        Tri-Aqua Cleaning aims to provide the best service.<br>
                        To perform this we need to cover all angles of quality.<br><a class="footer-link" href="about.html">Read more...</a>
                    </p>
                </div>
                <div class="col-xs-12 col-lg-4">
                    <h4><span class="glyphicon glyphicon-user"></span> &nbsp; About</h4>
                    <hr>
                    <p>
                        Tri-Aqua Cleaning is a forward thinking, service driven company respected in the cleaning industry for our ability to understand
                        each customer’s needs with tailor-made effective cleaning solutions that deliver our promise.
                        We are based in Newport, Gwent, our carpet cleaners and upholstery cleaners cover the surrounding areas including Cardiff.<br>
                        <a href="about.html" class="footer-link">Read more...</a>
                    </p>
                </div>
                <div class="col-xs-12 col-lg-4">
                    <h4><span class="glyphicon glyphicon-envelope"></span> &nbsp; Contact</h4>
                    <hr>
                    <p><span class="glyphicon glyphicon-map-marker"></span> &nbsp;Lakeside House, Lakeside, Cwmbran NP44 3XS</p>
                    <p><span class="glyphicon glyphicon-map-marker"></span> &nbsp;Bute Street, Cardiff CF10 5AD</p>
                    <p><span class="glyphicon glyphicon-envelope"></span> &nbsp;bob@triaquacleaning.co.uk</p>
                    <p><span class="glyphicon glyphicon-earphone"></span> &nbsp;01633 430817</p>
                    <p><span class="glyphicon glyphicon-phone"></span> &nbsp; 07770 962540</p>
                    <p><span class="glyphicon glyphicon-globe"></span> &nbsp; <a class="footer-link" href="http://tri-aquacleaning.co.uk">www.tri-aquacleaning.co.uk</a></p>
                </div>
            </div>
        </footer>
    </div>
    <div style="background-color:#009999; padding: 10px; text-align: center;">
        <p>&copy; Tri-Aqua Cleaning <script>document.write(new Date().getFullYear());</script>
            &trade; We pride ourselves to be able to offer a total solution to you, the client, with a one stop shop.</p>
    </div>
</div>
<!-- modal -->
<div class="modal fade" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Complete the form for a quote</h4>
            </div>
            <div class="modal-body">
                <form role="form" id="quoteForm">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="customerName" placeholder="Name" aria-required="true">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" name="customerEmail" placeholder="Email" aria-required="true">
                    </div>
                    <div class="form-group">
                        <label for="phoneNumber">Phone (For Call back )</label>
                        <input type="tel" class="form-control" id="phoneNumber" placeholder="Phone Number" name="customerPhone" aria-required="true">
                    </div>
                    <div class="form-group">
                        <label for="serviceSelect">Enquiry: </label>
                        <select id="serviceSelect" class="form-control" name="enquiry">
                            <option value="Carpet/Upholstery">Carpet & Upholstery</option>
                            <option value="FloorStripping/Re-Sealing">Floor Stripping & Re-Sealing</option>
                            <option value="Tenancy/Cleaning">Tenancy Cleaning</option>
                            <option value="Office/Cleaning">Office Cleaning</option>
                            <option value="Kitchen/Cleaning">Kitchen Cleaning</option>
                            <option value="New/Build">New Build Cleaning</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="subject">Subject</label>
                        <input type="text" class="form-control" id="subject" name="subject" placeholder="Enquiry Heading">
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea id="message" class="form-control" name="message" rows="4" style="resize: none"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" id="quoteBtn" class="btn btn-primary">Submit</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- end of -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
</body>
EOD;
