/**
 * Search import shipment
 */
function tableFilter(searchid, tableid){
	$("#searchid").on("keyup", function(){
		var searchText = $(this).val().toString().toLowerCase();
		$("#tableid tr").filter(function(){
			$(this).toggle($(this).text().toString().toLowerCase().indexOf(searchText) > -1);
		});
	});	
}

/**
 * To open pop up window
 * @param  {[type]} url   [description]
 * @param  {[type]} title [description]
 * @param  {[type]} w     [description]
 * @param  {[type]} h     [description]
 * @return {[type]}       [description]
 */
function popupWindow(url, title, w, h){
	// Fixes dual-screen position
	var dualScreenLeft = window.screenLeft != undefined ? window.screenLeft : screen.left;  
    var dualScreenTop = window.screenTop != undefined ? window.screenTop : screen.top; 

    width = window.innerWidth ? window.innerWidth : document.documentElement.clientWidth ? document.documentElement.clientWidth : screen.width;
    height = window.innerHeight ? window.innerHeight : document.documentElement.clientHeight ? document.documentElement.clientHeight : screen.height;  

    var left = ((width / 2) - (w / 2)) + dualScreenLeft;  
    var top = ((height / 2) - (h / 2)) + dualScreenTop;  
    var newWindow = window.open(url, title, 'scrollbars=yes, width=' + w + ', height=' + h + ', top=' + top + ', left=' + left);

    // Puts focus on the newWindow  
    if(window.focus) {  
        newWindow.focus();  
    }
}