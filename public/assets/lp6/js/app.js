$(document).ready(() => {
	
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

    $(".next").click(function(){
        var numb = $(this).data('step');
        console.log(numb)
        $(".box").removeClass("active");
        $("#box" + numb).addClass("active");
    });

});
