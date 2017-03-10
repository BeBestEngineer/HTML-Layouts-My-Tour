var sliderTimeBetweenBoardings  = document.getElementById('slider__time-between-boardings');

noUiSlider.create(sliderTimeBetweenBoardings, {
  // orientation: 'vertical',
  start: [7, 21],
  step: 1,
  connect: true,
  tooltips: true,
  range: {
    'min': 0,
    'max': 30
  },
  format: wNumb({
    decimals: 0
  })
});



var sliderInterestsPrices  = document.getElementById('slider__interests-prices');

noUiSlider.create(sliderInterestsPrices, {
  // orientation: 'vertical',
  start: [5000, 145000],
  step: 1000,
  connect: true,
  tooltips: true,
  range: {
    'min': 0,
    'max': 150000
  },
  format: wNumb({
    decimals: 0
  })
});