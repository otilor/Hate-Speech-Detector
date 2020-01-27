var firstPass = true;

 $("#firstLine").on("animationend", function() {
   if (firstPass) {
    $("#secondLine").addClass("animated fadeInUp");
    $("#secondLine").css("visibility", "visible");
    $("hr").css("visibility", "visible");
    $("hr").addClass("animated fadeInLeft");
    firstPass = false; 
   }
});  

$("#secondLine").on("animationend", function() {
  $("body").addClass("movedBackground");
});

$("body").on("transitionend", function(){
  $("#entryBox").css("visibility", "visible");
  $("#entryBox").addClass("animated fadeIn");
  $("#navBottom").css("visibility", "visible");
  $("#navBottom").addClass("animated fadeIn");
});

$("input").on("focusin", function(){
  $("#firstLine").addClass("fadeOutRight");
  $("#secondLine").addClass("fadeOutLeft");
  $("#ready").css("visibility", "visible");
  $("#ready").addClass("fadeIn");
  $("#ready").removeClass("fadeOut");
  $("#rocketShip").css("visibility", "visible");
  var lineDrawing = anime({
    targets: '#lineDrawing .lines path',
    strokeDashoffset: [anime.setDashoffset, 0],
    easing: 'easeInOutSine',
    duration: 1500,
    delay: function(el, i) { return i * 250 },
    direction: 'normal'
  });
});

$("input").on("focusout", function(){
  $("#firstLine").addClass("fadeInRight");
  $("#firstLine").removeClass("fadeOutRight fadeInDown");
  $("#secondLine").addClass("fadeInLeft");
  $("#secondLine").removeClass("fadeOutLeft fadeInUp");
  $("#ready").removeClass("fadeIn");
  $("#ready").addClass("fadeOut");
  var lineDrawing = anime({
    targets: '#lineDrawing .lines path',
    strokeDashoffset: [anime.setDashoffset, 0],
    easing: 'easeInOutSine',
    duration: 1500,
    delay: function(el, i) { return i * 250 },
    direction: 'reverse'
  });
});

$("button").on("click", function(){
    moveContent();
});

var name = "";

function moveContent(){
  name = getName();
  $("#content").animate({
    marginTop: '-800px'
  }, 1500, function(){
    $("#content").html(" ");
    $("#content").css("margin-top", "0");
    $("#content").html("<h1 id='afterAnimationHeader' class='animated fadeIn'>" + name + ", this is your story.</h1>");
  });
}

function getName(){
 return $("#mainInput").val();
}

$("#mainInput").on('keyup', function (e) {
    if (e.keyCode == 13) {
        moveContent();
    }
});