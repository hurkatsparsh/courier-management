# courier-management
DBMS project for courier management
1.	Abstract 

Courier Management System is a web-based courier system which supports the high accessibility of courier services to the companies and to the customers. This system is being used for day to day activities such as booking a courier, maintain customer details, track the parcel.  

People when transfer their products using any courier service wants to know whether their product has been safely parceled to their right place or not, if not then by what time it will be delivered and what is the exact location of the product. Tracking all this information manually is very difficult and time taking process. To minimize these complexities, we require some system which can track the parcel on time basis.

Courier Management System is a web-based courier system which supports the high accessibility of courier services to the companies and to the customers. This system is being used for day to day activities such as booking a courier, maintain customer details, track the parcel. The Classic approach of courier industry leads to many misleading outcomes and very slow output from the industry. So, we tend to improve and bring a new change for this 1 trillion $ industry around the Globe.


2.	Introduction

The Courier Management System Project have different modules. The login section will have login facility for the admin who will operate this system. While taking orders from its customers, it will take all the details of its customers who is placing the order and all the details for the recipient such as its address, name, mobile number. During billing process system will generate a tracking id or consignment number for their products. Using this consignment number, customers or its recipient will able to track their products from any location using internet. It will provide tracking status of the product after placing order.

Companies that deliver parcel were disadvantage in that they had to keep all information of parcel there are delivering on paper and also they spent a lot trying to get the person who will receive the parcel by calling them which cost a lot of money to the company but by use of this system it will get rid of paper work and also the information of what was being delivered will be kept for future reference which will make easier and convenient when it is being searched and furthermore client will be able to get a forehand information about their parcel on what time they will receive so that they will plan and by doing this it will enable the customers to have confidence on what is being offered in the company thus leading to higher returns to the company the to the paper work.

The purpose of the proposed system is to help customers to keep track of their shipments anytime, anywhere using the courier website. Also creating the accounts for courier officers allows us to keep the database secure as only the authorized can access the database. The proposed system is a light weight courier system built entirely using php and frontend languages for smooth and better user experience.

Motivation – 

These days all the data is store in the database. But few departments still make use of traditional way of storing shipment details using paper and pen (forms). This system allows us to take advantage of the technology and hence making managing database much more efficient and easier.

People when transfer their products using any parcel service wants to know whether their product has been shifted to their right place or not, if not then by what time it will be shifted and where itis now. Taking all this information manually is very difficult and time taking process. To handle all these activities, include various processes and paper work from the management side also.

Problem Statement – 

People when transfer their products using any courier service wants to know whether their product has been shifted to their right place or not, if not then by what time it will be shifted and where it is now. Taking all this information manually is very difficult and time taking process. To handle all these activities, include various processes and paper work from the management side also.

Tracking all this information manually is very difficult and time taking process. To minimize these complexities, we require some system which can track the parcel on time basis.





3.	Literature Survey

	Research paper	Author	Year of Publication	Method used	Drawbacks	Advantages
1	High performance PL/SQL programming	Vamsi Krishna Myalapalli ;
BhupatiLohith Ravi Teja	2017,
IEEE	reduce time and space complexity of a native SQL query	•	Longer queries
•	Difficult to understand
•	Low usability	Faster than regular queries applied in today databases
2	DBMS as a Cloud service: Advantages and Disadvantages	YlberJanuzaja ,JauminAjdaria , BesnikSelimia	2018
Science Direct journal	Website hosting on cloud instance	•	Websites are slower to access
•	If cloud fails then website stop
•	costly	•	Can be accessed from any device
•	Portable
3	An Appraisal to Optimize SQL Queries	Vamsi Krishna Myalapalli, MudduButchi Shiva	2017
IEEE	Using PL/SQL and oracle for increasing the speed of queries	Complex system required to build the final outcome database	Faster than the regular DBMS techniques
4	An Overview of Query Optimization Techniques in Database Systems	Pooja Wankhade, Dr. Vaishali Deshmukh	2019
IRJET	Using Oracle database improving the data query retrieval	Time consuming to build and longer databases	Faster to obtain the data from databases.
5	Oracle Database 11g R2 Performance Tuning Cookbook	Ciro Fiorillo	2018
Scribd	Database reading	Complexity	Faster retrieval of databases and queries optimized
6	Critical Review Of Courier Service Management System With Empasis To Its Relevance If Adopted In Nigeria	Nweso Emmanuel Nwogbaga
, Okemiri Henry A,
Francis N. Nwebonyi
	2017
JMEST	3 tier system built using html ,sql, sdlc(
system development 
life cycle)	Mimicking the existing system from developed countries	Really easy to deploy even for single vendor and developers 
7	Online Courier Management System	S. Ammulu,K.MadhuSudhan Reddy	2018
IRJET	3 tier system built using html ,sql, sdlc(
system development 
life cycle)	None	The most suitable system developed and easiest to implement.

4.	Proposed System

Overview–

