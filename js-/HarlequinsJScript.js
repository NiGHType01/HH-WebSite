var fixedHeight=111; /* To allow for fixed height size objects */
var fixedWidth=0;  /* To allow for fixed width size objects */
var fixAreaHeight=214;
var tabletSize=980;
var mobileSize=400;
var pcOffsetWidth = 181;
var tabletOffsetWidth = 44;
var mobileOffsetWidth = 44;
var topTabletHeight=64;
var topPcHeight=84;

$( function() {
	$('.wallscroll').bgscroll({direction:'v' });  /* adapted from this site: http://www.queness.com/resources/html/bgscroll/index.html */
});

// for the window resize
$(window).resize(function() {
	if ($(window).width() <= tabletSize){
		$("#topImage").height(topTabletHeight);
		$(".row2Height").height(topTabletHeight);
		fixedWidth = tabletOffsetWidth;
	}
	else if ($(window).width() >= tabletSize){
		$("#topImage").height(topPcHeight);
		$(".row2Height").height(topPcHeight);
		fixedWidth = pcOffsetWidth;
	}
	else {
		fixedWidth = mobileOffsetWidth;
	}
	
    var bodyHeight = 0; bodyHeight = $(window).height();
	var bodyWidth = 0; bodyWidth = $(window).width();
	
	$(".windowWidth").width(bodyWidth);
	
	var areaWidth = bodyWidth-fixedWidth;
	$("#cols53").width(areaWidth);
	
	var contentHeight = bodyHeight - fixAreaHeight;
	$("#content").height(contentHeight);
	
	bodyHeight = bodyHeight-fixedHeight;
	bodyWidth = bodyWidth-fixedWidth;
    $(".heightResizer").height(bodyHeight); /* Resize Rows */
	$(".widthResizer").width(bodyWidth); /* Resize Rows */
}); 
$(document).ready(function() {
	$('.carousel').carousel({interval : 6000 })
	if ($(window).width() <= tabletSize){
		$("#topImage").height(topTabletHeight);
		$(".row2Height").height(topTabletHeight);
		fixedWidth = tabletOffsetWidth;
	}
	else if ($(window).width() >= tabletSize){
		$("#topImage").height(topPcHeight);
		$(".row2Height").height(topPcHeight);
		fixedWidth = pcOffsetWidth;
	}
	else {
		fixedWidth = mobileOffsetWidth;
	}
	
    var bodyHeight = 0; bodyHeight = $(window).height();
	var bodyWidth = 0; bodyWidth = $(window).width();
	
	$(".windowWidth").width(bodyWidth);
	
	var areaWidth = bodyWidth-fixedWidth;
	$("#cols53").width(areaWidth);
	
	var contentHeight = bodyHeight - fixAreaHeight;
	$("#content").height(contentHeight);
	
	bodyHeight = bodyHeight-fixedHeight;
	bodyWidth = bodyWidth-fixedWidth;
    $(".heightResizer").height(bodyHeight); /* Resize Rows */
	$(".widthResizer").width(bodyWidth); /* Resize Rows */
}); 