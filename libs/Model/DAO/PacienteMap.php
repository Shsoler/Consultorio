<?php
/** @package    Consultorio::Model::DAO */

/** import supporting libraries */
require_once("verysimple/Phreeze/IDaoMap.php");
require_once("verysimple/Phreeze/IDaoMap2.php");

/**
 * PacienteMap is a static class with functions used to get FieldMap and KeyMap information that
 * is used by Phreeze to map the PacienteDAO to the Paciente datastore.
 *
 * WARNING: THIS IS AN AUTO-GENERATED FILE
 *
 * This file should generally not be edited by hand except in special circumstances.
 * You can override the default fetching strategies for KeyMaps in _config.php.
 * Leaving this file alone will allow easy re-generation of all DAOs in the event of schema changes
 *
 * @package Consultorio::Model::DAO
 * @author ClassBuilder
 * @version 1.0
 */
class PacienteMap implements IDaoMap, IDaoMap2
{

	private static $KM;
	private static $FM;
	
	/**
	 * {@inheritdoc}
	 */
	public static function AddMap($property,FieldMap $map)
	{
		self::GetFieldMaps();
		self::$FM[$property] = $map;
	}
	
	/**
	 * {@inheritdoc}
	 */
	public static function SetFetchingStrategy($property,$loadType)
	{
		self::GetKeyMaps();
		self::$KM[$property]->LoadType = $loadType;
	}

	/**
	 * {@inheritdoc}
	 */
	public static function GetFieldMaps()
	{
		if (self::$FM == null)
		{
			self::$FM = Array();
			self::$FM["Id"] = new FieldMap("Id","Paciente","id",true,FM_TYPE_INT,11,null,true);
			self::$FM["Nome"] = new FieldMap("Nome","Paciente","nome",false,FM_TYPE_VARCHAR,100,null,false);
			self::$FM["Tel"] = new FieldMap("Tel","Paciente","tel",false,FM_TYPE_VARCHAR,11,null,false);
			self::$FM["Sexo"] = new FieldMap("Sexo","Paciente","sexo",false,FM_TYPE_CHAR,1,null,false);
			self::$FM["Idade"] = new FieldMap("Idade","Paciente","idade",false,FM_TYPE_INT,11,null,false);
		}
		return self::$FM;
	}

	/**
	 * {@inheritdoc}
	 */
	public static function GetKeyMaps()
	{
		if (self::$KM == null)
		{
			self::$KM = Array();
			self::$KM["Consulta_ibfk_2"] = new KeyMap("Consulta_ibfk_2", "Id", "Consulta", "PacienteId", KM_TYPE_ONETOMANY, KM_LOAD_LAZY);  // use KM_LOAD_EAGER with caution here (one-to-one relationships only)
		}
		return self::$KM;
	}

}

?>