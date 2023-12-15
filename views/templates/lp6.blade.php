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

        <main>
            <section class="hero">
                <article id="box1" class="box active">
                    <div class="box__header">
                        <h1>{{translate('lp6.the_only_site')}}</h1>
                    </div>
                    <div class="box__body">
                        <div class="video">
                            <video loop muted autoplay src="{{asset('video.mp4')}}"></video>
                            <img src="{{asset('video_bar.jpg')}}" alt="">
                        </div>

                        <h2><strong>{{translate('lp6.warning')}}</strong></h2>
                        <p>{{translate('lp6.there_are_lots_of')}} <br>
                        {{translate('lp6.please_be_discreet')}} </p>

                        <a href="javascript:;" data-step="2" class="btn next">{{translate('lp6.ok_i_will')}}</a>
                    </div>
                </article>
                <article id="box2" class="box">
                    <div class="box__header">
                        <h1>{{translate('lp6.important')}}</h1>
                    </div>
                    <div class="box__body">
                        <p>{{translate('lp6.before_we_can_show')}}</p>
                        <a href="javascript:;" data-step="3" class="btn next">{{translate('lp6.continue')}}</a>
                    </div>
                </article>
                <article id="box3" class="box">
                    <div class="box__header">
                        <h1>{{translate('lp6.question1')}} 1</h1>
                    </div>
                    <div class="box__body">
                        <p>{{translate('lp6.many_of_these')}}</p>
                        <div class="btn-wrapper">
                            <a href="javascript:;" data-step="4" class="btn next">{{translate('lp6.yes')}}</a>
                            <a href="javascript:;" data-step="4" class="btn next">{{translate('lp6.no')}}</a>
                        </div>
                    </div>
                </article>
                <article id="box4" class="box">
                    <div class="box__header">
                        <h1>{{translate('lp6.question1')}} 2</h1>
                    </div>
                    <div class="box__body">
                        <p>{{translate('lp6.these_women')}}</p>
                        <div class="btn-wrapper">
                            <a href="javascript:;" data-step="5" class="btn next">{{translate('lp6.yes')}}</a>
                            <a href="javascript:;" data-step="5" class="btn next">{{translate('lp6.no')}}</a>
                        </div>
                    </div>
                </article>
                <article id="box5" class="box">
                    <div class="box__header">
                        <h1>{{translate('lp6.question1')}} 3</h1>
                    </div>
                    <div class="box__body">
                        <p>{{translate('lp6.do_you_agree')}}</p>
                        <div class="btn-wrapper">
                            <a href="javascript:;" data-step="6" class="btn next">{{translate('lp6.yes')}}</a>
                            <a href="javascript:;" data-step="6" class="btn next">{{translate('lp6.no')}}</a>
                        </div>
                    </div>
                </article>
                <article id="box6" class="box">
                    <div class="box__header">
                        <h1>{{translate('lp6.question1')}} 4</h1>
                    </div>
                    <div class="box__body">
                        <p>{{translate('lp6.are_you_at_least_24')}}</p>
                        <div class="btn-wrapper">
                            <a href="{{$_ENV['REDIRECT_URL']}}" class="btn">{{translate('lp6.yes')}}</a>
                            <a href="{{$_ENV['REDIRECT_URL']}}" class="btn">{{translate('lp6.no')}}</a>
                        </div>
                        <br>
                        <p class="mb0">{{translate('lp1.we_found_num')}} <strong class="number"></strong> {{translate('lp1.sugarbabies_in')}} <strong class="city"></strong></p>
                    </div>
                </article>
            </section>
        </main>

        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <script src="{{asset('js/app.js')}}"></script>
    </body>
</html>