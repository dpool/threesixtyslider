<?php
namespace Dpool\Threesixtyslider\Domain\Model;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2014 Toni Cieslik <tx@dpool.net>, dpool
 *  Andreas Habel <andreas.habel@dpool.net>, dpool
 *  
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
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
 *
 *
 * @package threesixtyslider
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 */
class Slideritem extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * title
	 *
	 * @var \string
	 */
	protected $title;

	/**
	 * info1
	 *
	 * @var \string
	 */
	protected $info1;

	/**
	 * info1Title
	 *
	 * @var \string
	 */
	protected $info1Title;

	/**
	 * info2
	 *
	 * @var \string
	 */
	protected $info2;

	/**
	 * info2Title
	 *
	 * @var \string
	 */
	protected $info2Title;

	/**
	 * info3
	 *
	 * @var \string
	 */
	protected $info3;

	/**
	 * info3Title
	 *
	 * @var \string
	 */
	protected $info3Title;

	/**
	 * images
	 *
	 * @var \string
	 */
	protected $images;

    /**
     * path
     *
     * @var \string
     */
    protected $path;

	/**
	 * Returns the title
	 *
	 * @return \string $title
	 */
	public function getTitle() {
		return $this->title;
	}

	/**
	 * Sets the title
	 *
	 * @param \string $title
	 * @return void
	 */
	public function setTitle($title) {
		$this->title = $title;
	}

	/**
	 * Returns the info1
	 *
	 * @return \string $info1
	 */
	public function getInfo1() {
		return $this->info1;
	}

	/**
	 * Sets the info1
	 *
	 * @param \string $info1
	 * @return void
	 */
	public function setInfo1($info1) {
		$this->info1 = $info1;
	}

	/**
	 * Returns the info1Title
	 *
	 * @return \string $info1Title
	 */
	public function getInfo1Title() {
		return $this->info1Title;
	}

	/**
	 * Sets the info1Title
	 *
	 * @param \string $info1Title
	 * @return void
	 */
	public function setInfo1Title($info1Title) {
		$this->info1Title = $info1Title;
	}

	/**
	 * Returns the info2
	 *
	 * @return \string $info2
	 */
	public function getInfo2() {
		return $this->info2;
	}

	/**
	 * Sets the info2
	 *
	 * @param \string $info2
	 * @return void
	 */
	public function setInfo2($info2) {
		$this->info2 = $info2;
	}

	/**
	 * Returns the info2Title
	 *
	 * @return \string $info2Title
	 */
	public function getInfo2Title() {
		return $this->info2Title;
	}

	/**
	 * Sets the info2Title
	 *
	 * @param \string $info2Title
	 * @return void
	 */
	public function setInfo2Title($info2Title) {
		$this->info2Title = $info2Title;
	}

	/**
	 * Returns the info3
	 *
	 * @return \string $info3
	 */
	public function getInfo3() {
		return $this->info3;
	}

	/**
	 * Sets the info3
	 *
	 * @param \string $info3
	 * @return void
	 */
	public function setInfo3($info3) {
		$this->info3 = $info3;
	}

	/**
	 * Returns the info3Title
	 *
	 * @return \string $info3Title
	 */
	public function getInfo3Title() {
		return $this->info3Title;
	}

	/**
	 * Sets the info3Title
	 *
	 * @param \string $info3Title
	 * @return void
	 */
	public function setInfo3Title($info3Title) {
		$this->info3Title = $info3Title;
	}

	/**
	 * Returns the images
	 *
	 * @return \string $images
	 */
	public function getImages() {
		return $this->images;
	}

	/**
	 * Sets the images
	 *
	 * @param \string $images
	 * @return void
	 */
	public function setImages($images) {
		$this->images = $images;
	}

    /**
     * Returns the path
     *
     * @return \string $path
     */
    public function getPath() {
        return $this->path;
    }

    /**
     * Sets the path
     *
     * @param \string $path
     * @return void
     */
    public function setPath($path) {
        $this->path = $path;
    }

}
?>