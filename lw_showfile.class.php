<?php

/**************************************************************************
*  Copyright notice
*
*  Copyright 2011 Logic Works GmbH
*
*  Licensed under the Apache License, Version 2.0 (the "License");
*  you may not use this file except in compliance with the License.
*  You may obtain a copy of the License at
*
*  http://www.apache.org/licenses/LICENSE-2.0
*  
*  Unless required by applicable law or agreed to in writing, software
*  distributed under the License is distributed on an "AS IS" BASIS,
*  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
*  See the License for the specific language governing permissions and
*  limitations under the License.
*  
***************************************************************************/

class lw_showfile extends lw_plugin 
{
	function __construct($pid=false)
	{
		parent::__construct();
	}

	function buildPageOutput()
	{
		$base = $this->config['path']['datapool']."showfiles/";
        $file = str_replace("..", "", $this->params['file']);
        $file = str_replace("/", "", $file);
        $file = str_replace("\\", "", $file);
        $showfile = $base.$file;
        if (is_file($showfile)) {
            return file_get_contents($showfile);
        }
        return "<!-- NO CONTENT!!: ".$showfile." -->";
	}
}
