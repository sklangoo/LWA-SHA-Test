var https = require('https');

https.get('https://api.sandbox.amazon.com', function(res) {
	if (res.statusCode==403) { // status 403 implies the ssl connection was successful
		console.log("True");
	} else {
		console.log("False");
	}
});

