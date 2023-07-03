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
        for(int j=0;j<i+1;j++){  
            System.out.print(u+"\t"); 
            u+=b; 
            s+=u;                     
        }  
        System.out.println(); 
    } 
    int total=s-u;
    System.out.println("Jumlah Deret Aritmatikanya adalah "+total);
    }
}

