# Official Garry's Mod Server Container on EdenServers

[![Run on EdenServers](https://img.shields.io/badge/EdenServers-view-blue.svg)](http://www.edenservers.us)

![](http://image.noelshack.com/fichiers/2015/35/1440685079-wordpress-logo.jpg)

All-in-one Wordpress Container built for [EdenServers](http://www.edenservers.us).

---

**This image is meant to be used on an EdenServers Server.**

Our images are built to specifically run for our services. You can run it directly with Docker though.

---
### 1.0.0 (2015-08-27)

This initial version contains:

* *wordpress*
* *mysql*

---

## Install

    $ docker pull edenservers/wordpress

---

## Config


| Port  | Description |
| ------------- | ------------- |
| 80 | Wordress  |

---

## Run example

    $ docker run -d -p 80:80 edenservers/wordpress

---

Made by [![EdenServers](http://image.noelshack.com/fichiers/2015/35/1440630894-logo.png)](https://www.edenservers.us)
