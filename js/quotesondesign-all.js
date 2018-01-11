// Quotes from quotesondesign.com all

var bgColors = ["#cd5c5c", "#cd785b", "#cd945b", "#cdb05b", "#cdcd5b", "#b0cd5b", "#94cd5b", "#78cd5b", "#5bcd5b", "#5bcd78", "#5bcd94", "#5bcdb0", "#5bcdcd", "#5bb0cd", "#5b94cd", "#5b78cd", "#5b5bcd", "#785bcd", "#945bcd", "#b05bcd", "#cd5bcd", "#cd5bb0", "#cd5b94", "#cd5b78", "#cd5b5b"]
  
function randomNumber(range) {
  return Math.round( Math.random() * range );
}


    
// Random Quote Generator
jQuery( function( $ ) {
  $( '.btn-newquote' ).on( 'click', function ( e ) {
    e.preventDefault();
      var randomColor = bgColors[randomNumber(bgColors.length-1)];
      
    $.ajax( {
      url: 'http://quotesondesign.com/wp-json/posts?filter[orderby]=rand&filter[posts_per_page]=1',
      success: function ( data ) {
        var post = data.shift(); // The data is an array of posts. Grab the first one.
         /* $('#random-quotes blockquote').css("background-color", randomColor);*/
          $( '.quote' ).html( '<i class="fa fa-quote-right" aria-hidden="true"></i>' + post.content);
          $(".quote i").css("color", randomColor);
          $( '.author' ).html( "-" + post.title );
          $(".btn-tweet").attr("href", "https://twitter.com/intent/tweet?text=" + post.content + " - " + post.title).css("background-color", randomColor);
          $(".btn-newquote").css("background-color", randomColor);
          
      },
      cache: false
    } );
  } );
} );
    