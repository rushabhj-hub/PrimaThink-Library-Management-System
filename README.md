# PrimaThink-Library-Management-System

This Project is an application for the library management system for PrimaThink Library. It has all the ideal features of the library management system where the candidates can register themselves and can issue and read Books. It is divided into two Parts Admin side and the User Side.

On the Other hand the management part is handled by the Admin side where the admin can control and manage the users and can control the issuing and returning of the books.

## Features of Admin Side-

Admin has the following features-
Admin has his own dashboard after successful login.
Admin can control the type, categories and number of the books and the publishers of the books.
Admin can manage the users and can control the registered users. After the request for the book is made by any of the users it is to be accepted and passed by the admin. He can see the record of requested books and can issue the book to the user. Also he can see the list of issued books as well. He can update the details when the student returns the books.
Admin can see the registered users and can report any of the users. Admin can search user by user id.
Admin can change his/her own password and login details.
Admin can update/delete/insert any book category, author and books.


## Features of the User Side-

Users can register themselves to the Prima Think Library and after their registration they would get an id.  Users have their own dashboard after the successful login.

Users have the following features-
Users can change their own account details.
Users can make requests for any of the books if the required book is available. Then they can see the list of the requested books.
Per day fine is also added as per the no of days are late.
On the user Dashboard they can see the count of issued books and unreturned books.

--------------------------------------------------------------------------------------------------------------------------------------------------


## Following steps are required to run the project-

Download the folder and unzip the folder in your system.

Install xampp - https://www.apachefriends.org/download.html

Xampp- XAMPP is an abbreviation for cross-platform, Apache, MySQL, PHP and Perl, and it allows you to build WordPress sites offline, on a local web server on your computer. This simple and lightweight solution works on Windows, Linux, and Mac – hence the “cross-platform” part

![Preview image](https://github.com/rushabhj-hub/PrimaThink-Library-Management-System/blob/master/Screenshots/xamplocation.png)




VS Code-Visual Studio Code is a streamlined code editor with support for development operations like debugging, task running, and version control. It aims to provide just the tools a developer needs for a quick code-build-debug cycle and leaves more complex workflows to fuller featured IDEs, such as Visual Studio IDE.
(For Viewing the code)



Start the Mysql and apache and click on both admin buttons.
This will start the phpMyadmin in your system localhost.

![Preview image](https://github.com/rushabhj-hub/PrimaThink-Library-Management-System/blob/master/Screenshots/xamppcontrol.png)

Now, create a new database named library here. Perform the following steps as demonstrated.
After importing the sql file all the queries would be executed.
Go on the import button and import the .sql file attached in the project. This will fetch and execute all the sql queries as per required. All the tables would be created and the data would be inserted accordingly.

![Preview image](https://github.com/rushabhj-hub/PrimaThink-Library-Management-System/blob/master/Screenshots/databasess.png)



Remember to paste the project folder in the htdocs folder  the xampp parent folder
Now, to see the UI and the dashboard paste the index.html page location in the url as- localhost/PrimaThinkLab/index.php

![Preview image](https://github.com/rushabhj-hub/PrimaThink-Library-Management-System/blob/master/Screenshots/htdocslocation.png)


Hence you will be directed to the  login page- 
Now you can login as Admin or as user-

### Admin login-
http://localhost/PrimaThinkLab/admin

Details-
UserName: admin
Password: Test@123
Enter the captcha as required.

![Preview image](https://github.com/rushabhj-hub/PrimaThink-Library-Management-System/blob/master/Screenshots/adminloginpage.png)


### UserLogin-
http://localhost/PrimaThinkLab/index

Details-
UserName: test@gmail.com    
Password:Test@123
Enter the captcha as required.

![Preview image](https://github.com/rushabhj-hub/PrimaThink-Library-Management-System/blob/master/Screenshots/userloginpage.png)


 ### Signing Up as a New user-

![Preview image](https://github.com/rushabhj-hub/PrimaThink-Library-Management-System/blob/master/Screenshots/usersignuppage.png)

A admin-user coordination is maintained where both have a virtual communication to issue a book user to make a request to the admin which is visible to both and after the admin accepts the request and grants yes then only the book would be issued to the user. Both user and Admin can easily log-out by a single click.

Book issue and Book return frequency is also visible to the admin.

A Book is inserted into the record of PrimaThink Library Database only by the admin based on the book category, type and the publisher.

---------------------------------------------------------------------------------------------------------------------

## Admin-
After successfully logging in as Admin, the Admin dashboard is visible which is like this-

![Preview image](https://github.com/rushabhj-hub/PrimaThink-Library-Management-System/blob/master/Screenshots/admindashboard.png)


Admin can insert the new book into the library database-

![Preview image](https://github.com/rushabhj-hub/PrimaThink-Library-Management-System/blob/master/Screenshots/addbook.png)

Admin can add any new Publisher in the list of he Publishers and a new category of the book with its status as active or inactive accordingly.

![Preview image](https://github.com/rushabhj-hub/PrimaThink-Library-Management-System/blob/master/Screenshots/addpublisher.png)


Admin can change its own login credentials according to his wish.

![Preview image](https://github.com/rushabhj-hub/PrimaThink-Library-Management-System/blob/master/Screenshots/changepasswordadmin.png)

Admin can make the requested book issue to the user .

![Preview image](https://github.com/rushabhj-hub/PrimaThink-Library-Management-System/blob/master/Screenshots/issuenewbook.png)


Admin can manage the books in the database. He can see the list of the issued books to the users.

![Preview image](https://github.com/rushabhj-hub/PrimaThink-Library-Management-System/blob/master/Screenshots/managebook.png)


Admin can manage the users as students and can see their details.

![Preview image](https://github.com/rushabhj-hub/PrimaThink-Library-Management-System/blob/master/Screenshots/managestudents.png)


Amin can manage the categories of the books as Knowledge, science fiction etc and can also add a new category.

![Preview image](https://github.com/rushabhj-hub/PrimaThink-Library-Management-System/blob/master/Screenshots/managetypes.png)


Admin can report any of the users if he wants.

![Preview image](https://github.com/rushabhj-hub/PrimaThink-Library-Management-System/blob/master/Screenshots/report.png)


A fine for per day late is set. Admin can change the per day late fine.

---------------------------------------------------------------------------------------------------------------------------------------

## User-

After Successfully logging in as User the User Dashboard is visible

![Preview image](https://github.com/rushabhj-hub/PrimaThink-Library-Management-System/blob/master/Screenshots/userloginpage.png)


User can change his/her credentials as per the wish.

![Preview image](https://github.com/rushabhj-hub/PrimaThink-Library-Management-System/blob/master/Screenshots/userchangepassword.png)

Users can manage his/her own Issued books. The table shows in red if the return date is missed

![Preview image](https://github.com/rushabhj-hub/PrimaThink-Library-Management-System/blob/master/Screenshots/userissuedbooks.png)


Users can view their own Profile and can see all their details.

![Preview image](https://github.com/rushabhj-hub/PrimaThink-Library-Management-System/blob/master/Screenshots/userprofile.png)

Users can make a request for any book they want. The request for the book would be sent to the admin. If the admin accepts the request and makes the book issued to the user then only the user would be able to get the book issued.

![Preview image](https://github.com/rushabhj-hub/PrimaThink-Library-Management-System/blob/master/Screenshots/userrequestbook.png)

-------------------------------------------------------------------------------------------------------------------

Also there are various other features and options available to both user and admin. Those can be explored further.
