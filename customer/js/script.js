$('.add').click(function () {
    $(this).prev().val(+$(this).prev().val() + 1);
});
$('.sub').click(function () {
    if ($(this).next().val() > 0) $(this).next().val(+$(this).next().val() - 1);
    if ($(this).next().val() == 0) $('.delete-item-modal').slideDown();
    
});




$('.item-title').click( function(){
	$('.info-modalx').slideDown();
});
$('.click-item-info').click( function(){
	$('.info-modal').slideDown();
});
$('.close-modal').click(function(){
	$('.modal').slideUp();
});