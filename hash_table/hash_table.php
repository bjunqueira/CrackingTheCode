<?php
/**
 * Using PHP we can implement a hash table using a simple associative array.
 * 
 * Assumptions: The mapping will be done by a unique Id from the giving elements.
 * 
 * @author Bruno Junqueira
 */


/**
 * Dummy class to use in the examples.
 */
class Element
{
	/**
	 * Unique Id.
	 * @var int
	 */
	public $id;
	
	
	/**
	 * The constructor.
	 * 
	 * @param int $id The id.
	 * 
	 * @return void
	 */
	public function __construct($id) {
		$this->id = $id;
	}
}


/**
 * Build a hash table or insert elements to an existing one if any is given as $hash_table param.
 *
 * @param array $Elements   Array of Element objects. 
 * @param array $hash_table The hash table. If none is given, build it from scratch.
 *
 * @return array The hash map.
 *
 * @version 1.0
 */
function build_table ($Elements, &$hash_table = array())
{
	foreach ($Elements as $Element) {
		$hash_table[$Element->id] = $Element;
	}
	return $hash_table;
}


/**
 * The hash table abstraction.
 * 
 * @version 2.0 - Improving by adding more OO concepts.
 */
class HashTable
{
	/**
	 * The hash table itself.
	 * @var array
	 */
	private $table;


	/**
	 * The constructor.
	 *
	 * @param array $elements An array of Element objects.
	 *
	 * @return void
	 */
	public function __construct($elements = array())
	{
		$this->table = array();
		
		$this->insert($Elements);
	}


	/**
	 * Build a hash table or insert elements to an existing one if any is given as $hash_table param.
	 *
	 * @param array $elements Array of Element objects. 
	 *
	 * @return void
	 */
	public function insert ($elements)
	{
		foreach ($elements as $Element) {
			$this->table[$Element->id] = $Element;
		}
	}


	/**
	 * Fetch element from table.
	 * 
	 * @param int $id The element id.
	 * 
	 * @return Element
	 */
	public function fetch ($id)
	{
		return $this->table[$id];
	}
}


#
# Can we improve it? What happens if we pass null as param to insert function?
#






























