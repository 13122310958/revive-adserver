<?php

require_once MAX_PATH . '/lib/OA/Admin/Settings.php';

class OA_Upgrade_Config
{

    var $oConfig;
    var $aConfig;
    var $configPath;
    var $configFile;

    function OA_Upgrade_Config()
    {
        $this->oConfig = new OA_Admin_Settings();
        $this->aConfig =& $this->oConfig->conf;
        if (!OA_Admin_Settings::isConfigWritable())
        {
            return false;
        }
    }

    function getConfigFileName()
    {
        $host = getHostName();
        $this->configPath = MAX_PATH.'/var/';
        if (file_exists($host.'.conf.php'))
        {
            $this->configFile = $host.'.conf.php';
        }
        else if (file_exists($host.'.conf.ini'))
        {
            $this->configFile = $host.'.conf.ini';
        }
        else
        {
            $this->configFile = $host.'.conf.php';
        }
    }

    function isMaxConfigFile()
    {
        $host = getHostName();
        $this->configPath = MAX_PATH.'/var/';
        if (file_exists($this->configPath.$host.'.conf.ini'))
        {
            return true;
        }
        return false;
    }

    function replaceMaxConfigFileWithOpenadsConfigFile()
    {
        $host = getHostName();
        $this->configPath = MAX_PATH.'/var/';
        if (file_exists($this->configPath.$host.'.conf.ini'))
        {
            if ($this->oConfig->backupConfig($this->configPath.$host.'.conf.ini')) {
                if (copy($this->configPath.$host.'.conf.ini', $this->configPath.$host.'.conf.php'))
                {
                    unlink($this->configPath.$host.'.conf.ini');
                }
            }
        }
        return file_exists($this->configPath.$host.'.conf.php');
    }

    function putNewConfigFile()
    {
        $this->getInitialConfig();
        $this->getConfigFileName();
        if (!file_exists($this->configPath.$this->configFile))
        {
            copy(MAX_PATH.'/etc/dist.conf.php', $this->configPath.$this->configFile);
        }
        return true;
    }

    /**
     * at installation time we need to derive some values
     *
     */
    function getInitialConfig()
    {
        $this->setValue('store','webDir', MAX_PATH . DIRECTORY_SEPARATOR . 'www' . DIRECTORY_SEPARATOR .'images');
        $this->guessWebpath();
    }

    function guessWebpath()
    {
        $path = dirname($_SERVER['PHP_SELF']);
        if (preg_match('#/www/admin$#', $path))
        {
            // User has web root configured as Openads' root directory so can guess at all locations
            $subpath = preg_replace('#/www/admin$#', '', $path);
            $basepath = getHostNameWithPort() . $subpath. '/www/';
            $this->setValue('webpath', 'admin', $basepath.'admin');
            $this->setValue('webpath', 'delivery', $basepath.'delivery');
            $this->setValue('webpath', 'deliverySSL', $basepath.'delivery');
            $this->setValue('webpath', 'images', $basepath.'images');
            $this->setValue('webpath', 'imagesSSL', $basepath.'images');
        }
        else if (preg_match('#/admin$#', $path))
        {
            // User has web root configured as Openads' /www directory so can guess at all locations
            $subpath = preg_replace('#/admin$#', '', $path);
            $basepath = getHostName() . $subpath. '';
            $this->setValue('webpath', 'admin', $basepath.'/admin');
            $this->setValue('webpath', 'delivery', $basepath.'/delivery');
            $this->setValue('webpath', 'deliverySSL', $basepath.'/delivery');
            $this->setValue('webpath', 'images', $basepath.'/images');
            $this->setValue('webpath', 'imagesSSL', $basepath.'/images');
        }
        else
        {
            // User has web root configured as Openads' www/admin directory so can only guess the admin location
            $this->setValue('webpath', 'admin'   , getHostName());
            $this->setValue('webpath', 'delivery', getHostName());
            $this->setValue('webpath', 'images', getHostName());
            $this->setValue('webpath', 'deliverySSL', getHostName());
            $this->setValue('webpath', 'imagesSSL', getHostName());
        }
    }

    /**
     * Writes out the config file
     *
     * @param boolean $reparse should we reparse the config file after writing?
     * @return boolean true if config is successfully written.  Otherwise, false.
     */
    function writeConfig($reparse = true)
    {
        return $this->oConfig->writeConfigChange(null, null, $reparse);
    }

