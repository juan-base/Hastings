// 
// ROUTER: https://github.com/krasimir/navigo


var fullWidth, fullHeight, practice_cols, curr_practice_cols, practice_imgs_loaded, boxWidth, boxHeight, scrollbarWidth, posStart, posPractices, posIndividualPractice, posPorfolios, posIndividualPorfolio;//, oldScroll;
var topBar_icon_width, topBar_icon_pos, mainSiteIcoWidth;
var last_main_wrapper_pos, curr_main_wrapper_pos, scroll_animate_flag;
var topNavTimerTimeOut, topNavTimer, top_nav_flag, overlay, overlay_timer;
var portfolio_qty, filterClicked, currPortfolioFilter, currPracticeFilter;
var forcedScroll, autoScroll, scrolling, startScrollHelper, firstVisible;
var scrollableHeight;
var practiceBottomMargin, preactice_header_height;

var practicePaddingLeft, velocidad, milliseconds, practiceTmp;
var footerHeight, viewingSinglePractice, viewingSinglePortfolio;

var outsidePos;

initVars = function() {
	$("#one,#four,#two,#three").scrollTop(0);

	fullWidth = $(window).width();
	fullHeight = $(window).height();
	boxWidth = Math.floor(fullWidth / 4);
	//boxHeight = parseInt(fullHeight * .45, 10);
	boxHeight = parseInt(fullHeight / 2, 10);
	scrollbarWidth = 0; 
	posStart = -(fullWidth + boxWidth + scrollbarWidth);
	posPractices = -fullWidth + scrollbarWidth;
	posIndividualPractice =  + scrollbarWidth;
	posPorfolios = -(fullWidth + boxWidth*2 + scrollbarWidth);
	posIndividualPorfolio = -(fullWidth + boxWidth*6 + scrollbarWidth);	
	oldScroll = {"two":0,"three":0};

	velocidad = 1500;
	milliseconds = velocidad;
	practiceTmp = "article";
	footerHeight = $("#footer").outerHeight();
	practiceBottomMargin = 175;
	topBar_icon_width = 55;
	topBar_icon_pos = boxWidth * 2;
	mainSiteIcoWidth =  54;
	scrolling = false;
	topNavTimer = 2000;

	currPortfolioFilter = "";
	currPracticeFilter = "";
	filterClicked = false;
	startScrollHelper = true; //false;
	practiceHeaderHeight = [0,parseInt(boxHeight/2,10),fullHeight,fullHeight];
	scrollableHeight = [];
	firstVisible = [];
	autoScroll = true;
	viewingSinglePractice = false;
	viewingSinglePortfolio = false;

	topNavPadding = getWidthPixels(36);
	practiceSidePadding = topNavPadding;
	practiceCellPadding = topNavPadding;

	outsidePos = {
		practice : {
			"1": {top:-fullHeight/2,left:0},
			"2": {top:-fullHeight/2,left:boxWidth},
			"3": {top:-fullHeight/2,left:boxWidth*2},
			"4": {top:0,left:-boxWidth},
			"5": {top:boxHeight,left:-boxWidth},
			"6": {top:fullHeight,left:boxWidth*2},
			"7": {top:fullHeight,left:boxWidth},
			"8": {top:fullHeight,left:0}
		},
		portfolio : {
			"1": {top:-boxHeight,left:0},
			"2": {top:-boxHeight,left:boxWidth},
			"3": {top:-boxHeight,left:boxWidth*2},
			"4": {top:0,left:boxWidth*3},
			"5": {top:boxHeight,left:boxWidth*3},
			"6": {top:fullHeight,left:boxWidth*2},
			"7": {top:fullHeight,left:boxWidth},
			"8": {top:fullHeight,left:0}		
		}
	}
}

getWidthPixels = function(pixels) {
	// Pixels based on 1280 wide screen. 
	return (fullWidth * pixels) / 1280;
}

getHeightPixels = function(pixels) {
	// Pixels based on 768 height screen. 
	return (fullHeight * pixels) / 768;
}

init = function() {
	initVars();

	console.log("fullHeight: " + fullHeight + "\nfullWidth: " + fullWidth + "\nboxWidth: " + boxWidth + "\nboxHeight: " + boxHeight + "\nposStart: " + posStart + "\nposPractices: " + posPractices + "\nposPorfolios: " + posPorfolios + "\nposIndividualPorfolio: " + posIndividualPorfolio + "\npracticeHeaderHeight: ", practiceHeaderHeight);

	var pBoxWidth = parseInt(boxWidth - 20/3, 10),
		pBoxHeight = parseInt(boxHeight * 1.5, 10);

	var cnt = 0, col = 1;

	$("#one,#four").css({
		width: fullWidth,
	});

	$("#two,#three").css({
		width: boxWidth * 3,
	});

	//var offsetWidth = $("#two")[0].offsetWidth
	//console.log("offsetWidth: " + offsetWidth + " == " + (boxWidth * 3))

	$("#main_wrapper").css({
		width: ($("#one").width() * 2) + ($("#two").width() * 2),
		left: posStart
	});

	var lipsum = [
		"Lorem ipsum dolor sit amet, consectetur adipiscing elit",
		"Sed ut perspiciatis unde omnis iste natus error sit voluptatem",
		"Quis autem vel eum iure reprehenderit",
		"Nunc id venenatis, erat velit lectus, faucibus vivamus lorem",
		"Felis suspendisse cursus nibh egestas nec"
	];

	cnt = 0;
	$(".portfolio-box").each(function(){
		var b = $(this);
		++cnt;
		b.css({
			width: boxWidth * (b.hasClass("portfolio-single")?1:2),
			height: boxHeight
		});
		b.attr({
			id: "portfolio-box-"+cnt,
			"data-width": parseInt(b.css("width"),10),
			"data-height": parseInt(b.css("height"),10),
		});

		//b.find(".text").text(lipsum[Math.floor((Math.random() * 5))])
		b.find(".text").text(cnt)
	})
	portfolio_qty = cnt;

	$(".portfolio-list-thumb img").load(function(){
		var img = $(this),
			div = img.parent(".portfolio-list-thumb"),
			box = div.parent(".portfolio-box"),
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
		if (img.height() < box.height()) {
			img.height(box.height())
		}
	})

	$(".portfolio-box, .portfolio-box .overlay").mouseover(function(){
		clearTimeout(overlay_timer);

		overlay = $(this).find(".overlay");
	
		overlay_timer = setTimeout(function() { 
			$(".portfolio-box .overlay").css("opacity","0");
			overlay.css("opacity","1"); 
		}, 500);
	}).mouseleave(function() {
		clearTimeout(overlay_timer);
		$(".portfolio-box .overlay").css("opacity","0");
	})

	cnt = 0;
	$(".practice-box").each(function(){
		var b = $(this);
		++cnt;
		b.attr({
			id: "practice-box-"+cnt
		});
	})

	$(".practice-cell").css({
		paddingLeft: practiceCellPadding,
		paddingRight: practiceCellPadding
	})

	practice_imgs_loaded = $(".practice-box .practice-img-container img").length;
	//console.log("******** practice_imgs_loaded: "+ practice_imgs_loaded)
	$(".practice-box .practice-img-container img").load(function(){
		var b = $(this).parent(".practice-box");
		b.css({
			width: pBoxWidth + "px", // boxWidth + "px",
			height: b.height(), // pBoxHeight + "px",
		});
		if (--practice_imgs_loaded == 0) {
			setThumbs(curr_practice_cols, 4-curr_practice_cols)
		}
	})

	//$(".portfolio-list-thumb").click(function(){
	$(".portfolio-box").click(function(){
		// TODO: Get info from here, load the portfolio and go there
		checkStartScrolling();
		openPortfolio();
	})

	$(".practice-box").click(function(){
		// TODO: Get info from here, load the portfolio and go there
		setTestPracticeTmpl($(this)); // ONLY FOR TESTING. REMOVE THIS WHEN REAL
		openPractice();
	})

	move_topBar_icon(topBar_icon_pos, 1);

	$("#navbar .box").css({
		paddingLeft: topNavPadding,
		paddingRight: topNavPadding
	})

	$("#main-header").css({
		overflow: "hidden",
		height:practiceHeaderHeight[2], // Home position
		paddingRight: practiceSidePadding
	})

	$("#image-header img").load(function(){
		setMainHeaderImg();
	})

	setThumbs(2, 2)
	
	init_navigation();

	hideFooter();

}

