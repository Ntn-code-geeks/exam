<?php

function pr($data) {
echo '<pre>';
    print_r($data);
    echo '</pre>';
}
function set_flash($msg) {
	$ci = &get_instance();
	$ci->session->set_flashdata('tmp_flash', $msg);
}
function get_flash() {
	$ci = &get_instance();
	$msg = $ci->session->flashdata('tmp_flash');
	return $msg;
}



?>
