<?php
declare(strict_types=1);

namespace WPHooks;

/**
 * @phpstan-import-type TagsArray from Tags
 * @phpstan-type DocArray array{
 *   description: string,
 *   long_description: string,
 *   long_description_html: string,
 *   tags: TagsArray,
 * }
 */
class Doc {
	/**
	 * @var array
	 * @phpstan-var DocArray
	 */
	protected $data;

	/**
	 * @phpstan-param DocArray $data
	 */
	public static function fromData( array $data ): self {
		$instance = new self();

		return $instance->setData( $data );
	}

	/**
	 * @phpstan-param DocArray $data
	 */
	protected function setData( array $data ): self {
		$this->data = $data;

		return $this;
	}
}