setTestPracticeTmpl = function(ele) {
	var practiceTmp = ele.attr("data-tmpl");
	$(".individual_test").hide();
	$("#"+practiceTmp+"_test").show();
}

setMainHeaderImg = function() {
	var img = $("#image-header img");

	img.css({
		//transition: "all "+(milliseconds/3)+"ms ease-in-out",
		paddingTop: boxHeight - (img.height()/2) - $("#text-header").outerHeight(),
	})
}

showMainIcon = function(letter) {
	//letter = "H"; // Keep always the H
	//console.log("letter " + letter)

	$("#mainSiteIco .letter div").hide();
	$("#mainSiteIco .letter ."+letter).show();	
}

init_navigation = function() {
	/*
	$("#mainSiteIco .letter").click(function(){
		moveToStart();
	});


	$("#mainSiteIco").mouseover(function() {
		showMainIcon("I");
		showTopNav();
	}).mouseleave(function() {
		showMainIcon("H");
		hideTopNav();
	})

	$('#navbar').mouseover(function(){
		showMainIcon("arrowUp");
		showTopNav();
	}).mouseleave(function() {
		topNavTimerTimeOut = setTimeout(function(){ 
			hideTopNav();
		}, topNavTimer);
	})
	
	*/

	$("#mainSiteIco").mouseover(function() {
		if (viewingSinglePractice || viewingSinglePortfolio) {
			showMainIcon("I");
		}
	}).mouseleave(function() {
		if (viewingSinglePractice || viewingSinglePortfolio) {
			showMainIcon("H");
		}
	})

	$(".practice-filter").click(function(){
		var category = $(this).attr("rel"),
			id = $(this).parent().attr("id");

		//console.log(filterClicked, currPracticeFilter, id)

		if (!filterClicked && currPracticeFilter != id) {
			filterClicked = true;
			hideFooter();
			currPracticeFilter = id;
			showMainIcon("H");
			backupCurrentPositions();
			animatePracticeClickedFilter(id);
			filterSection(category, 'practice');
		}
	})

	$(".portfolio-filter").click(function(){
		var category = $(this).attr("rel"),
			id = $(this).parent().attr("id");

		//console.log(filterClicked, currPortfolioFilter, id)
		
		if (!filterClicked && currPortfolioFilter != id) {
			filterClicked = true;
			hideFooter();
			currPortfolioFilter = id;
			showMainIcon("H");
			backupCurrentPositions();
			animatePortfolioClickedFilter(id);
			filterSection(category, 'portfolio');
		}
	})

	$("#mainSiteIco .letter .H").mouseover(function(){
		showMainIcon("arrowUp");
		showTopNav();
	})
		
	$("#mainSiteIco .letter .arrowUp").click(function(){
		goToTop();
	});

	$("#contact-logo").click(function(){
		backFromSingle(viewingSinglePractice?"practice":"portfolio");
		goToTop();

		setTimeout(function(){ 
			// Make sure all is reseted 
			milliseconds = 0;
			goToTop();
			milliseconds = velocidad;
		}, milliseconds);

		
	});

	$("#mainSiteIco .letter .I").click(function(){
		slideContactMenu(1);
	});

	$("#contact-menu").css({
		top: -$(this).outerHeight(),
	}).show().find(".exit-container").click(function(){
		slideContactMenu(0);
	});

	$("#portfolio-sidebar,#practice-sidebar").css({
		top: -53,
	}).click(function(){
		backFromSingle($(this)[0].id == "practice-sidebar"?"practice":"portfolio");
	}).find("div").css({
		top: -$("#mainSiteIco").outerHeight(),
		height: "100vh" // fullHeight
	})

	$("#goToPractice").click(function(){
		backFromSingle("practice");
	})

	$("#goToPortfolio").click(function(){
		backFromSingle("portfolio");
	})

	$("#search-icon-practice img").click(function(){
		searchFilters("practice");
	});

	$("#search-icon-portfolio img").click(function(){
		searchFilters("portfolio");
	});
}

backFromSingle = function(sidebar) {
	$("#practice-sidebar,#portfolio-sidebar").unbind("mouseenter").unbind("mouseleave");

	$("#four video").each(function(){ $(this)[0].pause() })

	hideContactMenu();
	viewingSinglePractice = false;
	viewingSinglePortfolio = false;
	hideSideBar("practice");
	hideSideBar("portfolio");

	if (sidebar == "practice") {
		moveToPractice();
		//moveMainWrapper(posPractices);
	} else {
		moveToPortfolio();
		//moveMainWrapper(posPorfolios);
	}
}

animatePracticeClickedFilter = function(id) {
	var ele = $("#"+id),
		posEle = ele.offset(),
		pos = -posEle.left, // MOVE TO THE LEFT
		close = $('<img id="closePracticeFilter" class="closeFilter" src="'+stylesheet_directory+'img/symbol-x.svg">');

	//console.log(id, posEle.left, pos);

	ele.css({
		transition: "left "+milliseconds+"ms ease-in-out",
		left: pos,
		paddingLeft: topNavPadding,
		zIndex: 1,
	})
	setTimeout(function(){ 
		ele.append(close);
	}, milliseconds);

	$("#practice-filters div:not(#"+id+")").css({
		transition: "opacity 200ms ease-in-out",
		opacity: 0
	}) 

	close.click(function(){
		closeFilter('practice')
	})
}

animatePortfolioClickedFilter = function(id) {
	var ele = $("#"+id),
		posWrapper = $("#portfolioNav .topFiltersWrapper").position(),
		posEle = ele.position(),
		//pos = -(posWrapper.left + posEle.left) + boxWidth + topNavPadding*1.5, // MOVE TO THE LEFT
		pos = (fullWidth - ele.outerWidth()) - (posWrapper.left + posEle.left) - topNavPadding, // MOVE TO THE RIGHT
		close = $('<img id="closePortfolioFilter" class="closeFilter" src="'+stylesheet_directory+'img/symbol-x.svg">');

	//console.log(id, posWrapper.left, posEle.left, boxWidth, pos);

	ele.css({
		transition: "left "+milliseconds+"ms ease-in-out",
		left: pos,
		zIndex: 1,
	})
	setTimeout(function(){ 
		ele.append(close);
	}, milliseconds);

	$("#portfolio-filters div:not(#"+id+")").css({
		transition: "opacity 200ms ease-in-out",
		opacity: 0
	}) 

	close.click(function(){
		closeFilter('portfolio');
	})

}

