

	/*	Position the Video based on Browser size
	---------------------------------------------------------------------- */
	function setUIDimensions(){
		var videoRatio = 1.78,
			clientHeight = document.documentElement.clientHeight,
			clientWidth = document.documentElement.clientWidth;
		if( clientHeight > (clientWidth / videoRatio)){
			var videoHeight = clientHeight,
				videoWidth = clientHeight * videoRatio,
				marginLeft = -((videoWidth - clientWidth) / 2),
				marginTop = 0;
		} else {
			var videoHeight = clientWidth/ videoRatio,
				videoWidth = clientWidth,
				marginLeft = 0,
				marginTop = -((videoHeight - clientHeight) / 2);
		}
		$('video').css({
			'width': videoWidth, 
			'height': videoHeight,
			'margin-left': marginLeft,
			'margin-top': marginTop
		});	
	}
	
	window.addEventListener("resize", setUIDimensions, false);
	
	
	
	
	$(function(){
		setUIDimensions();
		
		
	
		/*	Event when video is ready to play
		---------------------------------------------------------------------- */
		$('video').on('canplay', function(){
			$('video')[0].play();
			$('div.mask').fadeOut(500);
			fadeInLaunch();
		});


	});
		

	
	function fadeInLaunch(){
		setTimeout(function(){				
			$('video').fadeOut(400, function(){
				$('div.intro').fadeIn(200);
			}); 
			
			$('div.logo.fading').addClass('end');
			setTimeout(function(){
				$('div.logo.final').fadeIn(300);
				$('div.logo.fading').fadeOut(300);
				$('a.launch').css('opacity', 1);
			}, 2500);
			
			$('a.skip').fadeOut(500);
		}, 10000);
	}