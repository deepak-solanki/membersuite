<?php
namespace Membersuite\Lib;

class CryptoManager{
    
    public static function GenerateDigitalSignature($portalUsername,$rsaXML){
        
       return 'Use phpseclib to generate digital signature';
    }    
   
   public static function GenerateMessageSignature($method, $SecretAccessKey, $AssociationId, $SessionId = ""){
    
        $call  = "http://membersuite.com/contracts/IConciergeAPIService/$method";
        
        $secret = base64_decode($SecretAccessKey);
        $data = "$call$AssociationId$SessionId";
        
        return base64_encode(hash_hmac('sha1', $data, $secret, True));

   }
   
   
}

?>