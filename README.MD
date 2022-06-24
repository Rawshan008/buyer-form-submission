# PHP Buyer Form Submission.

## Validation both front-end and Backend with Javascript and PHP.

### Requirement and Useas
    - PHP 7.4+
    - jQuery 3.5.0 (Included)
    - Bootstrap (Included)
    - HTML, CSS (Included)

#### Installation
This files installation is very simple. Just you will have php 7.4 + version.  Now,

#### XAMPP Installation
  - Go to your htdocs directory of your xampp folder and clone the project from github direcotory or you can download form github directory and extract into htdocs folder. 
  - Create a database on your mysql named "buyer-form-submission" or you can create any name. and import data table "tbl_buyer.sql" in your database.
  - Now set your Database credentials in "config/db_connect.php" file. Now edit DB_HOST, DB_USER, DB_PASS, DB_NAME
  
        define("DB_HOST", "localhost") 
        define("DB_USER", "root")
        define("DB_PASS", "")
        define("DB_NAME", "buyer-form-submission")

  - Now open your browser and execute the index.php file of your project root directory. like as 'localhost/buyer-form-submission/'

#### Main Page:
  ![Main page](/view/img/main.png)

#### Form Page/Create Page:
  ![Form page](/view/img/entry_form.png)


#### Entry Prevent Message:
  ![Form Prevent page](/view/img/entry_prevent.png)

If You see this kind of form message. thats means you can not insert data. you have to wait until 24 hours. after form submitting it add a cookie in your browser "buyer_submit" for checking purpose you can delete this cookie and reinsert.

#### Search:
  ![Search Form](/view/img/search.png)

If you want to search then you can search by "Entry By" and Date range. after search you can reset and show all data.