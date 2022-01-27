@extends('layouts.website')
@section('content')
    <div id="banner-area" class="banner-area" style="background-image:url({{asset('contents/website')}}/images//banner/banner1.jpg)">
    <div class="banner-text">
        <div class="container">
        <div class="row">
            <div class="col-xs-12">
            <div class="banner-heading">
                <h1 class="border-title border-left">About Us</h1>
                <ol class="breadcrumb">
                <li>Home</li>
                <li>Company</li>
                <li>
                    <a href="#">About Us</a>
                </li>
                </ol>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
    <section id="main-container" class="main-container">
    <div class="container">
        <div class="row">
        <div class="col-md-6">
            <h3>Company Overview</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer adipiscing erat eget risus sollicitudin pellentesque et non erat. Maecenas nibh dolor, malesuada et bibendum a, sagittis accumsan ipsum. Pellentesque ultrices ultrices sapien, nec tincidunt nunc posuere ut. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <p>Pellentesque ultrices ultrices sapien, nec tincidunt nunc posuere ut. Lorem ipsum dolor sit amet, consectetur adipiscing elit. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn’t anything embarrassing.</p>
            <div class="img-box">
            <div class="img-box-small">Pillars of Excellence</div>
            <figure>
                <img class="img-responsive" src="{{asset('contents/website')}}/images//intro/intro1.jpg" alt="">
            </figure>
            <figure>
                <img class="img-responsive" src="{{asset('contents/website')}}/images//intro/intro2.jpg" alt="">
            </figure>
            <figure>
                <img class="img-responsive" src="{{asset('contents/website')}}/images//intro/intro3.jpg" alt="">
            </figure>
            </div>
        </div>
        <div class="col-md-6">
            <h3>Our Working Philosophy</h3>
            <p>Tumblr photo booth normcore, Bushwick Brooklyn hella fixie YOLO locavore umami Shoreditch. 3 wolf moon selfies readymade slow-carb, 90's craft beer synth sustainable. Lomo raw denim hoodie, ennui tilde trust fund gentrify Neutra Intelligentsia.</p>
            <h3>Our Core Values</h3>
            <div class="panel-group" id="accordion">
            <div class="panel panel-default">
                <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Safety</a>
                </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in">
                <div class="panel-body">
                    <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidata</p>
                </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" class="collapsed" data-parent="#accordion" href="#collapseTwo"> Customer Service</a>
                </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse">
                <div class="panel-body">
                    <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidata</p>
                </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" class="collapsed" data-parent="#accordion" href="#collapseThree"> Integrity</a>
                </h4>
                </div>
                <div id="collapseThree" class="panel-collapse collapse">
                <div class="panel-body">
                    <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidata</p>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    </section>
    <section id="facts" class="facts-area bg-overlay no-padding">
    <div class="container">
        <div class="row">
        <div class="facts-wrapper">
            <div class="col-sm-3 ts-facts">
            <div class="ts-facts-img">
                <img src="{{asset('contents/website')}}/images//icon-image/fact1.png" alt="" />
            </div>
            <div class="ts-facts-content">
                <h2 class="ts-facts-num">
                <span class="counterUp">1789</span>
                </h2>
                <h3 class="ts-facts-title">Project Handover</h3>
            </div>
            </div>
            <div class="col-sm-3 ts-facts">
            <div class="ts-facts-img">
                <img src="{{asset('contents/website')}}/images//icon-image/fact2.png" alt="" />
            </div>
            <div class="ts-facts-content">
                <h2 class="ts-facts-num">
                <span class="counterUp">1247</span>
                </h2>
                <h3 class="ts-facts-title">Full-time Salaried</h3>
            </div>
            </div>
            <div class="col-sm-3 ts-facts">
            <div class="ts-facts-img">
                <img src="{{asset('contents/website')}}/images//icon-image/fact3.png" alt="" />
            </div>
            <div class="ts-facts-content">
                <h2 class="ts-facts-num">
                <span class="counterUp">5000</span>
                </h2>
                <h3 class="ts-facts-title">Million Revenue</h3>
            </div>
            </div>
            <div class="col-sm-3 ts-facts">
            <div class="ts-facts-img">
                <img src="{{asset('contents/website')}}/images//icon-image/fact4.png" alt="" />
            </div>
            <div class="ts-facts-content">
                <h2 class="ts-facts-num">
                <span class="counterUp">44</span>
                </h2>
                <h3 class="ts-facts-title">Countries Experience</h3>
            </div>
            </div>
        </div>
        </div>
    </div>
    </section>
    <section id="ts-team" class="ts-team">
    <div class="container">
        <div class="row text-center">
        <h2 class="border-title">Our Leadership</h2>
        <p class="border-sub-title">Collaboratively administrate empowered markets via plug-and-play networks.</p>
        </div>
        <div class="row">
        <div id="team-slide" class="owl-carousel owl-theme team-slide">
            <div class="item">
            <div class="ts-team-wrapper">
                <div class="team-img-wrapper">
                <img alt="" src="{{asset('contents/website')}}/images//team/team1.jpg" class="img-responsive">
                </div>
                <div class="ts-team-content">
                <h3 class="ts-name">Nats Stenman</h3>
                <p class="ts-designation">Chief Operating Officer</p>
                <p class="ts-description">Nats Stenman began his career in construction with boots on the ground</p>
                <div class="team-social-icons">
                    <a target="_blank" href="#">
                    <i class="fa fa-facebook"></i>
                    </a>
                    <a target="_blank" href="#">
                    <i class="fa fa-twitter"></i>
                    </a>
                    <a target="_blank" href="#">
                    <i class="fa fa-google-plus"></i>
                    </a>
                    <a target="_blank" href="#">
                    <i class="fa fa-linkedin"></i>
                    </a>
                </div>
                </div>
            </div>
            </div>
            <div class="item">
            <div class="ts-team-wrapper">
                <div class="team-img-wrapper">
                <img alt="" src="{{asset('contents/website')}}/images//team/team2.jpg" class="img-responsive">
                </div>
                <div class="ts-team-content">
                <h3 class="ts-name">Mark Conter</h3>
                <p class="ts-designation">Innovation Officer</p>
                <p class="ts-description">Nats Stenman began his career in construction with boots on the ground</p>
                <div class="team-social-icons">
                    <a target="_blank" href="#">
                    <i class="fa fa-facebook"></i>
                    </a>
                    <a target="_blank" href="#">
                    <i class="fa fa-twitter"></i>
                    </a>
                    <a target="_blank" href="#">
                    <i class="fa fa-linkedin"></i>
                    </a>
                </div>
                </div>
            </div>
            </div>
            <div class="item">
            <div class="ts-team-wrapper">
                <div class="team-img-wrapper">
                <img alt="" src="{{asset('contents/website')}}/images//team/team3.jpg" class="img-responsive">
                </div>
                <div class="ts-team-content">
                <h3 class="ts-name">Angela Lyouer</h3>
                <p class="ts-designation">Safety Officer</p>
                <p class="ts-description">Nats Stenman began his career in construction with boots on the ground</p>
                <div class="team-social-icons">
                    <a target="_blank" href="#">
                    <i class="fa fa-twitter"></i>
                    </a>
                    <a target="_blank" href="#">
                    <i class="fa fa-google-plus"></i>
                    </a>
                    <a target="_blank" href="#">
                    <i class="fa fa-linkedin"></i>
                    </a>
                </div>
                </div>
            </div>
            </div>
            <div class="item">
            <div class="ts-team-wrapper">
                <div class="team-img-wrapper">
                <img alt="" src="{{asset('contents/website')}}/images//team/team4.jpg" class="img-responsive">
                </div>
                <div class="ts-team-content">
                <h3 class="ts-name">Dave Clarkte</h3>
                <p class="ts-designation">Finance Officer</p>
                <p class="ts-description">Nats Stenman began his career in construction with boots on the ground</p>
                <div class="team-social-icons">
                    <a target="_blank" href="#">
                    <i class="fa fa-facebook"></i>
                    </a>
                    <a target="_blank" href="#">
                    <i class="fa fa-twitter"></i>
                    </a>
                    <a target="_blank" href="#">
                    <i class="fa fa-google-plus"></i>
                    </a>
                    <a target="_blank" href="#">
                    <i class="fa fa-linkedin"></i>
                    </a>
                </div>
                </div>
            </div>
            </div>
            <div class="item">
            <div class="ts-team-wrapper">
                <div class="team-img-wrapper">
                <img alt="" src="{{asset('contents/website')}}/images//team/team5.jpg" class="img-responsive">
                </div>
                <div class="ts-team-content">
                <h3 class="ts-name">Ayesha Stewart</h3>
                <p class="ts-designation">Civil Engineer</p>
                <p class="ts-description">Nats Stenman began his career in construction with boots on the ground</p>
                <div class="team-social-icons">
                    <a target="_blank" href="#">
                    <i class="fa fa-twitter"></i>
                    </a>
                    <a target="_blank" href="#">
                    <i class="fa fa-google-plus"></i>
                    </a>
                    <a target="_blank" href="#">
                    <i class="fa fa-linkedin"></i>
                    </a>
                </div>
                </div>
            </div>
            </div>
            <div class="item">
            <div class="ts-team-wrapper">
                <div class="team-img-wrapper">
                <img alt="" src="{{asset('contents/website')}}/images//team/team6.jpg" class="img-responsive">
                </div>
                <div class="ts-team-content">
                <h3 class="ts-name">Elsie Gaeta</h3>
                <p class="ts-designation">Site Supervisor</p>
                <p class="ts-description">Nats Stenman began his career in construction with boots on the ground</p>
                <div class="team-social-icons">
                    <a target="_blank" href="#">
                    <i class="fa fa-facebook"></i>
                    </a>
                    <a target="_blank" href="#">
                    <i class="fa fa-twitter"></i>
                    </a>
                    <a target="_blank" href="#">
                    <i class="fa fa-google-plus"></i>
                    </a>
                    <a target="_blank" href="#">
                    <i class="fa fa-linkedin"></i>
                    </a>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    </section>
@endsection
