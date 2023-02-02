<div id="kboard-evan-default-latest">
	<table>
		<tbody>
			<?php while($content = $list->hasNext()):?>
			<tr>
				<td class="kboard-latest-title">
					<a href="<?php echo $url->getDocumentURLWithUID($content->uid)?>">
						<div class="kboard-evan-default-cut-strings">
							<?php echo $content->title?>
							<?php if($content->isNew()):?><span class="kboard-evan-default-new-notify">N</span><?php endif?>
							<?php if($content->secret):?><img src="<?php echo $skin_path?>/images/icon-lock.png" alt="<?php echo __('Secret', 'kboard')?>"><?php endif?>
							<span class="kboard-comments-count"><?php echo $content->getCommentsCount()?></span>
						</div>
					</a>
				</td>
				<td class="kboard-latest-date"><?php echo $content->getDate()?></td>
			</tr>
			<?php endwhile?>
		</tbody>
	</table>
</div>