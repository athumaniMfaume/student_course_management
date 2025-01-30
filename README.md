student_management
Course Enrollment System 📚

A Laravel-based course enrollment system that allows admins to assign students to courses, view assigned students, edit enrollments, and remove students from courses.
🚀 Features

✅ Add & assign students to courses
✅ View all courses with assigned students
✅ Edit assigned students
✅ Delete students from courses
⚙️ Installation
1️⃣ Clone the Repository

git clone https://github.com/athumaniMfaume/student_management.git
cd student_management

Create .env file:
cp .env.example .env

Install Dependencies
composer install

Then update the database connection inside .env:
DB_DATABASE=your_database
DB_USERNAME=your_username
DB_PASSWORD=your_password

php artisan serve

🛠️ Usage
Assign Students to a Course

    Navigate to http://127.0.0.1:8000/courses
    Select a course and assign students.

View Assigned Students

    Go to http://127.0.0.1:8000/courses/students

Edit Enrollment

    Click the Edit button next to a course.

    Delete Student from Course

    Click Delete next to a student's name.
