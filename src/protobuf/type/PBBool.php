<?php
namespace sunmoon\getui\src\protobuf\type;
//use sunmoon\getui\src\protobuf\type\PBInt;
use sunmoon\getui\src\protobuf\PBMessage;
class PBBool extends PBInt
{
	var $wired_type = PBMessage::WIRED_VARINT;

	/**
	 * Parses the message for this type
	 *
	 * @param array
	 */
	public function ParseFromArray()
	{
		$this->value = $this->reader->next();
		$this->value = ($this->value != 0) ? 1 : 0;
	}

}
?>
