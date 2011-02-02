<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * navigation css file from theme Original
 *
 * @package phpMyAdmin-theme
 * @subpackage Original
 */

// unplanned execution path
if (!defined('PMA_MINIMUM_COMMON')) {
    exit();
}
?>
/******************************************************************************/
/* general tags */
html {
    font-size: <?php echo (null !== $GLOBALS['PMA_Config']->get('fontsize') ? $GLOBALS['PMA_Config']->get('fontsize') : (
        isset($_COOKIE['pma_fontsize']) ? $_COOKIE['pma_fontsize'] : '82%'));?>;
}

input, select, textarea {
    font-size: 1em;
}

body {
<?php if (! empty($GLOBALS['cfg']['FontFamily'])) { ?>
    font-family:        <?php echo $GLOBALS['cfg']['FontFamily']; ?>;
<?php } ?>
    background:         <?php echo (isset($_SESSION['tmp_user_values']['custom_color']) ? $_SESSION['tmp_user_values']['custom_color'] : $GLOBALS['cfg']['NaviBackground']); ?>;
    color:              <?php echo $GLOBALS['cfg']['NaviColor']; ?>;
    margin:             0;
    padding:            0;
}

a img {
    border: 0;
}

a:link,
a:visited,
a:active {
    text-decoration:    none;
    color:              #0000FF;
}

ul {
    margin:0;
}

form {
    margin:             0;
    padding:            0;
    display:            inline;
}

select#select_server,
select#lightm_db {
    width:              100%;
}

/* buttons in some browsers (eg. Konqueror) are block elements,
   this breaks design */
button {
    display:            inline;
}


/******************************************************************************/
/* classes */

/* leave some space between icons and text */
.icon {
    vertical-align:     middle;
    margin-right:       0.3em;
    margin-left:        0.3em;
}

.navi_dbName {
    font-weight:    bold;
    color:          <?php echo $GLOBALS['cfg']['NaviDatabaseNameColor']; ?>;
}

/******************************************************************************/
/* specific elements */

div#pmalogo {
    <?php //better echo $GLOBALS['cfg']['logoBGC']; ?>
    padding-top: 5px;
}

div#leftframelinks {
    margin: 0;
    padding: 0;		
}

div#pmalogo,
div#leftframelinks,
div#databaseList {
	padding-bottom: 8px;
    text-align:         center;
}

ul#databaseList {
    margin-bottom:      0.5em;
    padding-bottom:     0.5em;
    padding-<?php echo $left; ?>:     1.5em;    
	margin-left: 0;
	padding-left: 0;
	list-style: none;    
}

ul#databaseList a {
    display: block;
    font-style: normal;
    padding: 3px;
}

div#navidbpageselector a,
ul#databaseList a,
ul#databaseList a:hover {
	background: url(./themes/original/img/s_tbl.png) no-repeat;
    color:              <?php echo $GLOBALS['cfg']['NaviColor']; ?>;
}

div#navidbpageselector a,
ul#databaseList a {
	color:              <?php echo $GLOBALS['cfg']['NaviColor']; ?>;
}

ul#databaseList a:hover {
	background: url(./themes/original/img/s_tbl.png) no-repeat <?php echo $GLOBALS['cfg']['ThBackground']; ?>;
    color:              <?php echo $GLOBALS['cfg']['NaviPointerColor']; ?>;	
}

ul#databaseList ul {
    padding-left: 1em;
    padding-right: 0;
    list-style: none;   
}

ul#databaseList li ul li {
    margin-left: 1em;
}

ul#databaseList li.selected a {
    background: <?php echo $GLOBALS['cfg']['BrowseMarkerBackground']; ?>;
    color: <?php echo $GLOBALS['cfg']['BrowseMarkerColor']; ?>;    
}

ul#databaseList li {
	background: url(./themes/original/img/s_tbl.png) no-repeat;
	text-indent: 18px;
	margin-top: 0;
	font-weight: bold;
}

ul#databaseList li a {
	font-weight: normal;	
}


div#leftframelinks .icon {
    padding:            0;
    margin:             0;
}

div#leftframelinks a img.icon {
    margin:             0;
    padding:            0.2em;
    border:             0.1em solid <?php echo $GLOBALS['cfg']['NaviColor']; ?>;
    background:         <?php echo $GLOBALS['cfg']['NaviPointerBackground']; ?>;
}