searchFilters = function(section) {

	filterClicked = true;

	$("#"+section+"-filters div:not(#search-icon-"+section+")").css({
		transition: "",
		opacity: 0
	})

	var search = $("#search-icon-"+section),
		searchImg = search.find("img"),
		searchInput = $('<input type="search" placeholder="   Search" class="searchInput">');

	searchInput.keyup(function(event){
		event.preventDefault();
		if (event.keyCode === 13) {
			//console.log("Run Search");
			makeSearch(section);
		}		
	});

	search.unbind("click");
	searchImg.unbind("click");

	searchImg.attr("src",stylesheet_directory+"img/symbol-x.svg")
	searchImg.click(function(){
		closeFilter(section);
	});

	search.append(searchInput);
	searchInput.focus();

	if (section=="practice") {
		search.css({
			left: 155,
			zIndex: 9,
		})
	}

}

makeSearch = function(section) {

	var category = "search"; //$("#search-icon-"+section+" input").val();

	filterClicked = true;
	hideFooter();
	//currPracticeFilter
	showMainIcon("H");
	backupCurrentPositions();
	filterSection(category, section);

}

closeFilter = function(section) {

	//console.log("closeFilter", section, "currPracticeFilter", currPracticeFilter, "currPortfolioFilter", currPortfolioFilter)

	var id = section=="practice" ? currPracticeFilter : currPortfolioFilter,
		wait = milliseconds / 2;

	if (id == "") {
		// In case the search icon is clicked, the current filter is empty so put and X just to avoid erors
		id = "X"; 
		wait = 0;
	}

	var ele = $("#"+id);

	filterClicked = false;

	if (section=="practice") {
		currPracticeFilter = "";
		$("#closePracticeFilter").remove();
	} else {
		currPortfolioFilter = "";
		$("#closePortfolioFilter").remove();
	}

	ele.css({
		transition: "left "+milliseconds/2+"ms ease-in-out",
		left: 0
	})

	setTimeout(function(){ 
		$("#"+section+"-filters div:not(#"+id+")").css({
			transition: "opacity "+(milliseconds/3)+"ms ease-in-out",
			opacity: 1
		})
	}, wait);


	$("."+section+"-box").css({
		transition: "",
		//opacity: 1,
		zIndex: "auto",
	});

	var search = $("#search-icon-"+section),
		searchImg = search.find("img"),
		searchInput = search.find("input");

	search.unbind("click");
	searchImg.unbind("click");

	searchImg.attr("src",stylesheet_directory+"img/symbol-search.svg");

	searchImg.click(function(){
		searchFilters(section);
	});

	searchInput.remove();

	if (section=="practice") {
		$(".practice-box").css({
			paddingLeft: "",
		});
		search.css({
			left: "auto",
			zIndex: "auto",
		})
	}

	moveBackToPosition(section);

}

initBtns = function() {
	$("#windowLeftBtn").click(function(){
		var pos = parseInt($("#main_wrapper").css("left"),10);

		//console.log(pos);
		//console.log($("#main_wrapper").css("transform"))
		if (pos == posStart) {
			moveToPractice()
		} else if (pos == posPractices) {

		} else if (pos == posPorfolios) {
			moveToPractice()
			//moveToStart()
		} else if (pos == posIndividualPorfolio) {
			moveToPortfolio()
		} else if (pos == posIndividualPractice) {
			moveToPractice()
		}
	})

	$("#windowRightBtn").click(function(){
		var pos = parseInt($("#main_wrapper").css("left"),10);

		//console.log(pos);
		//console.log($("#main_wrapper").css("transform"))
		if (pos == posStart) {
			moveToPortfolio()
		} else if (pos == posPractices) {
			moveToPortfolio()
			//moveToStart()
		} else if (pos == posPorfolios) {

		} else if (pos == posIndividualPorfolio) {
			moveToPortfolio()
		} else if (pos == posIndividualPractice) {
			moveToPractice()
		}
	})


}

moveMainWrapper = function(left) {
	$("#main_wrapper").css({
		transition: "left "+milliseconds+"ms ease-in-out",
		left: left
	})
}

moveScrollCoverCenter = function(cols) {
	$("#scrollCoverCenter").css({
		transition: "left "+milliseconds+"ms ease-in-out",
		left: (fullWidth * 2) - boxWidth - 20
	})		
}

setThumbs = function(practiceMax, portfolioMax) {

	showWindowCover();

	var practiceList = $("#practice-list"),
		portfolioList = $("#portfolio-list");

	if (practiceMax==portfolioMax || (practiceList.attr("data-cols")!=practiceMax && portfolioList.attr("data-cols")!=portfolioMax)) {

		practiceList.attr("data-cols",practiceMax)
		portfolioList.attr("data-cols",portfolioMax)

		if (startScrollHelper) {
			prepareThumbsHelper("two");
			prepareThumbsHelper("three");
		}

		setPracticeThumbs(practiceMax);
		setPortfolioThumbs(portfolioMax);

		movePracticeThumbs(practiceMax);
		movePortfolioThumbs(portfolioMax);

	}

	setTopNavView("practice", practiceMax);
	setTopNavView("portfolio", portfolioMax);
}

setTopNavView = function(section, max) {
	showMainIcon("H");

	$("."+section+"-filters").hide();

	$(".cell."+section).css({
		width: (25 * max) + "%"
	})

	setTimeout(function(){ 
		$("."+section+"-filters-"+max+"col").show();
		//setMainHeaderImg();
	}, milliseconds);
	
}

setPracticeThumbs = function(cols) {
	var col = 0, r = 0,
		getColNum = function(cnt, cols) {
			var c = cnt % cols;
			return c==0 ? cols : c;
		};

	$(".practice-box").each(function(){
		var b = $(this),
			c = getColNum(++col, cols);

		if (c==1) ++r;
		b.attr({
			"data-col": c,
			"data-row": r
		});
	})

	scrollableHeight["two"] = getRowHeights(r, cols, "practice", practiceBottomMargin) + $(".practice-box").last().height() + practiceHeaderHeight[cols] + footerHeight*2;
	$("#two .main_content").css("height",scrollableHeight["two"]);

}

setPortfolioThumbs = function(max, selector) {
	//return true;

	//console.log("portfolio_qty: " + portfolio_qty);

	var ID = typeof selector=="undefined" ? "" : selector;

	$(ID + ".portfolio-box").removeAttr("data-row").removeAttr("data-col");

	var col = 0, row = 0;

	var findSingle = function(col, row, b) {
		var n = b.next(".portfolio-single");
		if (n.length == 1) {
			//console.log("hueco id: " + n[0].id)
			n.attr({
				"data-col": col,
				"data-row": row
			});
		}
	}

	var getColNum = function(b) {
			var c = ++col % max;
			col = c==0 ? max : c;
			row += col==1 ? 1 : 0;

			if (b.hasClass("portfolio-double") && col == max && col > 1) {
				//console.log("Hueco Col: " + col + " row: " + row )
				findSingle(col, row, b)
				col = 1;
				++row;
			}

		};

	var b = null;
	$(ID + ".portfolio-box").each(function(){
		b = $(this);

		if (typeof b.attr("data-col") == "undefined") {
			getColNum(b);
			//console.log(b.attr("id"), " :: ", row, col, b.hasClass("portfolio-double")?"Double":"Single");

			b.attr({
				"data-col": col,
				"data-row": row
			});

			if (b.hasClass("portfolio-double")) {
				++col;
			}
		}
	})


	var h = $(ID + ".portfolio-box").last().height();
	scrollableHeight["three"] = parseInt(getRowHeights(row, max, "portfolio", 0) + (b.hasClass("portfolio-double") && max==1 ? h/2 : h), 10) + footerHeight;
	$("#three .main_content").css("height", scrollableHeight["three"]);

	//console.log("portfolio_height new: " + scrollableHeight["three"]);

}

movePortfolioThumbs = function(max) {

	moveThumbs("three", max);

}

