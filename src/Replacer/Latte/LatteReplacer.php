<?php declare(strict_types = 1);

namespace Contributte\Replacus\Replacer\Latte;

use Contributte\Replacus\Replacer\IReplacer;
use Latte\Engine;

class LatteReplacer implements IReplacer
{

	/** @var Engine */
	private $latte;

	public function __construct(Engine $latte)
	{
		$this->latte = $latte;
	}

	/**
	 * {@inheritdoc}
	 */
	public function replace(string $input, array $args = []): string
	{
		return $this->latte->renderToString($input, $args);
	}

}
