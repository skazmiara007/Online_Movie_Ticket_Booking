//NOW SHOWING
var i= 0;
var path = new Array();
// LIST OF IMAGES
path[0] = "images/poster/free_guy.jpg";
path[1] = "images/poster/matrix.jpg";
path[2] = "images/poster/minari.jpg";
path[3] = "images/poster/spiderman.jpg";
path[4] = "images/poster/shang_chi.jpg";
path[5] = "images/poster/sonic.jpg";

function slideImages()
{
   document.slide.src = path[i];
   if(i < path.length - 1) i++; else i = 0;
   setTimeout("slideImages()",3000);
}

//UPCOMMING MOVIE
var j= 0;
var upcomming = new Array();
// LIST OF UPCOMMIN MOVIES
upcomming[0] = "images/poster/upcomming/dr_strange.jpg";
upcomming[1] = "images/poster/upcomming/avatar.jpg";
upcomming[2] = "images/poster/upcomming/jurassic_world.jpg";
upcomming[3] = "images/poster/upcomming/minions.jpg";
upcomming[4] = "images/poster/upcomming/thor.jpg";

function slideUpcomming()
{
   document.upcomming.src = upcomming[j];
   if(j < upcomming.length - 1) j++; else j = 0;
   setTimeout("slideUpcomming()",3000);
}
//end of upcomming poster

//Releasing next
var k= 0;
var releasing= new Array();
// LIST OF RELEASING MOVIES
releasing[0] = "images/poster/releasing/adam.jpg";
releasing[1] = "images/poster/releasing/uncharted.jpg";
releasing[2] = "images/poster/releasing/contractor.jpg";
releasing[3] = "images/poster/releasing/dune.jpg";
releasing[4] = "images/poster/releasing/the_lost_city.jpg";

function slideReleasing()
{
   document.releasing.src = releasing[k];
   if(k < releasing.length - 1) k++; else k = 0;
   setTimeout("slideReleasing()",3000);
}
//end of releasing next