getRowHeights = function(row, max, section, bottomMargin) {
	//console.log("\nGetting row: " + row);
	
	var heights = [];

	for (var r=1; r < row; ++r) {
		var height = 0;
		$('.'+section+'-box[data-row="'+r+'"]').each(function(){
			//console.log(section + " row "+r+": " + $(this)[0].id + " :: " + $(this).height());
			b = $(this);
			h = section=="portfolio" ? parseInt(b.attr("data-height"),10) : b.height();
			h = b.hasClass("portfolio-double") && max==1 ? h/2 : h;
			//h = b.height();
			height = h > height ? h : height;
		})
		heights.push(height + bottomMargin);
		//if (section == "practice") console.log("row "+r+" max: " + height, bottomMargin, " = ",height + bottomMargin);
	}

	var sum = heights.length > 0 ? heights.reduce(function(total, num){return total + num}) : 0;
	//console.log(heights, sum)

	return sum;
}

movePracticeThumbs = function(cols) {
	var pre_practice_cols = practice_cols;
	practice_cols = cols;

	moveMainHeader(cols);
	//moveIndividualPractice(cols, pre_practice_cols - practice_cols)

	if (cols == 1) {
		hidePracticeFilters();
	} else if (cols == 2) {
		hidePracticeFilters();
		hidePortfolioFilters();
	} else  {
		hidePortfolioFilters();
	}

	curr_practice_cols = practice_cols;
	//console.log("curr_practice_cols: " + curr_practice_cols);

	moveThumbs("two", cols);
	moveScrollCoverCenter(cols);
}

moveIndividualPractice = function(cols, direction) {
	//console.log("direction: " + direction);
	setTimeout(function(){ 
		$("#one").css({
			"left": (3 - cols) * boxWidth
		});
	}, direction < 0 ? 0 : 2000);
}

moveMainHeader = function(cols) {

	if (cols==1) {
		$("#image-header").fadeOut(500);
	} else {
		$("#image-header").fadeIn(500);
	}

	$("#main-header").css({
		transition: "all "+milliseconds+"ms ease-in-out",
		height: practiceHeaderHeight[cols],
		paddingLeft: ((3 - cols) * boxWidth) + practiceSidePadding,
		fontSize: cols==1 ? "16px" : "18px"
	})
	
}

goToTop = function() {
	moveToStart();
}

moveToStart = function() {
	//console.log("moveToStart")
	var wait = 0;
	
	if (filterClicked) {
		wait = milliseconds / 2;
		closeFilter(currPracticeFilter!=""?'practice':'portfolio');
	}

	setTimeout(function(){ 
		showMainHeader();
		moveMainWrapper(posStart);
		setThumbs(2, 2)
		move_topBar_icon(topBar_icon_pos);
	},  wait);

}

// ***** PRACTICE

moveToPractice = function() {
	var wait = 0;
	
	if (filterClicked) {
		wait = milliseconds / 2;
		closeFilter(currPracticeFilter!=""?'practice':'portfolio');
	}

	setTimeout(function(){ 
		showMainHeader();
	
		setThumbs(3, 1)

		moveMainWrapper(viewingSinglePractice ? posIndividualPractice : posPractices);
		move_topBar_icon(viewingSinglePractice ? fullWidth - topBar_icon_width/2 : boxWidth * 3);

	},  wait);

}

hidePracticeFilters = function() {
	//console.log("hidePracticeFilters");

	$("#filters-practice").hide();
	$("#search-toggle-practice").hide();
	$("#practice-search").hide();
	$("#windowLeftBtn").show();
}

moveToOpenPractice = function() {
	setTimeout(function(){ 
		hideFooter();
		showSideBar("practice");
	},  milliseconds);
}

// ***** PORTFOLIO

moveToPortfolio = function() {
	//console.log("moveToPortfolio")

	var wait = 0;
	
	if (filterClicked) {
		wait = milliseconds / 3;
		closeFilter(currPracticeFilter!=""?'practice':'portfolio');
	}

	setTimeout(function(){ 

		setThumbs(1, 3);

		moveMainWrapper(viewingSinglePortfolio ? posIndividualPorfolio : posPorfolios);
		move_topBar_icon(viewingSinglePortfolio ? topBar_icon_width/2 : boxWidth);

	},  wait);

}


resetPortfolioFilters = function() {
	//console.log("resetPortfolioFilters");

	$("#filters-portfolio").hide();
	$("#search-toggle-portfolio").hide();
	$("#portfolio-search").hide();
	$("#windowRightBtn").show();

	$("#search-toggle-portfolio").css("margin-left", fullWidth - 154);
	$("#filters-portfolio").css("margin-left", fullWidth/3);
}

hidePortfolioFilters = function() {
	//console.log("hidePortfolioFilters");

	$("#filters-portfolio").hide();

	$("#search-toggle-portfolio").css({
		transition: "all 1.0s ease-in-out",
		marginLeft: fullWidth - 154
	})

	setTimeout(function(){ 
		resetPortfolioFilters();
	}, 1000);
}

moveToOpenPortfolio = function() {
	setTimeout(function(){ 
		hideFooter();
		showSideBar("portfolio");
	},  milliseconds);
}

showSideBar = function(side) {

	var sidebar = $("#"+side+"-sidebar");

	sidebar.mouseenter(function() {
		var delay = "500ms";
		$("#main_wrapper").css({
			transition: "left "+delay+" ease-in-out",
			left: side=="portfolio" ? posIndividualPorfolio + mainSiteIcoWidth : posIndividualPractice - mainSiteIcoWidth,
		})
		$(this).css({
			transition: "left "+delay+" ease-in-out",
			left: side=="portfolio" ? 0 : fullWidth - mainSiteIcoWidth*3,
		})
	}).mouseleave(function() {
		var delay = "500ms";
		$("#main_wrapper").css({
			transition: "left "+delay+" ease-in-out",
			left: side=="portfolio" ? posIndividualPorfolio : posIndividualPractice,
		})
		$(this).css({
			transition: "left "+delay+" ease-in-out",
			left: side=="portfolio" ? -mainSiteIcoWidth : fullWidth - mainSiteIcoWidth*2
		})
	}).css({
		transition: "",
		display: "flex",
		left: side=="portfolio" ? -mainSiteIcoWidth : fullWidth - mainSiteIcoWidth*2,
		opacity: 0,
	})

	setTimeout(function(){ 
		sidebar.css({
			transition: "opacity "+milliseconds+"ms ease-in-out",
			opacity: 1,
		})
	},  300);

}

hideSideBar = function(side) {
	$("#"+side+"-sidebar").hide(300).css({
		transition: "left "+milliseconds+"ms ease-in-out",
		left: side=="portfolio" ? fullWidth*3 : 0,
	});
}

move_topBar_icon = function(pos, speed, plus) { 
	plus = plus || 0;
	left = (pos - (topBar_icon_width / 2)) + plus;
	speed = speed || milliseconds;

	$("#mainSiteIco").css({
		transition: "left "+speed+"ms ease-in-out",
		left: left
	});
}

openPractice = function() {
	if (!viewingSinglePractice) {
		viewingSinglePractice = true;

		$("#one").scrollTop(0);
		hideContactMenu();
		hideTopNav();
		hideFooter();
		moveToPractice();
		moveToOpenPractice();

		setTimeout(function(){ 
			hideFooter();
		},  milliseconds);
	}
}

openPortfolio = function() {
	if (!viewingSinglePortfolio) {
		viewingSinglePortfolio = true;

		$("#four").scrollTop(0);
		hideContactMenu();
		hideTopNav();
		hideFooter();
		moveToPortfolio();
		moveToOpenPortfolio();

		setTimeout(function(){ 
			hideFooter();
			$("#four video").each(function(){ $(this)[0].play() })
		},  milliseconds);
	}
}

