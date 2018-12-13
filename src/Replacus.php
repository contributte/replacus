<?php declare(strict_types = 1);

namespace Contributte\Replacus;

use Contributte\Replacus\Replacer\IReplacer;
use Contributte\Replacus\Replacer\ReplacerFactory;

class Replacus
{

	/** @var IReplacer */
	private $replacer;

	public static function create(): self
	{
		return new self((new ReplacerFactory())->create());
	}

	public function __construct(IReplacer $replacer)
	{
		$this->replacer = $replacer;
	}

	/**
	 * @param mixed[] $args
	 */
	public function replace(string $input, array $args = []): string
	{
		return $this->replacer->replace($input, $args);
	}

}
