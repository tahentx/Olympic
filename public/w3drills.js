'use strict';

var today = new Date();

	var day = today.getDay();

	var daylist = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday"];

	var hours = today.getHours();

	var minutes = today.getMinutes();

	var second = today.getSeconds();

	var prepand = (hour >= 12)? hour - 12)? " PM ": "AM";

	hour = (hour >= 12)? hour - 12: 