  var $brandImage = $(".flex-box");
        $(window).scroll(function () {
            // $scrollHelper.html("scroll triggered: " + ++count_scroll);
            if (this.pageYOffset <= 140) { // 140 é a distancia que vc rola antes da logo sumir
                $brandImage.fadeOut();
            } else {
                $brandImage.fadeIn();
            }
        });