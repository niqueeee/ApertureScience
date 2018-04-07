<html>

  <head>
    <title>APERTURE SCIENCE PHARMACEUTICALS </title>
    <link rel="stylesheet" type="text/css" href="assets/for-shop/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="assets/for-shop/css/etalage.css">
    <link rel="stylesheet" type="text/css" href="assets/for-shop/css/fwslider.css">
    <link rel="stylesheet" type="text/css" href="assets/for-shop/css/jquery.fancybox.css">
    <link rel="stylesheet" type="text/css" href="assets/for-shop/css/magnific-popup.css">
    <link rel="stylesheet" type="text/css" href="assets/for-shop/css/style.css">
    

    <script type="text/javascript" src="assets/for-shop/js/classie.js"></script>
    <script type="text/javascript" src="assets/for-shop/js/fwslider.js"></script>
    <script type="text/javascript" src="assets/for-shop/js/jquery.etalage.min.js"></script>
    <script type="text/javascript" src="assets/for-shop/js/jquery.fancybox.js"></script>
    <script type="text/javascript" src="assets/for-shop/js/jquery.magnific-popup.js"></script>
    <script type="text/javascript" src="assets/for-shop/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/for-shop/js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="assets/for-shop/js/responsive-nav.js"></script>
    <script type="text/javascript" src="assets/for-shop/js/uisearch.js"></script>
    <script type="application/x-javascript"> 
      addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } 
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $(".dropdown img.flag").addClass("flagvisibility");

            $(".dropdown dt a").click(function() {
                $(".dropdown dd ul").toggle();
            });
                        
            $(".dropdown dd ul li a").click(function() {
                var text = $(this).html();
                $(".dropdown dt a span").html(text);
                $(".dropdown dd ul").hide();
                $("#result").html("Selected value is: " + getSelectedValue("sample"));
            });
                        
            function getSelectedValue(id) {
                return $("#" + id).find("dt a span.value").html();
            }

            $(document).bind('click', function(e) {
                var $clicked = $(e.target);
                if (! $clicked.parents().hasClass("dropdown"))
                    $(".dropdown dd ul").hide();
            });


            $("#flagSwitcher").click(function() {
                $(".dropdown img.flag").toggleClass("flagvisibility");
            });
        });
     </script>





  </head>
<body>