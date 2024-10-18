<?php
/* Template Name: coming-soon */
?>

<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>

	<!-- CSS frame work -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- main-stylesheet -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">

    <!-- icon font -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet" />

    <!-- scroll animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">


</head>

<body class="dark" <?php body_class(); ?>>

    <section style="height:100vh" class="d-flex flex-column justify-content-center align-items-center text-center">
    <i class="ri-tools-line text-white opacity-50" style="font-size:50px"></i>    
    <h1>Site is under maintenance</h1>
        <p>We're working hard to improve the user experience. Stay Tuned!</p>
    </section>
      
    <?php wp_footer(); ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"
    integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>
<script>
    $(window).scroll(function () {
        var scroll = $(window).scrollTop();

        if (scroll >= 350) {
            $(".header").addClass("top-fixed");
        } else {
            $(".header").removeClass("top-fixed");
        }
    });
    $(document).ready(function () {
        (function () {
            var showChar = 400;
            var ellipsestext = "...";

            $(".truncate").each(function () {
                var content = $(this).html();
                if (content.length > showChar) {
                    var c = content.substr(0, showChar);
                    var h = content;
                    var html =
                        '<div class="truncate-text" style="display:block">' +
                        c +
                        '<span class="moreellipses">' +
                        ellipsestext +
                        '&nbsp;&nbsp;<a href="" class="moreless more">more</a></span></span></div><div class="truncate-text" style="display:none">' +
                        h +
                        '<a href="" class="moreless less">Less</a></span></div>';

                    $(this).html(html);
                }
            });

            $(".moreless").click(function () {
                var thisEl = $(this);
                var cT = thisEl.closest(".truncate-text");
                var tX = ".truncate-text";

                if (thisEl.hasClass("less")) {
                    cT.prev(tX).toggle();
                    cT.slideToggle();
                } else {
                    cT.toggle();
                    cT.next(tX).fadeToggle();
                }
                return false;
            });
            /* end iffe */
        })();

        /* end ready */
    });
</script>

</body>

</html>