/**
 * Login with Amazon - SHA 256 compatibility test scripts
 *
 * @category    Amazon
 * @package     shaTest.rb
 * @copyright   Copyright (c) 2016 Amazon.com
 * @license     http://opensource.org/licenses/Apache-2.0  Apache License, Version 2.0
 */
require 'net/https'

uri = URI.parse('https://api.sandbox.amazon.com')
http = Net::HTTP.new(uri.host, uri.port)
http.use_ssl = true
http.verify_mode = OpenSSL::SSL::VERIFY_PEER
res = http.request(Net::HTTP::Get.new(uri.request_uri))
if (res.code == '403') # status 403 implies the ssl connection was successful
    print "True\n"
else
    print "False\n"
end
