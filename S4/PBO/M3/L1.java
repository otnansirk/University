class L1{
    private int a,b;
    private double c,d;
     void sum(int a,int b) {
       System.out.println(a+b);
     }
     void sum(double c,double d) {
       System.out.println(c+d);
    }
     void sum(double c,double d, int a) {
       System.out.println(c+d+a);
    }
     public static void main(String args[]){
     L1 obj=new L1();
     obj.sum(10.5,10.5);
     obj.sum(20,20);
     obj.sum(20.9, 20.3, 30);
   }
}