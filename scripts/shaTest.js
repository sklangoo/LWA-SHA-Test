/**
 * Login with Amazon - SHA 256 compatibility test scripts
 *
 * @category    Amazon
 * @package     shaTest.js
 * @copyright   Copyright (c) 2016 Amazon.com
 * @license     http://opensource.org/licenses/Apache-2.0  Apache License, Version 2.0
 */
var https = require('https');

https.get('https://api.sandbox.amazon.com', function(res) {
	if (res.statusCode==403) { // status 403 implies the ssl connection was successful
		console.log("True");
	} else {
		console.log("False");
	}
});

