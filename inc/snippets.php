<?php
    class JavaScriptSnippet {
        public $title;
        public $explanation;
        public $inputImage;
        public $outputImage;

        public function __construct($title, $explanation, $inputImage, $outputImage) {
            $this->title = $title;
            $this->explanation = $explanation;
            $this->inputImage = $inputImage;
            $this->outputImage = $outputImage;
        }public function _construct($title,) {
            $this->title = $title;
        }
    }

    $snippets = [
        new JavaScriptSnippet(
            "Hello World",
            'This line prints "Hello World" to the console. It’s the simplest form of output in JavaScript, commonly used for testing.',
            'assets/shots/1_input.png',
            'assets/shots/1_output.png' 
        ),
        new JavaScriptSnippet(
            "Variable",
            'This code creates a variable named name and assigns it the string "Alice". The console.log statement then prints the value of name.',
            'assets/shots/2_input.png',
            'assets/shots/2_output.png'
        ),
        new JavaScriptSnippet(
            "Data Types",
            'This snippet shows different data types in JavaScript: a number (age), a boolean (isStudent), and an array (hobbies). The console.log prints all three variables.',
            'assets/shots/3_input.png',
            'assets/shots/3_output.png'
        ),
        new JavaScriptSnippet(
            "Function",
            'This code defines a function greet that takes a parameter user and returns a greeting string. The function is called with "Alice", and the result is printed.',
            'assets/shots/4_input.png',
            'assets/shots/4_output.png'
        ),
        new JavaScriptSnippet(
            "Conditionals",
            'This code uses an if statement to check the value of score and prints the corresponding grade based on the score.',
            'assets/shots/5_input.png',
            'assets/shots/5_output.png'
        ),
        new JavaScriptSnippet(
            "Loops",
            'This for loop runs five times, with i starting at 0 and increasing by 1 each time. It prints the current iteration number.',
            'assets/shots/6_input.png',
            'assets/shots/6_output.png'
        ),
        new JavaScriptSnippet(
            "Arrays",
            'This code creates an array of fruits. The push method adds "orange" to the end of the array, which is then printed.',
            'assets/shots/7_input.png',
            'assets/shots/7_output.png'
        ),
        new JavaScriptSnippet(
            "Objects",
            'Here, an object car is created with properties make, model, and year. The code prints the value of the make property.',
            'assets/shots/8_input.png',
            'assets/shots/8_output.png'
        ),
        new JavaScriptSnippet(
            "String Manipulation",
            'This code demonstrates how to remove whitespace from both ends of a string using the trim method, and then prints the trimmed string.',
            'assets/shots/9_input.png',
            'assets/shots/9_output.png'
        ),
        new JavaScriptSnippet(
            "Event Handling",
            'This HTML document includes a button. When the button is clicked, an alert box appears with the message "Button was clicked!". The event is handled using an onclick function.',
            'assets/shots/10_input.png',
            'assets/shots/10_output.png'
        ),
        new JavaScriptSnippet(
            "Odd or Even",
            'The function checkOddOrEven takes one parameter, number. It uses the modulus operator (%) to check if the number is divisible by 2, and prints whether it is odd or even.',
            'assets/shots/11_input.png',
            'assets/shots/11_output.png'
        ),
        new JavaScriptSnippet(
            "Prime",
            'The function isPrime takes one parameter, number, and checks if the number is prime by looping from 2 to the square root of the number. It returns true if the number is prime, otherwise false.',
            'assets/shots/12_input.png',
            'assets/shots/12_output.png'
        )
    ];

?>  