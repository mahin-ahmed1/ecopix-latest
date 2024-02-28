jQuery(document).ready(function($) {
  function toggleSubmenu(event) {
    event.preventDefault();
    $(this).closest('li').find('.sub-menu').first().toggleClass('active-submenu');
  }

  // Function to hide submenu when focus moves away from last link
  function hideSubmenu() {
    $(this).closest('.sub-menu').removeClass('active-submenu');
  }

  // Appending submenu indicators to menu items
  $('.menu-item-has-children').children('a').append("<a class='submenu-indicator' href='#'>+</a>");

  // Click event for desktop
  $(".submenu-indicator").on('click', toggleSubmenu);

  // Touchstart event for mobile
  $(".submenu-indicator").on('touchstart', toggleSubmenu);


  // Blur event to hide submenu when focus moves away from last link
  $('.sub-menu > li:last-child > a').on('blur', hideSubmenu);

  $('.toggle-menu').click(function(){
    $('.menu-area .navbar').slideToggle(400);
    return false;
  });
});
