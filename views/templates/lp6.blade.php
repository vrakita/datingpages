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
                        <h1>The ONLY site that gets you a girl!</h1>
                    </div>
                    <div class="box__body">
                        <div class="video">
                            <video loop muted autoplay src="{{asset('video.mp4')}}"></video>
                            <img src="{{asset('video_bar.jpg')}}" alt="">
                        </div>

                        <h2><strong>WARNING!</strong></h2>
                        <p>There are LOTS of gorgeous women on this site. <br>
                        Please be discreet. </p>

                        <a href="javascript:;" data-step="2" class="btn next">Ok, I will</a>
                    </div>
                </article>
                <article id="box2" class="box">
                    <div class="box__header">
                        <h1>IMPORTANT!</h1>
                    </div>
                    <div class="box__body">
                        <p>Before we can show you a list and photos of women who are looking for a man right now, we need to ask a few quick questions.</p>
                        <a href="javascript:;" data-step="3" class="btn next">Continue</a>
                    </div>
                </article>
                <article id="box3" class="box">
                    <div class="box__header">
                        <h1>Question 1</h1>
                    </div>
                    <div class="box__body">
                        <p>Many of these women are desperate girls seeking serious relationships. Do you agree to keep the identity of these women a secret?</p>
                        <div class="btn-wrapper">
                            <a href="javascript:;" data-step="4" class="btn next">YES</a>
                            <a href="javascript:;" data-step="4" class="btn next">NO</a>
                        </div>
                    </div>
                </article>
                <article id="box4" class="box">
                    <div class="box__header">
                        <h1>Question 2</h1>
                    </div>
                    <div class="box__body">
                        <p>These women have asked us to not allow men that are not ready for new acquaintances. Our women are looking ONLY for new connections. Do you agree to this request?</p>
                        <div class="btn-wrapper">
                            <a href="javascript:;" data-step="5" class="btn next">YES</a>
                            <a href="javascript:;" data-step="5" class="btn next">NO</a>
                        </div>
                    </div>
                </article>
                <article id="box5" class="box">
                    <div class="box__header">
                        <h1>Question 3</h1>
                    </div>
                    <div class="box__body">
                        <p>Do you agree woman will make the first step?</p>
                        <div class="btn-wrapper">
                            <a href="javascript:;" data-step="6" class="btn next">YES</a>
                            <a href="javascript:;" data-step="6" class="btn next">NO</a>
                        </div>
                    </div>
                </article>
                <article id="box6" class="box">
                    <div class="box__header">
                        <h1>Question 4</h1>
                    </div>
                    <div class="box__body">
                        <p>Are you at least 24 years old? The women have requested that we not let those younger than 24 contact them because of past rude behavior by younger men.</p>
                        <div class="btn-wrapper">
                            <a href="javascript:;" data-step="6" class="btn next">YES</a>
                            <a href="javascript:;" data-step="6" class="btn next">NO</a>
                        </div>
                        <br>
                        <p class="mb0">{{translate('lp1.we_found_num')}} <strong class="number"></strong> {{translate('lp1.sugarbabies_in')}} <strong class="city"></strong></p>
                    </div>
                </article>
            </section>
        </main>

        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <script src="{{asset("js/app.js")}}"></script>
    </body>
</html>