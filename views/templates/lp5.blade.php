<!DOCTYPE html>

<html lang="en">

    <head>

        <title>SugarDaddy.date</title>
        <meta charset="UTF-8" />
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0" />
        <link rel="stylesheet" href="{{asset("style.css")}}">
        @include('partials.script')
    </head>

    <body>
        <div class=wrapper>
            <div class=center>
                <div class=photo-block data-photo=1>
                    <div class=slider-block>
                        <div class=slider-block-inner>
                            <div class=slider-item data-number=1>
                                <div class=slider-icon></div>
                            </div>
                            <div class=slider-item data-number=2>
                                <div class=slider-icon></div>
                            </div>
                            <div class=slider-item data-number=3>
                                <div class=slider-icon></div>
                            </div>
                            <div class=slider-item data-number=4>
                                <div class=slider-icon></div>
                            </div>
                            <div class=slider-item data-number=5>
                                <div class=slider-icon></div>
                            </div>
                            <div class=slider-item data-number=6>
                                <div class=slider-icon></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=step-block>
                    <div class="step-item is-active">
                        <div class=step-question>{{translate('lp5.do_you_want_to_see')}}</div>
                        <div class=btns-block>
                            <div class="btn yes-btn">
                                <span>{{translate('lp5.yes')}}</span>
                            </div>
                            <div class="btn no-btn">
                                <span>{{translate('lp5.no')}}</span>
                            </div>
                        </div>
                    </div>
                    <div class=step-item>
                        <div class=step-question>{{translate('lp5.are_you_looking')}}</div>
                        <div class=btns-block>
                            <div class="btn yes-btn">
                                <span>{{translate('lp5.yes')}}</span>
                            </div>
                            <div class="btn no-btn">
                                <span>{{translate('lp5.no')}}</span>
                            </div>
                        </div>
                    </div>
                    <div class=step-item>
                        <div class=step-question>{{translate('lp5.are_you_comfortable')}}</div>
                        <div class=btns-block>
                            <div class="btn yes-btn">
                                <span>{{translate('lp5.yes')}}</span>
                            </div>
                            <div class="btn no-btn">
                                <span>{{translate('lp5.no')}}</span>
                            </div>
                        </div>
                    </div>
                    <div class=step-item>
                        <div class=step-question>{{translate('lp5.are_you_21')}}</div>
                        <div class=btns-block>
                            <div class="btn yes-btn">
                                <span>{{translate('lp5.yes')}}</span>
                            </div>
                            <div class="btn no-btn">
                                <span>{{translate('lp5.no')}}</span>
                            </div>
                        </div>
                    </div>
                    <div class="step-item step-loading">
                        <div class=loader-block>
                            <div class=loader-text-block>
                                <div class="loader-text is-active">
                                    <p>{{translate('lp5.analyzing_your_answers')}}</p>
                                </div>
                                <div class=loader-text>
                                    <p>{{translate('lp5.matching_sex_partners')}}</p>
                                </div>
                                <div class=loader-text>
                                    <p>{{translate('lp5.looking_for_registration')}}</p>
                                </div>
                            </div>
                            <div class=loader-icon>
                                <div></div>
                                <div></div>
                                <div></div>
                            </div>
                        </div>
                    </div>
                    <div class=step-item>
                        <div class=users-block></div>
                        <div class=step-title>{{translate('lp5.thank_you')}}</div>
                        <div class=step-text>{{translate('lp5.you_may_now_see')}}</div>
                        <div class=btns-block>
                            <a href="{{$_ENV['REDIRECT_URL']}}" class="submit-btn tr-submit-button showOffer go"><span>{{translate('lp5.continue')}}</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="{{asset("js/app.js")}}"></script>
    </body>

</html>