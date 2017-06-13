var Base = Base || {};

Base.Buttons = {
	init: function () {
		$(document).ready(this.handleDocumentReady.bind(this));
	},

	handleDocumentReady: function () {
		$(document).on('click', '.btn-close', this.handleClickBtnClose.bind(this));
		$(document).on('click', '.accordion-menu', this.handleClickAccordionMenu.bind(this));
		$(document).on('click', '#btn-filter', this.handleClickBtnFilter.bind(this));
		$(document).on('click', '.more-info', this.handleClickMoreInfo.bind(this));
	},

	handleClickBtnClose: function (e) {
		e.preventDefault();
		$('.overlay-popup').removeClass('open');
	},

	//-------------Accordion for mobile filter--------------------
	handleClickAccordionMenu: function (e) {
		var $target = $(e.currentTarget);
		$target.siblings('.accordion-slide').slideToggle();
		$target.toggleClass('active');
	},

	handleClickBtnFilter:  function (e) {
		var $target = $(e.currentTarget);
		$target.siblings('.filter-toggle').slideToggle();
		$target.toggleClass('active');
	},

	handleClickMoreInfo: function (e) {
		var $target = $(e.currentTarget);
		$target.toggleClass("active");
		$target.parent().toggleClass("open");
	}
};

Base.Buttons.init();