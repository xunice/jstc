$(document).ready(function () {
	var url = document.location.href;
	active("views");
	active("jingsai");
	active("woman");
	active("zhishi");
	active("news");
	
	function active(str){
		if(url.search(str)!=-1){
			$(".index").removeClass("am-active");
			$("."+str).addClass("am-active");
		}
	}
});