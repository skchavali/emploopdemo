<html>
<title> Insert Actor </title>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5BBR8M8');</script>
<!-- End Google Tag Manager -->
<?php
 include 'include.php'
 $title = "Register";
include 'pageview.php';
?>

<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5BBR8M8"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<h2> Register as Customer </h2>
<form action="insertdb.php"  method="post">
First Name: <input type="text" name="firstname"><br>
Last Name: <input type="text" name="lastname"><br>

E-mail: <input type="text" name="email"><br>
<input type="submit" onclick="ga('send', 'event', 'Insert', 'Submit', 'Actor');">
</form>

</body>

<?php

include 'pageviewcounter.php';

?>
</html>