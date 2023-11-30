$(document).ready(() => {
	$(".map-pin-1").addClass('active')
	$(".map-pin-2").addClass('active')
	$(".map-pin-3").addClass('active')


	$(".confirm").on('click', function(){
		$(".popup").removeClass('active')
		$("#popup2").addClass('active')
		$(".map-pin-4").addClass('active')
		$(".map-pin-5").addClass('active')
		$(".map-pin-6").addClass('active')
	})

	$(".next").on('click', function(){
		$(".popup").removeClass('active')
		$("#popup3").addClass('active')
	})

	$(".gender").on('click', function(){
		$(".popup").removeClass('active')
		$("#popup4").addClass('active')
	})

	$(".relationship").on('click', function(){
		$(".popup").removeClass('active')
		$("#popup5").addClass('active')
	})

	setTimeout( () => {
		$(".loader-wrapper").hide();
		$(".confirm-box").show();
	}, 1500);

	const urlParams = new URLSearchParams(window.location.search);
	const city = urlParams.get('city');
	console.log(city);

	if(city) {
		$(".city").text(city)

	}else {
		$(".city").text('Zürich')
	}


	function getRandomNumber() {
	    return Math.floor(Math.random() * (4000 - 2000 + 1)) + 2000;
	}

	function updateRandomNumber() {
	    const randomNumber = getRandomNumber();
	    localStorage.setItem('randomNumber', randomNumber.toString());
	    return randomNumber;
	}

	function getRandomNumberFromStorage() {
	    const storedNumber = localStorage.getItem('randomNumber');
	    if (storedNumber) {
	        return parseInt(storedNumber, 10);
	    } else {
	        return updateRandomNumber();
	    }
	}

	let currentRandomNumber = getRandomNumberFromStorage();
	console.log(currentRandomNumber);

	setInterval(function () {
	    currentRandomNumber = updateRandomNumber();
	    console.log(currentRandomNumber);
		$(".number").text(currentRandomNumber)

	}, 2 * 60 * 1000);

	$(".number").text(currentRandomNumber)

	
});
