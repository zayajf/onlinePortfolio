
//Using different loops while passing an array
//Jonathon Zayas
import java.util.*;

public class cat {
    public static void main(String[] args) {

        String[] animals = { "dog", "cat", "bird", "fish", "insect" };
        // for loop
        System.out.println("for Loop: ");
        for (int i = 0; i <= 4; i++) {
            System.out.println(animals[i]);
        }

        // space between loops
        System.out.print("\n");

        // enhanced for loop
        System.out.print("Enhanced for loop: \n");
        String[] enhanced = { "dog", "cat", "bird", "fish", "insect" };
        for (String e : enhanced) {
            System.out.println(e);
        }

        // space between loops
        System.out.print("\n");

        // while loop
        System.out.print("while loop: \n");
        int count = 0;
        // while loop
        while (count <= 4) {
            System.out.println(animals[count]);
            count++;
        }

        // space between loops
        System.out.print("\n");

        System.out.print("do while: \n");
        count = 0;
        // do while
        do {
            System.out.println(animals[count]);
            count++;
        } while (count <= 4);
    }// end of main
}// end of class