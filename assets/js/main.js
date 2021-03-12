$(document).ready(function () {
    
    //Smooth Scroll
    $(function() {
        $('html').smoothScroll(500);
    });

    Testimonials = function() {
      var e = $(".section_testimonials__carousel");
      e.length && e.each(function() {
          $(this).flickity({
              cellAlign: "left",
              wrapAround: !0,
              imagesLoaded: !0
          })
      })
    }();

    // Collapse Navbar
  var navbarCollapse = function() {
    if ($("#mainNav").offset().top > 100) {
      $("#mainNav").addClass("navbar-shrink");
    } else {
      $("#mainNav").removeClass("navbar-shrink");
    }
  };
  // Collapse now if page is not at top
  navbarCollapse();
  // Collapse the navbar when page is scrolled
  $(window).scroll(navbarCollapse);
  
  var swiper = new Swiper('.swiper-container', {
      spaceBetween: 30,
      centeredSlides: true,
      autoplay: {
        delay: 5000,
        disableOnInteraction: false,
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
    
    var ckbox = $('#school');

    $('input').on('click',function () {
        if (ckbox.is(':checked')) {
            $("#schoolnamebox").removeClass("d-none");
        } else {
            $("#schoolnamebox").addClass("d-none");
        }
    });

});

//Count Down
// Set the date we're counting down to
var countDownDate = new Date("Dec 31, 2020 00:00:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();
    
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
    
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Output the result in an element with id="countdown"

  document.getElementById("days").innerHTML = singleOrDouble(days);
  document.getElementById("hours").innerHTML = singleOrDouble(hours);
  document.getElementById("minutes").innerHTML = singleOrDouble(minutes);
  document.getElementById("seconds").innerHTML = singleOrDouble(seconds);
    
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("countdown").innerHTML = "EXPIRED";
  }
}, 1000);

function singleOrDouble(num){
  if(num > 10){
    return num;
  }else{
    return "0" + num;
  }
}

function exportTableToCSV(filename, table_name) {
      var csv = [];
      var rows = document.querySelectorAll(table_name);
      for (var i = 0; i < rows.length; i++) {
          var row = [], cols = rows[i].querySelectorAll("td, th");
          for (var j = 0; j < cols.length; j++) 
              row.push(cols[j].innerText);   
          csv.push(row.join(","));        
      }
      downloadCSV(csv.join("\n"), filename);
  }

  function downloadCSV(csv, filename) {
      var csvFile;
      var downloadLink;
      csvFile = new Blob([csv], {type: "text/csv"});
      downloadLink = document.createElement("a");
      downloadLink.download = filename;
      downloadLink.href = window.URL.createObjectURL(csvFile);
      downloadLink.style.display = "none";
      document.body.appendChild(downloadLink);
      downloadLink.click();
  }