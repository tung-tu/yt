<?php
 include_once  '../data/config.php';
 include_once  '../data/head.php';

 
 ?>
 <!-- Input Group -->
<div class="input-group input-group-merge">
  <input type="text" id="iconExample" class="form-control" value="I am anaaaaaaaaaaaaaaaaaaaaaaaa icon example">

  <a class="js-clipboard input-group-append" href="javascript:;"
     data-hs-clipboard-options='{
       "contentTarget": "#iconExample",
       "classChangeTarget": "#iconExampleLinkIcon",
       "defaultClass": "tio-copy",
       "successClass": "tio-done"
     }'>
    <span class="input-group-text">
      <span id="iconExampleLinkIcon" class="tio-copy"></span>
    </span>
  </a>
</div>
<!-- End Input Group -->
<script src="/assets/js/hs-clipboard.js"></script>
    <script src="/node_modules/clipboard/dist/clipboard.min.js"></script>
    <!-- JS Implementing Plugins -->
    <script src="/assets/js/vendor.min.js"></script>

    <!-- JS Front -->
    <script src="/assets/js/theme.min.js"></script>

    <!-- JS Plugins Init. -->
    <script>
      $(document).on('ready', function () {
        // INITIALIZATION OF NAVBAR VERTICAL NAVIGATION
        // =======================================================
        var sidebar = $('.js-navbar-vertical-aside').hsSideNav();


        // INITIALIZATION OF TOOLTIP IN NAVBAR VERTICAL MENU
        // =======================================================
        $('.js-nav-tooltip-link').tooltip({ boundary: 'window' })


        // INITIALIZATION OF GO TO
        // =======================================================
        $('.js-go-to').each(function () {
          var goTo = new HSGoTo($(this)).init();
        });


        // INITIALIZATION OF NAV SCROLLER
        // =======================================================
        $('.js-nav-scroller').each(function () {
          new HsNavScroller($(this), {
            delay: 400,
          }).init()
        });


        // INITIALIZATION OF LISTJS COMPONENT
        // =======================================================
        var docsSearch = $.HSCore.components.HSList.init('#docsSearch');


        // GET JSON FILE RESULTS
        // =======================================================
        $.getJSON('/assets/json/docs-search.json', function(data) {
          docsSearch.add(data);
        });

        
        // INITIALIZATION OF CLIPBOARD
        // =======================================================
        $('.js-clipboard').each(function() {
          $.HSCore.components.HSClipboard.init(this);
        });
      });
    </script>

    <!-- IE Support -->
    <script>
      if (/MSIE \d|Trident.*rv:/.test(navigator.userAgent)) document.write('<script src="/assets/vendor/babel-polyfill/polyfill.min.js"><\/script>');
    </script>
  </body>

<!-- Mirrored from htmlstream.com/front-dashboard/documentation/clipboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Sep 2021 07:44:02 GMT -->
</html>