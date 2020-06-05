public class MultiCatchException {
   public static void main(String args[]) {
      try {
         System.out.println(5 / 0);
      } catch (ArithmeticException e) {
         System.out.println(0);
      } catch (ArrayIndexOutOfBoundsException e) {
         System.out.println(1);
      } catch (Exception e) {
         System.out.println(2);
      }
   }
}