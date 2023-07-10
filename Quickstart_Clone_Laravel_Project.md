

# QUICK Setup MP_MOX in own pc:

### Clone repo into VS_Code:
* Get git clone link:



<ul>
<li>get github code for cloning:</li>

```
https://github.com/CyrSen/MP_MOX.git
```
<li>Open repository in editor of your choice</li>
<li>Open terminal</li>
<li>Insert following code:</li>

```
docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v $(pwd):/var/www/html \
    -w /var/www/html \
    laravelsail/php82-composer:latest \
    composer install --ignore-platform-reqs
```

<li>Start docker(sail) and dev server:</li>

```
sail up -d
```
<li>Make migration to check if db is running:</li>

```
sail artisan migrate
```
<li>Open second terminal in editor</li>

```
sail npm run dev
```
<li>In case npm not running:</li>

```
sail npm install
```
<li>Repeat:<br>

```
sail npm run dev
```
</li>

<li>Laravel-App: <a href="http://localhost">localhost</a></li>
<li>PhpMyAdmin: <a href="http://localhost:8090">phpmyadmin</a></li>
</ul>