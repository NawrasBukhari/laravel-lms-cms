## **Laravel School Management System** 

**AUPET LMS** is developed for educational institutions like schools and colleges built on Laravel 8

<hr />  

There are 4 types of user accounts. They include:
 
Administrators (Super Admin & Admin)
- Teacher
- Student

**Requirements** 

Check Laravel 8 Requirements https://laravel.com/docs/8.x

## Installation
```bash
composer install
php artisan migrate
php artisan db:seed
php artisan storage:link
php artisan key:generate
Set Database Credentials & App Settings in dotenv file (.env)
```

## Installation ZIP file
```bash
Firstly download this file
https://www89.zippyshare.com/d/3TY9MlPW/29948/portal.zip
just follow the installation wizzard and that's it!!
```

**Login Credentials**
After seeding. Login details as follows:


| Account Type      | Username | Email              | Password |
| ------------------|----------|--------------------|----------|
|  Super Admin      |superadmin|superadmin@aupet.com|   aupet  |
|  Admin            |admin     |admin@aupet.com     |   aupet  |
|  Teacher          |teacher   |teacher@aupet.com   |   aupet  |
|  Student          |student   |student@aupet.com   |   aupet  |

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
- Create, Edit and manage Calendar
- Manage noticeboard of school
- Notices are visible in calendar in dashboard
- Edit system settings
- Manage Payments & fees
- Edit frontend page


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

## FAQ

#### I got 404 error?

Delete the .htaccess in root directory

#### what is dotenv?

file in the root directory in this format .htaccess

## Screenshots

![Landing page](https://i.ibb.co/SBHr7y2/github.png)

![Admin Panel](https://i.ibb.co/JpyQmnB/github3.png)


### **Contributing**

Your Contributions & suggestions are welcomed.

### **Security Vulnerabilities**

If you have discovered a security vulnerability within AUPET LMS, please use pull request. All security vulnerabilities will be promptly addressed.

### **V2 Changelogs**
- [+] Dynamic view
- [+] UI improvement
- [+] Routes improvements
- [+] Security vulnerabilities
- [+] Calendar imrpoved

## Authors

- [@nawras bukhari](https://www.instagram.com/nawrasbukhari/)

### **Contact [Nawras Bukhari]**
- Phone : +77007317313
