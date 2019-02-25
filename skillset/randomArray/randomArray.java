import java.util.*;

public class randomArray {
    public static void main(String[] args) {

        System.out.println("Program Promtps user to enter desired number of pseudorandom-generated integers(min 1).");
        System.out.println("Use following loop strucutres for, enhanced for, while, do...while.");
        System.out.println();// blank line

        Scanner sc = new Scanner(System.in); // scanner
        Random r = new Random(); // instantiate random object variable

        int arraySize = 0;
        int i = 0;

        System.out.print("Enter desired number of pseudorandom-generated integeres(min 1): ");
        arraySize = sc.nextInt();

        int myArray[] = new int[arraySize];

        System.out.println("for loop:");

        for (i = 0; i < myArray.length; i++) {
            System.out.println(r.nextInt());
        }

        System.out.println("\nEnhanced for loop:");

        for (int n : myArray) {
            System.out.println(r.nextInt());
        }

        System.out.println("\nwhile loop.");
        i = 0;
        while (i < myArray.length) {
            System.out.println(r.nextInt());
            i++;
        }

        System.out.println("\ndo...while loop:");
        do {
            System.out.print(r.nextInt());
            i++;
        } while (i < myArray.length);

        System.out.println();

    }// end of main
}// end of class