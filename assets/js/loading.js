$(function(){
	//ページの読み込みが完了したらコンテナーを非表示
	$(window).on('load',function(){
    $(".loading_container").fadeOut("slow");  
		// $(".loading_container").removeClass("is-loading");
	});
	//ページの読み込みが完了してなくても3秒後にアニメーションを非表示にする
	setTimeout(function(){
		// $(".loading_container").removeClass("is-loading");
	},3000);
});
