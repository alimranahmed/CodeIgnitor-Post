 My Blog
----------------------------------------------------------------
About author: 
-------------
Al- Imran Ahmed
Web Application Developer
E-mail: al.imran.cse@gmail.com

About the Blog:
---------------
Name: My Blog
Used Language and Framework: PHP(codeignitor), HTML, CSS and bootstrap
Editor & IDE: Bracket and Netbeans
Description: This is a simple blog using codeignitor framework of php. The view of the blog is dynamically changed for normal user, admin and author. No one cannot comment in any post without loged in. There is a very simple blog site. I have just implemented the common functionality of a blog. In this blog, I have implement some features of codeigniter which are not active on the contex of this project. This resource can be used for any other project. As this project was made using netbeans IDE there is a derectory named nbproject wich is not necessery for the functionality of the blog.


Technical Description
----------------------

Model: I have create three models in this project. The prefix m_ is used to identify the file as model easily.
	1. m_db: The common  operations on database(CRUD)
	2. m_comment: The operations on database related to comments.
	3. m_user: The operations on database related to users.


View: All the views are named as their functionality. the header and footer view contain the header and footer of every pages and necessary links on stylesheets and scripts.


Controllers: 
	1. Blog: Controll the common behaviours of the blog.
	2. Comments: Controll the functionality of comments.
	3. Emails: Controll the functionality of emails. Which is not active in this blog.
	4. Pages:Controll the navigation through the pages.
	5: Uploads: Controll uploading and re-sizing photos.
	6. Users: Controll the permission and action of users(user, admin and author).
