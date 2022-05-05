Tables should need

Users [Admin, Customer]
-id
-email
-password
-name

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