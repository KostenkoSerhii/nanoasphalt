
function clickEvents() {
  $('.js-drop-menu-btn').on('click', function(e) {
    let target = $(this).attr('data-target');
    // e.preventDefault();
    $(`.js-drop-menu-content[data-target="${target}"]`).slideToggle(300);
  });


  $(document).mouseup(function(e) {
    var container = $('.js-drop-menu-btn');
    if (container.has(e.target).length === 0) {
      $('.js-drop-menu-content').slideUp(300);
    }
  });
};
module.exports = clickEvents;
