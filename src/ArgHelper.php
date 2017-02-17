<?php

namespace HWP;

class ArgHelper {

    public $baseConfig = [];

	public function __construct($argDefs) {
		global $argv;

		$configList = array();
		//remove name of file
		if (isset($argv[0]) && substr($argv[0],0, 1) !== '-') {
    		array_shift($argv);
        }

        $position = 0;
		foreach ($argv as $idx => $a) {
			$config = $val = NULL;

			if (strpos($a, '=') !== FALSE) {
				list ($config, $val) = explode('=', $a);
				if (strpos($config, '-') === 0)
					$config = substr($config, 1);
				if (strpos($config, '-') === 0)
					$config = substr($config, 1);

				$configList[] = array('c'=>$config, 'v'=>$val);
			} else if (strpos($a, '-') === 0) {
				$config = substr($a, 1);
				if (strpos($config, '-') === 0)
					$config = substr($config, 1);

				//the v key will get overwritten if there is a value
				// after it.  Look at the next else block.
				$configList[] = array('c'=>$config, 'v'=>TRUE);
			} else if (count($configList)) {
				$last = count($configList) -1;
				$c = $configList[ $last ];
				$c['v'] = $a;
				$configList[ $last ] = $c;
                var_dump(
                    $a
                );
                die();
			}
		}
        var_dump($configList);
        exit();
		$configs = array();
        foreach ($argDefs as $_arg) {
            if (array_key_exists('default', $_arg)) {
                $configs[ $_arg['name'] ] = $_arg['default'];
            } else {
                $configs[ $_arg['name'] ] = NULL;
            }

            foreach ($configList as $_c) {
                if (in_array( $_c['c'], $_arg['keys'])) {
                    $configs[ $_arg['name'] ] = $_c['v'];
                }
            }
        }
        $this->baseConfig = $configs;
	}

    function getAll() {
        return $this->baseConfig;
    }

	function get($key, $default=NULL) {
		if ( is_array($key) ) {
			$retval = null;
			foreach ($key as $_k) {
				$val = cli_config_get($this->baseConfig, $_k, $default);
				if ($retval !== null && $val == $default) {
				} else {
					$retval = $val;
				}
			}
			return $retval;
		}

		if (isset($this->baseConfig[$key])) {
			return $this->baseConfig[$key];
		}
		return $default;
	}
}
