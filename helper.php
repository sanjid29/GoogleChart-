<?php

class googlechart
{
	function getvalueone($params)
	{
		$db = JFactory::getDbo();
		$query = $db->getQuery(true)
            ->select($db->quoteName('value1'))
            ->from($db->quoteName('#__googlechart'))
            ->where('id = '. $db->Quote($params));
			
		$db->setQuery($query);

		$result = $db->loadResult();

		return $result;
	}	
	function getvaluetwo($params)
	{
		$db = JFactory::getDbo();
		$query = $db->getQuery(true)
            ->select($db->quoteName('value2'))
            ->from($db->quoteName('#__googlechart'))
            ->where('id = '. $db->Quote($params));
			
		$db->setQuery($query);

		$result = $db->loadResult();

		return $result;
	}
	
}
?>