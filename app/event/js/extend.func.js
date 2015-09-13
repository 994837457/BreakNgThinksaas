

//取消参加活动
function cancelEvent(eventid){
	
	if (confirm('确定不去吗？')) {

		$.ajax({
			type: "POST",
			url: siteUrl+"index.php?app=event&ac=do&ts=cancel",
			data: "eventid="+eventid,
			beforeSend:function(){
			},
			success:function(result){
				if(result == '1'){
					window.location.reload(); 
				}
			}
		});

	}

}

//参加互动填写表单
function doEventForm(userid){
	
	if(userid==0){
		tsNotice('请登录后再操作！');
	}else{
	
		var content = $("#do_event_form").html();
		tsNotice(content);
	}
}