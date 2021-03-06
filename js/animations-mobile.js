// Jan 20, 2019

start = function() {

	velocidad = 1000;
	milliseconds = velocidad;
	smallDelay = 250;

	documentScroll = 0;
	currentDocumentScroll = 0;
	filterClicked = false;
	currPracticeFilter = "";
	currPortfolioFilter = "";
	itemsSelector = "";
	viewingSinglePractice = false;
	viewingSinglePortfolio = false;
	fullWidth = $(window).width();
	fullHeight = $(window).height();
	boxWidth = Math.floor(fullWidth / 2);
	boxHeight = parseInt(fullHeight / 3, 10);
	topNavTimerTimeOut = null;
	lastPoint = null;

	topNavPadding = 20;//getWidthPixels(36);
	practiceSidePadding = topNavPadding;
	practiceCellPadding = topNavPadding;

	$("#navbar").css({
		width: fullWidth,	
	})

	$("#home-mobile, #one, #four").css({
		transition: "left "+milliseconds+"ms ease-in-out",
		overflowX: "hidden",
		top: 0,
	})

	$("#home-mobile").css({
		width: fullWidth,
		left: 0
	})

	$("#one").css({
		width: 0,
		left: -fullWidth
	})

	$("#four").css({
		width: 0,
		left: fullWidth
	})

	$("#main-header").css({
		overflow: "hidden",
		height: fullHeight * .75 - $("#text-header").outerHeight(), // Home position
		paddingRight: practiceSidePadding,
		paddingLeft: practiceSidePadding,
		fontSize: "16px"
	})

	$("#image-header img").load(function(){
		setMainHeaderImg();
	})

	cnt = 0;
	$(".portfolio-box").each(function(){
		var b = $(this);
		++cnt;
		b.css({
			width: boxWidth,
			height: boxWidth * (b.hasClass("portfolio-single") ? 1.257 : 0.674),
		});
		b.attr({
			id: "portfolio-box-"+cnt,
		});
	})

	practice_imgs_loaded = $(".practice-box .practice-img-container img").length;
	portfolio_imgs_loaded = $(".portfolio-list-thumb img").length;

	home_thumbs_qty = practice_imgs_loaded + portfolio_imgs_loaded;
	//console.log("home_thumbs_qty: " + home_thumbs_qty)

	$(".portfolio-list-thumb img").each(function(){
		var img = $(this);
		img.load(function(){
			portfolioImgLoaded($(this));
		});
		if (img[0].complete) {
			portfolioImgLoaded(img);
		}
	})


	cnt = 0;
	$(".practice-box").each(function(){
		var b = $(this);
		++cnt;
		b.css({
			width: boxWidth,
			paddingLeft: practiceSidePadding,
			paddingRight: practiceSidePadding,
		});
		b.attr({
			id: "practice-box-"+cnt
		});
	})

	//console.log("******** practice_imgs_loaded: "+ practice_imgs_loaded)
	$(".practice-box .practice-img-container img").each(function(){
		var img = $(this);
		img.load(function(){
			practiceImgLoaded($(this));
		});
		if (img[0].complete) {
			practiceImgLoaded(img);
		}
	})

	$(".practice-box").click(function(){
		addSinglePractice($(this).attr("data-objid"), true);
	})

	$(".portfolio-box").click(function(){
		addSinglePortfolio($(this).attr("data-objid"), true);
	})

	//document.addEventListener("touchmove", ScrollStart, false);
	//document.addEventListener("scroll", Scroll, false);

	document.addEventListener('scroll', function(event) {
		//console.log("document"); $("#navbar .home").text("document");
		setNavBar(currentScroll(window.pageYOffset));
	});

	$("#one")[0].addEventListener('scroll', function(event) {
		//console.log("one"); $("#navbar .home").text("one");
		setNavBar(currentScroll($(this).scrollTop()));
	});

	$("#four")[0].addEventListener('scroll', function(event) {
		//console.log("four"); $("#navbar .home").text("four");
		setNavBar(currentScroll($(this).scrollTop()));
	});

	$("#goToPractice").click(function(){
		goToThumbs("practice");
	})

	$("#goToPortfolio").click(function(){
		goToThumbs("portfolio");
	})

	$("#contact-logo").click(function(){
		slideContactMenu(0);
		backFromSingle(true);
	});

	$("#contact-menu").css({
		top: -$(this).outerHeight(),
	}).show().find(".exit-container-mobile,.exit-container").click(function(){
		slideContactMenu(0);
	});

	$("#navbar .back").click(function(){
		backFromSingle(false);
	})

	$("#navbar .home").click(function(){
		backFromSingle(true);
	})

	$("#navbar .info").click(function(){
		slideContactMenu(1);
	})

	$("#navbar .ico.prac").click(function(){
		showThumbs("practice");
	})

	$("#navbar .ico.port").click(function(){
		showThumbs("portfolio");
	})

	$("#practiceFilterOps").css({
		top: -$(this).outerHeight(),
	}).show().find(".exit").click(function(){
		$(".filterOps .filterInput input").val("");
		showThumbs("practice");
		slideFiltersOps("practice", 0);
	});

	$("#navbar .prac .ico.search").click(function(){
		slideFiltersOps("practice", 1);
	})

	$("#portfolioFilterOps").css({
		top: -$(this).outerHeight(),
	}).show().find(".exit").click(function(){
		$(".filterOps .filterInput input").val("");
		showThumbs("portfolio");
		slideFiltersOps("portfolio", 0);
	});

	$("#navbar .port .ico.search").click(function(){
		slideFiltersOps("portfolio", 1);
	})

	$(".practice-filter").click(function(){
		var category = $(this).attr("rel"),
			id = $(this).parent().attr("id");

		//console.log(filterClicked, currPracticeFilter, id)

		$(".filterOps .filterInput input").val("");

		//if (!filterClicked && currPracticeFilter != id) {
			showLoader();

			filterClicked = true;
			currPracticeFilter = id;
			itemsSelector = "";

			filterSection(category, 'practice');
		//}
	})

	$(".portfolio-filter").click(function(){
		var category = $(this).attr("rel"),
			id = $(this).parent().attr("id");

		//console.log(filterClicked, currPracticeFilter, id)

		$(".filterOps .filterInput input").val("");

		//if (!filterClicked && currPortfolioFilter != id) {
			showLoader();

			filterClicked = true;
			currPortfolioFilter = id;
			itemsSelector = "";

			filterSection(category, 'portfolio');
		//}
	})

	$(".filterOps .filterInput input").bind("keypress", function(e){
		if(e.which === 13){
			makeSearch(e);
		} 
	}).focusout(function(e) {
		makeSearch(e);
	})

	$("#currentFilter").css({
		top: -$(this).outerHeight(),
	}).show().find(".exit").click(function(){
		$(".filterOps .filterInput input").val("");
		var exit = $(this),
			section = exit.attr("data-section");

		//console.log("exit section: " + section)

		exit.attr("data-section","");
		showThumbs(section);
		slideFiltersOps(section, 0);
		slideCurrentFilter(section, 0);
	});

	$("#contact-menu").addClass(fullWidth <= 100 ? "narrow" : "wide")

	$(".iframe_wrapper_close").click(function() {
		$("#iframe_wrapper").hide()
	})	
}

