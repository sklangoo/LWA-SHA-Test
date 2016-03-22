
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