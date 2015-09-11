<?php 

namespace PlatziPHP;

class User
{
	/**
	 * @type string
	 */
	protected $email;
	/**
	 * @type string
	 */
	protected $password;
	/**
	 * @type string
	 */
	protected $firstName;
	/**
	 * @type string
	 */
	protected $lastName;

	/**
	 * @param string $email
	 * @param string $password
	 */

	public function __construct($email, $password)
	{
		$this->email = $email;
		$this->password = password_hash($password, PASSWORD_DEFAULT);
	}

	/**
	 * @param string $firstName
	 * @param string $lastName
	 */

	public function setName($firstName, $lastName)
	{
		$this->firstName = $firstName;
		$this->lastName = $lastName;
	}

	/**
	 * @return string $firstName
	 */

	public function getFirstName()
	{
		return $this->firstName;
	}
}

?>