filterSection = function(category, section, label) {
	setTimeout(function(){ 

		//console.log("\nfilterSection :: category: " + category, " - section: " + section, " - label: " + label, " - itemsSelector: " + itemsSelector )
		//console.log("2 keyword: "+category)

		category = typeof label != "undefined" && label != "" ? label : category;

		$("#currentFilter .exit").attr("data-section",section)
		$("#currentFilter .key").html(category);

		if (itemsSelector=="") {
			// FIND OUT THE SELECTED ITEMS AND BRING THEM UP IN THE LIST
			var selector = "#"+section+"-list ."+section+"-box[rel~='"+category+"']";
			$selected = $(selector).clone(true);
			//console.log("selector", selector);
			$("#currentFilter .key").html($("#"+section+"FilterOps ."+section+"-filter[rel='"+category+"']").html());
		} else {
			$selected = $(itemsSelector).clone(true);
		}

		$("#section-thumbnails").html(
			$("<div class='A'></div><div class='B'></div>")
		);

		// ADD THE SELECTED ONES
		var selectedObjs = [];
		$selected.each(function(){
			var box = $(this),
				tmpl = section=="practice" ? box.attr("data-tmpl") : "project",
				key = tmpl=="bio" ? box.find(".bio-name").text() : box.attr("data-published");

				if (category=="bio" && tmpl!="bio") {
					key = "AAA " + key;
				}

			if (box.attr("data-isdup") != 1) {

				if (typeof selectedObjs[tmpl] == "undefined") selectedObjs[tmpl] = [];
				selectedObjs[tmpl].push(key + "::" + box.attr("data-objid"));

			}
		});

		cnt = 1;
		objids = {};
		//templates = ["bio","job","article","project"];
		templates = ["project","article","job","bio"];

		templates.forEach(function(tmpl){
			if (typeof selectedObjs[tmpl] != "undefined") {
				//console.log("tmpl",tmpl)
				var items = selectedObjs[tmpl];

				items.sort();
				/*
				if (tmpl=="bio") {
					items.reverse(); 
				}
				*/

				//console.log("items",items)
				//console.log("selected", $selected)

				items.forEach(function(item){
					var objid = item.split("::")[1];
					$selected.each(function(){
						var b = $(this);
						if (b.attr("data-objid") == objid && typeof objids[objid] == "undefined") {
							objids[objid] = true;
							//console.log(objid, b.attr("data-published")); 
							//b.find(".practice-desc-container").text(objid + ", " + b.attr("data-published"))

							//thumbnailList.prepend(b.addClass(section+"-selected"));
							$("#section-thumbnails ." + (cnt % 2 == 1 ? "A" : "B")).append(b);
							++cnt;
						}
					})
				})
			}
		})

		// ADD THE NOT SELECTED ONES
		cnt = $("#section-thumbnails ."+section+"-box").length;
		$("#"+section+"-list ."+section+"-box").each(function(){
			var box = $(this);
			if (box.attr("data-isdup") != 1 && $("#section-thumbnails ."+section+"-box[data-objid='"+box.attr("data-objid")+"']").length==0) {
				var clone = $(this).clone(true).addClass("not-selected");
				$("#section-thumbnails ." + (cnt % 2 == 1 ? "A" : "B")).append(clone);
				++cnt;
			}
		});

		$("#section-thumbnails .not-featured").removeClass("not-featured");

		slideFiltersOps(section, 0);
		slideCurrentFilter(section, 1);
		$(".filterOps .filterInput input").blur();

		hideLoader();

	}, 100);
}

