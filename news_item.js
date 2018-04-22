$(document).ready(function(){
	$("#bt_comment").click(function(){
		// i was using value instead of val
		var txt_value = ($("#txt_comment").val());
		if(txt_value.length > 0){
			$("#no_comments").remove();
			var final_cmt = "<div class = \"comment\"><p class = \"comment_txt\">"
				+txt_value+"</p></div>";
			$("#comments_label").after(final_cmt);
			alert("Your comment was added! However,..it will soon disappear because there is no database!");
		}
		else
		{
			alert("Please put something in the comment!");
		}
	});

	$("#bt_upvote").click(function(){
		var num_votes = parseInt($("#bd_num_votes").text());
		$("#bd_num_votes").text((num_votes+1).toString());
	});
});