import urllib2

try:
    response = urllib2.urlopen("https://api.sandbox.amazon.com")
except urllib2.HTTPError as e:
    if e.code == 403: # status 403 implies the ssl connection was successful
        print True
    else:
        print False