<?php declare(strict_types = 1);

namespace Contributte\Replacus\Replacer\Latte;

use Contributte\Replacus\Replacer\IReplacer;
use Contributte\Replacus\Replacer\IReplacerBuilder;
use Latte\ContentType;
use Latte\Engine;
use Latte\Loaders\StringLoader;

class LatteReplacerBuilder implements IReplacerBuilder
{

	protected ?Engine $latte = null;

	public function __construct(?Engine $latte = null)
	{
		$this->latte = $latte;
	}

	public function addFilter(string $name, callable $callback): void
	{
		$this->getLatte()->addFilter($name, $callback);
	}

	public function build(): IReplacer
	{
		return new LatteReplacer($this->getLatte());
	}

	protected function getLatte(): Engine
	{
		if ($this->latte === null) {
			$this->latte = new Engine();
			$this->latte->setLoader(new StringLoader());
			$this->latte->setAutoRefresh(false);
			$this->latte->setContentType(ContentType::Html);
		}

		return $this->latte;
	}

}
