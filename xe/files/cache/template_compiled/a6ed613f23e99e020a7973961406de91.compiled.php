<?php if(!defined("__XE__"))exit;?>			<aside class="span<?php echo $__Context->li->sb_width ?> hidden-phone" id="sb">
				<?php if($__Context->li->custom_sidebar_top=='yes'){;
} ?>
				<?php if($__Context->main_menu->list&&count($__Context->main_menu->list))foreach($__Context->main_menu->list as $__Context->key1=>$__Context->val1){;
if($__Context->val1['selected'] && $__Context->val1['list']){ ?><ul class="well nav nav-list ac">
					<?php if($__Context->val1['selected']){ ?><li class="nav-header"><?php echo $__Context->val1['link'] ?></li><?php } ?>
						<?php if($__Context->val1['list']&&count($__Context->val1['list']))foreach($__Context->val1['list'] as $__Context->key2=>$__Context->val2){ ?>
							<?php if($__Context->val2['link']!="----"){ ?>
								<li<?php if($__Context->val2['selected']){ ?> class="active"<?php } ?>>
									<a href="<?php echo $__Context->val2['href'] ?>"<?php if($__Context->val2['open_window']=='Y'){ ?> target="_blank"<?php } ?>><?php echo $__Context->val2['link'] ?></a>
									<?php if($__Context->val2['list']){ ?><ul class="nav nav-list">
										<?php if($__Context->val2['list']&&count($__Context->val2['list']))foreach($__Context->val2['list'] as $__Context->key3=>$__Context->val3){;
if($__Context->val3['link']){ ?>
											<?php if($__Context->val3['link']!="----"){ ?>
												<li<?php if($__Context->val3['selected']){ ?> class="active"<?php } ?>>
													<a href="<?php echo $__Context->val3['href'] ?>"<?php if($__Context->val3['open_window']=='Y'){ ?> target="_blank"<?php } ?>><?php echo $__Context->val3['link'] ?></a>
													<?php if($__Context->val3['list']){ ?><ul class="nav nav-list">
														<?php if($__Context->val3['list']&&count($__Context->val3['list']))foreach($__Context->val3['list'] as $__Context->key4=>$__Context->val4){;
if($__Context->val4['link']){ ?>
															<?php if($__Context->val4['link']!="----"){ ?>
																<li<?php if($__Context->val4['selected']){ ?> class="active"<?php } ?>><a href="<?php echo $__Context->val4['href'] ?>"<?php if($__Context->val4['open_window']=='Y'){ ?> target="_blank"<?php } ?>><?php echo $__Context->val4['link'] ?></a></li>
															<?php }else{ ?>
																<li class="divider"></li>
															<?php } ?>
														<?php }} ?>
													</ul><?php } ?>
												</li>
											<?php }else{ ?>
												<li class="divider"></li>
											<?php } ?>
										<?php }} ?>					
									</ul><?php } ?>
								</li>
							<?php }else{ ?>
								<li class="divider"></li>
							<?php } ?>
						<?php } ?>
				</ul><?php }} ?>
				<?php if($__Context->li->sb_category!='no' && $__Context->module_info->use_category=='Y'){ ?>
					<?php  $__Context->pDepth = 0; ?>
					<ul class="well nav nav-list ac">
						<li class="nav-header"><?php if($__Context->li->sb_header_icon!='no'){ ?><i class="icon-list-ul"></i><?php } ?> Category</li>
						<?php if($__Context->category_list&&count($__Context->category_list))foreach($__Context->category_list as $__Context->key=>$__Context->val){ ?>
							<?php if($__Context->pDepth > $__Context->val->depth){ ?>
								<?php for($__Context->i=$__Context->val->depth; $__Context->i<$__Context->pDepth; $__Context->i++){ ?>
									</ul>
									</li>
								<?php } ?>
								<?php  $__Context->pDepth = $__Context->val->depth ?>
							<?php } ?>
							<li<?php if($__Context->category==$__Context->val->category_srl){ ?> class="active"<?php } ?>>
								<a href="<?php echo getUrl('category',$__Context->val->category_srl) ?>" class="<?php if($__Context->layout_info->frame=='fluid2'){ ?>tooltip-left<?php }else{ ?>tooltip-right<?php } ?>" data-title="<?php echo $__Context->val->document_count ?>"><?php echo $__Context->val->text ?></a>
							<?php if($__Context->val->child_count){ ?>
								<?php $__Context->pDepth++ ?>
								<ul class="nav nav-list">
							<?php } ?>
							<?php if(!$__Context->val->child_count){ ?>
								</li>
							<?php } ?>
						<?php } ?>
						<?php for($__Context->i=0;$__Context->i<$__Context->pDepth;$__Context->i++){ ?>
							</ul>
						<?php } ?>
							</li>
						</ul>
				<?php } ?>
				<?php if($__Context->li->sb_recent_doc!='no'){ ?><div class="well sb_recent_doc ac">
					<img class="zbxe_widget_output" widget="content" skin="tb_sb" content_type="document" module_srls="<?php echo $__Context->li->sb_recent_doc_module ?>" list_type="normal" markup_type="list" page_count="1" option_view="title,nickname" show_comment_count="Y" show_trackback_count="Y" order_type="desc" subject_cut_size="<?php echo 9*$__Context->li->sb_width ?>" list_count="5" />
				</div><?php } ?>
				<?php if($__Context->li->sb_recent_comm!='no'){ ?><div class="well sb_recent_comm ac">
					<img class="zbxe_widget_output" widget="content" skin="tb_sb" content_type="comment" module_srls="<?php echo $__Context->li->sb_recent_doc_module ?>" list_type="normal" markup_type="list" page_count="1" option_view="title,nickname" show_comment_count="Y" show_trackback_count="Y" order_type="desc" subject_cut_size="<?php echo 9*$__Context->li->sb_width ?>" list_count="5" />
				</div><?php } ?>
				<script type="text/javascript">
					jQuery("aside#sb .sb_recent_doc ul.nav-list").prepend("<li class='nav-header'><?php if($__Context->li->sb_header_icon!='no'){ ?><i class='icon-rss'></i><?php } ?>Recent Posts</li>");
					jQuery("aside#sb .sb_recent_comm ul.nav-list").prepend("<li class='nav-header'><?php if($__Context->li->sb_header_icon!='no'){ ?><i class='icon-comments'></i><?php } ?>Recent Comments</li>");
				</script>
				<?php if($__Context->li->sb1){ ?><div class="well sb1"><?php echo $__Context->li->sb1 ?></div><?php } ?>
				<?php if($__Context->li->sb2){ ?><div class="well sb2"><?php echo $__Context->li->sb2 ?></div><?php } ?>
				<?php if($__Context->li->sb3){ ?><div class="well sb3"><?php echo $__Context->li->sb3 ?></div><?php } ?>
				<?php if($__Context->li->custom_sidebar_bottom=='yes'){;
} ?>
			</aside>