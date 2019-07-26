<?php

function clear_phone($phone){
	return str_replace(['(',')','-','+', ' '], '', $phone);
}

function vardump($var) {
	echo '<pre>';
	var_dump($var);
	echo '</pre>';
}

function carbon_lang() {
	$suffix = '';
	if ( ! defined( 'ICL_LANGUAGE_CODE' ) ) {
		return $suffix;
	}
	$suffix = '_' . ICL_LANGUAGE_CODE;
	return $suffix;
}

