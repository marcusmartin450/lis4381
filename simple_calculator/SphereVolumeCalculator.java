import java.util.Scanner;

public class SphereVolumeCalculator {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        final double GALLON_CONVERSION = 0.004329; // Conversion factor for cubic inches to U.S. gallons
        boolean continueCalculation = true;
        //Created by Marcus Martin 
        System.out.println("Sphere Volume Program");
        System.out.println("Program calculates sphere volume in liquid U.S. gallons from user-entered diameter value in inches,");
        System.out.println("and rounds to two decimal places.");
        System.out.println("Must use Java's *built-in* PI and pow() capabilities.");
        System.out.println("Program checks for non-integers and non-numeric values.");
        System.out.println("Program continues to prompt for user entry until no longer requested, prompt accepts upper or lower case letters.");

        while (continueCalculation) {
            double diameter = 0.0;

            // Input validation for diameter
            boolean validInput = false;
            while (!validInput) {
                System.out.print("\nPlease enter diameter in inches: ");
                if (scanner.hasNextDouble()) {
                    diameter = scanner.nextDouble();
                    if (diameter > 0) {
                        validInput = true;
                    } else {
                        System.out.println("Not a valid positive number! Please try again.");
                    }
                } else {
                    System.out.println("Not valid input! Please try again.");
                    scanner.next(); // Clear the invalid input
                }
            }

            // Calculate sphere volume
            double radius = diameter / 2.0;
            double volumeCubicInches = (4.0 / 3.0) * Math.PI * Math.pow(radius, 3);
            double volumeGallons = volumeCubicInches * GALLON_CONVERSION;

            // Display the volume rounded to two decimal places
            System.out.printf("Sphere volume: %.2f liquid U.S. gallons%n", volumeGallons);

            // Ask if the user wants to calculate another sphere volume
            System.out.print("\nDo you want to calculate another sphere volume (y or n)? ");
            String response = scanner.next().trim().toLowerCase();
            if (!response.equals("y")) {
                continueCalculation = false;
                System.out.println("\nThank you for using our Sphere Volume Calculator!");
            }
        }

        scanner.close();
    }
}
