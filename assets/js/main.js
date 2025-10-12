(function ($) {
  'use strict';

  $(function () {
    const $policyButtons = $('.policy-cta .btn');

    $policyButtons.on('focusin mouseenter', function () {
      $(this).addClass('is-active');
    });

    $policyButtons.on('focusout mouseleave', function () {
      $(this).removeClass('is-active');
    });
  });
})(jQuery);
