@extends ('layouts.main')

@section ('title')
{{ trans('pages.main_title') }}
@stop

@section ('page_level_styles')
<link href="{{ URL::asset('css/index.css?v=1.3') }}" rel="stylesheet" type="text/css"/>
@stop

@section ('content')
<span class="donation-button">
  <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
    <input type="hidden" name="cmd" value="_s-xclick">
    <input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
">
    <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_SM.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
    <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
  </form>
</span>
<div class="container-fluid wide-block">
  <img class="img-responsive center-block hidden-xs" src="{{ URL::asset('images/logo2.png') }}" />
  <img class="img-responsive center-block visible-xs-block" src="{{ URL::asset('images/banner.jpg') }}" />
  <h2 class="text-center">Turning a NuLEAF in Tech</h2>
</div>

<div class="container-fluid wide-block text-center" id="pillars-block">
  <div class="container">
    <div class="row">
      <div class="col-md-4 square-block">
        <div class="center-block">
          <img class="square-img-sm" src="{{ URL::asset('images/icons/learn.png') }}" />
        </div>
        <h2 class="title">Education<br /><small>We are the next generation of sustainable engineers.</small></h2>
      </div>
      <div class="col-md-4 square-block">
        <div class="center-block">
          <img class="square-img-sm" src="{{ URL::asset('images/icons/research.png') }}" />
        </div>
        <h2 class="title">Interdisciplinary<br /><small>Embracing life's connectivity for the best possible technology.</small></h2>
      </div>
      <div class="col-md-4 square-block">
        <div class="center-block">
          <img class="square-img-sm" src="{{ URL::asset('images/icons/test.png') }}" />
        </div>
        <h2 class="title">Bioinspired<br /><small>Learning from nature for a renewable energy future.</small></h2>
      </div>
    </div>
    <div class="text-right">
      <a class="btn btn-default btn-block-xs btn-sm text-uppercase" href="{{ action('MainController@about') }}" role="button">See more</a>
    </div>
  </div>
</div>

<div class="container-fluid wide-block">
  <div class="container">
    <h2 class="theme-text">Projects</h2>
    <div class="row">
      <div class="col-md-4 square-block">
        <div class="thumbnail">
          <img class="wide-rect-img-sm" src="{{ URL::asset('images/projects/MFCTeam.png') }}" />
          <div class="caption text-center">
            <h4>Microbial Fuel Cell</h4>
          </div>
        </div>
      </div>
      <div class="col-md-4 square-block">
        <div class="thumbnail">
          <img class="wide-rect-img-sm" src="{{ URL::asset('images/projects/CSCTeam.png') }}" />
          <div class="caption text-center">
            <h4>Cuticular Solar Cell</h4>
          </div>
        </div>
      </div>
      <div class="col-md-4 square-block">
        <div class="thumbnail">
          <img class="wide-rect-img-sm" src="{{ URL::asset('images/projects/ITTeam.png') }}" />
          <div class="caption text-center">
            <h4>Website and Forum</h4>
          </div>
        </div>
      </div>
    </div>
    <div class="text-right">
      <a class="btn btn-default btn-block-xs btn-sm text-uppercase" href="{{ action('MainController@teams') }}" role="button">See more</a>
    </div>
  </div>
</div>

<div class="container-fluid wide-block">
  <div class="container">
    <h2 class="theme-text">Steminars</h2>
    <div class="row">
      @foreach ($steminars as $steminar)
      <div class="col-md-4 square-block">
        <div class="thumbnail">
          <img class="rect-img-sm" src="{{ $steminar->image }}" />
          <div class="caption text-center">
            <h4>{{ $steminar->host }}<br /><small>{{ $steminar->title }}</small></h4>
          </div>
        </div>
      </div>
      @endforeach
    </div>
    <div class="text-right">
      <a class="btn btn-default btn-block-xs btn-sm text-uppercase" href="{{ action('MainController@events') }}" role="button">See more</a>
    </div>
  </div>
</div>

<!-- <div class="container-fluid wide-block"  id="events-block">
  <div class="container">
    <h4>Events</h4>
    <ol class="list-unstyled row">
      <li class="col-md-6 event">
        <a href="#">
          <div class="row">
            <div class="col-xs-4 date text-center">
              <div class="day">12</div>
              <div class="text-uppercase">July 2016</div>
            </div>
            <div class="col-xs-8 event-title">
              Semicon West
            </div>
          </div>
        </a>
      </li>
      <li class="col-md-6 event">
        <a href="#">
          <div class="row">
            <div class="col-xs-4 date text-center">
              <div class="day">6</div>
              <div class="text-uppercase">June 2016</div>
            </div>
            <div class="col-xs-8 event-title">
              The Human Library 10AM-3PM
            </div>
          </div>
        </a>
      </li>
      <li class="col-md-6 event">
        <a href="#">
          <div class="row">
            <div class="col-xs-4 date text-center">
              <div class="day">3</div>
              <div class="text-uppercase">June 2016</div>
            </div>
            <div class="col-xs-8 event-title">
              Physics Olympics 2PM-4PM
            </div>
          </div>
        </a>
      </li>
      <li class="col-md-6 event">
        <a href="#">
          <div class="row">
            <div class="col-xs-4 date text-center">
              <div class="day">3</div>
              <div class="text-uppercase">June 2016</div>
            </div>
            <div class="col-xs-8 event-title">
              STEM Student-Professor Lunch 12PM-2PM
            </div>
          </div>
        </a>
      </li>
      <li class="col-md-6 event">
        <a href="#">
          <div class="row">
            <div class="col-xs-4 date text-center">
              <div class="day">27</div>
              <div class="text-uppercase">May 2016</div>
            </div>
            <div class="col-xs-8 event-title">
              Bio-Curious, "Biohacking and Climate Change" 7PM
            </div>
          </div>
        </a>
      </li>
      <li class="col-md-6 event">
        <a href="#">
          <div class="row">
            <div class="col-xs-4 date text-center">
              <div class="day">27</div>
              <div class="text-uppercase">May 2016</div>
            </div>
            <div class="col-xs-8 event-title">
              Steminar - Silke: "Digital Photonic Production with Lasers - Bits to Photons to Atoms" 2PM-4PM
            </div>
          </div>
        </a>
      </li>
    </ol>
    <div class="text-right">
      <a class="btn btn-default btn-block-xs text-uppercase" href="#" role="button">Full Schedule</a>
    </div>
  </div>
