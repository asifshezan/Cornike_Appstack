@extends('layouts.website')
@section('content')
<div id="main-slide" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators visible-lg visible-md">
      <li data-target="#main-slide" data-slide-to="0" class="active"></li>
      <li data-target="#main-slide" data-slide-to="1"></li>
      <li data-target="#main-slide" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="item active" style="background-image:url({{asset('contents/website')}}/images/slider-main/bg1.jpg)">
        <div class="slider-content text-left">
          <div class="col-md-12">
            <h2 class="slide-title-box animated2">27 Years Young</h2>
            <h3 class="slide-title animated3">With a Bench Strength of</h3>
            <h3 class="slide-sub-title animated3">1170+ Construction Experts</h3>
            <p class="animated3">
              <a href="#" class="slider btn btn-primary border">Our Services</a>
            </p>
          </div>
        </div>
      </div>
      <div class="item" style="background-image:url({{asset('contents/website')}}/images/slider-main/bg2.jpg)">
        <div class="slider-content">
          <div class="col-md-12 text-center">
            <h2 class="slide-title animated4">We are the Leader in</h2>
            <h3 class="slide-sub-title animated5">Construction Industry</h3>
            <p class="slider-description lead animated3">We will deal with your failure that determines how you achieve success.</p>
            <p>
              <a href="#" class="slider btn btn-primary">Our Services</a>
              <a href="#" class="slider btn btn-primary border">Call Now</a>
            </p>
          </div>
        </div>
      </div>
      <div class="item" style="background-image:url({{asset('contents/website')}}/images/slider-main/bg3.jpg)">
        <div class="slider-content text-right">
          <div class="col-md-12">
            <h2 class="slide-title animated6">Meet Our Engineers</h2>
            <h3 class="slide-sub-title animated7">We care our Cummunities</h3>
            <p class="slider-description lead animated7">We will deal with your failure that determines how you achieve success.</p>
            <p>
              <a href="#" class="slider btn btn-primary">Get Free Quote</a>
              <a href="#" class="slider btn btn-primary border">Learn More</a>
            </p>
          </div>
        </div>
      </div>
    </div>
    <a class="left carousel-control" href="#main-slide" data-slide="prev">
      <span>
        <i class="fa fa-angle-left"></i>
      </span>
    </a>
    <a class="right carousel-control" href="#main-slide" data-slide="next">
      <span>
        <i class="fa fa-angle-right"></i>
      </span>
    </a>
  </div>
  <section class="call-to-action">
    <div class="container">
      <div class="row">
        <div class="col-md-10 col-xs-12">
          <h3 class="call-to-action-title">We are committed to providing the best quality of service</h3>
        </div>
        <div class="col-md-2 col-xs-12">
          <div class="call-to-action-btn-angle">
            <a href="#">
              <i class="fa fa-paper-plane"></i>Contact Us </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="ts-features" class="ts-features">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <div class="intro-feature">
            <h3>Company Vision and Purpose</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer adipiscing erat eget risus sollicitudin pellentesque et non erat. Maecenas nibh dolor, malesuada et bibendum a, sagittis accumsan ipsum. Pellentesque ultrices ultrices sapien, nec tincidunt nunc posuere ut. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <p>
              <a class="intro-link" href="#">
                <i class="fa fa-caret-right"></i> More Information </a>
            </p>
            <div class="img-box">
              <div class="img-box-small">Pillars of Excellence</div>
              <figure>
                <img class="img-responsive" src="{{asset('contents/website')}}/images/intro/intro1.jpg" alt="">
              </figure>
              <figure>
                <img class="img-responsive" src="{{asset('contents/website')}}/images/intro/intro2.jpg" alt="">
              </figure>
              <figure>
                <img class="img-responsive" src="{{asset('contents/website')}}/images/intro/intro3.jpg" alt="">
              </figure>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="featured-tab">
            <ul class="nav nav-tabs">
              <li class="active">
                <a class="animated fadeIn" href="#tab_a" data-toggle="tab">
                  <span class="tab-head">
                    <span class="tab-text-title">Trust</span>
                  </span>
                </a>
              </li>
              <li>
                <a class="animated fadeIn" href="#tab_b" data-toggle="tab">
                  <span class="tab-head">
                    <span class="tab-text-title">Expertise</span>
                  </span>
                </a>
              </li>
              <li>
                <a class="animated fadeIn" href="#tab_c" data-toggle="tab">
                  <span class="tab-head">
                    <span class="tab-text-title">Safety</span>
                  </span>
                </a>
              </li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active animated fadeInRight" id="tab_a">
                <div class="tab-wrapper">
                  <div class="ts-service-box">
                    <span class="ts-service-icon">
                      <i class="fa fa-trophy"></i>
                    </span>
                    <div class="ts-service-box-content">
                      <h3>We've Repution for Excellence</h3>
                      <p>Aenean et dolor pretium, feugiat leom nongial, aliquettiabser libero. Consectetur ut vestibulum vivamus vestibulum accumsa.</p>
                    </div>
                  </div>
                  <div class="ts-service-box">
                    <span class="ts-service-icon">
                      <i class="fa fa-sliders"></i>
                    </span>
                    <div class="ts-service-box-content">
                      <h3>We Build Partnerships</h3>
                      <p>Aenean et dolor pretium, feugiat leom nongial, aliquettiabser libero. Consectetur ut vestibulum vivamus vestibulum accumsa.</p>
                    </div>
                  </div>
                  <div class="ts-service-box">
                    <span class="ts-service-icon">
                      <i class="fa fa-thumbs-up"></i>
                    </span>
                    <div class="ts-service-box-content">
                      <h3>Guided by Commitment</h3>
                      <p>Aenean et dolor pretium, feugiat leom nongial, aliquettiabser libero. Consectetur ut vestibulum vivamus vestibulum accumsa.</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane animated fadeInRight" id="tab_b">
                <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</p>
                <div class="ts-service-box">
                  <span class="ts-service-icon">
                    <i class="fa fa-users"></i>
                  </span>
                  <div class="ts-service-box-content">
                    <h3>A Team of Professionals</h3>
                    <p>Aenean et dolor pretium, feugiat leom nongial, aliquettiabser libero. Consectetur ut vestibulum vivamus vestibulum accumsa.</p>
                  </div>
                </div>
                <div class="ts-service-box">
                  <span class="ts-service-icon">
                    <i class="fa fa-hourglass"></i>
                  </span>
                  <div class="ts-service-box-content">
                    <h3>121 Years of Young</h3>
                    <p>Aenean et dolor pretium, feugiat leom nongial, aliquettiabser libero. Consectetur ut vestibulum vivamus vestibulum accumsa.</p>
                  </div>
                </div>
              </div>
              <div class="tab-pane animated fadeInLeft" id="tab_c">
                <img class="pull-left" src="{{asset('contents/website')}}/images/intro/intro2.jpg" alt="" />
                <p>Aenean et dolor pretium, feugiat leom nongial, aliquettiabser libero. Consectetur ut vestibulum vivamus vestibulum accumsa.Aenean et dolor pretium, feugiat leom nongial, aliquettiabser libero. Consectetur ut vestibulum vivamus vestibulum accumsa.Aenean et dolor pretium, feugiat leom nongial, aliquettiabser libero. Consectetur ut vestibulum vivamus vestibulum accumsa.Aenean et dolor pretium, feugiat leom nongial, aliquettiabser libero. Consectetur ut vestibulum vivamus.</p>
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
              <img src="{{asset('contents/website')}}/images/icon-image/fact1.png" alt="" />
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
              <img src="{{asset('contents/website')}}/images/icon-image/fact2.png" alt="" />
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
              <img src="{{asset('contents/website')}}/images/icon-image/fact3.png" alt="" />
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
              <img src="{{asset('contents/website')}}/images/icon-image/fact4.png" alt="" />
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
  <section id="ts-service-area" class="ts-service-area">
    <div class="container">
      <div class="row text-center">
        <h2 class="border-title">What We Do</h2>
        <p class="border-sub-title">Collaboratively administrate empowered markets via plug-and-play networks.</p>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="ts-service-box">
            <div class="ts-service-box-img pull-left">
              <img src="{{asset('contents/website')}}/images/icon-image/service-icon1.png" alt="" />
            </div>
            <div class="ts-service-box-info">
              <h3 class="service-box-title">
                <a href="#">Pre-Construction</a>
              </h3>
              <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Integer adipiscing erat</p>
            </div>
          </div>
          <div class="ts-service-box">
            <div class="ts-service-box-img pull-left">
              <img src="{{asset('contents/website')}}/images/icon-image/service-icon2.png" alt="" />
            </div>
            <div class="ts-service-box-info">
              <h3 class="service-box-title">
                <a href="#">General Contracting</a>
              </h3>
              <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Integer adipiscing erat</p>
            </div>
          </div>
          <div class="ts-service-box">
            <div class="ts-service-box-img pull-left">
              <img src="{{asset('contents/website')}}/images/icon-image/service-icon3.png" alt="" />
            </div>
            <div class="ts-service-box-info">
              <h3 class="service-box-title">
                <a href="#">Construction Management</a>
              </h3>
              <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Integer adipiscing erat</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 text-center">
          <img class="service-center-img img-responsive" src="{{asset('contents/website')}}/images/services/service-center.png" alt="" />
        </div>
        <div class="col-md-4">
          <div class="ts-service-box">
            <div class="ts-service-box-img pull-left">
              <img src="{{asset('contents/website')}}/images/icon-image/service-icon4.png" alt="" />
            </div>
            <div class="ts-service-box-info">
              <h3 class="service-box-title">
                <a href="#">Design and Build</a>
              </h3>
              <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Integer adipiscing erat</p>
            </div>
          </div>
          <div class="ts-service-box">
            <div class="ts-service-box-img pull-left">
              <img src="{{asset('contents/website')}}/images/icon-image/service-icon5.png" alt="" />
            </div>
            <div class="ts-service-box-info">
              <h3 class="service-box-title">
                <a href="#">Self-Perform Construction</a>
              </h3>
              <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Integer adipiscing erat</p>
            </div>
          </div>
          <div class="ts-service-box">
            <div class="ts-service-box-img pull-left">
              <img src="{{asset('contents/website')}}/images/icon-image/service-icon6.png" alt="" />
            </div>
            <div class="ts-service-box-info">
              <h3 class="service-box-title">
                <a href="#">Health &amp; Safety Management</a>
              </h3>
              <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Integer adipiscing erat</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="project-area" class="project-area">
    <div class="container">
      <div class="row">
        <h2 class="title">Our Projects</h2>
      </div>
      <div class="row">
        <div class="isotope-nav" data-isotope-nav="isotope">
          <ul>
            <li>
              <a href="#" class="active" data-filter="*">Show All</a>
            </li>
            <li>
              <a href="#" data-filter=".commercial">Commercial</a>
            </li>
            <li>
              <a href="#" data-filter=".interiors">Interiors</a>
            </li>
            <li>
              <a href="#" data-filter=".education">Education</a>
            </li>
            <li>
              <a href="#" data-filter=".government">Government</a>
            </li>
            <li>
              <a href="#" data-filter=".infrastructure">Infrastructure</a>
            </li>
            <li>
              <a href="#" data-filter=".residential">Residential</a>
            </li>
            <li>
              <a href="#" data-filter=".healthcare">Healthcare</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div id="isotope" class="isotope">
      <div class="col-md-3 col-sm-6 col-xs-12 commercial isotope-item">
        <div class="isotope-img-container">
          <a class="gallery-popup" href="{{asset('contents/website')}}/images/projects/project1.jpg">
            <img class="img-responsive" src="{{asset('contents/website')}}/images/projects/project1.jpg" alt="">
            <span class="gallery-icon">
              <i class="fa fa-plus"></i>
            </span>
          </a>
          <div class="project-item-info">
            <div class="project-item-info-content">
              <h3 class="project-item-title">
                <a href="projects-single1.html">Capital Teltway Building</a>
              </h3>
              <p class="project-cat">Commercial, Interiors</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 col-xs-12 healthcare isotope-item">
        <div class="isotope-img-container">
          <a class="gallery-popup" href="{{asset('contents/website')}}/images/projects/project2.jpg">
            <img class="img-responsive" src="{{asset('contents/website')}}/images/projects/project2.jpg" alt="">
            <span class="gallery-icon">
              <i class="fa fa-plus"></i>
            </span>
          </a>
          <div class="project-item-info">
            <div class="project-item-info-content">
              <h3 class="project-item-title">
                <a href="projects-single2.html">Ghum Touch Hospital</a>
              </h3>
              <p class="project-cat">Healthcare</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 col-xs-12 government isotope-item">
        <div class="isotope-img-container">
          <a class="gallery-popup" href="{{asset('contents/website')}}/images/projects/project3.jpg">
            <img class="img-responsive" src="{{asset('contents/website')}}/images/projects/project3.jpg" alt="">
            <span class="gallery-icon">
              <i class="fa fa-plus"></i>
            </span>
          </a>
          <div class="project-item-info">
            <div class="project-item-info-content">
              <h3 class="project-item-title">
                <a href="projects-single1.html">TNT East Facility</a>
              </h3>
              <p class="project-cat">Government</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 col-xs-12 infrastructure isotope-item">
        <div class="isotope-img-container">
          <a class="gallery-popup" href="{{asset('contents/website')}}/images/projects/project4.jpg">
            <img class="img-responsive" src="{{asset('contents/website')}}/images/projects/project4.jpg" alt="">
            <span class="gallery-icon">
              <i class="fa fa-plus"></i>
            </span>
          </a>
          <div class="project-item-info">
            <div class="project-item-info-content">
              <h3 class="project-item-title">
                <a href="projects-single2.html">Narriot Headquarters</a>
              </h3>
              <p class="project-cat">Infrastructure</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 col-xs-12 infrastructure isotope-item">
        <div class="isotope-img-container">
          <a class="gallery-popup" href="{{asset('contents/website')}}/images/projects/project5.jpg">
            <img class="img-responsive" src="{{asset('contents/website')}}/images/projects/project5.jpg" alt="">
            <span class="gallery-icon">
              <i class="fa fa-plus"></i>
            </span>
          </a>
          <div class="project-item-info">
            <div class="project-item-info-content">
              <h3 class="project-item-title">
                <a href="projects-single1.html">Kalas Metrorail</a>
              </h3>
              <p class="project-cat">Infrastructure</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 col-xs-12 residential isotope-item">
        <div class="isotope-img-container">
          <a class="gallery-popup" href="{{asset('contents/website')}}/images/projects/project6.jpg">
            <img class="img-responsive" src="{{asset('contents/website')}}/images/projects/project6.jpg" alt="">
            <span class="gallery-icon">
              <i class="fa fa-plus"></i>
            </span>
          </a>
          <div class="project-item-info">
            <div class="project-item-info-content">
              <h3 class="project-item-title">
                <a href="projects-single2.html">Ancraft Avenue House</a>
              </h3>
              <p class="project-cat">Residential</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 col-xs-12 commercial isotope-item">
        <div class="isotope-img-container">
          <a class="gallery-popup" href="{{asset('contents/website')}}/images/projects/project7.jpg">
            <img class="img-responsive" src="{{asset('contents/website')}}/images/projects/project7.jpg" alt="">
            <span class="gallery-icon">
              <i class="fa fa-plus"></i>
            </span>
          </a>
          <div class="project-item-info">
            <div class="project-item-info-content">
              <h3 class="project-item-title">
                <a href="projects-single1.html">Chornobyl Shelter</a>
              </h3>
              <p class="project-cat">Commercial</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 col-xs-12 education isotope-item">
        <div class="isotope-img-container">
          <a class="gallery-popup" href="{{asset('contents/website')}}/images/projects/project8.jpg">
            <img class="img-responsive" src="{{asset('contents/website')}}/images/projects/project8.jpg" alt="">
            <span class="gallery-icon">
              <i class="fa fa-plus"></i>
            </span>
          </a>
          <div class="project-item-info">
            <div class="project-item-info-content">
              <h3 class="project-item-title">
                <a href="projects-single2.html">Saflock University</a>
              </h3>
              <p class="project-cat">Education</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="general-btn text-center">
      <a class="btn btn-primary" href="projects.html">View All Projects</a>
    </div>
  </section>
  <section class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h3 class="border-title border-left">Why Work With Us?</h3>
          <div class="panel-group" id="accordion">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">27 Years of Experience</a>
                </h4>
              </div>
              <div id="collapseOne" class="panel-collapse collapse in">
                <div class="panel-body">
                  <img class="pull-left" src="{{asset('contents/website')}}/images/services/service1.jpg" alt="" />
                  <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Proin gravida nibh vel velit auctor</p>
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a data-toggle="collapse" class="collapsed" data-parent="#accordion" href="#collapseTwo"> Dedicated Consulting</a>
                </h4>
              </div>
              <div id="collapseTwo" class="panel-collapse collapse">
                <div class="panel-body">
                  <img class="pull-right" src="{{asset('contents/website')}}/images/services/service2.jpg" alt="" />
                  <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Proin gravida nibh vel velit auctor</p>
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a data-toggle="collapse" class="collapsed" data-parent="#accordion" href="#collapseThree"> ISO 9001 Certified</a>
                </h4>
              </div>
              <div id="collapseThree" class="panel-collapse collapse">
                <div class="panel-body">
                  <img class="pull-left" src="{{asset('contents/website')}}/images/services/service3.jpg" alt="" />
                  <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Proin gravida nibh vel velit auctor</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <h3 class="border-title border-left">Happy Clients</h3>
          <div class="row all-clients">
            <div class="col-sm-4">
              <figure class="clients-logo">
                <a href="#">
                  <img class="img-responsive" src="{{asset('contents/website')}}/images/clients/client1.png" alt="" />
                </a>
              </figure>
            </div>
            <div class="col-sm-4">
              <figure class="clients-logo">
                <a href="#">
                  <img class="img-responsive" src="{{asset('contents/website')}}/images/clients/client2.png" alt="" />
                </a>
              </figure>
            </div>
            <div class="col-sm-4">
              <figure class="clients-logo">
                <a href="#">
                  <img class="img-responsive" src="{{asset('contents/website')}}/images/clients/client3.png" alt="" />
                </a>
              </figure>
            </div>
            <div class="col-sm-4">
              <figure class="clients-logo">
                <a href="#">
                  <img class="img-responsive" src="{{asset('contents/website')}}/images/clients/client4.png" alt="" />
                </a>
              </figure>
            </div>
            <div class="col-sm-4">
              <figure class="clients-logo">
                <a href="#">
                  <img class="img-responsive" src="{{asset('contents/website')}}/images/clients/client5.png" alt="" />
                </a>
              </figure>
            </div>
            <div class="col-sm-4">
              <figure class="clients-logo">
                <a href="#">
                  <img class="img-responsive" src="{{asset('contents/website')}}/images/clients/client6.png" alt="" />
                </a>
              </figure>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="testimonial-area" class="testimonial-area bg-overlay">
    <div class="container">
      <div class="row text-center">
        <h2 class="border-title">What People Said</h2>
        <p class="border-sub-title">Collaboratively administrate empowered markets via plug-and-play networks.</p>
      </div>
      <div class="row">
        <div id="testimonial-slide" class="owl-carousel owl-theme testimonial-slide">
          <div class="item">
            <div class="quote-item">
              <span class="quote-text"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor inci done idunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitoa tion ullamco laboris nisi ut aliquip commodo. </span>
              <div class="quote-item-footer">
                <img class="testimonial-thumb" src="{{asset('contents/website')}}/images/clients/testimonial1.png" alt="testimonial">
                <div class="quote-item-info">
                  <h3 class="quote-author">Gabriel Denis</h3>
                  <span class="quote-subtext">Chairman, OKT</span>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="quote-item">
              <span class="quote-text"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor inci done idunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitoa tion ullamco laboris nisi aliquip consequat. </span>
              <div class="quote-item-footer">
                <img class="testimonial-thumb" src="{{asset('contents/website')}}/images/clients/testimonial2.png" alt="testimonial">
                <div class="quote-item-info">
                  <h3 class="quote-author">Weldon Cash</h3>
                  <span class="quote-subtext">CFO, First Choice</span>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="quote-item">
              <span class="quote-text"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor inci done idunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitoa tion ullamco laboris nisi ut commodo consequat. </span>
              <div class="quote-item-footer">
                <img class="testimonial-thumb" src="{{asset('contents/website')}}/images/clients/testimonial3.png" alt="testimonial">
                <div class="quote-item-info">
                  <h3 class="quote-author">Minter Puchan</h3>
                  <span class="quote-subtext">Director, AKT</span>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="quote-item">
              <span class="quote-text"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor inci done idunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitoa tion ullamco laboris nisi ut aliquip ex ea commodo consequat. </span>
              <div class="quote-item-footer">
                <img class="testimonial-thumb" src="{{asset('contents/website')}}/images/clients/testimonial4.png" alt="testimonial">
                <div class="quote-item-info">
                  <h3 class="quote-author">Tian Gray</h3>
                  <span class="quote-subtext">Accountant</span>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="quote-item">
              <span class="quote-text"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor inci done idunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitoa tion ullamco laboris nisi ut aliquip ex ea commodo consequat. </span>
              <div class="quote-item-footer">
                <img class="testimonial-thumb" src="{{asset('contents/website')}}/images/clients/testimonial5.png" alt="testimonial">
                <div class="quote-item-info">
                  <h3 class="quote-author">Jeroge Tinker</h3>
                  <span class="quote-subtext">Official</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="subscribe no-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-12 col-xs-12">
          <div class="subscribe-call-to-acton">
            <h3>Can We Help?</h3>
            <h4>+44 (0) 3792 722 972</h4>
          </div>
        </div>
        <div class="col-md-8 col-sm-12 col-xs-12">
          <div class="ts-newsletter">
            <div class="newsletter-introtext">
              <h4>Newsletter Sign-up</h4>
              <p>Latest updates and news</p>
            </div>
            <div class="newsletter-form">
              <form action="#" method="post">
                <div class="form-group">
                  <input type="email" name="email" id="newsletter-form-email" class="form-control form-control-lg" placeholder="Your Email Here" autocomplete="off">
                  <button class="btn btn-primary">Subscribe</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="news" class="news">
    <div class="container">
      <div class="row text-center">
        <h2 class="border-title">Company News</h2>
        <p class="border-sub-title">Collaboratively administrate empowered markets via plug-and-play networks.</p>
      </div>
      <div class="row">
        <div class="col-md-4 col-xs-12">
          <div class="latest-post">
            <div class="latest-post-media">
              <a href="#" class="latest-post-img image-angle">
                <img class="img-responsive" src="{{asset('contents/website')}}/images/news/news1.jpg" alt="img">
              </a>
            </div>
            <div class="post-body">
              <h4 class="post-title">
                <a href="#">We Just Completes $17.6 million Medical Clinic in Mid-Missouri</a>
              </h4>
              <div class="latest-post-meta">
                <span class="post-item-date">
                  <i class="fa fa-calendar"></i> May 29, 2016 </span>
                <span class="post-item-author">
                  <i class="fa fa-user"></i> Admin </span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-xs-12">
          <div class="latest-post">
            <div class="latest-post-media">
              <a href="#" class="latest-post-img image-angle">
                <img class="img-responsive" src="{{asset('contents/website')}}/images/news/news2.jpg" alt="img">
              </a>
            </div>
            <div class="post-body">
              <h4 class="post-title">
                <a href="#">Thandler Airport Water Reclamation Facility Expansion Project Named</a>
              </h4>
              <div class="latest-post-meta">
                <span class="post-item-date">
                  <i class="fa fa-calendar"></i> June 17, 2016 </span>
                <span class="post-item-author">
                  <i class="fa fa-user"></i> Admin </span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-xs-12">
          <div class="latest-post">
            <div class="latest-post-media">
              <a href="#" class="latest-post-img image-angle">
                <img class="img-responsive" src="{{asset('contents/website')}}/images/news/news3.jpg" alt="img">
              </a>
            </div>
            <div class="post-body">
              <h4 class="post-title">
                <a href="#">Silicon Bench and Cornike Begin Construction of Large-Scale Solar Facilities for Trade</a>
              </h4>
              <div class="latest-post-meta">
                <span class="post-item-date">
                  <i class="fa fa-calendar"></i> June 28, 2016 </span>
                <span class="post-item-author">
                  <i class="fa fa-user"></i> Admin </span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="general-btn text-center">
        <a class="btn btn-primary" href="#">See All Posts</a>
      </div>
    </div>
  </section>
@endsection
