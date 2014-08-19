<?php
/*
   Plugin Name: XML-RPC for Multisite
   Plugin URI: https://github.com/yoonchulkoh/xmlrpc-for-multisite
   Description: XML-RPC for Multisite.
   Version: 1.0
   Author: Yoonchul Koh
   Author URI: http://yoonchulkoh.hatenablog.com/
 */

include_once(ABSPATH . '/wp-includes/class-IXR.php');
include_once(ABSPATH . '/wp-includes/class-wp-xmlrpc-server.php');

add_action('wp_xmlrpc_server_class', 'wp_xmlrpc_server_class');

class wp_xmlrpc_server_multi extends wp_xmlrpc_server {

    private function switch_to_blog($args, $func_name) {
        if (!$this->minimum_args($args, 1))
            return $this->error;

        $blog_id = (int) $args[0];
        switch_to_blog($blog_id);

        return parent::$func_name($args);
    }

    function wp_newPost($args) {
        return $this->switch_to_blog($args, __FUNCTION__);
    }

    function wp_editPost($args) {
        return $this->switch_to_blog($args, __FUNCTION__);
    }

    function wp_deletePost($args) {
        return $this->switch_to_blog($args, __FUNCTION__);
    }

    function wp_getPost($args) {
        return $this->switch_to_blog($args, __FUNCTION__);
    }

    function wp_getPosts($args) {
        return $this->switch_to_blog($args, __FUNCTION__);
    }

    function wp_newTerm($args) {
        return $this->switch_to_blog($args, __FUNCTION__);
    }

    function wp_editTerm($args) {
        return $this->switch_to_blog($args, __FUNCTION__);
    }

    function wp_deleteTerm($args) {
        return $this->switch_to_blog($args, __FUNCTION__);
    }

    function wp_getTerm($args) {
        return $this->switch_to_blog($args, __FUNCTION__);
    }

    function wp_getTerms($args) {
        return $this->switch_to_blog($args, __FUNCTION__);
    }

    function wp_getTaxonomy($args) {
        return $this->switch_to_blog($args, __FUNCTION__);
    }

    function wp_getTaxonomies($args) {
        return $this->switch_to_blog($args, __FUNCTION__);
    }

    function wp_getUser($args) {
        return $this->switch_to_blog($args, __FUNCTION__);
    }

    function wp_getUsers($args) {
        return $this->switch_to_blog($args, __FUNCTION__);
    }

    function wp_getProfile($args) {
        return $this->switch_to_blog($args, __FUNCTION__);
    }

    function wp_editProfile($args) {
        return $this->switch_to_blog($args, __FUNCTION__);
    }

    function wp_getPage($args) {
        return $this->switch_to_blog($args, __FUNCTION__);
    }

    function wp_getPages($args) {
        return $this->switch_to_blog($args, __FUNCTION__);
    }

    function wp_deletePage($args) {
        return $this->switch_to_blog($args, __FUNCTION__);
    }

    function wp_editPage($args) {
        return $this->switch_to_blog($args, __FUNCTION__);
    }

    function wp_getPageList($args) {
        return $this->switch_to_blog($args, __FUNCTION__);
    }

    function wp_getAuthors($args) {
        return $this->switch_to_blog($args, __FUNCTION__);
    }

    function wp_getTags($args) {
        return $this->switch_to_blog($args, __FUNCTION__);
    }

    function wp_newCategory($args) {
        return $this->switch_to_blog($args, __FUNCTION__);
    }

    function wp_deleteCategory($args) {
        return $this->switch_to_blog($args, __FUNCTION__);
    }

    function wp_suggestCategories($args) {
        return $this->switch_to_blog($args, __FUNCTION__);
    }

    function wp_getComment($args) {
        return $this->switch_to_blog($args, __FUNCTION__);
    }

    function wp_getComments($args) {
        return $this->switch_to_blog($args, __FUNCTION__);
    }

    function wp_deleteComment($args) {
        return $this->switch_to_blog($args, __FUNCTION__);
    }

    function wp_editComment($args) {
        return $this->switch_to_blog($args, __FUNCTION__);
    }

    function wp_newComment($args) {
        return $this->switch_to_blog($args, __FUNCTION__);
    }

    function wp_getCommentStatusList($args) {
        return $this->switch_to_blog($args, __FUNCTION__);
    }

    function wp_getCommentCount($args) {
        return $this->switch_to_blog($args, __FUNCTION__);
    }

    function wp_getPostStatusList($args) {
        return $this->switch_to_blog($args, __FUNCTION__);
    }

    function wp_getPageStatusList($args) {
        return $this->switch_to_blog($args, __FUNCTION__);
    }

    function wp_getPageTemplates($args) {
        return $this->switch_to_blog($args, __FUNCTION__);
    }

    function wp_getOptions($args) {
        return $this->switch_to_blog($args, __FUNCTION__);
    }

    function wp_setOptions($args) {
        return $this->switch_to_blog($args, __FUNCTION__);
    }

    function wp_getMediaItem($args) {
        return $this->switch_to_blog($args, __FUNCTION__);
    }

    function wp_getMediaLibrary($args) {
        return $this->switch_to_blog($args, __FUNCTION__);
    }

    function wp_getPostFormats($args) {
        return $this->switch_to_blog($args, __FUNCTION__);
    }

    function wp_getPostType($args) {
        return $this->switch_to_blog($args, __FUNCTION__);
    }

    function wp_getPostTypes($args) {
        return $this->switch_to_blog($args, __FUNCTION__);
    }

    function wp_getRevisions($args) {
        return $this->switch_to_blog($args, __FUNCTION__);
    }

    function wp_restoreRevision($args) {
        return $this->switch_to_blog($args, __FUNCTION__);
    }
    
    function mw_newMediaObject($args) {
        return $this->switch_to_blog($args, __FUNCTION__);
    }
}

function wp_xmlrpc_server_class($args) {
    return 'wp_xmlrpc_server_multi';
}
