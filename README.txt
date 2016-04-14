Chris Breden
Jonathan Malar
Rafaelle Estrera

------

First, go into your database and create a database named mydb.

Next run createtables.php, and then run insertcourses.php.

Those files only need to be run once, in order to create the tables and insert all courses.

NOTE: The SQL steps are optional. If you are not able to get it working, it will not affect the code otherwise, other than a Fatal error message on the result.php.

------

Now you can go ahead and run project1.html and fill out the form.

This file uses mystyle.css for the styling.

It uses mystyles2.js for validation (making sure a student doesn't select a course they did not have the prereq for.)

The page submits to result.php. This displays the courses a student still needs to take. (Also uses mystyle.css for styling).

It also adds a student to the database, and all student_courses to the database.

Now you can query the database for all courses a student is taking, or all students taking a course.