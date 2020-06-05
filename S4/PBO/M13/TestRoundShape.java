import java.text.DecimalFormat;

public class TestRoundShape {
    public static void main(String args[]) {
        DecimalFormat digit = new DecimalFormat("0.##");
        Circle lingk1 = new Circle(20, 5, 10.0f);
        System.out.println(digit.format(lingk1.area()));
    }
}