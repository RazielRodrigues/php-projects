<?php

namespace TDD\Test;

require dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

use PHPUnit\Framework\TestCase;
use TDD\ItemsTable;
use \PDO;

class ItemsTableTest extends TestCase
{
    public $PDO, $ItemsTable;
    public function setUp()
    {
        $this->PDO = $this->getConnection();
        $this->createTable();
        $this->populateTable();

        $this->ItemsTable = new ItemsTable($this->PDO);
    }

    public function tearDown()
    {
        unset($this->ItemsTable);
        unset($this->PDO);
    }

    public function testFindForId()
    {
        $id = 1;

        $result = $this->ItemsTable->findForId($id);
        $this->assertInternalType(
            'array',
            $result,
            'The result should always be an array.'
        );
        $this->assertEquals(
            $id,
            $result['id'],
            'The id key/value of the result for id should be equal to the id.'
        );
        $this->assertEquals(
            'Candy',
            $result['name'],
            'The id key/value of the result for name should be equal to `Candy`.'
        );
    }

    public function testFindForIdMock()
    {
        $id = 1;

        $PDOStatement = $this->getMockBuilder('\PDOStatement')
            ->setMethods(['execute', 'fetch'])
            ->getMock();

        $PDOStatement->expects($this->once())
            ->method('execute')
            ->with([$id])
            ->will($this->returnSelf());
        $PDOStatement->expects($this->once())
            ->method('fetch')
            ->with($this->anything())
            ->will($this->returnValue('canary'));

        $PDO = $this->getMockBuilder('\PDO')
            ->setMethods(['prepare'])
            ->disableOriginalConstructor()
            ->getMock();

        $PDO->expects($this->once())
            ->method('prepare')
            ->with($this->stringContains('SELECT * FROM'))
            ->willReturn($PDOStatement);

        $ItemsTable = new ItemsTable($PDO);

        $output = $ItemsTable->findForId($id);

        $this->assertEquals(
            'canary',
            $output,
            'The output for the mocked instance of the PDO and PDOStatment should produce the string `canary`.'
        );
    }

    protected function getConnection()
    {
        return new PDO('sqlite::memory:');
    }

    protected function createTable()
    {
        $query = "
		CREATE TABLE `items` (
			`id`	INTEGER,
			`name`	TEXT,
			`price`	REAL,
			PRIMARY KEY(`id`)
		);
		";
        $this->PDO->query($query);
    }

    protected function populateTable()
    {
        $query = "
		INSERT INTO `items` VALUES (1,'Candy',1.00);
		INSERT INTO `items` VALUES (2,'TShirt',5.34);
		";
        $this->PDO->query($query);
    }
}
