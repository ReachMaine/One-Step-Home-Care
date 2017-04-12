<?php
/**
 * @copyright	Copyright (C) 2008 - 2009  All rights reserved.
 * @license		
 */

// no direct access
defined('_JEXEC') or die('Restricted access');

/*
 * Module chrome for rendering the module in a slider
 */
function modChrome_slider($module, &$params, &$attribs)
{
	jimport('joomla.html.pane');
	// Initialize variables
	$sliders = & JPane::getInstance('sliders');
	$sliders->startPanel( JText::_( $module->title ), 'module' . $module->id );
	echo $module->content;
	$sliders->endPanel();
}
?>

<?php
function modChrome_OSright($module, &$params, &$attribs)
{
	$headerLevel = isset($attribs['headerLevel']) ? (int) $attribs['headerLevel'] : 3;
	if (!empty ($module->content)) { ?>
        <div class="OSright-wrap<?php echo htmlspecialchars($params->get('moduleclass_sfx')); ?>">
          <?php if ($module->showtitle) { ?>
            <div class="OSright-header<?php echo htmlspecialchars($params->get('moduleclass_sfx')); ?>">
            	<h<?php echo $headerLevel; ?>>
					<?php echo $module->title; ?>
                </h<?php echo $headerLevel; ?>>
                <div class="itr"></div>
                <div class="ibr"></div>
            </div>
          <?php }; ?>
        <div class="OSright-body<?php echo htmlspecialchars($params->get('moduleclass_sfx')); ?>"><?php echo $module->content; ?></div>
        </div>
	<?php };
}
?>