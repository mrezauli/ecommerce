Tables should need

Users [Seller, Customer]
-id
-email
-password
-name
-isSeller

Products
-id
-name
-color
-size

Orders
-id
-product_id [hasMany, belongsTo] 
-quantity
-address

Products hasMany Orders
Orders hasOne[belongsTo] Products

Dependency:
Twig-> Templating Engine
Eloquent-> for database operation, ORM

Authentication: user info
Authorization: permission info / check

Authentication: users CRUD/BREAD
sign in
sign up
Create/Add: 
Read/BrowseRead: 
Update/Edit:
Delete/Delete: