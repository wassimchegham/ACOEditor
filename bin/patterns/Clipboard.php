<?php

/*
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 * 
 */

/**
 * This class represents a clipboard
 * 
 * @author wassim Chegham & hugo Marchadour
 * @package Command
 * @version 0.1
 */
class Clipboard
{
	/**
	 * @var String $_text the current text content
	 * @access private
	 */
	private $_text;
	
	/**
	 * The constructor of the Clipboard
	 * @param String $str The value of the new string to be set
	 * @return void
	 */
	public function __construct($str="")
	{
		$this->_text = $str;
	}
	
	/**
	 * Set the current text
	 * @return void
	 * @param String $str the new text content
	 */
	public function setText($str)
	{ 
		$this->_text = $str; 
	}
	
	/**
	 * Get the current text content
	 * @return String the current text
	 */
	public function getText()
	{ 
		return $this->_text; 
	}
	
}

?>