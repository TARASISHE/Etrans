<?php
$menu_items;
$lang = pll_current_language(); 
if($lang == 'ru'){
	$menu_items = wp_get_nav_menu_items('Menu 1');
}else if($lang == 'uk'){
	$menu_items = wp_get_nav_menu_items('Menu 1 (укр)');
};
			if( $menu_items ) { 
				$menu_list = '';
				$child_tax = '';
				$sub_menu = '';
				$sub_menu_terms = '';
				foreach ( (array) $menu_items as $key => $menu_item ) {
					
					$childrens = get_children( [////// get all parent tax terms
						'post_parent' => $menu_item->id,
						'post_type'   => 'services-cat', 
						'numberposts' => -1,
						'post_status' => 'any'
					] );
					$title = $menu_item->title;
					$url = $menu_item->url; 
                    if($menu_item->menu_item_parent == 0){////// if dont have menu child
                        
                        if($menu_item->object_id == 20 or $menu_item->object_id == 225){
                            $menu_list .= '<li class="menu-toggle-item-top" id="menu-item-services"><a href="' . $url . '">' . $title . '</a></li>';
                        }else{
                            $menu_list .= '<li id="menu-item-'.$menu_item->object_id.'"><a href="' . $url . '">' . $title . '</a></li>';
                        }
                        	
					}else{///if have menu child
						if($menu_item->object_id == 8){

						};
              $tax_terms = get_terms(array(//// get all sub terms category
							'taxonomy' => 'services-cat', 
							'child_of' => $menu_item->object_id,
              "number" => 8,
						));
						
						if(!empty($tax_terms)){
							
							foreach($tax_terms as $term){
								
								$sub_terms_args = array(
									'post_type' => 'services',
									"nopaging" => true,
                  "posts_per_page" => 8,
									'post_status' => 'publish',
									'tax_query' => array(
										array(
											'taxonomy'=> 'services-cat',
										'field'    => 'id',
										'terms'    =>  $term->term_id,
										)
									)
								);
								$sub_terms = new WP_Query($sub_terms_args);//// get all sub terms post
								if($sub_terms->have_posts()){
									while($sub_terms->have_posts()){
										$sub_terms->the_post();
										$sub_menu_terms .= '<li id="term-'.$sub_terms->id.'"><a href="' . get_the_permalink() . '">' . get_the_title() . '</a></li>';
									}
								};
								
								$sub_menu .= '<li class="sub-menu-item  menu-toggle-item-bottom" id="sub-menu-item-'.$term->term_id.'">' . $term->name.'<ul class="sub-menu-terms">'.$sub_menu_terms .'</ul><i class="fas fa-sort-down"></i></li>';
								$sub_menu_terms = '';
							}
						}
						/////terms for cities
						$city_terms;

						$menu_item_id = pll_current_language() == 'ru' ? 8 :77;

				if($menu_item->object_id == $menu_item_id){
							$sub_menu;

							$sub_terms_args = array(
								'post_type' => 'services',
								"posts_per_page" => 8,
								'post_status' => 'publish',
								'tax_query' => array(
									array(
										'taxonomy'=> 'services-cat',
									'field'    => 'id',
									'terms'    =>  8
									)
								)
							);
							$sub_terms = new WP_Query($sub_terms_args);
							if($sub_terms->have_posts()){
								while($sub_terms->have_posts()){
									$sub_terms->the_post();
									$sub_menu .= '<li id="term-'.$sub_terms->id.'"><a href="' . get_the_permalink() . '">' . get_the_title() . '</a></li>';
								}
							};
						}

						//////////
						$child_tax .= '<li class="menu-toggle-item-midd" id="tax-item-'.$menu_item->object_id.'">
						'.$title .'
						 <ul class="sub-menu">'.
					 $sub_menu

						.'</ul>
						</li>';
						$sub_menu = '';					
					}
				}
				
				?>
<ul class='menu-nav-list'>
<?php echo $menu_list;?>
</ul>
<ul id='menu-tax-list' class='menu-tax-list'>
<?php echo $child_tax;?>
</ul>
				<?php
			}
?>