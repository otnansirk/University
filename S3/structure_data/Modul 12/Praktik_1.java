
import java.util.LinkedList;
/**
 * Praktik_1
 */
public class Praktik_1 {

    LinkedList daftarMhs = new LinkedList();
Praktik_1() {
 if (daftarMhs.isEmpty() == true) {
  System.out.println("Linkedlist kosong");
 } else {
  System.out.println("Linkedlist isi");
 }
}
public static void main(String args[]) {
 new Praktik_1();
}
}