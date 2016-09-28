Simple URL Shortener
=================

Simple URL Shortener using the [Nette](https://nette.org).


Requirements
------------

- PHP 5.6 or higher
- MySQL 5 or higher


Installation
------------

The best way to install Shortener is using Composer. If you don't have Composer yet,
download it following [the instructions](https://doc.nette.org/composer). Then use command:

	composer create-project jakubboucek/url-shortener path/to/install
	cd path/to/install


Make directories `temp/` and `log/` writable.

Create MySQL user and database and fill credentials to `app/config/config.local.neon`
