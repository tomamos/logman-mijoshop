LOGman MijoShop plugin
========================

Plugin for integrating [MijoShop](http://miwisoft.com/joomla-extensions/mijoshop-joomla-shopping-cart) with LOGman. [LOGman](http://joomlatools.com/logman) is a user analytics and audit trail solution for Joomla.

## Installation

### Composer

You can install this package using [Composer](https://getcomposer.org/). Create a `composer.json` file inside the root directory of your Joomla! site containing the following code:

```
{
    "require": {        
        "joomlatools/plg_logman_mijoshop": "dev-master"
    },
    "minimum-stability": "dev"
}
```

Run composer install.

### Package

For downloading an installable package just make use of the **Download ZIP** button located in the right sidebar of this page.

After downloading the package, you may install this plugin using the Joomla! extension manager.

## Usage

After the package is installed, make sure to enable the plugin and that both LOGman and MijoShop are installed.

## Supported activities

The following MijoShop actions are currently logged:

### Items

* Add
* Edit
* Delete
* Publish
* Unpublish

### Categories

* Add
* Edit
* Delete
* Publish
* Unpublish

## Limitations

Trash actions on both categories and items are not supported since no events are internally triggered by MijoShop upon those actions.
