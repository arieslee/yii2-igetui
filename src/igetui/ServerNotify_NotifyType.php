<?php
namespace sunmoon\getui\src\igetui;
use sunmoon\getui\src\protobuf\type\PBEnum;
class ServerNotify_NotifyType extends PBEnum
{
  const normal  = 0;
  const serverListChanged  = 1;
  const exception  = 2;
}

