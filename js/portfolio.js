function randomNumber(range) {
  return Math.round( Math.random() * range );
}

    $(document).ready(function() {

 // Only change code below this line.

      $.getJSON("../json/portfolio.json", function(data){
           var html="";
		  
           data.reverse().forEach(function(portfolioItem) {

               html += "<div class = 'col-lg-3 col-md-4 col-sm-6'>" + "<div class = 'view view-first'>" + "<img src = '" + portfolioItem.image + "' " + "alt='" + portfolioItem.altText + "'>" + "<div class = 'mask'>" + "<h2>" + portfolioItem.title + "</h2>" + "<p>" + portfolioItem.description + "</p>" + "<a target='blank_' class='info' href= '" + portfolioItem.link + "'>View More</a>" + "</div>" + "</div>" + "</div>";
            });
		  
		     
            $(".portfolio-item").html(html);
      });

// Only change code above this line.

});
