<?php 
/**
 * SlideDeck Front Cover Template
 * 
 * More information on this project:
 * http://www.slidedeck.com/
 * 
 * Full Usage Documentation: http://www.slidedeck.com/usage-documentation 
 * 
 * @package SlideDeck
 * @subpackage SlideDeck 3 Pro for WordPress
 * @author Hummingbird Web Solutions Pvt. Ltd.
 */

/*
Copyright 2012 HBWSL  (email : support@hbwsl.com)

This file is part of SlideDeck.

SlideDeck is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

SlideDeck is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with SlideDeck.  If not, see <http://www.gnu.org/licenses/>.
*/
?>
<div class="slidedeck-cover slidedeck-cover-front">
    
    <div class="slidedeck-cover-wrapper">
        
	    <div class="slidedeck-cover-binding"><span class="slidedeck-cover-binding-highlight"></span><span class="slidedeck-cover-color" style="background-color:<?php echo $accent_color; ?>"></span></div>
	    
        <div class="slidedeck-cover-copy">
            <div class="slidedeck-cover-outer">
                <div class="slidedeck-cover-middle">
                    <div class="slidedeck-cover-inner">
                        <span class="slidedeck-cover-title" style="font-family:<?php echo $title_font['stack']; ?>;<?php if( isset( $title_font['weight'] ) ) echo 'font-weight:' . $title_font['weight'] . ';'; ?>"><?php echo nl2br( $front_title ); ?></span>
                    </div>
			        
			        <div class="slidedeck-cover-curatedby" <?php if( !$show_curator ) echo ' style="display:none;"'; ?>>
			            Curated by <span class="slidedeck-cover-author"><?php echo $curator_name; ?></span>
			            <?php echo $curator_avatar; ?>
			        </div>
                </div>
            </div>
        </div>
        
        <a href="#open" class="slidedeck-cover-nav-button slidedeck-cover-open" title="Open">
            <span class="slidedeck-cover-button"></span>
            <span class="slidedeck-cover-color" style="background-color:<?php echo $accent_color; ?>;"></span>
            <span class="slidedeck-cover-semicircle"></span>
        </a>
        
        <span class="slidedeck-cover-wrapper-back"><span class="slidedeck-cover-wrapper-back-inner"></span></span>
        <span class="slidedeck-cover-wrapper-nub"></span>
    </div>
    
    <div class="slidedeck-cover-mask"></div>
    
</div>