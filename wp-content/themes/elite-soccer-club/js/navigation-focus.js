var elite_soccer_club_keyboard_navigation_loop = function (elem) {
  var elite_soccer_club_tabbable = elem.find('select, input, textarea, button, a').filter(':visible');
  var elite_soccer_club_firstTabbable = elite_soccer_club_tabbable.first();
  var elite_soccer_club_lastTabbable = elite_soccer_club_tabbable.last();
  elite_soccer_club_firstTabbable.focus();

  elite_soccer_club_lastTabbable.on('keydown', function (e) {
    if ((e.which === 9 && !e.shiftKey)) {
      e.preventDefault();
      elite_soccer_club_firstTabbable.focus();
    }
  });

  elite_soccer_club_firstTabbable.on('keydown', function (e) {
    if ((e.which === 9 && e.shiftKey)) {
      e.preventDefault();
      elite_soccer_club_lastTabbable.focus();
    }
  });

  elem.on('keyup', function (e) {
    if (e.keyCode === 27) {
      elem.hide();
    };
  });
};