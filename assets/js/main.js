(function ($) {
  'use strict';

  /**
   * Adiciona uma classe de auxílio quando a navegação ocorre via teclado.
   * Facilita a personalização de estados :focus no CSS.
   */
  const KEYBOARD_CLASS = 'is-using-keyboard';

  const enableKeyboardMode = (event) => {
    if (event.key !== 'Tab') {
      return;
    }

    document.body.classList.add(KEYBOARD_CLASS);
  };

  const disableKeyboardMode = () => {
    document.body.classList.remove(KEYBOARD_CLASS);
  };

  $(document)
    .on('keydown.helloChildAccessibility', enableKeyboardMode)
    .on('mousedown.helloChildAccessibility touchstart.helloChildAccessibility', disableKeyboardMode);
})(jQuery);
