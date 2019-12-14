<?php
include('XboxOneThemeLib.php');
$theme = new XboxOneTheme();
$theme->get_client_color_by_ip($theme->get_client_ip());
?>
