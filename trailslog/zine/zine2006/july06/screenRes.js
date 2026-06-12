
/*
Script by RoBorg
RoBorg@geniusbug.com
http://javascript.geniusbug.com | http://www.roborg.co.uk
Please do not remove or edit this message
Please link to this website if you use this script!
*/



switch(screen.width)
{
	case 640: goToPage('index.html?size=640'); break;
	case 800: goToPage('index.html?size=800'); break;
	case 1024: goToPage('index.html?size=1024'); break;
	case 1152: goToPage('index.html?size=1152'); break;
	case 1280: goToPage('index.html?size=1280'); break;
	case 1600: goToPage('index.html?size=1600'); break;
	default : goToPage('index.html?size=1024'); break;
}



function goToPage(url)
{
	window.location.replace(url);
}

