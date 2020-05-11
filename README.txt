SOFTWARE ENGINEERING 2020
__________________________________
GROUP MEMBERS:
1. Ismail Kasim
2. Jefferson Welbeck
3. Georgette Asiedu
4. Joseph Prince-Agbodjan
_________________________________



------------------------------------------
YouCheckedIn - VISITOR MANAGEMENT SYSTEM
------------------------------------------
The software was developed as a solution to internal security problems of visitor monitoring and the administrative problem of employee attendance tracking.

-------------
Technologies
-------------
Bootstrap
Chartist
Bootsrap notifications (javascript)
Jquery
JS popper
PHP
PHP REST API
----------------------------

We used jQuery to make it easier to use javascript on our website. jQuery does this by taking many common tasks that require
many lines of code to accomplish and wraps them into methods that can be called with one line of code. This helped to simplify our work for a lot.

Chartist.js is a charting library that we chose to represent the charts that we want to display on our website. We chose chartist because it is fully 
responsive and it also has great flexibility while making sure to sepereate styling with CSS from control with JS. Chartist is a simple graphing library that we are
using graph our report of previous check-ins by students and employees. 

We chose to use bootstrap because of our limited time and limited skill. Bootstrap is a framework that helps people design websites faster and easier. Using 
bootstrap also simplified our work, it is lightweight and customizable and is also supported by a majority of browsers.

Popper.js is a positioning engine, it calculates the position of an element so it makes it possible to position it next to another element. We used this mostly for our charts.
We also used this to give a more fluid look to the dashboards that both the administrator and the student as well as the employees login to.

For the backend programming which deals with serverside programming, we made use of PHP. We intially tried to use the PHP laravel framework, as it gives more expressive and elegant
syntax. Howeverm we were facing a challenge of usability, whereby some of computer were not able to fully run the website. This forced us to used raw PHP for the server-side and use
a simple PHP REST API.

For this project, we did not make use of any data structure. We made use of a database which stores and accumulates all the data that is processed from the website. We understand and
know that it may have helped to use some data structures to make certain functionalities faster for processing. For this we made basic use of an array that stores temporarily the login
details of any user that is presently/currently accessing their account. Storing their login details in a temporary array allowed us to make calls to the details and use them accross
other pages.

We are also using a simple PHP REST API to read, update and manipulate our database.  REST APIs are the foundation of new network technologies. There are many 
frameworks that can help people build REST APIs quickly. These APIs allow us to create, edit, and securely store user accounts and user account data, and connect 
them with one or more applications. The REST API are web standard base architecture and use the HTTP protocol for exchanging information between systems, system applications and
applications. In this API, there are web service HTTP methods such as; GET, POST, PUT and DELETE that can be used to perform CRUD(Create, Read, Update, Delete) operations.
