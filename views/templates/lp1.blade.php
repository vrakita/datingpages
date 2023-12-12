<!doctype html>
<html class="no-js" lang="">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Dating sugardaddy</title>
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="{{asset($template . "/css/style.css")}}">
		<meta name="description" content="">
		<meta name="author" content="">
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
						    <p>WE FOUND <strong class="number"></strong> in <strong class="city"></strong></p>
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
					<div class="img-wrapper" style="background-image: url('{{asset($template . "/images/u1.jpg")}}')"></div>
					<p>Tiffany <img src="{{asset($template . "/images/pin.svg")}}" alt="" width="20"> 1250m</p>
					<a href="javascript:;" class="btn">{{translate('lp1.click_to_view')}}</a>
				</div>
				<div class="map-pin map-pin-2">
					<div class="img-wrapper" style="background-image: url('{{asset($template . "/images/u2.jpg")}}')"></div>
					<p>Tiffany <img src="{{asset($template . "/images/pin.svg")}}" alt="" width="20"> 1250m</p>
					<a href="javascript:;" class="btn">{{translate('lp1.click_to_view')}}</a>
				</div>
				<div class="map-pin map-pin-3">
					<div class="img-wrapper" style="background-image: url('{{asset($template . "/images/u3.jpg")}}')"></div>
					<p>Tiffany <img src="assets/lp1/images/pin.svg" alt="" width="20"> 1250m</p>
					<a href="javascript:;" class="btn">{{translate('lp1.click_to_view')}}</a>
				</div>
				<div class="map-pin map-pin-4">
					<div class="img-wrapper" style="background-image: url('{{asset($template . "/images/u4.jpg")}}')"></div>
					<p>Tiffany <img src="{{asset($template . "/images/pin.svg")}}" alt="" width="20"> 1250m</p>
					<a href="javascript:;" class="btn">{{translate('lp1.click_to_view')}}</a>
				</div>
				<div class="map-pin map-pin-5">
					<div class="img-wrapper" style="background-image: url('{{asset($template . "/images/u5.jpg")}}')"></div>
					<p>Tiffany <img src="{{asset($template . "/images/pin.svg")}}" alt="" width="20"> 1250m</p>
					<a href="javascript:;" class="btn">{{translate('lp1.click_to_view')}}</a>
				</div>
				<div class="map-pin map-pin-6">
					<div class="img-wrapper" style="background-image: url('{{asset($template . "/images/u6.jpg")}}')"></div>
					<p>Tiffany <img src="{{asset($template . "/images/pin.svg")}}" alt="" width="20"> 1250m</p>
					<a href="javascript:;" class="btn">{{translate('lp1.click_to_view')}}</a>
				</div>
			</section>
		</main>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="{{asset($template . "/js/app.js")}}"></script>
		<script>
			(function(b,c,l,q,r,e,t,y,d,m,u,z,a,n,g,f,p,v,h,w){function x(){for(var a=c.querySelectorAll(".dtpcnt"),b=0,d=a.length;b<d;b++)a[b][t]=a[b][t].replace(/(^|\s+)dtpcnt($|\s+)/g,"")}w="https:"===b.location.protocol?"secure; ":"";b[d]||(b[d]=function(){(b[d].q=b[d].q||[]).push(arguments)},g=c[q],c[q]=function(){g&&g.apply(this,arguments);if(b[d]&&!b[d].hasOwnProperty("params")&&/loaded|interactive|complete/.test(c.readyState))for(;a=c[r][m++];)/\/?click\/?($|(\/[0-9]+)?$)/.test(a.pathname)&&(a[e]="javascrip"+
					b.postMessage.toString().slice(4,5)+":"+d+'.l="'+a[e]+'",void 0')},setTimeout(function(){(p=/[?&]cpid(=([^&#]*)|&|#|$)/.exec(b.location.href))&&p[2]&&(f=p[2],v=c.cookie.match(new RegExp("(^| )vl-"+f+"=([^;]+)")));var d=c.cookie.match(/(^| )vl-cep=([^;]+)/),k=location[e];if("savedCep"===z&&d&&(!f||"undefined"===typeof f)&&0>k.indexOf("cep=")){var g=-1<k.indexOf("?")?"&":"?";k+=g+d.pop()}a=c.createElement("script");n=c.scripts[0];a.defer=1;a.src=u+(-1===u.indexOf("?")?"?":"&")+"lpref="+l(c.referrer)+
					"&lpurl="+l(k)+"&lpt="+l(c.title)+"&vtm="+(new Date).getTime()+(v?"&uw=no":"");a[y]=function(){for(m=0;a=c[r][m++];)/dtpCallback\.l/.test(a[e])&&(a[e]=decodeURIComponent(a[e]).match(/dtpCallback\.l="([^"]+)/)[1]);x()};n.parentNode.insertBefore(a,n);f&&(h=new Date,h.setTime(h.getTime()+864E5),c.cookie="vl-"+f+"=1; "+w+"samesite=Strict; expires="+h.toGMTString()+"; path=/")},0),setTimeout(x,7E3))})(window,document,encodeURIComponent,"onreadystatechange","links","href","className","onerror","dtpCallback",
					0,"https://track.1234sd123.com/d/.js","savedCep");
		</script>
	</body>

</html>