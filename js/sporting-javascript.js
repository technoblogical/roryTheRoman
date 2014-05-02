$( document ).ready(function() {
	//get the header width.
	var headerWidth = $("#header-image").width();

	//start building the accordion
	var accordionString = '<div id="outer-accordion-box"><p>Please Click An Image Below</p>';

	//declares a varibale to see if the accordion will get built
	var shouldIBuildAnAccordion = false;

	//count the images for the accordion
	var numberOfImages = 0;

	//Hide the images in the accordion class
	$('.accordion').hide();

	//handles all the items in the accordion class
	$('.accordion').each(function(){		
		//this only runs if there is an item in the accordion class. So yes, you should build an accordion.
		shouldIBuildAnAccordion = true;
		var imageSource = $(this).attr('src');
		if ($(this).attr('title')){
			var imageText = $(this).attr('title');
		} else {
			var imageText = '';
		};
		numberOfImages++;
		accordionString += '<div style="background-image:url(\''+imageSource+'\')" class="accordion-image"><p>';

		//This sees if there is a hayperlink associated with the image...
		if ($(this).parent('a')){
			//If there is grab it
			imageLink = $(this).parent().attr('href');
			//and apply it to the text in the accordion
			accordionString +='<a href="'+imageLink+'" rel="nofollow">'+imageText+'</a></p></div>';
		} else {
			//if there isn't, just insert the text.
			accordionString += imageText+'</p></div>';
		}; // end of if/else for hyperlinks
	});

	//finish off the accordion
	accordionString +='<br/><div style="clear:both;"></div></div>';

	//if this variable evaluates to true...
	if (shouldIBuildAnAccordion){
		//put the accordion in #header-image
		document.getElementById('header-image').innerHTML=accordionString;
	};

	//this will be width of all images in the accordion. It used in the CSS
	var modifiedImageWidth = Math.floor(headerWidth/numberOfImages);

	//figure out what the large one needs to be when clicked
	var viewedImageWidth = headerWidth-(modifiedImageWidth/2)*(numberOfImages-1);

	//some CSS
	$('#outer-accordion-box').css({'background-color':'#000','color':'#fff'});
	$('#outer-accordion-box>p').css({'background-color':'#000','font-size':'150%','text-align':'center'});
	$('.accordion-image').css({'background-repeat':'no-repeat','background-size':'auto 200px','display':'inline-block','height':'200px','margin':'1px auto','overflow':'hidden','width':modifiedImageWidth});
	$('.accordion-image>p').css({'background':'rgba(0,0,0,0.5)','color':'#fff','display':'none','float':'right','font-family':'monospace','height':'200px','text-shadow':'1px 1px #000,-1px 1px #000,1px -1px #000,-1px -1px #000'});
	$('.accordion-image a').css({'color':'#fff','float':'right','font-family':'monospace','text-decoration':'none','text-shadow':'1px 1px #000,-1px 1px #000,1px -1px #000,-1px -1px #000'});
	//$('').css({'background-color':'#000','font-size':'150%'});


	//This part causes the one to expand and the others to contract when clicked
	$('.accordion-image').click(function(){
		$('.accordion-image').width(modifiedImageWidth/2);
		$('.accordion-image p').hide();
		$(this).width(viewedImageWidth);
		$(this).children('p').fadeToggle();
	});
}); //This is the end of the Document Ready function! DO NOT DELETE!