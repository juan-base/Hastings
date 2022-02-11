<?php

add_theme_support( 'title-tag' );

global $isMobile;

class hastings_theme_cls {

    function __construct() {
      add_action('init', array($this,'global_actions'));
      add_action('template_redirect', array($this,'front_actions'));
			add_theme_support('post-thumbnails'); 
      //add_action('admin_head', array($this,'admin_head'));
    }

    function global_actions() {
      $this->create_page_types();
      $this->isMobile();
      $this->image_sizes();
    }

//  CUSTOM POST TYPES START ====================================================
		function modify_post_query($wp_query) {
			$wp_query->query_vars['posts_per_page'] = 500;
			return $wp_query;
		}

    function create_page_types() {
			add_filter('pre_get_posts', array($this, 'modify_post_query'));

			register_post_type('practice',       //ARTICLES
				array(
					'rewrite' => array('slug' => 'article'),
					'labels' => array(
							'name' => __('Articles'),
							'singular_name' => __('Article'),
							'add_new_item'  => 'Add New Article / Job Listing',
							'add_new' => 'Add New Article / Job Listing',
							
					),
					'public' => true,
					'show_in_rest' => true,
					'has_archive' => true,
					'menu_position' => 51,
					'supports' => array('title', 'taxonomies', 'revisions', 'thumbnail'),
				)
			);

			register_post_type('portfolio',      //PORTFOLIO
				array(
					'rewrite' => array('slug' => 'project'),
					'labels' => array(
							'name' => __('Portfolio'),
							'singular_name' => __('Portfolio'),
							'add_new' => 'Add New Project',
							'add_new_item'  => 'Add New Project',
							'edit_item' => 'Edit Project'
					),
					'public' => true,
					'show_in_rest' => true,
					'has_archive' => true,
					'menu_position' => 50,
					'supports' => array('title', 'taxonomies', 'revisions', 'thumbnail'),

				)
			);

			register_post_type('bio',         //TEAM MEMBERS
				array(
					'labels' => array(
							'name' => __('Team Members'),
							'singular_name' => __('Team Member'),
							'add_new_item'  => 'Add New Team Member',
							'edit_item' => 'Edit Team Member'
					),
					'public' => true,
					'show_in_rest' => true,
					'has_archive' => true,
					'menu_position' => 52,
					'supports' => array('title', 'taxonomies', 'revisions', 'thumbnail'),
				)
			);
        
        
//    CUSTOM POST TYPES END====================================================

			$bio_credential_labels = array(
				'name'              => _x( 'Credentials', 'taxonomy general name' ),
				'singular_name'     => _x( 'Credential', 'taxonomy singular name' ),
				'search_items'      => __( 'Search Page Leads Categories' ),
				'all_items'         => __( 'All Credentials' ),
				'parent_item'       => __( 'Parent Credential' ),
				'parent_item_colon' => __( 'Parent Credential:' ),
				'edit_item'         => __( 'Edit Credential' ), 
				'update_item'       => __( 'Update Credential' ),
				'add_new_item'      => __( 'Add New Credential' ),
				'new_item_name'     => __( 'New Credential' ),
				'menu_name'         => __( 'Credential' ),
			);
			$bio_credential_args = array(
				'labels' => $bio_credential_labels,
				'show_in_rest' => true,
				'hierarchical' => true,
			);
			register_taxonomy('bio_credentials', 'bio', $bio_credential_args);

			$project_tags_labels = array(
				'name'              => _x( 'Project Tags', 'taxonomy general name' ),
				'singular_name'     => _x( 'Project Tag', 'taxonomy singular name' ),
				'search_items'      => __( 'Search Project Tags' ),
				'all_items'         => __( 'All Project Tags' ),
				'parent_item'       => __( 'Parent Project Tag' ),
				'parent_item_colon' => __( 'Parent Project Tag:' ),
				'edit_item'         => __( 'Edit Project Tag' ), 
				'update_item'       => __( 'Update Project Tag' ),
				'add_new_item'      => __( 'Add New Project Tag' ),
				'new_item_name'     => __( 'New Project Tag' ),
				'menu_name'         => __( 'Project Tags' ),
			);
			$project_tags_args = array(
				'labels' => $project_tags_labels,
				'show_in_rest' => true,
				'hierarchical' => true,
				//"rewrite"      => array('slug' => 'portfolio_tag'),
			);
			register_taxonomy('project_tags', 'portfolio', $project_tags_args);

			$article_tags_labels = array(
				'name'              => _x( 'Practice Tags', 'taxonomy general name' ),
				'singular_name'     => _x( 'Practice Tag', 'taxonomy singular name' ),
				'search_items'      => __( 'Search Practice Tags' ),
				'all_items'         => __( 'All Practice Tags' ),
				'parent_item'       => __( 'Parent Practice Tags' ),
				'parent_item_colon' => __( 'Parent Practice Tag:' ),
				'edit_item'         => __( 'Edit Practice Tag' ), 
				'update_item'       => __( 'Update Practice Tag' ),
				'add_new_item'      => __( 'Add New Practice Tag' ),
				'new_item_name'     => __( 'New Practice Tag' ),
				'menu_name'         => __( 'Practice Tags' ),
			);
			$article_tags_args = array(
				'labels' => $article_tags_labels,
				'show_in_rest' => true,
				'hierarchical' => true,
			);
			register_taxonomy('article_tags', array('practice','bio'), $article_tags_args);

			$article_cats_labels = array(
				'name'              => _x( 'Article Categories', 'taxonomy general name' ),
				'singular_name'     => _x( 'Article Category', 'taxonomy singular name' ),
				'search_items'      => __( 'Search Article Categories' ),
				'all_items'         => __( 'All Article Categories' ),
				'parent_item'       => __( 'Parent Article Category' ),
				'parent_item_colon' => __( 'Parent Article Category:' ),
				'edit_item'         => __( 'Edit Article Category' ), 
				'update_item'       => __( 'Update Article Category' ),
				'add_new_item'      => __( 'Add New Article Category' ),
				'new_item_name'     => __( 'New Article Category' ),
				'menu_name'         => __( 'Article Categories' ),
			);
			$article_cats_args = array(
				'labels' => $article_cats_labels,
				'show_in_rest' => true,
				'hierarchical' => true,
			);
			//register_taxonomy('article_cats', array('practice','bio'), $article_cats_args);
		
    }

