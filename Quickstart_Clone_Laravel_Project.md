<div align="center">
<a href="https://www.myofficex.ch/" title="Unser Ziel: Dein Komfort: Besuch das Projekt!"><img src="https://github.com/CyrSen/MP_MOX/blob/main/public/assets/img/readme_intro_pic.png?raw=true" alt="Sample screenshot"></a>

</div>




---
# myOffice<span style="font-weight:bold;">X</span>: Unser Ziel - Dein Komfort


## Introduction (Ausgangslage)
<p style="color:red">Text</p>

## Research significance (Why do this?) 
<p style="color:red">Text</p>

## Methodology (How do this?) 
<p style="color:red">Text</p>

## Result/Conclusion (myofficeX-Application) 
<p style="color:red">Text</p>


## Manual: How use the application
* TBC
* <p style="color:red">Text</p>
<p style="color:red">Text</p><p style="color:red">Text</p><p style="color:red">Text</p><p style="color:red">Text</p>
<!-- * open [localhost](http://127.0.0.1/)
* choose login with your or register top right of screen
* when already registered fill in credentials  => enter
* if not, register new account, fill in inputs required => enter
* back on main blog page (localhost) either chose blog to read by mouse-click or tab-key => enter
* or create own new blogpost => bottom center button "create"
* on create-post-page: choose image, choose title, write blog-text =>submit => back on localhost see new post
* read post by select on mousclick or tab-key
* use like or dislike buttons for reaction and/or 
* comment on post: press comments-link (yellow-center)
* write commentary
* happy blogging yalls! -->


------------------------------

## Setup from Github (LAMP / Docker-Sail)
### Setup / Installation with LAMP Stack

### Prerequisites

* LAMP Stack (Linux/Apache/Mysql/Php) or XAMPP-setup (Windows)
* Composer
* PHP 8.1
* Mysql or Mariadb Database

### Setup LAMP
<ul>
<li>get github code for cloning</li>
<li>Open repository in editor of your choice</li>
<li>Open terminal</li>
<li>Start Database<br>

```bash
sudo systemctl start mariadb
```
</li>
<li>Create Databse<br>

```bash
CREATE DATABASE <name database>;
```
</li>
<li>Create User (these are the Env.variables afterwards)<br>

```bash
CREATE USER 'DB_USERNAME'@'localhost' IDENTIFIED BY 'DB_PASSWORD';
```
</li>
<li>Grant user previleges<br>

```bash
GRANT ALL PRIVILEGES ON <name database>.* TO 'DB_USERNAME'@'localhost';
FLUSH PRIVILEGES;
```
</li>
<li>Install Node/NPM if needed<br>

```
npm install
```
</li>
<li>If installed, update<br>

```
npm update 
```
</li>
<li>Update Composer<br>

```
composer update 
```
</li>

<li>If no composer, install guide (Ubuntu)*<br>

</li>
<li>Generate Key:<br>

```
php artisan key: generate
```
</li>
<li>Run Database<br>

```
php artisan serve
```
</li>

</ul>

* *[Get Composer]('https://www.digitalocean.com/community/tutorials/how-to-install-and-use-composer-on-ubuntu-20-04')


### Setup / Installation Docker-Sail
<ul>
<li>get github code for cloning</li>
<li>Open repository in editor of your choice</li>
<li>Open terminal</li>
<li>Insert following code:<br>

```bash
docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v $(pwd):/var/www/html \
    -w /var/www/html \
    laravelsail/php82-composer:latest \
    composer install --ignore-platform-reqs
```
</li>
<li>Start docker(sail) and dev server:<br>

```bash
sail up -d
```

```bash
sail npm run dev
```

</li>
<li>In case npm not running:<br>

```
sail npm install --save-dev
```

*only if you need it dev-only, otherwise, remove "--save-dev"
</li>

</ul>

<p style="color:red">Hier kannst anpassen</p>


## Thank you for your time.
---
### Any feedback or assisting constructive critique is welcome.<br> Feel free to reach out or text via [Cyrill Senger](mailto:cvsenger@gmail).
----
----
## License:
* none, free use
----
## Tools Used:
* [Laravel/Breeze](https://laravel.com/docs/10.x/
* [Laravel - Sail](https://laravel.com/)
* [Bootstrap_5.3](https://getbootstrap.com/docs/5.3/getting-started/introduction/)
* [MDB](https://mdbootstrap.com/)
* [Google Fonts](https://fonts.google.com/)
* [Fontawesome](https://fontawesome.com/)
* [Animate.css](https://animate.style/)
* [AOS](https://michalsnik.github.io/aos/)<br>[AOS-Git]('https://github.com/michalsnik/aos')
starter-kits#breeze-and-blade)
* [Github](https://github.com/CyrSen/MP_MOX) (for file repo/sharing/workflow)
* HTML, CSS, Javascript, PHP
* [Visual Studio Code](https://code.visualstudio.com/)
* Internet for research
* imagination 
* feeling for details
* the will to learn, improve share knowledge throughout the whole team-experience
----
## Main Content:
<div style="text-align:center; font-size:20px">

[Github](https://github.com/CyrSen/MP_MOX)<br>
[Figma](https://www.figma.com/file/drTHVleCW6wAmzNCIj9ziu/MP_MOX%2FMyOfficeUX?type=design&node-id=0%3A1&mode=design&t=JBNcIBa54Qim9ga1-1)<br>
<!-- [UML-DB-Scheme](https://plantuml.github.io/plantuml-core/raw.html?VO-nQiD038PtFuNgFNc2aA7jq2KGqj0b62Fx5FVgisLEIZCKltklzXqS13f9-d_n_TAJVj9081EsvB0fGksn8oYFwF2RF3mxxahuAG3UpkSZRE3omgDwTevy5THyXDrskuVBWGsvnLixs6tsy8gA3Gfbyh9yufj6KcoNzVzI_kmFI_Ugc0iJiL2cWFNOApiJhYyFD3IXdi9pIcRr0kucvAM2TPXGvCxUr9w4j5RkQPGgUc6FHtGrjYs9PEQSfRnRfOUCYKKJnjcUwbneUHXer4XAdFJ30-kArf6flxX9WC5s7jLoEcR-1G00) -->
</div>

----
### 20230710 1st rm: 
A production by Cyrill Senger [CyrSen/MP_MOX](https://github.com/CyrSen/MP_MOX) 
and Gaudenz Raiber [Gaudenz77](https://github.com/Gaudenz77)