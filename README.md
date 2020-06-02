# thetannedpeach
03/10/2018<br>
You need to change in the DB the tracking number from int to <b>BIG INT</b>.
The max number from 4 bytes (which is int is 2147483647). We had a problem for that reason since our tracking number is 11 long.

The quantity is still NOT decreasing. For testing purposes I didn't create the function to delete the items from the stock table. It's not been implemented. 

The new updates consists of:
- Checkout is finally working
- It actively delete all the items in the bag of the user, creating a purchase record and create records of purchased items
- It sends an email to the user after purchase but at the moment it simply says to access their profile and check the status of the order <-- That is not ideal for the one time purchases.


<b>WHAT WE NEED TO DO BEFORE THE 10th</b>

* Bind user data to forms.
* Checkout as guest is not been implemented yet<br>
* The favorite needs to transfer to bag if the customer wishes<br>
* The bag delete function works in the cart page but not yet in the bag view from the icon<br>
* The badge for the bag works only in the checkout page at the moment<br>
* The website generally shrinks a bit badly. On mobile devices will probably break<br>
* It's easy to fix I guess. All css needs the media query<br>
* We need to improve general navigation to make an easy experience for the users<br>
* Adding to bag shouldn't bounce the user to 3 different pages before realizing that is heading to the checkout<br>
* We need more links to go back to previous page or products page<br>

If there is anything I forgot please let me know. 

--------------------------------------------------------------------------
02/09/2018

Pushed the newer version of the website. 

<b>Need to fix:</b><br />
-> The nav bar streaches to contain the results of the search <br />
-> Currently the search doesn't point to the product details of that specific item after click <br />

<b>WIP</b><br/>
-> Alternative page just for registration since we need all the information from the customer ?<br />
-> Search bar display thumbnail of product, name and price.<br /> 
Enconutered problem on inner join with 3 tables since for that we need category, image and item tables.  


--------------------------------------------------------------------------

30/07/2018

Unfortunately I failed in implementing the menu on the parallax. There is something that I missed. Unfortunately I was very tired yesterday so I took a day off from all school related stuff. 

On the bright side, I bumped into these free resources that we could use as starting point if we see it fit. Or we can simply use it to test possible changes quickly without having to implement a UI first. 

It has quite a few UI elements, but since it's the free version it's limited. It has parallax, login and other interesting elements. Let me know what you think. 

https://www.creative-tim.com/product/material-kit

--------------------------------------------------------------------------

27/07/2018

The itemDB file doesn't have an extention. If you save it as .sql you can import it after you create a DB.
So in steps:
- Create a DB in MAMP or XAMP
- In the import section you can import the SQL file and after executing, you will have the "item" table.
Courtesy of our DB ADMIN - Francesca

--------------------------------------------------------------------------

MIAOW
no discussion on the name of this repo thanks! ps. It's amazing.
