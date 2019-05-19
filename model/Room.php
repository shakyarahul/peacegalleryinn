<?php 
class BB_Room{
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
        $this->register_all_taxonomies($taxonomies);
    }

    public function register_all_taxonomies($taxonomies){
        foreach($taxonomies as $name => $args){
            register_taxonomy($name,array('bb_room'),$args);
        }
    }
    public function register_post_type(){
        add_theme_support('post-thumbnails');
        $args = array(
            'labels' => array(
                'name'=> 'Rooms',
                'singular_name'=> 'Room',
                'edit_item'=> 'Edit Room',
                'add_new'=> 'Add New Room',
                'add_new_item'=> 'Add Room',
                'view_items'=> 'View Rooms',
                'search_items'=> 'Search Rooms',
                'not_found'=> 'No Rooms found',
                'not_found_in_trash'=> 'No Rooms found in trash',
                
            ),
            'query_var' => 'Rooms',
            'rewrite' => array(
                'slug' => 'Rooms'
            ),
            'public' => true,
            'menu_position' => 3,
            'supports'=>array(
                'title','editor','thumbnail'
            )
        );
        register_post_type('bb_room', $args);
    }
}
add_action('init', function(){
    new BB_Room();
});
?>