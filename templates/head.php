<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="description" content="Ledgerium is developed as a decentralized accounting ledger system - Blockchain as a Service (BaaS) which rationalizes debtors and creditors via Smart Contracts, provides reliable Identity and Authorization Control, Real-time Auditing, and Business Internal Control.">
<meta name="keywords" content="accounting blockchain, auditing, blockchain as a service, decentralized accounting ledger">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<!-- <link rel="stylesheet" href="assets/css/debug.css"> -->


<!-- Rewrite CSS-->
<link rel="stylesheet" href="assets/css/styles.css">
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">
<script src="assets/js/jquery-3.3.1.min.js"></script>
<script src="assets/js/menu.js"></script>
<script src="assets/js/tabs.js"></script>

<script type="text/javascript">
  function scrollToAnchor(aid){
      var aTag = $("a[name='"+ aid +"']");
      $('html,body').animate({scrollTop: aTag.offset().top-80},'slow');
  }
</script>

<!-- Global Site Tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-112758009-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-112758009-1');
</script>

<!-- Drift Integration -->
<!--<script>
"use strict";

!function() {
  var t = window.driftt = window.drift = window.driftt || [];
  if (!t.init) {
    if (t.invoked) return void (window.console && console.error && console.error("Drift snippet included twice."));
    t.invoked = !0, t.methods = [ "identify", "config", "track", "reset", "debug", "show", "ping", "page", "hide", "off", "on" ], 
    t.factory = function(e) {
      return function() {
        var n = Array.prototype.slice.call(arguments);
        return n.unshift(e), t.push(n), t;
      };
    }, t.methods.forEach(function(e) {
      t[e] = t.factory(e);
    }), t.load = function(t) {
      var e = 3e5, n = Math.ceil(new Date() / e) * e, o = document.createElement("script");
      o.type = "text/javascript", o.async = !0, o.crossorigin = "anonymous", o.src = "https://js.driftt.com/include/" + n + "/" + t + ".js";
      var i = document.getElementsByTagName("script")[0];
      i.parentNode.insertBefore(o, i);
    };
  }
}();
drift.SNIPPET_VERSION = '0.3.1';
drift.load('r43v8n2ve6yn');
</script>
-->