<?php
namespace sunmoon\getui\src\igetui;
use sunmoon\getui\src\protobuf\PBMessage;
class MMPMessage extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    $this->fields["2"] = "\\sunmoon\\getui\\src\\igetui\\Transparent";
    $this->values["2"] = "";
    $this->fields["3"] = "\\sunmoon\\getui\\src\\protobuf\\type\\PBString";
    $this->values["3"] = "";
    $this->fields["4"] = "\\sunmoon\\getui\\src\\protobuf\\type\\PBInt";
    $this->values["4"] = "";
    $this->fields["5"] = "\\sunmoon\\getui\\src\\protobuf\\type\\PBInt";
    $this->values["5"] = "";
    $this->fields["6"] = "\\sunmoon\\getui\\src\\protobuf\\type\\PBInt";
    $this->values["6"] = "";
    $this->fields["7"] = "\\sunmoon\\getui\\src\\protobuf\\type\\PBBool";
    $this->values["7"] = "";
    $this->values["7"] = new PBBool();
    $this->values["7"]->value = true;
    $this->fields["8"] = "\\sunmoon\\getui\\src\\protobuf\\type\\PBInt";
    $this->values["8"] = "";
    $this->fields["9"] = "\\sunmoon\\getui\\src\\protobuf\\type\\PBString";
    $this->values["9"] = "";
  }
  function transparent()
  {
    return $this->_get_value("2");
  }
  function set_transparent($value)
  {
    return $this->_set_value("2", $value);
  }
  function extraData()
  {
    return $this->_get_value("3");
  }
  function set_extraData($value)
  {
    return $this->_set_value("3", $value);
  }
  function msgType()
  {
    return $this->_get_value("4");
  }
  function set_msgType($value)
  {
    return $this->_set_value("4", $value);
  }
  function msgTraceFlag()
  {
    return $this->_get_value("5");
  }
  function set_msgTraceFlag($value)
  {
    return $this->_set_value("5", $value);
  }
  function msgOfflineExpire()
  {
    return $this->_get_value("6");
  }
  function set_msgOfflineExpire($value)
  {
    return $this->_set_value("6", $value);
  }
  function isOffline()
  {
    return $this->_get_value("7");
  }
  function set_isOffline($value)
  {
    return $this->_set_value("7", $value);
  }
  function priority()
  {
    return $this->_get_value("8");
  }
  function set_priority($value)
  {
    return $this->_set_value("8", $value);
  }
  function cdnUrl()
  {
    return $this->_get_value("9");
  }
  function set_cdnUrl($value)
  {
    return $this->_set_value("9", $value);
  }
}

