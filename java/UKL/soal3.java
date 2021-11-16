/*
Soal          : 3
Gambar        : A
Matrix kolom  : 6
*/
public class soal3 {   //gambar A
   public static void main(String[] args) {
      int a=5, 
          b=3,
          kolom=6,
          u=a,
          s=b; 
    System.out.println("Deret Aritmatikanya adalah"); 
    for(int i=0;i<kolom;i++){                            
        for(int j=1;j>0-i;j--){  
            System.out.print(u+"\t"); 
            u=u+b; 
            s=s+u;                     
        }  
        System.out.println(); 
    } 
    s=s-u; 
    System.out.println("Jumlah Deret Aritmatikanya adalah "+s);
    }
}

