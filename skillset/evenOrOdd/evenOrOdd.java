
//Even or odd determines if the number inputed in by user is even or odd
// Jonathon Zayas

import java.util.*;

public class evenOrOdd {
    public static Scanner input;

    public static void main(String[] args) {

        // Scanner
        input = new Scanner(System.in);

        // output
        System.out.print("Enter a number to figure out if its even or odd: ");
        int num = input.nextInt();

        if (num % 2 == 0)
            System.out.print(num + " is an even number\n");
        else // else its odd
            System.out.print(num + " is an odd number\n");

    }// end of main
}// end of class
