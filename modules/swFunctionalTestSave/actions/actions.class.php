<?php

/*
 * This file is part of the swFunctionalTestGenerationPlugin package.
 *
 * (c) 2008 Thomas Rabaix <thomas.rabaix@soleoweb.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */


/**
 *
 * @package    swToolboxPlugin
 * @subpackage debug
 * @author     Jon Busby <busbyjon@gmail.com>
 * @version    SVN: $Id$
 */
class swFunctionalTestSaveActions extends sfActions
{
  public function executeSaveTest($request)
  {
    $testDir = sfConfig::get('sf_test_dir')."/functional/".sfConfig::get('sf_app');
    if (!is_dir($testDir))
    {
      mkdir($testDir, 0777, true);
    }

    $testName = $request->getParameter('test_name');
    $testContent = $request->getParameter('test_content');
    $fileName = $testDir.'/'.$testName."Test.php";

    file_put_contents($fileName, $testContent);

    $url = str_replace('?_sw_func_enabled=1', '', $request->getReferer()).'?_sw_func_enabled=0';

    $this->redirect($url);
  }
}