    function image_sizes() {
			
			add_image_size('mobile_poster', 320);
			add_image_size('mobile_inside', 640);

			add_image_size('desktop_single', 600);
			add_image_size('desktop_double', 1200);
			add_image_size('desktop_full', 1800);

    }

    function remove_admin_login_header() {
        add_filter('show_admin_bar', '__return_false');
        wp_deregister_style('dashicons');
        wp_deregister_style('admin-bar');
        remove_action('wp_head', '_admin_bar_bump_cb');
    }

    function front_actions() {
      global $post;

      add_action('wp_head', array($this,'wp_head'), 0);
      add_action('get_header', array($this,'remove_admin_login_header'));

      //wp_enqueue_style('bxslider', get_template_directory_uri() . "/js/bxslider/jquery.bxslider.css");
      /*
      wp_deregister_script('jquery');
      wp_enqueue_script('jquery', get_template_directory_uri() . "/js/jquery-1.10.2.min.js");
      */
    
    }

    function isMobile() {
      global $isMobile;
      $isMobile = (isset($_GET['isMobile']) && (int)$_GET['isMobile']==1) ? true : false;
			//print "HTTP_USER_AGENT :: " . $_SERVER['HTTP_USER_AGENT'];
      if (!$isMobile) {
          $HTTP_USER_AGENT = strtolower($_SERVER['HTTP_USER_AGENT']);
          $INCLUDES = array('iphone','ipod','ipad','android','wp7','symbianos','blackberry','sonyericsson','nokia','samsung','lg ','tablet');
          //$INCLUDES = array('iphone','ipod','android','wp7','symbianos','blackberry','sonyericsson','nokia','samsung','lg ');
          //$EXCLUDES = array('tablet');
          foreach($INCLUDES as $I=>$device) if (strpos($HTTP_USER_AGENT,$device) !== FALSE) $isMobile = true;
          foreach($EXCLUDES as $I=>$device) if (strpos($HTTP_USER_AGENT,$device) !== FALSE) $isMobile = false;
      }
			return $isMobile;
    }

    function get_bio_credentials($post, $split) {
        $terms = get_the_terms($post->ID,  'bio_credentials');
        $credentials = [];
        $sub_name = [];

        if( $terms ){ 
            foreach( $terms as $term ){
                $credentials[] = $term->name;
            }
        }

        $position = get_field('position', $post->ID);
        if ($position) {
          $sub_name[] = $position;
        }
        $sub_name[] = implode(", ", $credentials);
        
        
        if (!empty($credentials)){
            print implode($split ? "<br>" : ", ", $sub_name);
        } else {
			print implode($sub_name);
		}

    }

    function yoastVariableToTitle($post_id) {
        // https://stackoverflow.com/questions/41361510/is-there-any-way-to-get-yoast-title-inside-page-using-their-variable-i-e-ti

        $yoast_title = get_post_meta($post_id, '_yoast_wpseo_title', true);
        $title = strstr($yoast_title, '%%', true);
        if (empty($title)) {
            $title = get_the_title($post_id);
        }
        $wpseo_titles = get_option('wpseo_titles');

        $sep_options = WPSEO_Option_Titles::get_instance()->get_separator_options();
        if (isset($wpseo_titles['separator']) && isset($sep_options[$wpseo_titles['separator']])) {
            $sep = $sep_options[$wpseo_titles['separator']];
        } else {
            $sep = '-'; //setting default separator if Admin didn't set it from backed
        }

        $site_title = get_bloginfo('name');

        $meta_title = $title . ' ' . $sep . ' ' . $site_title;

        return $meta_title;
    }

