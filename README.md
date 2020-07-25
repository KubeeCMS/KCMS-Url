# URL Component

A plugin to fix admin links due to the KCMS url changes. See [this issue](https://github.com/kubeeapp/kcms/issues/250) for more background.

This plugin does not affect the paths for other stylesheets or plugins, just the URLs for sites using KCMS. Specifically, it fixes broken links by ensuring that /wp/ is in the URL. (This is needed for admin panel links because KCMS installs CMS in a subfolder.)_

Many thanks to [@felixarntz](https://github.com/felixarntz) for the original code!
