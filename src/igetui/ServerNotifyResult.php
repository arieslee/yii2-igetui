<?php
namespace sunmoon\getui\src\igetui;
use sunmoon\getui\src\protobuf\PBMessage;
class ServerNotifyResult extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    $this->fields["1"] = "\\sugao2013\\getui\\protobuf\\type\\PBString";
    $this->values["1"] = "";
    $this->fields["2"] = "\\sugao2013\\getui\\protobuf\\type\\PBString";
    $this->values["2"] = "";
  }
  function seqId()
  {
    return $this->_get_value("1");
  }
  function set_seqId($value)
  {
    return $this->_set_value("1", $value);
  }
  function info()
  {
    return $this->_get_value("2");
  }
  function set_info($value)
  {
    return $this->_set_value("2", $value);
  }
}
?>