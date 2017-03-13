(function () {
  var sliderTimeBetweenBoardings = document.getElementById('slider__time-between-boardings');
  var input0 = document.getElementById('dates-min__dropdown-menu--button');
  var input1 = document.getElementById('dates-max__dropdown-menu--button');

  if ( sliderTimeBetweenBoardings && input0 && input1 ) {
    // alert ( 'wtf' );

    var inputs = [input0, input1];

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

    sliderTimeBetweenBoardings.noUiSlider.on('update', function (values, handle) {
      inputs[handle].value = values[handle];
    });

    function setSliderHandle(i, value) {
      var r = [null, null];
      r[i] = value;
      sliderTimeBetweenBoardings.noUiSlider.set(r);
    }

    // Listen to keydown events on the input field.
    inputs.forEach(function (input, handle) {

      input.addEventListener('change', function () {
        setSliderHandle(handle, this.value);
      });

      input.addEventListener('keydown', function (e) {

        var values = sliderTimeBetweenBoardings.noUiSlider.get();
        var value = Number(values[handle]);

        // [[handle0_down, handle0_up], [handle1_down, handle1_up]]
        var steps = sliderTimeBetweenBoardings.noUiSlider.steps();

        // [down, up]
        var step = steps[handle];

        var position;

        // 13 is enter,
        // 38 is key up,
        // 40 is key down.
        switch (e.which) {

          case 13:
            setSliderHandle(handle, this.value);
            break;

          case 38:

            // Get step to go increase slider value (up)
            position = step[1];

            // false = no step is set
            if (position === false) {
              position = 1;
            }

            // null = edge of slider
            if (position !== null) {
              setSliderHandle(handle, value + position);
            }

            break;

          case 40:

            position = step[0];

            if (position === false) {
              position = 1;
            }

            if (position !== null) {
              setSliderHandle(handle, value - position);
            }

            break;
        }
      });
    });
  }




})();




(function () {
  var sliderInterestsPrices  = document.getElementById('slider__interests-prices');
  var input0 = document.getElementById('prices-min__dropdown-menu--button');
  var input1 = document.getElementById('prices-max__dropdown-menu--button');

  if ( sliderInterestsPrices && input0 && input1 ) {
    // alert ( 'wtf' );

    var inputs = [input0, input1];

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
        decimals: 0
      })
    });

    sliderInterestsPrices.noUiSlider.on('update', function (values, handle) {
      inputs[handle].value = values[handle];
    });

    function setSliderHandle(i, value) {
      var r = [null, null];
      r[i] = value;
      sliderInterestsPrices.noUiSlider.set(r);
    }

    // Listen to keydown events on the input field.
    inputs.forEach(function (input, handle) {

      input.addEventListener('change', function () {
        setSliderHandle(handle, this.value);
      });

      input.addEventListener('keydown', function (e) {

        var values = sliderInterestsPrices.noUiSlider.get();
        var value = Number(values[handle]);

        // [[handle0_down, handle0_up], [handle1_down, handle1_up]]
        var steps = sliderInterestsPrices.noUiSlider.steps();

        // [down, up]
        var step = steps[handle];

        var position;

        // 13 is enter,
        // 38 is key up,
        // 40 is key down.
        switch (e.which) {

          case 13:
            setSliderHandle(handle, this.value);
            break;

          case 38:

            // Get step to go increase slider value (up)
            position = step[1];

            // false = no step is set
            if (position === false) {
              position = 1;
            }

            // null = edge of slider
            if (position !== null) {
              setSliderHandle(handle, value + position);
            }

            break;

          case 40:

            position = step[0];

            if (position === false) {
              position = 1;
            }

            if (position !== null) {
              setSliderHandle(handle, value - position);
            }

            break;
        }
      });
    });
  }

})();