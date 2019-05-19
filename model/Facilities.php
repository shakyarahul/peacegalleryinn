<?php 
class BB_Facilities{
    public function __construct(){
        $this->register_post_type();
        $this->taxonomies();
        //$this->metaboxes();
    }
    public function taxonomies(){
        $taxonomies = array();
        $taxonomies['metatag'] = array(
            'labels' => array(
                'name'=> 'Meta Tags',
                'singular_name'=> 'Meta Tag',
                'edit_item'=> 'Edit Meta Tag',
                'update_item'=> 'Update Meta Tag',
                'add_new_item'=> 'Add Meta Tag',
                'new_item_name'=> 'Add New Meta Tag',
                'all_items'=> 'All Meta Tag',
                'search_items'=> 'Search Meta Tags',
                'popular_items'=> 'Popular Meta Tags',
                'seperate_items_with_comments'=> 'Seperate Meta Tags with commas',
                'add_or_remove_items'=> 'Add or remove Meta Tags',
                'choose_from_most_used'=> 'Choose from most used Meta Tags',
            ),
            'hierarchical' => false,
            'query_var' => 'metatags',
            'rewrite' => array(
                'slug' => 'rooms/metatags'
            )
        );
        $taxonomies['cate'] = array(
            'labels' => array(
                'name'=> 'Category',
                'singular_name'=> 'Category',
                'edit_item'=> 'Edit Category',
                'update_item'=> 'Update Category',
                'add_new_item'=> 'Add Category',
                'new_item_name'=> 'Add New Category',
                'all_items'=> 'All Category',
                'search_items'=> 'Search Category',
                'popular_items'=> 'Popular Category',
                'seperate_items_with_comments'=> 'Seperate Category with commas',
                'add_or_remove_items'=> 'Add or remove Category',
                'choose_from_most_used'=> 'Choose from most used Category',
            ),
            'hierarchical' => false,
            'query_var' => 'cate',
            'rewrite' => array(
                'slug' => 'facility/cates'
            )
        );
        $this->register_all_taxonomies($taxonomies);
    }

    public function register_all_taxonomies($taxonomies){
        foreach($taxonomies as $name => $args){
            register_taxonomy($name,array('bb_facilities'),$args);
        }
    }
    public function register_post_type(){
        add_theme_support('post-thumbnails');
        $args = array(
            'labels' => array(
                'name'=> 'Facilities',
                'singular_name'=> 'Facility',
                'edit_item'=> 'Edit Facility',
                'add_new'=> 'Add New Facility',
                'add_new_item'=> 'Add Facility',
                'view_items'=> 'View Facilities',
                'search_items'=> 'Search Facilities',
                'not_found'=> 'No Facilities found',
                'not_found_in_trash'=> 'No Facilities found in trash',
                
            ),
            'query_var' => 'facilities',
            'rewrite' => array(
                'slug' => 'facilities'
            ),
            'public' => true,
            'menu_position' => 3,
            'supports'=>array(
                'title','editor','thumbnail'
            )
        );
        register_post_type('bb_facilities', $args);
    }
}
add_action('init', function(){
    new BB_Facilities();
});
?>