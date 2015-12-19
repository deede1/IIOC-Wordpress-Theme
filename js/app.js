jQuery(document).ready(function()
{	
	setTimeout(function()
	{
		jQuery('#main-carousel').carousel('pause');		
	}, 1000);

	var start = parseInt(jQuery('#main-carousel').find('.item.active').data('interval'));
	var t = setTimeout("jQuery('#main-carousel').carousel();", start-1000);	

	jQuery('#main-carousel').on('slid.bs.carousel', function ()
	{
		clearTimeout(t);  
		var duration = parseInt(jQuery(this).find('.item.active').data('interval'));
		jQuery('#main-carousel').carousel('pause');
		t = setTimeout("jQuery('#main-carousel').carousel();", duration-1000);
	})

	jQuery('#main-carousel .carousel-control').on('click', function()
	{
		jQuery('#main-carousel').carousel('pause');
		clearTimeout(t);   
	});
});