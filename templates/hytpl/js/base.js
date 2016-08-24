/**
 * Created by ly on 2015/6/6.
 */
var PANDUOLA = {};
PANDUOLA.ly = {
	init:function(){
		var a = this;
		a.navAnimate();
		a.windowScroll();
		a.musicSet();
		$(".slider").length > 0 && a.indexSet();
		$(".visual-buttons").length > 0 && a.fancyboxSet();
		$("#gotop").click(function(){
			$("html,body").animate({scrollTop:0});
			return false;
		});
		$(".weixin").fancybox({
			padding:0
		});
	},
	navAnimate:function(){
		var $a = $("#nav li a");
		$a.eq(0).animate({left:0,opacity:1},800);
		setTimeout(function(){
			$a.eq(1).animate({left:0,opacity:1},800);
			setTimeout(function(){
				$a.eq(2).animate({left:0,opacity:1},800);
				setTimeout(function(){
					$a.eq(3).animate({left:0,opacity:1},800);
					setTimeout(function(){
						$a.eq(4).animate({left:0,opacity:1},800);
						setTimeout(function(){
							$a.eq(5).animate({left:0,opacity:1},800);
						},100);
					},100);
				},100);
			},100);
		},100);
	},
	windowScroll:function(){
		var $pl = $(".pageleft"),
			$music = $(".music"),
			t = $pl.offset().top;
		$(window).scroll(function(){
			var h = $(window).scrollTop();
			if(h > t){
				$pl.stop().animate({marginTop:h - 45},800);
				$music.stop().animate({marginTop:h - 45},800);
			}else{
				$pl.stop().animate({marginTop:0},800);
				$music.stop().animate({marginTop:0},800);
			}
		});
	},
	musicSet:function(){
		var $music = $(".music"),
			$audio = document.getElementById("audio");
		$("#musicBtn").click(function(){
			if($audio.paused){
				$music.removeClass("off");
				$audio.play();
				$(this).text("ON");
				return false;
			}
			$music.addClass("off");
			$audio.pause();
			$(this).text("OFF");
			return false;
		});
	},
	indexSet:function(){
		$(".slider").flexslider({
			prevText:"<",
			nextText:">"
		});
	},
	fancyboxSet:function(){
		$(".visual-buttons").fancybox({
			helpers:{
				title:{
					type:"inside"
				}
			},
			afterLoad:function() {
				this.title = "Image " + (this.index + 1) + " of " + this.group.length + (this.title ? " - " + this.title : "");
			}
		});
	}
},$(function(){PANDUOLA.ly.init();});