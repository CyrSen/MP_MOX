<div align="center">
<a href="https://www.myofficex.ch/" title="Unser Ziel: Dein Komfort: Besuch das Projekt!"><img src="https://github.com/CyrSen/MP_MOX/blob/main/public/assets/img/readme_intro_pic.png?raw=true" alt="Sample screenshot"></a>

</div>




---
# myOffice<span style="font-weight:bold;">X</span>: Unser Ziel - Dein Komfort


## Introduction
The Feedback App is an innovative web-based solution developed by myOfficeX to make offices more comfortable, energy-efficient, and cost-effective. This README provides an overview of the app, its purpose, and its features.

## Significance 
The Feedback App aims to tackle two major issues prevalent in office environments: comfort and energy efficiency. Studies reveal that a significant portion of office workers experience discomfort due to factors such as noise, unpleasant temperature, and inadequate air quality. Additionally, a substantial amount of energy is wasted in office buildings due to inefficiencies. By addressing these challenges, the Feedback App aims to create a more productive and sustainable work environment.

## Methodology
The Feedback App utilizes a user-friendly interface that allows office workers to submit their feedback on various comfort factors such as noise, temperature, and air quality easily and anonymously. The app then analyzes the frequency and severity of the reported issues and creates a visualization. Thanks to this visualization, the employer or facility manager can quickly see if there are any comfort issues in the office that need to be addressed. 

The elegance of this solution lies in its triple benefit for employers, as comfort issues always have implications for cost-effectiveness and energy efficiency. Here's an example: A malfunction in the heating, ventilation, and air conditioning system can result in employees feeling either too hot or too cold. This negatively impacts their productivity as they feel uncomfortable and struggle to concentrate. Additionally, the building's energy consumption increases unnecessarily as more energy is expended on heating or cooling than required. The heightened energy costs and reduced work performance have adverse effects on cost-effectiveness. Through the myOfficeX Feedback-App, such problems can be swiftly addressed, resulting in a more comfortable, energy-efficient, and cost-effective office environment.

In addition, a tips page is designed to provide office workers with valuable guidance and practical suggestions to improve their comfort and well-being in the workplace. It offers a range of helpful tips and strategies that can be easily implemented to create a more conducive and enjoyable work environment.

## Result/Conclusion (myofficeX-Application) 
The myOfficeX Feedback App has been developed as a comprehensive solution to address the challenges of office comfort, energy efficiency, and cost-effectiveness. By leveraging its user-friendly interface along its data analysis and visualization capabilities, the app offers significant benefits and outcomes for both office workers and employers.

Key benefits of the myOfficeX Feedback App include:
* Enhanced Comfort and Productivity: Through the app's feedback submission feature, office workers can easily and anonymously report comfort-related issues such as noise, temperature, and air quality. By promptly addressing these concerns, employers can create a more comfortable and productive work environment, positively impacting employee satisfaction and performance.

* Improved Energy Efficiency: The app's visualization feature allows employers to gain valuable insights into comfort issues within the office space. By identifying and resolving energy inefficiencies, such as heating and cooling malfunctions, unnecessary energy consumption can be reduced, resulting in cost savings and a more sustainable workplace.

* Cost-Effectiveness: The myOfficeX Feedback App's triple benefit approach ensures that employers can address comfort issues while considering their impact on cost-effectiveness and energy efficiency. By efficiently resolving problems and optimizing office conditions, unnecessary expenses can be minimized, leading to better financial outcomes.
* User Satisfaction and Engagement: The app's user-friendly design and anonymous feedback submission process promote transparency and encourage active participation from office workers. By providing a platform for employees to voice their concerns, employers can foster a culture of openness and continuous improvement, enhancing overall satisfaction and engagement.

In conclusion, the myOfficeX Feedback App offers a practical and effective solution for addressing office comfort, energy efficiency, and cost-effectiveness. With its intuitive interface, data-driven insights, and actionable recommendations, the app empowers employers to create a comfortable, sustainable, and financially viable work environment while prioritizing employee well-being and satisfaction.


## Manual: How use the application

### Manual for Office Workers
1) To get started, visit the myOfficeX landing page at www.myofficex.ch.

2) If you haven't registered yet:

    a) Click on the "Register" button in the navigation bar.

    b) Fill out the registration form with your preferred username, email address, password (confirming it as well), and the office code provided by myOfficeX. If you don't have an office code, please contact us at contact@myofficex.ch for assistance. Once completed, submit the form to access the app.

3) If you have already registered: 

    a) Simply log in using your registered email and password.

4) Once logged in, you can start using the app:

    a) Navigate to the Feedback page.

    b) Choose the specific zone on the office floor plan for which you want to provide feedback.

    c) Rate the current comfort level for the four feedback categories.

    d) Optionally, you can also provide additional comments via a text message.

5) Explore the Tips page to access helpful guidance:

    a) Click on the "Tips" section in the navigation bar.

    b) Select the feedback category you are interested in by clicking the corresponding blue button. This will open a modal where you can find valuable tips and strategies.

### Manual for Facility Managers/Employers
1) Begin by visiting the myOfficeX landing page at www.myofficex.ch.

2) If you haven't registered yet:

    a) Click on the "Register" button in the navigation bar.

    b) Complete the registration form by entering your desired username, email address, password (confirming it as well), and the office code provided by myOfficeX. If you don't have an office code, please contact us at contact@myofficex.ch for further assistance. Once finished, submit the form to register as an office worker.

    c) To gain access to the facility manager/employer features, please get in touch with myOfficeX admins directly, either in person, over the phone, or via contact@myofficex.ch. They will activate the additional functionalities for you.

3) If you have already registered, simply log in using your email and password.

4) Access the "Report" page to view feedback data:

    a) Specify the desired time range for the report.

    b) The feedback for each category will be displayed on the floor plan corresponding to that specific category.

5) For more detailed information, refer to the accompanying table.

6) To conclude your session, log out by selecting the designated option in the navigation bar associated with your username.


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

## Thank you for your time.

### Any feedback or assisting constructive critique is welcome.<br> Feel free to reach out or text via [Cyrill Senger](mailto:contact@myofficex.ch).


# License:
* The use, reproduction, modification, publication, distribution, sublicensing, and/or sale of the copyrighted material (e.g., software) is prohibited without explicit written permission.
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
</div>

----
### 20230710 1st rm: 
A production by Cyrill Senger [CyrSen/MP_MOX](https://github.com/CyrSen/MP_MOX) 
and Gaudenz Raiber [Gaudenz77](https://github.com/Gaudenz77)