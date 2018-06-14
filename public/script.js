

'use strict';

(function ($) {
	

  //CART
  //CART LOADS FOR THE FIRST TIME AFTER ONE MINUTE, IT IS UPDATES EVERY MINUTE AFTER THAT
	
	function ajax_call(){
		var cart = $('#cart');
		var small_cart = $('#small-cart');
		$('.cart-items ul', cart).empty();
		$('.cart-items ul', small_cart).empty();
       $.ajax({
    type : "GET",
    url : "cart/get",
    dataType: 'json',
		cache: false,
    success: function (response) { 
      cart.addClass('not-empty');
      $('.amount', cart).html(response.totalItems);
      $('.sum', cart).html('&euro;' + response.totalPrice);
      $.each(response.items, function( key, value ) {
        $('.cart-items ul', cart).prepend(
          '<li>'+
          '<img src="' + value.imgSrc + '" alt="">' +
          '<span class="name"><strong>'+ value.name + '</strong>' +value.qty + '&nbsp;x&nbsp;&euro;&nbsp;' + value.price +'</span>' +
          '<button class="remove">x</button>' +
          '</li>'
        );
      });
			
      small_cart.addClass('not-empty');
      $('.amount', small_cart).html(response.totalItems);
      $('.sum', small_cart).html('&euro;' + response.totalPrice);
      $.each(response.items, function( key, value ) {
        $('.cart-items ul', small_cart).prepend(
          '<li>'+
          '<img src="' + value.imgSrc + '" alt="">' +
          '<span class="name"><strong>'+ value.name + '</strong>' +value.qty + '&nbsp;x&nbsp;&euro;&nbsp;' + value.price +'</span>' +
          '<button class="remove">x</button>' +
          '</li>'
        );
      });
    }
  });
}

setInterval(ajax_call,60000);
	
function showCart() {
    var x = document.getElementById("cartitems");
    if (x.style.display === "none") {
         $('.cart-items').addClass('visible');
    }
	  else if(checker === false) {
           $('.cart-items').removeClass('visible');
    }
};
	
  //HIDE CART
  function hideCart() {
    $('.cart-items').removeClass('visible');
    $('.cart-button').removeClass('active');
  }

  //SHOW CART
  function showCart() {
    $('.cart-items').addClass('visible');
    $('.cart-button').addClass('active');
  }

	
  //SHOW AND HIDE ON BUTTON CLICK

    $('.cart-button').on('click', function() {
      if ($(this).hasClass('active')) {
        hideCart();
      }
      else {
        showCart();
      }
    });



  $(window).on('resize', function() {
    hideCart();
  });


  



  //NEWSLETTER
  $("#form-newsletter").submit(function (e) {
    e.preventDefault();
    var $validationMessage = $('#validation-message');
    $validationMessage.removeClass().addClass('loading').html('Subscribing to newsletter...');
    $validationMessage.show();
    var getNewsletter = function() {
      $.ajax({
        type : "GET",
        url : "newsletter/subscribe",
        dataType: 'json',
        data: {'email':$("#subscribe").val()},
        error: function (response) {
          if (response.status == '422') {
            $validationMessage.removeClass().addClass('failed').html('Email verification failed.');
          }
          else {
            $validationMessage.removeClass().addClass('success').html('Subscription successful.');
          }
        }
      });
    };
    setTimeout(getNewsletter, 2000);
  });

	

	
})(jQuery);

