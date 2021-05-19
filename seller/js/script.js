$('.add').click(function () {
    $(this).prev().val(+$(this).prev().val() + 1);
});
$('.sub').click(function () {
    if ($(this).next().val() > 0) $(this).next().val(+$(this).next().val() - 1);
    if ($(this).next().val() == 0) $('.delete-item-modal').slideDown();
    
});
$('.close-modal').click(function(){
  $('.modal').slideUp();
});

$('.add-product').click( function(){
	$('.add-product-modal').slideDown();
});
$('.update-product').click( function(){
  $('.update-product-modal').slideDown();
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