</div> -->

<div class="container-fluid wide-block text-center" id="involvement-block">
  <div class="overlay-img wide-md">
    <img src="{{ URL::asset('images/bg/leaf_wide.jpg') }}" />
  </div>
  <div class="overlay">
    <a class="btn" href="{{ action('MainController@faq') }}">Get Involved</a>
  </div>
</div>

<div class="container-fluid wide-block" id="affiliations-block">
  <div class="container">
    <h2 class="theme-text">Supporters and Student Universities</h2>
    <ul class="list-unstyled row text-center">
      <li class="affiliation col-md-3 col-sm-6 col-xs-12">
        <img class="img-responsive center-block" src="{{ URL::asset('images/affiliations/ames.png') }}">
      </li>
      <li class="affiliation col-md-3 col-sm-6 col-xs-12">
        <img class="img-responsive center-block" src="{{ URL::asset('images/affiliations/asl.png') }}">
      </li>

      <li class="clearfix visible-sm-block"></li>

      <li class="affiliation col-md-3 col-sm-6 col-xs-12">
        <img class="img-responsive center-block" src="{{ URL::asset('images/affiliations/avs.png') }}">
      </li>
      <li class="affiliation col-md-3 col-sm-6 col-xs-12">
        <img class="img-responsive center-block" src="{{ URL::asset('images/affiliations/deanza.jpg') }}">
      </li>

      <li class="clearfix visible-sm-block visible-md-block"></li>

      <li class="affiliation col-md-3 col-sm-6 col-xs-12">
        <img class="img-responsive center-block" src="{{ URL::asset('images/affiliations/drexel.png') }}">
      </li>
      <li class="affiliation col-md-3 col-sm-6 col-xs-12">
        <img class="img-responsive center-block" src="{{ URL::asset('images/affiliations/foothill_owls.png') }}">
      </li>

      <li class="clearfix visible-sm-block"></li>

      <li class="affiliation col-md-3 col-sm-6 col-xs-12">
        <img class="img-responsive center-block" src="{{ URL::asset('images/affiliations/iitk.png') }}">
      </li>
      <li class="affiliation col-md-3 col-sm-6 col-xs-12">
        <img class="img-responsive center-block" src="{{ URL::asset('images/affiliations/iitm.jpg') }}">
      </li>      

      <li class="clearfix visible-sm-block visible-md-block"></li>

      <li class="affiliation col-md-3 col-sm-6 col-xs-12">
        <img class="img-responsive center-block" src="{{ URL::asset('images/affiliations/sardar_patel_uni.png') }}">
      </li>
      <li class="affiliation col-md-3 col-sm-6 col-xs-12">
        <img class="img-responsive center-block" src="{{ URL::asset('images/affiliations/scu_broncos.png') }}">
      </li>

      <li class="clearfix visible-sm-block"></li>

      <li class="affiliation col-md-3 col-sm-6 col-xs-12">
        <img class="img-responsive center-block" src="{{ URL::asset('images/affiliations/sjsu.png') }}">
      </li>
      <li class="affiliation col-md-3 col-sm-6 col-xs-12">
        <img class="img-responsive center-block" src="{{ URL::asset('images/affiliations/stanford.png') }}">
      </li>

      <li class="clearfix visible-sm-block visible-md-block"></li>

      <li class="affiliation col-md-3 col-md-push-3 col-sm-6 col-xs-12">
        <img class="img-responsive center-block" src="{{ URL::asset('images/affiliations/uc.png') }}">
      </li>
      <li class="affiliation col-md-3 col-md-push-3 col-sm-6 col-xs-12">
        <img class="img-responsive center-block" src="{{ URL::asset('images/affiliations/ucsc_slugs.png') }}">
      </li>
    </ul>
  </div>
</div>

<div class="container-fluid wide-block">
  <div class="container">
    <h2 class="theme-text">Acknowledgements</h2>
    <p>
      This research has been supported by the Advanced Studies Laboratories (ASL) at NASA Ames, Foothill College, the Innovation and Collaboration Group, the Northern California Chapter of the American Vacuum Society, and the Scientific Learning Institute (SLI).  Special thanks to Wenonah Vercoutere, Mike Oye, Russell Kirkman, Robert Cormia, Chris Venture, Frank Cascarano, Geeta Verma, Latha Ramasamy, and Sherman Lee for providing their gracious knowledge, wisdom, and guidance in support of this project.
      <br /><br />
      Our largest thanks goes, as always, to the amazing NuLEAF team members.  Thank you for your passion and perseverance - we could never have done it without you and we will continue to do great things alongside you.
    </p>
  </div>
</div>
@stop

@section ('page_level_plugins')
@stop
