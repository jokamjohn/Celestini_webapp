@extends("app")

@section("content")

    <div id="homepage_carousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#homepage_carousel" data-slide-to="0" class="active"></li>
            <li data-target="#homepage_carousel" data-slide-to="1"></li>
            <li data-target="#homepage_carousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="{{ assets("/images/Untitled-2.svg") }}" class="img-responsive" height="580px" width="auto"
                     alt="...">
                <!--<div class="carousel-caption">-->
                <!--<h3>First Image</h3>-->
                <!--<p>This is text associated with this image</p>-->
                <!--</div>-->
            </div>
            <div class="item">
                <img src="{{ assets("/images/analytics-011.svg") }}" class="img-responsive" height="580px" width="auto"
                     alt="...">
                <!--<div class="carousel-caption">-->
                <!--<h3>Second Image</h3>-->
                <!--<p>This is text associated with this image</p>-->
                <!--</div>-->
            </div>
            <div class="item">
                <img src="{{ assets("/images/monitoring-01.svg") }}" class="img-responsive" height="580px" width="auto"
                     alt="...">
                <!--<div class="carousel-caption">-->
                <!--<h3>Third Image</h3>-->
                <!--<p>This is text associated with this image</p>-->
                <!--</div>-->
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#homepage_carousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#homepage_carousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div id="features_container" class="container">
        <div class="row">
            <h1 class="heading">features</h1><br>
        </div>

        <div class="row">
            <div class="col-xs-1"></div>
            <div class="col-xs-3">
                <div class="row"><img src="{{ assets("/images/11918-NOAAJY.jpg") }}"
                                      style="height: auto; width: 80%; align-self: center"
                                      class="img-circle vector-background" alt=""></div>
                <div class="row">
                    <p>This text describes the first feature</p>
                </div>
            </div>
            <div class="col-xs-1"></div>
            <div class="col-xs-3">
                <div class="row"><img src="{{ assets("/images/11918-NOAAJY.jpg") }}" style="height: auto; width: 80%"
                                      class="img-circle vector-background" alt=""></div>
                <div class="row">
                    <p>This text describes the second feature</p>
                </div>
            </div>
            <div class="col-xs-1"></div>
            <div class="col-xs-3">
                <div class="row"><img src="{{ assets("/images/11918-NOAAJY.jpg") }}" style="height: auto; width: 80%"
                                      class="img-circle vector-background" alt=""></div>
                <div class="row">
                    <p>This text describes the third feature</p>
                </div>
            </div>
        </div>
        <br><br>
        <div class="row">
            <div class="col-xs-1"></div>
            <div class="col-xs-3">
                <div class="row"><img src="{{ assets("/images/11918-NOAAJY.jpg") }}"
                                      style="height: auto; width: 80%; align-self: center"
                                      class="img-circle vector-background" alt=""></div>
                <div class="row">
                    <p>This text describes the first feature</p>
                </div>
            </div>
            <div class="col-xs-1"></div>
            <div class="col-xs-3">
                <div class="row"><img src="{{ assets("/images/11918-NOAAJY.jpg") }}" style="height: auto; width: 80%"
                                      class="img-circle vector-background" alt=""></div>
                <div class="row">
                    <p>This text describes the second feature</p>
                </div>
            </div>
            <div class="col-xs-1"></div>
            <div class="col-xs-3">
                <div class="row"><img src="{{ assets("/images/11918-NOAAJY.jpg") }}" style="height: auto; width: 80%"
                                      class="img-circle vector-background" alt=""></div>
                <div class="row">
                    <p>This text describes the third feature</p>
                </div>
            </div>
        </div>
    </div>


<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' t0..ype='text/css'>
<link href='https://fonts.googleapis.com/css?family=Nunito:400,300,700' rel='stylesheet' type='text/css'>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->

    @endsection
