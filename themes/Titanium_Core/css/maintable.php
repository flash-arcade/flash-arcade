<?php
global $theme_name;

echo "/* themes/".$theme_name."/css/maintable.php Fly Kit for PHP-Nuke Titanium - Design Themes On The Fly */\n"; 
echo "/* When we are done we will move this code to style.css */\n\n"; 


######################################################################################################
   //USE background-position: CENTER CENTER; to squuze top to bottom 
   define('BOOKMARKS_BACKGROUND', '"../../../themes/'.$theme_name.'/backgrounds/blackbar.png"'); 
   define('BOOKMARKS_CONTAIN', 'background-repeat: no-repeat;
                          background-position: center center; 
					                              width 100%;
					                            height 115px;
					                            opacity: 100;
					                     visibility: inherit;
					                             z-index: 20;
					                  background-size: cover;');
					  
######################################################################################################
   define('BOOKMARKS_TITLE_BACKGROUND', '"../../../themes/'.$theme_name.'/backgrounds/newredbar.png"'); 
   define('BOOKMARKS_TITLE_CONTAIN', 'background-repeat: no-repeat;
                                background-position: center center; 
					                                    width 100%;
					                                  height 115px;
					                                  opacity: 100;
					                           visibility: inherit;
					                                   z-index: 20;
					                        background-size: cover;');

//maintable css
echo "/* Sets the Header Background Elements */\n"; 
######################################################################################################
define('HEADER_BACKGROUND', '"../../../themes/'.$theme_name.'/header/2056x2056.png"');
define('HEADER_CONTAIN', 'background-repeat: no-repeat;
                    background-position: center center; 
					                        width 100%;
					                      height 115px;
					                      opacity: 100;
					               visibility: inherit;
					                       z-index: 20;
					            background-size: cover;');
########################################################################################################
   define('SIDEBLOCK_BACKGROUND', '"themes/'.$theme_name.'/backgrounds/2560x1080.png"');   
   define('SIDEBLOCK_CONTAIN', 'background-repeat: repeat-y;
                         background-position: center center; 
					                           opacity: 100;
					             background-size: auto auto');
########################################################################################################
define('FOOTER_BACKGROUND', '"../../../themes/'.$theme_name.'/header/2056x2056.png"');
define('FOOTER_CONTAIN', 'background-repeat: no-repeat;
                    background-position: center center; 
					                        width 100%;
					                      height 115px;
					                      opacity: 100;
					               visibility: inherit;
					                       z-index: 20;
					            background-size: cover;');
########################################################################################################
define('CENTER_BACKGROUND', '"../../../themes/'.$theme_name.'/header/2056x2056.png"');
define('CENTER_CONTAIN', 'background-repeat: no-repeat;
                    background-position: center center; 
					                        width 100%;
					                      height 115px;
					                      opacity: 100;
					               visibility: inherit;
					                       z-index: 20;
					            background-size: cover;');
########################################################################################################
   //USE background-position: CENTER CENTER; to squuze top to bottom 
   define('E_MIDDLEHEADER_BACKGROUND', '"../../../themes/'.$theme_name.'/backgrounds/block_repeat_y_fix.png"'); 
   define('E_MIDDLEHEADER_CONTAIN', 'background-repeat: repeat-y | repeat-x;
                                         background-position: center center; 
					                                             width 100%;
					                                            height 100%;
					                                           opacity: 100;
					                                    visibility: inherit;
					                                            z-index: 20;
					                                  background-size: auto;');
					  
$blow_it_out_your_ass = 'dark.png';  
define('TABLE3_MIDDLEHEADER_BACKGROUND', '"themes/'.$theme_name.'/backgrounds/'.$blow_it_out_your_ass.'"'); 
define('TABLE3_MIDDLEHEADER_CONTAIN', 'background-repeat: repeat-y | repeat-x;
                                           background-position: CENTER CENTER; 
					                                               width 100%;
					                                              height 100%;
					                                             opacity: 100;
					                                     blow-it-out: yourass;
												          visibility: inherit;
					                                              z-index: 20;
					                                    background-size: auto;');
########################################################################################################
$blow_it_out_your_ass2 = 'block_repeat_y_fix.png';  
define('THEME_ARTICLE_BACKGROUND', '"themes/'.$theme_name.'/backgrounds/'.$blow_it_out_your_ass2.'"'); 
define('THEME_ARTICLE_CONTAIN', 'background-repeat: repeat-y | repeat-x;
                                     background-position: CENTER CENTER; 
					                                         width 100%;
					                                        height 100%;
					                                       opacity: 100;
											        visibility: inherit;
					                                        z-index: 20;
					                              background-size: auto;');
########################################################################################################
$lori_is_a_sadist_sociapath = 'block_repeat_y_fix.png';  
define('THEME_INDEX_BACKGROUND', '"themes/'.$theme_name.'/backgrounds/'.$lori_is_a_sadist_sociapath.'"'); 
define('THEME_INDEX_CONTAIN', 'background-repeat: repeat-y | repeat-x;
                                   background-position: center center; 
					                                       width 100%;
					                                       eight 100%;
					                                     opacity: 100;
											      visibility: inherit;
					                                      z-index: 20;
					                            background-size: auto;');
########################################################################################################
define('BODY_BACKGROUND', '"../../../themes/'.$theme_name.'/backgrounds/black_red_flame_borders_fixed.png"');
define('BODY_CONTAIN', 'background-size: 100% auto, cover;
                             background-attachment: fixed;
                              background-repeat: repeat-y;'); // stretch this whore out
?>
<?
echo 'greatminds {'."\n";
echo 'font-size:14px;'."\n";
echo 'font-weight:bold;'."\n";
echo 'font-size-adjust:!important;'."\n";   
echo '}'."\n";
?>
a.welcome { 
	color: #1572b6;
    font-size:20px;
	text-decoration: none;
    font-weight:bold
    font-size-adjust:!important;
}

a.welcome:hover,
a.welcome.bbcode-href:hover { 
	color: #f5a405;
    font-size:20px;
	text-decoration: none;
    font-weight:bold
    font-size-adjust:!important;
}

a.welcome.bbcode-href {
	color: #ce982d;
    font-size:20px;
	text-decoration: none;
    font-weight:bold
    font-size-adjust:!important;
}

.bookmark
{
    opacity: 0.9;
    background: url(<?php echo BOOKMARKS_TITLE_BACKGROUND; ?>);
	<?php echo BOOKMARKS_TITLE_CONTAIN; ?> 	
}

.boxtitle
{
    opacity: 0.9;
    background: url(<?php echo BOOKMARKS_TITLE_BACKGROUND; ?>);
	<?php echo BOOKMARKS_TITLE_CONTAIN; ?> 	
}

.boxlist
{
    opacity: 0.9;
    background: url(<?php echo BOOKMARKS_BACKGROUND; ?>);
	<?php echo CONTAIN; ?> 	
}

/* used in OpenTable - TheGhost add 08/04/2019 */
.emiddleflames
{
opacity: 0.9;
background-color: black;	
background-image: 
url(themes/<?=$theme_name?>/backgrounds/topright.png),       /* top black glass - TheGhost add 08/04/2019 */
url(themes/<?=$theme_name?>/backgrounds/box_bottom.png);     /* bottom flames - TheGhost add 08/04/2019 */
background-position:
top right, 
bottom left; 
background-repeat: 
repeat-x; /* this makes the top glass block and the bottom flame block repaete from left to right and vice vs - TheGhost add 08/04/2019 */ 
	
}

/* used in OpenTable3 - TheGhost add 08/04/2019 */
.topics_middleflames {
    opacity: 0.9;
    background: url(<?php echo TABLE3_MIDDLEHEADER_BACKGROUND; ?>); /* Universal background - TheGhost add 08/04/2019 */
	<?php echo TABLE3_MIDDLEHEADER_CONTAIN; ?>
}

/* used in themearticle - TheGhost add 08/04/2019 */
.themearticleflames
{
opacity: 0.9;
background-color: black;	
background-image: 
url(themes/<?=$theme_name?>/backgrounds/topright.png),   /* top black glass - TheGhost add 08/04/2019 */
url(themes/<?=$theme_name?>/backgrounds/box_bottom.png); /* bottom flames - TheGhost add 08/04/2019 */
background-position:
top right, 
bottom left; 
background-repeat: 
repeat-x; /* this makes the top glass block and the bottom flame block repaete from left to right and vice vs - TheGhost add 08/04/2019 */ 
}

/* used in themeindex - TheGhost add 08/04/2019 */
.themeindexflames
{
opacity: 0.9;
background-color: black;	
background-image: 
url(themes/<?=$theme_name?>/backgrounds/topright.png),       /* top black glass - TheGhost add 08/04/2019 */
url(themes/<?=$theme_name?>/backgrounds/box_bottom.png);     /* bottom flames - TheGhost add 08/04/2019 */
background-position:
top right, 
bottom left; 
background-repeat: 
repeat-x; /* this makes the top glass block and the bottom flame block repaete from left to right and vice vs - TheGhost add 08/04/2019 */ 
}
<?
