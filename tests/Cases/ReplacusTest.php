<?php declare(strict_types = 1);

namespace Tests\Cases;

use Contributte\Replacus\Replacus;
use Tester\Assert;
use Tester\TestCase;

require __DIR__ . '/../bootstrap.php';

class ReplacusTest extends TestCase
{

	private Replacus $replacus;

	public function testFoo(): void
	{
		Assert::same('foo', 'foo');
	}

	/**
	 * @param mixed[] $args
	 * @dataProvider validProvider
	 */
	public function testReplace(string $input, mixed $result, array $args): void
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

	protected function setUp(): void
	{
		parent::setUp();

		$this->replacus = Replacus::create();
	}

}

(new ReplacusTest())->run();
