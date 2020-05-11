<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/675b77c5f5.js" crossorigin="anonymous"></script>
<script>
    $(function () {
  $('[data-toggle="tooltip"]').tooltip()
})



$('.dropdown-submenu .dropdown-menu a.dropdown-toggle').hover(function(e) {

  if (!$(this).next().hasClass('show')) {

    $(this).parents('.dropdown-menu').first().find('.show').removeClass('show');

  }

  var $subMenu = $(this).next('.dropdown-menu');

  $subMenu.toggleClass('show');

  $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown',function(e) {

    $('.dropdown-submenu .show').removeClass('show');

  });

  return false;

});

</script>