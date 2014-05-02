$( document ).ready(function() {

	//This string will ultimately be the gallery.
	var dumbGallery = '';


	//Need to figure out if this is the first image.
	var firstImageAddress = true;

	//var this is a counter. Only turn it on if you need it.
	var dumbGalleryCounter = 1;

	//Find each image
	$('.gallery').each(function(){

		//Gets the image source
		var imageSource=$(this).attr('src');

		//gets the image title
		if ($(this).attr('title')){
			var imageTitle=$(this).attr('title');
		} else {
			var imageTitle='';
		};

		//hide the original item...
		$(this).parents('p').hide();

		//If it is, then run this function.
		if (firstImageAddress){

			//set first image to fals so we don't do this again.
			firstImageAddress=false;

			//Build the large box with the first image.
			dumbGallery+='<div style="clear:both;"></div><div id="dumb-gallery-big-box" style="background-image:url(\''+imageSource+'\')"></div>';

		}; //end  of first image if statement

		//okay, now stick in the little thumbnail boxes
		dumbGallery += '<div class="dumb-gallery-little-box" style="background-image:url(\''+imageSource+'\')" title="'+imageTitle+'">';

		//This bit is for the counter, if needed...
		dumbGallery+='#'+dumbGalleryCounter;
		dumbGalleryCounter++;

		//This bit is always needed
		dumbGallery+='</div>';

	});

	//This is the part that finally adds the images to the gallery.
	//$('.section').append(dumbGallery);
	$('section p').last().after(dumbGallery);

	//CSS
	$('#dumb-gallery-big-box').css({'background-repeat':'no-repeat','background-size':'440px','float':'right','margin':'0px','height':'441px','width':'441px'});
	$('.dumb-gallery-little-box').css({'background-repeat':'no-repeat','background-size':'100px','color':'transparent','float':'left','font-family':'monospace','font-size':'150%','height':'100px','margin':'5px','width':'100px'});
	$('.dumb-gallery-little-box').hover(function(){
		$('.dumb-gallery-little-box').css({'color':'transparent','text-shadow':'0 0 rgba(0,0,0,0)'});
		$(this).css({'color':'#fff','text-shadow':'1px 1px #000,-1px 1px #000,1px -1px #000,-1px -1px #000'});
	});
	//$('').css({'background-color':'#000','font-size':'150%'});

	$('.dumb-gallery-little-box').click(function(){
		$('#dumb-gallery-big-box').css({'background-image':$(this).css('background-image')})
	});
}); //This is the end of the Document Ready function! DO NOT DELETE!