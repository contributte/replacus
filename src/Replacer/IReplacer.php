<?php declare(strict_types = 1);

namespace Contributte\Replacus\Replacer;

interface IReplacer
{

	/**
	 * @param mixed[] $args
	 */
	public function replace(string $input, array $args = []): string;

}