div#leftframelinks a:hover img {
    background:         <?php echo $GLOBALS['cfg']['ThBackground']; ?>;
    color:              <?php echo $GLOBALS['cfg']['NaviPointerColor']; ?>;
}

/* serverlist */
#body_leftFrame #list_server {
    list-style-image: url(<?php echo $GLOBALS['cfg']['ThemePath']; ?>/original/img/s_host.png);
    list-style-position: inside;
    list-style-type: none;
    margin: 0;
    padding: 0;
}

#body_leftFrame #list_server li {
    margin: 0;
    padding: 0;
    /*font-size:          80%;*/
}

#body_leftFrame {
	background-image: url(<?php echo $_SESSION['PMA_Theme']->getImgPath(); ?>logo_right.png);
    background-position: <?php echo $right; ?> bottom;
    background-repeat: no-repeat;
    background-attachment:fixed;
}

div#left_tableList ul {
    list-style-type:    none;
    list-style-position: outside;
    margin:             0;
    padding:            0;
    /*font-size:          80%;*/
    background:         <?php echo (isset($_SESSION['tmp_user_values']['custom_color']) ? $_SESSION['tmp_user_values']['custom_color'] : $GLOBALS['cfg']['NaviBackground']); ?>;
}

div#left_tableList ul ul {
    /*font-size:          100%;*/
}

div#left_tableList a {
    background:         <?php echo $GLOBALS['cfg']['NaviBackground']; ?>;
    color:              <?php echo $GLOBALS['cfg']['NaviColor']; ?>;
    text-decoration:    none;
}

div#left_tableList a:hover {
    background:         <?php echo $GLOBALS['cfg']['NaviBackground']; ?>;
    color:              <?php echo $GLOBALS['cfg']['NaviColor']; ?>;
    text-decoration:    underline;
}

div#left_tableList li {
    margin:             0;
    padding:            0;
    white-space:        nowrap;
}

<?php if ($GLOBALS['cfg']['BrowseMarkerColor']) { ?>
/* marked items */
div#left_tableList > ul li.marked > a,
div#left_tableList > ul li.marked {
    background: <?php echo $GLOBALS['cfg']['BrowseMarkerBackground']; ?>;
    color: <?php echo $GLOBALS['cfg']['BrowseMarkerColor']; ?>;
}
<?php } ?>

<?php if ($GLOBALS['cfg']['LeftPointerEnable']) { ?>
div#left_tableList > ul li:hover > a,
div#left_tableList > ul li:hover {
    background:         <?php echo $GLOBALS['cfg']['NaviPointerBackground']; ?>;
    color:              <?php echo $GLOBALS['cfg']['NaviPointerColor']; ?>;
}
<?php } ?>

div#left_tableList img {
    padding:            0;
    vertical-align:     middle;
}

div#left_tableList ul ul {
    margin-<?php echo $left; ?>:        0;
    padding-<?php echo $left; ?>:       0.1em;
    border-<?php echo $left; ?>:        0.1em solid <?php echo $GLOBALS['cfg']['NaviColor']; ?>;
    padding-bottom:     0.1em;
    border-bottom:      0.1em solid <?php echo $GLOBALS['cfg']['NaviColor']; ?>;
}

/* for the servers list in navi panel */
#serverinfo .item {
    white-space:        nowrap;
    color:              <?php echo $GLOBALS['cfg']['NaviColor']; ?>;
}
#serverinfo a:hover {
    background:         <?php echo $GLOBALS['cfg']['NaviPointerBackground']; ?>;
    color:              <?php echo $GLOBALS['cfg']['NaviPointerColor']; ?>;
}

#NavFilter {
    display: none;
}

#NavFilter input {
    border: 1px solid #999;
    padding: 2px 0;
    margin: 3px 0;
}

#clear_fast_filter {
    background: white;
    color: black;
    cursor: pointer;
    padding: 0;
    margin: 6px 5px 0 -23px;
    position: relative;
    float: right;
}

#fast_filter {
    width: 100%;
    padding:2px 0px;
    margin:0;
    border:0;
}




ul#newtable li {
	margin-top: 15px;	
}