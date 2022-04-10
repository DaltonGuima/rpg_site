var btn = $('#btntop');

$( "li" ).hover(
    function() {
        $(this).find("span").stop().animate({
        width:"100%",
        opacity:"1",
    }, 400, function () {
    })
    }, function() {
        $(this).find("span").stop().animate({
        width:"0%",
        opacity:"0",
    }, 400, function () {
    })
    }
);

(function() {
    $(document).ready(function() {
      return $(window).scroll(function() {
        return $(window).scrollTop() > 200 ? $("#back-to-top").addClass("show") : $("#back-to-top").removeClass("show")
      }), $("#back-to-top").click(function() {
        return $("html,body").animate({
          scrollTop: "0"
        })
      })
    })
  }).call(this);

