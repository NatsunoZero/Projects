$(document).ready(function() {
				$('#ShoppingBagsIco').hover(function() {
					$("#MarkBoxShopBag").fadeToggle();
				}, function() {
					if(document.getElementById("MarkBoxShopBag").hover() == ture);
					//		           $("#MarkBoxShopBag").fadeToggle();
				});

				$("#MarkBoxShopBag").hover(function() {
					if(document.getElementById("MarkBoxShopBag").style.display == ture);
				}, function() {
					$(this).fadeToggle();
				});
			})