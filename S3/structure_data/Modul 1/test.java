/**
 * test
 */
public class test {

    public static void main(String[] args) {
        int inChar;
        System.out.println("Masukkan : ");
        try {
            inChar = System.in.read();
    
            System.out.println("hasil");
            System.out.println((char)inChar);
            
        } catch (Exception e) {
            System.out.println("error");
            //TODO: handle exception
        }
    }
}