initScroll = function() {
	top_nav_flag = 0;

	syncScroll();

	$("#two,#three").mousewheel(function(event) {
		setNavBar(event.deltaY>0?"UP":"DOWN");
	});
}

syncScroll = function() {
	// Sync up our elements.
	// Stolen from http://for-the-first-time-2.com/
	//console.log("*** syncScroll ***");

	var $el1 = $("#two");
	var $el2 = $("#three");

	// Lets us know when a scroll is organic
	// or forced from the synced element.
	forcedScroll = false;

	// Catch our elements' scroll events and
	// syncronize the related element.
	$("#two,#three").mouseover(function(){
		$("#two,#three").unbind("scroll");
			$el1.scroll(function() { performScroll($el1, $el2); });
			$el2.scroll(function() { performScroll($el2, $el1); });
	}).mouseleave(function(){
		$("#two,#three").unbind("scroll")
	})
};

checkStartScrolling = function() {
	if (filterClicked) {
		filterClicked = false;
		showMainHeader();
	}
}

performScroll = function($scrolled, $toScroll, doNothing) {
	var doNothing = typeof doNothing=="undefined" ? false : doNothing;
	// Perform the scroll of the synced element
	// based on the scrolled element.

	checkStartScrolling();

	if (forcedScroll) return (forcedScroll = false);

	var scrollTop = $scrolled.scrollTop(),
		scrollHeight = scrollableHeight[$scrolled[0].id], 
		outerHeight = $scrolled.outerHeight(),
		percent = (scrollTop / (scrollHeight - outerHeight)) * 100,
		footerPos = $scrolled[0].scrollHeight - $scrolled.scrollTop() - footerHeight;

	//console.log($scrolled[0].id,  "scrollTop: " + $scrolled.scrollTop(), "scrollHeight: " + $scrolled[0].scrollHeight, "outerHeight: " + $scrolled.outerHeight(), " = " + percent, "footerPos " + footerPos)


	footerTopPos(footerPos, viewingSinglePractice || viewingSinglePortfolio ? false : true);

	return setScrollTopFromPercent($toScroll, percent, doNothing);
}

setScrollTopFromPercent = function($el, percent, doNothing) {
	// Scroll to a position in the given
	// element based on a percent.

	var duration = 0;
		scrollHeight = scrollableHeight[$el[0].id], 
		outerHeight = $el.outerHeight(),
		scrollTopPos = (percent / 100) * (scrollHeight - outerHeight);

	forcedScroll = true;

	//console.log($el[0].id, "scrollHeight: " + $el[0].scrollHeight, "outerHeight: " + $el.outerHeight(), " = " + scrollTopPos)

	if (doNothing) {
		// do notihng
	} else {
		$el.scrollTop(scrollTopPos);
	}

	return scrollTopPos;
}

slideTopBar = function(flag, speed) {
	var speed = typeof speed=="undefined" ? 250 : 0;
	$("#navbar").css({
		transition: "top "+speed+"ms ease-in-out",
		top: flag==1 ? 0 : -70
	});

	if (flag==1) {
		$("#text-header").css("opacity","0")
	} else {
		$("#text-header").css("opacity","1")
	}
	/*
	if ($("#practice-list").attr("data-cols") == $("#portfolio-list").attr("data-cols")) {
		$("#practice-filters div, #portfolio-filters div").css({
			transition: "",
			opacity: 0
		})
	}
	*/
} 

showTopNav = function(timer) {
	if (viewingSinglePractice || viewingSinglePortfolio) {
		hideTopNav();
	} else {
		clearTimeout(topNavTimerTimeOut);
		slideTopBar(1);

		if (typeof timer!="undefined" && timer) {
			//topNavTimerTimeOut = setTimeout(function(){ hideTopNav(); }, topNavTimer);
		}
	}
}

hideTopNav = function() {
	clearTimeout(topNavTimerTimeOut);
	showMainIcon("H");
	slideTopBar(0);
	//topNavTimerTimeOut = setTimeout(function(){ slideTopBar(0); }, 500);
}

hideContactMenu = function() {
	$("#contact-menu").css({
		transition: "",
		top: -$("#contact-menu").outerHeight()
	});
	$("#one, #four").css({
		backgroundColor: "#FFFFFF"
	})
}

slideContactMenu = function(flag) {
	$("#contact-menu").css({
		transition: "top 300ms ease-out",
		top: flag==1 ? 0 : -$("#contact-menu").outerHeight()
	});

	$("#one, #four").css({
		backgroundColor: flag==1 ? "rgba(0,0,0,0.08)" : ""
	})

	$("#window_cover").css({
		display: flag==1 ? "block" : "none",
		zIndex: flag==1 ? "9" : "99999",
	}).click(function(){
		slideContactMenu(0);
	})

} 
// aqui
setNavBar = function(direction, changeMainIcon) {
	var changeMainIcon = changeMainIcon || true,
		showBar = false,
		posToShow = fullHeight / 2,
		currPos = $("#two").scrollTop(), 
		showBarAreaStart = currPos > posToShow,
		//showBarAreaStop = currPos < posToShow;
		showBarAreaStop = currPos < posToShow + fullHeight;; //currPos < posToShow + boxHeight;
   
	//console.log("=> " + currPos + " :: " + direction);

	if (!filterClicked && currPos < boxHeight) {
		if (viewingSinglePractice || viewingSinglePortfolio) {
			$("#mainSiteIco").show() 
		} else {
			$("#mainSiteIco").hide()
		}
	} else {
		$("#mainSiteIco").show() 

		if (filterClicked) {
			showBar = true;
		} else {
			if (direction == "UP") {
				if (changeMainIcon) {
					showMainIcon("arrowUp");
				}
				if (showBarAreaStart) {
					showBar = true;
				}
			} else {
				if (showBarAreaStart && showBarAreaStop) {
					console.log("x")
					showBar = true;
				}
			}
		}
	}

	if (showBar) {
		showTopNav(true);
	} else {
		hideTopNav();
	}
}

getThumbNextPos = function(b, section, max) {
	if (section == "two") {
		var r = b.attr("data-row"),
			c = b.attr("data-col"),
			top = getRowHeights(r, max, "practice", practiceBottomMargin),
			left = (c-1) * boxWidth + (boxWidth * (3-max)),
			args = {
				top: top, 
				left: left
			};
		
		return {
			args: args,
			row: r
		}
	}

	if (section == "three") {
		var r = b.attr("data-row"),
			c = b.attr("data-col"),
			w = b.attr("data-width"),
			h = b.attr("data-height"),
			top = getRowHeights(r, max, "portfolio", 0), 
			left = (c-1) * b.width(),
			width = b.hasClass("portfolio-double") && max==1 ? w/2 : w,
			height = b.hasClass("portfolio-double") && max==1 ? h/2 : h;

			// if (b.hasClass("portfolio-double")) { console.log(b.find(".text").text(), c, b.width(), boxWidth, left) }
			// HACK, NO IDEA WHY I HAD TO GET TO THIS FREAKING POINT. CANT BELIEVE I HAD TO DO THIS. ABOUVE SHOULD BE left = (c-1) * boxWidth BUT THAT SHIT DOES NOT WORK
			left = b.hasClass("portfolio-double") ? (c==1?0:boxWidth) : left; 

			args = {
				top: top,
				left: left,
				width: width,
				height: height,
			};
		/*
		if (b.find(".text").text()=="17") {
			console.log("b.width() : " + b.width(), boxWidth, c, left)
		}
		*/
		return {
			args: args,
			row: r
		}

	}
}

