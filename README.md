# PHP-CURD-Application
My First Application , PHP CRUD with MySQL &amp; Bootstrap 4 (Create, Read, Update, Delete).

This link can be used to view &amp; test the final Application : https://phpprojectcurd.000webhostapp.com/index.php

Tha application is an API which allows you to display, add, edit and delete the products in a database on the same page.

-Adding a new product:
  you need to fill the form below with information about the product(Name,Description,Price,Category ID) and then press 'Submit' button.
  
-Deleting a product from the list:
  you need to press the 'Delete' button of the product.

-Editing a product from the list:
  you need to press the 'Edit' button of the product, then you will be able to edit the information about this product in the form below, to save the changes you need to press the 'Save' button.
    
--------------------------------------------------------------------------  
--------------------------------------------------------------------------


'config.php':
-------------
this file contains all details about the database and connection properties. 


'productController.php':
------------------------
this file provides a php class with all needed functions (add,get,getAll,upd,del).


'getAll.php':
-------------
this file conatins a function (getAllProducts) which builds a new instance of the controller class and returns all the products from the database.


'get.php':
-------------
this file returns only 1 product from the database with a specified 'product_id' passed by '$_GET' method.


'del.php':
-------------
this file deletes only 1 product from the database with a specified 'product_id' passed by '$_GET' method.


'process.php':
--------------
this file handles the 2 types of requests (Adding/Editing)


'index.php':
------------
this is the main file, contains 2 main sections: 
  -the first section is the table: used to view the products from the database.
  -the second section is the form: used to fill the required information about the products.
  
