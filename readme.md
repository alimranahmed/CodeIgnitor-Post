# Blog using Codignitor
This is a simple blog using codeignitor framework of php. The view of the blog is dynamically changed for normal user, admin and author. No one cannot comment in any post without loged in. There is a very simple blog site. I have just implemented the common functionality of a blog. In this blog, I have implement some features of codeigniter which are not active on the contex of this project.

## Project Purpose
**This project could be helpful for the beginners** who want to get introduced with Codeignitor. The project is built on Codeignitor 2. Codeigniter 3 has already been released so it's pretty backdated now. **This project has not been published for the purpose of blog site to be used in production**. If you need a blog project to be used in production please checkout the LaraBlog project https://github.com/alimranahmed/LaraBlog has been built on Laravel 5.*

## Technologies: 
1. PHP(Codeignitor) for backend
2. HTML, CSS and bootstrap(CSS framework) for frotnend

## Technical Description

#### Model: I have create three models in this project. The prefix m_ is used to identify the file as model easily.
1. m_db: The common  operations on database(CRUD)
2. m_comment: The operations on database related to comments.
3. m_user: The operations on database related to users.


#### View
All the views are named as their functionality. the header and footer view contain the header and footer of every pages and necessary links on stylesheets and scripts.


#### Controllers
1. Blog: Controll the common behaviours of the blog.
2. Comments: Controll the functionality of comments.
3. Emails: Controll the functionality of emails. Which is not active in this blog.
4. Pages:Controll the navigation through the pages.
5. Uploads: Controll uploading and re-sizing photos.
6. Users: Controll the permission and action of users(user, admin and author).

#### Installation Process
1. clone the repository by downloading it or by simply running the command 
`git clone https://github.com/alimranahmed/CodeIgnitor-Post.git`
2. Now you have the project in your computer as a directory named as CodeIgnitor-Post. You can put that directory directly in your server(Apache2) or you can create virtual host for that directory. 
3. Open the `application/config/database.php` file and edit database configuration as your preference. 
4. Now, there is a .sql file in root directory of the project named as `my_blog_db.sql`. Execute that file in your database changing the database name is required. 
5. How go to your browser and hit the url for that project if virtual host created otherwise try hitting `localhost/CodeIgnitor-Post` in browser's address bar. Now, you should see that home page of this project. 

### Screenshot
![List of All Post](https://cloud.githubusercontent.com/assets/7629427/22406304/337a220e-e67b-11e6-981f-d5f14f0352a5.png)
