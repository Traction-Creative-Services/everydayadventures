$(document).ready(function() {
	$('a').each(function() {
		if(isImage($(this))) {
			$(this).colorbox({
				maxWidth:'90%',
				maxHeight:'90%'
			});
		}
	});
})

function isImage(obj) {
	if(obj.attr("href").indexOf(".jpg") > -1 ||
	   obj.attr("href").indexOf(".png") > -1 ||
	   obj.attr("href").indexOf(".gif") > -1 ) 
		return true;
	else
		return false
}