makeSearch = function(e) {
	setTimeout(function(){ 
		var section = e.target.className,
			keyword = e.target.value,
			action = typeof e.target.action == "undefined" ? "search" : e.target.action;

		//console.log("makeSearch 1 :: " + "\n" + "section: "+section + "\n" + "keyword: "+keyword + "\n" + "action: "+action)

		if (keyword != "") {
			
			showLoader();
			slideFiltersOps(section, 0);
			filterClicked = true;

			if (section == "practice") {
				currPracticeFilter = action;
			} else {
				currPortfolioFilter = action;
			}

			//console.log("makeSearch 2 :: " + "\n" + "section: "+section + "\n" + "currPracticeFilter: "+currPracticeFilter + "\n" + "currPortfolioFilter: "+currPortfolioFilter)

			var end_point = action=="search" ? "/wp-json/wp/v2/"+section+"?search="+keyword : "/"+(section=="practice"?"article":"project")+"_tags/"+keyword;

			$.get(router_var.home.url + end_point, function(data) {
				//console.log(data);
				//console.log("1 keyword: "+keyword)
				var IDs = [],
					label = "";

				if (action == "search") {
					$.each(data, function(key, item) {
						IDs.push("#"+section+"-list ."+section+"-box[data-objid='"+item.id+"']");
					});
				} else {
					label = data.term.name;
					$.each(data.items, function(key, item) {
						IDs.push("#"+section+"-list ."+section+"-box[data-objid='"+item+"']");
					});
				}

				if (section == "practice" && action == "search") {
					$.get(router_var.home.url + "/wp-json/wp/v2/bio?search="+keyword, function(data) {
						//console.log(data);
						$.each(data, function(key, item) {
							IDs.push("#"+section+"-list ."+section+"-box[data-objid='"+item.id+"']");
						});

						itemsSelector = IDs.join(",");
						//console.log("itemsSelector: " + itemsSelector);

						filterSection(keyword, section);
						$(".filterOps .filterInput input").val("");
					});
				} else {
					itemsSelector = IDs.join(",");
					//console.log("itemsSelector: " + itemsSelector);

					if (action == "tags") {
						milliseconds = 0;
						backFromSingle(true);
						showThumbs(section);
						milliseconds = velocidad;
					}

					filterSection(keyword, section, label);
					$(".filterOps .filterInput input").val("");
				}
			});

		}
	}, 100);
}

searchTagsBy = function(section, slug) {
	makeSearch({
		target: {
			className : section,
			value : slug,
			action : "tags"
		}
	});
}

searchPortfolioBy = function(id, slug) {
	searchTagsBy("portfolio", slug);
}

searchPracticeBy = function(id, slug) {
	searchTagsBy("practice", slug);
}

practiceImgLoaded = function(img) {
	--home_thumbs_qty;
	if (home_thumbs_qty == 0) {
		homeThumbsLoaded();
	}
}

portfolioImgLoaded = function(img) {
	var div = img.parent(".portfolio-list-thumb"),
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

	--home_thumbs_qty;
	if (home_thumbs_qty == 0) {
		homeThumbsLoaded();
	}
}

makeLinkTarget = function() {
	$("a").each(function(){
		var a = $(this),
			href = a.attr("href"),
			target = a.attr("target");

		if (href.indexOf("http")==0) {
			a.attr("target","_blank")
		}

	})
}

addContentActions = function() {
	//console.log("addContentActions")
	addLoadingtoImages();
	makeLinkTarget();
}

addLoadingtoImages = function() {
	//console.log("addLoadingtoImages")

	$(".add_loading").each(function(){
		var ele = $(this),
			img = ele.find("img");
			
		if (img.attr("src")!="" || !ele.hasClass("add_loading")) {
			img.hide();

			img.load(function(){
				var img = $(this),
					ele = img.parent(".add_loading");

				ele.removeClass("add_loading").addClass("loaded");
				img.show();
			});

			if (img[0].complete) {
				ele.removeClass("add_loading").addClass("loaded");
				img.show();
			}
		}
	})

	$("video").each(function(){
		var ele = $(this);

		ele.on('loadstart', function (event) {
			$(this).addClass('ico-loading');
		});

		ele.on('canplay', function (event) {
			$(this).removeClass('ico-loading').addClass("loaded");
			$(this)[0].play();
		});	
	})


}

cleanSingles = function(wait) {
	setTimeout(function(){ 
		$("#single_portfolios .project-page,#single_practices .listing-page,#loadNxt").remove();
	}, wait||0);
}

backFromSingle = function(goToTop) {

	moveToHome(goToTop);

	cleanSingles(milliseconds);

	viewingSinglePractice = false;
	viewingSinglePortfolio = false;
	
}

moveToHome = function(goToTop) {
	
	if (viewingSinglePractice) {
		//console.log("A " + goToTop)
		movePractice(-fullWidth, goToTop);
	} else if (viewingSinglePortfolio) {
		//console.log("B " + goToTop)
		movePorfolio(fullWidth, goToTop);
	} else {
		//console.log("C")
	}

	moveHome(0, goToTop);

}

