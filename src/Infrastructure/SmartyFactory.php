<?php
declare(strict_types=1);

namespace App\Infrastructure;

use Smarty;

final class SmartyFactory
{
    public static function create(): Smarty
    {
        $smarty = new Smarty();
	
	$smarty->setEscapeHtml(true);
	$smarty->escape_html = 'UTF-8';
	$smarty->setDefaultModifiers(['escape:"html":"UTF-8"']);
	
        $smarty->setTemplateDir(dirname(__DIR__, 2) . '/templates');
        $smarty->setCompileDir(dirname(__DIR__, 2) . '/var/templates_c');

        return $smarty;
    }
}
