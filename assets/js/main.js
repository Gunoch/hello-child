(function ($) {
  $(function () {
    const $html = $('html');
    const $body = $('body');

    // Smooth scroll for internal anchors with data attribute
    $('[data-bellona-scroll] a[href^="#"], a[data-bellona-scroll]').on('click', function (event) {
      const targetId = $(this).attr('href') || $(this).data('bellona-scroll');

      if (!targetId || targetId === '#') {
        return;
      }

      const $target = $(targetId);

      if ($target.length) {
        event.preventDefault();
        $('html, body').animate(
          {
            scrollTop: $target.offset().top - 120,
          },
          600
        );
      }
    });

    // Minimal mobile menu toggle (expects .bellona-menu-toggle and .bellona-nav)
    const $toggle = $('.bellona-menu-toggle');
    const $nav = $('.bellona-nav');

    if ($toggle.length && $nav.length) {
      $toggle.on('click', function () {
        const isOpen = $body.toggleClass('bellona-nav-open').hasClass('bellona-nav-open');

        $toggle.attr('aria-expanded', isOpen);
        $nav.toggleClass('is-open', isOpen);
      });

      $(document).on('keyup', function (event) {
        if (event.key === 'Escape' && $body.hasClass('bellona-nav-open')) {
          $body.removeClass('bellona-nav-open');
          $nav.removeClass('is-open');
          $toggle.attr('aria-expanded', 'false').focus();
        }
      });
    }

    // Add class when scrolled for sticky header styling
    const $siteHeader = $('.site-header');

    if ($siteHeader.length) {
      const updateHeaderState = function () {
        const scrolled = $(window).scrollTop() > 80;
        $siteHeader.toggleClass('bellona-header-scrolled', scrolled);
      };

      updateHeaderState();
      $(window).on('scroll', updateHeaderState);
    }
  });
})(jQuery);
