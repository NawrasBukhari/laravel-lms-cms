## **Laravel School Management System** 

**AUPET LMS** is developed for educational institutions like schools and colleges built on Laravel 8

<hr />  

There are 4 types of user accounts. They include:
 
Administrators (Super Admin & Admin)
- Teacher
- Student

**Requirements** 

Check Laravel 8 Requirements https://laravel.com/docs/8.x

**Installation**
- Install dependencies (composer install)
- Set Database Credentials & App Settings in dotenv file (.env)
- Migrate Database (php artisan migrate)
- Database seed (php artisan db:seed)

**Login Credentials**
After seeding. Login details as follows:


| Account Type      | Username | Email              || Password |
| ------------------|----------|--------------------||----------|
|  Super Admin      |superadmin|superadmin@aupet.com||   aupet  |
|  Admin            |admin     |admin@aupet.com     ||   aupet  |
|  Teacher          |teacher   |teacher@aupet.com   ||   aupet  |
|  Student          |student   |student@aupet.com   ||   aupet  |
#### **FUNCTIONS OF ACCOUNTS** 

**-- SUPER ADMIN**
- Only Super Admin can delete any record
- Create any user account
 
**-- Administrators (Super Admin & Admin)**

- Manage students class/sections
- View marksheet of students
- Create, Edit and manage all user accounts & profiles
- Create, Edit and manage Exams & Grades
- Create, Edit and manage Subjects
- Manage noticeboard of school
- Notices are visible in calendar in dashboard
- Edit system settings
- Manage Payments & fees


**-- TEACHER**
- Manage Own Class/Section
- Manage Exam Records for own Subjects
- Manage Timetable if Assigned as Class Teacher
- Manage own profile
- Upload Study Materials

**-- STUDENT**
- View teacher profile
- View own class subjects
- View own marks and class timetable
- View Payments
- View library and book status
- View noticeboard and school events in calendar
- Manage own profile



### **Contributing**

Your Contributions & suggestions are welcomed.

### **Security Vulnerabilities**

If you have discovered a security vulnerability within AUPETLMS, please use pull request. All security vulnerabilities will be promptly addressed.

***Please Note*** that some sections of this project are in the work-in-progress stage and would be updated soon. These include:

- The Noticeboard/Calendar in the Dashboard Area
- Librarian/Acountant user pages
- Library Resources/Study Materials Upload for Students

### **Contact [Nawras Bukhari]**
- Phone : +77007317313
