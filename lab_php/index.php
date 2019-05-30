<html>
<head>
<title>INDEX PAGE</title>
</head>
<style>
body{
	background:linear-gradient(#3d7eaa,#ffe47a);
	 //background-image: url('php.png');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-position: center; 
}
h1
{
	color:red;
	text-shadow: 0 0 3px #FF0000;
}
hr{
	margin-top: 2em;
  margin-bottom: 2em;
	}
</style>
<body>
<center style="background-color:powderblue;"><img src=php.png height=40px width=160px><h1>PHP LAB</h1></center>
<h1>Experiment 2</h1>
<h3>Title: Title: WEB PAGE DESIGN</h3>
<a href="exp2index.html"><h4>Open Website</h4></a></li>
<hr>
<h1>Experiment 3</h1>
<h3>Title: PHP BASICS: Conditional Control Structures & Functions</h3>
<ol>
<li>
<a href="exp3_1.php"><h4>Design a page having a text box (set maxlength=5) for input and a submit button and write a script 
a. to print whether entered number is even or odd. 
b. to print table of entered number. 
c. to find sum of square of digits of entered number. </h4>
</a></li>
<li><a href="exp3_2.php"><h4>Design & write a script for an arithmetic calculator</h4></a></li>
<li><a href="exp3_3.php"><h4>Write a function to swap two string values using: i. call by value ii. Call by reference </h4></a></li>
<li><a href="exp3_4.php"><h4>Take two positive numbers from user (use input) and print 
a. all the numbers divisible by 5 in between entered no. 
b. all prime numbers in between entered no. </h4>
</a></li>
<li><a href="exp3_5.php"><h4>Write a program to take input as seat number (of sleeper coach of Indian train) and identify the type of seat i.e. upper, middle, lower, side lower an side upper using switch case.</h4> </a></li>
</ol>
<hr>
<h1>Experiment 4 and 5</h1>
<h3>Title: STRING & ARRAY</h3>
<ol>
<li>
<a href="exp4_1.php"><h4>Write a program to find out the largest and smallest number in an entered array without using sorting. </h4></a></li>
<li><a href="exp4_2.php"><h4>Design a form having a text box for name, option buttons for gender and a submit button. <br>
i. Write a script to extract first name, middle name and last name from entered name. <br>
ii. Write a script to count the number of vowels and white spaces. <br>
iii. Write a script to convert entered name into upper case. <br>
iv. Display name along with title. 
           Hint: entered name: Sachin Tendulkar, Gender: M 
           Output: Mr. Sachin Tendulkar <br>
v. Write a script to check whether entered name is group of character only. </h4></a></li>
<li><a href="exp4_4.php"><h4>Design and write script for fee calculation for course selected by student. Apply it to Innovative Learning Center application. 
[Fee = Tuition fee (Compulsory) + Travelling (Optional) + Hostel fee (Optional) + Mess fee (Optional) + Library (Compulsory) + id card (Compulsory) + Exam fee (Compulsory) + other] 
 </h4>
</a></li>
<li><a href="exp4_5.php"><h4>Write a function that accepts an array of numbers and sorts all even number first, all odd numbers second in ascending order and then return the array. </h4>
</a></li>
<li><a href="exp4_6.php"><h4>Create an array to hold 5 subject marks of a student.Write a function to calculate the average for a student. The function should return the average. Based on the average the grade is assigned.</h4>
</a></li> 
</ol>
<hr>
<h1>Experiment 6</h1>
<h3>Title: File Handling</h3>
<ol>
<li>
<a href="exp6_1.php"><h4>(a). Write a script to store the roll no, name, age, address, phone no of students into the file called studentdetails.txt and the records should be stored in the format given below <br>
101:priya:19:bangalore <br>
102:prem:20:chennai <br>
103:anu:18:chennai <br>
104:john:21:bangalore <br>
105:amit:20:mumbai <br>
(b). write a function to retrieve the student information from the studentdetails.txt file. <br>
(c). write a script to display all the students who belong to the city 'bangalore' from the studentdetails.txt file.<br> 
</h4></a></li>
<li><a href="exp6_2.php"><h4>Write a script to copy content of one file into another </h4>
</a></li>
<li><a href="exp6_3.php"><h4> Write a script to perform file upload operation and then read the data from the uploaded file.  </h4>
</a></li>
<li><a href="exp6_4.php"><h4> Write a script to perform file upload operation and then read the data from the uploaded file.  </h4>
</a></li>
</ol>
<hr>
<h1>Experiment 7</h1>
<h3>Title: Form Validation and Event Handling</h3>
<ol>
<li><a href="exp7_1.php"><h4>Perform form validations of Innovative Learning Center.</h4></a></li>
<li><a href="exp7_2.php"><h4>Addition of two numbers using Javascript.</h4></a></li>
<li><a href="exp7_3.php"><h4>Change Image on moving mouse pointer on image using Javascript .</h4></a></li>
</ol>
<hr>
<h1>Experiment 8</h1>
<h3>Title: OOPS & EXCEPTION HANDLING</h3>
<ol>
<li><a href="exp8_1.php"><h4>Create a class Book with member functions setPrice(), getPrice(), setTitle(), getTitle(). Make objects for class book to set price & title of books. And then print the same..</h4></a></li>
<li><a href="exp8_2.php"><h4>Create one constructor for Book class to initialize price and title for the book at the time of object creation..</h4></a></li>
<li><a href="exp8_3.php"><h4>3. Create a web application that takes the faculty feedback from the student and stores it in a file. Given the subject name and the faculty name, the application has to display the average feedback for each criterion and the comments given by all students.<br> 
The student has to enter the feedback form with the following details: faculty name, subject, date, student id, student name, feedback rating, and comments. <br>
Create a class called as feedback to hold the details as mentioned above. when the student clicks the “submit feedback” button, the details has to be stored in the feedback object after which the details are retrieved and stored in a file, when the faculty name and the subject are given, feedback summary is displayed as follows student notebook php core . Use it to Innovative Learning Center. 
.</h4></a></li>
<li><a href="exp8_4.php"><h4>Create a class employee with id, name, age, gender, designation and salary. write a function display employee details() to accept an employee object and display the details of the employee. designation of the employee can be either “programmer”, “project lead” or “team member”. the function should throw a design proper exception (with a meaningful message) if the designation of an employee is not any of these. 
Write a function called view employeedetails (), which calls the display employeedetails() method in question 1. modify the displayemployeedetails () function to propagate the designation improperexception that is handled in view employeedetails() function that displays a message called “sorry!!!! employee details cannot be viewed”.
</h4></a></li>
</ol>
</body>
</html>

