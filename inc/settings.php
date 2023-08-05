<?php
/**
 * @internal never define functions inside callbacks.
 * these functions could be run multiple times; this would result in a fatal error.
 */

/**
 * custom option and settings
 */
function bookshelf_settings_init() {
	// Register a new setting for "bookshelf" page.
	register_setting( 'bookshelf', 'bookshelf_options' );

	// Register a new section in the "bookshelf" page.
	add_settings_section(
		'bookshelf_section_developers',		__( 'bookshelf setting', 'bookshelf' ), 'bookshelf_section_developers_callback',		'bookshelf'
	);

	// Register a new field in the "bookshelf_section_developers" section, inside the "bookshelf" page.
	add_settings_field(
		'bookshelf_field_pdf_allow', __( 'Allow pdf upload / download', 'bookshelf' ),  'bookshelf_field_allow_pdf', 'bookshelf' ,'bookshelf_section_developers');

    add_settings_field(
		'bookshelf_field_theme_color', __( 'Plugin Color Hex Code' ),  'bookshelf_field_theme_color', 'bookshelf' ,'bookshelf_section_developers');

}

/**
 * Register our bookshelf_settings_init to the admin_init action hook.
 */
add_action( 'admin_init', 'bookshelf_settings_init' );


/**
 * Custom option and settings:
 *  - callback functions
 */


/**
 * Developers section callback function.
 *
 * @param array $args  The settings array, defining title, id, callback.
 */
function bookshelf_section_developers_callback( $args ) {
	?>
	<p id="<?php echo esc_attr( $args['id'] ); ?>"><?php esc_html_e( 'Follow the readme instruction.', 'bookshelf' ); ?></p>
	<?php
}

/**
 * Pill field callbakc function.
 *
 * WordPress has magic interaction with the following keys: label_for, class.
 * - the "label_for" key value is used for the "for" attribute of the <label>.
 * - the "class" key value is used for the "class" attribute of the <tr> containing the field.
 * Note: you can add custom key value pairs to be used inside your callbacks.
 *
 * @param array $args
 */
function bookshelf_field_allow_pdf(  ) {
	// Get the value of the setting we've registered with register_setting()
	$options = get_option( 'bookshelf_options' );
 	?>
	<select id="allow_pdf" name="bookshelf_options[allow_pdf]">
		<option value="allow" <?php echo isset( $options['allow_pdf' ] ) ? ( selected( $options[ 'allow_pdf' ], 'allow', false ) ) : ( '' ); ?>>
			<?php esc_html_e( 'allow', 'bookshelf' ); ?>
		</option>
 		<option value="prevent" <?php echo isset( $options[ 'allow_pdf'] ) ? ( selected( $options[ 'allow_pdf' ], 'prevent', false ) ) : ( '' ); ?>>
			<?php esc_html_e( 'prevent', 'bookshelf' ); ?>
		</option>
	</select>
	 
	<?php
}

function bookshelf_field_theme_color(  ) {
	// Get the value of the setting we've registered with register_setting()
	$options = get_option( 'bookshelf_options' );
 	?>
    #<input type="text" id="theme_color" max="6"  min="6"  name="bookshelf_options[theme_color]" value="<?php echo isset( $options['theme_color' ] ) ? $options[ 'theme_color' ] : ( '' ); ?>">
	<?php
}

/**
 * Add the top level menu page.
 */
function bookshelf_options_page() {
	add_menu_page(
		'bookshelf',
		'bookshelf Options',
		'manage_options',
		'bookshelf',
		'bookshelf_options_page_html'
	);
	add_submenu_page( 'bookshelf', 'bookshelf Demo', 'bookshelf Demo', 'manage_options', 'bookshelf_demo', 'bookshelf_demo');

}


/**
 * Register our bookshelf_options_page to the admin_menu action hook.
 */
add_action( 'admin_menu', 'bookshelf_options_page' );


/**
 * Top level menu callback function
 */
function bookshelf_options_page_html() {
	// check user capabilities
	if ( ! current_user_can( 'manage_options' ) ) {
		return;
	}

	// add error/update messages

	// check if the user have submitted the settings
	// WordPress will add the "settings-updated" $_GET parameter to the url
	if ( isset( $_GET['settings-updated'] ) ) {
		// add settings saved message with the class of "updated"
		add_settings_error( 'bookshelf_messages', 'bookshelf_message', __( 'Settings Saved', 'bookshelf' ), 'updated' );
	}

	// show error/update messages
	settings_errors( 'bookshelf_messages' );
	?>
	<div class="wrap">
		<h1><?php echo esc_html( get_admin_page_title() ); ?></h1>
		<form action="options.php" method="post">
			<?php
			// output security fields for the registered setting "bookshelf"
			settings_fields( 'bookshelf' );
			// output setting sections and their fields
			// (sections are registered for "bookshelf", each field is registered to a specific section)
			do_settings_sections( 'bookshelf' );
			// output save settings button
			submit_button( 'Save Settings' );
			?>
		</form>
	</div>
	<?php
}


// create shelf pages
function add_my_custom_pages() {
    // Create post object
	error_log(post_exists("All Books"));
	if ( post_exists("All Books") == 0){
		$my_post = array(
			'post_title'    => "All Books",
			'post_content'  => '[shelf_books]',
			'post_status'   => 'publish',
			'post_author'   => 1,
			'post_type'     => 'page',
		  );
	  
		  // Insert the post into the database
		  $post_id = wp_insert_post( $my_post );
		
	}
    if ( post_exists("Books Collections") == 0){
	$my_post = array(
      'post_title'    => "Books Collections",
      'post_content'  => '[shelf_collections]',
      'post_status'   => 'publish',
      'post_author'   => 1,
      'post_type'     => 'page',
    );
	$post_id = wp_insert_post( $my_post );
}
    if ( post_exists("My Shelf") == 0){
    // Insert the post into the database
    
	$my_post = array(
      'post_title'    => "My Shelf",
      'post_content'  => '[shelf_my_shelf]',
      'post_status'   => 'publish',
      'post_author'   => 1,
      'post_type'     => 'page',
    );

    // Insert the post into the database
    $post_id = wp_insert_post( $my_post );
	} 
}


// creat custom post type "shelf_book"
// Our custom post type function
function create_posttype() {
  
    register_post_type( 'shelf_book',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'shelf books' ),
                'singular_name' => __( 'shelf book' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'shelf_book'),
            'show_in_rest' => true,
  
        )
    );
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );


function bookshelf_demo(){
	?><h3>Add Demo Content</h3>
	<form method="post" action="<?php echo esc_html( admin_url( 'admin-post.php' ) ); ?>">
		<div id="universal-message-container">
			<h2>Universal Message</h2>
			<div class="options">
				<p>
				<input type="hidden" name="action" value="book_shelf_import_data" />
					<label>click Import Demo Data to import 30 user , 300 book , 50 collection , 1000 wishlisted  </label>
					<br />
					 
				</p>
		</div><!-- #universal-message-container -->
		<?php 
wp_nonce_field( 'acme-settings-save', 'acme-custom-message' ); 
submit_button('Import Demo Data'); 
?>
	</form>
	<?php
}

add_action( 'admin_post_book_shelf_import_data', 'book_shelf_import_data_admin_action' );
 
function book_shelf_import_data_admin_action()
{
    // Do your stuff here
	if ( isset($_POST['action'])  && $_POST['action'] =='book_shelf_import_data')
	{
		 
		include BookShelf_PLUGIN_FILE.'/inc/demo_content.php';
		add_demo_content();

		wp_redirect( $_SERVER['HTTP_REFERER'] .'&v=1234');
		exit();
    
	}
	

}