moveThumbs = function(section, max) {
	//console.log("moveThumbs", section, max)

	$("."+(section=="two"?"practice":"portfolio")+"-box").each(function(){
		var b = $(this),
			args = getThumbNextPos(b, section, max).args;

		b.css({transition: "all "+milliseconds+"ms ease-in-out"}).css(args);
	})

	if (startScrollHelper) {
		setHelper(section, max);
	}

}

setHelper = function(target, max) {
	//console.log("setHelper")
	var source = target=="two"?"three":"two",
		data_pos = getThumbNextPos(firstVisible[source], source, max);
		marginTopSource = {
			two: practiceHeaderHeight[4-max],
			three: 0
		},
		scrollTopSource = max==2 ? 0 : marginTopSource[source] + ( source=="two" ? data_pos.args.top : ((parseInt(data_pos.row,10)-1)*boxHeight) )

	//console.log(firstVisible[source][0].id, "source: " + source, data_pos, data_pos.row, boxHeight, "scrollTop: ", scrollTopSource)

	$("#"+source).scrollTop(scrollTopSource);

	moveHelper(target, source, 4-max, false);
	moveHelper(source, target, max, true);

}

moveHelper = function(source, target, max, sync) {
	var cnt = 0, newPosTarget = false, targetScrollTop = false,
		thumbsTarget = target=="two"?"practice":"portfolio",
		helperTarget = $("#"+target+"_helper"),
		toLeftTarget = target=="two" ?  -(boxWidth * (3-max)) : boxWidth * (4-max),
		toTopTarget = 0;
		marginTopTarget = {
			two: practiceHeaderHeight[max],
			three: 0
		}
	
	//console.log(max, " ===> ", source, target)

	if (viewingSinglePractice) {
		toLeftTarget += fullWidth;
	}
	if (viewingSinglePortfolio) {
		toLeftTarget -= fullWidth;
	}

	if (sync) {
		do {
			newPosTarget = performScroll($("#"+source), $("#"+target));
		} while (++cnt < 1000 && !newPosTarget);
	}

	if (!newPosTarget) {
		//console.log("What the hell!!!");
		newPosTarget = $("#"+target).scrollTop();
	}

	targetScrollTop = $("#"+target).scrollTop() * -1;
	toTopTarget = targetScrollTop + marginTopTarget[target];

	//console.log("A", newPosTarget, targetScrollTop, marginTopTarget[target], toTopTarget);
	//console.log("Animating scroll :: " + target, max, helperTarget.css("left"));
	//console.log("thumbsTarget :: ",thumbsTarget, max)

	helperTarget.css({
		transition: "all "+milliseconds+"ms ease-in-out",
		top: toTopTarget,
		left: toLeftTarget
	})

	setTimeout(function(){ 
		$("#"+thumbsTarget+"-thumbs").append($("#"+thumbsTarget+"-list"));
		helperTarget.hide();
		helperTarget.attr("style","");
	},  milliseconds);
}

prepareThumbsHelper = function(section, makeClone) {
	var makeClone = typeof makeClone == "undefined" ? false : makeClone,
		thumbs = section=="two"?"practice":"portfolio",
		target = $("#"+section),
		targetWidth = target[0].clientWidth,
		targetHeight = target[0].scrollHeight,
		targetPos = target.offset(),
		targetScrollTop = target.scrollTop() * -1,
		helper = $("#"+section+"_helper"),
		startTop = section=="two" ? $("#"+thumbs+"-thumbs").position().top : 0;

	firstVisible[section] = firstThumbVisible(thumbs, true);

	helper.css({
		// opacity: 0.5,
		position: "absolute",
		transition: "",
		// backgroundColor: "#808000",
		width: targetWidth,
		height: targetHeight,
		top: targetScrollTop + startTop,
		left: targetPos.left,
	})

	if (makeClone) {
		helper.append($("#"+thumbs+"-list").clone(true));
	} else {
		helper.append($("#"+thumbs+"-list"));
	}

	return helper;
}

firstThumbVisible = function(section, all, selector) {
	var ID = typeof selector == "undefined" ? "" : selector,
		all = typeof all == "undefined" ? true : all;
		cnt = 1,
		length = $(ID+"."+section+"-box").length,
		visible = $(ID+"#"+section+"-box-" + cnt);

	while (++cnt <= length) {
		var $box = $(ID+"#"+section+"-box-" + cnt),
			pos = $box.offset().top + (all ? 0 : $box.outerHeight());

		//console.log("firstThumbVisible", $box[0].id, "pos", all,  $box.offset().top, (all ? 0 : $box.outerHeight()), pos)

		if (pos > 0) {
			//console.log("firstThumbVisible", $box[0].id, "pos", all,  $box.offset().top, (all ? 0 : $box.outerHeight()), pos)
			visible = $box;
			break;
		}
	} 

	return visible;
}

lastThumbVisible = function(section, selector) {
	var ID = typeof selector == "undefined" ? "" : selector,
		length = $(ID+"."+section+"-box").length,
		visible = $(ID+"#"+section+"-box-" + length);

	while (--length > 0) {
		var $box = $(ID+"#"+section+"-box-" + length),
			pos = $box.offset().top;// + $box.outerHeight();

		//console.log($box[0].id, "last pos",  $box.offset().top, fullHeight)

		if (pos < fullHeight) {
			visible = $box;
			break;
		}

	} 

	return visible;
}

$(".getScrollData").click(function(){

	var section = $(this).attr("rel");

	prepareThumbsHelper(section);


})

showWindowCover = function() {
	scrolling = true;
	$("#window_cover").show()//.fadeIn(1000);
	setTimeout(function(){ 
		scrolling = false;
		$("#window_cover").hide()//fadeOut(500); 
		setNavBar("UP", false);
	}, milliseconds);
}

goToTopPortfolio = function(cols) {
	/*
	var speed = 5000;// milliseconds;

	// PREPRARE THE HELPER
	var helper = prepareThumbsHelper("three", true);
	helper.find("#portfolio-list").css({transition: ""})

	// FIND OUT THE VISIBLE ITEMS
	var first = firstThumbVisible("portfolio", false, "#portfolio-thumbs "),
		firstRow = parseInt(first.attr("data-row"), 10),
		firstTop = parseInt(first.css("top"), 10),
		firstID = parseInt(first.attr("id").replace("portfolio-box-",""), 10),
		last = lastThumbVisible("portfolio", "#portfolio-thumbs "),
		lastID = parseInt(last.attr("id").replace("portfolio-box-",""), 10);

	console.log("first :: ", firstID, firstRow);return;

	$("#three").scrollTop(1);

	if (firstRow <= 4) {

		console.log("A")
		
		moveHelperTop = -fullHeight; 

	} else {

		if (cols == 1) {
			var item3 = helper.find("#portfolio-box-3"),
				item3Top = parseInt(item3.css("top"), 10),
				item3Height = item3.outerHeight(),
				helperTop = parseInt(helper.css("top"), 10);
				//Gap = firstTop - (item3Top + item3Height);


			for (t=4; t < firstID; ++t) {
				helper.find("#portfolio-box-"+t).remove();
			}

			for (t=1; t <= 3; ++t) {
				var item = helper.find("#portfolio-box-"+t),
					itemTop = parseInt(item.css("top"), 10);
				item.css({
					transition: "",
					top: itemTop //+ Gap
				})
			}

			var item1offsetTop = helper.find("#portfolio-box-1").offset().top,
				moveHelperTop = helperTop + Math.abs(item1offsetTop);
		}

	}

	helper.css({
		transition: "all "+speed+"ms ease-in-out",
		top: moveHelperTop
	})

	setTimeout(function(){ 
		helper.find("#portfolio-list").remove();
		helper.hide().attr("style","");
	},  speed);
	*/
}

