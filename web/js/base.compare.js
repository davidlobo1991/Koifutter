var Base = Base || {};

Base.Compare = {

	init: function () {
		$(document).ready(this.handleDocumentReady.bind(this));
	},

	handleDocumentReady: function () {
		$(document).on('click', '#compare-send', this.handleClickFormCompare.bind(this));
		$(document).on('change', '.details-compare input', this.handleCheckInputCompare.bind(this))
	},

	handleClickFormCompare: function (e) {
		e.preventDefault();
		var notice = $('.alert');
		numChecks = getNumAct();
		$('#loading').removeClass('hide');

		if (numChecks > 1) {
			notice.removeClass('open');
			notice.addClass('hide');

			$('.overlay-popup').addClass('open');
			$('body, html').animate({
				scrollTop: '0px'

			}, 200);

			$.ajax({
				method: "POST",
				url: "compare",
				datatype: 'json',
				success: function (data) {
					$('.compare-list .scroll-table').html(data.overlay);
					$('#loading').addClass('hide');
				},
				error: function (jqXHR, exception) {
					if (jqXHR.status === 405) {
						console.error("METHOD NOT ALLOWED!");
					}
				}
			});
		}

		else {
			notice.removeClass('hide');
			notice.addClass('open');
		}
	},

	handleCheckInputCompare: function (e) {
		e.preventDefault();
		var $target = $(e.currentTarget);
		var ischecked = $target.is(":checked");
		var checkbox_value;

		if (ischecked) {
			$target.val('on');
		}
		else {
			$target.val('off');
		}

		$.ajax({
			method: "POST",
			url: "checkbox",
			data: $target,
			success: function (data) {
				setNumAct(data.numAct);
			},
			error: function (jqXHR, exception) {
				if (jqXHR.status === 405) {
					console.error("METHOD NOT ALLOWED!");
				}
			}
		});
	}
};

function setNumAct(numAct) {
	nummer = numAct;
}

function getNumAct() {
	return nummer;
}

Base.Compare.init();