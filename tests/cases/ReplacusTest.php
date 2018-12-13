<?php declare(strict_types = 1);

namespace Tests\Cases\Contributte\Replacus;

use Contributte\Replacus\Replacus;
use PHPUnit\Framework\TestCase;

class ReplacusTest extends TestCase
{

	/** @var Replacus */
	private $replacus;

	protected function setUp(): void
	{
		parent::setUp();
		$this->replacus = Replacus::create();
	}

	/**
	 * @param mixed   $result
	 * @param mixed[] $args
	 * @dataProvider validProvider
	 */
	public function testReplace(string $input, $result, array $args): void
	{
		$this->assertSame($result, $this->replacus->replace($input, $args));
	}

	/**
	 * @return mixed[]
	 */
	public function validProvider(): iterable
	{
		yield['{$foo}', 'bar', ['foo' => 'bar']];
		yield['{$foo}', '1', ['foo' => '1']];
		yield['{$foo}', '1', ['foo' => 1]];
		yield['{$foo[0]}{$foo[1]}', 'ab', ['foo' => ['a', 'b']]];
	}

}