goToTopPractice = function(cols) {
	var speed = milliseconds;

	// PREPRARE THE HELPER
	var helper = prepareThumbsHelper("two", true);
	helper.find("#practice-list").css({transition: ""})

	// FIND OUT THE VISIBLE ITEMS
	var first = firstThumbVisible("practice", false, "#practice "),
		firstRow = parseInt(first.attr("data-row"), 10),
		firstTop = parseInt(first.css("top"), 10),
		firstID = parseInt(first.attr("id").replace("practice-box-",""), 10),
		last = lastThumbVisible("practice", "#practice "),
		lastID = parseInt(last.attr("id").replace("practice-box-",""), 10);

	//console.log("first :: ", firstID);

	$("#main-header").css({
		transition: "",
		opacity: 0
	})

	$("#two").scrollTop(1);

	if (firstRow <= 4) {
		
		moveHelperTop = practiceHeaderHeight[cols];

	} else {

		if (cols == 1) {
			var item3 = helper.find("#practice-box-3"),
				item3Top = parseInt(item3.css("top"), 10),
				item3Height = item3.outerHeight(),
				helperTop = parseInt(helper.css("top"), 10),
				Gap = firstTop - (item3Top + item3Height + practiceBottomMargin);


			for (t=4; t < firstID; ++t) {
				helper.find("#practice-box-"+t).remove();
			}

			for (t=1; t <= 3; ++t) {
				var item = helper.find("#practice-box-"+t),
					itemTop = parseInt(item.css("top"), 10);
				item.css({
					transition: "",
					top: itemTop + Gap
				})
			}

			var item1offsetTop = helper.find("#practice-box-1").offset().top,
				moveHelperTop = helperTop + Math.abs(item1offsetTop) + practiceHeaderHeight[cols];
		}

	}

	helper.css({
		transition: "all "+speed+"ms ease-in-out",
		top: moveHelperTop
	})

	setTimeout(function(){ 
		helper.find("#practice-list").remove();
		helper.hide().attr("style","");

		if (!filterClicked) {
			showMainHeader(speed);
		}

	},  speed);
}

showMainHeader = function(speed) {
	var speed = typeof speed=="undefined" ? milliseconds : speed;
	$("#main-header").css({
		transition: "all "+(speed*.5)+"ms ease-in-out",
		opacity: 1
	})	
}

prepareEmptyHelper = function(section, first, lastTop) {
	// SET UP A HELPER LAYER TO ANIMATE ITEMS INSIDE IT
	var block = section=="practice"?"#two":"#three",
		helper = $(block+"_helper");
		
	//console.log("firstTop: " + firstTop, first.offset().top);

	helper.css({
		backgroundColor: "white",
		transition: "",
		position: "absolute",
		top: first.offset().top,
		left: section=='practice' ? 0 : boxWidth,
		width: section=='practice' ? boxWidth * 3 - parseInt($("#practice-list").css("marginRight"), 10) : boxWidth * 3,
		height: lastTop + boxWidth*2,
		opacity: 1,
	});

	return helper;
}

filterSection = function(category, section) {
	console.log("filterPortfolio category : " + category);

	showWindowCover();
	
	if (section=="practice") {
		// nothing
	} else {
		goToTopPractice(1);
	}

	var block = section=="practice"?"#two":"#three";

	var speed = milliseconds;
	//var speed = 5000;

	// RESET PREVIEW SEARCH
	$("."+section+"-box").removeClass(section+"-visible").removeClass(section+"-selected").removeClass(section+"-in").removeClass(section+"-out").removeClass("animated");

	// FIND OUT THE VISIBLE ITEMS
	var first = firstThumbVisible(section, false),
		firstRow = parseInt(first.attr("data-row"), 10),
		firstTop = parseInt(first.css("top"), 10),
		last = lastThumbVisible(section),
		lastRow = last.attr("data-row"),
		lastTop = parseInt(last.css("top"), 10);

	$("."+section+"-box").each(function(){
		var box = $(this),
			row = parseInt(box.attr("data-row"), 10);

		if (row >= firstRow && row <= lastRow) {
			box.addClass(section+"-visible");
		}
	})

	// FIND OUT THE SELECTED ITEMS AND BRING THEM UP IN THE LIST
	var $selected = $("."+section+"-box[rel~='"+category+"']"),
		thumbnailList = $("#"+section+"-list");

	$selected.each(function(){
		var b = $(this);
		thumbnailList.prepend(b.addClass(section+"-selected"));
	})

	// RE-INDEXING
	var cnt = 0;
	$(block+" ."+section+"-box").each(function(){
		$(this).attr({ 
			id: section+"-box-" + ++cnt 
		})
	})

	// GETTING NEW ROWS AND COLS
	if (section=="practice") {
		setPracticeThumbs(3, "#two ");
	} else {
		setPortfolioThumbs(3, "#three ");	
	}

	var helper = prepareEmptyHelper(section, first, lastTop);

	// CLONE VISIBLE ITEMS OVER A HELPER DIV TO ONLY ANIMATE THOSE OUT
	$(block+" ."+section+"-box."+section+"-visible").each(function(){
		var clone = $(this).clone(true),
			cloneTop = parseInt(clone.css("top"), 10) - firstTop;
		//console.log("clone top: " + cloneTop);

		clone.css({ 
			top: cloneTop
		})
		
		if (!clone.hasClass(section+"-selected")) {
			// SALEN CON ANIMATION
			// TODOS LOS VISIBLES QUE NO SON SELECCIONADOS
			// AND WONT BE VISIBLE LATER
			var row = parseInt(clone.attr("data-row"), 10);

			if (row > 2) {
				clone.addClass(section+"-out");
			}
		}

		helper.append(clone);
	})

	// BEHIND THE HELPER REORGANIZE FINAL LIST OF ITEMS TO THEIR FINAL POSITION
	$(block+" ."+section+"-box").each(function(){
		var box = $(this),
			args = getThumbNextPos(box, "three", 3).args;
		box.css({transition: ""}).css(args)
	})

	//console.log("helper: " + parseInt(helper.css("top"),10))

	// DONT TAKE OUT THE ITEMS NOT SELECTED THAT ARE GONNA BE VISIBLE


	// ADD TO THE HELPER THE ITEMS THAT ARE GONNA BE VISIBLE
	$(block+" ."+section+"-box").each(function(){
		var box = $(this),
			row = parseInt(box.attr("data-row"), 10);

		if (!box.hasClass(section+"-visible") && row <= 2) {
			// VAN A ENTRAN ANIMATION
			// TODOS LOS QUE NO SON VISIBLES QUE SE VAN A VER
			var rnd = Math.floor((Math.random() * 8) + 1),
				top = outsidePos[section][rnd].top - parseInt(helper.css("top"),10),
				left = outsidePos[section][rnd].left;
			
			box.addClass(section+"-in");

			clone = box.clone(true).css({
				transition: "",
				top: top,
				left: left
			});

			//console.log(rnd + "=" + top + "," + left);

			helper.append(clone);
		}
	})

	// ANIMATE OUT
	helper.find("."+section+"-out").each(function(){
		var box = $(this),
			rnd = Math.floor((Math.random() * 4) + 1) + 4;

		box.addClass("animated").css({
			transition: "all "+speed+"ms ease-in-out",
			top: outsidePos[section][rnd].top - parseInt(helper.css("top"),10),
			left: outsidePos[section][rnd].left,
		})
	})

	// ANIMATE IN
	helper.find("."+section+"-in").each(function(){
		var box = $(this),
			args = getThumbNextPos(box, "three", 3).args;

		box.addClass("animated").css({transition: "all "+speed+"ms ease-in-out"}).css(args)
	})

	// ANIMATE REST OF VISIBLES
	helper.find("."+section+"-box").each(function(){
		var box = $(this);
		if (!box.hasClass("animated")) {
			box.addClass("animated").css({transition: "all "+speed+"ms ease-in-out"}).css(
				getThumbNextPos(box, "three", 3).args
			)
		}
	})

	// SET OPACITY TO THE ITEMS SELECTED AND NON-SELECTED
	$("."+section+"-box").css({transition: "all "+speed+"ms ease-in-out"});
	$("."+section+"-box").css({ opacity: 0.2 });
	$("."+section+"-selected").css({ opacity: 1 });


	// MOVE HELPER AND MAIN SCROLL TO THE TOP
	helper.css({
		transition: "all "+speed+"ms ease-in-out",
		top: section=="practice" ? $("#navbar").outerHeight() + practiceCellPadding : 0,
	});

	if (section=="practice") {
		var mainHeader = $("#main-header");
		mainHeader.css({
			transition: "all "+speed+"ms ease-in-out",
			top: -fullHeight
		});
	} else {
		$("#three").scrollTop(0);		
	}

	setTimeout(function(){ 

		if (section=="practice") {

			$("#two").scrollTop(practiceHeaderHeight[3] - $("#navbar").outerHeight() - practiceCellPadding);
			helper.find(".practice-box").remove();
			helper.hide().attr("style","");
			mainHeader.css({
				transition: "",
				top: 0
			});

		} else {

			helper.find("."+section+"-box").remove();
			helper.hide().attr("style","");	
			
		}

	},  speed);

	
}

