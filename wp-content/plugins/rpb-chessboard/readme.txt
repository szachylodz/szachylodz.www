=== RPB Chessboard ===
Contributors: yo35
Tags: chess, chessboard, fen, pgn, games
Requires at least: 3.9
Tested up to: 4.4
Stable tag: trunk
License: GPLv3
License URI: http://www.gnu.org/licenses/gpl-3.0.html

This plugin allows you to typeset and display chess diagrams and PGN-encoded chess games.



== Description ==

RPB Chessboard allows you to typeset and display chess games and diagrams
in the posts and pages of your WordPress blog,
using the standard [FEN](http://en.wikipedia.org/wiki/Forsyth-Edwards_Notation)
and [PGN](http://en.wikipedia.org/wiki/Portable_Game_Notation) notations.

= Links =

* [Ask for help or report a problem](https://github.com/yo35/rpb-chessboard/issues)
* [Live demo](http://rpb-chessboard.yo35.org/)
* [Source code (GitHub repository)](https://github.com/yo35/rpb-chessboard)

= Examples =

`
[fen]rnbqkbnr/pppppppp/8/8/8/8/PPPPPPPP/RNBQKBNR w KQkq - 0 1[/fen]
`

`
[pgn]

[White "Bill Gates"]
[Black "Magnus Carlsen"]
[Result "0-1"]

1. e4 Nc6 2. Nf3 d5 3. Bd3 Nf6 4. exd5 Qxd5 5. Nc3 Qh5 6. O-O Bg4
7. h3 Ne5 8. hxg4 Nfxg4 9. Nxe5 Qh2# 0-1

[/pgn]
`

= Features =

 * Customizable aspect for the chessboards (orientation, size, etc...).
 * Support comments and sub-variations in PGN-encoded games.
 * Support HTML formatting in PGN comments.
 * Colored square and arrow markers.
 * Compatibility mode to avoid conflicts with the other plugins that use
   the `[fen][/fen]` and `[pgn][/pgn]` shortcodes too.
 * Graphical assistant to create and modify chess diagrams in the post/page editor.
 * Multi-language support.

If you encounter some bugs with this plugin, or if you wish to get new features
in the future versions, you can report/propose them
in the [GitHub bug tracker](https://github.com/yo35/rpb-chessboard/issues).

If you are interested in translating this plugin into your language,
please [contact the author](mailto:yo35@melix.net).



== Installation ==

1. Download [rpb-chessboard.zip](http://downloads.wordpress.org/plugin/rpb-chessboard.zip)
and upload its content to the `/wp-content/plugins/` directory of your website.
2. Activate the plugin through the 'Plugins' menu in WordPress.
3. You are now able to put `[fen][/fen]` and `[pgn][/pgn]` tags in your posts and pages
to insert chess diagrams and full chess games.
Please look at the 'Chess > Memo' menu (created by the plugin) for examples of
how to use these tags.

For extensive details about plugin installation and management,
please have a look to the general [plugin management page](http://codex.wordpress.org/Managing_Plugins).



== Frequently Asked Questions ==

= How to find help? =

First, **look at the plugin help page**. This help page is available in the administration section
of your WordPress website: in the main navigation menu > "Chess" > "Help". If no answer can be found there,
ask your question on [this forum](https://github.com/yo35/rpb-chessboard/issues).

= I encounter a bug, or I think the plugin misses a key feature... =

Please expose your case on [the forum](https://github.com/yo35/rpb-chessboard/issues)!
Usually, bugs get fixed very quickly after being reported. Feature requests are discussed,
and then implemented if relevant.

= The plugin is not available in my language, I want to translate it. =

Please [contact the author](mailto:yo35@melix.net) for this.



== Screenshots ==

1. Typesetting and rendering a chess diagram.
2. Typesetting and rendering a chess game with comments and sub-variations.
3. Chess diagram in a post with the Twenty Ten theme.
4. Chess game in a post with the Twenty Ten theme.
5. When clicking on a move, a popup frame is displayed, showing the corresponding position.
6. A navigation board can be added near the move list.
7. Chess game with comments and sub-variations. HTML formatting in text comments is supported.
8. Graphical assistant to create and modify chess diagrams in the post/page editor.



== Changelog ==

= 4.3 (March 10, 2016) =
* Add colorset and pieceset customization parameters (see #13 and #29).

= 4.2.3 (January 21, 2016) =
* Fix PGN parsing issue (see #53).

= 4.2.2 (December 20, 2015) =
* Add cache for dynamic CSS.
* Tested up to WordPress 4.4.

= 4.2.1 (November 22, 2015) =
* Fix rendering of NAG $11 (see #51).

= 4.2 (November 15, 2015) =
* Add move animation and highlighting (see #39).
* Refactor organization of PHP classes.

= 4.1.4 (September 2, 2015) =
* Turkish translation (thanks to Ali Nihat Yazıcı).
* Tested up to WordPress 4.3.

= 4.1.3 (August 15, 2015) =
* Fix click-on-image-not-working issue in IE (see #43).
* Tested up to WordPress 4.2.4.

= 4.1.2 (August 1, 2015) =
* Fix arrow-head issue in Chrome (see #40).

= 4.1.1 (July 27, 2015) =
* Fix small-screen related issue (see #41).
* Fix navigation frame sizing issue occurring with some themes.
* Tested up to WordPress 4.2.3.

= 4.1 (July 7, 2015) =
* Add: option to get navigation board above/below the move list.

= 4.0.2 (June 17, 2015) =
* Fix syntax issue.

= 4.0.1 (June 17, 2015) =
* Fix compatibility issue with PHP <= 5.3 (see issue #37).
* Force JS/CSS file reloading each time the version of the plugin changes.

= 4.0 (June 6, 2015) =
* Add support for square highlights and arrow (see issue #27).
* Refactor the help pages.
* Tested up to WordPress 4.2.2.

= 3.6.2 (April 26, 2015) =
* Add help on null moves.
* Tested up to WordPress 4.2.

= 3.6.1 (April 18, 2015) =
* Null-move support (see issue #35).

= 3.6 (March 29, 2015) =
* Significant code refactoring of the JavaScript chess library: do not use chess.js anymore.
* Improve FEN/PGN parsing error messages (see issue #11).

= 3.5.1 (March 15, 2015) =
* Fix: make `flip` attribute work on tag `[pgndiagram]` (see issue #32).

= 3.5 (February 22, 2015) =
* Add options to customize chessboard appearance on small-screen devices (see issue #26).
* Tested up to WordPress 4.1.1.

= 3.4.3 (January 26, 2015) =
* Add: scroll the document to the selected move if it is not visible (see issue #28).  
* Tested up to WordPress 4.1.

= 3.4.2 (November 23, 2014) =
* Sprite system refactoring to allow responsive web design (see issue #26).
* Fix file-collapse issue (see #25).
* Tested up to WordPress 4.0.1.

= 3.4.1 (November 17, 2014) =
* Fix localization not working on frontend.

= 3.4 (October 26, 2014) =
* Refactor edit-FEN dialog and make it available in TinyMCE editor.

= 3.3 (September 6, 2014) =
* Dutch translation (thanks to Ivan Deceuninck).
* Tested up to WordPress 4.0.
* Minor fixes.

= 3.2.3 (August 30, 2014) =
* Fix issue with occurring with `[pgn][/pgn]` tags in non-post/page contexts.

= 3.2.2 (August 30, 2014) =
* Fix issue with occurring with `[fen][/fen]` tags in non-post/page contexts.

= 3.2.1 (August 26, 2014) =
* Fix plugin set-up for non-standard WordPress install configurations.

= 3.2 (August 13, 2014) =
* Improve date rendering and localization.
* Tested up to WordPress 3.9.2.
* Minor fixes.

= 3.1 (July 27, 2014) =
* Polish translation (thanks to Dawid Ziółkowski).
* Minor fixes.

= 3.0 (July 14, 2014) =
* Add: cancel/reset buttons in the setting pages.
* Minor fixes.

= 2.99.1 (June 27, 2014) =
* Fix compatibility issue with PHP <= 5.2.
* CSS classes for light- and dark-squares (see issue #13).

= 2.99 (June 16, 2014) =
* Add: piece symbol customization.
* Add: navigation board next to the move list (not only in a popup frame).
* Fix several bugs related to PGN game parsing and rendering.
* Code refactoring (use the jQuery widget framework for PGN rendering in particular).
* Provide minified versions of the JS scripts.

= 2.4.3 (May 12, 2014) =
* Plugin icon & banner.

= 2.4.2 (May 10, 2014) =
* Update the documentation and add links toward Yo35.org.
* Tested up to WordPress 3.9.1.

= 2.4.1 (April 30, 2014) =
* Improve code robustness with respect to dynamically loaded content (e.g. through AJAX requests).

= 2.4 (April 26, 2014) =
* German translation (thanks to mliebelt).
* Fix browser compatibility issue (bug with the FEN dialog, reported as issue #5).
* PHP code refactoring (backend).

= 2.3.2 (April 19, 2014) =
* Tested up to WordPress 3.9.
* Minor code cleaning.

= 2.3.1 (April 4, 2014) =
* Fix warnings issued by WP in debug mode.

= 2.3 (March 16, 2014) =
* Dialog to create/edit FEN chess diagrams in the text editor.

= 2.2.2 (March 13, 2014) =
* Improve compatibility with IE <= 10.

= 2.2.1 (February 16, 2014) =
* Fix parsing bug (castle moves with check, reported as issue #3).

= 2.2 (February 16, 2014) =
* Faster rendering of the chess diagrams.
* Tested up to WordPress 3.8.1.

= 2.1 (January 3, 2014) =
* Compatibility mode to avoid conflicts with other plugins that might use the `[fen][/fen]` and `[pgn][/pgn]` shortcodes.

= 2.0.1 (December 13, 2013) =
* Tested up to WordPress 3.8.

= 2.0 (November 10, 2013) =
* Add: flip attribute (to change the orientation of the chessboards).
* Auto-size the chessboard in the navigation frame generated with `[pgn][/pgn]`.

= 1.99.6 (November 4, 2013) =
* Documentation for the PGN tag.

= 1.99.5 (November 2, 2013) =
* Fix issue #1.
* Documentation for the FEN tag.

= 1.99.4 (November 2, 2013) =
* Clean the credits page in the backend.
* Fix: missing theming for the jQuery widgets in the backend.

= 1.99.3 (November 1, 2013) =
* Fix: use the WP theming for jQuery dialogs to avoid conflicts between CSS.

= 1.99.2 (October 31, 2013) =
* Fix: rpbchessboard.php is renamed as rpb-chessboard.php (allocated slug name on the WP repository).

= 1.99.1 (October 31, 2013) =
* First public version.



== Upgrade Notice ==

= 2.99 =
The way margins above and below `[fen][/fen]` and `[pgn][/pgn]` sections are set has been changed,
to make it more independent of the theme: you should check the new margins to ensure their correctness.



== Credits ==

= Author =

Yoann Le Montagner

= Translators =

Markus Liebelt (German), Yoann Le Montagner (English and French), Ivan Deceuninck (Dutch),
[Dawid Ziółkowski](http://dawidziolkowski.com/) (Polish), Ali Nihat Yazıcı (Turkish).

= Graphic resources =

Pieceset *CBurnett* has been created by [Colin M.L. Burnett](https://en.wikipedia.org/wiki/User:Cburnett),
who shares it under the [CC-BY-SA] license on [Wikimedia Commons](https://commons.wikimedia.org/wiki/Category:SVG_chess_pieces);
user [Antonsusi](https://commons.wikimedia.org/wiki/User:Antonsusi) has also contributed to this work.
Piecesets *Celtic*, *Eyes*, *Fantasy*, *Skulls* and *Spatial* have been created by
[Maurizio Monge](http://poisson.phc.unipi.it/~monge/), who makes them freely available for chess programs.
Colorsets *Coral*, *Dusk*, *Emerald*, *Marine*, *Sandcastle* and *Wheat* have been proposed
in this [blog post](http://omgchess.blogspot.fr/2015/09/chess-board-color-schemes.html)
by [Gorgonian](http://omgchess.blogspot.fr/).
Icons *Undo*, *Redo*, and *Delete* have been created by [Momentum Design Lab](http://momentumdesignlab.com/),
who shares them under the [CC-BY] license on [Find Icons](http://findicons.com/pack/2226/matte_basic).

The author would like to thank all these people for their highly valuable work.
