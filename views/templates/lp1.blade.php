<!doctype html>
<html class="no-js" lang="">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Dating sugardaddy</title>
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="{{asset("/css/style.css")}}">
		<meta name="description" content="">
		<meta name="author" content="">
		@include('partials.script')
	</head>
	<body>
		<main>
			<section class="hero">
				<div class="popup active" id="popup1">
					<div class="popup__overlay"></div>
					<div class="popup__content">
						<p>{{translate('lp1.would_you_like_to_meet')}}</p>
						<div class="loader-wrapper">
					        <div class="circle circle-1"></div>
					        <div class="circle circle-2"></div>
					        <div class="circle circle-3"></div>
					        <div class="circle circle-4"></div>
					        <div class="circle circle-5"></div>
					    </div>
						<div class="confirm-box" style="display: none;">
							<a href="javascript:;" class="btn confirm">{{translate('lp1.confirm')}}</a>
						    <p>{{translate('lp1.we_found_num')}} <strong class="number"></strong> {{translate('lp1.sugarbabies_in')}} <strong class="city"></strong></p>
						</div>
					</div>
				</div>
				<div class="popup " id="popup2">
					<div class="popup__overlay"></div>
					<div class="popup__content">
						<p>{{translate('lp1.do_you_want_to_interact')}}</p>
						<div class="btn-wrapper">
							<a href="javascript:;" class="btn next">{{translate('lp1.yes')}}</a>
							<a href="javascript:;" class="btn next">{{translate('lp1.no')}}</a>
						</div>
					</div>
				</div>
				<div class="popup " id="popup3">
					<div class="popup__overlay"></div>
					<div class="popup__content">
						<p>{{translate('lp1.are_you_interested_in_women')}}</p>
						<div class="btn-wrapper">
							<a href="javascript:;" class="btn gender">{{translate('lp1.yes')}}</a>
							<a href="javascript:;" class="btn gender">{{translate('lp1.no')}}</a>
						</div>
					</div>
				</div>
				<div class="popup " id="popup4">
					<div class="popup__overlay"></div>
					<div class="popup__content">
						<p>{{translate('lp1.are_you_over_21')}}</p>
						<div class="btn-wrapper">
							<a href="javascript:;" class="btn relationship">{{translate('lp1.yes')}}</a>
							<a href="javascript:;" class="btn relationship">{{translate('lp1.no')}}</a>
						</div>
					</div>
				</div>
				<div class="popup " id="popup5">
					<div class="popup__overlay"></div>
					<div class="popup__content">
						<h1>{{translate('lp1.congratulations')}}</h1>
						<p>{{translate('lp1.your_perfect_partner_is_waiting')}}</p>
						<a href="{{$_ENV['REDIRECT_URL']}}" class="btn">{{translate('lp1.start')}}</a>
					</div>
				</div>
				<div class="map-pin map-pin-1">
					<div class="img-wrapper" style="background-image: url('{{asset("/images/u1.jpg")}}')"></div>
					<p>Hannah <img src="{{asset("/images/pin.svg")}}" alt="" width="20"> 712m</p>
					<a href="javascript:;" class="btn">{{translate('lp1.click_to_view')}}</a>
				</div>
				<div class="map-pin map-pin-2">
					<div class="img-wrapper" style="background-image: url('{{asset("images/u2.jpg")}}')"></div>
					<p>Lina <img src="{{asset("images/pin.svg")}}" alt="" width="20"> 1430m</p>
					<a href="javascript:;" class="btn">{{translate('lp1.click_to_view')}}</a>
				</div>
				<div class="map-pin map-pin-3">
					<div class="img-wrapper" style="background-image: url('{{asset("/images/u3.jpg")}}')"></div>
					<p>Charlotte <img src="{{asset('images/pin.svg')}}" alt="" width="20"> 1250m</p>
					<a href="javascript:;" class="btn">{{translate('lp1.click_to_view')}}</a>
				</div>
				<div class="map-pin map-pin-4">
					<div class="img-wrapper" style="background-image: url('{{asset("images/u4.jpg")}}')"></div>
					<p>Evelin <img src="{{asset("images/pin.svg")}}" alt="" width="20"> 480m</p>
					<a href="javascript:;" class="btn">{{translate('lp1.click_to_view')}}</a>
				</div>
				<div class="map-pin map-pin-5">
					<div class="img-wrapper" style="background-image: url('{{asset("images/u5.jpg")}}')"></div>
					<p>Diana <img src="{{asset("images/pin.svg")}}" alt="" width="20"> 2450m</p>
					<a href="javascript:;" class="btn">{{translate('lp1.click_to_view')}}</a>
				</div>
				<div class="map-pin map-pin-6">
					<div class="img-wrapper" style="background-image: url('{{asset("images/u6.jpg")}}')"></div>
					<p>Annalie <img src="{{asset("images/pin.svg")}}" alt="" width="20"> 1805m</p>
					<a href="javascript:;" class="btn">{{translate('lp1.click_to_view')}}</a>
				</div>
			</section>
		</main>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="{{asset("/js/app.js")}}"></script>
	</body>

</html>