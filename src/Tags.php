<?php
declare(strict_types=1);

namespace WPHooks;

/**
 * @phpstan-import-type TagArray from Tag
 * @phpstan-type TagsArray array<int, TagArray>
 */
class Tags {
	/**
	 * @var array
	 * @phpstan-var TagsArray
	 */
	protected $data;

	/**
	 * @phpstan-param TagsArray $data
	 */
	public static function fromData( array $data ): self {
		$instance = new self();

		return $instance->setData( $data );
	}

	/**
	 * @phpstan-param TagsArray $data
	 */
	protected function setData( array $data ): self {
		$this->data = $data;

		return $this;
	}
}
