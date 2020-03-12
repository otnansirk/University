class Calculation2{
    private int a,b;
    private double c,d;
     void sum(int a,int b) {
       System.out.println(a+b);
     }
     void sum(double c,double d) {
       System.out.println(c+d);
    }
     public static void main(String args[]){
     Calculation2 obj=new Calculation2();
     obj.sum(10.5,10.5);
     obj.sum(20,20);
   }
}