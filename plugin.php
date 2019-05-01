<?php
/*
Plugin Name: [ODP] Smart Query String Forwarder
Plugin URI: https://github.com/FernleafSystems/Yourls-Smart-Query-String-Append
Description: Append custom query strings to long URL via Short URL
Version: 1.0
Author: Paul Goodchild
Author URI: https://github.com/FernleafSystems/Yourls-Smart-Query-String-Append
*/

yourls_add_filter( 'redirect_location', function ( $sUrl ) {
	if ( !empty( $_GET ) ) {
		$aParams = $_GET;
		if ( strpos( $sUrl, '?' ) ) {
			list( $sUrl, $sParams ) = explode( '?', $sUrl, 2 );
			parse_str( $sParams, $aOriginalParams );
			$aParams = array_merge( $aOriginalParams, $aParams );
		}
		$sUrl .= '?'.http_build_query( $aParams );
	}
	return $sUrl;
} );