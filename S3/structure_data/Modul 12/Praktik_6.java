import java.util.LinkedList;
public class Praktik_6 {
 LinkedList daftarMhs = new LinkedList();
 Praktik_6() {
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
  daftarMhs.remove(5);
  System.out.println("N = " + daftarMhs.size());
  for (int i = 0; i <= daftarMhs.size() - 1; i++) {
   System.out.println(i + " " + daftarMhs.get(i));
  }
  System.out.println("");
  daftarMhs.removeFirst();
  daftarMhs.removeLast();
  System.out.println("N = " + daftarMhs.size());
  for (int i = 0; i <= daftarMhs.size() - 1; i++) {
   System.out.println(i + " " + daftarMhs.get(i));
  }
  System.out.println("");
 }
 public static void main(String args[]) {
  new Praktik_6();
 }
}