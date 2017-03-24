(function () {
  var sliderTimeBetweenBoardings  = document.getElementById('slider__time-between-boardings');

  noUiSlider.create(sliderTimeBetweenBoardings, {
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


  var nodes = [
    document.getElementById('dates-min__dropdown-menu--button'),
    document.getElementById('dates-max__dropdown-menu--button')
  ];

  // Display the slider value and how far the handle moved
  // from the left edge of the slider.
  sliderTimeBetweenBoardings.noUiSlider.on('update', function ( values, handle, unencoded, isTap, positions ) {
    nodes[handle].innerHTML = values[handle];
  })

})();




(function () {
  var sliderInterestsPrices  = document.getElementById('slider__interests-prices');

    noUiSlider.create(sliderInterestsPrices, {
      start: [5000, 145000],
      step: 1000,
      connect: true,
      tooltips: true,
      range: {
        'min': 0,
        'max': 150000
      },
      format: wNumb({
        decimals: 0,
        thousand: ' ',
        suffix: ' Р'
      })
    });


    var nodes = [
      document.getElementById('prices-min__dropdown-menu--button'),
      document.getElementById('prices-max__dropdown-menu--button')
    ];

    // Display the slider value and how far the handle moved
    // from the left edge of the slider.
    sliderInterestsPrices.noUiSlider.on('update', function ( values, handle, unencoded, isTap, positions ) {
      nodes[handle].innerHTML = values[handle];
    })

})();