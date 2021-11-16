/*
Soal          : 4
Gambar        : B
Matrix kolom  : 5
*/
public class soal4 {   //Gambar B
   public static void main(String[] args) {
      int A=6,
          B=3,
          kolom=5,
          u=A,
          s=B;
      System.out.println("Deret Aritmatikanya adalah");
      for(int i=kolom;i>0;i--){ 
        for(int j=0;j<i;j++){
          System.out.print(u+"\t");
          u=u+B;
          s=s+u; 
        }
      System.out.println();
      }
      for(int i=kolom-1;i>0;i--){ 
        for(int j=kolom+1;j>0+i;j--){
          System.out.print(u+"\t");
          u=u+B;
          s=s+u; 
        }
      System.out.println();
      }
    s=s-u;
    System.out.println("Jumlah Deret Aritmatikanya adalah "+s);
  }
}

