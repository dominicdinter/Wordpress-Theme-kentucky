<?php
/**
 * The template for displaying search forms in Kentucky
 *
 * @package Kentucky
 */
?>
		<form role="search" method="get" class="input-group" action="<?php echo esc_url( home_url( '/' ) ); ?>">
			<input type="text" class="search-field form-control" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'kentucky' ); ?>" value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="<?php _ex( 'Search for:', 'label', 'kentucky' ); ?>">
			<span class="input-group-btn">
				<button class="btn btn-default" type="submit"><?php echo esc_attr_x( 'Search', 'submit button', 'kentucky' ); ?></button>
			</span>
		</form>
