<?php
/**
 * Created by PhpStorm.
 * User: Bright
 * Date: 28/04/2016
 * Time: 11:53
 */
include 'setup.php';
echo <<< EOD
    <body>
<nav class="navbar navbar-fixed-top navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index1.html">Tri-Aqua Cleaning</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="index1.html">Home</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">
                        Services
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="carpet_upholstery.html">Carpet & Upholstery</a>
                        </li>
                        <li>
                            <a href="office_cleaning.html">Office Cleaning</a>
                        </li>
                        <li>
                            <a href="tenancy_cleaning.html">Tenancy Cleaning</a>
                        </li>
                        <li>
                            <a href="kitchen_cleaning.html">Kitchen Cleaning</a>
                        </li>
                        <li>
                            <a href="new_builds.html">New Build Cleans</a>
                        </li>
                        <li>
                            <a href="floor_stripping.html">Floor Stripping & Re-Sealing</a>
                        </li>
                    </ul>
                </li>
                <li><a href="about.html">About Us</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
        </div><!-- /.nav-collapse -->
    </div><!-- /.container -->
</nav><!-- /.navbar -->
EOD;



