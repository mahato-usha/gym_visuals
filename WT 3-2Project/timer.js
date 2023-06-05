window.addEventListener('DOMContentLoaded', () => {
    // Get the required elements
    const timerInput = document.getElementById('timer-input');
    const startBtn = document.getElementById('start-btn');
    const timerDisplay = document.getElementById('timer-display');
    const startSound = document.getElementById('start-sound');
    const endSound = document.getElementById('end-sound');
  
    let countdown; 
    function startTimer() {
      const time = parseInt(timerInput.value); 
  
      if (isNaN(time) || time <= 0) {
        alert('Please enter a valid positive number for the timer.');
        return;
      }
  
      let remainingTime = time;
      const interval = 1000; // 1 second
  
      countdown = setInterval(() => {
        const minutes = Math.floor(remainingTime / 60);
        const seconds = remainingTime % 60;
  
        timerDisplay.textContent = `${minutes.toString().padStart(2, '0')}:${seconds.toString().padStart(2, '0')}`;
  
        if (remainingTime <= 0) {
          clearInterval(countdown);
          timerDisplay.textContent = 'Timer Complete!';
          endSound.play(); // Play the end sound
        } else {
          remainingTime--;
        }
      }, interval);
  
      startSound.play(); // Play the start sound
    }
  
    // Event listener for the start button
    startBtn.addEventListener('click', startTimer);
  });
  