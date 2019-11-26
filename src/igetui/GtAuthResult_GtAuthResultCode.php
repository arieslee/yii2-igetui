<?php
namespace sunmoon\getui\src\igetui;
use sunmoon\getui\src\protobuf\type\PBEnum;
class GtAuthResult_GtAuthResultCode extends PBEnum
{
  const successed  = 0;
  const failed_noSign  = 1;
  const failed_noAppkey  = 2;
  const failed_noTimestamp  = 3;
  const failed_AuthIllegal  = 4;
  const redirect  = 5;
}

