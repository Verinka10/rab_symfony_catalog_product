### Install
```bash
git clone https://github.com/Verinka10/rab_symfony_catalog_product.git
cd rab_symfony_catalog_product
````

add DATABASE_URL to .env (or create .env.local, .env.test.local)
<pre>
DATABASE_URL="postgresql://app:!ChangeMe!@127.0.0.1:5432/app?serverVersion=16&charset=utf8"
</pre>
```bash
composer install
symfony server:start -d
symfony open:local
```
open /api

<pre>
Resource 'Product' operations.
GET /api/products Retrieves the collection of Product resources.
POST /api/products Creates a Product resource.
GET /api/products/{id} Retrieves a Product resource.
DELETE /api/products/{id} Removes the Product resource.
PATCH /api/products/{id} Updates the Product resource.
</pre>
