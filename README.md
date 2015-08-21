# _Hair Salon_

##### _An application that allows hair salon owners to more effectively manage their stylist and client lists, 2015.08.21_

#### By _**Julian Stewart**_

## Description

_This application, through a simple web interface, allows hair salon owners to:_
* _Create a list of the stylists working at that salon_
* _Assign a list of clients to each stylist_

## Limitations

_The current version of this application does not allow the user to associate multiple stylists with a specific client or clients._

## Setup

_This project makes use of a PHP dependency manager. Full details and installation instructions can be found at <a href="https://getcomposer.org">getcomposer.org</a>._

_Your computer must also be set up to support PDO (PHP Data Objects) and MySQL. There are a variety of free tools available to configure your computer, including MAMP (MacOS) and LAMP (Windows), as well as ample documentation online._

_To run the application:_

* _Start your local PHP server from the web/ directory within the project folder_
* _Start your MySQL server, and run the following commands:_
<pre>
CREATE DATABASE hair_salon;
CREATE TABLE stylists (stylist_id serial PRIMARY KEY, stylist_name varchar (255));
CREATE TABLE clients (client_id serial PRIMARY KEY, client_name varchar (255));
</pre>
* _Point your browser to your localhost server_

## Technologies Used

_PHP, MySQL, Silex, Twig_

### Legal

Copyright (c) 2015 **_Julian Stewart_**

This software is licensed under the MIT license.

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.
