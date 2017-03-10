var startDate,
		endDate,
		updateStartDate = function() {
			startPicker.setStartRange(startDate);
			endPicker.setStartRange(startDate);
			endPicker.setMinDate(startDate);
		},
		updateEndDate = function() {
			startPicker.setEndRange(endDate);
			startPicker.setMaxDate(endDate);
			endPicker.setEndRange(endDate);
		},
		startPicker = new Pikaday({
			field: document.getElementById('departure-date'),
			firstDay: 1,
			format: 'D MMMM YYYY',
			minDate: new Date(),
			onSelect: function() {
				startDate = this.getDate();
				updateStartDate();
			}
		}),
		endPicker = new Pikaday({
			field: document.getElementById('arrival-date'),
			firstDay: 1,
			format: 'D MMMM YYYY',
			minDate: new Date(),
			onSelect: function() {
				endDate = this.getDate();
				updateEndDate();
			}
		}),
		_startDate = startPicker.getDate(),
		_endDate = endPicker.getDate();