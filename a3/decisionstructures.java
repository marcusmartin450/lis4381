import java.util.Scanner;

public class DecisionStructures {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        System.out.println("Program evaluates user-entered characters.");
        System.out.println("Use following characters: W or w, C or c, H or h, N or n.");
        System.out.println("Use following decision structures: if...else, and switch.");
        
        System.out.print("Phone types: W or w (work), C or c (cell), H or h (home), N or n (none).\n");
        System.out.print("Enter phone type: ");
        
        String phoneType = scanner.nextLine();

        // Using if...else
        if (phoneType.equalsIgnoreCase("w")) {
            System.out.println("Phone type: work");
        } else if (phoneType.equalsIgnoreCase("c")) {
            System.out.println("Phone type: cell");
        } else if (phoneType.equalsIgnoreCase("h")) {
            System.out.println("Phone type: home");
        } else if (phoneType.equalsIgnoreCase("n")) {
            System.out.println("Phone type: none");
        } else {
            System.out.println("Incorrect character entry.");
        }

        // Using switch
        switch (phoneType.toLowerCase()) {
            case "w":
                System.out.println("Phone type: work");
                break;
            case "c":
                System.out.println("Phone type: cell");
                break;
            case "h":
                System.out.println("Phone type: home");
                break;
            case "n":
                System.out.println("Phone type: none");
                break;
            default:
                System.out.println("Incorrect character entry.");
                break;
        }

        scanner.close();
    }
}
