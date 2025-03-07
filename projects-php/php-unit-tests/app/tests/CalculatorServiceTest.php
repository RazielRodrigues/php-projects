<?php

declare(strict_types=1);

namespace TDD\tests;

use TDD\CalculatorService;
use TDD\PrintCalculationService;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

class CalculatorServiceTest extends TestCase
{

    private MockObject|PrintCalculationService|null $printCalculationService = null;

    protected function setUp(): void
    {
        $this->printCalculationService = $this->createMock(PrintCalculationService::class);
    }

    protected function tearDown(): void
    {
        $this->printCalculationService = null;
    }

    static function sumProvider() {
        yield [10, 10, 20];
        yield [1, 1, 2];
        yield [2, 2, 4];
    }

    #[Test]
    #[DataProvider('sumProvider')]
    function testSum($x, $y, $expected) {
        $service = new CalculatorService();
        $this->assertSame(
            $service->sum($x,$y),
            $expected
        );
    }

    #[Test]
    function testDivision() {
        $service = new CalculatorService();
        $this->assertEquals(
            $service->division(10,10),
            1
        );
    }

    #[Test]
    function testDivisionException() {
        $this->expectException(\Exception::class);

        $service = new CalculatorService();
        $this->assertSame(
            $service->division(0,10),
            1
        );
    }

    #[Test]
    function testDivisionExceptionInvalid() {
        $this->markTestIncomplete('...');
    }

    #[Test]
    function testSumPrint() {
        $service = new CalculatorService($this->printCalculationService);
        $result = $service->sum(1,1);
        $this->assertSame(
            $result,
            2
        );

        $this->printCalculationService->method('array')->willReturn([
            'result mock: 2'
        ]);

        $print = $service->show($result, 'array');
        $this->assertSame(
            $print,
            [
                'result mock: 2'
            ]
        );

        $this->printCalculationService->method('print')->willReturn(
            'result mock: 2'
        );

        $print = $service->show($result, 'print');
        $this->assertSame(
            $print,
            'result mock: 2'
        );

    }

}
