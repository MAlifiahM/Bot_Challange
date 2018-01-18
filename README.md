# Bot_Challange
This is a bot made using dialogflow


# How it Work

You can clone this repo wiht ``git clone git@github.com:MAlifiahM/Bot_Challange.git`` or download it. Then install ``composer install`` in your terminal. After that, follow this steps in below. 

## Generate Key

- To get generate key, run ``php artisan key:generate`` in your terminal and input the key in ``APP_KEY`` there are in file ``.env``.

## Set Up Databases

- Still in file ``.env``, set up your databases. Like change name database, username and password your databases.

## Migration

- For migration the tables in databases, run ``php artisan migrate``. 

## Seeder

- To input the sample datas in tables, run ``php artisan db:seed``.

## Make Oauth

To access the data, we need authentication. We have done some preparation to build Oauth, you can run ``php artisan passport:install`` to get cliend id and client secret. After that us cliend id and cliend secret to get access token with method ``POST`` and route ``/oauth/token``.
```
{
	"grant_type": "password",
	"client_id": "2",
    "client_secret": "wnA9M6SCgDHm2ongk46MX1F7ChUSgxqfpCrIbnTA",
    "username": "pril@gmail.com",
    "password": "pril44",
    "scope": ""
```

## Run the Server

Run ``php artisan serve`` to run the server.


# How to Use this in DialogFlow

To use DialogFlow for get the data, you can use endpoint ``/main/{command}``. Below is a command that can be used.

## Users

### To Get All Users

- see all users
- lihat semua user
- lihat semua akun
- tampilkan user

### To Get One Users


## Posts



## Comments



## Albums



## Photos



## Todos




