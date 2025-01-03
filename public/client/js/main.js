
$(document).ready(function(){
  // Show or hide the button
  $(window).scroll(function() {
    if ($(this).scrollTop() > 100) {
      $('#back-to-top').fadeIn();
    } else {
      $('#back-to-top').fadeOut();
    }
  });

  // Scroll to the top when the button is clicked
  $('#back-to-top').click(function() {
    $('html, body').animate({scrollTop: 0}, 100);
    return false;
  });

//play/pause on double click on the video
  $('video').on('click', function (e) {
    if (this.paused) {
      this.play();
    }else{
      this.pause();
    }
  });

//play/pause of the video when the modal opens/closes.
  $('.open-box').on('show.bs.modal', function() { //show modal event for an element which has class 'modal'
    var id = $(this).attr('id'); //saves in the var the ID value of the opened modal
    var video = document.getElementById(id).querySelectorAll("video"); //Find the element 'video' inside of the modal defined by the ID previosly saved

    $(video)[0].play(); //plays what we saved on 'video' variable
  });

  $('.open-box').on('hidden.bs.modal', function() { //show modal event for an element which has class 'modal'
    var id = $(this).attr('id');//saves in the var the ID value of the closed modal
    var video = document.getElementById(id).querySelectorAll("video");//Find the element 'video' inside of the modal defined by the ID previosly saved

    $(video)[0].pause(); //pauses the video
    $(video)[0].currentTime = 0; //rests the video to 0 for have it from the beging when the user opens the modal again
  });

});

//active-link
jQuery(function ($) {
  var path = window.location.href; // because the 'href' property of the DOM element is the absolute path
  $('.side-menu li a').each(function () {
    if (this.href === path) {
      $(this).addClass('active');
    }
  });
});

// slider
$(document).ready(function () {
  $('.responsive').slick({
    // dots: true,
    infinite: true,
    speed: 300,
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    responsive: [{
      breakpoint: 1024,
      settings: {
        slidesToShow: 8,
        slidesToScroll: 1,
        // centerMode: true,

      }
    }, {
      breakpoint: 835,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        infinite: true,

      }
    }, {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        infinite: true,

      }
    }, {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
      }
    }, {
      breakpoint: 320,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
      }
    }]
  });
});

// Function to simulate typing effect for each element with the class .typed-text
function typeEffect(element, text, speed) {
  var index = 0;
  var typing = setInterval(function() {
    // Append the next character to the element
    $(element).append(text[index++]);

    // If reached the end of the text, clear the interval
    if (index === text.length) {
      clearInterval(typing);
    }
  }, speed);
}

// Function to delay and then start typing effect for each element
function startTyping() {
  var speed = 30; // Speed of typing in milliseconds
  var delay = 500; // Delay between each line in milliseconds

  // Iterate over each element with the class .typed-text
  $('.typed-text').each(function(index) {
    var text = $(this).data('text'); // Get the text from the data-text attribute

    // Delay before starting typing effect for each line
    setTimeout(function() {
      typeEffect(this, text, speed); // Call the typeEffect function for each element
    }.bind(this), index * delay); // Apply delay based on index of the element
  });
}

// Call the startTyping function to begin the typing effect
startTyping();

//click to copy
$(document).ready(function() {
  $(".copy-button").click(function() {
    let copyText = $($(this).data('copyid')).text()
    copyToClipboard(copyText);
  });
  function copyToClipboard(text) {
    navigator.clipboard.writeText(text)
  }
});

var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
  return new bootstrap.Popover(popoverTriggerEl)
})
const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))

$(document).ready(function () {
  // Iterate over each .sparkline element
  $('.sparkline-up').each(function () {
    // Get data from the data-values attribute
    var data = $(this).data('values');
    // Convert string to array if needed
    if (typeof data === 'string') {
      data = JSON.parse(data);
    }
    // Initialize sparkline with the extracted data
    $(this).sparkline(data, {
      type: 'line',
      fillColor: false,
      spotColor: false,
      minSpotColor: false,
      lineColor: '#1acc4e',
      width: '200',
      height: '30',
      maxSpotColor: false
    });
  });

  $('.sparkline-down').each(function () {
    // Get data from the data-values attribute
    var data = $(this).data('values');
    // Convert string to array if needed
    if (typeof data === 'string') {
      data = JSON.parse(data);
    }
    // Initialize sparkline with the extracted data
    $(this).sparkline(data, {
      type: 'line',
      fillColor: false,
      spotColor: false,
      minSpotColor: false,
      lineColor: '#cd0d0d',
      width: '200',
      height: '30',
      maxSpotColor: false
    });
  });
});

function countdown(timeInSeconds) {
    var timer = timeInSeconds, hours, minutes, seconds;
    var intervalId = setInterval(function () {

        hours = parseInt((timer / 3600) % 24, 10);
        minutes = parseInt((timer / 60) % 60, 10);
        seconds = parseInt(timer % 60, 10);

        hours = hours < 10 ? "0" + hours : hours;
        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;

        // console.log(hours + ":" + minutes + ":" + seconds);

        if (--timer < 0) {
            clearInterval(intervalId);
            // console.log("Countdown Finished.");
        }
    }, 1000);
}

countdown(5000); // Count down from 5000 seconds

$(document).ready(function() {
  // Select all buttons with the class "replace-space"
  $(".replace-space").each(function() {
    // Get the text content of the button
    var buttonText = $(this).text();

    // Replace spaces with &nbsp;
    var newText = buttonText.replace(/ /g, "&nbsp;");

    // Set the new HTML content of the button
    $(this).html(newText);
  });
});


$.fn.extend({
  treed: function (o) {

    var openedClass = 'glyphicon-minus-sign';
    var closedClass = 'glyphicon-plus-sign';

    if (typeof o != 'undefined'){
      if (typeof o.openedClass != 'undefined'){
        openedClass = o.openedClass;
      }
      if (typeof o.closedClass != 'undefined'){
        closedClass = o.closedClass;
      }
    };

    //initialize each of the top levels
    var tree = $(this);
    tree.addClass("tree");
    tree.find('li').has("ul").each(function () {
      var branch = $(this); //li with children ul
      branch.prepend("<i class='indicator glyphicon " + closedClass + "'></i>");
      branch.addClass('branch');
      branch.on('click', function (e) {
        if (this == e.target) {
          var icon = $(this).children('i:first');
          icon.toggleClass(openedClass + " " + closedClass);
          $(this).children().children().toggle();
        }
      })
      branch.children().children().toggle();
    });
    //fire event from the dynamically added icon
    tree.find('.branch .indicator').each(function(){
      $(this).on('click', function () {
        $(this).closest('li').click();
      });
    });
    //fire event to open branch if the li contains an anchor instead of text
    tree.find('.branch>a').each(function () {
      $(this).on('click', function (e) {
        $(this).closest('li').click();
        e.preventDefault();
      });
    });
    //fire event to open branch if the li contains a button instead of text
    tree.find('.branch>button').each(function () {
      $(this).on('click', function (e) {
        $(this).closest('li').click();
        e.preventDefault();
      });
    });
  }
});

//Initialization of treeviews
$('#tree1').treed();
