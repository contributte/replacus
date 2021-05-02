<?php declare(strict_types = 1);

namespace Tests\Cases\Contributte\Replacus;

use Contributte\Replacus\Replacus;
use Tester\Assert;
use Tester\TestCase;

require __DIR__ . '/../bootstrap.php';

class ReplacusTest extends TestCase
{

	public function testFoo(): void
	{
		Assert::same('foo', 'foo');
	}

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
		Assert::same($result, $this->replacus->replace($input, $args));
	}

	/**
	 * @return mixed[]
	 */
	public function validProvider(): iterable
	{
		yield ['{$foo}', 'bar', ['foo' => 'bar']];
		yield ['{$foo}', '1', ['foo' => '1']];
		yield ['{$foo}', '1', ['foo' => 1]];
		yield ['{$foo[0]}{$foo[1]}', 'ab', ['foo' => ['a', 'b']]];
	}

}

(new ReplacusTest())->run();
