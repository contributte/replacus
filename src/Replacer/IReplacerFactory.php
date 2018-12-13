<?php declare(strict_types = 1);

namespace Contributte\Replacus\Replacer;

interface IReplacerFactory
{

	public function create(): IReplacer;

}
