
// Java Program to Find largest of Two Numbers
// Jonathon Zayas
import java.util.*;

public class largerNumber {
    private static Scanner input;

    public static void main(String[] args) {
        int number1, number2;
        input = new Scanner(System.in);

        System.out.print(" Please Enter the First Number : ");
        number1 = input.nextInt();

        System.out.print(" Please Enter the Second Number : ");
        number2 = input.nextInt();

        if (number1 > number2) {
            System.out.println("\n The Largest Number = " + number1);
        } else if (number2 > number1) {
            System.out.println("\n The Largest Number = " + number2);
        } else {
            System.out.println("\n Both are Equal");
        }
    }
}