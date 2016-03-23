/**
 * Login with Amazon - SHA 256 compatibility test scripts
 *
 * @category    Amazon
 * @package     shaTest.py
 * @copyright   Copyright (c) 2016 Amazon.com
 * @license     http://opensource.org/licenses/Apache-2.0  Apache License, Version 2.0
 */
import urllib2

try:
    response = urllib2.urlopen("https://api.sandbox.amazon.com")
except urllib2.HTTPError as e:
    if e.code == 403: # status 403 implies the ssl connection was successful
        print True
    else:
        print False
