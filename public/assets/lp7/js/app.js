$(document).ready(function() {
    var totalTime = 14.8 * 60; // 5 minutes in seconds
    var countdownInterval;

    function startCounter() {
      updateCounterDisplay(totalTime);

      countdownInterval = setInterval(function() {
        if (totalTime > 0) {
          totalTime--;
          updateCounterDisplay(totalTime);
        } else {
          clearInterval(countdownInterval);
          totalTime = 14.8 * 60; // Reset the total time
          startCounter(); // Restart the counter
        }
      }, 1000);
    }

    function updateCounterDisplay(timeInSeconds) {
      var minutes = Math.floor(timeInSeconds / 60);
      var seconds = timeInSeconds % 60;

      // Add leading zeros if needed
      var formattedMinutes = minutes < 10 ? '0' + minutes : minutes;
      var formattedSeconds = seconds < 10 ? '0' + seconds : seconds;

      // Update the display
      $('#minutes').text(formattedMinutes);
      $('#seconds').text(formattedSeconds);
    }

    // Start the counter when the document is ready
    startCounter();
  });