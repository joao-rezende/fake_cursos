const BASE_URL = "http://127.0.0.1/fake_cursos/";

function clearErrors() {
	$(".has-error").removeClass("has-error");
	$(".help-block").html("");
}

function showErrors(error_list) {
	clearErrors();

	$.each(error_list, function(id, message) {
		$(id).parent().parent().addClass("has-error");
		$(id).parent().siblings(".help-block").html(message);
	});
}

function loadingImg(message="") {
	return "<i class='fa fa-circle-o-notch fa-spin'></i>&nbsp" + message;
}