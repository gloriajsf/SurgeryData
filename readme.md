## Interactive Public Healthcare Data

This project is to retrieve and manage data from Cardiac Surgery by Surgeon (2008-2010) — https://health.data.ny.gov/api/views/dk4z-k3xb/rows.json

It is a publicly accessible site displaying surgery data by surgeon. 
This application displays data retrieved form this API in a user-friendly way.

## Requirement
* Virtualbox 5.*
* PHP 7.0
* Vagrant

## Installation
 Run the following commands from terminal in your projects directory
	- git clone git@github.com:gloriajsf/SurgeryData.git
	- cp .env.example .env
	- composer install(install computer before this step if it haven't been done)
	- php artisan key:generate


