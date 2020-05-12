$(function () {
	$("#table").DataTable();
});

//Hàm hình URL từ tiêu đề bài viết
function sinhURL(title){
	var x = title;
	x=x.replace(/á|à|ả|ã|ạ|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ|å|ä|æ|ā|ą|ǻ|ǎ/g,'a');
	x=x.replace(/Á|À|Ả|Ã|Ạ|Ă|Ắ|Ằ|Ẳ|Ẵ|Ặ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ|Å|Ä|Æ|Ā|Ą|Ǻ|Ǎ/g,'A');
	x=x.replace(/ǽ/g,'ae');
	x=x.replace(/Ǽ/g,'AE');
	x=x.replace(/đ|ď/g,'d');
	x=x.replace(/Đ|Ď/g,'D');
	x=x.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ|ë|ē|ĕ|ę|ė/g,'e');
	x=x.replace(/É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ|Ë|Ē|Ĕ|Ę|Ė/g,'E');
	x=x.replace(/í|ì|ỉ|ĩ|ị|î|ï|ī|ĭ|ǐ|į|ı/g,'i');
	x=x.replace(/Í|Ì|Ỉ|Ĩ|Ị|Î|Ï|Ī|Ĭ|Ǐ|Į|İ/g,'I');
	x=x.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ|ö|ø|ǿ|ǒ|ō|ŏ|ő/g,'o');
	x=x.replace(/Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ|Ö|Ø|Ǿ|Ǒ|Ō|Ŏ|Ő/g,'O');
	x=x.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự|û|ū|ŭ|ü|ů|ű|ų|ǔ|ǖ|ǘ|ǚ|ǜ/g,'u');
	x=x.replace(/Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự|Û|Ū|Ŭ|Ü|Ů|Ű|Ų|Ǔ|Ǖ|Ǘ|Ǚ|Ǜ/g,'U');
	x=x.replace(/ý|ỳ|ỷ|ỹ|ỵ|ÿ|ŷ/g,'y');
	x=x.replace(/Ý|Ỳ|Ỷ|Ỹ|Ỵ|Ÿ|Ŷ/g,'Y');
	x=x.replace(/'|"|:|#|@|!|~|`|{|}|(|)|&|\*|^|%|$|.|,|;|<|>|\?|\/|[|]|\|/g,'');
	x=x.replace(/ /g,'-');

	while(x.indexOf("--")>=0)
		x=x.replace(/--/g,'-');

	return x;
}

//Tự động sinh URL khi nhập tiêu đề (catename)
$("#catename").keyup(function(){
	var title = $(this).val();
	var url = sinhURL(title);
	$("#cateurl").val(url);
});

//Xác nhận xem người dùng có muốn xóa hay không
$(".catedel").click(function(e){
	if(!confirm("Bạn thật sự muốn xóa Thể loại này?"))
		e.preventDefault();
});

//Xác nhận xem người dùng có muốn xóa hay không
$(".postdel").click(function(e){
	if(!confirm("Bạn thật sự muốn xóa Bài viết này?"))
		e.preventDefault();
});

//Tự động sinh URL khi nhập tiêu đề bài viết (title)
$("#title").keyup(function(){
	var title = $(this).val();
	var url = sinhURL(title);
	$("#posturl").val(url);
});

//Viết hàm kiểm tra password trùng nhau khi lưu
$("#btnsaveuser").click(function(e) {
	if($("#password").val() != $("#retype-password").val()){
		e.preventDefault(); //dùng ko cho hành động xảy ra
		alert("Bạn nhập Password và nhập lại password không trùng nhau");
	}
});
