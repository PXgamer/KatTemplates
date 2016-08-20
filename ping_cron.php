<?php

$urls = [
	'https://katcr.co/',
	'https://kat.cr/'
	];

foreach ($urls as $url) {
	$cu = curl_init();
	CURL_SETOPT($cu, CURLOPT_URL, $url);
	CURL_SETOPT($cu, CURLOPT_HEADER, 0);
	CURL_SETOPT($cu, CURLOPT_FOLLOWLOCATION, 1);
	CURL_SETOPT($cu, CURLOPT_NOBODY, 1);
	CURL_SETOPT($cu, CURLOPT_FRESH_CONNECT, 1);
	CURL_SETOPT($cu, CURLOPT_SSL_VERIFYPEER, 1);

	curl_exec($cu);
	$http_status[$url] = curl_getinfo($cu, CURLINFO_HTTP_CODE);

	curl_close($cu);
}
