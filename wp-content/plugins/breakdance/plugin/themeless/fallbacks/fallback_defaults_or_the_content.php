<?php

namespace Breakdance\Themeless\Fallbacks;

use Breakdance\Themeless\ThemelessController;

use function Breakdance\Render\render;
use function Breakdance\Themeless\_getTemplateForRequest;

/**
 * this function should only be called when the theme system is disabled or Breakdance Zero Theme is active
 * 
 * @return false|null|string|void
 */
function fallback_defaults_or_the_content() {

    $fallbackTemplate = _getTemplateForRequest(ThemelessController::getInstance()->templates, true);
    if ($fallbackTemplate) {
        ThemelessController::getInstance()->buildTemplateHierarchyForRequest($fallbackTemplate['id']);
        $id = ThemelessController::getInstance()->popHierarchy();
        if ($id) {
            return render($id);
        }
    }

}
