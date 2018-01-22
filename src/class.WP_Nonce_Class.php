<?php

/**
 * Created by PhpStorm.
 * User: zainu
 * Date: 22-Jan-18
 * Time: 10:44 AM
 */

/**
 * The class for the extending nonce abstract class
 */

class WP_Nonce_Class extends WP_Nonce_Abstract
{
    /**
     * Generate the wp_nonce_url
     *
     * @since 1.0.0
     *
     * @return string
     *
     */
    public function GetNonceURL (){

        $actionurl = $this->getActionUrl();
        $action = $this->getAction();
        $name = $this->getName();

        return wp_nonce_url( $actionurl, $action, $name );
    }

}