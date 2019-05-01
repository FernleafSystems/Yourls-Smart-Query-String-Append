# [YOURLS] Smart Query String Append

You can add custom query strings to your long URL by adding query parameters
to your long URL.

This plugin also allows for overwriting existing parameters so instead of duplicates
you'll overwrite the values of pre-existing parameters present in the long URL.

Unlike other implementations, it doesn't rely on population of your
`$_SERVER` variables and instead uses the slightly more consistent `$_GET`.