import java.util.Scanner;

public class latihan_1 {

    public static void main(String[] args) {
        
        Scanner input = new Scanner(System.in);
        String password;

        System.out.print("Masukkan Password: ");
        password = input.next();
        input.close();
        if(password.equals("AKAKOM")){
            System.out.println("Password Anda Benar");
        } else {
            System.out.println("Password Anda Salah");
        }
    }
}