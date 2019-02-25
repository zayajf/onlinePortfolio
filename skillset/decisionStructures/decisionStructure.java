import java.util.*;

public class decisionStructure {
    public static void main(String[] args) {

        // Scanner
        Scanner input = new Scanner(System.in);

        // Variables
        String str = "";
        char chr = ' ';

        System.out.println("Phone Types: W or w (work), C or c (Cell), H or h (home), N or n (none).");
        System.out.print("Enter phone type: ");

        str = input.next().toLowerCase();
        chr = str.charAt(0);

        System.out.print("\nif....else: \n");

        if (chr == 'w')
            System.out.println("Phone type: Work");
        else if (chr == 'c')
            System.out.println("Phone type: Cell");
        else if (chr == 'h')
            System.out.println("Phone type: Home");
        else if (chr == 'n')
            System.out.println("No Phone type ");
        else
            System.out.print("Incorrect character entry");

        System.out.println("");
        System.out.print("Switch:\n");
        switch (chr) {
        case 'w':
            System.out.println("Phone type: Work\n");
            break;
        case 'c':
            System.out.println("Phone type: Cell\n");
            break;
        case 'h':
            System.out.println("Phone type: H\n");
            break;
        case 'n':
            System.out.println("Phone type: none\n");
            break;
        default:
            System.out.println("Incorrect character entry\n");
            break;
        }

        input.close();
    }// end of main
}// end of class