// JavaScript Document

//Window Height

$(document).ready(function(){

  $("#login").css("height", $(window).height());

  scale();
  routes_selected();

  $(window).resize(function() {

    scale();

  });

    $("#menu_button").click(function(){

  		if ($("#menu").css("top").replace(/[^-\d\.]/g, '') > 0){
        $("#menu").css("top", 0);
        $("#menu_button").css("bottom", $(window).height()-50);
        $("#menu_button").text("x");

  		}

  		else if ($("#menu").css("top").replace(/[^-\d\.]/g, '') == 0){
        $("#menu").css("top", $(window).height());
        $("#menu_button").css("bottom", 0);
        $("#menu_button").text("Z");
  		}
  	});

    $("#close_button").click(function(){

        $("#menu").css("top", $(window).height());
        $("#menu_button").css("display", "block");

    });

    $("#routes_button").click(function(){

      routes_selected();

    });

    $("#profile_button").click(function(){

      profile_selected();

    });

    function routes_selected(){

      $("#routes_button").css("background-color", "#252525");
      $("#profile_button").css("background-color", "#404040");

        $("#ajax_wrapper").empty().append();
        $.ajax({ url: "routes.html", success: function(html) {
          $("#ajax_wrapper").empty().append(html);
        }
        });

    }

    function profile_selected(){

      $("#routes_button").css("background-color", "#404040");
      $("#profile_button").css("background-color", "#252525");

        $("#ajax_wrapper").empty().append();
        $.ajax({ url: "profile.html", success: function(html) {
          $("#ajax_wrapper").empty().append(html);
        }
        });

    };

    function scale(){

      $("#map_wrapper").css("height", $(window).height());
      $("#map_wrapper").css("width", $(window).width());

      $(".pin").css("width", ($(window).width()*0.16));
      $(".pin").css("height", ($(".pin").css("height")*1.5));

      $(".cpin").css("width", ($(window).width()*0.16));
      $(".cpin").css("height", ($(window).width()*0.16));

      //$(".pin").css("left", (($(".pin").css("left")*($(window).width()))*0.3));
      //$(".pin").css("top", (($(".pin").css("top")*($(window).width()))*0.3));

      $(".pin").css("left", ($(".pin").css("left") *($(window).width())));
      $(".pin").css("top", ($(".pin").css("top") *($(window).width())));

      $("#map").css("width", ($(window).width()*4.85));
      $("#map").css("height", ($(window).width()*4.85));

      $("#menu").css("top", $(window).height());
      $("#menu_button").css("left", ($(window).width()*0.5)-25);
      $("#ajax_wrapper").css("height", $(window).height()-100);


    };




})();
