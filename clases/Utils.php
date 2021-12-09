<?php 
	namespace ContactsEss18;
	

    class Utils
    {      

        public static function scapeParams($params_arr)
        {
            $pass = true;

            foreach($params_arr as $param)
            {
                if (strpos($param, "'") !== false) {
                    $pass = false;
                }elseif (strpos($param, " --") !== false) {
                    $pass = false;
                }
            }
            
            return $pass;
        }


    }



