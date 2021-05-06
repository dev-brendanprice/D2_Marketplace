<?php
$encoded = md5( 'priceroan2@gmail.com' ); // users email
$default = urlencode ( 'https://cdn.surge-networks.co.uk/assets/content/images/default.png' ); // default image
?>
<img id="userIcon" src="https://www.gravatar.com/avatar/<?php echo $encoded; ?>?default=<?php echo $default; ?>" />