
Easy UIkit
===

Easy UIkit is a WordPress plugin that enqueues the UIkit3 library so that it can be used regardless of which theme you're using.

###Plugin Description

Easy UIKit adds the UIkit3 library to the queue so you can use it even when changing themes. Great for page builders plugins like Beaver Builder. It also includes AlekVolsk's width-ex for extended column support (up to 30 columns).

###Beaver Builder update
Since version 1.4.0 you can also use flexbox inside Beaver Builder Columns. Currently support for uk-child-width-1-x is up to 6 columns, however, individual modules may use any supported uk-width-1-x that is supported.

Row background shapes (SVG's) and Row Shape Effects (UABB addon) have been improved and are working as expected.

More info on UIKit here: [https://getuikit.com](https://getuikit.com/docs/introduction)

####current UIkit version
Current version is v3.2.2

#### changelog:

**v.1.4.3** (January 13th, 2020)
Fixed URL path for enqueued js and css files

**v.1.4.2** (December 11th, 2019)
Removed resetting svg height, seemed to still interfere with row-shapes.

**v.1.4.1** (December 5th, 2019)
Fixed row background-shapes and UABB row-effect not showing the SVG shapes correctly.

**v.1.4.0** (November 25th, 2019)
Updated UIkit to version 3.2.2.
Added extra CSS-styling in components/lightbox.less to fix close button moving away on hover.
Tweaked svg positioning; reset .fl-builder-edit svg {} to initial so that the interface aligns correctly.

Added uk-flex support for Beaver Builder columns. Use all default UIkit classes in a column to control the modules added inside the column as the flex-items. Works up to 6 columns using uk-child-width-1-6@ and uk-width-1-6 classes.

**1.3.2** (July 30th, 2019)
Fixed to show correct UIkit version (3.1.6) in plugin's description
Removed CSS font-family style from uk-h1 through uk-h6, uk-heading-*

**1.3.1** (July 20th, 2019)
Minor update for SVG borders not handling well in Beaver Builder

**1.3.0** (July 20th, 2019)

Updated to version 3.1.6
Removed re-styling of base html-tags
Updated Github Updater Class to fix error-notices


**1.2.0** (May 14th, 2019)

Updated to version 3.1.4

**1.1.2** (April 6th, 2019)

Bugfix: added Images folder, which contain SVG icons

**1.1.1** (April 5th, 2019)

Initial commit
