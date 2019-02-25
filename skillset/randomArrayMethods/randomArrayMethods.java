import java.util.Scanner;
import java.util.Random;

class randomArrayMethods {

    public static void displayProgram()

    {
        System.out.println("Program prompts user to enter desired number of pseudorandom-genrated integers (min1).");
        System.out.println("Use following loop structures: for, enhanced for, while, do...while");
        System.out.println(
                "Note: Create *and* display array values using *at least* one value-returning methods, and one void method.");
        System.out.println();
    }

    public static int getArraySize() {

        int arraySize;
        Scanner input = new Scanner(System.in);

        System.out.print("Enter desired number of pseudo-random integers: ");
        while (!input.hasNextInt()) {
            System.out.println("Not valid integer!\n");
            input.next();
            System.out.print("Please try again. Enter desired number of pseudo-random integers: ");
        }
        arraySize = input.nextInt();
        return arraySize;

    }// end of getArraySize

    public static void displayArrays(int num) {
        Random r = new Random();
        int i = 0;

        int myArray[] = new int[num];

        System.out.println("for loop:");
        for (i = 0; i < myArray.length; i++) {
            System.out.println(r.nextInt());
        }

        System.out.println("\nEnhanced for loop:");
        for (int n : myArray) {
            System.out.println(r.nextInt());
        }

        System.out.println("\nwhile loop:");
        i = 0;
        while (i < myArray.length) {
            System.out.println(r.nextInt());
            i++;
        }

        i = 0;
        System.out.println("\ndo...while loop:");
        do {
            System.out.println(r.nextInt());
            i++;
        } while (i < myArray.length);

    }// end of displayArrays

    public static void main(String args[]) {
        displayProgram();

        int arrayNum = getArraySize();

        displayArrays(arrayNum);

    }// end of main

}// end of class
