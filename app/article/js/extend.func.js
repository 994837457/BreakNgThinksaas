function recommend(articleid){
	$.post(siteUrl+'index.php?app=article&ac=recommend',{'articleid':articleid},function(rs){
		if(rs==0){
			art.dialog({
				content : '请登陆后再喜歡',
				time : 1000
			})
		}else if(rs == 1){
			art.dialog({
				content : '你已经喜歡过',
				time : 1000
			})
		}else if(rs == 2){
			art.dialog({
				content : '喜歡成功',
				time : 1000
			})
			window.location.reload()
		}
	})
}