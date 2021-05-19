$('.add').click(function () {
    $(this).prev().val(+$(this).prev().val() + 1);
});
$('.sub').click(function () {
    if ($(this).next().val() > 0) $(this).next().val(+$(this).next().val() - 1);
    if ($(this).next().val() == 0) $('.delete-item-modal').slideDown();
    
});




$('.item-title').click( function(){
	$('.info-modal').slideDown();
});
$('.click-item-info').click( function(){
	$('.info-modal').slideDown();
});
$('.close-modal').click(function(){
	$('.modal').slideUp();
});
$('.login-button').click( function(){
	$('.login-modal').slideDown();
});
$('.signup-button').click( function(){
  $('.signup-modal').slideDown();
});



$(function() {
  $('.left-scroll').click(function(event) {
    event.preventDefault();
    $(this).parent().animate({
      scrollLeft: "-=500px"
    }, "slow");
  });

   $('.right-scroll').click(function(event) {
    event.preventDefault();
    $(this).parent().animate({
     scrollLeft: "+=500px"
    }, "slow");
  });
});

$(function($) {
    $(this).find('.left-scroll').hide();
    $('.horizontal-scroll').scroll(function() {
        if($(this).scrollLeft() + $(this).innerWidth() >= $(this)[0].scrollWidth) {
            $(this).find('.right-scroll').hide();
        }
        if($(this).scrollLeft() + $(this).innerWidth() < $(this)[0].scrollWidth) {
            $(this).find('.right-scroll').show();
        }
        if($(this).scrollLeft() == 0) {
          $(this).find('.left-scroll').hide();
        }
        if($(this).scrollLeft() > 0) {
          $(this).find('.left-scroll').show();
        }
    })

});




var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}


