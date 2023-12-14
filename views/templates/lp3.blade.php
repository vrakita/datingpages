<!DOCTYPE html>

<html lang="en">
    <head>
        <title>Dating Lander 1</title>
        <meta charset="UTF-8"/>
        <link rel="shortcut icon" href="{{asset('favicon.ico')}}" type="image/x-icon">
        <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0"/>
        <link rel="stylesheet" href="{{asset('style.css')}}">
        @include('partials.script')
    </head>
    <body>
        <div class="blured"></div>
        <div class="main-text hispan" id="hispan">{{translate('lp3.are_you_18yo')}} 😊</div>
        <div class="main">
            <div class="stepbox">
                <div class="step step-1 current" id="step-1">
                    <div class="step__inner">
                        <div class="step__header"></div>
                        <div class="step__body"> </div>
                        <div class="step__footer">
                            <div class="btnbox">
                                <a class="btn btn--primary next btn-yes effect effect-5" href="javascript:void(0);">{{translate('lp3.continue')}}</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="step step-7" id="step-2">
                    <div class="step__inner">
                        <div class="step__header">
                            <h2 class="subtitle">{{translate('lp3.you_must_follow_rules')}}</h2>
                        </div>
                        <div class="step__body">
                            <ul>
                                <li class="item-1">{{translate('lp3.if_you_see_someone')}}</li>
                                <li class="item-2">{{translate('lp3.when_having_sex')}}
                                </li>
                            </ul>
                        </div>
                        <div class="step__footer">
                            <div class="btnbox">
                                <a href="{{$_ENV['REDIRECT_URL']}}" class="btn btn--primary btn-continue btn-fin go">{{translate('lp3.continue')}}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- main-->
        <div class="bg">
            <div class="bg__item bg__item-1 active" id="1"></div>
            <div class="bg__item bg__item-7" id="2"></div>
        </div>
        <script src="{{asset("/js/app.js")}}"></script>
    </body>
</html>