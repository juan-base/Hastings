
$(function() {
	var fullWidth, fullHeight, cols, boxWidth, boxHeight, scrollbarWidth, posStart, posPractices, posIndividualPractice, posPorfolios, posIndividualPorfolio, oldScroll;
	var topBar_icon_width, topBar_icon_pos, sideNavWidth;

	function initVars() {
		$("#one,#four,#two,#three").scrollTop(0);

		fullWidth = $(window).width();
		fullHeight = $(window).height();
		cols = $(".main_column").length;
		boxWidth = parseInt(fullWidth / 4, 10);
		boxHeight = parseInt(fullHeight * .45, 10);
        scrollbarWidth = 0; 
		posStart = -(fullWidth + boxWidth + scrollbarWidth);
		posPractices = -fullWidth + scrollbarWidth;
		posIndividualPractice =  + scrollbarWidth;
		posPorfolios = -(fullWidth + boxWidth*2 + scrollbarWidth);
		posIndividualPorfolio = -(fullWidth + boxWidth*6 + scrollbarWidth);	
		oldScroll = {"two":0,"three":0};

		topBar_icon_width = 30;
		topBar_icon_pos = boxWidth * 2;
        sideNavWidth =  70;
	}

	function init() {
		initVars();

		//console.log("fullHeight: " + fullHeight + "\nfullWidth: " + fullWidth + "\nboxWidth: " + boxWidth + "\nboxHeight: " + boxHeight + "\nposStart: " + posStart + "\nposPractices: " + posPractices + "\nposPorfolios: " + posPorfolios + "\nposIndividualPorfolio: " + posIndividualPorfolio);

		$("#one,#four").css({
			width: fullWidth,
		});

		$("#two,#three").css({
			width: boxWidth * 3,
		});

		$("#main_wrapper").css({
			width: ($("#one").width() * 2) + ($("#two").width() * 2),
			left: posStart
		});

		$(".portfolio-list-thumb").css({
			height: boxHeight + "px"
		})

		$(".portfolio-list-thumb img").load(function(){
			var img = $(this),
				div = img.parent(".portfolio-list-thumb"),
				imgHeigth = img.height(),
				imgWidth = img.width(),
				divHeigth = div.height(),
				divWidth = div.width();

			//console.log(img.attr("src") + "\ndiv width: " + divWidth + "\ndiv height: " + divHeigth + "\nimg width: " + imgWidth + "\nimg height: " + imgHeigth);
			//console.log(img.attr("src") + "\nimg height: " + imgHeigth + "\ndiv height: " + divHeigth);

			if (imgHeigth < divHeigth) {
				img.css({width: 'auto', height: '100%'})
			}
			if (imgWidth < divWidth) {
				img.css({width: '100%', height: 'auto'})
			}
			if (imgHeigth < divHeigth && imgWidth < divWidth) {
				img.css({width: '100%', height: '100%'})
			}
		})

		$(".portfolio-list-thumb").click(function(){
			// TODO: Get info from here, load the portfolio and go there
			moveToOpenPortfolio();
            showSideNav();
		})

		$(".practice-cell").hover(
			function() {
				$(this).addClass('orange');
			}, function() {
				$(this).removeClass('orange')
			}
		)

		$(".practice-cell").click(function(){
			// TODO: Get info from here, load the portfolio and go there
			moveToOpenPractice();
            showSideNav();
		})

		move_topBar_icon(topBar_icon_pos, 1);
		//console.log("#one,#four: " + fullWidth + "\n#two,#three: " + boxWidth * 3);

		$("#main-title img").load(function(){
			move_main_title();
		})
	}
    
    function initNavBar(){
//        console.log("Setting margin of the side nav;")
        $('#profile-nav').css('margin-left', fullWidth - sideNavWidth);
    }

	function initBtns() {
		$("#windowLeftBtn").click(function(){
			var pos = parseInt($("#main_wrapper").css("left"),10);
			//console.log(pos);
			if (pos == posStart) {
				moveToPractice()
			} else if (pos == posPractices) {
				moveToOpenPractice()
                //console.log("showing the side nav!")
                showSideNav();
			} else if (pos == posPorfolios) {
				moveToStart()
			} else if (pos == posIndividualPorfolio) {
				moveToPortfolio()
			} else if (pos == posIndividualPractice) {
				moveToPractice()
			}
		})

		$("#windowRightBtn").click(function(){
			var pos = parseInt($("#main_wrapper").css("left"),10);
			//console.log(pos);
			if (pos == posStart) {
				moveToPortfolio()
			} else if (pos == posPractices) {
				moveToStart()
			} else if (pos == posPorfolios) {
				moveToOpenPortfolio();
                //console.log("showing the side nav!");
                showSideNav();
			} else if (pos == posIndividualPorfolio) {
				moveToPortfolio()
			} else if (pos == posIndividualPractice) {
				moveToPractice()
			}
            
		})
        
        $("#project-nav").click(function(){
            moveToPortfolio();
            showTopNav();
            //console.log("hiding the side nav!");
            hideSideNav();
        })
        
        $("#profile-nav").click(function(){
            moveToPractice();
            showTopNav();
            //console.log("hiding the side nav!");
            hideSideNav();
        })

		$("#portfolioBtn").click(function(){
			//alert("portfolioBtn")
			moveToPortfolio();
		})

		$(".portfolioThumb").click(function(){
			openPortfolio();

		})

		$(".practiceThumb").click(function(){
			openPractice();
		})

	}

	function moveToStart() {
		$("#main_wrapper").animate({
			left: posStart
		}, 1500);
		move_topBar_icon(topBar_icon_pos);
		move_main_title(2);
	}

	function moveToPractice() {
		$("#main_wrapper").animate({
			left: posPractices
		}, 1500);
		move_topBar_icon(boxWidth * 3);
		move_main_title(3);
	}

	function moveToPortfolio() {
		$("#main_wrapper").animate({
			left: posPorfolios
		}, 1500);
		move_topBar_icon(boxWidth);
		move_main_title(1);
	}

	function moveToOpenPortfolio() {
		$("#main_wrapper").animate({
			left: posIndividualPorfolio
		}, 1000);
		move_topBar_icon(0, 500);
        hideTopNav();
	}

	function moveToOpenPractice() {
		$("#main_wrapper").animate({
			left: posIndividualPractice
		}, 1000);
		move_topBar_icon(fullWidth, 500);
        hideTopNav()
 	}

	function move_topBar_icon(pos, speed) {
		pos = pos - (topBar_icon_width / 2);
		speed = speed || 1500;

		$("#topNavBarIco").animate({
			marginLeft: pos
		}, speed);
        console.log(pos)
	}
    
	function move_main_title(cols) {
		var cols = cols || 2,
			smallHeaderHeight = $("#small-header").height(),
			mainTitleHeight = $("#main-title").height(),
			smallHeaderPadding = boxHeight - (mainTitleHeight / 2) - smallHeaderHeight;

		//console.log(smallHeaderHeight + " :: " + mainTitleHeight + " :: " + smallHeaderPadding)

		$("#main-title").css({
			paddingTop: smallHeaderPadding,
			paddingBottom: smallHeaderPadding
		})

		if (cols == 3) {
			// col-sm-8 col-sm-offset-2
			marginLeft = "5.667%";
			width = "88.667%";
		} else if (cols == 2) {
			// col-sm-6 col-sm-offset-5
			marginLeft = "37.667%";
			width = "57%";
		} else if (cols == 1) {
			// col-sm-4 col-sm-offset-8
			marginLeft = "69.667%";
			width = "28.333%";
		}

		$("#main-title, #small-header").animate({
			marginLeft: marginLeft,
			width: width
		}, 1000);
	}
    
    function hideTopNav() {
        //console.log("hiding the top nav");
        $("#navbar").fadeOut(500);
    }
    
    function showTopNav(){
        //console.log("showing the navbar again!");
        $("#navbar").fadeIn(500);
    }
    
    function hideSideNav(){
        $(".side-nav").fadeOut(500);
    }
    
    function showSideNav(){
        $(".side-nav").delay(1000).fadeIn(500);
        console.log("setting margin");
        $('#profile-nav').css('margin-left', fullWidth - 70);
    }

	function openPortfolio() {
		moveToOpenPortfolio()
	}

	function openPractice() {
		moveToOpenPractice()
	}

	function initScroll() {

		$("#two,#three").mouseover(function(){
			$("#two,#three").unbind("scroll");

			$(this).scroll(function(){
				var id = $(this).attr("id"),
					step = $(this).scrollTop() - oldScroll[id],
					direction = step > 0 ? "DOWN" : "UP";
				//console.log(oldScroll[id] + " :: " + $(this).scrollTop() + " :: " + step + " :: " + direction);
				slowScrollmain_column(id=="two"?"three":"two", step)
				oldScroll[id] = $(this).scrollTop();
                navbar();
			})
		}).mouseleave(function(){
			$("#two,#three").unbind("scroll")
		})
        
        

	}
    
    function practiceBtns(){
        $(".poverlay").onmouseover(function(){
            $(this).fadeIn(500);
        })
    }
    
    function navbar(){
        var posToShow = 200;
			twoPos = $("#two").scrollTop(),
            threePos = $("#three").scrollTop();
       
		//console.log("=> " + twoPos + " :: " + threePos);
        if (twoPos > posToShow || threePos > posToShow) {
            if (twoPos == 0 || threePos == 0) {
                $('#navbar').fadeOut(500);
            } else {
                $('#navbar').fadeIn(500);                
            }
        } else {
//            console.log("Ops")
            $('#navbar').fadeOut(500);
        }
        
    }
    
    
//    function hideNab(){
//        if ( $(window).width == $('#two')){
//            console.log("this works");
//        }
//    }

	function slowScrollmain_column(id, steps) {
		//console.log("slowing moving :: " + id + " :: " + steps);

		$("#"+id).animate({
			 scrollTop: $("#"+id).scrollTop() + (steps/2)
		}, 1, function() {
			// Animation complete.
		});
	}
    
    function loadScreen(){
        $(".loading").delay(2000).fadeOut(500);
    }

	function start() {
		init();
		initBtns();
		initScroll();
        loadScreen();
	}

	/*
	$(window).resize(function() {
		start();
	});
	*/

	start();

	
});