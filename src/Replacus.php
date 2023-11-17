<?php declare(strict_types = 1);

namespace Contributte\Replacus;

use Contributte\Replacus\Replacer\IReplacer;
use Contributte\Replacus\Replacer\ReplacerFactory;

class Replacus
{

	private IReplacer $replacer;

	public function __construct(IReplacer $replacer)
	{
		$this->replacer = $replacer;
	}

	public static function create(): self
	{
		return new self((new ReplacerFactory())->create());
	}

	/**
	 * @param mixed[] $args
	 */
	public function replace(string $input, array $args = []): string
	{
		return $this->replacer->replace($input, $args);
	}

}
