# Event_reservation
event exposition and reservation system
# features
- exposition of different events
- Location indicator in google maps
- navigate through events hall maps
- reserve your place in the event
- Admin login and dashboard

## How to Install

#Requirements :
- php>5.6
- mysql(wamp or xamp)
- composer(https://getcomposer.org/download/)
- git

 #Get the source code on your machine via git
 - git clone https://github.com/Mazbaul/Event_reservation.git
 - Rename file .env.example to .env and change credentials.
 - Create a database and inform .env

 #go to project folder
- cd projectname
- composer install
- php artisan key:generate
- php artisan migrate --seed to create and      populate tables
- php artisan serve to start the app on http://localhost:8000/

