import java.util.LinkedList;
public class Praktik_2 {
 LinkedList daftarMhs = new LinkedList();
 Praktik_2() {
  if (daftarMhs.isEmpty() == true) {
   System.out.println("Linkedlist kosong");
  } else {
   System.out.println("Linkedlist isi");
  }
  daftarMhs.add("Agungbp");
  daftarMhs.add("Bambang");
  if (daftarMhs.isEmpty() == true) {
   System.out.println("Linkedlist kosong");
  } else {
   System.out.println("Linkedlist isi");
  }
 }
 public static void main(String args[]) {
  new Praktik_2();
 }
}