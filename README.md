# Generic Custom Post Type

[![License](https://img.shields.io/badge/license-GPL--2.0%2B-red.svg)](https://github.com/pressware/easier-excerpts/blob/master/license.txt)

Creates a generic post type to be used for testing other plugins that rely on them.

## Description

When creating plugins that need to interact with third-party custom post types,
you actually need to have at least one custom post type available.

Since not all projects include custom post types and since it can take extra
time to register a custom post type, this plugin aims to create a generic
post type that allows you to install and activate the plugin to have a custom
post type available.

The plugin:

* supports a minimal level of functionality for a custom post type,
* offers arguments in `generic-custom-post-type.php` in `tm_load_generic_cpt()`

This plugin is created for other WordPress developers.

## Installation

If you download a copy of the plugin and want to install it via the WordPress
Dashboard or via S/FTP, please see the steps below.

### Using The WordPress Dashboard

1. Navigate to the 'Add New' Plugin page
2. Select `generic-custom-post-type.zip` from your computer
3. Click 'Upload'
4. Activate the plugin on the WordPress Plugin Dashboard

### Using FTP

1. Extract `generic-custom-post-type.zip` to your computer
2. Upload the `generic-custom-post-type` directory to your `wp-content/plugins` directory
3. Activate the plugin on the WordPress Plugins dashboard

## FAQ

### 1. What's the purpose of the plugin?

While working on [Easier Excerpts](https://presswareplugins.com/plugins/easier-excerpts/),
we needed a way to easily test the functionality against other custom post types
that may exist in a WordPress installation.

This plugin stemmed from us having the need to quickly create custom post types
to test this functionality.

### 2. Is this plugin supported?

[I](https://twitter.com/tommcfarlin) will try to keep this plugin updated as
issues are presented; however, the plugin is open for pull requests.

It's primarily used as a way to easily create custom post types in your own
installation (see the FAQ above). If you're a WordPress developer, then you
should have little trouble getting this up and going.

If you have questions, please don't hesitate to let me know (specifically, see
the next FAQ).

### 3. What if I have a feature request or bug report?

Please open an issue in this particular repository and provide the following information:

* the server software you are using,
* your version of PHP,
* your version of WordPress,
* recreation steps for your issues.

Include any other information you find relevant.
