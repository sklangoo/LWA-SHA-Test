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
