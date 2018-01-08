var list = $('#webSocialList');
var twitter = $('#webSocialTwitter');
var twitterI = twitter.children('i');
var google = $('#webSocialGoogle');
var googleI = google.children('i');
var linkedin = $('#webSocialLinkedin');
var linkedinI = linkedin.children('i');
var icon = $('#webSocialIcon');
var active = 1;
var twittertmp = 1;
var googletmp = 1;
var linkedintmp = 1;


var tl = new TimelineMax();
tl.fromTo([twitter, twitter], 1, {display: "none", width: 0}, {display: "block", width: "40px"});
tl.fromTo([google, google], 1, {display: "none", width: 0}, {display: "block",  width: "40px"}, "-=1");
tl.fromTo([linkedin, linkedin], 1, {display: "none", width: 0}, {display: "block", width: "40px"}, "-=1");
tl.fromTo([icon, icon], 1, {color: "#74b6e8"}, {color: "#3a7eb1"}, "-=1");
tl.pause();


var twittertl = new TimelineMax();
twittertl.fromTo([twitter, twitter], 1, {width: "40px"}, {width: "180px"});
twittertl.pause();

var googletl = new TimelineMax();
googletl.fromTo([google, google], 1, {width: "40px"}, {width: "180px"});
googletl.pause();

var linkedintl = new TimelineMax();
linkedintl.fromTo([linkedin, linkedin], 1, {width: "40px"}, {width: "180px"});
linkedintl.pause();

icon.on('click', function(){
  if(active == 1){
     tl.play();
    active = 0;
  } else {
    twittertl.reverse();
    googletl.reverse();
    linkedintl.reverse();
    tl.timeScale(2).reverse();
    active = 1;
    twittertmp = 1;
    googletmp = 1;
    linkedintmp = 1;
  }
});

twitterI.on('click', function(){
   if(twittertmp == 1){
     twittertl.play();
    twittertmp = 0;
  } else {
    twittertl.timeScale(2).reverse();
    twittertmp = 1;
  }
});

googleI.on('click', function(){
   if(googletmp == 1){
     googletl.play();
    googletmp = 0;
  } else {
    googletl.timeScale(2).reverse();
    googletmp = 1;
  }
});

linkedinI.on('click', function(){
   if(linkedintmp == 1){
     linkedintl.play();
    linkedintmp = 0;
  } else {
    linkedintl.timeScale(2).reverse();
    linkedintmp = 1;
  }
});
