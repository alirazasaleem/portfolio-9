$(document).ready(function() {
  $('.gal--img').click(function(event) {
    $('#pre--img img').attr('src', $(this).children('img').attr('src'));
    $('#pre--img').show('slow').addClass('d--flex');
  });
});
