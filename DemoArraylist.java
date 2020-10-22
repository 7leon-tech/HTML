public class DemoArrayList {
    public static void main (String[] args){
        ArrayList<Integer> deret = new ArrayList<Integer>();
        System.out.println("-Panjang deret awal: "+deret.size());
        for (int i = 0; i < 10; i++){
            deret.add(i * 10);
        }
        System.out.println("-Panjang deret setelah ditambah elemen: "+deret.size());
        for (int i = 0; i < deret.size(); i++){
            System.out.println("elemen ke - " + i + " : " + deret.get(i));
        }
        System.out.println("-Memeriksa apakah array list kosong: ");
        System.out.println(deret.isEmpty());    
        System.out.println("-Mencari indeks dari suatu nilai di dalam array list: ");
        System.out.println(deret.indexOf(60));  
        System.out.println(deret.indexOf(70));  
        System.out.println(deret.indexOf(80));  
        System.out.println("-Memeriksa keberadaan suatu nilai di dalam array list: ");
        System.out.println(deret.contains(60)); 
        System.out.println(deret.contains(70)); 
        System.out.println(deret.contains(80)); 
        System.out.println("-Update suatu nilai di dalam array list: ");
        deret.set(6, 600);  
        deret.set(7, 700);  
        deret.set(8, 800);  
        System.out.println(deret.get(6));   
        System.out.println(deret.get(7));   
        System.out.println(deret.get(8));   
        System.out.println("-Menghapus suatu nilai di dalam array list: ");
        deret.remove(6);    
        deret.remove(6);    
        deret.remove(6);    
        System.out.println("-Panjang deret setelah menghapus beberapa elemen: "+deret.size());
        for (int i = 0; i < deret.size(); i++){
            System.out.println("elemen ke - " + i + " : " + deret.get(i));
        }
    }
}
