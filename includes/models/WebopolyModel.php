<?php

class WebopolyModel
{
	public static function getAddressById($id)
	{
		$db = new Database();
		$sql = "SELECT * FROM address WHERE id=".intval($id);

		$result = $db->query($sql);

		if($db->numRows($result) > 0)
		{
			return $db->fetchObject($result);
		}

		return null;
	}

	public static function getAddressesByUserId($userId)
	{
		$db = new Database();

		$sql = "SELECT * FROM address WHERE userId=".intval($userId);
		$result = $db->query($sql);

		if($db->numRows($result) > 0)
		{
			$addressesArray = array();

			while($row = $db->fetchObject($result))
			{
				$addressesArray[] = $row;
			}

			return $addressesArray;
		}

		return null;
	}

	public static function saveScore($score, $userid)
    {
        $db = new Database();

        //prüfen bzw. "sichern" dieser werte -> keine sql injection
        $score = $db->escapeString($score);
        $userid = $db->escapeString($userid);

        //sql statement -> update webopoly set points=score where id=userid
        $sql = "UPDATE webopoly SET points='".$score."' WHERE id=".$userid;
        $db->query($sql);

        return true;
    }

	public static function insertPlayers($spieleranzahl)
    {
        $eintrag = "INSERT INTO webopoly (player) VALUES ";

        for($i = 1; $i <= $spieleranzahl; $i++)
        {
            $eintrag .= "('".$_POST["spielername".$i]."'),";
        }

        $eintrag = substr($eintrag, 0, -1);


        $db = new Database();
        $db->query($eintrag);
    }

    public static function getPlayers()
    {
        $db = new Database();

        $sql = "SELECT * FROM webopoly";
        $result = $db->query($sql);

        $players = array();

        while($row = $db->fetchObject($result))
        {
            $players[] = $row;
        }

        return $players;
    }

	public static function emptyTable()
	{
		$db = new Database();

		$sql = "TRUNCATE TABLE webopoly";
		$db->query($sql);
	}

	public static function saveAddress($data)
	{
		$db = new Database();

		$sql = "UPDATE address SET firstname='".$db->escapeString($data['firstname'])."',lastname='".$db->escapeString($data['lastname'])."',street='".$db->escapeString($data['street'])."',zip='".$db->escapeString($data['zip'])."',city='".$db->escapeString($data['city'])."' WHERE id=".intval($data['id']);
		$db->query($sql);

		return (object) $data;
	}

	public static function deleteAddress($id)
	{
		$db = new Database();

		$sql = "DELETE FROM address WHERE id=".intval($id);
		$db->query($sql);
	}
}