    /* Post URLs to IDs function, supports custom post types - borrowed and modified from url_to_postid() in wp-includes/rewrite.php */
    function bwp_url_to_postid($url)
    {
      global $wp_rewrite;

      $url = apply_filters('url_to_postid', $url);

      // First, check to see if there is a 'p=N' or 'page_id=N' to match against
      if ( preg_match('#[?&](p|page_id|attachment_id)=(\d+)#', $url, $values) )	{
        $id = absint($values[2]);
        if ( $id )
          return $id;
      }

      // Check to see if we are using rewrite rules
      $rewrite = $wp_rewrite->wp_rewrite_rules();

      // Not using rewrite rules, and 'p=N' and 'page_id=N' methods failed, so we're out of options
      if ( empty($rewrite) )
        return 0;

      // Get rid of the #anchor
      $url_split = explode('#', $url);
      $url = $url_split[0];

      // Get rid of URL ?query=string
      $url_split = explode('?', $url);
      $url = $url_split[0];

      // Add 'www.' if it is absent and should be there
      if ( false !== strpos(home_url(), '://www.') && false === strpos($url, '://www.') )
        $url = str_replace('://', '://www.', $url);

      // Strip 'www.' if it is present and shouldn't be
      if ( false === strpos(home_url(), '://www.') )
        $url = str_replace('://www.', '://', $url);

      // Strip 'index.php/' if we're not using path info permalinks
      if ( !$wp_rewrite->using_index_permalinks() )
        $url = str_replace('index.php/', '', $url);

      if ( false !== strpos($url, home_url()) ) {
        // Chop off http://domain.com
        $url = str_replace(home_url(), '', $url);
      } else {
        // Chop off /path/to/blog
        $home_path = parse_url(home_url());
        $home_path = isset( $home_path['path'] ) ? $home_path['path'] : '' ;
        $url = str_replace($home_path, '', $url);
      }

      // Trim leading and lagging slashes
      $url = trim($url, '/');

      $request = $url;
      // Look for matches.
      $request_match = $request;
      foreach ( (array)$rewrite as $match => $query) {
        // If the requesting file is the anchor of the match, prepend it
        // to the path info.
        if ( !empty($url) && ($url != $request) && (strpos($match, $url) === 0) )
          $request_match = $url . '/' . $request;

        if ( preg_match("!^$match!", $request_match, $matches) ) {
          // Got a match.
          // Trim the query of everything up to the '?'.
          $query = preg_replace("!^.+\?!", '', $query);

          // Substitute the substring matches into the query.
          $query = addslashes(WP_MatchesMapRegex::apply($query, $matches));

          // Filter out non-public query vars
          global $wp;
          parse_str($query, $query_vars);
          $query = array();
          foreach ( (array) $query_vars as $key => $value ) {
            if ( in_array($key, $wp->public_query_vars) )
              $query[$key] = $value;
          }

        // Taken from class-wp.php
        foreach ( $GLOBALS['wp_post_types'] as $post_type => $t )
          if ( $t->query_var )
            $post_type_query_vars[$t->query_var] = $post_type;

        foreach ( $wp->public_query_vars as $wpvar ) {
          if ( isset( $wp->extra_query_vars[$wpvar] ) )
            $query[$wpvar] = $wp->extra_query_vars[$wpvar];
          elseif ( isset( $_POST[$wpvar] ) )
            $query[$wpvar] = $_POST[$wpvar];
          elseif ( isset( $_GET[$wpvar] ) )
            $query[$wpvar] = $_GET[$wpvar];
          elseif ( isset( $query_vars[$wpvar] ) )
            $query[$wpvar] = $query_vars[$wpvar];

          if ( !empty( $query[$wpvar] ) ) {
            if ( ! is_array( $query[$wpvar] ) ) {
              $query[$wpvar] = (string) $query[$wpvar];
            } else {
              foreach ( $query[$wpvar] as $vkey => $v ) {
                if ( !is_object( $v ) ) {
                  $query[$wpvar][$vkey] = (string) $v;
                }
              }
            }

            if ( isset($post_type_query_vars[$wpvar] ) ) {
              $query['post_type'] = $post_type_query_vars[$wpvar];
              $query['name'] = $query[$wpvar];
            }
          }
        }

          // Do the query
          $query = new WP_Query($query);
          if ( !empty($query->posts) && $query->is_singular )
            return $query->post->ID;
          else
            return 0;
        }
      }
      return 0;
    }

    function getInitRoute() {
      global $post;
      $type = $post->post_type;

			//$post_type = get_post_type();
			//print "post_type: " . $post_type. " - ".$type." - ";

      if (is_front_page()) {
        $type = "home";
      } else if ($type=="page") {
        $type = get_field("page");
      } else {
				
			}

      return $type;
    }
}


add_filter( 'wp_image_editors', 'change_graphic_lib' );

function change_graphic_lib($array) {
  return array( 'WP_Image_Editor_GD', 'WP_Image_Editor_Imagick' );
}


global $hastings;
$hastings = new hastings_theme_cls();