currentScroll = function(currentPoint) {
	var direction = "UP";

	//console.log("currentPoint " + currentPoint)
	//$("#navbar .home").text(currentPoint)

    if(lastPoint != null && lastPoint < currentPoint ){
        //swiped down
        //console.log('you scrolled up');
		direction = "DOWN";
    } else if(lastPoint != null && lastPoint > currentPoint){
        //swiped up
        //console.log('you scrolled down');
		direction = "UP";
    }

    lastPoint = currentPoint;

	//$("#navbar .home").text(currentPoint + " - " + direction)

	return {
		direction : direction,
		currentPoint : currentPoint
	}
}

hideContactMenu = function(section) {
	var $filterOps = $("#"+section+"FilterOps")

	$filterOps.css({
		transition: "",
		top: -$filterOps.outerHeight()
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

hideFiltersOps = function() {
	$("#contact-menu").css({
		transition: "",
		top: -$("#contact-menu").outerHeight()
	});
	$("#one, #four").css({
		backgroundColor: "#FFFFFF"
	})
}

slideFiltersOps = function(section, flag) {
	var $filterOps = $("#"+section+"FilterOps")

	$filterOps.css({
		transition: "top 300ms ease-out",
		top: flag==1 ? 0 : -$filterOps.outerHeight()
	});

	$("#one, #four").css({
		backgroundColor: flag==1 ? "rgba(0,0,0,0.08)" : ""
	})

	$("#window_cover").css({
		display: flag==1 ? "block" : "none",
		zIndex: flag==1 ? "9" : "99999",
	}).click(function(){
		slideFiltersOps(section, 0);
	})

	if (flag==1) {
		$("#"+section+"FilterOps .filterInput input").focus();
	}
} 

slideCurrentFilter = function(section, flag) {
	//console.log("slideCurrentFilter",section, flag)
	var $currentFilter = $("#currentFilter")

	$currentFilter.css({
		transition: "top 300ms ease-out",
		top: flag==1 ? 0 : -$currentFilter.outerHeight()
	});

	if (flag==0) {
		$("#currentFilter .key").html("");
		filterClicked = false;
		currPracticeFilter = "";
		currPortfolioFilter = "";
	} else {
		//
	}
}

setNavBar = function(currentScroll) {
	var posToShow = fullHeight / 2,
		direction = currentScroll.direction, 
		currPos = currentScroll.currentPoint, 
		showBarAreaStart = currPos > posToShow,
		showBarAreaStop = currPos < posToShow + fullHeight; //currPos < posToShow + boxHeight;

	if (isThumbnails() || viewingSinglePractice || viewingSinglePortfolio) {
		showBar = true;
	} else {
		showBar = showBarAreaStart;
	}

	if (showBar) {
		showTopNav(true);
	} else {
		hideTopNav();
	}	
}

slideTopBar = function(flag, speed) {
	//console.log("slideTopBar: " + flag)
	var speed = typeof speed=="undefined" ? smallDelay : 0;
	$("#navbar").css({
		transition: "top "+speed+"ms ease-in-out",
		top: flag==1 ? 0 : -51
	});

	if (flag==1) {
		$("#text-header").css("opacity","0")
	} else {
		$("#text-header").css("opacity","1")
	}
	/*
	if ($("#practice-list").attr("data-cols") == $("#portfolio-list").attr("data-cols")) {
		$("#practice-filters div, #portfolio-filters div").css({
			transition: "unset",
			opacity: 0
		})
	}
	*/
} 

showTopNav = function(timer) {
//	if (viewingSinglePractice || viewingSinglePortfolio) {
//		hideTopNav();
//	} else {
		clearTimeout(topNavTimerTimeOut);
		slideTopBar(1);

		if (typeof timer!="undefined" && timer) {
			//topNavTimerTimeOut = setTimeout(function(){ hideTopNav(); }, topNavTimer);
		}
//	}
}

hideTopNav = function() {
	clearTimeout(topNavTimerTimeOut);
	//showMainIcon("H");
	slideTopBar(0);
	//topNavTimerTimeOut = setTimeout(function(){ slideTopBar(0); }, 500);
}

goToPracticePage = function(obj_id) {
	milliseconds = 0;//velocidad / 2;
	backFromSingle("practice");
	setTimeout(function(){ 
		milliseconds = velocidad / 3;
		addSinglePractice(obj_id, true, false);
		milliseconds = velocidad;
	},  milliseconds);
}

goToPortfolioPage = function(obj_id) {
	milliseconds = 0;//velocidad / 2;
	backFromSingle("portfolio", true);
	setTimeout(function(){ 
		milliseconds = velocidad / 3;
		addSinglePortfolio(obj_id, true, false);
		milliseconds = velocidad;
	},  milliseconds);
}


addSinglePortfolio = function(obj_id, changeUrl, scrollToIt, viewed) {

	getSinglePage("portfolio", obj_id, changeUrl, scrollToIt, viewed);

}


addSinglePractice = function(obj_id, changeUrl, scrollToIt, viewed) {

	getSinglePage("practice", obj_id, changeUrl, scrollToIt, viewed);

}

getSinglePage = function(section, obj_id, changeUrl, scrollToIt, viewed) {

	showLoader();

	$.get(stylesheet_directory + "get-page.php?id=" + obj_id + "&isMobile=1", function(data) {

        router_var.last = data;

		if (section == "practice") {
			appendSinglePractice(data, changeUrl);
		} else {
			appendSinglePortfolio(data, changeUrl);
		}

	}).fail(function() {
		hideLoader();
	});

}

appendSinglePortfolio = function(data, changeUrl) {
	if ($("#page-"+data.id).length==0)	{

		if (changeUrl) setRoute(data);

		$("#single_portfolios").append(data.html);
		$("#page-"+data.id).addClass($(".project-page").length==1 ? "viewed" : "not-viewed");

		if ($(".project-page").length==1) loadNextPortfolio(data.id);

		//singlePage_scrolling('portfolio');

		showTopNav(true);
		addContentActions();
	}

	openPortfolio();
}

appendSinglePractice = function(data, changeUrl) {
	if ($("#page-"+data.id).length==0)	{

		if (changeUrl) setRoute(data);

		$("#single_practices").append(data.html);
		$("#page-"+data.id).addClass($(".listing-page").length==1 ? "viewed" : "not-viewed");

		if ($(".listing-page").length==1) loadNextPractice(data.id);

		//singlePage_scrolling('practice');

		showTopNav(true);
		addContentActions();
	}

	openPractice();
}

loadNextPortfolio = function(id) {
	var current = $(".portfolio-box[data-objid='"+id+"']"),
		selector = "", // IN CASE WE WANT TO SELECT NEXT THAT WAS SELECTED USE ==> currPortfolioFilter == "" ? "" : ".portfolio-selected",
		next_id = current.next(selector).attr("data-objid");

	if (next_id) {
		//console.log("Load Next Portfolio " + next_id);
		addSinglePortfolio(next_id, false);
	} else {
		hideLoader();
	}
}

loadNextPractice = function(id) {
	var current = $(".practice-box[data-objid='"+id+"']"),
		selector = "", // IN CASE WE WANT TO SELECT NEXT THAT WAS SELECTED USE ==> currPracticeFilter == "" ? "" : ".practice-selected",
		next_id = current.next(selector).attr("data-objid");

	if (next_id) {
		//console.log("Load Next Practice " + next_id);
		addSinglePractice(next_id, false);
	} else {
		hideLoader();
	}
}

openPortfolio = function() {
	//console.log("openPortfolio")
	if (!viewingSinglePortfolio) {
		viewingSinglePortfolio = true;

		//$("#four").scrollTop(0);
		//hideContactMenu();
		//hideTopNav();
		//hideFooter();

		moveToPortfolio(false, false);

		setTimeout(function(){ 
			//hideFooter();
			showNavBar(".single.port");
			hideLoader();

			// PLAY ALL VIDEOS
			// $("#four video").each(function(){ $(this)[0].play() })

		},  milliseconds);
	} else {
		// Already in single view
		hideLoader();
	}
}

openPractice = function() {
	if (!viewingSinglePractice) {
		viewingSinglePractice = true;

		//$("#one").scrollTop(0);
		//hideContactMenu();
		//hideTopNav();
		//hideFooter();

		moveToPractice(false, false);

		setTimeout(function(){ 
			//hideFooter();
			showNavBar(".single.prac");
			hideLoader();
		},  milliseconds);
	} else {
		// Already in single view
		hideLoader();
	}
}

moveToPortfolio = function(changeRoute, resetFilter) {
	//console.log("moveToPortfolio",changeRoute, resetFilter);

	var wait = 0,
		changeRoute = typeof changeRoute != "undefined" ? changeRoute : false;
		resetFilter = typeof resetFilter != "undefined" ? resetFilter : true;

//	if (isFilterOn() && resetFilter) {
//		wait = milliseconds / 3;
//		closeFilter(whatfilterIsOn());
//	}

//	setTimeout(function(){ 

//		setThumbs(1, 3);

//		moveMainWrapper(viewingSinglePortfolio ? posIndividualPorfolio : posPorfolios);
//		move_topBar_icon(viewingSinglePortfolio ? topBar_icon_width/2 : boxWidth);
//		moveScrollCoverPorfolio(viewingSinglePortfolio ? 0 : -20);

//		if (changeRoute) setPortfoliosRoute();

//	},  wait);


	movePorfolio(0);
	moveHome(-fullWidth);
}

moveToPractice = function(changeRoute, resetFilter) {
	//console.log("moveToPractice",changeRoute, resetFilter)

	var wait = 0,
		changeRoute = typeof changeRoute != "undefined" ? changeRoute : false;
		resetFilter = typeof resetFilter != "undefined" ? resetFilter : true;

//	if (isFilterOn() && resetFilter) {
//		wait = milliseconds / 2;
//		closeFilter(whatfilterIsOn());
//	}

//	setTimeout(function(){ 
//		showMainHeader();
	
//		setThumbs(3, 1)

//		moveMainWrapper(viewingSinglePractice ? posIndividualPractice : posPractices);
//		move_topBar_icon(viewingSinglePractice ? fullWidth - topBar_icon_width/2 : boxWidth * 3);
//		moveScrollCoverPractice( (viewingSinglePractice ? fullWidth : 0) - 20 );

//		if (changeRoute) setPracticesRoute();

//	},  wait);


	movePractice(0);
	moveHome(fullWidth);
}

setPracticesRoute = function(url) {
	setThumbsRoute('practices', url);
}

setPortfoliosRoute = function(url) {
	setThumbsRoute('portfolios', url);
}

setThumbsRoute = function(section, url) {
	var routeObj = router_var[section];

	$("#currentFilter").show();

	//console.log("setThumbsRoute " + section);

	if (routeObj.title == "" ) {
		$.get(router_var.home.url + "/wp-json/wp/v2/pages/" + routeObj.id, function(data) {
			routeObj.title = data.yoast_meta.yoast_wpseo_title;
			routeObj.url = data.link;

			//routeObj = router_var.portfolios;
			/*
			if (url) {
				console.log("1. url " + url)
				routeObj.url = url;
			}
			*/

			setRoute(routeObj);
		});
	} else {
		/*
		if (url) {
			console.log("2. url " + url)
			routeObj.url = url;
		}
		*/
		setRoute(routeObj);
	}
}

showNavBar = function(selector) {
	//console.log("showNavBar: " + selector);

	if (selector==".start")	{
		setRoute(router_var.home);
		slideCurrentFilter(currPracticeFilter?"practices":"portfolios", 0);
	} else if (selector==".thumbs.prac") {
		setThumbsRoute("practices");
	} else if (selector==".thumbs.port") {
		setThumbsRoute("portfolios");
	} else {
		$("#currentFilter").hide();
	}

	$("#navbar .flex").addClass("hide");
	$("#navbar .flex" + selector).removeClass("hide");
}

isThumbnails = function() {
	return $("#section-thumbnails .A").length == 1;
}

moveHome = function(left, goToTop) {
	//console.log("moveHome goToTop: " + goToTop, left)
	
	$("#home-mobile").css({
		transition: "left "+milliseconds+"ms ease-in-out",
		left: left
	})

	setTimeout(function(){ 
		var width = left < 0 || left >= fullWidth ? 0 : fullWidth;
		$("#home-mobile").css({ width: width });
	}, left == 0 ? 0 : milliseconds);


	if (left == 0) { // GO TOP TO HOME FROM HOME

		if (goToTop) {

			showNavBar(".start");

			if ( isThumbnails() ) {
				//console.log("1")
				showLoader();
				//setThumbsRoute(viewingSinglePractice?"practices":"portfolios");

				$("#section-thumbnails").css({top:-$(document).scrollTop()}); 
				$(document).scrollTop(0); 

				$("#two,#three").css({width:"100%"});
				$("#main-header, #practice-thumbs, #portfolio-thumbs").show();
				$("#section-thumbnails").css({position:"absolute"}); 
				
				var section = $("#section-thumbnails").hasClass("practice") ? "practice" : "porfolio";
				$("#section-thumbnails").css({
					transition: "left "+milliseconds+"ms ease-in-out",
					left: section=="practice"?-fullWidth:fullWidth,
				});

				setTimeout(function(){ 
					$("#section-thumbnails").removeClass("practice portfolio").html("");
					hideLoader();
				}, milliseconds);

			} else {
				//console.log("2")

				$("#home-mobile").css({
					transition: "top 800ms ease-in-out",
					top: $(document).scrollTop()
				});
				setTimeout(function(){ 
					$(document).scrollTop(0)
					$("#home-mobile").css({
						transition: "unset",
						top: $(document).scrollTop()
					});
				}, milliseconds);

			}

		} else {

			if (viewingSinglePractice || viewingSinglePortfolio) {

				if ( isThumbnails() ) {
					//console.log("3a " + goToTop)
					showNavBar(".thumbs." + (viewingSinglePractice?"prac":"port"));
					//setThumbsRoute(viewingSinglePractice?"practices":"portfolios");

				} else {
					//console.log("3b " + goToTop)
					showNavBar(".start");

					$("#section-thumbnails").css({position:"absolute",left:(viewingSinglePractice?-fullWidth:fullWidth)}).removeClass("practice portfolio").html("");
					$("#two,#three").css({width:"50%"});
					$("#main-header, #practice-thumbs, #portfolio-thumbs").show();
				}
			}		
		}
	}
}

movePorfolio = function(left, goToTop) {
	moveSngleSide(left, "#four", goToTop);
}

movePractice = function(left, goToTop) {
	moveSngleSide(left, "#one", goToTop);
}

moveSngleSide = function(left, selector, goToTop) {

	var goToTop = goToTop || false;
	//console.log("moveSngleSide goToTop: " + goToTop)

	$(selector).css({
		transition: "left "+milliseconds+"ms ease-in-out",
		left: left,
	})

	if (left==0) { // OPEN 

		documentScroll = $(document).scrollTop();

		$(selector).css({ // DO IT BEFORE START OPENING
			width: fullWidth,
			top: documentScroll
		});

		setTimeout(function(){ 	// ONCE IT FINISHES OPENING
			$(document).scrollTop(0);
			$(selector).css({top:0});
		}, milliseconds);

	} else { // CLOSE 

		// BEFOE IT STARTS CLOSING
		$(selector).css({top:-$(document).scrollTop()});
		$(document).scrollTop(0);

		$("#home-mobile").css({ top: (goToTop ? 0 : -documentScroll) })

		setTimeout(function(){ // WAIT TILL CLOSED

			$("#home-mobile").css({top:0});
			$(document).scrollTop( goToTop ? 0 : documentScroll );

			$(selector).css({
				top: 0,
				width: 0
			});


		}, milliseconds);
	}
}

nxtBtnClicked = function(e) {
	var ele = $(e),
		page = ele.parents(".not-viewed"),
		next = page.find(".nxt-btn"),
		id = page.attr("id").replace("page-",""),
		section = page.hasClass("listing-page") ? "practice" : "portfolio",
		singles = section=="practice" ? "#one" : "#four";

	$("#window_cover").show();

	next.hide(500);
	page.removeClass("not-viewed").addClass("viewed");
	
	setRoute(router_var.last);

	if (section=="practice") {
		loadNextPractice(id);
	} else {
		loadNextPortfolio(id);
	}

	var scroll = page.offset().top - 30;
	//console.log(id, scroll);

	$(singles).css({top:-$(document).scrollTop()});
	$(document).scrollTop(0);
	$(singles).animate({top: -scroll}, 800);

	setTimeout(function(){ 
		$(singles).css({top:0});
		$(document).scrollTop(scroll);
		$("#window_cover").hide();
	}, 1000);

}

getWidthPixels = function(pixels) {
	// Pixels based on 1280 wide screen. 
	return (fullWidth * pixels) / 1280;
}

setMainHeaderImg = function() {
	//console.log("setMainHeaderImg")
	var img = $("#image-header img");

	img.css({
		paddingTop: boxHeight - (img.height()/2) - $("#text-header").outerHeight(),
	})
}

goToThumbs = function(section) {
	slideContactMenu(0);
	milliseconds = 0;

	if (viewingSinglePractice || viewingSinglePortfolio) {
		//console.log("A")
		var goToTop = !isThumbnails()
		backFromSingle(goToTop);
	} else {
		//console.log("B")
	}

	if (!$("#section-thumbnails").hasClass(section)) {
		//console.log("C")
		showThumbs(section);
	}

	milliseconds = velocidad;
}

showThumbs = function(section) {

	showLoader();

	$("#section-thumbnails").removeClass("practice portfolio").addClass(section);

	$("#section-thumbnails").css({
		transition: "unset",
		width: fullWidth,
		left: section=="practice"?-fullWidth:fullWidth,
		top: $(document).scrollTop(),
	}).html(
		$("<div class='A'></div><div class='B'></div>")
	);

	cnt = 1;
	$("#"+section+"-list ."+section+"-box").each(function(){
		var box = $(this);
		//console.log(box.attr("id"),parseInt(box.attr("data-isdup"),10))
		if (box.attr("data-isdup") != 1) {
			var clone = $(this).clone(true);
			$("#section-thumbnails ." + (cnt % 2 == 1 ? "A" : "B")).append(clone);
			++cnt;
		}
	});

	$("#section-thumbnails").css({
		transition: "left "+milliseconds+"ms ease-in-out",
		left: 0,
	});

	setTimeout(function(){
		showNavBar(".thumbs." + (section=="practice"?"prac":"port"));
		showTopNav(true);

		$(document).scrollTop(0); $("#section-thumbnails").css({top:0})
		$("#main-header, #practice-thumbs,#portfolio-thumbs").hide();

		$("#two").css({width:"0%"});
		$("#three").css({width:"100%"});

		$("#section-thumbnails").css({position:"relative"});

		hideLoader();
		//setThumbsRoute(section+"s");

	}, milliseconds);

}

matchBothSidesHeightDup = function() {
	var cnt = 0,
		practiceHeight = $("#practice-list").outerHeight(),
		nextBox = $("#portfolio-box-"+ (++cnt)),
		portfolioHeight = $("#portfolio-list").outerHeight() + nextBox.outerHeight();

	while (practiceHeight > portfolioHeight) {
		//console.log("Duplicating " + cnt, practiceHeight, portfolioHeight);

		var clone = nextBox.clone(true),
			nxtId = $(".portfolio-box").length+1;
		clone.attr({"id":"portfolio-box-"+nxtId,"data-isdup":1});

		$("#portfolio-list").append(clone);

		nextBox = $("#portfolio-box-"+ (++cnt)),
		portfolioHeight += nextBox.outerHeight();

		if (cnt==100) break;
	}

	/* *** *** */

		cnt = 0,
		portfolioHeight = $("#portfolio-list").outerHeight(),
		nextBox = $("#practice-box-"+ (++cnt)),
		practiceHeight = $("#practice-list").outerHeight() + nextBox.outerHeight();

	while (portfolioHeight > practiceHeight) {
		//console.log("Duplicating " + cnt, portfolioHeight, practiceHeight);

		var clone = nextBox.clone(true),
			nxtId = $(".practice-box").length+1;
		clone.attr({"id":"practice-box-"+nxtId,"data-isdup":1});

		$("#practice-list").append(clone);

		nextBox = $("#practice-box-"+ (++cnt)),
		practiceHeight += nextBox.outerHeight();

		if (cnt==100) break;
	}
}

matchBothSidesHeightCut = function() {
	var cnt = $(".practice-box").length,
		practiceHeight = $("#practice-list").outerHeight(),
		nextBox = $("#practice-box-"+ cnt),
		nextBoxHeight = nextBox.hasClass("not-featured") ? 0 : nextBox.outerHeight(),
		portfolioHeight = $("#portfolio-list").outerHeight();

	//console.log(cnt, practiceHeight - nextBoxHeight, portfolioHeight);
	while (cnt > 1 && practiceHeight - nextBoxHeight > portfolioHeight) {
		nextBox.removeClass("featured").addClass("not-featured");
		practiceHeight -= nextBoxHeight;
		//console.log(cnt, practiceHeight, portfolioHeight);
		nextBox = $("#practice-box-" + (--cnt));
		nextBoxHeight = nextBox.hasClass("not-featured") ? 0 : nextBox.outerHeight();
	}

	var cnt = $(".portfolio-box").length,
		portfolioHeight = $("#portfolio-list").outerHeight(),
		nextBox = $("#portfolio-box-"+ cnt),
		nextBoxHeight = nextBox.hasClass("not-featured") ? 0 : nextBox.outerHeight(),
		practiceHeight = $("#practice-list").outerHeight();

	while (cnt > 1 && portfolioHeight - nextBoxHeight > practiceHeight) {
		nextBox.removeClass("featured").addClass("not-featured");
		portfolioHeight -= nextBoxHeight;
		//console.log(cnt, portfolioHeight, practiceHeight);
		nextBox = $("#portfolio-box-" + (--cnt));
		nextBoxHeight = nextBox.hasClass("not-featured") ? 0 : nextBox.outerHeight();
	}

}

showLoader = function() {
	$("#window_cover").show();
	$("#loading").show(500);
}

hideLoader = function() {
	$("#window_cover").hide();
	$("#loading").hide(500);
}

setRoute = function(data, replace) {
	if (replace || (data && document.location.href != data.url))	{
		//console.log("1. data.url: " + data.url); data.url += "/?isMobile=1"; console.log("2. data.url: " + data.url);

		var state = {type:data.type,id:data.id};

		if (replace) {
			history.pushState(state, data.title, data.url);
		} else {
			document.title = data.title;
			history.pushState(state, data.title, data.url);
		}

		ga('send', {
			hitType : 'pageview',
			page : data.url,
			title : data.title
		});
	}
}
/*
$(document).scroll(function() {
	currentDocumentScroll = $(document).scrollTop();
	console.log("currentDocumentScroll: " + currentDocumentScroll)
});
*/

window.onpopstate = function(event) {
	//console.log("location: " + document.location + ", state: ", event.state, $(document).scrollTop());

	$(document).scrollTop(0)
	milliseconds = 0;

	if (event!=null && event.state) {
		if (event.state.type == "home") {
			//console.log("onpopstate 1")
			backFromSingle(true);

		} else if (event.state.type == "practices") {
			//console.log("onpopstate 2")
			if (viewingSinglePortfolio) {
				backFromSingle(true);
				setTimeout(function(){ 
					moveToPractice();
				}, milliseconds);
			} else if (viewingSinglePractice) {
				backFromSingle(true);
			} else {
				moveToPractice();
			}
		} else if (event.state.type == "practice" || event.state.type == "bio") {
			//console.log("onpopstate 3")
			if (viewingSinglePractice) {
				//console.log("scroll to the practice " + event.state.id);
				if ($("#page-"+event.state.id).length == 0) {
					//console.log("Append it and move to it");
					addSinglePractice(event.state.id, false, true, true);
				} else {
					//console.log("2 b", "#page-"+event.state.id)
					//routeScrollIntoView(event.state.id);
				}
			} else {
				//console.log("Load it and move to single practice");
				addSinglePractice(event.state.id, true, false, true);
				loadNextPractice(event.state.id);
			}

		} else if (event.state.type == "portfolios") {
			//console.log("onpopstate 4")
			if (viewingSinglePractice) {
				backFromSingle(true);
				setTimeout(function(){ 
					moveToPortfolio();
				}, milliseconds);
			} else if (viewingSinglePortfolio) {
				backFromSingle(true);
			} else {
				moveToPortfolio();
			}
		} else if (event.state.type == "portfolio") {
			//console.log("onpopstate 5")
			if (viewingSinglePortfolio) {
				//console.log("scroll to the portfolio " + event.state.id);
				if ($("#page-"+event.state.id).length == 0) {
					//console.log("Append it and move to it");
					addSinglePortfolio(event.state.id, false, true, true);
				} else {
					//routeScrollIntoView(event.state.id);
				}
			} else {
				//console.log("Load it and move to single portfolio");
				addSinglePortfolio(event.state.id, true, false, true);
				loadNextPortfolio(event.state.id);
			}
		}
	}

	milliseconds = velocidad;
}

setDocumentHeight = function() {
	var vpH = window.innerHeight;
	document.documentElement.style.height = vpH.toString() + "px";
	document.getElementsByTagName("body")[0].style.height = vpH.toString() + "px";
}

moveToInitRoute = function() {
	//console.log("Move to " + router_var.init)

	if (router_var.init == "home") {
		//setRoute(router_var.home, true);
	} else if (router_var.init=="practices") {
		showThumbs("practice");
	} else if (router_var.init=="practice" || router_var.init=="bio") {
		openPractice();
	} else if (router_var.init=="portfolios") {
		showThumbs("portfolio");
	} else if (router_var.init=="portfolio") {
		openPortfolio();
	} else {
		//backFromSingle(false);
	}

}

homeThumbsLoaded = function() {
	//console.log("homeThumbsLoaded");

	setMainHeaderImg();

	$("#mobile-thumbs").removeClass("loading");
	//matchBothSidesHeightDup();
	matchBothSidesHeightCut();
	hideLoader();
	//moveToInitRoute();
}


$(window).resize(function() {
	//document.location.reload();
});
/*
window.addEventListener('deviceorientation', function(event){
  var absolute = event.absolute;
  var alpha    = event.alpha;
  var beta     = event.beta;
  var gamma    = event.gamma;

  console.log()

  // Do stuff with the new orientation data
});
*/
$(function() {
	setRoute(router_var.home, true);
	showLoader();
	addContentActions();

	setDocumentHeight();
	start();
});
