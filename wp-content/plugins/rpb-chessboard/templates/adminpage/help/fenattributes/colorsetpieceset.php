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

<h3 id="rpbchessboard-fenAttributeColorsetPieceset"><?php _e('Colorset and pieceset', 'rpbchessboard'); ?></h3>

<div id="rpbchessboard-fenAttributeColorsetPieceset-content" class="rpbchessboard-columns">
	<div>

		<p>
			<?php echo sprintf(__('The %1$s and %2$s attributes controls respectively the colors of the chessboard and the piece theme.', 'rpbchessboard'),
				'<span class="rpbchessboard-sourceCode">colorset</span>', '<span class="rpbchessboard-sourceCode">pieceset</span>'); ?>
		</p>

		<p>
			<label for="rpbchessboard-fenAttributeColorset-field"><?php _e('Colorset:', 'rpbchessboard'); ?></label>
			<select id="rpbchessboard-fenAttributeColorset-field">
				<?php foreach($model->getAvailableColorsets() as $colorset => $label): ?>
					<option value="<?php echo htmlspecialchars($colorset); ?>">
						<?php echo htmlspecialchars($label); ?>
					</option>
				<?php endforeach; ?>
			</select>
		</p>

		<p>
			<label for="rpbchessboard-fenAttributePieceset-field"><?php _e('Pieceset:', 'rpbchessboard'); ?></label>
			<select id="rpbchessboard-fenAttributePieceset-field">
				<?php foreach($model->getAvailablePiecesets() as $pieceset => $label): ?>
					<option value="<?php echo htmlspecialchars($pieceset); ?>">
						<?php echo htmlspecialchars($label); ?>
					</option>
				<?php endforeach; ?>
			</select>
		</p>

	</div>
	<div>

		<div class="rpbchessboard-sourceCode">
			<?php echo sprintf(
				'[%1$s <strong>colorset=<span id="rpbchessboard-fenAttributeColorset-sourceCodeExample">default</span></strong> ' .
				'<strong>pieceset=<span id="rpbchessboard-fenAttributePieceset-sourceCodeExample">cburnett</span></strong>] ... [/%1$s]',
				htmlspecialchars($model->getFENShortcode())
			); ?>
		</div>

		<div class="rpbchessboard-visuBlock">
			<div>
				<div id="rpbchessboard-fenAttributeColorsetPieceset-anchor"></div>
				<script type="text/javascript">
					jQuery(document).ready(function($) {
						$('#rpbchessboard-fenAttributeColorsetPieceset-anchor').chessboard({ position: 'start', squareSize: 48, showCoordinates: true });
						$('#rpbchessboard-fenAttributeColorset-field').val($('#rpbchessboard-fenAttributeColorset-sourceCodeExample').text());
						$('#rpbchessboard-fenAttributePieceset-field').val($('#rpbchessboard-fenAttributePieceset-sourceCodeExample').text());
						$('#rpbchessboard-fenAttributeColorset-field').change(function() {
							var value = $(this).val();
							$('#rpbchessboard-fenAttributeColorsetPieceset-anchor').chessboard('option', 'colorset', value);
							$('#rpbchessboard-fenAttributeColorset-sourceCodeExample').text(value);
						});
						$('#rpbchessboard-fenAttributePieceset-field').change(function() {
							var value = $(this).val();
							$('#rpbchessboard-fenAttributeColorsetPieceset-anchor').chessboard('option', 'pieceset', value);
							$('#rpbchessboard-fenAttributePieceset-sourceCodeExample').text(value);
						});
					});
				</script>
			</div>
		</div>

	</div>
</div>
