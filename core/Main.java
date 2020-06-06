import java.io.File;
import java.util.Scanner;
import java.util.ArrayList; 
import java.util.Collections; 
import java.io.*;

public class Main
{
	public static void main(String[] args) 
	{ 
		Map<String, ArrayList<String>> map = new Map<>(); 
        ArrayList<String> all = new ArrayList<>();
    	Scanner input = new Scanner(System.in);
    	String strLine = "";

    	try {
            BufferedReader br = new BufferedReader(new FileReader("../file/out.txt"));
            while (strLine != null)
            {
                	strLine = br.readLine();
                    if(strLine != null){
                    	strLine = strLine.replace("\"", "'");
                    	String[] data = strLine.split(":",2);
		                if(map.get(data[0]) == null)
		                {
		                	ArrayList<String> temp =  new ArrayList<>();
		                	temp.add(data[1]);
		                	map.add(data[0], temp);
                            all.add(data[0]);
		                }
		                else{
		                	map.get(data[0]).add(data[1]);
		                }
                    }
            }
             br.close();
        } catch (FileNotFoundException e) {
            System.err.println("File not found");
        } catch (IOException e) {
            System.err.println("Unable to read the file.");
        }

        if(args[0].equals("show")){
            Collections.sort(all);
            System.out.println("<table class='table'><tr><th>No</th><th>Nama Editor</th><th>Jumlah Artikel</th></tr>");
            
            for(int i =0; i<all.size(); i++){
                ArrayList<String> e = map.get(all.get(i));
                System.out.println("<tr><td>"+(i+1)+"</td>"+"<td>"+all.get(i)+"</td>"+"<td>"+e.size()+"</td></tr>");
            }
            System.out.println("</table>");
        }else{
             map.searchEditor(args[0], map.get(args[0]));
        }

		// System.out.println(map.size()); 
		// System.out.println(map.isEmpty()); 
	}  
}