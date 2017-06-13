$(document).ready(function() {
	tooltip();
	loopComma();

	var slider_range = $('.slider-range');
	var slider_temperatur = $('.slider-temperatur');
	var slider_size = $('.slider-size');
	var min_range = 0;
	var max_rohprotein = 70;
	var max_rohfett = 30;
	var max_rohfaser = 20;
	var max_rohasche = 25;
	var min_temperatur = 0;
	var max_temperatur = 40;
	var min_size = 0;
	var max_size = 12;

	//----Slider Range (Rohprotein, Rohfett, Rohfaser, Rohasche)--------------------------------------------------------

	slider_range.each(function () {
		$(this).hasClass('slider-rohprotein') ? funcSliderRange(this, max_rohprotein) :
			$(this).hasClass('slider-rohfett') ? funcSliderRange(this, max_rohfett) :
				$(this).hasClass('slider-rohfaser') ? funcSliderRange(this, max_rohfaser) :
					$(this).hasClass('slider-rohasche') ? funcSliderRange(this, max_rohasche) : '';

	});

	/**
	 * funcSliderRange
	 * @param e
	 * @param max_range
	 */

	function funcSliderRange(e, max_range) {
		var filter_min = $(e).siblings('.filter-min').val();
		var filter_max = $(e).siblings('.filter-max').val();

		if (filter_min && filter_max) {
			$(e).children(".range-min-txt").text(filter_min + " %");
			$(e).children(".range-max-txt").text(filter_max + " %");

			$(e).slider({
				range: true,
				min: min_range,
				max: max_range,
				values: [filter_min, filter_max],
				slide: function (event, ui) {
					$(e).siblings('.filter-min').val(ui.values[0]);
					$(e).siblings('.filter-max').val(ui.values[1]);
					$(e).children(".range-min-txt").text(ui.values[0] + " %");
					$(e).children(".range-max-txt").text(ui.values[1] + " %");
				}
			});
		}

		else {
			$(e).children(".range-min-txt").text(min_range + " %");
			$(e).children(".range-max-txt").text(max_range + " %");

			$(e).slider({
				range: true,
				min: min_range,
				max: max_range,
				values: [min_range, max_range],
				slide: function (event, ui) {
					$(e).siblings('.filter-min').val(ui.values[0]);
					$(e).siblings('.filter-max').val(ui.values[1]);
					$(e).children(".range-min-txt").text(ui.values[0] + " %");
					$(e).children(".range-max-txt").text(ui.values[1] + " %");
				}
			});
		}
	}

	//----Slider Temperatur---------------------------------------------------------------------------------------------

	slider_temperatur.each(function() {
		var filter_min = $(this).siblings('.filter-min').val();
		var filter_max = $(this).siblings('.filter-max').val();

		if (filter_min && filter_max) {
			$(this).children(".range-min-txt").text(filter_min + " °");
			$(this).children(".range-max-txt").text(filter_max + " °");

			$(this).slider({
				range: true,
				min: min_temperatur,
				max: max_temperatur,
				values: [filter_min, filter_max],
				slide: function (event, ui) {
					$(this).siblings('.filter-min').val(ui.values[0]);
					$(this).siblings('.filter-max').val(ui.values[1]);
					$(this).children(".range-min-txt").text(ui.values[0] + " °");
					$(this).children(".range-max-txt").text(ui.values[1] + " °");
				}
			});
		}

		else {
			$(this).slider({
				range: true,
				min: min_temperatur,
				max: max_temperatur,
				values: [min_temperatur, max_temperatur],
				slide: function (event, ui) {
					$(this).siblings('.filter-min').val(ui.values[0]);
					$(this).siblings('.filter-max').val(ui.values[1]);
					$(this).children(".range-min-txt").text(ui.values[0] + " °");
					$(this).children(".range-max-txt").text(ui.values[1] + " °");
				}
			});
		}
	});

	//----Slider Size---------------------------------------------------------------------------------------------------

	slider_size.each(function() {
		var filter_min = $(this).siblings('.filter-min').val();
		var filter_max = $(this).siblings('.filter-max').val();

		if (filter_min && filter_max) {
			$(this).children(".range-min-txt").text(filter_min + " %");
			$(this).children(".range-max-txt").text(filter_max + " %");

			$(this).slider({
				range: true,
				min: min_size,
				max: max_size,
				values: [filter_min, filter_max],
				slide: function (event, ui) {
					$(this).siblings('.filter-min').val(ui.values[0]);
					$(this).siblings('.filter-max').val(ui.values[1]);
					$(this).children(".range-min-txt").text(ui.values[0] + " °");
					$(this).children(".range-max-txt").text(ui.values[1] + " °");
				}
			});
		}

		else {
			$(this).slider({
				range: true,
				min: min_size,
				max: max_size,
				values: [min_size, max_size],
				slide: function (event, ui) {
					$(this).siblings('.filter-min').val(ui.values[0]);
					$(this).siblings('.filter-max').val(ui.values[1]);
					$(this).children(".range-min-txt").text(ui.values[0] + " °");
					$(this).children(".range-max-txt").text(ui.values[1] + " °");
				}
			});
		}
	});

	// Reset filter ----------------------------------------------------------------------------------------------------

	$(document).on('click', '.reset', function (e) {
		var $target = e.currentTarget;
		var checkboxAndRadio = $($target).closest('form').find('input:checkbox, input:radio');

		checkboxAndRadio.each(function () {
			if ($(this).is(':checked')) $(this).removeAttr('checked');
		});


		slider_range.each(function () {
			$(this).hasClass('slider-rohprotein') ? funcResetSliderRange(this, max_rohprotein) :
				$(this).hasClass('slider-rohfett') ? funcResetSliderRange(this, max_rohfett) :
					$(this).hasClass('slider-rohfaser') ? funcResetSliderRange(this, max_rohfaser) :
						$(this).hasClass('slider-rohasche') ? funcResetSliderRange(this, max_rohasche) : '';
		});

		slider_range = $('.slider-temperatur');

		slider_range.slider({
			values: [min_temperatur, max_temperatur]
		});

		slider_range.siblings('.filter-min').val(min_temperatur);
		slider_range.siblings('.filter-max').val(max_temperatur);
		slider_range.children(".range-min-txt").text(min_temperatur + " °");
		slider_range.children(".range-max-txt").text(max_temperatur + " °");

		slider_range = $('.slider-size');

		slider_range.slider({
			values: [min_size, max_size]
		});

		slider_range.siblings('.filter-min').val(min_size);
		slider_range.siblings('.filter-max').val(max_size);
		slider_range.children(".range-min-txt").text(min_size + " %");
		slider_range.children(".range-max-txt").text(max_size + " %");
	});

	function funcResetSliderRange(e, max_range)
	{
	 	$(e).slider({
	 		values: [min_range, max_range]
	 	});

		$(e).siblings('.filter-min').val(min_range);
		$(e).children(".range-min-txt").text(min_range + " %");
	 	$(e).siblings('.filter-max').val(max_range);
	 	$(e).children(".range-max-txt").text(max_range + " %");
	 }
	//------Tabs and Accordion------------------------------------------------------------------------------------------

	$('.tabs').tabs();
});

function tooltip() {
	$('.tooltip').tooltip ({
		show: {
			effect: "slideDown",
			delay: 250
		}
	});
}

function loopComma() {
	$('.loop-comma').each(function () {
		var value = $(this).html();
		var posLastComma = value.lastIndexOf(",");
		var newValue = value.slice(0, posLastComma);
		$(this).html(newValue);
	});
}