    /**
     * Backs up the existing config file and merges any changes from dist.conf.php.
     *
     * @return boolean true if config is successfully backed up and merged. Otherwise, false.
     */
    function mergeConfig()
    {
        $this->getConfigFileName();
        if (!$this->oConfig->backupConfig($this->configPath . $this->configFile)) {
            return false;
        }
        return $this->oConfig->mergeConfigChanges();
    }

    function getConfigBackupName()
    {
        return $this->oConfig->backupFilename;
    }

    function clearConfigBackupName()
    {
        $this->oConfig->backupFilename = '';
        return true;
    }

    function setOpenadsInstalledOn()
    {
        $this->setValue('openads','installed', '1');
        return $this->writeConfig();
    }

    function setMaxInstalledOff()
    {
        $this->setValue('max','installed', '0');
    }

    function setupConfigPan($aConfig)
    {


        foreach ($aConfig AS $section => $aKey)
        {
            foreach ($aKey AS $name => $value)
            {
                $this->setValue($section, $name, $value);
            }
        }
    }

    function setupConfigMax($aConfig)
    {
        $this->setValue('max', 'language', $aConfig['language']);
    }

    function setupConfigTimezone($aConfig)
    {
        $this->setValue('timezone', 'location', $aConfig['location']);
    }

    function setupConfigWebpath($aConfig)
    {
        foreach ($aConfig AS $k => $v)
        {
            $this->setValue('webpath', $k, preg_replace('#/$#', '', $v));
        }
    }

    function setupConfigStore($aConfig)
    {
        $this->setValue('store', 'mode', 0);
        $this->setValue('store', 'webDir', $aConfig['webDir']);
    }

    function setupConfigPriority($aConfig)
    {
        $this->setValue('priority', 'randmax', mt_getrandmax());
    }

    function setupConfigDatabase($aConfig)
    {
        $this->setValue('database', 'type',     $aConfig['type']);
        $this->setValue('database', 'host',     $aConfig['host']);
        $this->setValue('database', 'port',     $aConfig['port']);
        $this->setValue('database', 'username', $aConfig['username']);
        $this->setValue('database', 'password', $aConfig['password']);
        $this->setValue('database', 'name',     $aConfig['name']);
        $this->setValue('database', 'persistent',     $aConfig['persistent']);
        $this->setValue('database', 'mysql4_compatibility', $aConfig['mysql4_compatibility']);
    }

    function setupConfigTable($aConfig)
    {
        $this->setValue('table', 'prefix', $aConfig['prefix']);
        $this->setValue('table', 'type', $aConfig['type']);
    }

    function setValue($section, $name, $value)
    {
        $this->oConfig->setConfigChange($section, $name, $value);
    }

    function setBulkValue($section, $value)
    {
        $this->oConfig->setBulkConfigChange($section, $value);
    }

    function getValue($section, $name, $value)
    {
        return $this->oConfig->conf[$section][$name];
    }

    function setGetValue($section, $name)
    {
        $this->setValue($section, $name, $this->getValue($section, $name));
    }

    function setGlobals()
    {
        foreach ($this->aConfig AS $sectionName => $aSection)
        {
            foreach ($aSection as $k=>$v)
            {
                $GLOBALS['_MAX']['CONF'][$sectionName][$k] = $v;
            }
        }
    }

    /**
     * Check if there are items in the dist.conf.php file
     * which do not exist in the working conf array
     *
     * @param array optional $aConfigWork - An array of "dist" config items
     *                               or null to read the dist.conf.php file
     * @return boolean True for new config items
     */
    function checkForConfigAdditions($aConfDist = null)
    {
        if (is_null($aConfDist)) {
            $aConfDist = @parse_ini_file(MAX_PATH . '/etc/dist.conf.php', true);
        }

        // If the $aConfDist array is empty, then either an empty array was passed in
        // or there was an error parsing the dist.conf.php file, return false so user's
        // config file remains unchanged
        if (empty($aConfDist)) {
            return false;
        }

        // Check for any new keys in dist
        foreach ($aConfDist as $key => $value) {
        	if (array_key_exists($key, $this->aConfig)) {
        	    if (is_array($aConfDist[$key])) {
            	    foreach ($aConfDist[$key] as $subKey => $subValue) {
            	    	if (!array_key_exists($subKey, $this->aConfig[$key])) {
                            return true;
            	    	}
            	    }
        	    }
        	} else {
                return true;
        	}
        }

        // If we get here, there are no keys in the dist that do not exist in the working conf
        return false;
    }
}


?>
