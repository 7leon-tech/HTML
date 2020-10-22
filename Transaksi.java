public class transaksi {
    public static void main(String[] args) {
        String nim = "nim-mahasiswa" ;
        String nama = "nama-mahasiswa";
        double biayaJasa = 0;
        double diskon = 0;
        double total = 0;
        double uang = 0;
        double subtotal = 0;
        double kembalian;
        int pil,jam = 0;
        String ulang = "y", pijat = null;
        
        Scanner input = new Scanner(System.in);

        do {
            System.out.println("==============Welcome to TEMPAT PIJAT==============");
            System.out.println("===================================================");
            System.out.println("========================Pilihan====================");
            System.out.println("1. Pijat Refleksi");
            System.out.println("2. Pijat Aromaterapi");
            System.out.println("3. Pijat Increament");
            System.out.println("===================================================");

            System.out.print("Pilihan : " );
            pil = input.nextInt();
            switch (pil){
                case 1: 
                System.out.println("Anda Memilih Pijat Refleksi");
                pijat = "Pijat Refleksi";
                System.out.print("Berapa Lama : ");
                jam = input.nextInt();               
                if ( jam > 4) {
                    biayaJasa = 50000;
                    subtotal = biayaJasa*jam;
                    diskon = subtotal*20/100;
                    total = subtotal-diskon;
                }else {
                    biayaJasa = 50000;
                    subtotal = biayaJasa*jam;
                    diskon = subtotal*10/100;
                    total = subtotal-diskon;
                }
                break;
                case 2:
                System.out.println("Anda Memilih Pijat Aromaterapi");
                pijat = "Pijat Aromaterapi";
                System.out.print("Berapa Lama : ");
                jam = input.nextInt();
                if (jam > 4 ) {
                    biayaJasa = 25000;
                    subtotal = biayaJasa*jam;
                    diskon = subtotal*20/100;
                    total = subtotal-diskon;
                } else {
                    biayaJasa = 25000;
                    subtotal = biayaJasa*jam;
                    diskon = subtotal*10/100;
                    total = subtotal-diskon;
                }
                break;
               case 3:
                System.out.println("Anda Memilih Pijat Increament");
                pijat = "Pijat Increament";
                System.out.print("Berapa Lama : ");
                jam = input.nextInt();
                if (jam > 4 ) {
                    biayaJasa = 75000;
                    subtotal = biayaJasa*jam;
                    diskon = subtotal*20/100;
                    total = subtotal-diskon;
                } else {
                    biayaJasa = 75000;
                    subtotal = biayaJasa*jam;
                    diskon = subtotal*10/100;
                    total = subtotal-diskon;
            }
                break;
               default:
                   System.out.println("Pijat Yang Anda Pesan Tidak Tersedia");
            }
            System.out.println("==================DETAIL TRANSAKSI=================");
        System.out.println("Nim          : " + nim);
        System.out.println("Nama         : " + nama);
        System.out.println("Jasa         : " + pijat);
        System.out.println("Biaya        : Rp. " + biayaJasa);
        System.out.println("Lama         : " + jam);
        System.out.println("Sub Total    : Rp. " + subtotal);
        System.out.println("Diskon       : RP. " + diskon);
        System.out.println("Total Akhir  : RP. " + total);
            System.out.println("====================33TRANSAKSI======================");
            System.out.print("Uang Anda   : Rp. " );
            uang = input.nextDouble();
            if(uang<total){
            System.out.println("Uang Anda Tidak Mencukupi");
            }
            else{
            kembalian = uang-total;
            System.out.println("Kembalian   : Rp. "+ kembalian);
            System.out.println("===================================================");
            System.out.println("!!-Terimakasih Sudah Menggunakan Jasa Kami-!!");
        }
        System.out.println("===================================================");
        System.out.print("Apakah Anda Ingin Memilih Pijat Yang Lain [Y/T] ? ");
        ulang = input.next();
        } while (ulang.equalsIgnoreCase("y"));
    }
}
