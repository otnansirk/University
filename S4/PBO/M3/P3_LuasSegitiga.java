/**
 * P3-LuasSegitiga
 */
public class P3_LuasSegitiga {

    int a, t;
    double r = 0.5;
    
    public double luasSegitiga(int a, int t) {
        double result = this.r * a * t;
        return result;
    }

    public static void main(String[] args) {
        P3_LuasSegitiga rumus = new P3_LuasSegitiga();
        double luas_segitiga = rumus.luasSegitiga(12, 20);

        System.out.println(luas_segitiga);

    }
}