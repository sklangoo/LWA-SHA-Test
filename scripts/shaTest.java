/**
 * Login with Amazon - SHA 256 compatibility test scripts
 *
 * @category    Amazon
 * @package     shaTest.java
 * @copyright   Copyright (c) 2016 Amazon.com
 * @license     http://opensource.org/licenses/Apache-2.0  Apache License, Version 2.0
 */
import java.net.URL;
import javax.net.ssl.HttpsURLConnection;

public class ShaTest {
    public static void main(String[] args) throws Exception {
        String url = "https://api.sandbox.amazon.com";
        
        URL obj = new URL(url);
        HttpsURLConnection con = (HttpsURLConnection) obj.openConnection();
        con.setRequestMethod("GET");

        int responseCode = con.getResponseCode();
        if (responseCode == 403) { // status 403 implies the ssl connection was successful
            System.out.println("True");
        } else {
            System.out.println("False");
        }
    }
}