Will have login facility for admin which will give him access to operate the system and whose user id and password will be securely stored in the database.Admin can take order from the customers and add the shipment details into the system which will be stored in the database.Admin can also update the shipment details including the tracking status.All the shipments in the database will be sorted date wise and delivered shipments will be separated. All these will be visible to the admin in his/her login.Customer can track the status of the shipment using the consignment number of the particular order.
The tracking result will contain the following info – 
•	Current status
•	Invoice number
•	Pickup date
•	Comments
•	Etc.




 
Figure 1 : System Architecture
Graphical representation for the courier management system developed, client gives request through the website and place their choice of order or email to admin or if he/she is an old user they and want to see the package detail they request to the  webserver and then it provides the status for the order. The webserver and the website runs on the front end developed on html and css also the backend used to store the database for every shipment detail and every client detail is developed using sql and xammp server.




 
Figure 2 : This is the pictorial representation for the system architecture used in the system






 
Figure 3 : ER Diagram
ER diagram which is used for depicting the entity, attributes connectivity and dependency on each other. 
The relations for this ER-Diagram is represented by officer -> manages(customer)
item -> placed(customer), 
officer -> has(login), 
customer -> tracks(shipment)




 
Figure 4 : Functional Architecture
The two modules are assigned to the user and admin, which have different uses according to their needs. Homepage breaks down into two modules user and admin, user only have option to access his/her current or previous order status. Admin having higher authority manages the complete system it has power to access, change and update the report, shipment, search shipment, list shipment. Under report having a sub-module as date wise, delivered all are then linked to database to access the tables built using SQL.

Admin can login into his admin portal.Logging in he/she sends the query to input the details for the new courier to the php webserver.When the query is submitted to the php database admin is updated and the new courier is submitted Customer wants to access the status for the order. He/ she submits the query to the webserver with the details of consignment number and the query is decrypted and goes to php database and then retrieve the correct data and is shown to the customer.









Modules–


 
Figure 5 : Admin Module


All the operations listed are performed by the admin to securely and properly run the courier system. Having the options as adding the courier detail for new order by client, updating the order history of previous order and delivered orders, searching and editing the order list for the client convenience, listing all the shipment in an order using the sorting. Going into the report module which is being shown as a sub-module and having the option to view the orders by date wise order and distinguishing them according to their status of delivered or no delivered. 


•	Admin module

In this from figure 5, admin can do the following functions.
(Dashboard : Admin can see all the courier details including pickup date, weight of parcel, destination, delivered couriers etc.)

•	Login: Admin can login using user id and password.
•	Add courier: Admin can add courier details as provides by the client.
•	Courier list: Admin can view list of all the couriers.
•	Report
o	Date wise list(undelivered): Shipments sorted date wise.
o	Delivered list: List of delivered couriers.
•	Edit courier: Admin can edit courier details and add comments.
•	Search and edit: Admin can search courier with consignment number.
•	Success (completion)
 
Figure 6 :Customer module
Customer can access all the item listed in black through the check status option on website

•	Customer

The main aim of this module is providing all the functionality related to customer It tracks all the information of the customer. This is a role-based module where admin can perform each and every operation on data but the customer will be able to view only those access level restrictions has also been implemented on the project. Website provides an interactive user interface to the client.

•	Courier status: Client can view the shipment details using consignment number.
•	Track result
•	Track success

All the customer forms are valid on the client side using javascript.



Innovation –

•	The low-cost system and high usability.
•	New secured database with upgradability easiness.
•	Due to improvement of technology we see the logistics business to go down and not keep up with the IT industry.
•	We present a fast, easy to use, highly secure system for our logistics industry which is almost a trillion dollars industry.








5.	Implementation


Software Details – 

•	Web Server (XAMMP server)
•	PHP: All the business and frontend logic has been implemented in PHP
•	HTML: Page layout has been designed in HTML
•	CSS: CSS has been used for all the designing part
•	JavaScript: All the validation task and animations has been developed by JavaScript
•	MYSQL: MYSQL database has been used as database for the project
•	Drupal 7: This project has been developed over the Drupal 7 Framework
•	Apache2: Project will be run over the Apache2 server


Required PHP libraries – 
•	Curl
•	ZIP
•	Zlib
•	GD library
•	Mxrypt
•	Mbstrings


6.	Conclusion

The project Courier Management System (HMS) is for computerizing the working in a courier company. The software takes care of all the requirements of an average courier system and is capable to provide easy and effective storage of information related to shipments provided by the client and regular update in current status of the courier location.
It generates reports; provide prescription details including current status and sort the courier date wise to prioritize the delivery of delayed shipments. The Courier website have a modern look and interface making much easier for the client to check the courier status anytime anywhere using internet.

7.	References

[1] https://phpgurukul.com/courier-management-system-using-php-and-mysql/

[2] Aaron  (  2008).  “  Relevance  of  courier  services” Tamaza Publishing Co. Ltd., Zaria-Nigeria.

[3] Carola (2012). “Building the Business Case for e-Delivery,”  Retrieved  on  September  22,  2013,  from www.elearningguild.com.


[4] Collins English Dictionary - Complete & Unabridged 10th Edition 2009 © William Collins Sons & Co. Ltd.   McGuigan  (2013). 

[5] "Messengers  in the  County of  Artois, 1295-1329". Canadian Journal of History 25 (2):  163–175.

[6] http://www.bluedart.com/

[7] http://www.wampserver.com/en/ 

[8] http://www.php.net/ 

[9] http://www.tutorialspoint.com/mysql/ 

[10] httpd.apache.org/docs/2.0/misc/tutorials.html

