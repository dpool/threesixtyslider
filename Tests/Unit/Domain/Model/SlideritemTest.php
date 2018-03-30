<?php

namespace Dpool\Threesixtyslider\Tests;
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2014 Toni Cieslik <tx@dpool.net>, dpool
 *  			Andreas Habel <andreas.habel@dpool.net>, dpool
 *  			
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * Test case for class \Dpool\Threesixtyslider\Domain\Model\Slideritem.
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @package TYPO3
 * @subpackage 360 Slider
 *
 * @author Toni Cieslik <tx@dpool.net>
 * @author Andreas Habel <andreas.habel@dpool.net>
 */
class SlideritemTest extends \TYPO3\CMS\Extbase\Tests\Unit\BaseTestCase {
	/**
	 * @var \Dpool\Threesixtyslider\Domain\Model\Slideritem
	 */
	protected $fixture;

	public function setUp() {
		$this->fixture = new \Dpool\Threesixtyslider\Domain\Model\Slideritem();
	}

	public function tearDown() {
		unset($this->fixture);
	}

	/**
	 * @test
	 */
	public function getTitleReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setTitleForStringSetsTitle() { 
		$this->fixture->setTitle('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getTitle()
		);
	}
	
	/**
	 * @test
	 */
	public function getInfo1ReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setInfo1ForStringSetsInfo1() { 
		$this->fixture->setInfo1('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getInfo1()
		);
	}
	
	/**
	 * @test
	 */
	public function getInfo1TitleReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setInfo1TitleForStringSetsInfo1Title() { 
		$this->fixture->setInfo1Title('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getInfo1Title()
		);
	}
	
	/**
	 * @test
	 */
	public function getInfo2ReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setInfo2ForStringSetsInfo2() { 
		$this->fixture->setInfo2('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getInfo2()
		);
	}
	
	/**
	 * @test
	 */
	public function getInfo2TitleReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setInfo2TitleForStringSetsInfo2Title() { 
		$this->fixture->setInfo2Title('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getInfo2Title()
		);
	}
	
	/**
	 * @test
	 */
	public function getInfo3ReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setInfo3ForStringSetsInfo3() { 
		$this->fixture->setInfo3('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getInfo3()
		);
	}
	
	/**
	 * @test
	 */
	public function getInfo3TitleReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setInfo3TitleForStringSetsInfo3Title() { 
		$this->fixture->setInfo3Title('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getInfo3Title()
		);
	}
	
	/**
	 * @test
	 */
	public function getImagesReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setImagesForStringSetsImages() { 
		$this->fixture->setImages('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getImages()
		);
	}
	
}
?>