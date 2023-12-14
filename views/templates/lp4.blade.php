<!DOCTYPE html>
<html lang="en">
    <head>
        <title>SugarDaddy.date</title>
        <meta charset="UTF-8"/>
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0"/>
        <link rel="stylesheet" href="{{asset("style.css")}}">
        @include('partials.script')
    </head>
    <body>
        <div class="layer"></div>
        <div id="container">
            <div id="q00" class="toggleDiv" style="display: block;">
                <div class="mobile-center">
                    <div class="videobgbox">
                        <video class="video" loop="" autoplay="" muted="" playsinline="">
                            <source src="{{asset("14.mp4")}}" type="video/mp4">
                        </video>
                    </div>
                    <div id="box" class="box-bg" style="margin-top: 0px;">
                        <div id="first-title">
                            <h1 class="font-style title">
                                {{translate('lp4.warning')}}!
                            </h1>
                        </div>
                        <p class="text main-text">
                            {{translate('lp4.you_will_see_nude')}}
                        </p>
                        <a class="show_hide" href="#" rel="#q0">
                            <div class="wrap">
                                <div class="btn">
                                    <div class="btn-cap next">
                                        {{translate('lp5.ok')}}
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div id="q0" class="toggleDiv" style="display: hide;">
                <div class="put-center">
                    <div class="videobgbox2">
                        <video class="video2" loop="" autoplay="" muted="" playsinline="">
                            <source src="{{asset("14.mp4")}}" type="video/mp4">
                        </video>
                    </div>
                    <div id="box">
                        <div id="top">
                            <span class="h1">
                                <p class="font-style subtitle">
                                    <b>{{translate('lp4.you_must_follow_the_rules')}}</b>
                                </p>
                            </span>
                        </div>
                        <p class="item-1">
                            ☝ {{translate('lp4.if_you_see_someone')}}
                        </p>
                        <p class="item-2">
                            ☝ {{translate('lp4.when_having_sex')}}
                        </p>
                        <p class="item-3">
                            ☝ {{translate('lp4.respect_sexual_desires')}}
                        </p>
                        <a href="#">
                            <div class="wrap">
                                <a class="btn-yes" href="{{$_ENV['REDIRECT_URL']}}">
                                    <div class="btn-cap btn-fin go">
                                        {{translate('lp4.i_agree')}}
                                    </div>
                                </a>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="{{asset("js/app.js")}}"></script>
    </body>
</html>