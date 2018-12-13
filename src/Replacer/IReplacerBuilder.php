<?php declare(strict_types = 1);

namespace Contributte\Replacus\Replacer;

interface IReplacerBuilder
{

	public function build(): IReplacer;

}
