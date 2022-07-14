import java.sql.Connection;
import java.sql.DriverManager;
import java.io.IOException;
import java.sql.Statement;
import java.sql.PreparedStatement;
import java.sql.SQLException;
import java.io.File;
import java.io.FileInputStream;
import java.io.FileNotFoundException;
import java.io.InputStream;

public class dbconnection
{
	public static void main(String[] args) throws SQLException, FileNotFoundException 
	{
		File directoryPath = new File("/Users/sumit/Downloads/Automatic-Indian-Sign-Language-Translator-master/letters");
      //List of all files and directories
      String contents[] = directoryPath.list();
      
		String mysqlUrl = "jdbc:mysql://localhost:8889/ISL";
                // Connecting to Database
		Connection con = DriverManager.getConnection(mysqlUrl, "root", "2438");
		System.out.println("Connection established......");
                for(int i=0; i<contents.length; i++) {
                    
                    if (contents[i].equals(".DS_Store")) {
                        // Skip ".DS_Store" file
                        System.out.println(contents[i]);
            continue;
         }
                    // removes .jpg extension from file name
         String replace = contents[i].replace(".jpg", "");
              // Creating Prepared Statement to execute parameterized query.
                PreparedStatement pstmt = con.prepareStatement("INSERT INTO `ISL Convertor` VALUES(?, ?)");
		// Inserting to Name coloumn
                pstmt.setString(1, replace);
		InputStream in = new FileInputStream("/Users/sumit/Downloads/Automatic-Indian-Sign-Language-Translator-master/letters/"+contents[i]);
      	pstmt.setBlob(2, in);
      	//Executing the statement
      	pstmt.execute();
      	System.out.println("Record inserted......");
                }

	}

}