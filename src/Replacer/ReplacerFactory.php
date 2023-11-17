<?php declare(strict_types = 1);

namespace Contributte\Replacus\Replacer;

use Contributte\Replacus\Replacer\Latte\LatteReplacerBuilder;

class ReplacerFactory implements IReplacerFactory
{

	protected ?IReplacerBuilder $builder = null;

	public function __construct(?IReplacerBuilder $builder = null)
	{
		$this->builder = $builder;
	}

	public function create(): IReplacer
	{
		return $this->getBuilder()->build();
	}

	protected function getBuilder(): IReplacerBuilder
	{
		if ($this->builder === null) {
			$this->builder = new LatteReplacerBuilder();
		}

		return $this->builder;
	}

}
