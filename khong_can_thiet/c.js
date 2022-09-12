$(".hop-thoai").addClass('show');
$(".background").addClass('show');

var banner = setInterval(function(){
$(".hop-thoai").removeClass('show');
$(".background").removeClass('show');
clearInterval(banner);
},2000);