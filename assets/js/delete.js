function delete_post(post_id){
	var ajaxOpts =
	{
		type   : "post",
		url    : BASE_URL + 'admin/delete_post/',
		data   : "&delete_post=" + post_id,
		success: function (data) {

				$('#post'+post_id).remove();

		}
	};
	$.ajax(ajaxOpts);
}