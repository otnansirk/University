import java.util.LinkedList;
public class Praktik_9 {
 LinkedList daftarMhs = new LinkedList();
 Praktik_9() {
  daftarMhs.add("Agungbp");
  daftarMhs.add("Bambang");
  daftarMhs.add("Cucuk");
  daftarMhs.add("Dion");
  daftarMhs.add("Ending");
  daftarMhs.add("Fifin");
  daftarMhs.add("Gesit");
  daftarMhs.add("Heru");
  daftarMhs.add("Irma");
  daftarMhs.add("Janti");
  System.out.println("N = " + daftarMhs.size());
  for (int i = 0; i <= daftarMhs.size() - 1; i++) {
   System.out.println(i + " " + daftarMhs.get(i));
  }
  System.out.println("");
  daftarMhs.clear();
  System.out.println("Clear selesai dijalankan... ");
  System.out.println("N = " + daftarMhs.size());
  for (int i = 0; i <= daftarMhs.size() - 1; i++) {
   System.out.println(i + " " + daftarMhs.get(i));
  }
  System.out.println("");
  if (daftarMhs.isEmpty() == true) {
   System.out.println("Linkedlist kosong");
  } else {
   System.out.println("Linkedlist isi");
  }
 }
 public static void main(String args[]) {
  new PercobaanLinkedList();
 }
}