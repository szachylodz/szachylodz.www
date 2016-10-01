<?php
/******************************************************************************
 *                                                                            *
 *    This file is part of RPB Chessboard, a WordPress plugin.                *
 *    Copyright (C) 2013-2016  Yoann Le Montagner <yo35 -at- melix.net>       *
 *                                                                            *
 *    This program is free software: you can redistribute it and/or modify    *
 *    it under the terms of the GNU General Public License as published by    *
 *    the Free Software Foundation, either version 3 of the License, or       *
 *    (at your option) any later version.                                     *
 *                                                                            *
 *    This program is distributed in the hope that it will be useful,         *
 *    but WITHOUT ANY WARRANTY; without even the implied warranty of          *
 *    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the           *
 *    GNU General Public License for more details.                            *
 *                                                                            *
 *    You should have received a copy of the GNU General Public License       *
 *    along with this program.  If not, see <http://www.gnu.org/licenses/>.   *
 *                                                                            *
 ******************************************************************************/
?>

<div id="rpbchessboard-aboutPage">

	<div class="rpbchessboard-floatLeft">
		<img src="<?php echo RPBCHESSBOARD_URL . 'images/rpb-chessboard-icon.png'; ?>" alt="RPB Chessboard icon" />
	</div>

	<p>
		<?php echo sprintf(
			__(
				'RPB Chessboard allows you to typeset and display chess games and diagrams '.
				'in the posts and pages of your WordPress blog, '.
				'using the standard %1$sFEN%3$s and %2$sPGN%3$s notations.',
			'rpbchessboard'),
			sprintf('<a href="%1$s" target="_blank">', __('http://en.wikipedia.org/wiki/Forsyth-Edwards_Notation', 'rpbchessboard')),
			sprintf('<a href="%1$s" target="_blank">', __('http://en.wikipedia.org/wiki/Portable_Game_Notation', 'rpbchessboard')),
			'</a>');
		?>
	</p>
	<p>
		<strong><a href="https://wordpress.org/plugins/rpb-chessboard/" target="_blank">https://wordpress.org/plugins/rpb-chessboard/</a></strong><br/>
		<a href="https://github.com/yo35/rpb-chessboard" target="_blank">https://github.com/yo35/rpb-chessboard</a>
		<?php echo sprintf('(%1$s)', __('source code on GitHub', 'rpbchessboard')); ?>
	</p>
	<p class="description rpbchessboard-clearfix">
		<?php echo sprintf(
			__(
				'If you encounter some bugs with this plugin, or if you wish to get new features in the future versions, '.
				'you can report/propose them in the %1$sGitHub bug tracker%2$s.',
			'rpbchessboard'),
			'<a href="https://github.com/yo35/rpb-chessboard/issues" target="_blank">',
			'</a>');
		?>
	</p>


	<h3><?php _e('Plugin version', 'rpbchessboard'); ?></h3>
	<p><?php echo htmlspecialchars($model->getPluginVersion()); ?></p>


	<h3><?php _e('Credits', 'rpbchessboard'); ?></h3>

	<h4><?php _e('Author', 'rpbchessboard'); ?></h4>
	<p><a href="mailto:yo35@melix.net">Yoann Le Montagner</a></p>

	<h4><?php _e('Translators', 'rpbchessboard'); ?></h4>
	<dl class="rpbchessboard-translatorList">
		<div>
			<div>
				<dt><img src="<?php echo RPBCHESSBOARD_URL . 'images/flags/de.png'; ?>" alt="German flag" />Deutsch</dt>
				<dd>Markus Liebelt</dd>
			</div>
			<div>
				<dt><img src="<?php echo RPBCHESSBOARD_URL . 'images/flags/gb.png'; ?>" alt="British flag" />English</dt>
				<dd>Yoann Le Montagner</dd>
			</div>
			<div>
				<dt><img src="<?php echo RPBCHESSBOARD_URL . 'images/flags/fr.png'; ?>" alt="French flag" />Français</dt>
				<dd>Yoann Le Montagner</dd>
			</div>
		</div>
		<div>
			<div>
				<dt><img src="<?php echo RPBCHESSBOARD_URL . 'images/flags/nl.png'; ?>" alt="Dutch flag" />Dutch</dt>
				<dd>Ivan Deceuninck</dd>
			</div>
			<div>
				<dt><img src="<?php echo RPBCHESSBOARD_URL . 'images/flags/pl.png'; ?>" alt="Polish flag" />Polski</dt>
				<dd><a href="http://dawidziolkowski.com/" target="_blank">Dawid Ziółkowski</a></dd>
			</div>
			<div>
				<dt><img src="<?php echo RPBCHESSBOARD_URL . 'images/flags/tr.png'; ?>" alt="Turkish flag" />Turkish</dt>
				<dd>Ali Nihat Yazıcı</dd>
			</div>
		</div>
	</dl>
	<p class="description">
		<?php echo sprintf(
			__(
				'If you are interested in translating this plugin into your language, please %1$scontact the author%2$s.',
			'rpbchessboard'),
			'<a href="mailto:yo35@melix.net">',
			'</a>');
		?>
	</p>

	<h4><?php _e('Graphic resources', 'rpbchessboard'); ?></h4>
	<p>
		<?php
			echo sprintf(__(
				'Pieceset %1$sCBurnett%2$s has been created by %3$sColin M.L. Burnett%6$s, '.
				'who shares it under the [CC-BY-SA] license on %4$sWikimedia Commons%6$s; '.
				'user %5$sAntonsusi%6$s has also contributed to this work.',
			'rpbchessboard'),
			'<em>',
			'</em>',
			'<a href="https://en.wikipedia.org/wiki/User:Cburnett" target="_blank">',
			'<a href="https://commons.wikimedia.org/wiki/Category:SVG_chess_pieces" target="_blank">',
			'<a href="https://commons.wikimedia.org/wiki/User:Antonsusi" target="_blank">',
			'</a>');
		?>
		<?php
			echo sprintf(__(
				'Piecesets %1$sCeltic%2$s, %1$sEyes%2$s, %1$sFantasy%2$s, %1$sSkulls%2$s and %1$sSpatial%2$s '.
				'have been created by %3$sMaurizio Monge%4$s, who makes them freely available for chess programs.',
			'rpbchessboard'),
			'<em>',
			'</em>',
			'<a href="http://poisson.phc.unipi.it/~monge/" target="_blank">',
			'</a>');
		?>
		<?php
			echo sprintf(__(
				'Colorsets %1$sCoral%2$s, %1$sDusk%2$s, %1$sEmerald%2$s, %1$sMarine%2$s, %1$sSandcastle%2$s and %1$sWheat%2$s '.
				'have been proposed in this %3$sblog post%5$s by %4$sGorgonian%5$s.',
			'rpbchessboard'),
			'<em>',
			'</em>',
			'<a href="http://omgchess.blogspot.fr/2015/09/chess-board-color-schemes.html" target="_blank">',
			'<a href="http://omgchess.blogspot.fr/" target="_blank">',
			'</a>');
		?>
		<?php
			echo sprintf(__(
				'Icons %1$sUndo%2$s, %1$sRedo%2$s, %1$sDelete%2$s and %1$sTick%2$s have been created by %3$sMomentum Design Lab%5$s, '.
				'who shares them under the [CC-BY] license on %4$sFind Icons%5$s.',
			'rpbchessboard'),
			'<em>',
			'</em>',
			'<a href="http://momentumdesignlab.com/" target="_blank">',
			'<a href="http://findicons.com/pack/2226/matte_basic" target="_blank">',
			'</a>');
		?>
	</p>
	<p>
		<?php _e('The author would like to thank all these people for their highly valuable work.', 'rpbchessboard'); ?>
	</p>


	<h3><?php _e('License', 'rpbchessboard'); ?></h3>
	<p>
		<?php echo sprintf(
			__(
				'This plugin is distributed under the terms of the %1$sGNU General Public License version 3%3$s (GPLv3), '.
				'as published by the %2$sFree Software Foundation%3$s. The full text of this license '.
				'is available at %4$s. A copy of this document is also provided with the plugin source code.',
			'rpbchessboard'),
			'<a href="http://www.gnu.org/licenses/gpl.html" target="_blank">',
			'<a href="http://www.fsf.org/" target="_blank">',
			'</a>',
			'<a href="http://www.gnu.org/licenses/gpl.html" target="_blank">http://www.gnu.org/licenses/gpl.html</a>');
		?>
	</p>
	<p>
		<?php _e(
			'This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; '.
			'without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. '.
			'See the GNU General Public License for more details.',
			'rpbchessboard');
		?>
	</p>

</div>
