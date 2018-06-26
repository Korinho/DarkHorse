<?php
include_once('socialconfig.php');
class NpgSocial
{
    static private $_twitter = null;
    static private $_facebook = null;
    static private $_error = null;
    
    static public function getInstanceTwitter()
    {
          try            
          {
            /*self::$_twitter = new tmhOAuth(array(
            'consumer_key'    => TWITTER_CONSUMER_KEY,
            'consumer_secret' => TWITTER_CONSUMER_SECRET,
            'user_token'      => TWITTER_OAUTH_TOKEN,
            'user_secret'     => TWITTER_OAUTH_TOKEN_SECRET));*/
            self::$_twitter = new TwitterAPIExchange(array(
            'consumer_key'    => TWITTER_CONSUMER_KEY,
            'consumer_secret' => TWITTER_CONSUMER_SECRET,
            'oauth_access_token'      => TWITTER_OAUTH_TOKEN,
            'oauth_access_token_secret'     => TWITTER_OAUTH_TOKEN_SECRET));
          }
          catch (Exception $e){self::$_error = $e->getMessage();}        
        return self::$_twitter;
    }
    
    static public function getInstanceFacebook()
    {
        if(!self::$_facebook)
        {
          try            
          {
            self::$_facebook = new Facebook(array("appId" => FB_APPID, "secret" => FB_APPSECRET));
          }
          catch (Exception $e){self::$_error = $e->getMessage();}
        }
        return self::$_facebook;
    }
    
    /**
     * hace un comentario en twitter y sube una imagen
     * @params $params['msg'] mensaje que se va a subir a twitter
     * @params $params['filename'] nombre de la imagen a subir
     * @params $params['typeimg'] tipo de imagen Ej:image/jpeg;
     * @params $params['pathImg'] ruta a la imagen que se quiere subir
     */
    static public function twittearImg($params = array())
    {
       $_twitter = self::getInstanceTwitter();
       $result = false;
       if($_twitter):
           
            $toSend = array();            
            $toSend['status'] = $params['msg'];
            $toSend['media[]'] = sprintf("@%s;type=%s;filename=%s", $params['pathImg'], $params['typeimg'], $params['filename']);             
           
            
           $code = json_decode($_twitter->buildOauth('https://api.twitter.com/1.1/statuses/update_with_media.json', 'POST')
             ->setPostfields($toSend)
             ->performRequest());
           
            if($code->id):
                $result = true;
            else:
               self::$_error =  $_twitter->response['error'];
            endif;
       endif;
       return $result;
    }
    
    /**
     * Publica un anuncio en facebook
     * $params['message'] mensaje que se quiere publicar en fb
     * $params['link'] link que va a aparecer en el msg
     * $params['lipicturenk'] link de la imagen que se quiere mostrar
     * $params['name'] nombre de la publicación
     * $params['description'] ver que es esta descripción?
     */
    static public function publicaFacebook($params = array())
    {
        
        $result = true;
        $fb = self::getInstanceFacebook();
        $fb->setFileUploadSupport(true);
        if($fb):
          try            
          {
            $params['access_token'] = FB_TOKEN;
            $request = $fb->api('/'.FB_PAGEID.'/feed', 'POST', $params);            
          }
          catch (Exception $e){echo self::$_error = $e->getMessage();}
        endif;
        
        
        return $result;       
    }
    
    static public function getError(){return self::$_error;}
    
    static public function getMiniUrl($url)
    {
        $auxZipy = new ZipyClass($url);        
        return $auxZipy->getShortUrl();
    }
    
}
?>