backupCurrentPositions = function() {

	var sections = ['practice','portfolio'];

	sections.forEach(function(section) {
		var block = section=="practice"?"#two":"#three";

		// FIND OUT THE VISIBLE ITEMS
		var first = firstThumbVisible(section, false),
			firstRow = parseInt(first.attr("data-row"), 10),
			firstTop = parseInt(first.css("top"), 10),
			last = lastThumbVisible(section),
			lastRow = last.attr("data-row"),
			lastTop = parseInt(last.css("top"), 10);
		
		$("."+section+"-box").each(function(){
			var b = $(this),
				id = b.attr("id").replace(section+"-box-",""), // 0
				t = parseInt(b.css("top"), 10), // 1
				l = parseInt(b.css("left"), 10), // 2
				c = parseInt(b.attr("data-col"), 10), // 3
				r = parseInt(b.attr("data-row"), 10), // 4
				v = r >= firstRow && r <= lastRow ? 1 : 0, // 5
				pos = id+","+t+","+l+","+c+","+r+","+v
			//console.log(b.attr("id"), pos)	
			b.attr("data-backup-pos",pos);
		})

		var backupScrollTop = $(block).scrollTop();
		$(block).attr("backupScrollTop", backupScrollTop);

	});
}

moveBackToPosition = function(section) {

	var block = section=="practice"?"#two":"#three";

	var backupScrollTop = $(block).attr("backupScrollTop");
	if (typeof backupScrollTop == "undefined" || backupScrollTop == "") return;

	console.log("moveBackToPosition", section);

	$(block).removeAttr("backupScrollTop");
	showWindowCover();

	var speed = milliseconds / 3;
	//var speed = 5000;

	// RESET PREVIEW SEARCH
	$("."+section+"-box").removeClass(section+"-visible").removeClass(section+"-selected").removeClass(section+"-in").removeClass(section+"-out").removeClass("animated");

	// FIND OUT THE VISIBLE ITEMS
	var first = firstThumbVisible(section, false),
		firstRow = parseInt(first.attr("data-row"), 10),
		firstTop = parseInt(first.css("top"), 10),
		last = lastThumbVisible(section),
		lastRow = last.attr("data-row"),
		lastTop = parseInt(last.css("top"), 10);

	$("."+section+"-box").each(function(){
		var box = $(this),
			row = parseInt(box.attr("data-row"), 10);
			pos = box.attr("data-backup-pos").split(","),
			id = pos[0],
			c = parseInt(pos[3], 10),
			r = parseInt(pos[4], 10),
			v = parseInt(pos[5], 10);

		//console.log(pos, v)

		box.attr({ 
			"data-col": c,
			"data-row": r
		})

		if (row >= firstRow && row <= lastRow) {
			box.addClass(section+"-visible");
		}

		if (v==1) {
			box.addClass(section+"-selected");
		}
	})

	var helper = prepareEmptyHelper(section, first, lastTop);

	// CLONE VISIBLE ITEMS OVER A HELPER DIV TO ONLY ANIMATE THOSE OUT
	$(block+" ."+section+"-box."+section+"-visible").each(function(){
		var clone = $(this).clone(true),
			cloneTop = parseInt(clone.css("top"), 10) - firstTop;
		//console.log("clone top: " + cloneTop);

		clone.css({ 
			top: cloneTop
		})
		
		if (!clone.hasClass(section+"-selected")) {
			// SALEN CON ANIMATION
			// TODOS LOS VISIBLES QUE NO SON SELECCIONADOS
			// AND WONT BE VISIBLE LATER
			var row = parseInt(clone.attr("data-row"), 10);

			if (row > 2) {
				clone.addClass(section+"-out");
			}
		}

		helper.append(clone);
	})

	// BEHIND THE HELPER REORGANIZE FINAL LIST OF ITEMS TO THEIR FINAL POSITION
	var holder = [];
	$(block+" ."+section+"-box").each(function(){
		var box = $(this),
			pos = box.attr("data-backup-pos").split(","),
			id = parseInt(pos[0], 10),
			t = parseInt(pos[1], 10),
			l = parseInt(pos[2], 10),
			c = parseInt(pos[3], 10),
			r = parseInt(pos[4], 10),
			args = {
				top: t,
				left: l
			};

		//console.log(pos)

		box.attr({
			"id": section+"-box-" + id,
			"data-col": c,
			"data-row": r
		});

		box.css({transition: ""})
		box.css(args);

		box.removeAttr("data-backup-pos");

		holder[id] = box.clone(true);
	});

	// RE-INDEXING
	$(block+" ."+section+"-box").remove();
	var thumbsList = $("#"+section+"-list");
	for (let i=0; i<holder.length; i++) {
		thumbsList.append(jQuery(holder[i]));
	}

	$(block).scrollTop(backupScrollTop);

	helper.css({
		transition: "all "+speed+"ms ease-in-out",
		opacity: 0
	});

	// SET OPACITY TO THE ITEMS BACK TO 1
	$(block+" ."+section+"-box").css({transition: "all "+speed+"ms ease-in-out"});
	$(block+" ."+section+"-box").css({ opacity: 1 });

	setTimeout(function(){ 
		helper.find("."+section+"-box").remove();
		helper.hide().attr("style","");
	},  speed);


}

hideFooter = function() {
	$("#footer").hide()
}

footerTopPos = function(top, show) {
	var footer = $("#footer");
	if (show) {
		footer.css({
			top: top
		})
		footer.show()
	} else {
		footer.hide()
	}
}

loadScreen = function(){
	$(".loading").delay(3000).fadeOut(500);
	setTimeout(function(){ 
		setMainHeaderImg();
		moveToStart();
	}, 2000);
}

start = function() {
	init();
	initBtns();
	initScroll();
}

/*
$(window).resize(function() {
	start();
});
*/

	
$(function() {
	start();
	loadScreen();
});

