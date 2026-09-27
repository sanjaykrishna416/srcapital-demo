  // Get elements
  const slider = document.getElementById("investmentSlider");
  const inputBox = document.getElementById("investmentInput");
  const bankAmount = document.getElementById("txt_home_slider_bank");
  const fdAmount = document.getElementById("txt_home_slider_fd");
  const goldAmount = document.getElementById("txt_home_slider_gold");
  const sensexAmount = document.getElementById("txt_home_slider_sensex");
  const mfAmount = document.getElementById("txt_home_slider_scheme");

  // Interest rates
  const rates = {
      bank: 3,
      fd: 6,
      gold: 9,
      sensex: 12,
      mf: 15
  };

  // Function to calculate future value
  function calculateInvestment(amount, rate, years = 25) {
      const monthlyRate = rate / 100 / 12;
      const months = years * 12;
      return amount * ((Math.pow(1 + monthlyRate, months) - 1) / monthlyRate) * (1 + monthlyRate);
  }

  // Format large numbers
  function formatNumber(value) {
      if (value >= 10000000) {
          return (value / 10000000).toFixed(2) + " Cr";
      } else if (value >= 100000) {
          return (value / 100000).toFixed(2) + " L";
      }
      return value.toFixed(2);
  }

  // Update values when slider/input changes
  function updateValues(value) {
      if (!bankAmount || !fdAmount || !goldAmount || !sensexAmount || !mfAmount) {
          console.error("One or more elements not found in the DOM");
          return;
      }

      inputBox.innerText = `₹ ${value}/-`;

      bankAmount.innerText = formatNumber(calculateInvestment(value, rates.bank));
      fdAmount.innerText = formatNumber(calculateInvestment(value, rates.fd));
      goldAmount.innerText = formatNumber(calculateInvestment(value, rates.gold));
      sensexAmount.innerText = formatNumber(calculateInvestment(value, rates.sensex));
      mfAmount.innerText = formatNumber(calculateInvestment(value, rates.mf));
  }

  // Event Listeners
  slider.addEventListener("input", () => updateValues(slider.value));
  inputBox.addEventListener("click", () => {
      let userValue = prompt("Enter investment amount:");
      if (userValue >= 1000 && userValue <= 100000) {
          slider.value = userValue;
          updateValues(userValue);
      } else {
          alert("Please enter a value between 1,000 and 1,00,000");
      }
  });

  // Initialize values
  updateValues(slider.value);