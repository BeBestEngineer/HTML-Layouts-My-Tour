flatpickr( "#flatpickr-input__interests-form--boarding-dates", {
	enableTime: false,
	altInput: true,
	minDate: "today",
	mode: "range",
	"locale": "ru",
	// dateFormat: "d.m.Y",
	altFormat: "d M Y",

	wrapperId:  	 'flatpickr-wrapper__interests-form-id',
	wrapperClass:  'flatpickr-wrapper__interests-form--boarding-dates',

	calendarId: 	 'flatpickr-calendar__interests-form-id',
	calendarClass: 'flatpickr-calendar__interests-form--boarding-dates'
});

